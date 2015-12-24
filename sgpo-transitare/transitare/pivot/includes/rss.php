<?php

$old_errrep = error_reporting(0);
//$old_errrep = error_reporting(E_ALL);

// Lamer protection
$currentfile = basename(__FILE__);
require dirname(dirname(__FILE__))."/lamer_protection.php";

// -----------------------
// wrapped by a 'function_exists', since it might already be defined..
if (!function_exists('safe_string')) {
	function safe_string($str, $strict=FALSE) {

		$str = strip_tags($str);

		$str = strtr (
				strtr($str,
					'©®¹¾¼ÀÁÂÃÅÇÈÉÊËÌÍÎÏÑÒÓÔÕØÙÚÛÝàáâãäåçèéêëìíîïñòóôõøùúûýÿ',
					'SZszYAAAAACEEEEIIIINOOOOOUUUYaaaaaaceeeeiiiinooooouuuyy'),
				array(
					'Þ' => 'TH', 
					'þ' => 'th', 
					'Ð' => 'DH', 
					'ð' => 'dh', 
					'ä' => 'ae', 
					'ü' => 'ue', 
					'ö' => 'oe', 
					'Ä' => 'AE', 
					'Ü' => 'UE', 
					'Ö' => 'OE', 
					'ß' => 'ss', 
					'¦' => 'OE', 
					'¶' => 'oe', 
					'Æ' => 'AE', 
					'æ' => 'ae', 
					'µ' => 'mu'
				)
			);

		$str=str_replace("&amp;", "", $str);

		if ($strict) {
			$str=str_replace(" ", "_", $str);
			$str=strtolower(ereg_replace("[^a-zA-Z0-9_]", "", $str));
		} else {
			$str=ereg_replace("[^a-zA-Z0-9 _.,-]", "", $str);
		}
		return $str;
	}
}



// -----------------------
// Main
// -----------------------

$rssformat = stripslashes($rssformat);

define('MAGPIE_DIR', dirname(__FILE__).'/magpierss/');
define('MAGPIE_CACHE_DIR', $pivot_path.'./db/rsscache/');
define('MAGPIE_FETCH_TIME_OUT', 5);	// 5 second timeout
if (isset($rss_cache_age) && is_int($rss_cache_age)) {
	define('MAGPIE_CACHE_AGE', $rss_cache_age);
} else {
	define('MAGPIE_CACHE_AGE', 60*60*8); // 8 hours
}
define('MAGPIE_OUTPUT_ENCODING', snippet_charset());

if ( (!isset($trimlen)) || ($trimlen==0)) {
	$trimlen = 60;	
}

require_once('magpierss/rss_fetch.inc');

$feed = fetch_rss($rssurl);

$count = 1;

foreach ( $feed->items as $item ) {

	$itemformat = $rssformat;
	// Supporting upto two level arrays in item elements.
	foreach ($item as $key => $value) {
		if (is_string($value)) {
			if ($key == "link") {
				$value = trim($value);
			} else {
				$value = trimtext(trim($value), $trimlen);
			}
			$itemformat = str_replace("%$key%", $value, $itemformat);
		} else if (is_array($value)) {
			foreach ($value as $arrkey => $arrvalue) {
				if (is_string($arrvalue)) {
					$arrvalue = trimtext(trim($arrvalue), $trimlen);
					$itemformat = str_replace("%$key".'->'."$arrkey%", $arrvalue, $itemformat);
				} else if (is_array($arrvalue)) {
					foreach ($arrvalue as $subarrkey => $subarrvalue) {
						if (is_string($subarrvalue)) {
							$subarrvalue = trimtext(trim($subarrvalue), $trimlen);
							$itemformat = str_replace("%$key".'->'."$arrkey".'->'."$subarrkey%", 
								$subarrvalue, $itemformat);
		                                }
                                        }
                                }
			}
		}
	}

	echo $itemformat;
	
	if (($count++)>=$rssmax) { break; }
		
}

error_reporting($old_errrep);

?>
