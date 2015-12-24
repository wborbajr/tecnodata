<?php
/**
 * Contains all the standard snippets.
 *
 * All extensions/addon snippets are found in the extensions directory.
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
if(!defined('INPIVOT')){ exit('not in pivot'); }

/**
 * Includes a file using some intelligence.
 *
 * The function looks several places and includes the first file found with
 * the given name. First it looks in the current directory, then in the
 * templates directory, then in the parent and finally in the parent of the
 * parent. Returns an error if not found.
 *
 * @param string $filename
 */
function snippet_include($filename, $dummy="") {
	global $Cfg, $Paths;

	// If we try to parse something like [[include:C:/localhost/..]], we
	// need to glue the parts together.
	if ($dummy!="") { $filename .=":".$dummy; }

	$current_path = getcwd();

	$org_filename= $filename;

	if (file_exists($filename)) {
		$file_ok = TRUE;
	} else if (file_exists($Paths['templates_path'].$filename)) {
		$filename = $Paths['templates_path'].$filename;
		$file_ok = TRUE;
	} else if (file_exists('../'.$filename)) {
		$filename = '../'.$filename;
		$file_ok = TRUE;
	} else if (file_exists('../../'.$filename)) {
		$filename = file_exists('../../'.$filename);
		$file_ok = TRUE;
	}

	if ($file_ok) {

		if ((defined('LIVEPAGE')) && (getextension($filename)=="php") ) {

			ob_start();
			include_once($filename);
			$output = ob_get_contents();
			ob_end_clean();

		} else {
			$output=parse_step4(implode("", file($filename)));
		}

	} else {
		if ($Cfg['debug']==0) {
			$output="<!-- error: could not include $org_filename. File does not exist -->";
		} else {
			$output="[error: could not include $org_filename. File does not exist]";
		}
	}

	chdir($current_path);
	return $output;

}

/**
 * Returns the absolute (local) URL to the extensions directory.
 *
 * @return string
 */
function snippet_extensions_dir() {
	global $Cfg, $Paths;

	if( isset($Cfg['extensions_path']) && (''!=$Cfg['extensions_path'])) {
		if (file_exists($Paths['extensions_path'])) {
			return $Paths['extensions_url'];
		} else {
			return '<!-- error: could not find extensions directory: '.$Paths['extensions_path'].' -->';
		}
	} else {
		return '<!-- error: extensions directory is not defined -->';
	}
}




/**
 * Inserts an image
 * <pre>
 *	[[image:filename:alt:meta:compl]]
 *		filename -> name + suffix of file in images/ driectory
 *		alt      -> alt text
 *		meta     -> left   -> style info is added for left align
 *                          right  -> style info is added for right align
 *                          inline -> style info is added for inline display
 *                       -> if meta is empty then style info is added for centered display
 *    for the above, if meta contains numerical info, then this value is used as margin...
 *    else a default of 10px is used.
 *
 *                id     -> a unique id is passed in compl [xhtml -strict]
 *                class  -> a class is passed in compl [xhtml -strict]
 *
 *    note: first four use a class 'pivot-image' so they can be styled
 *    note: last two display no class/id if compl is empty
 *
 *    compl -> numerical value or complementary info
 * </pre>
 * @param string $filename
 * @param string $alt
 * @param string $meta
 * @param integer $compl
 */
function snippet_image( $filename,$alt='',$meta='',$compl=0 ) {
	global $Cfg, $Paths;

	$org_filename = $filename;

	if( !file_exists( $Paths['pivot_path'].'../'.$filename )) {
		$filename = '../'.$Cfg['upload_path'].$filename;
	} else {
		$filename = '../'.$filename;
	}

	// only continue if we have an image
	if( file_exists( $Paths['pivot_path'].$filename )) {
	  $filename = fixpath( $Paths['pivot_url'].$filename );

		// perhaps we've added a margin..
		if( preg_match( "/([a-z]+)\(([0-9]+)\)/i",$meta,$match )) {
			$meta   = $match[1];
			$margin = $match[2];
		} else {
			$margin = 10;
		}

		// do we need to clean compl?
		if(( 'id' == $meta )||( 'class' == $meta )) {
			if(( '' == $compl )||( is_numeric( $compl ))) {
				$compl = '';
			}
		} else {
			if(( '' == $compl )||( !is_numeric( $compl ))) {
				$border = 0;
			} else {
				$border = $compl;
			}
		}

		switch( $meta) {
			case( 'left' ):
				$output   = '<img src="'.$filename.'" style="float:left;margin-right:';
				$output  .= $margin.'px;margin-bottom:5px;border:'.$border.'px solid" ';
				$output  .= 'title="'.$alt.'" alt="'.$alt;
				$output  .= '" class="pivot-image" />';
				break;
			case( 'right' ):
				$output   = '<img src="'.$filename.'" style="float:right;margin-left:';
				$output  .= $margin.'px;margin-bottom:5px;border:'.$border.'px solid" ';
				$output  .= 'title="'.$alt.'" alt="'.$alt;
				$output  .= '" class="pivot-image" />';
				break;
			case( 'inline' ):
				$output  = '<img src="'.$filename.'" style="border:'.$border.'px solid" title="'.$alt;
				$output .= '" alt="'.$alt.'" class="pivot-image" />';
				break;
			case( 'id' ):
			case( 'class' ):
				$output  = '<img src="'.$filename.'" title="'.$alt.'" alt="'.$alt.'" ';
				if( '' != $compl ) { $output .= ' '.$meta.'="'.$compl.'" '; }
				$output .= '/>';
				break;
			default:
				$output  = '<p style="text-align:center;">';
				$output .= '<img src="'.$filename.'" style="border:'.$border.'px solid" title="'.$alt;
				$output .= '" alt="'.$alt.'" class="pivot-image" />';
				$output .= '</p>';
		}
	} else {
		debug( 'could not display image '.$org_filename.'. File does not exist' );
		$output = '<!-- error: could not display image '.$org_filename.'. File does not exist -->';
	}
	return $output;
}


/**
 * Insert a popup to an image..
 *
 * First we check if we can use Jquery and whether extensions/thickbox/ is
 * present. If so, we use Thickbox. If not, we use the 'old style' popup.
 *
 * @param string $filename
 * @param string $thumbname
 * @param string $alt
 * @param string $align
 * @param string $border
 */
function snippet_popup ($filename, $thumbname="", $alt="", $align="center", $border="") {
	global $Paths, $template_html;

	// Get the head section of the template..
	list($head) = explode("</head>", $template_html);

	// Determine if we can use jquery or not..
	if ( (preg_match("/prototype[a-z0-9_\.-]*\.js/i", $head)) ||
			(preg_match("/lightbox\.js/i", $head)) ||
			(!file_exists($Paths['extensions_path']."thickbox/thickbox.js")) ||
			(!file_exists($Paths['extensions_path']."snippets/snippet_thickbox.php")) ) {

		// We use prototype, or we can't find the thickbox extension. Use [[ popup_old ]]..
		$output = snippet_popup_old ($filename, $thumbname,  $alt, $align, $border);

	} else {

		// Use [[ thickbox ]]..
		include_once($Paths['extensions_path']."snippets/snippet_thickbox.php");
		$output = snippet_thickbox ($filename, $thumbname,  $alt, $align, $border);

	}

	return $output;

}


/**
 * Insert a popup to an image, using the 'old style'
 *
 * @param string $filename
 * @param string $thumbname
 * @param string $alt
 * @param string $align
 * @param string $border
 */
function snippet_popup_old ($filename, $thumbname="", $alt="", $align="center", $border="") {
	global	$Cfg, $Paths;

	if (is_numeric($align)) {
		// the border and align properties were swapped, so we need
		// to compensate for the wrong ones.
		$i = $border;
		$border = $align;
		$align = $i;
	}

	if ( ($border=="") || (!is_numeric($border)) ) { $border=1; }

	$border= set_target("style=\"border: ".$border."px solid;\"", "border=\"$border\"");

	// Fix filename, if necessary
	$org_filename = $filename;

	if (!file_exists($Paths['pivot_path']."../".$filename)) {
		$filename = "../".$Cfg['upload_path'].$filename;
	} else {
		$filename = "../".$filename;
	}

	// Fix Thumbname, perhaps use a thumbname, instead of textual link
	$org_thumbname = $thumbname;
	if ( ($thumbname=="") || ($thumbname=="(thumbnail)") ) {
		$ext = getextension($org_filename);
		$thumbname = preg_replace("/(\.)(.*)$/i", ".thumb.".$ext, $org_filename);
	}
	if (!file_exists($Paths['pivot_path']."../".$thumbname)) {
		$thumbname = "../".$Cfg['upload_path'].$thumbname;
	} else {
		$thumbname = "../".$thumbname;
	}

	// If the thumbnail exists, make the HTML for it, else just use the text for a link.
	if (file_exists($Paths['pivot_path'].$thumbname)) {
		$thumbname = $Paths['host'] . fixpath( $Paths['pivot_url'].$thumbname);

		$ext=getextension($thumbname);
		if ( ($ext=="jpg")||($ext=="jpeg")||($ext=="gif")||($ext=="png") ) {
				if ($align=="center") {
					$thumbname="<img src=\"$thumbname\" $border alt=\"$alt\" title=\"$alt\"  class='pivot-popupimage'/>";
				} else {
					$thumbname="<img src=\"$thumbname\" $border alt=\"$alt\" title=\"$alt\" align=\"$align\" class='pivot-popupimage' />";
				}
		} else {
			$thumbname = $org_thumbname;
		}
	} else {
		if (strlen($org_thumbname)>2) {
			$thumbname = $org_thumbname;
		} else {
			$thumbname = "popup";
		}
	}

	if( file_exists( $Paths['pivot_path'].$filename )) {
		list( $width,$height ) = @getimagesize( $filename ) ;
		$filename = $Paths['host'].fixpath( $Paths['pivot_url'].$filename ) ;

		$url  = $Paths['host'].$Paths['pivot_url'] ;
		$url .= 'includes/photo.php?img='. urlencode(base64_encode($filename)).'&amp;w='.$width.
				'&amp;h='.$height.'&amp;t='.urlencode(base64_encode($alt));

		$target = set_target('','target="_self"');
		$code = sprintf( "<a href='$filename' onclick=\"window.open('%s','imagewindow','width=%s,height=%s,directories=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no,left=0,top=0');return false\" style='border: 0;' %s  class='pivot-popuptext' >%s</a>",$url,$width,$height,$target,$thumbname ) ;

		if( 'center'==$align ) {
			$code = '<p style="text-align:center;">'.$code.'</p>' ;
		}
	} else {
		debug( 'could not popup '.$filename.'. File does not exist' );
		$code = '<!-- error: could not popup '.$filename.'. File does not exist -->' ;
	}

	return $code;
}

/**
 * Inserts a link to a downloadable file.
 *
 * @param string $filename
 * @param string $icon Insert a suitable icon if set to "icon"
 * @param string $text The text of the download link.
 * @param string $title The text of the title attribue of the link.
 */
function snippet_download( $filename,$icon,$text,$title ) {
 global $Cfg,$Paths;

 $org_filename = $filename ;

 if( !file_exists( $Paths['pivot_path'].'../'.$filename )) {
  $filename = '../'.$Cfg['upload_path'].$filename;
 } else {
  $filename = '../'.$filename;
 }

 if( file_exists( $Paths['pivot_path'].$filename )) {
  $filename = fixpath( $Paths['pivot_url'].$filename );
  $ext      = getextension( $filename );
  $middle   = '';

  switch( $icon ) {
   case( 'icon' ):
    if( file_exists( $Paths['pivot_path'].'pics/icon_'.$ext.'.png' )) {
     $image = fixpath( $Paths['pivot_url'].'pics/icon_'.$ext.'.png' );
    } else if( file_exists( $Paths['pivot_path'].'pics/icon_'.$ext.'.gif' )) {
     $image = fixpath( $Paths['pivot_url'].'pics/icon_'.$ext.'.gif' );
    } else {
     $image = fixpath( $Paths['pivot_url'].'pics/icon_file.gif' );
    }

    if( '' != $image ) {
     $width = 0; $height = 0;
     list( $width,$height ) = @getimagesize( $Paths['host'].$image );
     $middle = '<img src="'.$image;
     if( 0 != $width )  { $middle .='" width="'.$width; }
     if( 0 != $height ) { $middle .='" height="'.$height; }
     $middle .= '" alt="'.$title.'" class="icon" style="border:0;" />';
     }
    $middle .= ' '.$text;
    // all ok... leave
    break;

   case( 'text' ): // fall through
   default:
    $middle = $text;
   }
   $code = '<a href="'.$filename.'" title="'.$title.'" class="download">'.$middle.'</a>';
 } else {
   $code = '<!-- error: could not make a download for '.$org_filename.'. File does not exist -->' ;
 }
 return $code;
}



/**
 * Creates a link to a file.
 *
 * The snippet will check the parent driectory of Pivot
 * and the upload directory for a file with the given name.
 *
 * @param string $filename
 * @param string $name (Link text)
 * @return string
 */
function snippet_link($filename, $name) {
	global $Cfg, $Paths;

	$org_filename = $filename;
	if (!file_exists('../'.$filename)) {
		$filename = '../'.$Cfg['upload_path'].$filename;
	} else {
		$filename = '../'.$filename;
	}
	if (file_exists($filename)) {
		if (empty($name)) {
			$name = $org_filename;
		}
		$filename = fixpath( $Paths['pivot_url'].$filename );
		$ext = getextension($filename);
		if ( ($ext=="doc")||($ext=="pdf")||($ext=="txt")||($ext=="ppt")||($ext=="pot")||($ext=="xls")||($ext=="mdb") ) {
			$target = set_target(' rel="external"', ' target="_blank"');
		} else {
			$target="";
		}
		$code = "<a href=\"$filename\" $target>$name</a>";
	} else {
		$code="<!-- error: could not link to $org_filename. File does not exist -->";
	}

	return $code;
}


/**
 * Lowercases text.
 *
 * @param string $text
 */
function snippet_lower($text) {
	return strtolower($text);
}


/**
 * Uppercases text.
 *
 * @param string $text
 */
function snippet_upper($text) {
	return strtoupper($text);
}

/**
 * Returns the sitename for the Pivot installation.
 */
function snippet_sitename() {
	global $Cfg;

	$output=$Cfg['sitename'];
	return $output;
}

/**
 * Returns the title (name) of the current weblog.
 *
 * @param string $action if equal to 'strip' all HTML tags will be removed.
 * @return string
 */
function snippet_weblogtitle($action = '') {
	global $Weblogs, $Current_weblog;

	$output=$Weblogs[$Current_weblog]['name'];
	if ($action == 'strip') {
		$output = strip_tags($output);
	}

	return encode_text($output);
}


/**
 * Returns the subtitle (payoff) of the current weblog.
 *
 * @param string $action if equal to 'strip' all HTML tags will be removed.
 * @return string
 */
function snippet_weblogsubtitle($action = '') {
	global $db, $Weblogs, $Current_weblog;

	$output=$Weblogs[$Current_weblog]['payoff'];
	if ($action == 'strip') {
		$output = strip_tags($output);
	}

	return encode_text($output);
}


/**
 * Returns the ID of the current weblog.
 */
function snippet_weblogname() {
	global $Weblogs, $Current_weblog;

	$output=$Current_weblog;
	return $output;
}


/**
 * Returns the title (name) of the current weblog.
 */
function snippet_archivetitle() {
	global $db, $Weblogs, $Current_weblog;

	$output=$Weblogs[$Current_weblog]['name'];
	return $output;
}

/**
 * Returns the subtitle (payoff) of the current weblog.
 */
function snippet_archivesubtitle() {
	global $db, $Weblogs, $Current_weblog;

	$output=$Weblogs[$Current_weblog]['payoff'];
	return $output;
}


function snippet_link_list() {
	global $Paths;

	if(file_exists($Paths['templates_path'].'link_list.html')) {
		$output = snippet_include($Paths['templates_path'].'link_list.html');
	} else {
		$output = snippet_include($Paths['templates_path'].'_aux_link_list.html');
	}

	$output = targetblank($output);

	return $output;

}


function snippet_archive_list() {
	global $Weblogs, $Current_weblog, $Archive_array, $Archive_array_html , $Paths;

	if ($Weblogs[$Current_weblog]['archive_unit']=="none") {
		// if no archives are needed, just return.
		return "";
	}

	// if not yet done, load / make the array of archive filenames (together
	// with at least one date)
	if (!isset($Archive_array)) { make_archive_array(); }

	// if not yet done, compile the html for this archive list
	if (!isset($Archive_array_html[$Current_weblog])) {

		$output = "";

		// maybe flip and reverse it.
        // 2004/11/23 =*=*= JM - changes to avoid array errors
        if( is_array( $Archive_array[$Current_weblog] )) {
            if($Weblogs[$Current_weblog]['archive_order'] == 'descending') {
                $mylist = $Archive_array[$Current_weblog];
            } else {
                $mylist = array_reverse($Archive_array[$Current_weblog]);
            }

            foreach($mylist as $file => $date) {
                // make Mark proud, and make a nice absolute url for the archive..
                $filelink = $Paths['pivot_url'] . $Weblogs[$Current_weblog]['archive_path'] . $file;
                $filelink = fixPath($filelink);

                // fix the rest of the string..
                list($start_date, $stop_date) = getdaterange($date, $Weblogs[$Current_weblog]['archive_unit']);
                $this_output = format_date_range($start_date, $stop_date, $Weblogs[$Current_weblog]['archive_linkfile']);

                $this_output = str_replace("%url%" , $filelink, $this_output);

                $output .= "\n".$this_output;
            }
		}

		// store it for quick access later on..
		$Archive_array_html[$Current_weblog] = $output;

	} else {

		// goodie, it's alread been done, so we just retrieve it.
		$output = $Archive_array_html[$Current_weblog];

	}

	return stripslashes($output);

}


function snippet_livearchive_list ($filename="", $format="", $weblog="", $template="") {
	global $Weblogs, $Current_weblog, $Cfg, $Paths, $allcats;

	if ($filename == "") { 
		if ($Cfg['mod_rewrite']==0) {
			$filename = $Paths['pivot_url']."archive.php";
		} else {
			$filename = $Paths['log_url']."category";
		}
	}

	if ($format == "") {
		if ($Cfg['mod_rewrite']==0) {
			$format = "<a href='%file%?c=%catid%&amp;w=%weblogid%&amp;t=%template%'>%cat%</a><br />";
		} else {
			$format = "<a href='%file%/%catid%/?w=%weblogid%&amp;t=%template%'>%cat%</a><br />";
		}
	}

	$allcats = cfg_cats();

	if ($weblog == "current") {
		$cats = find_cats_in_weblog($Current_weblog);
		$weblog = $Current_weblog;
	} else if ( ($weblog != "") && (isset($Weblogs[$weblog])) ) {
		$cats = find_cats_in_weblog($weblog);
	} else {
		// use all cats..
		$cats = cfg_getarray('cats');
	}


	usort($cats, "category_simplesort");

	foreach ($cats as $cat) {

		// skip cat if it's 'not-public'.
		if ($allcats[$cat]['hidden'] == 1) { continue; }

		// skip if name is empty
		if ($cat == "") { continue; }

		// skip cat if it doesn't exist anymore
		if (!isset($allcats[$cat])) { continue; }

		$my_output = $format;
		$my_output = str_replace('%file%', $filename, $my_output);
		$my_output = str_replace('%catid%', para_category($cat), $my_output);
		$my_output = str_replace('%cat%', encode_text($cat), $my_output);
		$my_output = str_replace('%weblogid%', para_weblog($weblog), $my_output);
		$my_output = str_replace('%weblog%', $Weblogs[$weblog]['name'], $my_output);
		$my_output = str_replace('%template%', $template, $my_output);
		// Removing unused/empty weblog (w) and template (t) parameters.
		$my_output = preg_replace('/[wt]=(&amp;|(["\']))/', '\2', $my_output);
		// And if the URL ends with a question mark, remove it.
		$my_output = preg_replace('#/\?(["\'])#', '/\1', $my_output);
		$output .= "\n".$my_output;
	}

	return $output;

}

function snippet_subweblog ($sub="", $count="", $order="lasttofirst") {
	global $Weblogs, $Current_weblog;

	if ($sub!="") {
		if (!isset($Weblogs[$Current_weblog]['sub_weblog'][$sub])) {
			debug("Subweblog \"$sub\" isn't defined for weblog \"$Current_weblog\"");
			return "<!-- error: Undefined weblogname in snippet subweblog.  -->";
		}
		if (($order != 'lasttofirst') && ($order != 'firsttolast')) {
			debug( "Wrong optional (order) parameter in subweblog $sub");
			return '<!-- error in snippet subweblog: wrong optional (order) parameter -->';
		}
		$sub="subweblog=\"$sub\"";
	} else {
		debug("No subweblog name given");
		return "<!-- error: Snippet subweblog needs an argument/name.  -->";
	}
	if ($count!="") { $count="showme=\"$count\""; }

	$output= cms_tag_weblog("nodes=\"lower\" order=\"$order\" $sub $count",'');

	return $output;
}

// an alias for [[subweblog]]
function snippet_weblog ($sub="", $count="") {

	// if no subweblog has been specified, just assume 'standard'
	if (strlen($sub)<2) { $sub = "standard"; }

	return snippet_subweblog($sub, $count);

}

function snippet_archive ($sub,  $count="ignored", $order="lasttofirst") {
	global $Weblogs, $Current_weblog;

	if ($sub!="") {
		if (!isset($Weblogs[$Current_weblog]['sub_weblog'][$sub])) {
			debug("Subweblog \"$sub\" isn't defined for weblog \"$Current_weblog\"");
			return "<!-- error: Undefined weblogname in snippet archive/subweblog.  -->";
		}
		if (($order != 'lasttofirst') && ($order != 'firsttolast')) {
			debug( "Wrong optional (order) parameter in subweblog $sub");
			return '<!-- error in snippet archive/subweblog: wrong optional (order) parameter -->';
		}
		$sub="subweblog=\"$sub\"";
	} else {
		debug("No subweblog name given");
		return "<!-- error: Snippet archive/subweblog needs an argument/name.  -->";
	}

	$output= cms_tag_archive("nodes=\"lower\" order=\"$order\" $sub",'');

	return $output;
}

// Displays information about an entry. Can only be used in an entry.
// [[entry_data:word:image:download]]
// bob's function changed by JM
// 2004/11/25 =*=*= JM - minor corrections
function snippet_entry_data( $word='',$image='',$download='' ) {
  global $db;
  $output = array();
  // count words - only if OK
  if( '' != $word ) {
    $total = str_word_count(strip_tags($db->entry['title']." ".$db->entry['introduction']." ".$db->entry['body'])) ;
    if( '*' == $word ) {
       $output[] = ' '.$total.' '.lang( 'snippets_text','word_plural' );
    } else {
      $output[] = $total.' '.$word;
    }
  }
  // count images - only if OK
  if( '' != $image ) {
    preg_match_all("/(<img|\[\[image|\[\[popup)/mi", $db->entry['introduction'].$db->entry['body'], $match );
    $total = count( $match[0] );
    if( $total > 0 ) {
      if( '*' == $image ) {
        // single/plural
        if( 1 == $total ) {
          $output[] = '1 '.lang( 'snippets_text','image_single' );
        } else {
          $output[] = $total.' '.lang( 'snippets_text','image_plural' );
        }
      } else {
        $output[] = $total.' '.$image;
      }
    }
  }
  // count downloads - only if OK
  if( '' != $download ) {
    preg_match_all("/(\[\[download)/mi", $db->entry['introduction'].$db->entry['body'], $match );
    $total = count( $match[0] );
    if( $total > 0 ) {
      if( '*' == $download ) {
      // single/plural
        if( 1 == $total ) {
          $output[] = '1 '.lang( 'snippets_text','download_single' );
        } else {
          $output[] = $total.' '.lang( 'snippets_text','download_plural' );
        }
      } else {
        $output[] = $total.' '.$download;
      }
    }
  }
  return implode( ', ',$output );
}



// originally hacked by digits to adjust image size if custom Pivot badge is used
// changed for accessibility [and localistaion] by JM =*=*= 2004/10/03

function snippet_pivotbutton() {
	global $Paths,$build ;

	list( $width,$height) = @getimagesize( $Paths['pivot_path'].'pics/pivotbutton.png' ) ;
	$image   = $Paths['pivot_url'].'pics/pivotbutton.png' ;
	$alttext = lang( 'weblog_text','powered_by' ). " " . $build ;

	$output  = '<a href="http://www.pivotlog.net/?ver='.urlencode( $build ).'" title="'.$alttext.'" class="badge">' ;
	$output .= '<img src="'.$image.'" width="'.$width.'" height="'.$height.'" alt="'.$alttext.'" ' ;
	$output .= 'class="badge" longdesc="http://www.pivotlog.net/?ver='.urlencode( $build ).'" /></a>';
	$output  = targetblank( $output ) ;

	return $output;
}


function snippet_code() {
	global $db;

	$output=$db->entry['code'];

	return $output;
}


function snippet_uid() {
	global $db;

	$output=$db->entry['code'];

	return $output;
}


function snippet_id_anchor($name = '') {
	global $db;

	if ($name=="") { $name="e"; }

	$output="<span id=\"".$name.$db->entry['code']."\"></span>";

	return $output;
}

function snippet_even_odd() {
	global $even_odd;

	if ($even_odd) {
		return "even";
	} else {
		return "odd";
	}

}

/**
 * Returns the title of the current entry.
 *
 * @param string $action if equal to 'strip' all HTML tags will be removed.
 * @return string
 */
function snippet_title($action = '') {
	global $db;

	$output = parse_step4( $db->entry['title']);
	if ($action == 'strip') {
		$output = strip_tags($output);
	}

	return encode_text($output);
}



/**
 * Returns the subtitle of the current entry.
 *
 * @param string $action if equal to 'strip' all HTML tags will be removed.
 * @return string
 */
function snippet_subtitle($action = '') {
	global $db;

	$output = parse_step4( $db->entry['subtitle']);
	if ($action == 'strip') {
		$output = strip_tags($output);
	}

	return encode_text($output);
}


function snippet_introduction($strip="") {
	global $db, $Weblogs, $Current_weblog;

	$output = parse_intro_or_body( $db->entry['introduction'], $strip);

	return $output;

}


function snippet_body($strip="") {
	global $db, $Weblogs, $Current_weblog;

        $output = '<a id="body"></a>'.parse_intro_or_body( $db->entry['body'], $strip);

	return $output;

}


function snippet_date($format="") {
	global $db, $Weblogs, $Current_weblog;

	if($format=="") {
		$format = $Weblogs[$Current_weblog]['entrydate_format'];
	} else {
		// compensate for textile oddness..
		$format = str_replace("<span>", "%", $format);
		$format = str_replace("</span>", "%", $format);
	}

	$output=format_date($db->entry["date"], $format );

	return $output;
}



function snippet_edit_date($format="") {
	global $db, $Weblogs, $Current_weblog;

	// only if different from normal date..
	if ($db->entry["edit_date"] == $db->entry["date"]) {
		return "";
	}

	if($format=="") {
		$format = $Weblogs[$Current_weblog]['fulldate_format'];
	} else {
		// compensate for textile oddness..
		$format = str_replace("<span>", "%", $format);
		$format = str_replace("</span>", "%", $format);
	}

	$output=format_date($db->entry["edit_date"], $format );

	return $output;
}



function snippet_fulldate($format="") {
	global $db, $Weblogs, $Current_weblog;

	if($format=="") {
		$format = $Weblogs[$Current_weblog]['fulldate_format'];
	} else {
		// compensate for textile oddness..
		$format = str_replace("<span>", "%", $format);
		$format = str_replace("</span>", "%", $format);
	}

	$output=format_date($db->entry["date"], $format );


	return $output;
}



function snippet_diffdate() {
	global $db, $diffdate_thisformat, $diffdate_lastformat, $Weblogs, $Current_weblog;

	$diffdate_thisformat=format_date($db->entry["date"], $Weblogs[$Current_weblog]['diffdate_format'] );
	if ( (!isset($diffdate_lastformat)) || ($diffdate_lastformat!=$diffdate_thisformat) ) {
		$diffdate_lastformat=$diffdate_thisformat;
	} else {
		$diffdate_thisformat="";
	}


	return $diffdate_thisformat;
}


function snippet_registered() {
	global $Weblogs, $Current_weblog, $Paths;
	if (defined('LIVEPAGE')) {
		$output = get_registered_state($linktext);
	} else {
		$ext = strtolower(getextension($Weblogs[$Current_weblog]['front_filename']));
		if (substr($ext,0,3)=="php") {
			// Include "set_output_paths" code? 
			$output = sprintf("<?php echo get_registered_state(); ?>");
		} else {
			$output = "";
		}
	}
	return $output;
}


function snippet_cookie($name="") {
	global $Pivot_Vars, $Pivot_Cookies, $Weblogs, $Current_weblog, $reg_user;

	include_once("modules/module_userreg.php");

	// if we don't use live entries, do _not_ use the cookies..
	if ($Weblogs[$Current_weblog]['live_entries'] == 0) {
		return "";
	}


	// get the cookies in an array..
	if (isset($Pivot_Vars['HTTP_COOKIE']) && !isset($Pivot_Cookies))  {
		foreach (explode(";", $Pivot_Vars['HTTP_COOKIE']) as $cookie) {
			list ($key, $value)= explode("=", $cookie);
			$Pivot_Cookies[trim($key)] = urldecode(trim($value));
		}
	}

	// If registered user, override the other settings..
	if (isset($Pivot_Cookies['piv_reguser']) && (!isset($reg_user))) {

		list($reg_name, $reg_hash) = explode("|", 	$Pivot_Cookies['piv_reguser']);

		//debug("reg: $reg_name, $reg_hash");
		if (check_user_hash($reg_name, $reg_hash)) {
			$reg_user = load_user($reg_name);
			if ($reg_user['show_address']==1) {
				$Pivot_Cookies['piv_email'] = $reg_user['email'];
			} else {
				$Pivot_Cookies['piv_email'] = "";
			}
			$Pivot_Cookies['piv_name'] = $reg_user['name'];
			$Pivot_Cookies['piv_url'] = $reg_user['url'];
		} else {
			$reg_user = FALSE;
		}
	}


	switch($name) {
		case 'all':
			echo "<h1>koekies</h1><pre>cookies:";
			print_r($Pivot_Cookies);
			echo "</pre>";
			break;
		case 'name':
			return (isset($Pivot_Cookies['piv_name'])) ? $Pivot_Cookies['piv_name'] : "";
			break;
		case 'email':
			return (isset($Pivot_Cookies['piv_email'])) ? $Pivot_Cookies['piv_email'] : "";
			break;
		case 'url':
			return (isset($Pivot_Cookies['piv_url'])) ? $Pivot_Cookies['piv_url'] : "";
			break;
		case 'remember_yes':
			return (isset($Pivot_Cookies['piv_rememberinfo'])) ? "checked='checked'" : "";
			break;
		case 'remember_no':
			return (isset($Pivot_Cookies['piv_rememberinfo'])) ? "" : "checked='checked'";
			break;
		case 'reguser':
			return (isset($Pivot_Cookies['piv_reguser'])) ? $Pivot_Cookies['piv_reguser'] : "";
			break;
	}


}


function snippet_jscookies() {

	$output = "<script type='text/javascript'>
//<![CDATA[
function readCookie(name) { var cookieValue = ''; var search = name + '='; if(document.cookie.length > 0) {  offset = document.cookie.indexOf(search); if (offset != -1) {  offset += search.length; end =  document.cookie.indexOf(';', offset); if (end == -1) end = document.cookie.length; cookieValue = unescape(document.cookie.substring(offset, end)) } } return cookieValue.replace(/\+/gi, ' '); }
function getNames() { if (document.getElementsByName('piv_name')) { elt = document.getElementsByName('piv_name'); elt[0].value=readCookie('piv_name'); } if (document.getElementsByName('piv_email')) { elt = document.getElementsByName('piv_email'); elt[0].value=readCookie('piv_email');  } if (document.getElementsByName('piv_url')) { elt = document.getElementsByName('piv_url'); elt[0].value=readCookie('piv_url');  } if (document.getElementsByName('piv_rememberinfo')) { elt = document.getElementsByName('piv_rememberinfo'); if (readCookie('piv_rememberinfo') == 'yes') { elt[0].checked = true; } } }
var oldEvt_readCookie = window.onload; window.onload = function() { if (oldEvt_readCookie) oldEvt_readCookie(); setTimeout('getNames()', 500); }
//]]>
</script>";

	return $output;

}

function snippet_nick() {
	return snippet_user("nick");
}


function snippet_user($field) {
	global $db, $Users;

	if ($field=="") {

		$output=$db->entry['user'];

	} else if ($field=="emailtonick") {

		if ($Users[$db->entry['user']]['nick']!="") {
			$output = encodemail_link($Users[$db->entry['user']]['email'], $Users[$db->entry['user']]['nick'] );
		} else {
			$output = encodemail_link($Users[$db->entry['user']]['email'], $db->entry['user']);
		}

	} else {

		if (isset($Users[$db->entry['user']][$field])) {
			$output = $Users[$db->entry['user']][$field];
		} else {
			$output = $db->entry['user'];
		}

	}

	return $output;
}

/**
 * Encrypts the given email address using JavaScript.
 *
 * If "Encode Email Address" is not selected for the current
 * weblog, the output will be a plain mailto-link.
 *
 * @param string $email
 * @param string $display Text of the mailto-link.
 * @param string $title Title of the mailto-link.
 * @return string
 */
function snippet_encrypt_mail($email, $display, $title='' ) {
    // only continue if there's a valid mail address
    if( isemail( $email )) {
        $output = encodemail_link( $email,$display,$title );
    } else {
        // do we have a fallback?
        if( '' != $display ) {
            $output = $display ;
        } else {
          $output = '<!-- error: unable to display encrypted e-mail address -->';
        }
    }
    return $output;
}


function snippet_category($filter="") {
	global $db, $Weblogs, $Current_weblog, $Current_subweblog;

	$output=$db->entry["category"];

	if ( ($filter != "") && (isset($Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog])) ) {
		$output = array_intersect ( $Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog]['categories'], $output);
	}

	if (is_array($output)) {
		return implode(", ", $output);
	} else {
		return "";
	}
}



function snippet_category_link($filter="", $filename="") {
	global $Cfg, $db, $Weblogs, $Current_weblog, $Current_subweblog, $Paths;

	if ($filename == "") {
		if ($Cfg['mod_rewrite']==0) {
			$filename = $Paths['pivot_url']."archive.php?c=";
		} else {
			$filename = $Paths['log_url']."category/";
		}
	}

	$output=$db->entry["category"];

	if ( ($filter != "") && (isset($Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog])) ) {
		$output = array_intersect ( $Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog]['categories'], $output);
	}

	$allcats = cfg_cats();

	foreach ($output as $key => $item) {
		// skip cat if it doesn't exist anymore
		if (!isset($allcats[$item])) {
			unset($output[$key]);
		} else {
			$url = $filename.para_category($item);
			// check if a weblog parameter is needed for the current category/weblog combo
			if (para_weblog_needed($Current_weblog,$item)) {
				if ($Cfg['mod_rewrite']==0) {
					$url .= "&amp;w=" . para_weblog($Current_weblog,$item);
				} else {
					$url .= "/?w=" . para_weblog($Current_weblog,$item);
				}
			}
			$output[$key] = sprintf("<a href=\"$url\">%s</a>", encode_text($item));
		}
	}

	if (is_array($output)) {
		return implode(", ", $output);
	} else {
		return "";
	}
}




// for backwards compatibility
function snippet_email() {
	global $db, $Users;

	if ($db->entry['code']=='ROOT') {
		$output='<cms email></cms>';
	} else {
		$output=encodemail($Users[$entry['user']]['email']);
	}

	return $output;
}

// for backwards compatibility
function snippet_email_to_nick() {
	global $db, $Users;

	if ($db->entry['code']=='ROOT') {
		$output='<cms emailtonick></cms>';
	} else {
		if (isset($Users[$db->entry['user']])) {
			$output = encodemail_link($Users[$db->entry['user']]['email'], $db->entry['user']);
		} else {
			$output = $db->entry['user'];
		}
	}


	return $output;
}



function snippet_more( $title='' ) {
	global $db, $Weblogs, $Current_weblog, $Cfg;

	if( '' != $title ) {
		$title = 'title="'.$title.'" ';
		// substitute %title% in the title attribute.
		$title = str_replace("%title%", $db->entry['title'], $title);
	}

	if( strlen( $db->entry['body'] ) >5 ) {
		$morelink = make_filelink( $db->entry['code'],'','body');
		$more = $Weblogs[$Current_weblog]['read_more'];
		$text = ( strlen($more) > 1 ) ? $more : "(".lang('more').")";
		if( 1 == $Weblogs[$Current_weblog]['comment_pop']) {
			$target  = set_target('','target="_self"');
			$output  = sprintf( "<a href='%s' ",$morelink );
			$output .= $title;
			$output .= sprintf(  "onclick=\"window.open('%s','popuplink','width=%s,height=%s,directories= no,location=no,scrollbars=yes,menubar=no,status=yes,toolbar=no,resizable =yes'); return false\"", $morelink,  $Weblogs[$Current_weblog]['comment_width'],  $Weblogs[$Current_weblog]['comment_height'] );
			$output .= sprintf( " %s>%s</a>",$target,$text );
		} else {
			$output = "<a href=\"$morelink\"  $title>".$text."</a>";
		}

		// substitute %title% in the 'more' link.
		$output = str_replace("%title%", $db->entry['title'], $output);

	} else {
		$output = '';
	}
	return $output;
}


function snippet_via($text="") {
	global $db;

	if (strlen($db->entry['vialink']) > 4 ) {

		if ($text == "") {
			$text = "[<a href='%link%' title='%title%'>via</a>]";
		}

		$output = $text;
		$output = str_replace("%link%", $db->entry['vialink'], $output);
		$output = str_replace("%title%", $db->entry['viatitle'], $output);

		return $output;

	} else {

		return "";

	}
}

/**
 * Displays the keywords for the entry.
 *
 * @return string The text to display.
 * @param string $text The output format. The default
 *  values is "%keywords%".
 * @param string $sep The separator between the keywords.
 *  The default value is comma. The value "clear" will output
 * the keywords exactly as it was inserted with the entry.
 */
function snippet_keywords($text='',$sep='') {
    global $db;

    if ($text=="") { $text = "%keywords%"; }
    if ($sep=="") { $sep = ", "; }

    $keywords = stripslashes($db->entry['keywords']);

    if( $sep == 'clear'  ) {
        $output = $keywords;
    } elseif( strlen( trim( $keywords )) > 2 ) {
        // format output..
        preg_match_all('/[^"\', ]+|"(?:[^"]|"")*"|\'(?:[^\']|\'\')*\'/i', $keywords, $matches);
		foreach($matches[0] as $match) {
			$output[] = trim(str_replace('"','', str_replace("'","", $match)));
		}
        $output = implode( $sep,$output );
        $output = str_replace( '%keywords%',$output,$text );
    }    else {
        $output = $db->entry['keywords'];
    }
    return $output;
}



/**
 * Displays the list of comments for the current entry.
 *
 * @param string $order
 * @return string
 */
function snippet_comments($order = 'ascending') {
        if (($order != 'ascending') && ($order != 'descending')) {
		return '<!-- error in snippet comments: wrong optional (order) parameter -->';
        } else {
		return cms_tag_comments("order=\"$order\"", '');
	}
}


/**
 * Displays a commentform if commenting is allowed and
 * remote IP isn't blocked.
 *
 * @param string $template
 * @return string
 */
function snippet_commentform($template = "_sub_commentform.html") {
	global $Cfg, $db, $Paths, $Weblogs, $Current_weblog;

	// check for entry's allow_comments, blocked IP address or subweblog comments..
	if ( (isset($db->entry['allow_comments']) && ($db->entry['allow_comments']==0)) || (ip_check_block($_SERVER['REMOTE_ADDR']))  ) {
		// if allow_comments set to 0, or current visitor has his ip blocked, then don't show form
		$output ="";
	}	else {
		// else show it
		if(file_exists($Paths['templates_path'].$template)) {
			$output="[[include:".$Paths['templates_path']."$template]]";
		} else {
			$output="[[include:".$Paths['templates_path']."commentform.html]]";
		}

		$output = parse_step4($output);
	}


	// append spam key to the comment form
	preg_match('/<input[ ]+type="hidden"[ ]+name="piv_code"[ ]+value="([^"]+)"/', $output, $matches);
	$code = $matches[1];
	$output = preg_replace('/<input[ ]+type="hidden"[ ]+name="piv_code/',
		'<input type="hidden" name="piv_spkey" value="'.md5($Cfg['server_spam_key'].$code).
		'" />'."\n".'<input type="hidden" name="piv_code', $output);

	// prefill the comment form on static (entry) pages
	if (!defined('LIVEPAGE')) {
		$ext = strtolower(getextension($Weblogs[$Current_weblog]['front_filename']));
		if (substr($ext,0,3)=="php") {
			// Include "set_output_paths" code? 
			$output .= sprintf("<?php echo fill_comment_form(); ?>");
		}
	}

	return $output;

}


function snippet_archivenext($text="") {
	global $Cfg, $db, $Weblogs, $Current_weblog, $Archive_array, $archive_array_next,
		$Pivot_Vars, $Paths;

	if($text=="") {
		$text = lang('weblog_text','next_archive');
	}

	if (!defined('LIVEPAGE')) {

		// in 'normal' archive pages.

		if (!isset($db->entry)) { return "";  }

		// get the filename for the current archive..
		$current_archive = make_archive_name();
		$id = $db->entry['code'];

		// get the archive_array, if it's not done yet.
		if (!isset($Archive_array)) { make_archive_array(); }

		// we make another array where we number the archives. As far as i know this is
		// the only decent way to find the next or previous entries..
		// sometime i will want to cache this for performance
		$counter = 0;

	    // 2004/11/23 =*=*= JM - foreach() test
	    if( is_array( $Archive_array[$Current_weblog] )) {
	        foreach ($Archive_array[$Current_weblog] as $this_key => $this_val) {
	            $temp_arr[$counter] = $this_key;
	            if ($this_key == $current_archive) { $this_count = $counter; }
	            $counter++;
	        }
	    }

		// then, we'll pick out the previous one in the array (remember, the array
		// is in reverse chronological order)
		if (isset($temp_arr[$this_count+1])) {
			$next_arc = $temp_arr[$this_count+1];
			$target = set_target('', 'target="_self"');
			$date = $Archive_array[$Current_weblog][ $next_arc ];
			$link = make_archive_link($date);
			$text = format_date($date,$text);
			$link = sprintf("<a href=\"%s\" %s>%s</a>", $link, $target, $text ) ;

			return $link;
		} else {
			return "";
		}

	} else {

		// display link for pages in 'live archives'

		// guessstimate the current subweblog.
		reset($Weblogs[$Current_weblog]['sub_weblog']);
		$my_subweblog = current($Weblogs[$Current_weblog]['sub_weblog']);

		$show = $my_subweblog['num_entries'];

		if (!isset($Pivot_Vars['o']) || empty($Pivot_Vars['o'])) {
		    $offset = 0;
		} else if ($Pivot_Vars['o'] < 0) {
		    $Pivot_Vars['o'] = 0;
		    $offset = 0;
		} else {
		    $offset = $Pivot_Vars['o'];
		}
		// get number off entries in this category (according to offset)
		$cat_entries = count($db->getlist($db->get_entries_count(),$offset,"",
			    array($Pivot_Vars['c'])));

		// Don't display next link if all (following) entries can be
		// showed on the current page
		if ($cat_entries<=$show) {
		    return "";
		}

		if ($Cfg['mod_rewrite']==0) {
			$url = $Paths['pivot_url']."archive.php?c=%s&amp;o=%s";
		} else {
			$url = $Paths['log_url']."category/%s/?o=%s";
		}
		$link = sprintf($url, para_category($Pivot_Vars['c']), $offset+$show);
		if (para_weblog_needed($Current_weblog)) {
			$link .= '&amp;w='.para_weblog($Current_weblog);
		} elseif (isset($_GET['w']) && !empty($_GET['w'])) {
			$link .= '&amp;w='.htmlspecialchars($_GET['w']);
		}
		if (isset($_GET['t']) && !empty($_GET['t'])) {
			$link .= '&amp;t='.htmlspecialchars($_GET['t']);
		}

		$target = set_target('', 'target="_self"');
		$link = sprintf("<a href=\"%s\" %s>%s</a>", $link, $target, $text ) ;

		return $link;

	}

}



function snippet_archiveprevious($text="") {
	global $Cfg, $db, $Weblogs, $Current_weblog, $Archive_array, $archive_array_prev,
		$Pivot_Vars, $Paths;

	if($text=="") {
		$text = lang('weblog_text','previous_archive');
	}

	if (!defined('LIVEPAGE')) {

		// in 'normal' archive pages'..

		if (!isset($db->entry)) { return ""; }

		// get the filename for the current archive..
		$current_archive = make_archive_name();
		$id = $db->entry['code'];

		// get the archive_array, if it's not done yet.
		if (!isset($Archive_array)) { make_archive_array(); }

		// we make another array where we number the archives. As far as i know this is
		// the only decent way to find the next or previous entries..
		// sometime i will want to cache this for performance
		$counter = 0;

		// 2004/11/23 =*=*= JM - foreach() test
		if( is_array( $Archive_array[$Current_weblog] )) {
			foreach ($Archive_array[$Current_weblog] as $this_key => $this_val) {
				$temp_arr[$counter] = $this_key;
				if ($this_key == $current_archive) { $this_count = $counter; }
				$counter++;
			}
		}

		// then, we'll pick out the next one in the array (remember, the array
		// is in reverse chronological order)
		if (isset($temp_arr[$this_count-1])) {
			$prev_arc = $temp_arr[$this_count-1];
			$target = set_target('', 'target="_self"');
			$date = $Archive_array[$Current_weblog][ $prev_arc ];
			$link = make_archive_link($date);
			$text = format_date($date,$text);
			$link = sprintf("<a href=\"%s\" %s>%s</a>", $link, $target, $text ) ;

			return $link;
		} else {
			return "";

		}

	} else {

		// display link for pages in 'live archives'

		// guessstimate the current sybweblog.
		reset($Weblogs[$Current_weblog]['sub_weblog']);
		$my_subweblog = current($Weblogs[$Current_weblog]['sub_weblog']);

		$show = $my_subweblog['num_entries'];

		if (!isset($Pivot_Vars['o']) || empty($Pivot_Vars['o']) ||
			($Pivot_Vars['o'] <= 0)) {
		    $offset = -1;
		} else if ( $Pivot_Vars['o'] < $show){
		    $offset = 0;
		} else {
		    $offset = $Pivot_Vars['o']-$show;
		}

		// if it's the first one, we don't have to show it.
		if ($offset>=0) {

			if ($Cfg['mod_rewrite']==0) {
				$url = $Paths['pivot_url']."archive.php?c=%s&amp;o=%s";
			} else {
				$url = $Paths['log_url']."category/%s/?o=%s";
			}
			$link = sprintf($url, para_category($Pivot_Vars['c']), $offset);
			if (para_weblog_needed($Current_weblog)) {
				$link .= '&amp;w='.para_weblog($Current_weblog);
			} elseif (isset($_GET['w']) && !empty($_GET['w'])) {
				$link .= '&amp;w='.htmlspecialchars($_GET['w']);
			}
			if (isset($_GET['t']) && !empty($_GET['t'])) {
				$link .= '&amp;t='.htmlspecialchars($_GET['t']);
			}

			$target = set_target('', 'target="_self"');
			$link = sprintf("<a href=\"%s\" %s>%s</a>", $link, $target, $text ) ;

		} else {
			$link = "";

		}

		return $link;


	}
}



function snippet_nextentry($text="", $cutoff=20) {
	global $db, $Current_weblog;

	// initialize a temporary db..
	$temp_db = new db(FALSE);

	// we fetch the next one, until we get one that is set to 'publish'
	$get_next_amount = 1;
	do {
		$next_code=$db->get_next_code($get_next_amount);
		if ($next_code) {
			$temp_entry = $temp_db->read_entry($next_code);
			$weblogs = find_weblogs_with_cat($temp_entry['category']);
			if (in_array($Current_weblog,$weblogs)) {
				$ok = true;
			} else {
				$ok = false;
			}
		}
		$get_next_amount++;
	} while ( !($next_code===FALSE) &&
		!(($temp_entry['status']=="publish") && $ok) );

	unset($temp_db);

	if( ''==$text ) {
		$text = '&nbsp;&nbsp;&raquo; <a href="%link%">%title%</a>' ;
	}

	if ($next_code) {
		$title= (strlen($temp_entry['title'])>2) ? $temp_entry['title'] : substr($temp_entry['introduction'],0,100);
		$link=make_filelink($temp_entry, "", "");
		$output="$text";
		$output=str_replace("%link%", $link, $output);
		$output=str_replace("%code%", $next_code, $output);
		$output=str_replace("%title%", trimtext($title,$cutoff), $output);
		$output=str_replace("%subtitle%", trimtext($temp_entry['subtitle'],$cutoff), $output);
		return $output;

	} else {
		return "";
	}

}



function snippet_previousentry($text="", $cutoff=20) {
	global $db, $Current_weblog;

	// initialize a temporary db..
	$temp_db = new db(FALSE);

	// we fetch the next one, until we get one that is set to 'publish'
	$get_prev_amount = 1;
	do {
		$prev_code=$db->get_previous_code($get_prev_amount);
		if ($prev_code) {
			$temp_entry = $temp_db->read_entry($prev_code);
			$weblogs = find_weblogs_with_cat($temp_entry['category']);
			if (in_array($Current_weblog,$weblogs)) {
				$ok = true;
			} else {
				$ok = false;
			}
		}
		$get_prev_amount++;
	} while ( !($prev_code===FALSE) &&
		!(($temp_entry['status']=="publish") && $ok) );

	unset($temp_db);

	if( '' == $text ) {
		$text = '&laquo; <a href="%link%">%title%</a>' ;
	}

	if ($prev_code) {
		$title= (strlen($temp_entry['title'])>2) ? $temp_entry['title'] : substr($temp_entry['introduction'],0,100);
		$link=make_filelink($temp_entry, "", "");
		$output="$text";
		$output=str_replace("%link%", $link, $output);
		$output=str_replace("%code%", $prev_code, $output);
		$output=str_replace("%title%", trimtext($title,$cutoff), $output);
		$output=str_replace("%subtitle%", trimtext($temp_entry['subtitle'],$cutoff), $output);
		return $output;
	} else {
		return "";
	}
}



function snippet_nextentryincategory($text='', $cutoff='') {
	global $db;

	// initialize a temporary db..
	$temp_db = new db(FALSE);

	$cat = $db->entry['category'];

	// we fetch the next one, until we get one that is set to 'publish'
	$get_next_amount = 1;
	do {
		$next_code=$db->get_next_code($get_next_amount);
		if ($next_code) { $temp_entry = $temp_db->read_entry($next_code); }
		$get_next_amount++;

		if ($next_code===FALSE) { break; }

	} while (  !($temp_entry['status']=="publish")  || (count(@array_intersect( $temp_entry['category'], $cat)) == 0) );

	unset($temp_db);

	if( '' == $text ) {
		$text = '&nbsp;&nbsp;&raquo; <a href="%link%">%title%</a>';
	}

	if( '' == $cutoff ) {
		$cutoff = 20 ;
	}

	if ($next_code) {
		$title= (strlen($temp_entry['title'])>2) ? $temp_entry['title'] : substr($temp_entry['introduction'],0,100);
		$link=make_filelink($temp_entry, "", "");
		$output="$text";
		$output=str_replace("%link%", $link, $output);
		$output=str_replace("%code%", $next_code, $output);
		$output=str_replace("%title%", trimtext($title,$cutoff), $output);
		return $output;

	} else {
		return "";
	}

}



function snippet_previousentryincategory($text='', $cutoff='') {
	global $db;

	// initialize a temporary db..
	$temp_db = new db(FALSE);

	$cat = $db->entry['category'];

	// we fetch the next one, until we get one that is set to 'publish'
	$get_prev_amount = 1;
	do {
		$prev_code=$db->get_previous_code($get_prev_amount);
		if ($prev_code) { $temp_entry = $temp_db->read_entry($prev_code); }
		$get_prev_amount++;

		if ($prev_code===FALSE) { break; }

	} while ( !($temp_entry['status']=="publish") || (count(@array_intersect( $temp_entry['category'], $cat)) == 0) );

	unset($temp_db);

	if( '' == $text ) {
		$text = '&laquo; <a href="%link%">%title%</a>' ;
	}
	if( '' == $cutoff ) {
		$cutoff = 20 ;
	}

	if ($prev_code) {
		$title= (strlen($temp_entry['title'])>2) ? $temp_entry['title'] : substr($temp_entry['introduction'],0,100);
		$link=make_filelink($temp_entry, "", "");
		$output="$text";
		$output=str_replace("%link%", $link, $output);
		$output=str_replace("%code%", $prev_code, $output);
		$output=str_replace("%title%", trimtext($title,$cutoff), $output);
		return $output;
	} else {
		return "";
	}
}





function snippet_label($label) {


	if ($label != "register") {
		$output = lang('weblog_text', $label);
	} else {
		// One small expection for label 'register'.. If the user
		if ($user = load_user($_COOKIE['piv_reguser'])) {
			$output = lang('commentuser','loggedinas') . " ". $user['name'];
		} else {
			$output = lang('weblog_text', $label);
		}

	}

	return $output;

}


// originally hacked by digits to adjust image size if custom RSS image is used
// changed for accessibility [and localisation] by JM =*=*= 2004/10/03

function snippet_rssbutton() {
	global $Weblogs,$Current_weblog,$Paths ;

	$filename = fixpath( $Paths['pivot_url'].$Weblogs[$Current_weblog]['rss_path'] ).$Weblogs[$Current_weblog]['rss_filename'] ;
	$image    = $Paths['pivot_url'].'pics/rssbutton.png' ;
	list( $width,$height ) = @getimagesize( $Paths['pivot_path'].'pics/rssbutton.png' ) ;
	$alttext  = lang( 'weblog_text','xml_feed' ) ;

	$output   = '<a href="'.$filename.'" title="'.$alttext.'" rel="nofollow" class="badge">';
	$output  .= '<img src="'.$image.'" width="'.$width.'" height="'.$height.'"' ;
	$output  .= ' alt="'.$alttext.'" class="badge" longdesc="'.$filename.'" /></a>' ;
	$output   = targetblank( $output ) ;

	return $output;
}


// originally hacked by digits to adjust image size if custom ATOM image is used
// changed for accessibility [and localistaion] by JM =*=*= 2004/10/03

function snippet_atombutton() {
	global $Weblogs,$Current_weblog,$Paths ;

	$filename = fixpath( $Paths['pivot_url'].$Weblogs[$Current_weblog]['rss_path'] ).$Weblogs[$Current_weblog]['atom_filename'] ;
	$image    = $Paths['pivot_url'].'pics/atombutton.png' ;
	list( $width,$height ) = @getimagesize( $Paths['pivot_path'].'pics/atombutton.png' ) ;
	$alttext  = lang( 'weblog_text','atom_feed' ) ;

	$output   = '<a href="'.$filename.'" title="'.$alttext.'" rel="nofollow" class="badge">';
	$output  .= '<img src="'.$image.'" width="'.$width.'" height="'.$height.'"' ;
	$output  .= ' alt="'.$alttext.'" class="badge" longdesc="'.$filename.'" /></a>' ;
	$output   = targetblank( $output ) ;

	return $output;
}


function snippet_rss_autodiscovery() {
	global  $Weblogs, $Current_weblog, $Paths;

	$filename = fixpath($Paths['pivot_url']. $Weblogs[$Current_weblog]['rss_path']) . $Weblogs[$Current_weblog]['rss_filename'];

	$output = '<link rel="alternate" type="application/rss+xml" title="RSS" href="'.$filename.'" />';

	return $output;
}


function snippet_atom_autodiscovery() {
	global  $Weblogs, $Current_weblog, $Paths;

	$filename = fixpath($Paths['pivot_url']. $Weblogs[$Current_weblog]['rss_path']) . $Weblogs[$Current_weblog]['atom_filename'];

	$output = '<link rel="alternate" type="application/atom+xml" title="Atom" href="'.$filename.'" />';

	return $output;
}


function snippet_blogapi_autodiscovery() {
	global  $Weblogs, $Current_weblog, $Paths;

	$filname = basename($Weblogs[$Current_weblog]['front_filename'],'.php');
	$filename = $Weblogs[$Current_weblog]['rss_path'].'rsd-'.$filname.'.xml';
	$rsdfilename = fixpath($Paths['pivot_dir'].$filename);
	$rsdurl = fixpath($Paths['pivot_url'].$filename);
	// Some desktop blogging tools (Flock at least) needs to know the host explicitly...
	$rsdurl = $Paths['host'].$rsdurl;
	$blogurl = $Paths['host'].snippet_home();
	$blogapiurl = $Paths['host'].$Paths['pivot_url'].'metaweblog.php';
	$output = '<?xml version="1.0"?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
    <service>
        <engineName>Pivot</engineName>
        <engineLink>http://pivotlog.net/</engineLink>
        <homePageLink>'.$blogurl.'</homePageLink>
        <apis>
            <api name="MetaWeblog" preferred="true"
                apiLink="'.$blogapiurl.'"
                blogID="'.$Current_weblog.'" />
        </apis>
    </service>
</rsd>';

	write_file($filename, $output);

	$output = '<link rel="EditURI" type="application/rsd+xml" title="RSD" href="'.$rsdurl.'" />';

	return $output;
}

/**
 * Alias for snippet_trackautodiscovery.
 */
function snippet_trackback_autodiscovery() {

	return snippet_trackautodiscovery();

}

function snippet_last_comments() {
	global $Cfg, $db, $Weblogs, $Current_weblog, $Paths;

	if (isset($Weblogs[$Current_weblog]['lastcomm_format']) && (strlen($Weblogs[$Current_weblog]['lastcomm_format'])>2)) {
		$last_comments_format = $Weblogs[$Current_weblog]['lastcomm_format'];
	} else {
		$last_comments_format = "<a href='%url%' title='%date%' %popup%><b>%name%</b></a> (%title%): %comm%<br />";
	}

	if (isset($Weblogs[$Current_weblog]['lastcomm_length']) && ($Weblogs[$Current_weblog]['lastcomm_length']>0)) {
		$last_comments_length = $Weblogs[$Current_weblog]['lastcomm_length'];
	} else {
		$last_comments_length = 100;
	}

	if (isset($Weblogs[$Current_weblog]['lastcomm_trim']) && ($Weblogs[$Current_weblog]['lastcomm_trim']>0)) {
		$last_comments_trim = $Weblogs[$Current_weblog]['lastcomm_trim'];
	} else {
		$last_comments_trim = 16;
	}

	if (isset($Weblogs[$Current_weblog]['lastcomm_amount']) && ($Weblogs[$Current_weblog]['lastcomm_amount']>0)) {
		$last_comments_count = $Weblogs[$Current_weblog]['lastcomm_amount'];
	} else {
		$last_comments_count = 10;
	}

	if (file_exists($Paths['pivot_path']."db/ser_lastcomm.php")) {
		$file = array_reverse(load_serialize($Paths['pivot_path']."db/ser_lastcomm.php", true, true));
	} else {
		$file = array();
	}

	$cats = find_cats_in_weblog($Current_weblog);

	$output="";

	$count=0;

	if (count($file)>0) {
		foreach ($file as $comment) {

			// if it's in a category that published n the frontpage, and the user is not blocked, we display it.
			if ( (count(array_intersect($comment['category'], $cats))>0)
			&& (!(ip_check_block(trim($comment['ip']))))
			&& $db->entry_exists($comment['code']) ) {
				$id = safe_string($comment["name"],TRUE) . "-" .
					format_date($comment["date"], "%ye%%month%%day%%hour24%%minute%");

				$url=make_filelink($comment['code'], "", $id);

				$comment['name'] = trimtext(stripslashes($comment['name']), $last_comments_trim);
				$comment['title'] = trimtext(stripslashes($comment['title']), $last_comments_trim);
				// Commenting out mywordwrap since it currently breaks textile commands (and maybe more).
				// $comment['comment'] = mywordwrap($comment['comment'], 18, " ", 1);
				$comment['comment'] = comment_format($comment["comment"]);
				// Remove the [name:1] part in the 'last comments..
				$comment['comment'] = preg_replace("/\[(.*):([0-9]+)\]/iU", '', $comment['comment']);
				$comment['comment'] = trimtext(stripslashes($comment['comment']), $last_comments_length);
				// $comment['comment'] = unentify($comment['comment']);

				if ($Weblogs[$Current_weblog]['comment_pop']==1) {

					$popup= sprintf("onclick=\"window.open('%s', 'popuplink', 'width=%s,height=%s,directories=no,location=no,scrollbars=yes,menubar=no,status=yes,toolbar=no,resizable=yes'); return false\"", $url, $Weblogs[$Current_weblog]['comment_width'], $Weblogs[$Current_weblog]['comment_height']);

				} else {
					$popup="";
				}

				$thisline=$last_comments_format;
				$thisline=str_replace("%name%", $comment['name'], $thisline);
				$thisline=str_replace("%date%", $comment['date'], $thisline);
				$thisline=str_replace("%title%", $comment['title'], $thisline);
				$thisline=str_replace("%url%", $url, $thisline);
				$thisline=str_replace("%popup%", $popup, $thisline);
				$thisline=str_replace("%comm%", $comment['comment'], $thisline);

				$thisline=format_date($comment["date"], $thisline);

				$output.= "\n".$thisline;

				$count++;
				if ($count>=$last_comments_count) {
					return $output;
				}
			}
		}
	}
	return $output;
}



function snippet_emotpopup($title="") {
	global $Cfg, $Weblogs, $Current_weblog, $Paths, $emoticon_window,$emoticon_window_width,$emoticon_window_height;

	if ($title=="") { $title= lang('weblog_text', 'emoticons'); }

	if ($Weblogs[$Current_weblog]['emoticons']==1) {

		if ($emoticon_window != "") {

			$url = $Paths['extensions_url']."emoticons/".$emoticon_window;

			$onclick = sprintf("window.open('%s','emot','width=%s,height=%s,directories=no,location=no,menubar=no,scrollbars=no,status=yes,toolbar=no,resizable=yes');return false",
						$url,
						$emoticon_window_width,
						$emoticon_window_height
					);

			$output = sprintf("<a href='#' onmouseover=\"window.status='(Emoticons Reference)';return true;\" onmouseout=\"window.status='';return true;\" title='Open Emoticons Reference' onclick=\"%s\">%s</a>",
						$onclick,
						$title
					);
		}

	} else {
		$output="";
	}

	return $output;

}


function snippet_textilepopup($title="") {
	global $Cfg, $Weblogs, $Current_weblog, $Paths;

	if ($title=="") { $title= lang('weblog_text', 'textile'); }

	$desc = lang('weblog_text', 'textile_reference');

	if ($Weblogs[$Current_weblog]['comment_textile']==1) {

		$url=$Paths['pivot_url']."includes/textile/overview.html";
		$onclick="window.open('$url','textile','width=350,height=520,directories=no,location=no,menubar=no,scrollbars=no,status=yes,toolbar=no,resizable=no');return false";
		$output="<a href='#' onmouseover=\"window.status='$desc';return true;\" onmouseout=\"window.status='';return true;\" title='$desc' onclick=\"$onclick\">$title</a>";

	} else {
		$output="";
	}

	return $output;

}


function snippet_wastecomment() {

	$output="<input type='button'  style='border: 1px inset black;' value='Waste comment!' onclick=\"this.form.target='_blank'; this.form.action='http://ubique.ch/weblog/waste.pl'; this.form.submit(); if(!document.layers)location.reload()\"> ";

	return $output;

}

/**
 * Creates a (global absolute) link to current entry the page.
 *
 * @return string
 */
function snippet_self() {
	global $db, $Paths;

	return $Paths['host'].make_filelink($db->entry['code'], "","","");

}

/**
 * Creates a link to the "self registration"/"create account" page
 * (with the correct weblog selection).
 *
 * @param string $linktext
 * @return string
 */
function snippet_create_account_link($linktext = '') {
	global $Current_weblog, $Paths, $Cfg;
	if (!$Cfg['selfreg']) {
		return "<!-- No output from snippet create_account_link because self registration is disabled -->";
	}
	$url = $Paths['pivot_url']."selfreg.php?w=".para_weblog($Current_weblog);
	if ($linktext == '') {
		$linktext = lang('userinfo','selfreg');
	}
	return "<a href='$url' class='pivot-system-links'>$linktext</a>";

}

/**
 * Creates a link to the "comment user"/"registered visitor" page
 * (with the correct weblog selection).
 *
 * @param string $linktext
 * @return string
 */
function snippet_register_as_visitor_link($linktext = '') {
	global $Weblogs, $Current_weblog, $Paths;
	if (defined('LIVEPAGE')) {
		$output = get_register_as_visitor_link($linktext);
	} else {
		$ext = strtolower(getextension($Weblogs[$Current_weblog]['front_filename']));
		if (substr($ext,0,3)=="php") {
			// Include "set_output_paths" code? 
			$output = sprintf("<?php \n" .
				"include_once '".$Paths['pivot_path']."modules/module_userreg.php';\n" . 
				"echo get_register_as_visitor_link(\"%s\"); ?>", addslashes($linktext));
		} else {
			$output = "";
		}
	}
	return $output;
}

function snippet_singlepermalink($text='%title%', $title='%title%') {
	global $db, $Cfg, $Weblogs, $Current_weblog;

	$link=make_filelink($db->entry['code'], "","","");


	$text = str_replace('%title%', snippet_title(), $text);
	$text = str_replace('%subtitle%', snippet_subtitle(), $text);
	$text = format_date($db->entry["date"], $text );

	$title = trim($title);
	if (!empty($title)) {
		$title = str_replace('%title%', snippet_title('strip'), $title);
		$title = str_replace('%subtitle%', snippet_subtitle('strip'), $title);
		$title = format_date($db->entry["date"], $title );
	}

	$code = sprintf("<a href=\"%s%s\" title=\"%s\">%s</a>", $Weblogs[$Current_weblog]['ssi_prefix'], $link, $title ,$text);

	return $code;

}


function snippet_permalink($text='%title%', $title='%title%') {
	global $db, $Cfg, $Weblogs, $Current_weblog;

	$link=make_archive_link()."#e".$db->entry['code'];

	$text = str_replace('%title%', snippet_title(), $text);
	$text = format_date($db->entry["date"], $text );
	$title = trim($title);
	if (!empty($title)) {
		$title = str_replace('%title%', snippet_title('strip'), $title);
		$title = format_date($db->entry["date"], $title );
	}

	$code=sprintf("<a href=\"%s%s\" title=\"%s\">%s</a>", $Weblogs[$Current_weblog]['ssi_prefix'], $link, $title,$text);

	return $code;

}

/**
 * Creates the URL to the current or selected entry (by ID) with an
 * optional query string, and optionally to a specific weblog.
 *
 * @param string $code
 * @param string $query
 * @param string $weblog
 * @return string
 */
function snippet_entrylink($code='',$query='',$weblog='') {
	global $Cfg, $db;
	if ($code=='') {
		$code = $db->entry['code'];
	}
	if ($weblog != '') {
		$weblog = weblog_from_para($weblog);
	}
	$link = make_filelink($code, $weblog, "");
	if ($query!='') {
		if (strpos($link,"?")>0) {
			$link .= '&amp;'.$query;
		} else {
			$link .= '?'.$query;
		}
	}
	return $link;
}


function snippet_commentlink() {
	global $db, $Cfg, $Weblogs, $Current_weblog;

	$link=make_filelink($db->entry['code']);

	$commcount=$db->entry['commcount'];

	// special case: If comments are disabled, and there are no
	// comments, just return an empty string..
	if ( ($commcount == 0) &&  ($db->entry['allow_comments'] == 0) )  {
		return "";
	}

	$text = array($Weblogs[$Current_weblog]['comments_text_0'], $Weblogs[$Current_weblog]['comments_text_1'], $Weblogs[$Current_weblog]['comments_text_2']);

	$text = $text[min(2,$commcount)];
	$commcount = lang('numbers', $commcount);
	$commcount = str_replace("%num%", $commcount, $text);
	$commcount = str_replace("%n%", $db->entry['commcount'], $commcount);
	$commnames=$db->entry['commnames'];

	if ($commcount=="") { $commcount="(undefined)"; }

	if ($Weblogs[$Current_weblog]['comment_pop']==1) {

		$target = set_target('', 'target="_self"');

		$output = sprintf("<a href='%s' ", $link);
		$output.= sprintf("onclick=\"window.open('%s', 'popuplink', 'width=%s,height=%s,directories=no,location=no,scrollbars=yes,menubar=no,status=yes,toolbar=no,resizable=yes'); return false\"", $link, $Weblogs[$Current_weblog]['comment_width'], $Weblogs[$Current_weblog]['comment_height']);
		$output.= sprintf(" title=\"%s\" %s>%s</a>",$commnames, $target, $commcount);


	} else {

		$output=sprintf("<a href=\"%s\" title=\"%s\">%s</a>", $link, $commnames, $commcount);

	}

	return $output;
}


function snippet_inlinecommentlink() {
	global $db, $Cfg, $Weblogs, $Current_weblog, $Paths;

	$link=make_filelink($db->entry['code']);

	$commcount=$db->entry['commcount'];

	// special case: If comments are disabled, and there are no
	// comments, just return an empty string..
	if ( ($commcount == 0) && ($db->entry['allow_comments'] == 0) ) {
		return "";
	}

	$text = array($Weblogs[$Current_weblog]['comments_text_0'], $Weblogs[$Current_weblog]['comments_text_1'], $Weblogs[$Current_weblog]['comments_text_2']);
	$text = $text[min(2,$commcount)];
	$commcount = lang('numbers', $commcount);
	$commcount = str_replace("%num%", $commcount, $text);
	$commcount = str_replace("%n%", $db->entry['commcount'], $commcount);
	$commnames=$db->entry['commnames'];

	if ($commcount=="") { $commcount="(undefined)"; }

	$target = set_target('', 'target="_self"');

	$output = sprintf("<a href='%s' id='commentlink_%s' ", $link, $db->entry['code']);
	$output .= sprintf("onclick=\"$('#comments_%s').slideToggle('slow'); return false;\"",
		$db->entry['code'], $db->entry['code']);
	$output .= sprintf(" title=\"%s\" %s>%s</a>",$commnames, $target, $commcount);

	return $output;
	return htmlentities($output);
}



function snippet_inlinecomments() {
	global $db;

	$output .= "\n<div id='comments_".$db->entry['code']."' style='display: none; margin: 0; padding: 0; border-top: 1px solid transparent;'>\n";

	$output .= snippet_comments();
	$output .= snippet_commentform();

	$output .= "\n</div>\n";

	return $output;
}


function snippet_inlinemorelink() {
	global $db, $Cfg, $Weblogs, $Current_weblog, $Paths;

	if (strlen($db->entry['body'])>5) {

		$link=make_filelink($db->entry['code'],'','body');
		$more = $Weblogs[$Current_weblog]['read_more'];
		$text = ( strlen($more) > 1 ) ? $more : "(".lang('more').")";

		$target = set_target('', 'target="_self"');

		$output.= sprintf("<a href='%s' id='morelink_%s' ", $link, $db->entry['code']);
		$output.= sprintf("onclick=\"$('#body_%s').slideDown('slow'); $('#morelink_%s').hide(); return false;\"",
			$db->entry['code'], $db->entry['code']);
		$output.= sprintf(" %s>%s</a>", $target, $text);

		// substitute %title% in the 'more' link.
		$output = str_replace("%title%", $db->entry['title'], $output);

		return $output;

	} else {
		return "";
	}

}

/**
 * Displays the trackbacks for the current entry.
 *
 * @uses cms_tag_trackbacks to produce the output.
 */
function snippet_trackbacks() {
	global $db;

	$output = cms_tag_trackbacks('', '');

	return $output;
}

/**
 * Makes a link to the trackbacks on the current entry.
 */
function snippet_trackbacklink() {
	global $db, $Cfg, $Weblogs, $Current_weblog;

	$link=make_filelink($db->entry['code'],'','track');

	$trackcount=$db->entry['trackcount'];

/* No trackback disabling option yet ...
	// special case: If comments are disabled, and there are no
	// comments, just return an empty string..
	if ( ($commcount == 0) &&  ($db->entry['allow_comments'] == 0) )  {
		return "";
	}
*/

	$text = array($Weblogs[$Current_weblog]['trackbacks_text_0'], $Weblogs[$Current_weblog]['trackbacks_text_1'], $Weblogs[$Current_weblog]['trackbacks_text_2']);
	$text = $text[min(2,$trackcount)];
	$trackcount = lang('numbers', $trackcount);
	$trackcount = str_replace("%num%", $trackcount, $text);
	$trackcount = str_replace("%n%", $db->entry['trackcount'], $trackcount);
	$tracknames=$db->entry['tracknames'];

	if ($trackcount=="") { $trackcount="(undefined)"; }

	if ($Weblogs[$Current_weblog]['comment_pop']==1) {

		$target = set_target('', 'target="_self"');

		$output = sprintf("<a href='%s' ", $link);
		$output.= sprintf("onclick=\"window.open('%s', 'popuplink', 'width=%s,height=%s,directories=no,location=no,scrollbars=yes,menubar=no,status=yes,toolbar=no,resizable=yes'); return false\"", $link, $Weblogs[$Current_weblog]['comment_width'], $Weblogs[$Current_weblog]['comment_height']);
		$output.= sprintf(" title=\"%s\" %s>%s</a>",$tracknames, $target, $trackcount);
	} else {
		$output=sprintf("<a href=\"%s\" title=\"%s\">%s</a>", $link, $tracknames, $trackcount);

	}

	return $output;
}

/**
 * Inserts a bit of javascript to show the trackbacks on this entry, without
 * leaving the current page.
 */
function snippet_inlinetrackbacklink() {
	global $db, $Cfg, $Weblogs, $Current_weblog, $Paths;

	$link=make_filelink($db->entry['code'],'','track');

	$trackcount=$db->entry['trackcount'];

/*
	// special case: If comments are disabled, and there are no
	// comments, just return an empty string..
	if ( ($commcount == 0) && ($db->entry['allow_comments'] == 0) ) {
		return "";
	}
*/
	$text = array($Weblogs[$Current_weblog]['trackbacks_text_0'], $Weblogs[$Current_weblog]['trackbacks_text_1'], $Weblogs[$Current_weblog]['trackbacks_text_2']);
	$text = $text[min(2,$trackcount)];
	$trackcount = lang('numbers', $trackcount);
	$trackcount = str_replace("%num%", $trackcount, $text);
	$trackcount = str_replace("%n%", $db->entry['trackcount'], $trackcount);
	$tracknames=$db->entry['tracknames'];

	if ($trackcount=="") { $trackcount="(undefined)"; }

	$target = set_target('', 'target="_self"');

	$output = sprintf("<scr"."ipt type='text/javascript'>var pivot_url='%s';</scr"."ipt>", $Paths['pivot_url']);
	$output .= sprintf("<a href='%s' ", $link);
	$output.= sprintf("onclick=\"openComments('%s', this); return false\"", $db->entry['code']);
	$output.= sprintf(" title=\"%s\" %s>%s</a>",$tracknames, $target, $trackcount);


	return $output;
}

/**
 * Displays the amount of trackbacks for the current entry.
 */
function snippet_trackcount() {
	global $db, $Weblogs, $Current_weblog;

	$this_weblog= $Weblogs[$Current_weblog];

	$trackcount=$db->entry['trackcount'];

	if ($trackcount=="") { $trackcount=0; }

	$text = array($Weblogs[$Current_weblog]['trackbacks_text_0'], $Weblogs[$Current_weblog]['trackbacks_text_1'], $Weblogs[$Current_weblog]['trackbacks_text_2']);
	$text = $text[min(2,$trackcount)];
	$trackcount = lang('numbers', $trackcount);
	$trackcount = str_replace("%num%", $trackcount, $text);
	$trackcount = str_replace("%n%", $db->entry['trackcount'], $trackcount);


	return $trackcount;
}

/**
 * Inserts a list of the names of people who left a trackback to the current entry.
 */
function snippet_tracknames() {
	global $db, $Weblogs, $Current_weblog;

	$this_weblog= $Weblogs[$Current_weblog];

	$tracknames=$db->entry['tracknames'];

	return $tracknames;
}

/**
 * Inserts RDF-code on entrypages (in the entrypage template) for trackback
 * autodiscovery.
 *
 * Several blog authoring tools can use the RDF to detect the trackback URL for the entry.
 */
function snippet_trackautodiscovery() {
	global $db;

	$rdf = "<!-- <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"
xmlns:dc=\"http://purl.org/dc/elements/1.1/\"
xmlns:trackback=\"http://madskills.com/public/xml/rss/module/trackback/\"><rdf:Description
rdf:about=\"%url%\"
dc:identifier=\"%url%\"
dc:title=\"%title%\"
trackback:ping=\"%tb-url%\"/></rdf:RDF> -->";

	$url = gethost() . make_filelink($db->entry['code'], "","","");
	$tb_url  = snippet_pivot_url() . 'tb.php?tb_id=' . $db->entry['code'];

	$rdf = str_replace("%url%", $url, $rdf);
	$rdf = str_replace("%title%", $db->entry['title'], $rdf);
	$rdf = str_replace("%tb-url%", $tb_url, $rdf);

	return $rdf;

}

/**
 * Inserts the trackback URL for the current entry.
 *
 * The classes "tracklink-text" and "tracklink-url" can be used to style
 * the output.
 */
function snippet_tracklink() {
	global $db, $Weblogs, $Current_weblog, $Paths, $Cfg;

	if (strlen($Weblogs[$Current_weblog]['trackback_link_format'])>1) {
		$format = $Weblogs[$Current_weblog]['trackback_link_format'];
	} else {
		$format = '<p><span class="tracklink-text">Trackback link: </span><span class="tracklink-url">%url%</span></p>';
	}

	if($Cfg["hardened_trackback"] != 1)  {
		$tb_url = snippet_pivot_url() . 'tb.php?tb_id=' . $db->entry['code'];
		$output = str_replace("%url%", $tb_url, $format);
	} else {
		$tb_url = "<script type=\"text/javascript\" src=\"".$Paths['pivot_url'].
			"includes/js/gettbkey.php?id=".$db->entry["code"]."\"></script>\n";
		$tb_url .= "<div id=\"tbgetter\">".lang('spam','tburl_gen_javascript')."</div>";
		$tburl_gen = "<a href=\"javascript:void(null);\" ".
			"onclick=\"showTBURL(\'tbgetter\')\">".lang('spam','tburl_gen').
			"</a><br /><em>".lang('spam','tburl_gen_note')."</em>";
		$tb_url .= "\n<script type=\"text/javascript\">/*<![CDATA[*/\n".
			"showTBURLgen('tbgetter', '$tburl_gen');\n/*]]>*/</script>\n";

		$output = str_replace("%url%", $tb_url, $format);
	}

	return $output;

}


function snippet_inlinemore() {
	global $db;


	$output .= "\n<div id='body_".$db->entry['code']."' style='display: none; margin:0; padding: 0; border-top: 1px solid transparent;'>\n";

	$output .= snippet_body();

	$output .= "\n</div>\n";

	return $output;
}


function snippet_commcount($text1='',$text2='',$text3='') {
	global $db, $Weblogs, $Current_weblog;

	$this_weblog= $Weblogs[$Current_weblog];


	$commcount=$db->entry['commcount'];

	// special case: If comments are disabled, and there are no
	// comments, just return an empty string..
	if ( ($commcount == 0) &&  ($db->entry['allow_comments'] == 0) )  {
		return "";
	}
	if ($text1 == '') {
		$text = array($Weblogs[$Current_weblog]['comments_text_0'], 
			$Weblogs[$Current_weblog]['comments_text_1'], $Weblogs[$Current_weblog]['comments_text_2']);
	} else {
		if ($text2 == '') {
			$text2 = $text1;
		}
		if ($text3 == '') {
			$text3 = $text2;
		}
		$text = array($text1,$text2,$text3);
	}
	$text = $text[min(2,$commcount)];
	$commcount = lang('numbers', $commcount);
	$commcount = str_replace("%num%", $commcount, $text);
	$commcount = str_replace("%n%", $db->entry['commcount'], $commcount);

	return $commcount;
}



function snippet_commnames() {
	global $db, $Weblogs, $Current_weblog;

	$this_weblog= $Weblogs[$Current_weblog];

	$commnames=$db->entry['commnames'];

	return $commnames;
}


// changed for accessibility by JM =*=*= 2004/10/03

function snippet_search( $nobutton='',$button_name='', $placeholder="", $fieldname="",
		$weblog="", $template="") {
	global $Cfg, $Paths, $Current_weblog;

	$search_formname    = lang( 'accessibility','search_formname' ) ;
	$search_idname      = lang( 'accessibility','search_idname' ) ;

	if ($fieldname!="") {
		$search_fldname = $fieldname;
	} else {
		$search_fldname = lang( 'accessibility','search_fldname' ) ;
	}

	if ($placeholder!="") {
		$search_placeholder = $placeholder;
	} else {
		$search_placeholder = lang( 'accessibility','search_placeholder' ) ;
	}
	$search_url = $Paths['pivot_url']."search.php";
	if ($template!="") {
		$search_url .= "?t=".$template;
	}

	$output  = '<form method="post" action="'.$search_url.'"  class="pivot-search">'."\n" ;
	$output .= '<fieldset><legend>'.$search_formname.'</legend>'."\n" ;
	$output .= '<label for="'.$search_idname.'">'.$search_fldname.'</label>'."\n" ;
	$output .= '<input id="'.$search_idname.'" type="text" name="search" class="searchbox" value="' ;
	$output .= $search_placeholder.'" onblur="if(this.value==\'\') this.value=\'';
	$output .= $search_placeholder.'\';" onfocus="if(this.value==\'' .$search_placeholder;
	$output .= '\') this.value=\'\'; this.select();return true;" />'."\n" ;

	if( 'nobutton'!=$nobutton ) {
		if( ''==$button_name ) {
			$button_name = lang( 'weblog_text','search' ) ;
		}
		$output .= '<input type="submit" class="searchbutton" value="'.$button_name.'" />' ;
	}

	if ($Cfg['weblog_count'] > 1) {
                $weblog = trim($weblog);
		if ($weblog!="") {
			$output .= '<input type="hidden" name="w" value="'.strtolower(safe_string($weblog,true)).'" />'."\n";
		} else {
			$output .= '<input type="hidden" name="w" value="'.$Current_weblog.'" />'."\n";
		}
	}
	$output .= '</fieldset></form>'."\n" ;

	return $output ;
}



function snippet_top() {
	global $db;

	return "";
}

/**
 * Sets some variables and makes sure the tests are run to check
 * if the (static) page is still uptodate.
 * @return string
 */
function snippet_tick() {
	global $Weblogs, $Current_weblog, $Paths, $set_output_paths;

	if (defined('LIVEPAGE')) {
		return "";
	}

	$ext = strtolower(getextension($Weblogs[$Current_weblog]['front_filename']));
	if (substr($ext,0,3)=="php") {

		if(!isset($set_output_paths) || ($set_output_paths==FALSE)) {
			$output = "<?php \n ";
			$output .= "DEFINE('INWEBLOG', TRUE);\n ";
			$output .= sprintf("\$Current_weblog='%s';\n ", $Current_weblog);
			$output .= "include_once '".$Paths['pivot_path']."pv_core.php'; \n?".">";
		}
	} else {
		$output = "";
	}
	return $output;
}


/**
 * Returns the local absolute URL to the (current) weblog frontpage.
 * @return string
 */
function snippet_home() {
	return get_log_url('index');
}


/**
 * Returns the local absolute URL to the upload directory.
 * @return string
 */
function snippet_upload_dir() {
	global $Paths;

	return $Paths['upload_url'];
}


/**
 * Returns the local absolute URL to the template directory.
 * @return string
 */
function snippet_template_dir() {
	global $Paths;

	return str_replace($Paths['pivot_path'],$Paths['pivot_url'],$Paths['templates_path']);
}


/**
 * Returns the local absolute URL to the pivot directory.
 * @return string
 */
function snippet_pivot_dir() {
	global $Paths;

	return $Paths['pivot_url'];
}


function snippet_pivot_path() {
	global $Paths;

	return $Paths['pivot_path'];
}


/**
 * Returns the global absolute URL to the pivot directory.
 * @return string
 */
function snippet_pivot_url() {
	global $Paths;

	return $Paths['host'].$Paths['pivot_url'];
}


/**
 * Returns the local absolute URL to the (current) weblog directory.
 * @return string
 */
function snippet_log_dir() {
	global $Paths;

	return $Paths['log_url'];
}

/**
 * Returns the global absolute URL to the (current) weblog directory.
 * @return string
 */
function snippet_log_url() {
	global $Paths;

	return $Paths['host'].snippet_log_dir();
}


function snippet_link_static($titel, $naam) {
 global $global_pref;

 $filename="db/static/".$naam.".htm";

 if (file_exists($filename)) {

  $linkname=str_replace("%1",$naam,$global_pref['file_format']);
  $file="<a href=$linkname>$titel</a>";
 } else {
  $file="<!-- error: could not link $filename. File does not exist -->";
 }

 return $file;
}


function snippet_static($titel) {
 $filename="db/static/".$titel.".htm";

 if (file_exists($filename)) {

  $file=implode("", file("$filename"));
 } else {
  $file="<!-- error: could not include $filename. File does not exist -->";
 }
 return $file;
}

// changed 2004/10/08 =*=*= JM

function snippet_vote( $value,$label,$title='',$total='',$group='' ) {
	global $Paths,$db,$Current_weblog ;

	$url  = $Paths['pivot_url'];
	$url .= 'submit.php?vote='.urlencode( $value );
	$url .= '&amp;piv_code='.$db->entry['code'];
	$url .= '&amp;piv_weblog='.urlencode( $Current_weblog );
	$url .=	'&amp;group='.$group;

	if( '' != $total ) {
		$count = @array_count_values( $db->entry['votes'] ) ;
		$count = isset( $count[$value] ) ? $count[$value] : 0 ;
		$total = str_replace( '%num%',$count,' '.$total ) ;
	}

	$onclick = "window.open('$url','emot','width=200,height=100,directories=no,location=no,menubar=no,scrollbars=no,status=yes,toolbar=no,resizable=no');return false";
	$output = sprintf("<a href='#' onclick=\"%s\" title=\"%s\">%s</a>%s", $onclick, $title, $label, $total);

	return $output;

}

function snippet_karma($value, $label) {

	$title = lang('karma', 'vote');
	$title = str_replace('%val%', lang('karma', $value), $title);

	return snippet_vote($value, $label, $title, '%num% ', "k_");

}

function snippet_message($format="") {
	global $Pivot_Vars;

	if ($format=="") {
		$format="<a id='message'></a><p class='pivot-message'>%message%</p>\n\n";
	}

	if (isset($Pivot_Vars['message'])) {
		$message = strip_tags(stripslashes($Pivot_Vars['message']));
		$output = str_replace("%message%", $message, $format);
	} else {
		$output = "";
	}

	return $output;

}


function snippet_close_on_esc() {
	return "<script language='javaScript'>\ndocument.onkeypress = function esc(e) {\nif(typeof(e) == 'undefined') { e=event; }\nif (e.keyCode == 27) { self.close(); }\n}\n</script>\n";
}



function snippet_charset() {
	global $CurrentEncoding;

	if (isset($CurrentEncoding)) {
		return $CurrentEncoding;
	} else {
		return "iso-8859-1";
	}

}

/**
 * Output the language code for the current weblog/language.
 *
 * The optional $type argument can be either 'html' or 'xml'. The output
 * will then be suitable to use in templates, in the html tag, to set
 * the correct language. (If you are using XHMTL 1.0, which is the default
 * for Pivot, you should use both [[lang:html]] and [[lang:xml]].)
 *
 * @param string $type
 * @return string
 */
function snippet_lang( $type='' ) {
	global $Language, $CurrentLanguage, $CurrentEncoding;

	$lang = $Language[$CurrentLanguage]->getName();

	if( ''!=$lang ) {
		$output = $lang ;
	} else {
		$output = 'en' ;
	}
	if( $type != '' ) {
		// is there a 2-letter language code set in accessibility?
		// and if so, is it different to 'en'? yes, override.
		$text = lang( 'accessibility','lang') ;
		if(( $text!=$output ) && ( 2==strlen( $text ))) {
			$output = $text ;
		}
		if ($type == 'html') {
			$output = 'lang="'.$output.'"' ;
		} elseif ($type == 'xml') {
			$output = 'xml:lang="'.$output.'"' ;
		} else {
			$output = '';
		}
	}
	return $output ;
}





// cosmetic change 2004/10/08 =*=*= JM

function snippet_blogroll_iframe( $width,$height ) {
	global $Paths,$Weblogs,$Current_weblog ;

	$my_weblog = $Weblogs[$Current_weblog];
	$id = $my_weblog['blogroll_id'];

	$fg = (strlen($my_weblog['blogroll_fg'])>0) ? $my_weblog['blogroll_fg'] : "#000";
	$bg = (strlen($my_weblog['blogroll_bg'])>0) ? $my_weblog['blogroll_bg'] : "#FFF";
	$line1 = (strlen($my_weblog['blogroll_line1'])>0) ? $my_weblog['blogroll_line1'] : "#EEE";
	$line2 = (strlen($my_weblog['blogroll_line2'])>0) ? $my_weblog['blogroll_line2'] : "#EEE";
	$c1 = (strlen($my_weblog['blogroll_c1'])>0) ? $my_weblog['blogroll_c1'] : "#90A8BF";
	$c2 = (strlen($my_weblog['blogroll_c2'])>0) ? $my_weblog['blogroll_c2'] : "#ACBECF";
	$c3 = (strlen($my_weblog['blogroll_c3'])>0) ? $my_weblog['blogroll_c3'] : "#C8D4DF";
	$c4 = (strlen($my_weblog['blogroll_c4'])>0) ? $my_weblog['blogroll_c4'] : "#E3E9EF";

	$colors = urlencode(implode( '|',array( $fg,$bg,$line1,$line2,$c1,$c2,$c3,$c4 )));

	$output  = '<iframe src="'.$Paths['pivot_url'];
	$output .= 'includes/blogroll.php?id='.$id;
	$output .= '&amp;color='.$colors.'" width="'.$width.'" height="'.$height;
	$output .= '" frameborder="0" style="border:1px;margin:0;"></iframe>';

	return $output;
}

function snippet_rss($rssurl, $rssmax, $rssformat, $trimlen="", $rss_cache_age="") {
	global $Paths, $set_output_paths;

	if ($rssmax=="") { $rssmax=8; }
	if ($rssformat=="") {
		$rssformat="<b><a href=\"%link%\">%title%</a></b><br /> <small>%description%</small><br />";
	}
	if ($rss_cache_age=="") {
		$rss_cache_age = 60 * 60 * 8;
	}

	if ($trimlen=="") { $trimlen = 100; }

	if (defined('LIVEPAGE')) {

		ob_start();
		include($Paths['pivot_path']. "includes/rss.php");
		$output = ob_get_contents();
		ob_end_clean();

	} else {

		$output = "<?php \n\$rssurl=\"$rssurl\";\n";
		$output .= "\$rssmax=$rssmax;\n";
		$output .= "\$rss_cache_age=$rss_cache_age;\n";
		$output .= "\$trimlen=$trimlen;\n";
		$output .= "\$rssformat=\"".addslashes($rssformat)."\";\n";
		if(!isset($set_output_paths) || ($set_output_paths==FALSE)) {
			$set_output_paths=TRUE;
			$output .= sprintf("DEFINE('INWEBLOG', TRUE);\n ");
			$output .= sprintf("\$weblog='%s';\n ", $Current_weblog);
		}
		$output.= "include \"".$Paths['pivot_path']."includes/rss.php\"; ?".">";
	}
	return $output;
}



function snippet_editlink($name="") {
	global $Pivot_Vars, $Paths, $Cfg, $db, $Weblogs, $Current_weblog, $set_output_paths;

	if ($name=="") {
		$name = lang('general', 'edit');
	}

	if (defined('LIVEPAGE')) {

		$output = get_editentrylink($name);

	} else {

		$ext = strtolower(getextension($Weblogs[$Current_weblog]['front_filename']));
		if (substr($ext,0,3)=="php") {

			$output = "";

			if(!isset($set_output_paths) || ($set_output_paths==FALSE)) {
				$set_output_paths=TRUE;
				$output .= "<?php \n";
				$output .= "DEFINE('INWEBLOG', TRUE);\n";
				$output .= sprintf("\$weblog='%s';\n ", $Current_weblog);
				$output .= "include_once '".$Paths['pivot_path']."pv_core.php'; \n?".">";
			}

			$output .= sprintf("<?php echo get_editentrylink(\"%s\", '%s'); ?>", addslashes($name), $db->entry['code']);

		} else {
			$output = "";
		}

	}



	return $output;

}


/**
 * Displays a message when the moderation queue is enabled.
 *
 */
function snippet_moderate_message() {
	global $Cfg;

	if ($Cfg["moderate_comments"] == 1) {
		return sprintf("<p id='moderate_queue_message'>%s</p>", lang("comment", "moderate_queue_on"));
	} else {
		return "";
	}

}

/**
 * Spam protection snippets. Based on the excellent Pivot Blacklist
 * written by Marco van Hylckama Vlieg.
 */

/**
 * Returns the HTML for the SpamQuiz (that should go inside the comment form).
 *
 * @param string $p_sIformat Format for the introduction.
 * @param string $p_sQformat Format for the question text and answer box.
 * @return string
 */
function snippet_spamquiz($p_sIformat="", $p_sQformat="") {

	global $db, $Paths, $Cfg;

	if ($Cfg["spamquiz"] != 1) {
		return "<!-- SpamQuiz spam protection is disabled in Pivot configuration -->";
	}

	if ($p_sIformat=="") {
		$p_sIformat = "<p><small>%intro%</small><br />";
	}

	if ($p_sQformat=="") {
		$p_sQformat = "<label for=\"spamquiz_answer\"><b>%question%</b></label> &nbsp;".
						"<input type=\"text\" class=\"commentinput\" name=\"spamquiz_answer\" ".
						"id=\"spamquiz_answer\"  %name_value% /></p>";
	}

	require_once($Paths["pivot_path"]."modules/module_spamkiller.php");

	// Is the entry old enough?
	$entryDate = substr($db->entry['date'], 0, 10);
	$then = strtotime($entryDate);
	$secsPerDay = 60*60*24;
	$now = strtotime('now');
	$diff = $now - $then;
	$dayDiff = ($diff/$secsPerDay);
	$numDaysOld = (int)$dayDiff;

	if($numDaysOld<$Cfg["spamquiz_days"])	{
		return "<!-- SpamQuiz disabled - not old enough entry -->";
	}

	$sTheAnswer = $_COOKIE["spamquiz_answer"];

	if(trim($Cfg["spamquiz_answer"]) != $_COOKIE["spamquiz_answer"]) {
		$sTheAnswer = "";
	}

	$sQuestion = $Cfg["spamquiz_question"];
	$sIntro = $Cfg["spamquiz_explain"];
	$sIntroFormat = stripslashes(str_replace("%intro%", $sIntro, $p_sIformat));
	$sQuestionFormat = stripslashes(str_replace("%question%", $sQuestion, $p_sQformat));
	$sQuestionFormat = str_replace("%name_value%", "value=\"$sTheAnswer\"", $sQuestionFormat);
	$sHTML = $sIntroFormat.$sQuestionFormat;

	return $sHTML;

}


/**
 * Called when displaying the tags.php page. if a tag is given,
 * it displays that tag, else the local Tag Cosmos
 *
 * @return string
 */
function snippet_tagpage()	{
	global $Paths;

	// Check if we called "tags.php/tagname" or
	// "tags.php?somevar=somevalue[...]/tagname"
	if (preg_match('#tags.php(\?[^/]*|)/(.+)$#',$_SERVER['REQUEST_URI'], $matches) > 0 ) {
		$_GET['tag'] = $matches[2];
	}

	if((!isset($_GET['tag'])) || ($_GET['tag'] == ""))	{
		$output = printTagCosmos();
	} else {
		$output = printTag($_GET['tag']);
	}

	return $output;

}


/**
 * Get a concise list of the entry's tags.
 *
 * @return string The text to display.
 * @param string $text The output format. The default
 *  value is "Used tags: %tags%". (or the localised version thereof)
 * @param string $sep The separator between the tags.
 *  The default value is ", ".
 */
function snippet_tags($text="", $sep="") {

	if ($text=="") { $text = lang('tags', 'used_tags').": %tags%"; }
	if ($sep=="") { $sep = ", "; }

	$tags = getTags(true);

	if (count($tags)>0) {
		$output = implode($sep, $tags);

		$output = str_replace("%tags%", $output, $text);
	} else {
		$output = "";
	}

	return $output;

}

/**
 * Display a small tagcloud.
 *
 * @param integer $amount
 * @param integer $minsize
 * @param integer $maxsize
 * @param string $template
 * @return string
 */
function snippet_tagcloud($amount=0, $minsize=0, $maxsize=0, $template="") {
    global $Paths, $Current_weblog, $Cfg;

    if ($minsize==0) { $minsize=8; }
    if ($maxsize==0) { $maxsize=17; }
    if ($amount==0) { $amount=20; }

    $tagcosmos = getTagCosmos($amount, $Current_weblog);

    // This is the factor we need to calculate the EM sizes. $minsize is 1 em,
    // $maxsize will be ($maxsize / $minsize) EM.. Take care if $tagcosmos['maxvalue'] == $tagcosmos['minvalue']
    if ($tagcosmos['maxvalue'] != $tagcosmos['minvalue']) {
        $factor = ($maxsize - $minsize) / ($tagcosmos['maxvalue'] - $tagcosmos['minvalue']) / $minsize;
    } else {
        $factor = 0;
    }

    foreach($tagcosmos['tags'] as $key => $value)	{

        // Calculate the size, depending on value.
        $nSize = sprintf("%0.2f", (1 + ($value - $tagcosmos['minvalue']) * $factor));

        $htmllinks[$key] = sprintf("<a style=\"font-size:%sem;\" href=\"%s\"
		  rel=\"tag\" title=\"%s: %s, %s %s\">%s</a>\n",
            $nSize,
            tagLink($key,$template),
            lang('tags', 'tag'),
            $key,
            $value,
            lang('userbar', 'entries'),
            $key
        );
    }

    $output = "<div id='tagcloud' style='font-size: {$minsize}px;'>";
    $output .= implode(" ", $htmllinks);

    if (para_weblog_needed($Current_weblog)) {
        $para .= "?w=".para_weblog($Current_weblog);
        $para .= ($template!="") ? "&amp;t=$template" : "";
    } else {
        $para = ($template!="") ? "?t=$template" : "";
    }

    if ($Cfg['mod_rewrite']==0) {
        $link = $Paths['pivot_url']."tags.php";
    } else {
        $link = $Paths['log_url']."tags";
    }

    $output .= sprintf('<em>(<a href="%s%s">%s</a>)</em>',
       $link, $para, lang('general', 'all')
    );

    $output .= "</div>";

    return $output;

}


/**
 * Get detailed info for tags used in an entry
 *
 * @param string $template
 * @return string
 */
function snippet_ttaglist($template="")	{

	global $db, $Paths;

	$aTagsList = getTags(false);

	if(sizeof($aTagsList) > 0)	{
		$output = "<div id='tagpage'>\n";
		$output .= "<h3>".lang('tags','tags_in_posting')."</h3>\n";

		$tagLinks = array();
		foreach($aTagsList as $sTag)	{
			make_related_tags($sTag, $aTagsList);
			$tagLinks[] = sprintf('<a rel="tag" href="%s" title="tag: %s">%s</a>',
					tagLink($sTag,$template),
					$sTag,
					$sTag
				);
		}

		$output .= "<p>" . implode(", ", $tagLinks) . "</p>\n";

		reset($aTagsList);
		foreach($aTagsList as $sRelated)	{
			$sTheRelatedLinks = get_entries_with_tag($sRelated, $db->entry["code"]);
			if(!strlen($sTheRelatedLinks) == 0)	{
				$output .= "\n<h3>";
				$output .= lang('tags','other_posts_with_tag')." '".$sRelated."'</h3>\n";
				$output .=  $sTheRelatedLinks;
			}
		}
		$output .= "\n</div>\n";

	} else	{
		$output = "";
	}

	return $output;
}

/**
 * Treat categories as tags. I'm not quite sure if this is all that useful
 *
 * @param string $filter
 * @return string
 */
function snippet_tcategory($filter="") {
	global $db, $Weblogs, $Current_weblog, $Current_subweblog;
	$output=$db->entry["category"];

	if ( ($filter != "") && (isset($Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog])) ) {
		$output = array_intersect ( $Weblogs[$Current_weblog]['sub_weblog'][$Current_subweblog]['categories'], $output);
	}

	if (is_array($output)) {
		$count = 0;
		$sOut = "";
		foreach($output as $category)	{
			$sOut .= snippet_tt($category);
			$count++;
			if($count < sizeof($output))	{
				$sOut .= ", ";
			}
		}
		return $sOut;
	} else {
		return "";
	}
}


/**
 * Display a Tag, as used in the introduction or body
 *
 * @param string $tagName
 * @param string $externalLink
 * @param string $template
 * @return string
 */
function snippet_tt($tagName, $externalLink="", $template="") {

	if(strlen($externalLink) > 0) {
		// If the external link doesn't have a protocol prefix, add it.
		if (strpos($externalLink,"tp://") === false) {
			$externalLink = "http://".$externalLink;
		}
		$tag_url = $externalLink;
	} else {
		$tag_url = tagLink($tagName,$template);
	}

	return  '<a rel="tag" class="taglink" href="'.$tag_url.'" title="'.
		lang('tags','tag_ext_link').": $tagName\">$tagName</a>";

}

?>
