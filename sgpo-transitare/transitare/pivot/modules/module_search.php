<?php

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

// Determine if all blogs should be searched. (If neither LIVEPAGE or INWEBLOG
// is defined, it's run from the admin GUI and no weblog is defined.)
if (!defined('LIVEPAGE') && !defined('INWEBLOG')) {
	$search_all = true;
} elseif (($Pivot_Vars['w'] == "_all_") || ($Cfg['weblog_count'] == 1)) {
	$search_all = true;
} else {
        $search_all = false;
}
		

LoadDefLanguage();

@set_time_limit(0);
//error_reporting(0);

// 2004/10/27 =*=*= JM
$tmp_filtered_words = getFilteredWords();
// Removing accent from (and lower casing) any accented chars
$filtered_words = array();
foreach($tmp_filtered_words as $word) {
	$filtered_words[] = transliterate_accents($word);
}

global $allowed_chars;
// Since we are using transliterate_accents (and strtolower) on both
// filtering words, search words and text to search, we only need
// numbers and lower case US-ascii characters.
// NB! The non-range hyphen *must* be at the end.
$allowed_chars = "0-9a-z!#$%&+@-";

// search is an array
// 0 -> for display
// 1 -> for search [no accents]
$search_str = trim($_POST['search']." ".$_GET['q']);

// If magic_quotes_gpc is set, we need to strip slashes..
if (get_magic_quotes_gpc()) {
	$search_str = stripslashes($search_str);
}

// Avoiding XSS attacks in display string
$search_a[0] = htmlspecialchars($search_str);
// Removing any accented chars and lower casing search string
$search_a[1] = strtolower(transliterate_accents($search_str));


/**
 * Removing accent (and lower casing) any accented chars.
 *
 * Doing ord() on chars to avoid accented chars in source code
 * If not we will forever have mac/pc/unix transcoding problems.
 * The function might be (too) slow.
 */
function transliterate_accents( $theStr ) {
	global $i18n_use;

	$r = '' ;
	if( is_string( $theStr )) {

		$t = strlen( $theStr ) ;
		for( $i=0 ; $i < $t ; $i++ ) {


			if (!$i18n_use) {
				$ord = ord($theStr[$i]);
			} else {
				list($ord,$chars_used) = i18n_ord($theStr,$i);
				$i += ($chars_used-1);
			}

			// what is this
			switch( $ord ) {
				case( 192 ) : // A-grave
				case( 193 ) : // A-acute
				case( 194 ) : // A-circ
				case( 195 ) : // A-tilde
				case( 196 ) : // A-uml
				case( 197 ) : // A-ring
				case( 224 ) : // a-grave
				case( 225 ) : // a-acute
				case( 226 ) : // a-circ
				case( 227 ) : // a-tilde
				case( 228 ) : // a-uml
				case( 229 ) : // a-ring
					$r .= 'a' ; break ;
					// -------------------------
				case( 193 ) : // AE-lig
				case( 230 ) : // ae-lig
					$r .= 'ae' ; break ;
					// -------------------------
				case( 231 ) : // c-cedil
				case( 199 ) : // C-cedil
					$r .= 'c' ; break ;
					// -------------------------
				case( 200 ) : // E-grave
				case( 201 ) : // E-acute
				case( 202 ) : // E-circ
				case( 203 ) : // E-uml
				case( 232 ) : // e-grave
				case( 233 ) : // e-acute
				case( 234 ) : // e-circ
				case( 235 ) : // e-uml
					$r .= 'e' ; break ;
					// -------------------------
				case( 204 ) : // I-grave
				case( 205 ) : // I-acute
				case( 206 ) : // I-circ
				case( 207 ) : // I-uml
				case( 236 ) : // i-grave
				case( 237 ) : // i-acute
				case( 238 ) : // i-circ
				case( 239 ) : // i-uml
					$r .= 'i' ; break ;
					// -------------------------
				case( 241 ) : // n-tilde
				case( 209 ) : // N-tilde
					$r .= 'n' ; break ;
					// -------------------------
				case( 210 ) : // O-grave
				case( 211 ) : // O-acute
				case( 212 ) : // O-circ
				case( 213 ) : // O-tilde
				case( 214 ) : // O-uml
				case( 216 ) : // O-slash
				case( 242 ) : // o-grave
				case( 243 ) : // o-acute
				case( 244 ) : // o-circ
				case( 245 ) : // o-tilde
				case( 246 ) : // o-uml
				case( 248 ) : // o-slash
					$r .= 'o' ; break ;
					// -------------------------
				// NOTE: these don't get thru form?
				case( 338 ) : // OE-lig
				case( 339 ) : // oe-lig
					$r .= 'oe' ; break ;
					// -------------------------
				case( 217 ) : // U-grave
				case( 218 ) : // U-acute
				case( 219 ) : // U-circ
				case( 220 ) : // U-uml
				case( 249 ) : // u-grave
				case( 250 ) : // u-acute
				case( 251 ) : // u-circ
				case( 252 ) : // u-uml
					$r .= 'u' ; break ;
					// -------------------------
				case( 223 ) : // ss-lig
					$r .= 'ss' ; break ;
					// -------------------------
					// NOTE: y-uml don't get thru form?
				case( 255 ) : // Y-uml
				case( 376 ) : // y-uml
					$r .= 'y' ; break ;
					// -------------------------
					// ADD OTHER CHARS HERE...
					// -------------------------
				default :
					if ($ord > 127) {
						$r .= 'z';
					} else {
						$r .= $theStr[$i] ;
					}
			}
		}
	}
	return $r ;
}


// ---------- functions for indexing ------------- //

/**
 * Indexes entries in the Pivot database and returns true
 * if there are more entries to index.
 *
 * @param int $start Code for first entry to index
 * @param int $stop Code for last entry to index
 * @param int $time Indexing time.
 * @return boolean
 */
function start_index ($start, $stop, $time) {

	$db = new db();

	$entries = $db->db_lowlevel->date_index;

	$count = 0;

	// 2004/10/17 =*=*= JM - doing these in loop will slow things
	$date = date( 'Y-m-d-H-i' );
	$cats = cfg_cat_nosearchindex();

	debug("index excludes cats: ".implode(',',$cats));

	foreach($entries as $key => $value) {

		if(($count++)<($start)) { continue; }
		if(($count)>($stop)) { break; }

		// 2004/10/17 =*=*= JM - New searchIndex tests...
		$entry = $db->read_entry( $key );
		// rules: index if all are true:
		// - ( status == 'publish' )or(( status == 'timed')&&( publish_date <= date ))
		// - at least one category is not in exclusion array

		// check status and date
		if(( 'publish'==$entry['status'] )
			||(( 'timed'==$entry['status'] )&&( $entry['publish_date'] <= $date ))) {

			// categories...
			if( can_search_cats( $cats,$entry['category'] )) {
				if (($count % 50) == 0) {
					printf("%1.2f sec: Processed %d entries.."."<br />\n", (timetaken('int')+$time), $count);
					flush();
				}
				strip_words( $entry);
			}
		}
	}

	echo("<br /><br />");

	// decide if we need to do some more.
	if(count($entries) > ($stop)) {
		return TRUE;
	} else {
		return FALSE;
	}

}


/**
 * Clears the search index (by deleteing all files, in the folder db/search,
 * whose filename don't starting with 'filtered_words').
 *
 * @return void
 */
function clear_index() {

	$d = dir( 'db/search/' );
	while( false !== ( $entry = $d->read())) {
		if((( '.' != $entry ) &&( '..' != $entry ))
		&&( 'filtered_words' != substr( $entry,0,14 ))) {
			unlink( 'db/search/'.$entry );
			//echo("[$entry]");
		}
	}
	$d->close();
}



/**
 * Updates the search index for a single entry.
 *
 * @param array $entry The entry to get indexed/updated.
 * @return void
 */
function update_index($entry) {
	global $master_index;


	strip_words($entry);

	foreach($master_index as $key => $index) {
		$filename = "db/search/" . $key . ".php";

		// load the index if it exists..
		if (file_exists($filename)) {
			$temp = load_serialize($filename);
		} else {
			$temp = array();
		}

		// add the new stuff..
		foreach($index as $key=>$val) {
			if(isset($temp[$key])) {
				$occurr = explode("|", $temp[$key]);
				$occurr[] = $val;
				$val = implode("|", array_unique($occurr));
				$temp[$key] = $val;
			} else {
				$temp[$key] = $val;
			}
		}

		//echo("<br />mems1:".memory_get_usage());
		save_serialize($filename, $temp);
		unset($master_index[$key]);
		$wordcount += count($index);
	}

}


/**
 * Parse the input, strip stop/non-words, remove accents, lower case and
 * add to the index.
 *
 * @uses filter_words The function that strips the stop/non-words
 * @uses add_to_index The function that adds the filtered words to the index
 * @return void
 */
function strip_words ($arr) {
	global $allowed_chars;

	$words = $arr['title']." ".$arr['subtitle']." ".$arr['introduction']." ".$arr['body']." ".$arr['keywords'];

	$words = unentify(strip_tags(str_replace(">", "> ", str_replace("<", " <",$words))));
	$words = transliterate_accents($words);
        $words = strtolower($words);

	$result = preg_split ('/[^'.preg_quote($allowed_chars).']/', $words);

	$filter = filter_words($result);

	add_to_index($filter, $arr['code']);

}



/**
 * Adds the words in an array to the index.
 *
 * @param array $arr Words to be added to the index
 * @param int $code Associated entry code.
 * @return void
 */
function add_to_index ($arr,$code) {
	global $master_index;

	$arr = array_unique ($arr);

	foreach($arr as $string) {
		if(!isset($master_index[ $string{0} ][ $string ])) {
			$master_index[ $string{0} ][ $string ] = $code;
		} else {
			$master_index[ $string{0} ][ $string ] .= "|".$code;
		}

	}


}

/**
 * Strips stop/non-words from an array of words.
 *
 * @param array $arr Words to be filtered.
 * @return array
 */
function filter_words ($arr) {
	global $filtered_words, $allowed_chars;

	$clean = array();

	foreach($arr as $value) {
		// The input has already passed through transliterate_accents
		// $value = transliterate_accents( $value );
		$value = preg_replace ('/[^'.preg_quote($allowed_chars).']/i','',$value);

		// Do not include same word several times or very short words
		if (in_array($value,$clean) || (strlen($value) <= 2)) {
			continue;
		}
		// Filtering out common (or just unwanted words)
		if (is_array($filtered_words)) {
			if (!in_array($value, $filtered_words)) {
				$clean[] = $value;
			}
		} else {
			$clean[] = $value;
		}
	}

	return $clean;
}

/**
 * Write the index to file (using the global variable $master_index.
 *
 * @param boolean $silent
 * @return void
 */
function write_index ($silent=FALSE) {
	global $master_index;

	if( is_array( $master_index )) {

		debug("saving ".count($master_index)." indices.");

		if( 0 != count( $master_index )) {

			$wordcount = 0;

			foreach($master_index as $key => $index) {
				$filename = "db/search/" . $key . ".php";

				// load the index if it exists..
				if (file_exists($filename)) {
					$temp = load_serialize($filename);
				} else {
					$temp = array();
				}

				// add the new stuff..
				foreach($index as $key=>$val) {
					if(isset($temp[$key])) {
						$occurr = explode("|", $temp[$key]);
						$occurr[] = $val;
						$val = implode("|", array_unique($occurr));
						$temp[$key] = $val;
					} else {
						$temp[$key] = $val;
					}
				}

				save_serialize($filename, $temp);
				$wordcount += count($index);
			}

			if($silent!=TRUE) {
				echo("<p>A total of ".$wordcount." different words have been indexed.</p>");
			}
		}
	} else {
		debug("nothing to save");
	}
}


/**
 * Searches the index for words.
 *
 * @param array $str_a Contains the display text (index 0) and the search text (index 1).
 * @return string The search results as a list (in HTML code).
 */
function search_index ( $str_a ) {
	global $Current_weblog, $Weblogs, $index_file, $matches, $db, $allowed_chars;

	$str_a[1] = trim($str_a[1]);
	$words = explode(" ", $str_a[1]);
	$orig_words = explode(" ", trim($str_a[0]));
        // Ignoring empty strings and removing non-allowed chars from words
	foreach($words as $key=>$val) {
		if(trim($val)=="") {
			unset($words[$key]);
		} else {
			$words[$key] = preg_replace ('/[^'.preg_quote($allowed_chars).']/i','',trim($val));
		}
	}


	if (count($words)>0) {
		foreach ($words as $word) {
			if (file_exists("db/search/".$word[0].".php")) {
				$index_file[ $word[0] ] = load_serialize("db/search/".$word[0].".php");
			}
		}
	}



        $n = count($words);
	for($i=0; $i < $n; $i++) {
                // getword sets $matches used below.
		$res = getword($words[$i]);
		if($res) {
			$found_words[] = $orig_words[$i];
		}
	}

	// mix 'n match.. If the result set for 'AND' is empty, just lump
	// them together, so we have an 'OR'..
	if(count($matches)==1) {
		$result = $matches[0];
	} else if(count($matches)==2) {
		list($word1,$word2) = $matches;
		$result = array_intersect($word1, $word2);
		if(count($result)==0) { $result = array_merge($word1, $word2); }
	} else if(count($matches)==3) {
		list($word1, $word2, $word3) = $matches;
		$result = array_intersect($word1, $word2, $word3);
		if(count($result)==0) { $result = array_merge($word1, $word2, $word3); }
	} else if(count($matches)>3) {
		list($word1, $word2, $word3, $word4) = $matches;
		$result = array_intersect($word1, $word2, $word3, $word4);
		if(count($result)==0) { $result = array_merge($word1, $word2, $word3, $word4); }
	}

	$title = lang('weblog_text', 'search_title'); 
	if (strlen($Weblogs[$Current_weblog]['search_format'])>1) {
		list($format_top,$format_summary,$format_start,$format_entry,$format_end) = 
			explode("----",$Weblogs[$Current_weblog]['search_format']);
	} else {
		$format_top = "<h2>%search_title%</h2>\n%search_form%\n";
		$format_summary = "<p>%search_summary%</p>\n";
		$format_start = "<ul>\n";
		$format_entry = "<li><!-- %code% --><a href='%link%'>%title%</a></li>\n";
		$format_end = "</ul>\n";
	}

	$output = $format_top.$format_summary;

	if(isset($found_words) && (count($found_words)>0)) {
		rsort($result);
		$result = array_unique($result);

		$count = count($result);
		$name = implode(', ',$found_words);
		$summary = str_replace('%name%', $name, lang('weblog_text', 'matches'));
		$output .= $format_start;
		$db = new db();
		foreach($result as $hit) {

			if($db->entry_exists($hit)) {
				$entry = $db->read_entry($hit);
				$entry['link'] = make_filelink($entry['code'], "", "");
				$entry['categories'] = implode(', ',$entry['category']);
				$weblogs = find_weblogs_with_cat($entry['category']);
				foreach ($weblogs as $key => $value) {
					$weblogs[$key] = $Weblogs[$value]['name'];
				}
				$entry['weblogs'] = implode(', ',$weblogs);
				if ($entry['title']=="") {
					$entry['title'] = substr(strip_tags($entry['introduction']),0,50);
				}
				$output .= format_entry($entry,$format_entry);

			}

		}
		$output .= "$format_end\n";
	} else {
		if ($str_a[1] != "") {
			$count = 0;
			$name = $str_a[0];
			$summary = str_replace('%name%', $name, lang('weblog_text', 'nomatches')) ;
		}
	}
	$output = str_replace("%search_term%", $name, $output);
	$output = str_replace("%search_count%", $count, $output);
	$output = str_replace("%search_summary%", $summary, $output);
	$output = str_replace("%search_title%", $title, $output);
	return $output;
}


/** 
 * Searches the index and returns the matching entries in an array.
 *
 * Used in the entries screen/overview search.
 *
 * @param string $str Text/words to search for
 * @return array
 */
function search_entries ($str) {
	global $index_file, $matches, $db, $search_all;

	$search_all = true;

	$str = transliterate_accents(trim($str));

	$words = explode(" ", $str);
	foreach($words as $key=>$val) {
		if(trim($val)=="") {
			unset($words[$key]);
		} else {
			$words[$key] = trim($val);
		}
	}


	if (count($words)>0) {
		foreach ($words as $word) {
			if (file_exists("db/search/".$word[0].".php")) {
				$index_file[ $word[0] ] = load_serialize("db/search/".$word[0].".php");
			}
		}
	}

	foreach($words as $word) {
		$res = getword($word);
		if($res) {
			$found_words[]=$word;
		}
	}

	// mix 'n match.. If the result set for 'AND' is empty, just lump
	// them together, so we have an 'OR'..
	if(count($matches)==1) {
		$result = $matches[0];
	} else if(count($matches)==2) {
		list($word1,$word2) = $matches;
		$result = array_intersect($word1, $word2);
		if(count($result)==0) { $result = array_merge($word1, $word2); }
	} else if(count($matches)==3) {
		list($word1, $word2, $word3) = $matches;
		$result = array_intersect($word1, $word2, $word3);
		if(count($result)==0) { $result = array_merge($word1, $word2, $word3); }
	} else if(count($matches)>3) {
		list($word1, $word2, $word3, $word4) = $matches;
		$result = array_intersect($word1, $word2, $word3, $word4);
		if(count($result)==0) { $result = array_merge($word1, $word2, $word3, $word4); }
	}

	if(isset($found_words) && (count($found_words)>0)) {

		$db = new db();
		foreach($result as $hit) {

			$entry = $db->read_entry($hit);
			if ($entry['title']=="") {
				$entry['title'] = substr(strip_tags($entry['introduction']),0,50);
			}
			unset($entry['comments']);
			unset($entry['introduction']);
			unset($entry['body']);
			$output[]=$entry;

		}

		return $output;
	} else {
		return array();
	}
}


/**
 * Checks if a word is part of the search index and if so sets the global variable
 * $matches to the matching entry codes.
 * 
 * @param string $word Word to search for.
 * @return boolean False if not found, else true.
 */
function getword($word) {
	global $search_all, $Current_weblog, $index_file, $db, $matches;


	if(isset($index_file[ $word[0] ][ $word ])) {
		if (!isset($db)) {
			$db = new db();
		}
		$tmp_matches = explode("|", $index_file[ $word[0] ][ $word ]);
		// All entries should be searched.
		if ($search_all) {
			if (count($tmp_matches)>0) {
				$matches[] = $tmp_matches;
				return TRUE;
			} else {
				return FALSE;
			}
				
		} 
		// OK, we are run from a weblog - check if the matched entries 
		// belong to the current weblog, and are still published,
		// i.e., not set on hold.
		foreach($tmp_matches as $match) {
			$db->read_entry($match);
			$weblogs = find_weblogs_with_cat($db->entry['category']);
			if (in_array($Current_weblog,$weblogs) && ($db->entry['status'] == "publish")) {
				$valid_matches[] = $match;
			}
		}
		if (count($valid_matches)>0) {
			$matches[] = $valid_matches;
			return TRUE;
		}
	}
        return FALSE;
}


/**
 * Returns the search form and (possibly) the search results.
 *
 * @uses search_index
 * @return string
 */
function search_result() {
    global $Cfg, $Current_weblog, $search_a;

    $search_formname    = lang( 'accessibility','search_formname' ) ;
    $search_fldname     = lang( 'accessibility','search_fldname' ) ;
    $search_idname      = lang( 'accessibility','search_idname' ) ;
    $search_placeholder = lang( 'accessibility','search_placeholder' ) ;

    // build up accessible form, keeping track of current weblog (if multiple)
    $form = '<form method="post" action="search.php" class="pivot-search-result">'."\n" ;
    $form .= '<fieldset><legend>'.$search_formname.'</legend>'."\n" ;
    $form .= '<label for="'.$search_idname.'">'.$search_fldname.'</label>'."\n" ;
    $form .= '<input id="'.$search_idname.'" type="text" name="search" class="result-searchbox" value="';
    $form .= htmlspecialchars($search_a[0]).'" onfocus="this.select();" />'."\n" ;
    $form .= '<input type="submit" class="result-searchbutton" value="'.lang( 'weblog_text','search' ).'" />'."\n" ;
    if ($Cfg['weblog_count'] > 1) {
		$form .= '<input type="hidden" name="w" value="'.$Current_weblog.'" />'."\n";
    }
    $form .= '</fieldset></form>'."\n" ;
    // add search results - if any
    $output = search_index( $search_a ) ;
    $output = str_replace("%search_form%", $form, $output);

    return $output;
}



?>
