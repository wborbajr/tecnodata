<?php
/**
 * Contains the functions needed to use Pivot in UTF-8 encoding.
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
 * Checks if a string is UTF-8 encoded.
 *
 * @link From http://w3.org/International/questions/qa-forms-utf-8.html
 */
function i18n_is_utf8($string) {
	return preg_match('%^(?:
		  [\x09\x0A\x0D\x20-\x7E]            # ASCII
		| [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
		|  \xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs
		| [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
		|  \xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates
		|  \xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3
		| [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
		|  \xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16
		)*$%xs', $string);
}

/**
 * Makes a string's first character uppercase.
 */
function i18n_ucfirst($string) {

   $string[0] = strtr($string,
   "abcdefghijklmnopqrstuvwxyz".
   "\x9C\x9A\xE0\xE1\xE2\xE3".
   "\xE4\xE5\xE6\xE7\xE8\xE9".
   "\xEA\xEB\xEC\xED\xEE\xEF".
   "\xF0\xF1\xF2\xF3\xF4\xF5".
   "\xF6\xF8\xF9\xFA\xFB\xFC".
   "\xFD\xFE\xFF",
   "ABCDEFGHIJKLMNOPQRSTUVWXYZ".
   "\x8C\x8A\xC0\xC1\xC2\xC3\xC4".
   "\xC5\xC6\xC7\xC8\xC9\xCA\xCB".
   "\xCC\xCD\xCE\xCF\xD0\xD1\xD2".
   "\xD3\xD4\xD5\xD6\xD8\xD9\xDA".
   "\xDB\xDC\xDD\xDE\x9F");

   return $string;	
	
}



/**
 * Encodes a string to UTF-8 from the internal encoding in the input string. 
 *
 * @param string $string
 * @param boolean $force
 * @return string
 */
function i18n_str_to_utf8($string,$force=false) {
    global $i18n_use, $CurrentEncoding;
    
    
    if (!$i18n_use && !$force) { 
    	// do nothing
    	return $string; 
    	
    } else {

        if (function_exists('mb_detect_encoding')) {
                $encoding = mb_detect_encoding($string);
	} else {
		$encoding = $CurrentEncoding;
	}
	    
        switch (strtolower($encoding)) {

                case 'iso-8859-1':
                        $output = utf8_encode($string);
                        break;
                case 'euc-jp':
                        $output = eucjp_to_utf8($string);
                        break;
				case '':                        
                case 'utf-8':
                        $output = $string;
                        break;
                default:
                        $output = utf8_encode($string);
                        break;
        }

    	return $output;
    }
}


/**
 * Encodes every string in the array to UTF-8 from the 
 * internal encoding in the items. 
 *
 * @param mixed $item
 * @param mixed $key
 * @param boolean $force
 * @return void
 */
function i18n_array_to_utf8(&$item, &$key, $force=false) {
	if (is_array($item)) {
		array_walk($item, 'i18n_array_to_utf8', $force);
	} else {
		$item = i18n_str_to_utf8($item, $force);
	}
}

/**
 * Decodes every string in the array from UTF-8 to the 
 * current encoding. 
 *
 * @param mixed $item
 * @param mixed $key
 * @return void
 */
function i18n_array_from_utf8(&$item, &$key) {
	if (is_array($item)) {
		array_walk($item, 'i18n_array_from_utf8');
	} else {
		$item = i18n_str_from_utf8($item);
	}
}

/**
 * Decodes a string to the current output encoding from UTF-8.
 *
 * @param string $string
 * @return string
 */
function i18n_str_from_utf8($string) {
	global $CurrentEncoding;

	switch (strtolower($CurrentEncoding)) {
		case '':
		case 'iso-8859-1':
			$string = utf8_decode($string);
			break;
		case 'euc-jp':
			$string = utf8_to_eucjp($string);
			break;
		case 'utf-8':
			break;
		default:
			$string = utf8_decode($string);
			break;
	}

	return $string;
}

/**
 * Decodes a string to UTF-8 from EUC-JP 
 *
 * @param string $string
 * @return string
 */
function eucjp_to_utf8($string) {
	if (function_exists('mb_convert_encoding')) {
		return mb_convert_encoding($string, "UTF-8");
	}
	return $string;
}

/**
 * Multi-byte safe wordwrap.
 *
 * This function currently does nothing if the current encoding is a
 * multibyte encoding as UTF-8, EUC-JP, to avoid breaking the text.
 *
 * @param int $width 
 * @param string $break
 * @param boolean $cut
 * @param string $i
 * @return string
 */
function i18n_wordwrap($i, $width, $break, $cut) {
	global $CurrentEncoding;

	switch (strtolower($CurrentEncoding)) {
	case 'utf-8':
	case 'euc-jp':
		return $i; /* to do nothing is better than to break it */
	default:
		/* single-byte space-delimitered language */ 
		return wordwrap($i, $width, $break, $cut);
	}
}

function i18n_safe_string($str, $strict=FALSE) {
   $str = strip_tags($str);
   $str = str_replace("&amp;", "", $str);

	if ($strict) {
		$str=str_replace(" ", "_", $str);
		$str=ereg_replace("[.,:!%\\\/\"'?]", "", $str);
	}

   return $str;
}

/**
 * Converts all applicable characters, encoded in UTF-8, to HTML entities.
 *
 * Currently the function does nothing for PHP version prior to 4.3.0.
 *
 * @param string $i
 * @return string
 */
function  i18n_entify($i) {
	global $Language, $CurrentLanguage;
	switch ($Language[$CurrentLanguage]->getName()) {
		case 'ja':
			break;
		default:
			if(check_version(PHP_VERSION, "4.3.0") ) {
				$i = @htmlentities( $i, ENT_NOQUOTES, "UTF-8");
			}
		break;
	}
	return $i;
}

/**
 * Converts all HTML entities to their applicable characters encoded in UTF-8.
 *
 * Currently the function does nothing for PHP version prior to 4.3.0.
 *
 * @param string $i
 * @return string
 */
function  i18n_unentify($i) {
	global $Language, $CurrentLanguage;
	switch ($Language[$CurrentLanguage]->getName()) {
		case 'ja':
			break;
		default:
			if(check_version(PHP_VERSION, "4.3.0") ) {
				$i = @html_entity_decode( $i, ENT_NOQUOTES, "UTF-8");
			}
			break;
         }
	 return $i;
}

/**
 * Mimics the ord() function for UTF-8 text.
 *
 * A character in UTF-text may consist of several bytes. This function
 * calculates the ASCII value without using the multibyte (mb) functions
 * that was introduced in PHP 4.3.0.
 * {@link http://php.net/manual/en/function.ord.php#46267 More info}
 *
 * @param string $str UTF-8 string 
 * @param int $i The current position in the string 
 * @return array The ASCII value of the current character of string and
 *   the number of bytes used.
 */
function i18n_ord($str,$i) {
    $ud = 0;
    $n = 1;
    if (ord($str{$i})>=0 && ord($str{$i})<=127) {
	$ud = ord($str{$i});
    } elseif (ord($str{$i})>=192 && ord($str{$i})<=223) {
	$ud = (ord($str{$i})-192)*64 + (ord($str{$i+1})-128);
	$n = 2;
    } elseif (ord($str{$i})>=224 && ord($str{$i})<=239) {
	$ud = (ord($str{$i})-224)*4096 + (ord($str{$i+1})-128)*64 + (ord($str{$i+2})-128);
	$n = 3;
    } elseif (ord($str{$i})>=240 && ord($str{$i})<=247) {
	$ud = (ord($str{$i})-240)*262144 + (ord($str{$i+1})-128)*4096 + (ord($str{$i+2})-128)*64
	    + (ord($str{$i+3})-128);
	$n = 3;
    } elseif (ord($str{$i})>=248 && ord($str{$i})<=251) {
	$ud = (ord($str{$i})-248)*16777216 + (ord($str{$i+1})-128)*262144 +
	    (ord($str{$i+2})-128)*4096 + (ord($str{$i+3})-128)*64 + (ord($str{$i+4})-128);
	$n = 4;
    } elseif (ord($str{$i})>=252 && ord($str{$i})<=253) {
	$ud = (ord($str{$i})-252)*1073741824 + (ord($str{$i+1})-128)*16777216 +
	    (ord($str{$i+2})-128)*262144 + (ord($str{$i+3})-128)*4096 + (ord($str{$i+4})-128)*64 +
	    (ord($str{$i+5})-128);
	$n = 5;
    } elseif (ord($str{$i})>=254 && ord($str{$i})<=255) { //error
	$ud = false;
    }
    return array($ud,$n);
}
?>
