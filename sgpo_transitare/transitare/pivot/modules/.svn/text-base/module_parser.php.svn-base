<?php
/**
 * Contains the general functions we use to generate pages.
 *
 * @package pivot
 * @subpackage modules
 */


// ---------------------------------------------------------------------------
//
// PIVOT - LICENSE:
//
// This file is part of Pivot. Pivot and all its parts are licensed under
// the GPL version 2. see: http://www.pivotlog.net/help/help_about_gpl.php
// for more information.
//
// ---------------------------------------------------------------------------

// don't access directly..
if(!defined('INPIVOT')){ die('not in pivot'); }

// Lamer protection
$currentfile = basename(__FILE__);
require dirname(dirname(__FILE__))."/lamer_protection.php";

/**
 * parses an entry, given an id.
 *
 * The entry is saved, if specified so in $Weblogs.
 * The global var $entry_html contains the parsed html
 */
function parse_entry($id, $weblog="") {
	global $Weblogs, $db, $Current_weblog, $override_template, $Pivot_Vars;

	// Set the current weblog before anything else
	if ($weblog!="") {
		$Current_weblog=$weblog;
	}

	$entry_exists = true;

	// if no entry is set, or the passed id differs from the one that's in $db->entry
	// we'll have to load it..
	if ( (!isset($db->entry['code'])) || ($id != $db->entry['code'])  ) {

		$db = new db(TRUE);
		if ($db->entry_exists($id)) {
			$entry = $db->read_entry($id);
		} else {
			$entry_exists = false;
		}
	}

	// Empty id's aren't allowed:
	if ($id == "") {
		$entry_exists = false;
	}

	if ($entry_exists && ($db->entry['status']!="publish")) {
		$entry_exists = false;
	}

	// If the entry can't be displayed, show the error message using the
	// current weblog settings.
	if (!$entry_exists) {
		if (empty($Current_weblog)) {
			reset($Weblogs);
			$Current_weblog = key($Weblogs);
		}
		// Switch to weblog's language in case needed for error messages
		LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);
		piv_error(lang('error','entry_404'), lang('error','entry_404_desc'),0);
	}

	$allcats = cfg_cats();

	$access_disallowed = false;

	// check to see if we need to be logged in... but not if previewing
	if (!defined('PREVIEW')) {
		foreach ($db->entry['category'] as $cat) {
			if ( ($allcats[$cat]['nonpublic']==1) && ( snippet_registered() != "registered") ) {
				$access_disallowed = true;
			}
		}
	}

	// figure out what weblogs this entry is in
	if ($weblog!="") {
		// if we override the template by setting a weblog, load it here.
		$template= $Weblogs[$weblog]['entry_template'];
	} else {
		$in_weblogs = find_weblogs_with_cat($db->entry['category']);

		// either select a weblog that publishes this cat, or else just select the first.
		if (count($in_weblogs)==0) {
			reset($Weblogs);
			$Current_weblog = key($Weblogs);
		} else {
			$Current_weblog=$in_weblogs[0];

		}

		// if we override a template by explicitly overriding it, load it here.
		if (isset($override_template)) {
			$template = $override_template;
		} else {
			$template= $Weblogs[$Current_weblog]['entry_template'];
		}
	}
        
	// Switch to weblog's language immediately in case needed for error messages
	LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

	// Now the current weblog is defined and we can display the error page
	// if the user wasn't registered for non-public category
	if ($access_disallowed) {	
		piv_error(lang('error','reg_required'), snippet_register_as_visitor_link());
	}

	// If live entries disabled, and we're _not_ previewing, redirect to static page. 
	if ( (!$Weblogs[$Current_weblog]['live_entries']) && (isset($Pivot_Vars['id'])) ) {
		redirect(make_filelink($id, $Current_weblog,""));
	}
        

	$html = generate_html($template, $Current_weblog);

	return $html;

}

/**
 * Returns a piece of HTML that is prepended on written files. It triggers the
 * first line of defense against spammers.
 *
 * @param string $html
 * @return string
 */
function prepend_spamblock_code($html)  {
	global $pivot_path;
	$spamblock_code = sprintf('<?php
	// First line defense.
	if (file_exists("%sfirst_defense.php")) {
		include_once("%sfirst_defense.php");
		block_refererspam();
	}
	?>',$pivot_path,$pivot_path);

	$output = $spamblock_code.$html;
	return $output;
	}

/**
 * Generates HTML for a given template and weblog.
 */
function generate_html($template, $weblog) {
	global $Cfg, $db, $Weblogs, $Current_weblog, $set_output_paths, $template_html;
	
	// Generate some html
	$template_html = load_template($template);

	$Current_weblog = $weblog;

	// should be unset before each archive and frontpage..
	$set_output_paths=FALSE;

	if (!($template_html)) {
		ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
	} else {
		$output = "[[tick]]".$template_html;
		$output = parse_step4($output);
		$output = tidy_html($output);
	}

	// Spam protection
	if ($Cfg["hashcash"] == 1) {
		$output = add_hashcash_topage($output);
	} 

	// save the entry, if necessary..
	if ($Weblogs[$Current_weblog]['live_entries']<>1) {

		$filename =  make_filename();

		makedir($Weblogs[$Current_weblog]['entry_path']);

		debug("Write entry file: $filename");
		if(strstr($filename, ".php") != false)  {
			$output = prepend_spamblock_code($output);
		}
		write_file($filename, $output);

	}

	return $output;
}


/**
 * Generates frontpage for a given weblog.
 */
function generate_frontpage($weblog) {
	global $db, $Current_weblog, $Weblogs, $done_archives, $totalfiles, $Cfg, $Allow_RSS, $set_output_paths, $template_html;

	if (!isset($db)) {
		$db = new db();
	}

	// make a key for this page
	$archive_key = $weblog."-front";

	// return, if this page has already been made.
	if ( isset($done_archives[$archive_key]) && $done_archives[$archive_key] ) {
		return;
	} else {
		$done_archives[$archive_key]=TRUE;
	}

	// switch to weblog's language
	LoadWeblogLanguage($Weblogs[$weblog]['language']);

	$template_html = load_template($Weblogs[$weblog]['front_template']);

	// Set current weblog (and keep old)
	$Current_weblog_orig = $Current_weblog;
	$Current_weblog = $weblog;

	if ( ($Weblogs[$weblog]['rss']==1) && ($Allow_RSS) ) {
		start_rss();
	}

	// should be unset before each archive and frontpage..
	$set_output_paths=FALSE;

	if (!($template_html)) {
		ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
	} else {
		$output = "[[tick]]".$template_html;
		$output = parse_step4($output);
		$output = tidy_html($output);
	}

	$filename = $Weblogs[$weblog]['front_path'] . $Weblogs[$weblog]['front_filename'];

	//make sure the directory exists
	makedir($Weblogs[$weblog]['front_path']);

	debug("Write frontpage file: $filename");
	if(strstr($filename, ".php"))  {
		$output = prepend_spamblock_code($output);
		}
	write_file($filename, $output);

	$totalfiles++;
	debug("total_f: $filename - ".getcwd());

	// finish RSS
	if ( ($Weblogs[$weblog]['rss']==1) && ($Allow_RSS) ) {
		finish_rss();
	}

	$weblogname= urlencode($Weblogs[$weblog]['name']);
	$filename = urlencode(fixpath($filename));

	// Reset current weblog (back to old)
	$Current_weblog = $Current_weblog_orig;

	return $filename;

}


/**
 * Generates a live page for a given weblog/category/template/user
 */
function generate_live_page($weblog="", $category="", $template="", $user="") {
	global $Current_weblog, $Paths, $Weblogs, $Cfg, $set_output_paths, $db, $template_html;

	// Switch to a weblog that was passed as parameter. Else check if
	// the category passed as parameter matches a weblog -
	// else just select the first.
	if (isset($Weblogs[$weblog])) {
		$Current_weblog = $weblog;
	} else if (!empty($category)) {
		$in_weblogs = find_weblogs_with_cat($category);
		if (count($in_weblogs)==0) {
		    reset($Weblogs);
		    $Current_weblog = key($Weblogs);
		} else {
		    $Current_weblog = $in_weblogs[0];
		}
	} else {
		reset ($Weblogs);
		$Current_weblog = (key($Weblogs));
	}

	$allcats = cfg_cats();
	$requirelogin = FALSE;

	// perhaps filter on categories..
	if (!$category=="") {
		$category=explode(",", $category);

		foreach ($category as $key => $val) {
			if ($allcats[$val]['nonpublic']==1) { $requirelogin = TRUE; }
			$category[$key] = trim($val);
		}

		// Try to squeeze filtered cats into 'standard'.. Else pick the first subweblog..
		if (isset($Weblogs[$Current_weblog]['sub_weblog']['standard'])) {
			$Weblogs[$Current_weblog]['sub_weblog']['standard']['categories'] = $category;
		} else {
			$subweblog = (key($Weblogs[$Current_weblog]['sub_weblog']));
			$Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['categories'] = $category;
		}
	}

	// switch to weblog's language immediately in case needed for error message
	LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

	if ( ($requirelogin) && ( snippet_registered() != "registered") ) {
		piv_error(lang('error','reg_required'), snippet_register_as_visitor_link());
	}

	$db = new db(TRUE);

	if ( $template != "") {
		$template_html = load_template($template);
	} else 	if ( ($weblog=="") && ($category=="") && ($user=="")) {
		$template_html = load_template($Weblogs[$Current_weblog]['front_template']);
	} else {
		$template_html = load_template($Weblogs[$Current_weblog]['archive_template']);
	}

	// should be unset before each archive and frontpage..
	$set_output_paths=FALSE;

	if (!($template_html)) {
		ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
	} else {

		$output = "[[tick]]".$template_html;
		$output = parse_step4($output);
		$output = tidy_html($output);
	}

	return $output;

}


/**
 * Generates an archive for a given weblog and date.
 */
function generate_archive($weblog, $date) {
	global $Current_weblog, $Weblogs, $done_archives, $totalfiles, $set_output_paths, $template_html;

	// make a key for this archive
	$archive_key = $weblog."-".make_archive_name($date);
	
	$filename = $Weblogs[$weblog]['archive_path'] . make_archive_name($date);

	// return, if this archive has already been made.
	if ( isset($done_archives[$archive_key]) && $done_archives[$archive_key] ) {
		return;
	// also return, if the file for this archive was modified within the
	// latest 15 seconds. This save *a lot* of processing.
	} elseif ((time() - filemtime($filename)) < 15 ) {
		return;
	} else {
		$done_archives[$archive_key]=TRUE;
	}

	// switch to weblog's language
	LoadWeblogLanguage($Weblogs[$weblog]['language']);

	$template_html = load_template($Weblogs[$weblog]['archive_template']);
	$template_html = str_replace("[[weblog", "[[archive", $template_html);
	$template_html = str_replace("[[subweblog", "[[archive", $template_html);


	// should be unset before each archive and frontpage..
	$set_output_paths=FALSE;

	if (!($template_html)) {
		ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
	} else {
		$output = "[[tick]]".$template_html;
		$output = parse_step4($output);
		$output = tidy_html($output);
		if(strstr($filename, ".php"))  {
			$output = prepend_spamblock_code($output);
			}
	}

	//make sure the directory exists
	makedir($Weblogs[$weblog]['archive_path']);

	debug("Write archive file: $filename");
	write_file($filename, $output);

	$totalfiles++;
	debug("total_a: $date");
}

/**
 * Generates entries, frontpages and archives for a given entry ID.
 *
 * @uses generate_html generates entry (HTML)
 * @uses generate_archive generates archive page
 * @uses generate_frontpage generates front page
 */
function generate_pages($id, $singlepage=TRUE, $frontpage=TRUE, $archive=TRUE, $ping=FALSE, $rss= TRUE) {
	global $db, $Weblogs, $Current_weblog, $Allow_RSS;

	//LoadTempLanguage();

	$Allow_RSS = $rss;


	// load an entry
	$entry = $db->read_entry($id, TRUE);

	$in_weblogs = find_weblogs_with_cat($entry['category']);


	foreach ($in_weblogs as $in_weblog) {

		$entry = $db->read_entry($id);
		$org_date = $entry['date'];

		$Current_weblog=$in_weblog;
		$template= $Weblogs[$in_weblog]['entry_template'];

		// we generate the single (static) entry only if it's published
		if (($Weblogs[$in_weblog]['live_entries']<>1) && ($entry['status'] == 'publish')) {
			generate_html($template, $in_weblog);
		}

		// generate the archives (for this date) only if the entry is
		// published.
		if ($archive && ($Weblogs[$Current_weblog]['archive_unit']!='none') &&
			($entry['status'] == 'publish'))  {
			generate_archive($in_weblog, $org_date);
		}

		// generate the frontpage
		if ($frontpage) {
			$filename = generate_frontpage($in_weblog);
		}


		LoadUserLanguage();

	}

	// if we need to ping. do here:
	if ($ping) {
		open_ping_window($in_weblogs);
	}


}


// ----------------------------------------------------
// Then the functions in which the actual parsing takes place
// ----------------------------------------------------

/**
 * Parsing the joint text of templates and entry text.
 */
function parse_step4 ($text) {
	global $parse_recursion;

	// We keep a counter to prevent infinite loops. The maximum amount of
	// recursion is 4.. We also set $Paths['log_url'] the first time.
	if (isset($parse_recursion)) {
		$parse_recursion++;
	} else {
		$parse_recursion = 1;
		set_paths_log_url();
	}

	if ($parse_recursion > 4) { return $text; }

	preg_match_all ("|\[\[(.*)\]\]|U", $text, $match, PREG_PATTERN_ORDER);

	foreach($match[1] as $snippet_code) {
		$snippet_replace= snippet_parse ( $snippet_code );
		$text=str_replace("[[".$snippet_code."]]", $snippet_replace, $text);
	}

	$parse_recursion = 0;

	return $text;
}

/**
 * Parsing intro or body
 */
function parse_intro_or_body ($text, $strip="") {
	global $db, $Weblogs, $Current_weblog;
	
	$output = $text;

	if ($strip=="strip") {
		$output = strip_tags($output,"<a><b><i><u><embed><strong><ol><li><ul>");
	}

	$output = parse_step4( $output );

	/* text processing: nl2br, Textile or Markdown/SmartyPants
	   We ensure that newlines aren't converted to br elements in script 
	   blocks - currently handling PHP and JavaScript.
	   More exclusions will/can be added.
	*/
	
	// Use the ACK (006) ASCII symbol to replace all script elements temporarily
	$output = str_replace("\x06", "", $output);
	$regexp = "#(<script[ >].*?</script>)|(<\?php\s.*?\?>)#is";
	preg_match_all($regexp, $output, $scripts);
	$output = preg_replace($regexp, "\x06", $output); 

	if ($db->entry['convert_lb']==1) {
		$output = strip_trailing_space(nl2br( $output ));
	} else if ($db->entry['convert_lb']==2) {
		$output = pivot_textile( $output );
	} else if ( ($db->entry['convert_lb']==3) || ($db->entry['convert_lb']==4) ) {
		$output = pivot_markdown( $output, $db->entry['convert_lb'] );
	}
        
	// Put captured scripts back into the output
	foreach ($scripts[0] as $script) {
		$output = preg_replace("/\x06/", $script, $output, 1);
	}

	// targetblank
	if ($Weblogs[$Current_weblog]['target_blank']>0) {
		$output =targetblank( $output );
	}

	// emoticons..
	if ($Weblogs[$Current_weblog]['emoticons']==1) {
		$output=emoticonize( $output );
	}

	// There's a silly quirk in TinyMCE, that prevents transparent Flash. We
	// need to fix this, to make Youtube videos work properly.
	$output = str_replace("<param name=\"wmode\" value=\"\" />", "<param name=\"wmode\" value=\"transparent\" />", $output);
	$output = str_replace(" wmode=\"\" ", " wmode=\"transparent\" ", $output);
	
 	return tidy_html($output);

}

/**
 * These functions are used to tidy up the general nastyness
 * in html generated by wysiwyg editors in IE and Mozilla.
 *
 * @param string $text
 * @param boolean $thorough
 *
 * @return string
 */
function tidy_html($text, $thorough=FALSE) {

	// Change <br /><br /> into </p><p>
	/*$text = preg_replace("/<br( [^>]*)?>\s*<br( [^>]*)?>/Ui", "</p>\n<p>", $text);*/

	// clean up empty paragraphs
	$text = preg_replace("/<p>[\s|&nbsp;]*<\/p>/Ui", "</p>", $text);

	// Clean up loose br's inside of paragraphs.
	/* $text = preg_replace("/<p>\s*<br( [^>]*)?>/Ui", "<p>", $text);
	$text = preg_replace("/<br( [^>]*)?>\s*<\/p>/Ui", "</p>", $text);*/

	// Clean up loose br's outside of paragraphs.
	/*$text = preg_replace("/<br( [^>]*)?>\s*<p>/Ui", "<p>", $text);
	$text = preg_replace("/<\/p>\s*<br( [^>]*)?>/Ui", "</p>", $text);*/

	// clean <p><p> and </p></p>
	$text = preg_replace("/<p( [^>]*)?>\s*<p( [^>]*)?>/Ui", "<p\\1\\2>", $text);
	$text = preg_replace("/<\/p>\s*<\/p>/Ui", "</p>\n", $text);

	// after this, we might end up starting with a closing </p>. We don't want that.
	$text = preg_replace("/^\s*<\/p>/Ui", "", $text);

	// clean up <div>'s in <p>'s
	$text = preg_replace("/<p>\s*<div(.*)>(.*)<\/div>\s*<\/p>/Ui", "<div\\1>\\2</div>\n", $text);

	$text = preg_replace_callback("/<p>(\s*)<div(.*)>(.*)<\/div>(\s*)<\/p>/Ui", "tidy_html_callback_nesteddivs", $text);

	if ($thorough) {
		$text = preg_replace_callback("/<(.*)>/Ui", 'tidy_html_callback', $text);
	}

	return $text;

}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback($match) {

	$match = $match[0];

	// first, change the tag to lowercase (added the "." because otherwise it breaks my
	// editor's syntax highlighting)
	$match = preg_replace_callback("/<(\/"."*)([a-z]+)([\s|>])/i", "tidy_html_callback_changetag", $match);

	//then, change attributes to lowercase, making sure they are quoted..
	$match = preg_replace_callback('/(\s[a-z]+)="(([^"\\\\]|\\.)+)"/i', "tidy_html_callback_doublequote", $match);
	$match = preg_replace_callback('/(\s[a-z]+)=([a-z0-9]+)/i', "tidy_html_callback_doublequote", $match);
	$match = preg_replace_callback("/(\s[a-z]+)='(([^'\\\\]|\\.)+)'/i", "tidy_html_callback_singlequote", $match);

	//this one doesn't work..
	//$match = preg_replace_callback("/\s([a-z]+)=([\s>])/i", "tidy_html_callback_novalueattr", $match);

	// change 'optional' non closing tags to resemble proper xhtml..
	$match = preg_replace("/<br([^\/]*)>/Ui", "<br \\1 />", $match);
	$match = preg_replace("/<hr([^\/]*)>/Ui", "<hr \\1 />", $match);
	$match = preg_replace("/<img([^\/]*)>/Ui", "<img \\1 />", $match);
	$match = preg_replace("/<input([^\/]*)>/Ui", "<input \\1 />", $match);

	return $match;
}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback_changetag($match) {
	return "<".$match[1].strtolower($match[2]).$match[3];
}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback_doublequote($match) {
	return strtolower($match[1])."=\"".$match[2]."\"";
}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback_singlequote($match) {
	return strtolower($match[1])."='".$match[2]."'";
}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback_novalueattr($match) {
	return " ".strtolower($match[1])."='".$match[1]."'".$match[2];
}

/**
 * Helper function for tidy_html.
 *
 * @see tidy_html
 * @param string $match
 * @return string
 */
function tidy_html_callback_nesteddivs($match) {

	$output="";

	if (strlen(trim($match[1]))>2) { $output .= "<p>".trim($match[1])."</p>\n"; }

	$output .= "<div".$match[2].">".$match[3]."</div>\n";

	if (strlen(trim($match[4]))>2) { $output .= "<p>".trim($match[1])."</p>\n"; }

	return $output;
}



// -- End tidy functions ---------------


/**
 * Parsing snippets in templates
 */
function snippet_parse( $snippet_code ) {
    global $Cfg, $Paths;

    $snippet_code = trim($snippet_code);
    @list( $command, $para1, $para2, $para3, $para4, $para5, $para6, $para7, $para8 ) = preg_split("/:\s?(?!\/\/)/",$snippet_code,-1 );
    // Get only the parameters that are really set (to avoid killing default
    // parameters values in the snippets).
    $params = "";
    for ($i=1; $i<9; $i++) {
        if (isset(${"para$i"})) {
            $params .= "\$para$i,";
        } else {
            break;
        }
    }
    $last = strlen($params)-1;
    if ($params{$last} == ",") {
        $params = substr($params,0,$last);
    }
    $insert   = '';
    $command  = str_replace( '-','_', trim($command) );
    $command  = str_replace( '/','slash',$command );
    $function = 'snippet_'.$command;

    // has the snippet already been declared?
    if( function_exists( $function )) {
	// Once again avoiding nuking default parameters values in the snippets.
	if (!empty($params)) {
	    eval("\$insert = \$function( $params );");
	} else {
	    $insert = $function();
	}
    } else {
        // determine the path to the extensions..

        $extensions_path = $Paths['extensions_path'];

        // do the 'extensions/snippets/ directories' exist?
        if( file_exists( realpath(  $extensions_path . 'snippets/snippet_' . $command.'.php' ))) {
            // pull in the snippet
            include_once( realpath( $extensions_path . 'snippets/snippet_' . $command.'.php' ));
            // final test
            if( function_exists( $function )) {
		// Once again avoiding nuking default parameters values in the snippets.
		if (!empty($params)) {
	            eval("\$insert = \$function( $params );");
		} else {
		    $insert = $function();
		}
            } else {
            	$insert = '<!-- snippet ='.$command.'= is not defined -->';
            	debug( 'snippeterror: '.$command );
            }
        } else {
            $insert = '<!-- snippet ='.$command.'= is not defined because file doesn\'t exist -->';
            debug( 'snippeterror: '.$command );
        }
    }
   
    
    return $insert;
}


// ----------------------------------------------------
// Finally some auxillary functions.
// ----------------------------------------------------

/**
 * Loads a given template.
 */
function load_template($basename) {
	global $template_cache, $Paths;

	$filename = $Paths['templates_path'].$basename;

	if (isset($template_cache[$basename])) {
		return $template_cache[$basename];
	} else {

		if (!(file_exists($filename))) {
			$filename = $Paths['templates_path']."entrypage_template.html";
		}

		$filetext=implode("", file($filename));

		$template_cache[$basename]=$filetext;

		return $filetext;
	}

}

/**
 * Removes all subweblog tags, and replaces one of the subweblogs,
 * "standard" if present else the first, with the input replacement HTML.
 *
 * @param string $template_html
 * @param string $replace_html
 * @return string
 */ 
function replace_subweblogs_templates($template_html,$replace_html) {
	if (preg_match_all('/\[\[(sub)?weblog:(.*)?(:[^]]*)?\]\]/siU', $template_html, $match)) {
		if (count($match[1])==1) {
			$template_html = str_replace($match[0][0], $replace_html, $template_html);
	    	} else {
		    	if (preg_match("/\[\[(sub)?weblog:standard(:[^]]*)?\]\]/siU", $template_html) > 0) {
				$template_html = preg_replace("/\[\[(sub)?weblog:standard(:[^]]*)?\]\]/siU",
					$replace_html, $template_html);
	    		} else {
		    		$template_html = str_replace($match[0][0], $replace_html, $template_html);
	    		}
		    	foreach ($match[0] as $name) {
			    	$template_html = str_replace($name, "", $template_html);
			}
		}
	}
	return $template_html;
}

// =============================================
// the functions below are used for processing the <cms> tags
// into <html>.
// =============================================

/**
 * Process CMS tags into HTML for weblogs.
 */
function cms_tag_weblog($tag_attr, $tag_default){
	global $db,  $Cfg, $Paths, $current_date, $Weblogs, $Current_weblog, $Current_subweblog, 
		$diffdate_lastformat, $even_odd, $Pivot_Vars;

	// some people use [[subweblog]] inside an entry page. to allow this
	// we need to 'store' the entry, make the subweblog, and 'restore'
	// the entry..
	if (isset($db->entry)) {     $temp_entry = $db->entry; }

	$order=get_attr_value('order', $tag_attr);
	if ($order=="firsttolast") {
		$order="asc";
	} else {
		$order="desc";
	}

	$countshow=0;
	$output="";

	// to force the 'diffdate' to start anew on each (sub)weblog..
	$diffdate_lastformat="";

	$subweblog=get_attr_value('subweblog', $tag_attr);
	$Current_subweblog = $subweblog;
	$template = $Paths['templates_path'].$Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['template'];

	if (file_exists($template)) {
		$tag_default_orig= implode("", file($template));
	} else {
		piv_error("File does not exist!", "Could not load template file '" . $template .
			"'. Make sure it exists, and has the right permissions", 0);
	}

	// safety check to prevent recursive weblogs..
	if (preg_match("/\[\[weblog:(.*)(:[0-9]*)?\]\]/mUi", $tag_default_orig)) {
		 $tag_default_orig = "<p>(You can't recursively use [weblogs]!)</p>";
	}

	$show=get_attr_value('showme', $tag_attr);
        if ($show=="") {
		$show = $Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['num_entries'];
	}
	$cats = $Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['categories'];
	$offset = $Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['offset'];

	// If called from a 'dynamic archive page', the offset needs to be taken into account.
	if ($Pivot_Vars['o']>0) {
		$offset += 	$Pivot_Vars['o'];
	}


	$db->disallow_write();
	// Select published entries according to order, default is descending
	if ($order == 'asc') {
		$list_entries = $db->getlist($show,$offset,"",$cats,TRUE,"","publish");
	} else {
		$list_entries = $db->getlist_end(-$show-$offset,"",$cats,TRUE,"publish");
	}

	if (count($list_entries)>0) {
		foreach ($list_entries as $list_entry) {
			// If descending order we need to handle the offset:
			// if offset > 0, we need to skip this entry
			if (($order=="desc") && ($offset>0)) {
				$offset--;
				continue;
			}

			$entry = $db->read_entry($list_entry['code'], TRUE);
			if ( (!isset($entry['status'])) || ($entry['status']=='publish') ) {

				// for 'even' and 'odd' messages..
				if ($even_odd == 1) {
					$even_odd = 0;
				} else {
					$even_odd = 1;
				}

				// include an anchor, if it's not set manually with the [[id_anchor]] tag
				if (strpos($tag_default_orig, "[[id_anchor]]")==0) {
					$entry_html = '<span id="e'.$db->entry['code'].'"></span>';
				} else {
					$entry_html ="";
				}

				$entry_html .= parse_step4($tag_default_orig);

				$output .= $entry_html."\n";
                                
				if ($Weblogs[$Current_weblog]['rss']==1) {
					add_rss($entry['code'], $entry['date'], $entry['title'], $entry['introduction'], $entry['body'], $entry['user'], $entry['category'] );
				}
			}
		}
	}

	// perhaps restore the entry
	if (isset($temp_entry)) { $db->set_entry($temp_entry); }

	return $output;

}

/**
 * Process CMS tags into HTML for archives.
 */
function cms_tag_archive($tag_attr, $tag_default){
	global $db,  $Cfg, $Paths, $current_date, $Weblogs, $Current_weblog, $diffdate_lastformat, $even_odd;

	$order=get_attr_value('order', $tag_attr);
	if ($order=="firsttolast") {
		$order="asc";
	} else {
		$order="desc";
	}

	$countshow=0;
	$output="";

	// to force the 'diffdate' to start anew on each (sub)weblog..
	$diffdate_lastformat="";

	$subweblog=get_attr_value('subweblog', $tag_attr);
	$template = $Paths['templates_path'].$Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['template'];

	if ( file_exists($template) && ($Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['template'] != "") ) {
		$tag_default_orig= implode("", file($template));
	} else {
		debug("cant open file: ".$template);
		debug(" - for weblog ".$Current_weblog.", subweblog ".$subweblog . " - $tag_attr, $tag_default - ");
		$tag_default_orig = "";

		//debug_printbacktrace();

	}

	// safety check to prevent recursive weblogs..
	if (preg_match("/\[\[weblog:(.*)(:[0-9]*)?\]\]/mUi", $tag_default_orig)) {
		 $tag_default_orig = "<p>(You can't recursively use [weblogs]!)</p>";
	}

	$show = $Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['num_entries'];
	$cats = $Weblogs[$Current_weblog]['sub_weblog'][$subweblog]['categories'];

	list($start_date, $stop_date) = getdaterange($db->entry['date'], $Weblogs[$Current_weblog]['archive_unit'] );

	debug("Archive: start $start_date, stop $stop_date, entry ".$db->entry['code']);

	$db->disallow_write();
	if ($order == 'asc') {
		$list_entries = $db->getlist_range($start_date, $stop_date,"",$cats, TRUE,"publish");
	} else {
		$list_entries = $db->getlist_range($start_date, $stop_date,"",$cats, FALSE,"publish");
	}

	foreach ($list_entries as $list_entry) {
		$entry = $db->read_entry($list_entry['code']);

		if ( (!isset($entry['status'])) || ($entry['status']=='publish') ) {

				// for 'even' and 'odd' messages..
				if ($even_odd == 1) {
					$even_odd = 0;
				} else {
					$even_odd = 1;
				}

				// include an anchor, if it's not set manually with the [[id_anchor]] tag
				if (strpos($tag_default_orig, "[[id_anchor]]")==0) {
					$entry_html = '<span id="e'.$db->entry['code'].'"></span>';
				} else {
					$entry_html ="";
				}

				$entry_html .= parse_step4($tag_default_orig);
			$output.=$entry_html;
		}
	}

	return $output;

}

/**
 * Process CMS tags into HTML for comments.
 */
function cms_tag_comments($tag_attr, $tag_default){
	global $db, $row, $block, $Current_weblog, $Weblogs, $Paths;

	if (strlen($Weblogs[$Current_weblog]['comment_format'])>1) {
		$format = $Weblogs[$Current_weblog]['comment_format'];
	} else {
		$format = "%anchor%<p>%comment%</p><p><small><b>%name%</b> %email% %url% - %date%</small></p>";
	}

	if (strlen($Weblogs[$Current_weblog]['comment_reply'])>1) {
		$format_reply = $Weblogs[$Current_weblog]['comment_reply'];
	} else {
		$format_reply = "Reply on %name%";
	}

	if (strlen($Weblogs[$Current_weblog]['comment_forward'])>1) {
		$format_forward = $Weblogs[$Current_weblog]['comment_forward'];
	} else {
		$format_forward = "Replied on by %name%";
	}


	if (strlen($Weblogs[$Current_weblog]['comment_backward'])>1) {
		$format_backward = $Weblogs[$Current_weblog]['comment_backward'];
	} else {
		$format_backward = "This is a reply on %name%";
	}

	// If %editlink% is not present, insert it right after %date%..
	if (strpos($format, "%editlink%")==0){
		$format = str_replace("%date%", "%date% %editlink%", $format);
	}



	$content_code=get_attr_value('content_code', $tag_attr);
	$nocomments=get_attr_value('ifnocomments', $tag_attr);
	$comments=get_attr_value('ifcomments', $tag_attr);
	$order=get_attr_value('order', $tag_attr);
	$entrydate=$Weblogs[$Current_weblog]['fulldate_format'];


	if ($content_code=="") { $content_code=$row["code"]; }

	$last_comment="";

	if ((isset($db->entry['comments']))&&(count($db->entry['comments'])>0)) {

		// first, make a list of comment-on-comments..
		$crosslink = array();

		foreach ($db->entry['comments'] as $count => $temp_row) {
			if(preg_match("/\[(.*):([0-9]*)\]/Ui",$temp_row['comment'], $matches)) {
				$crosslink[$count+1] = $matches[2];
				// remove [name:1] from comment..
				$db->entry['comments'][$count]['comment'] = str_replace($matches[0], "", $db->entry['comments'][$count]['comment']);
			}
		}
		
		$last_count = count($db->entry['comments']) - 1;
		foreach ($db->entry['comments'] as $count => $temp_row) {

			/**
			 * If we get here, this is a record we have to output in some form..
			 */
			$temp_row['name'] = strip_tags($temp_row['name']);
			$temp_row['email'] = strip_tags($temp_row['email']);
			$temp_row['url'] = strip_tags($temp_row['url']);


			// Set the flag to display the 'awaiting moderation' text.
			if ($temp_row["moderate"]==1) {
				$awaiting_moderation = true;
			}

			// Check if the comment is different than the last one, if the author's
			// IP isn't blocked, and if the comment isn't waiting for moderation.
			if ( ($temp_row["ip"].$temp_row["comment"]!=$last_comment) &&
					(!(ip_check_block($temp_row["ip"]))) && 
					( ($temp_row["moderate"]!=1) || ($temp_row['showpreview']==1) )  ){

				/**
				 * make email link..
				 */
				if (isemail($temp_row["email"]) && !$temp_row["discreet"]) {
					$email_format = "(".encodemail_link($temp_row["email"], lang('email'), $temp_row["name"]).")";
					$emailtoname = encodemail_link($temp_row["email"], $temp_row["name"], $temp_row["name"]);
				} else {
					$email_format = "";
					$emailtoname = $temp_row["name"];
				}


				if (isemail($temp_row["email"])) {

					$grav_email = $temp_row["email"];
					$grav_default=$Weblogs[$Current_weblog]['comment_gravatardefault'];
					$grav_html=stripslashes($Weblogs[$Current_weblog]['comment_gravatarhtml']);
					$grav_size=$Weblogs[$Current_weblog]['comment_gravatarsize'];

					if ($grav_default == "") { $grav_default = "http://www.pivotlog.net/images/gravatar.gif"; }

					if ($grav_html == "") {
						$grav_html = '<img src="%img%" align="right" valign="top" hspace="2" vspace="2" />';
					}

					if ($grav_size == "") { $grav_size = 48; }


					$grav_imgurl = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5($grav_email) .
										"&amp;default=" . urlencode($grav_default) . "&amp;size=" . $grav_size;

					$grav_url = str_replace("%img%", $grav_imgurl, $grav_html);
				} else {
					$grav_url = "";
				}

				/**
				 * make url link..
				 */
				if (isurl($temp_row["url"])) {
					if (strpos($temp_row["url"], "ttp://") < 1 ) {
						$temp_row["url"]="http://".$temp_row["url"];
					}

					$target= ($Weblogs[$Current_weblog]['target_blank']==1) ? " target='_blank'" : "";

					$temp_row["url_title"]= str_replace('http://', '', $temp_row["url"]);

					//perhaps redirect the link..
					if (isset($Weblogs[$Current_weblog]['lastcomm_redirect'])  && ($Weblogs[$Current_weblog]['lastcomm_redirect']==1) ) {
						$target .= " rel=\"nofollow\" ";
					}

					$url_format = sprintf("(<a href='%s' $target title='%s'>%s</a>)",
							$temp_row["url"], $temp_row["url_title"], lang('url'));
					$urltoname = sprintf("<a href='%s' $target title='%s'>%s</a>",
							$temp_row["url"], $temp_row["url_title"], $temp_row['name']);
				} else {
					$url_format = "";
					$urltoname = $temp_row["name"];
				}


				/**
				 * Make 'edit' and 'delete' links..
				 */
				$editlink = get_editcommentlink($db->entry['code'], $count);


				/**
				 * make a 'registered user' span..
				 */
				if ($temp_row['registered']==1) {
					$name = "<span class='registered'>[" . $temp_row["name"] . "]</span>";
				} else {
					$name = $temp_row["name"];
				}

				/**
				 * make quote link..
				 */
				$quote = sprintf("<a href='#form' onclick='javascript:var pv=document.getElementsByName(\"piv_comment\");pv[0].value=\"[%s:%s] \"+pv[0].value;'>%s</a>",
					$temp_row["name"], $count+1, $format_reply );

				// make backward link..
				if (isset($crosslink[$count+1])) {
					$to = $db->entry['comments'][ ($crosslink[$count+1] - 1) ];
					$backward_text = str_replace("%name%", $to['name'], $format_backward);
					$backward_anchor = safe_string($to["name"],TRUE) ."-". format_date($to["date"],"%ye%%month%%day%%hour24%%minute%");
					$backward_link = sprintf("<a href='#%s'>%s</a>", $backward_anchor, $backward_text);
				} else {
					$backward_link = "";
				}

				/**
				 * make forward link..
				 */
				$forward_link = "";
				foreach ($crosslink as $key => $val) {
					if (($val-1) == $count) {
						$from = $db->entry['comments'][ ($key-1) ];
						$forward_text = str_replace("%name%", $from['name'], $format_forward);
						$forward_anchor = safe_string($from["name"],TRUE) ."-". format_date($from["date"],"%ye%%month%%day%%hour24%%minute%");
						$forward_link .= sprintf("<a href='#%s'>%s</a> ", $forward_anchor, $forward_text);
					}
				}

				/**
				 * make anchor
				 */
				$anchor = "<a id=\"" . safe_string($temp_row["name"],TRUE) ."-". format_date($temp_row["date"],"%ye%%month%%day%%hour24%%minute%") ."\"></a>";


				/**
				 * substite all of the parameters into the comment, and add it to the output.
				 */
				$this_tag= $format;
				$this_tag= str_replace("%quote%", $quote, $this_tag);
				$this_tag= str_replace("%quoted-back%", $backward_link, $this_tag);
				$this_tag= str_replace("%quoted-forward%", $forward_link, $this_tag);
				$this_tag= str_replace("%count%", $count+1, $this_tag);
				$this_tag= str_replace("%code%", $db->entry['code'], $this_tag);
				$this_tag= str_replace("%even-odd%", ( (($count)%2) ? 'even' : 'odd' ), $this_tag);
				$this_tag= str_replace("%ip%", $temp_row["ip"], $this_tag);
				$this_tag= str_replace("%date%", format_date($temp_row["date"],$entrydate), $this_tag);
				$this_tag= str_replace("%comment%", comment_format($temp_row["comment"]), $this_tag);
				$this_tag= str_replace("%name%", $name, $this_tag);
				$this_tag= str_replace("%email%", $email_format, $this_tag);
				$this_tag= str_replace("%url%", $url_format, $this_tag);
				$this_tag= str_replace("%anchor%", $anchor, $this_tag);
				$this_tag= str_replace("%url-to-name%", $urltoname, $this_tag);
				$this_tag= str_replace("%email-to-name%", $emailtoname, $this_tag);
				$this_tag= str_replace("%gravatar%", $grav_url, $this_tag);
				$this_tag= str_replace("%editlink%", $editlink, $this_tag);
				if ($count == $last_count) { 
					$this_tag = '<a id="lastcomment"></a>'.$this_tag; 
				}
				$last_comment=$temp_row["ip"].$temp_row["comment"];
				// Outputting according to order:
				if ($order == 'ascending') {
					$output .= $this_tag."\n";
				} elseif ($order == 'descending') {
					$output = $this_tag."\n".$output;
				}
			}
		}
	}

	// If there are comments waiting for moderation, append a note saying so.
	if ($awaiting_moderation) {
		$output .= sprintf("<p id='moderate_queue_waiting'>%s</p>", lang("comment", "moderate_waiting"));
	}

	return '<a id="comm"></a>'."\n".$output;
}

/**
 * Makes archive name for a certain entry.
 *
 * Used to make permalinks.
 */
function make_archive_name($date="", $this_weblog="") {
	global $db, $Cfg, $Weblogs, $Current_weblog;

	if ($date=="") {
		if (isset($db->entry)) {
			$date = $db->entry['date'];
		} else {
			$date = date("Y-m-d-H-i");
		}
	}


	$year = format_date($date, "%year%");

	if ($this_weblog=="") {
		$this_weblog = $Weblogs[$Current_weblog];
	} else {
		$this_weblog = $Weblogs[$this_weblog];
	}

    $archive_num = (($this_weblog['archive_unit']=="week")  ? format_date($date, "%weeknum%") :
                   (($this_weblog['archive_unit']=="month") ? format_date($date, "%month%")   :  ''  ));
    $archive_type= (($this_weblog['archive_unit']=="week")  ? "w" : (($this_weblog['archive_unit']=="month") ? "m" :  "y" ));

	$archive_name=sprintf("%s-%s%02d", $year, $archive_type, $archive_num);
	$archive_name=str_replace("%1",$archive_name,$this_weblog['archive_filename']);


	return $archive_name;
}

/**
 * Process CMS tags into HTML for comments.
 */
function cms_tag_trackbacks($tag_attr, $tag_default){
    global $db, $row, $block, $Current_weblog, $Weblogs, $Paths;

    if (strlen($Weblogs[$Current_weblog]['trackback_format'])>1) {
        $format = $Weblogs[$Current_weblog]['trackback_format'];
    } else {
        $format = "%anchor%<p><strong>%title%</strong><br />%excerpt%<br /><small>Sent on %date%, via %url%</small></p>";
    }

    // If %editlink% is not present, insert it right after %date%..
	if (strpos($format, "%editlink%")==0){
		$format = str_replace("%date%", "%date% %editlink%", $format);
	}

    $content_code=get_attr_value('content_code', $tag_attr);
    $entrydate=$Weblogs[$Current_weblog]['fulldate_format'];

    if ($content_code=="") { $content_code=$row["code"]; }

    $output='<a id="track"></a>';
    $last_trackback="";

    if ((isset($db->entry['trackbacks']))&&(count($db->entry['trackbacks'])>0)) {

        foreach ($db->entry['trackbacks'] as $count => $temp_row) {

            /**
             * this is a record we have to output in some form..
             */
            $temp_row['url'] = strip_tags($temp_row['url']);

            if (!ip_check_block($temp_row["ip"])){

            	/**
				 * Make 'edit' and 'delete' links..
				 */
                $editlink = get_edittrackbacklink($db->entry['code'],$count);

				/**
				 * make link achnor
				 */
                $anchor = "<a id=\"" . safe_string($temp_row["name"],TRUE) ."-". format_date($temp_row["date"],"%ye%%month%%day%%hour24%%minute%") ."\"></a>";

                /**
				 * substite all of the parameters into the comment, and add it to the output.
				 */
                $this_tag= $format;
                $this_tag= str_replace("%count%", $count+1, $this_tag);
                $this_tag= str_replace("%even-odd%", ( (($count)%2) ? 'even' : 'odd' ), $this_tag);
                $this_tag= str_replace("%ip%", $temp_row["ip"], $this_tag);
                $this_tag= str_replace("%date%", format_date($temp_row["date"],$entrydate), $this_tag);
                $this_tag= str_replace("%excerpt%", comment_format($temp_row["excerpt"]), $this_tag);
                $this_tag= str_replace("%title%", $temp_row["title"], $this_tag);
                $url = '<a href="'.$temp_row["url"].'">'.  stripslashes($temp_row["name"]).'</a>';
                $this_tag= str_replace("%url%", $url, $this_tag);
                $this_tag= str_replace("%anchor%", $anchor, $this_tag);
                $this_tag= str_replace("%editlink%", $editlink, $this_tag);


                $output.=$this_tag;
            }
        }
    }

    // make an array of strings with the notices to print
    $text = array($Weblogs[$Current_weblog]['trackbacks_text_0'], $Weblogs[$Current_weblog]['trackbacks_text_1'], $Weblogs[$Current_weblog]['trackbacks_text_2']);

 //   $track_ind = sprintf("<p><b>%s:</b></p>", $text[min(2,count($db->entry['trackbacks']))]);
 //   $track_ind = str_replace("%num%", lang('numbers', count($db->entry['trackbacks'])), $track_ind);
 //   $track_ind = str_replace("%n%", count($db->entry['trackbacks']), $track_ind);
    $output = $output;

    return $output;
}

/**
 * Makes archive link for a certain date.
 */
function make_archive_link($date="") {
	global $db, $Paths, $Weblogs, $Current_weblog;

	if ($date=="") { $date = $db->entry['date']; }

	$filelink = $Paths['pivot_url'] . $Weblogs[$Current_weblog]['archive_path'] . make_archive_name($date);
	$filelink = fixPath($filelink);

	return $filelink;

}


function make_archive_array($force=FALSE) {
	global $Archive_array, $db;

	$arc_db = new db();

	$Archive_array = $arc_db->get_archive_array();



}


/**
 * Make a filename for an entry.
 *
 * @param string $code
 * @param string $weblog
 * @param string $anchor
 * @param string $parameter
 */
function make_filename($code="", $weblog="", $anchor="comm", $parameter="") {
	global $db, $Paths, $Weblogs, $Current_weblog;

	if ($code=="") { $code = $db->entry['code']; }
	if ($weblog=="") { $weblog=$Current_weblog; }

	$filename =  $Weblogs[$weblog]['entry_path'] . $Weblogs[$weblog]['entry_filename'];
	$filename = str_replace("%1", $code, $filename);
	$filename = format_date("", $filename, $db->entry['title']);

	// debug("Filename: $code = " . htmlentities($filename));

	return $filename;

}

/**
 * Make a link to an entry, using the settings for how they should be formed.
 *
 * @param mixed $data
 * @param string $weblog
 * @param string $anchor
 * @param string $parameter
 * @param boolean $para_weblog
 */
function make_filelink($data="", $weblog="", $anchor="comm", $parameter="", $para_weblog=false) {
	global $db, $Weblogs, $Current_weblog, $Cfg, $Paths;

	// Set the weblog, if it isn't set already.
	if ($weblog=="") { $weblog=$Current_weblog; }

	// Set the 'log_url' path, if it isn't set already.
	if (empty($Paths['log_url'])) {
		$Paths['log_url'] = dirname(get_log_url('index'))."/";
		if ($Paths['log_url'] == "//") { $Paths['log_url']="/"; }
	}

	// Set $entry (and $code)
	if (empty($data)) {
		// Using current entry - the db object must exist and be set
		$entry = $db->entry;
		$code = $entry['code'];
	} elseif (is_array($data)) {
		// Using passed/inputed entry
		$entry = $data;
		$code = $entry['code'];
	} elseif (is_numeric($data)) {
		$code = $data;
		// Using the entry with the given $code
		// If it's not the current one, we need to load it
		if (!isset($db) || ($code != $db->entry['code'])) {
			$fl_db = new db(FALSE);
			$fl_db->read_entry($code);
			$entry = $fl_db->entry;
		} else {
			$entry = $db->entry;
                }
	} else {
		debug('Entry code must be an integer/numeric - no output.');
		return;
	}
        
	if (!$Weblogs[$weblog]['live_entries']) {
		$filelink = $Paths['pivot_url'] . $Weblogs[$weblog]['entry_path'] . $Weblogs[$weblog]['entry_filename'];
	} else if ( (isset($Cfg['mod_rewrite'])) && ($Cfg['mod_rewrite']!=0) && ($entry['date']!="") ) {
		// if $entry['date'] is not set, we cant make the non-crufty url,
		// and we fall back to the crufty one..

		switch ($Cfg['mod_rewrite']) {

			// archive/2005/04/20/title_of_entry
			case "1":

				$name = (strlen($entry['title'])>1) ? $entry['title'] : substr(strip_tags($entry['introduction']),0,70);
				$name = safe_string(trim($name), TRUE);
				if (strlen($name)>30) { $name = substr($name, 0, 30); }

				list($yr,$mo,$da,$ho,$mi)=split("-",$entry['date']);
				$filelink = $Paths['log_url'] . "/archive/$yr/$mo/$da/".$name;

				// Reverted it to original, since suggested fix breaks htaccess mod rewrite
				// $filelink = $Paths['log_url'] . $Weblogs[$weblog]['archive_path'] . "/$yr/$mo/$da/".$name;

				break;

			// archive/2005-04-20/title_of_entry
			case "2":

				$name = (strlen($entry['title'])>1) ? $entry['title'] : substr(strip_tags($entry['introduction']),0,70);
				$name = safe_string(trim($name), TRUE);
				if (strlen($name)>30) { $name = substr($name, 0, 30); }

				list($yr,$mo,$da,$ho,$mi)=split("-",$entry['date']);
				$filelink = $Paths['log_url'] . "/archive/$yr-$mo-$da/".$name;

				// Reverted it to original, since suggested fix breaks htaccess mod rewrite
				// $filelink = $Paths['log_url'] . $Weblogs[$weblog]['archive_path'] . "/$yr-$mo-$da/".$name;

				break;

			// entry/1234
			case "3":

				$filelink = $Paths['log_url'] . "/entry/".$code;

				break;

			// entry/1234/title_of_entry
			case "4":

				$name = (strlen($entry['title'])>1) ? $entry['title'] : substr(strip_tags($entry['introduction']),0,70);
				$name = safe_string(trim($name), TRUE);
				if (strlen($name)>30) { $name = substr($name, 0, 30); }

				$filelink = $Paths['log_url'] . "/entry/".$code."/$name";

				break;

		}

	} else {
		$filelink = $Paths['pivot_url'] . "entry.php?id=%1$parameter";
	}

	// Add a weblog parameter if asked for, or if multiple weblogs, and the current weblog is not the first one..
	if ( $para_weblog || para_weblog_needed($weblog) ) {
		
		if (!$Weblogs[$weblog]['live_entries']) {
			$filelink .= "?w=".para_weblog($weblog);
		} else {
			if (strpos($filelink,"?")>0) {
				// if there's already a '?' in the link, we add the parameter using &amp;w=
				$filelink .= "&amp;w=".para_weblog($weblog);
			} else {
				// else we treat it as an extra 'folder'
				$filelink .= "/".para_weblog($weblog);
			}
		}
	}

	$filelink = fixPath($filelink);
	$filelink = str_replace("%1", $code, $filelink);
	$filelink = format_date("", $filelink, $entry['title']);

	if ($anchor != "") {
		$filelink .= "#".$anchor;
	}

	return $filelink;

}

/**
 * Make a URL (global link) to an entry.
 *
 * @uses make_filelink makes the link (without protocol and host).
 *
 * @param string $code
 * @param string $weblog
 * @param string $anchor
 * @param string $parameter
 */
function make_fileurl($code="", $weblog="", $anchor="comm", $parameter="") {
	global $Paths;

	$link = make_filelink($code, $weblog, $anchor, $parameter);

	return gethost().$link;

}


/**
 * prepares a weblogname so it can be used as a parameter in an URL
 * it it's us-ascii, it can be used straight away, otherwise it uses 
 * the index in $Weblogs
 *
 * @param string $weblog
 * @param array $categories
 * @return string
 */
function para_weblog($weblogkey, $categories = "") {
	global $Weblogs;

	if ($categories != "") {
		$in_weblogs = find_weblogs_with_cat($categories);
		if ((count($in_weblogs) != 0) && !in_array($weblogkey,$in_weblogs)) {
			$weblogkey = $in_weblogs[0];
		}
	} 

	// We do 'allow' spaces in the names, but we need to represent them as
	// underscores. (even though i'm not sure this case is even possible)
	$weblog = str_replace(" ", "_", $weblogkey);

	// see if we need to represent the weblog name as a number to prevent problems:
	if ($weblog != urlencode($weblog) ) {
		$keys = array_flip(array_keys($Weblogs));
		$parameter = $keys[$weblogkey];
	} else {
		$parameter = $weblog;
	}

	return safe_string($parameter);
}



/**
 * prepares a category name so it can be used as a parameter in an URL
 * it it's us-ascii, it can be used straight away, otherwise it uses
 * the index in the categories from $Cfg
 *
 * @param string $weblog
 * @return string
 */
function para_category($catkey) {

	// We do 'allow' spaces in the names, but we need to represent them as underscores
	$cat = str_replace(" ", "_", $catkey);

	// see if we need to represent the category name as a number to prevent problems:
	if ($cat != urlencode($cat) ) {
		$keys = array_flip(array_keys(cfg_cats()));
		$parameter = $keys[$catkey];
	} else {
		$parameter = $cat;
	}

	return safe_string($parameter);

}


/**
 * Translate a category that came from an url back to it's
 * proper name, if necessary. Returns false if the category
 * isn't present.
 *
 * @param string $cat
 * @return mixed
 */
function category_from_para($cat) {

	// Get all categories..
	$all_cats = cfg_cats();

	if (isset($all_cats[$cat])) {
		// If $cat is present 'as is'
		return $cat;
	} else if(is_numeric($cat)) {
		// If it's numeric, we need to translate it back..	
		$keys = array_keys($all_cats);
		return $keys[$cat];
	} else {
		// Make an educated guess.


		// If it's there, but it had an underscore instead of a space
		foreach ($all_cats as $loop_cat) {
			if (str_replace("_"," ",$cat) == str_replace("_"," ",$loop_cat['name']) ) {
				return $loop_cat['name'];
			}
		}

		// Hmm, we don't know this category
		return false;

	}
}


/**
 * Translate a weblog name that came from an url back to it's
 * proper name, if necessary. Returns false is the weblog isn't
 * present.
 *
 * @param string $weblog
 * @return mixed
 */
function weblog_from_para($weblog) {
	global $Weblogs;

	// If it's numeric, translate it back..
	if(is_numeric($weblog)){
		$keys = array_keys($Weblogs);
		return $keys[$weblog];
	} else {

		if (isset($Weblogs[$weblog])) {
			// $weblog is present 'as is'
			return $weblog;
		} else if (isset($Weblogs[str_replace("_"," ",$weblog)])) {
			// It's there, but it had an underscore, instead of a space
			return str_replace("_"," ",$weblog);
		} else {
			// Hmm, we don't know this category
			return false;
		}

	}
}


// =============================================
// the functions below are used for outputting
// the weblog as RSS.
// =============================================

/**
 * Generates a time offset for the feeds (using the correct format).
 *
 * @param string $type
 */
function rss_offset($type="") {

	if ($type== "rfc822") {
		// RSS 2.0
		$format = "%02d%02d";
	} else {
		// Atom 1.0
		$format = "%02d:%02d";
	}

	$z=date("Z");

	if (!is_numeric($z)) { $z = 0; }

	$offset = ( ($z>0) ? "+" : "-" ) . sprintf($format, floor(abs($z) / 3600), floor($z % 3600)/60);

	return $offset;

}

/**
 * Load the feed templates.
 *
 * @param string $format What type of XML feed, currently Atom or RSS
 * @param string $whatpart Selects ead, item or footer part of the templates
 * @return string
 */
function feedtemplate($format, $whatpart) {
	global $feedtemplates, $Paths;

	if (!isset($feedtemplates[$format])) {
		$file = implode('', file( $Paths['templates_path'].$format));
		list ($feedtemplates[$format]['head'], $feedtemplates[$format]['item'], $feedtemplates[$format]['footer']) =
				explode("------", $file);
	}

	return $feedtemplates[$format][$whatpart];


}

/**
 * Generates the head for the XML feeds.
 *
 * @uses feedtemplate loads the head template for XML feeds.
 */
function start_rss() {
	global $rss, $rss_items, $atom, $atom_items, $items_added, $db, $build,
	    $Current_user, $Weblogs, $Current_weblog, $Paths, $Users, $Cfg;

	$rss_preamble=feedtemplate('feed_rss_template.xml','head');
	$atom_preamble=feedtemplate('feed_atom_template.xml','head');


	if (strlen($Weblogs[$Current_weblog]['rss_link'])>2) {
		$link= trim($Weblogs[$Current_weblog]['rss_link']);
	} else {
		if ( gethost() != $Paths['host'] ) {
			// use the override value from weblog config..
			$link = gethost();
		} else {
			// determine the value ourselves..
			$link= gethost() . fixPath($Paths['pivot_url'] . $Weblogs[$Current_weblog]['front_path'] . $Weblogs[$Current_weblog]['front_filename']);
		}
	}

	$link_self = gethost() . fixPath($Paths['pivot_url'] .
		$Weblogs[$Current_weblog]['rss_path'] . $Weblogs[$Current_weblog]['atom_filename']);

	if (strlen($Weblogs[$Current_weblog]['rss_img'])>2) {
		$image = trim($Weblogs[$Current_weblog]['rss_img']);
	} else {
		// if no image is set, we will also have to remove the <image> .. </image>
		// part from the feed.. Bit hackish, but it works.
		$image= "";
		$rss_preamble = preg_replace("/<image>(.*)<\/image>/msi", "", $rss_preamble);
	}


	$charset = snippet_charset();
	$lang = str_replace("_utf8", "", snippet_lang());

	reset($Users);
	$user = each($Users);
	$user = $user['value'];

	$from = array(
		"%sitename%",
		"%title%",
		"%sitename_safe%",
		"%title_safe%",
		"%link%",
		"%link_self%",
		"%description%",
		"%author%",
		"%admin-email%",
		"%admin-nick%",
		"%year%",
		"%date%",
		"%date_rfc%",
		"%genagent%",
		"%version%",
		"%lang%",
		"%charset%",
		"%image%",
	);

	$to = array(
		$Cfg['sitename'],
		str_replace("&", "&amp;", $Weblogs[$Current_weblog]['name']),
		strtolower(str_replace("_", "", safe_string($Cfg['sitename'], TRUE))),
		str_replace("_", "", safe_string($Weblogs[$Current_weblog]['name'], TRUE)),
		$link,
		$link_self,
		$Weblogs[$Current_weblog]['payoff'],
		$Current_user,
		$user['email'],
		$user['nick'],
		date("Y"),
		date("Y-m-d\TH:i:s").rss_offset(),
		get_rfcdate(mktime()),
		"http://www.pivotlog.net/?ver=".urlencode($build),
		$build,
		$lang,
		$charset,
		$image,
	);


	$rss= str_replace($from, $to, $rss_preamble);
	$atom= str_replace($from, $to, $atom_preamble);

	$items_added = array();
	$rss_items = array();
	$atom_items = array();

}

/**
 * Adds an item to the XML feeds for the given entry ID.
 *
 * The function uses the global array $items_added to avoid
 * adding the same entry twice.
 *
 * @uses feedtemplate loads the item template for XML feeds.
 *
 * @param int $uid
 * @param string $orgdate
 * @param string $title
 * @param string $introduction
 * @param string $body
 * @param string $user
 * @param string $category
 */
function add_rss($uid, $orgdate, $title, $introduction, $body, $user, $category) {
	global $db, $rss_items, $atom_items, $items_added, $Cfg, $Weblogs, 
		$Current_weblog, $Allow_RSS, $Paths, $Users;

	if (!$Allow_RSS) { return; }

	// Checking if the item is already added to avoid duplication
	if (in_array($uid, $items_added)) {
		return;
	} else {
		$items_added[] = $uid;
	}

	$link = make_fileurl($uid, "", "");

	if (!siteurl_isset()) {
		$weblog = gethost().$Paths['pivot_url'];
		// we strip off the 'www.' part. It may not always result in a valid URL, but the 
		// guid isn't supposed to be one anyhow. This prevents problems in readers, when 
		// the feed is sometimes generated from www.example.org, and sometimes from example.org.
		$weblog = str_replace("www.", "", $weblog);
	} else {
		$weblog = $Weblogs[$Current_weblog]['siteurl'];
	}

	$title = trim(unentify($db->entry['title']));
	$subtitle = trim(unentify($db->entry['subtitle']));

	// parse fields and remove scripting from the feed. Script in feed is bad..
	$introduction = parse_intro_or_body( $db->entry['introduction'] );
	$introduction = clean_rss_text($introduction);

	$body = parse_intro_or_body( $db->entry['body'] );
	$body = clean_rss_text($body);

	$tag = 	str_replace("_", "",  strtolower(safe_string($Cfg['sitename'], TRUE))) . ",". date("Y") . ":" .
		str_replace("_", "",  safe_string($Weblogs[$Current_weblog]['name'], TRUE))."." . $uid;

	$lang = str_replace("_utf8", "", snippet_lang());

	$date = format_date( $orgdate, "%year%-%month%-%day%T%hour24%:%minute%:00").rss_offset();
	$date_rfc = format_date( $orgdate, "%english_dname%, %day% %english_monname% %year% %hour24%:%minute%:00 ").rss_offset("rfc822");
	if ($db->entry['edit_date']!="") {
		$edit_date = format_date( $db->entry['edit_date'], "%year%-%month%-%day%T%hour24%:%minute%:00").rss_offset();
	} else {
		// if the entry was never edited, use the entrydate
		$edit_date = $date;
	}

	$summary = unentify(strip_tags($introduction));
	$summary = trim(str_replace("&", "&amp;", str_replace("&nbsp;"," ", $summary)));

	// Set content (Atom 1.0) and description (RSS 2.0) according to completeness settings
	if ( (isset($Weblogs[$Current_weblog]['rss_full'])) && ($Weblogs[$Current_weblog]['rss_full']==0) ) {
		// don't put anything in the content.
		$content="";
		$description = trim($introduction);
		if (strlen($body)>5) {
			$description .= snippet_more();
			$summary .= ' ...';
		}
	} else {
		// put the introduction and body in the content..
		$content = trim(str_replace("&nbsp;"," ", ($introduction.$body)));
		$description = trim($introduction.$body);
	}

	$rss_item=feedtemplate('feed_rss_template.xml','item');

	$atom_item=feedtemplate('feed_atom_template.xml','item');


	// Handling viatitle special to avoid validation errors
	if (!empty($db->entry['viatitle'])) {
		$viatitle = 'title="'.$db->entry['viatitle'].'"';
	} else {
		$viatitle = "";
	}

	$from = array(
		"%title%",
		"%subtitle%",
		"%link%",
		"%description%",
		"%summary%",
		"%author%",
		"%author-email%",
		"%author-nick%",
		"%guid%",
		"%date%",
		"%edit_date%",
		"%date_rfc%",
		"%category%",
		"%content%",
		"%tag%",
		"%lang%",
		"%vialink%",
		"%viatitle%"
	);



	$to = array(
		htmlspecialchars(strip_tags($title)),
		htmlspecialchars(strip_tags($subtitle)),
		$link,
		RelativeToAbsoluteURLS($description),
		RelativeToAbsoluteURLS($summary),
		$user,
		$Users[$user]['email'],
		$Users[$user]['nick'],
		$uid."@".$weblog,
		$date,
		$edit_date,
		$date_rfc,
		htmlspecialchars(implode(", ",$category)),
		RelativeToAbsoluteURLS($content),
		$tag,
		$lang,
		$db->entry['vialink'],
		$viatitle
	);

	$rss_item= str_replace($from, $to, $rss_item);
	$atom_item= str_replace($from, $to, $atom_item);


	// We add the count($rss_items), because otherwise we can't have two items
	// that are posted at the same minute.
	$rss_items[$orgdate.".".count($rss_items)]=$rss_item;
	$atom_items[$orgdate.".".count($rss_items)]=$atom_item;


}

/**
 * Generates the footer for the XML feeds and saves to file.
 *
 * @uses feedtemplate loads the footer template for XML feeds.
 */
function finish_rss() {
	global $rss, $rss_items, $atom, $atom_items, $Weblogs, $Current_weblog, $VerboseGenerate, $Cfg;


	//write out the rss
	if($Weblogs[$Current_weblog]['rss_filename'] != "") {

		krsort($rss_items);

		// If the undocumented 'limit_feed_items' option is set, we slice the items to 
		// a difined number, effectively limiting the maximum length of the feed
		if ( (isset($Cfg['limit_feed_items'])) && ($Cfg['limit_feed_items']>0) ) {
			$rss_items = array_slice($rss_items, 0, intval($Cfg['limit_feed_items']));
		}
		
		foreach ($rss_items as $item) {
			$rss .= $item;
		}

		$rss.=feedtemplate('feed_rss_template.xml','footer');

		$filename = $Weblogs[$Current_weblog]['rss_path'] . $Weblogs[$Current_weblog]['rss_filename'];

		debug("Write RSS: $filename");

		//make sure the directory exists
		makedir($Weblogs[$Current_weblog]['rss_path']);

		write_file($filename, $rss);

	}


	//write out the atom feed
	if($Weblogs[$Current_weblog]['atom_filename'] != "") {

		krsort($atom_items);

		// If the undocumented 'limit_feed_items' option is set, we slice the items to 
		// a difined number, effectively limiting the maximum length of the feed
		if ( (isset($Cfg['limit_feed_items'])) && ($Cfg['limit_feed_items']>0) ) {
			$atom_items = array_slice($atom_items, 0, intval($Cfg['limit_feed_items']));
		}

		foreach ($atom_items as $item) {
			$atom .= $item;
		}

		$atom.=feedtemplate('feed_atom_template.xml','footer');

		$filename = $Weblogs[$Current_weblog]['rss_path'] . $Weblogs[$Current_weblog]['atom_filename'];

		debug("Write Atom: $filename");

		write_file($filename, $atom);


	}

}

/**
 * Cleans the text (to be inserted into feeds) for unwanted elements and
 * attributes.
 *
 * Currently only (java)script is removed.
 *
 * @param string $text
 * @return string
 */
function clean_rss_text($text) {
	$text = preg_replace('/onclick=([\'"])[^\1]*\1/Ui', "", $text);
	$text = preg_replace('#<script [^>]*>.*</script>#Uis', 
		"<!-- script element removed -->\n", $text);
	return $text;
}
	
?>
