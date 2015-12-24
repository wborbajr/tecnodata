<?php

include_once("../pv_core.php");

// Ensuring that we load the language for the current weblog
LoadDefLanguage();
$override_weblog = find_current_weblog_request();
set_current_weblog($override_weblog);
LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

/*
======================================================================
lastRSS 0.9.1

Simple yet powerfull PHP class to parse RSS files.

by Vojtech Semecky, webmaster @ webdot . cz

Latest version, features, manual and examples:
http://lastrss.webdot.cz/

WARNING:
this is a modified version of lastRSS 0.9.1 and is not an official
modification.  It uses fsockopen instead of fopen in the PARSE method
to get the contents of the RSS feed - this is done because, for my needs
the file to open is always a remote file identifiable by a URI.

----------------------------------------------------------------------
LICENSE

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License (GPL)
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

To read the license please visit http://www.gnu.org/copyleft/gpl.html
======================================================================
*/

/**
       * lastRSS
       * Simple yet powerfull PHP class to parse RSS files.
       */

class tgr_lastRSS {
	// -------------------------------------------------------------------
	// Public properties
	// -------------------------------------------------------------------
	var $default_cp = 'UTF-8';
	var $CDATA = 'nochange';
	var $cp = '';
	var $items_limit = 0;
	var $stripHTML = False;
	var $date_format = '';

	// -------------------------------------------------------------------
	// Private variables
	// -------------------------------------------------------------------
	var $channeltags = array ('title', 'link', 'description', 'language', 'copyright', 'managingEditor', 'webMaster', 'lastBuildDate', 'rating', 'docs');
	var $itemtags = array('title', 'link', 'description', 'author', 'category', 'comments', 'enclosure', 'guid', 'pubDate', 'source');
	var $imagetags = array('title', 'url', 'link', 'width', 'height');
	var $textinputtags = array('title', 'description', 'name', 'link');

	// -------------------------------------------------------------------
	// Parse RSS file and returns associative array.
	// -------------------------------------------------------------------
	function Get ($rss_url) {
		// If CACHE ENABLED
		if ($this->cache_dir != '') {
			$cache_file = $this->cache_dir . '/rsscache_' . md5($rss_url);
			$timedif = @(time() - filemtime($cache_file));
			if ($timedif < $this->cache_time) {
				// cached file is fresh enough, return cached array
				$result = unserialize(join('', file($cache_file)));
				// set 'cached' to 1 only if cached file is correct
				if ($result)
				$result['cached'] = 1;
			} else {
				// cached file is too old, create new
				$result = $this->Parse($rss_url);
				$serialized = serialize($result);
				if ($f = @fopen($cache_file, 'w')) {
					fwrite ($f, $serialized, strlen($serialized));
					fclose($f);
				}
				if ($result)
				$result['cached'] = 0;
			}
		}
		// If CACHE DISABLED >> load and parse the file directly
		else {
			$result = $this->Parse($rss_url);
			if ($result)
			$result['cached'] = 0;
		}
		// return result
		return $result;
	}

	// -------------------------------------------------------------------
	// Modification of preg_match(); return trimed field with index 1
	// from 'classic' preg_match() array output
	// -------------------------------------------------------------------
	function my_preg_match ($pattern, $subject) {
		// start regullar expression
		preg_match($pattern, $subject, $out);

		// if there is some result... process it and return it
		if(isset($out[1])) {
			// Process CDATA (if present)
			if ($this->CDATA == 'content') { // Get CDATA content (without CDATA tag)
				$out[1] = strtr($out[1], array('<![CDATA['=>'', ']]>'=>''));
			}
			elseif ($this->CDATA == 'strip') { // Strip CDATA
				$out[1] = strtr($out[1], array('<![CDATA['=>'', ']]>'=>''));
			}

			// If code page is set convert character encoding to required
			if ($this->cp != '')
			//$out[1] = $this->MyConvertEncoding($this->rsscp, $this->cp, $out[1]);
			$out[1] = iconv($this->rsscp, $this->cp.'//TRANSLIT', $out[1]);
			// Return result
			return trim($out[1]);
		} else {
			// if there is NO result, return empty string
			return '';
		}
	}

	// -------------------------------------------------------------------
	// Replace HTML entities &something; by real characters
	// -------------------------------------------------------------------
	function unhtmlentities ($string) {
		// Get HTML entities table
		$trans_tbl = get_html_translation_table (HTML_ENTITIES, ENT_QUOTES);
		// Flip keys<==>values
		$trans_tbl = array_flip ($trans_tbl);
		// Add support for &apos; entity (missing in HTML_ENTITIES)
		$trans_tbl += array('&apos;' => "'");
		// Replace entities by values
		return strtr ($string, $trans_tbl);
	}

	// -------------------------------------------------------------------
	// Parse() is private method used by Get() to load and parse RSS file.
	// Don't use Parse() in your scripts - use Get($rss_file) instead.
	// -------------------------------------------------------------------
	function Parse ($rss_url) {
		// Open and load RSS file
		$urlParts =	parse_url($rss_url);
		$host = $urlParts['host'];
		$uri  = $urlParts['path'];



		if (strcmp($urlParts['query'], '') != 0) {
			$uri .= '?' . $urlParts['query'];
		}

		if(strcmp($urlParts['fragment'],'') !=0) {
			$fragment = $urlParts['fragment'];
			$fragment = substr($fragment,4,strlen($fragment)-3);
			$uri = $uri . $fragment;
		}

		if ($f = fsockopen($host, 80, $errno, $errstr, $this->connection_time)) {
			$rss_content = '';
			fputs($f, "GET $uri HTTP/1.0\r\nHost: $host\r\n\r\n");
			while (!feof($f)) {
				$rss_content .= fgets($f, 128);
			}
			fclose ($f);

			// Parse document encoding
			$result['encoding'] = $this->my_preg_match("'encoding=[\'\"](.*?)[\'\"]'si", $rss_content);
			// if document codepage is specified, use it
			if ($result['encoding'] != '') {
				$this->rsscp = $result['encoding'];
			} // This is used in my_preg_match()
			// otherwise use the default codepage
			else {
				$this->rsscp = $this->default_cp;
			} // This is used in my_preg_match()

			// Parse CHANNEL info
			preg_match("'<channel.*?>(.*?)</channel>'si", $rss_content, $out_channel);
			foreach($this->channeltags as $channeltag) {
				$temp = $this->my_preg_match("'<$channeltag.*?>(.*?)</$channeltag>'si", $out_channel[1]);
				if ($temp != '')
				$result[$channeltag] = $temp; // Set only if not empty
			}
			// If date_format is specified and lastBuildDate is valid
			if ($this->date_format != '' && ($timestamp = strtotime($result['lastBuildDate'])) !==-1) {
				// convert lastBuildDate to specified date format
				$result['lastBuildDate'] = date($this->date_format, $timestamp);
			}

			// Parse TEXTINPUT info
			preg_match("'<textinput(|[^>]*[^/])>(.*?)</textinput>'si", $rss_content, $out_textinfo);
			// This a little strange regexp means:
			// Look for tag <textinput> with or without any attributes, but skip truncated version <textinput /> (it's not beggining tag)
			if (isset($out_textinfo[2])) {
				foreach($this->textinputtags as $textinputtag) {
					$temp = $this->my_preg_match("'<$textinputtag.*?>(.*?)</$textinputtag>'si", $out_textinfo[2]);
					if ($temp != '')
					$result['textinput_'.$textinputtag] = $temp; // Set only if not empty
				}
			}
			// Parse IMAGE info
			preg_match("'<image.*?>(.*?)</image>'si", $rss_content, $out_imageinfo);
			if (isset($out_imageinfo[1])) {
				foreach($this->imagetags as $imagetag) {
					$temp = $this->my_preg_match("'<$imagetag.*?>(.*?)</$imagetag>'si", $out_imageinfo[1]);
					if ($temp != '')
					$result['image_'.$imagetag] = $temp; // Set only if not empty
				}
			}
			// Parse ITEMS
			preg_match_all("'<item(| .*?)>(.*?)</item>'si", $rss_content, $items);
			$rss_items = $items[2];
			$i = 0;
			$result['items'] = array(); // create array even if there are no items
			foreach($rss_items as $rss_item) {
				// If number of items is lower then limit: Parse one item
				if ($i < $this->items_limit || $this->items_limit == 0) {
					foreach($this->itemtags as $itemtag) {
						$temp = $this->my_preg_match("'<$itemtag.*?>(.*?)</$itemtag>'si", $rss_item);
						if ($temp != '')
						$result['items'][$i][$itemtag] = $temp; // Set only if not empty
					}
					// Strip HTML tags and other bullshit from DESCRIPTION
					if ($this->stripHTML && $result['items'][$i]['description'])
					$result['items'][$i]['description'] = strip_tags($this->unhtmlentities(strip_tags($result['items'][$i]['description'])));
					// Strip HTML tags and other bullshit from TITLE
					if ($this->stripHTML && $result['items'][$i]['title'])
					$result['items'][$i]['title'] = strip_tags($this->unhtmlentities(strip_tags($result['items'][$i]['title'])));
					// If date_format is specified and pubDate is valid
					if ($this->date_format != '' && ($timestamp = strtotime($result['items'][$i]['pubDate'])) !==-1) {
						// convert pubDate to specified date format
						$result['items'][$i]['pubDate'] = date($this->date_format, $timestamp);
					}
					// Item counter
					$i++;
				}
			}

			$result['items_count'] = $i;
			return $result;
		} else {
			return False;
			//die("Network error: $errstr ($errno)");
		}

	}
}



/*
DESCRIPTION:
This plugin fetches RSS feeds from the url you provide displays them on your blog. It can be used to manage "hot lin
ks" sections or anything else you can grab via an RSS feed.

INSPIRATION:
The initial idea for this plugin came from the del.icio.us plugin that can be found at http://chrismetcalf.net.

LICENSE:
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public Li
cense (GPL) as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

*/




function tgr_getLinkListSettings() {
	global $Paths;

	/*
	CONFIGURATION SETTINGS
	----------------------

	lastRSSPath 		relative path to the lastRSS.php file.  By default
	we assume it is in the wp-content directory - not in the plugins subdirectory.

	cacheDirectory		relative path to where you want your feeds cached at.  by default we assume
	you are creating a directory, rssCache, under your wp-content directory. Make
	sure you chmod 777 the rssCache directory!

	cacheTimeout		how long should your cache file live in seconds?  By default it is 21600 or 6 hours.
	most sites prefer you use caching so please make sure you do!

	connectionTimeout	how long should we attempt to grab the remote rssfile in seconds? If it timesout we
	just don't show its feed; and we will try again next time.  By default this is 20
	seconds as we dont really want to keep the users waiting all day for a feed to show up.

	CDATA			how do you want to handle feeds that include CDATA.  CDATA is more complicated content in an rss feed.
	for instance, espn.com's feed includes CDATA in the link title.  You have three options for processing CDATA.
	*	content		get CDATA content (without CDATA tag).  THis is the DEFAULT SETTING

	*	nochange	don't make any changes (get CDATA content including CDATA tag); this will result in
	the cdata not being displayed on the page do to the format of the CDATA tags; but it
	will be in the page's source

	*	strip		completely strip CDATA information - this just gets rid of it so it wont be displayed
	or in the pages source code.  NOT RECOMMENDED

	showRssLinkListJS	TRUE by default and will include a small block of JS in your header.  If it is false the JS will not be 						included. If you want the $new_window = 'true' option to use the JS then this must also be true.  Otherwise 					both true and simple will hardcode the target="_blank" into the new window links
	*/


	/* DEFINE THE SETTINGS -- EDIT AS YOU NEED */
	$cacheDirectory = $Paths['pivot_path'].'db/rsscache';
	$cacheTimeout = 21600;		// 21600 sec is 6 hours.
	$connectionTimeout=20;
	$CDATA = 'content';
	$showRSSLinkListJS = true;



	/* build an array out of the settings and send them back; don't edit this part */
	$settings = array (	'lastRSSPath' => $lastRSSPath,
	'cacheDirectory' => $cacheDirectory,
	'cacheTimeout' => $cacheTimeout,
	'connectionTimeout' => $connectionTimeout,
	'CDATA' => $CDATA,
	'showRSSLinkListJS' => $showRSSLinkListJS
	);

	return $settings;
}






function getLinkListDefaults() {
	global $Cfg;

	/*
	DEFAULT FEED SETTINGS; only apply to calls to _rssLinkList and not rssLinkList.
	----------------------

	rss_feed_url		the url to get a feed from.

	num_items			how many items to display; default is 15. If you want to show all items, set to 0

	show_description	true or false - should we show the item's description.  By default this is true.

	random				true or false - should we show  random selection of items? By default this is false.
	obviously, if num_items=0 this will have no effect.

	before				what should we print before each item? By default this is an <li> or opening html tag for a
	list item.

	after				what should we print after each item? By default this is an </li> or closing html tag for a
	list item.

	description_seperator
	what do we put between an item and it's description?  By default it is a hyphen.

	encoding			true or false.  set to true if you see wierd square like characters in your page output.  This helps,
	but does not totally solve internationalization issues.

	sort				one of three options telling us how to sort your items.

	*	none	dont sort them at all, just leave them in the order they are in.  DEFAULT SETTING

	*	asc		sort alphabetically by the title of the item

	*	desc	sort in reverse alphabetical order by the title of the item.

	new_window			true or false or simple.  set to true if you want the links to open in a new window target="_blank"
	using "true" adds the target in a standards complaint way.  Using simple will add it in a simple manner
	that bypasses javascript but will not validate as xhtml strict.


	ignore_cache		use only under special circumstances such as testing a feed.  Setting to true will get you banned from
	some feed providers if you fetch too often!  If you provide a number (instead of true or false) it will
	use that value (in seconds) as the cache timeout setting..


	debug				NO LONGER AVAILALBE


	*/

	$rss_feed_url    = 'http://del.icio.us/rss';
	$num_items    = $Cfg['tag_fetcher_amount'];
	$show_description = false;
	$random  = false;
	$before = '<li>';
	$after = '</li>';
	$description_seperator = ' - ';
	$encoding = false;
	$sort = 'none';
	$new_window = false;
	$ignore_cache = false;


	$defaults = array('rss_feed_url'    => $rss_feed_url,
	'num_items'    => $num_items,
	'show_description' => $show_description,
	'random'  => $random,
	'before' => $before,
	'after' => $after,
	'description_seperator' => $description_seperator,
	'encoding' => $encoding,
	'sort' => $sort,
	'new_window' => $new_window,
	'ignore_cache' => $ignore_cache
	);

	return $defaults;
}


/*********************************************
DONT EDIT BELOW THIS LINE
*********************************************/


function pc_assign_defaults($array) {
	$defaults = getLinkListDefaults();
	$a = array( );
	foreach ($defaults as $d => $v) {
		$a[$d] = isset($array[$d]) ? $array[$d] : $v;
	}

	return $a;
}


function _tgr_rssLinkList($params) {
	/* this interface was created to support NAMED parameters */

	$params = pc_assign_defaults($params);
	return tgr_rssLinkList($params['rss_feed_url'],$params['num_items'],$params['show_description'],$params['random'],$params['before'],$params['after'],$params['description_seperator'],$params['encoding'],$params['sort'],$params['new_window'],$params['ignore_cache']);

}

function tgr_rssLinkListBuilder($rss_feed_url = "http://del.icio.us/rss",
$num_items = 0,
$show_description = true,
$random = false,
$before = "<li>",
$after = "</li>",
$description_seperator = " - ",
$encoding	= false,
$sort = 'none',
$new_window = false,
$ignore_cache = false) {
	global $Cfg;

	if ($num_items==0) {
		$num_items = $Cfg['tag_fetcher_amount'];
	}

	$settings = tgr_getLinkListSettings();

	if (!class_exists("tgr_lastRSS")) {
		/* added this odd if statement because it was reported that
		if lastRSS was already added by another plugin it might get included again here and cause
		a warning/error */
		require_once $settings["lastRSSPath"];
	}


	// create lastRSS object
	$rss = new tgr_lastRSS;

	// setup transparent cache
	$rss->cache_dir = $settings["cacheDirectory"];
	if($ignore_cache) {
		if(is_numeric($ignore_cache)) {
			$rss->cache_time = $ignore_cache;
		} else {
			$rss->cache_time = 0;
		}
	} else {
		$rss->cache_time = $settings["cacheTimeout"];
	}

	$rss->connection_time = $settings["connectionTimeout"];
	$rss->CDATA = $settings["CDATA"];

	$rssList = '';

	if ($rs = $rss->get
	($rss_feed_url)) {
		// here we can work with RSS fields
		$items = $rs['items'];

		if($random) {
			// We want a random selection, so lets shuffle it
			shuffle($items);
		}

		// Slice off the number of items that we want
		if($num_items > 0) {
			$items = array_slice($items, 0, $num_items);
		}


		/**********************
		Now that we have potentially randomized and cut down our list
		we will sort the remainders if we need to
		***********************/
		// make sure we are not getting messed up just because
		// someone typed in caps.
		$sort = strtolower($sort);
		if($sort == 'asc' || $sort == 'desc') {
			//Order alpha by title
			foreach($items as $item) {
				$sortBy[] = $item['title'];
			}
			//Make titles lowercase
			//otherwise capitals will come before lowercase
			$sortByLower = array_map('strtolower', $sortBy);

			if($sort == 'asc') {
				array_multisort($sortByLower, SORT_ASC, SORT_STRING, $items);
			} else if ($sort == 'desc') {
				array_multisort($sortByLower, SORT_DESC, SORT_STRING, $items);
			}
		}


		// explicitly set this because $new_window could be "simple"
		$target = '';
		if($new_window == true && $settings["showRSSLinkListJS"]) {
			$target=' rel="external" ';
		}
		/*else if($new_window == true || $new_window = 'simple'){
		$target=' target="_blank" ';
		}*/



		// Loop through the items and build the output list

		foreach ($items as $item ) {

			// Link title is the text shown in the list
			$thisLink = '';
			$thisTitle = $item['title'];
			if($encoding) {
				$thisTitle = utf8_encode($thisTitle);
			}

			// Description and linkTitle (attribute of the anchor tag)
			$thisDescription = '';
			$linkTitle = '';
			if(isset($item['description']) ) {
				$linkTitle = $item['description'];
				if($encoding) {
					$linkTitle = utf8_encode($linkTitle);
				}

				if($show_description) {
					// bulid the description and convert any special HTML stuff back into HTML
					if(strlen(trim($thisTitle))) {
						$thisDescription = $description_seperator;
					}
					$thisDescription = $thisDescription . "<span class=\"rssLinkListItemDesc\">". strtr($linkTitle,array_flip(get_html_translation_table(HTML_ENTITIES))) . "</span>";
				}
			}

			// only build the hyperlink if a link is provided..
			if(strlen(trim($item['link'])) && strlen(trim($thisTitle))) {
				$thisLink = '<span class="rssLinkListItemTitle"><a href="'.$item['link'].'"' . $target .'>'.$thisTitle.'</a></span>';
			}
			elseif (strlen(trim($item['link'])) && $show_description) {
				// if we don't have a title but we do have a description we want to show.. link the description
				$thisLink = '<span class="rssLinkListItemTitle"><a href="'.$item['link'].'"' . $target .'>'.$thisDescription.'</a></span>';
				$thisDescription = '';
			}
			else {
				$thisLink = '<span class="rssLinkListItemTitle">' . $thisTitle . '</span>';
			}


			$rssList .= $before . $thisLink . $thisDescription . $after . "\n";
		}

	}
	else {
		$rssList .= 'requested list not available';
	}

	return $rssList;

}

function tgr_rssLinkList($rss_feed_url = "http://del.icio.us/rss",
$num_items = 0,
$show_description = true,
$random = false,
$before = "<li>",
$after = "</li>",
$description_seperator = " - ",
$encoding	= false,
$sort = 'none',
$new_window = false,
$ignore_cache = false) {

	global $Cfg;

	if ($num_items==0) {
		$num_items = $Cfg['tag_fetcher_amount'];
	}

	// display the final list
	return tgr_rssLinkListBuilder($rss_feed_url,
	$num_items,
	$show_description,
	$random,
	$before,
	$after,
	$description_seperator,
	$encoding,
	$sort,
	$new_window,
	$ignore_cache);


}

function tgr_rssLinkListFilter($text) {

	return preg_replace_callback("/<!--rss:(.*)-->/", "tgr_rssMatcher", $text);
}

function tgr_rssMatcher($matches) {
	// get the settings passed in
	$filterSetting = explode(",",$matches[1]);
	$params = array ('rss_feed_url' => $matches[1]);




	// determine if we have more than just a url
	/* loop over the array and break each element up into a sub array like:
	subArray[0] = key
	subArray[1] = value
	*/

	if(count($filterSetting) > 1) {
		foreach ($filterSetting as $setting ) {
			$setting = explode(":=",$setting);
			$keyVal = $setting[0];
			$valVal = $setting[1];
			if($valVal == 'true' || $valVal == '1') {
				$valVal = true;
			}
			elseif ($valVal =='false' || $valVal == '0') {
				$valVal = false;
			}
			// make sure before and after tags are no longer escaped
			$valVal = html_entity_decode($valVal);

			$params[$keyVal] = $valVal;
		}
	} else {
		// handle the origional default settings for when the filter was first added to the plugin

		$params['num_items'] = 0;
		$params['show_description'] = false;
		$params['random'] = false;
		$params['before'] = '<li>';
		$params['after'] = '</li>';
		$params['description_seperator'] = ' - ';
		$params['encoding'] = false;
		$params['sort'] = 'asc';
		$params['new_window'] = false;
		$params['ignore_cache'] = false;
	}


	$params = pc_assign_defaults($params);

	//return print_r($params);

	return rssLinkListBuilder($params['rss_feed_url'],$params['num_items'],$params['show_description'],$params['random'],$params['before'],$params['after'],$params['description_seperator'],$params['encoding'],$params['sort'],$params['new_window'],$params['ignore_cache']);

}

if(function_exists('add_filter')) {
	add_filter('the_content', 'tgr_rssLinkListFilter');
}

function tgr_rssLinkList_JS() {

	$jsstring = '<script type="text/javascript"><!--

                       function addEvent(elm, evType, fn, useCapture)
                       // addEvent and removeEvent
                       // cross-browser event handling for IE5+,  NS6 and Mozilla
                       // By Scott Andrew
                   {
                       if (elm.addEventListener){
                       elm.addEventListener(evType, fn, useCapture);
                       return true;
                   } else if (elm.attachEvent){
                       var r = elm.attachEvent("on"+evType, fn);
                       return r;
                   } else {
                       alert("Handler could not be removed");
                   }
                   }
                       function externalLinks() {
                       if (!document.getElementsByTagName) return;
                       var anchors = document.getElementsByTagName("a");
                       for (var i=0; i<anchors.length; i++) {
                       var anchor = anchors[i];
                       if (anchor.getAttribute("href") && anchor.getAttribute("rel") == "external")
                       anchor.setAttribute("target","_blank");
                   }
                   }

                       addEvent(window, "load", externalLinks);
                       //-->
                       </script>
                       ';


	echo $jsstring;
}

$settings = tgr_getLinkListSettings();
if(function_exists('add_action') && $settings["tgr_showRSSLinkListJS"]) {
	add_action('wp_head', 'tgr_rssLinkList_JS');
}

function tgr_do_rss($feedurl, $feedname, $tag)  {
	$output = _tgr_rssLinkList(array('rss_feed_url' => $feedurl, 'description_seperator' => '<br />'));
	$output = html_entity_decode($output);
	if($output == '')  {
		if($feedname == 'delicious')  {
			$feedname = 'del.icio.us';
		}
		$output = lang('tags','nothing_on').' <strong>'.$feedname.'</strong> '.lang('tags','for').' \'<strong>'.$tag.'</strong>\'';
	} else  {
		$output = lang('tags','latest_on').' <strong>'.$feedname.'</strong> '.lang('tags','for').' \'<strong>'.$tag.'</strong>\':<ul class="taggeratilist">'.$output.'</ul>';
	}
	echo $output;
}

if(isset($_GET["type"]) && isset ($_GET["tag"]))  {
	switch($_GET["type"])  {
		case "technorati":
			tgr_do_rss('http://feeds.technorati.com/feed/posts/tag/'.str_replace(" ", "+", $_GET["tag"]), 'technorati.com', $_GET['tag']);
			break;

		case "furl":
			tgr_do_rss('http://www.furl.net/members/rssPopular.xml?days=6&topic='.str_replace(" ", "+", $_GET["tag"]), 'furl.com', $_GET['tag']);
			break;

		case "tagzania":
			tgr_do_rss('http://www.tagzania.com/rss/tag/'.str_replace(" ", "+", $_GET["tag"]), 'tagzania.com', $_GET['tag']);
			break;

		case "feedmarker":
			tgr_do_rss('http://www.feedmarker.com/rss/tags/'.str_replace(" ", "+", $_GET["tag"]), 'feedmarker.com', $_GET['tag']);
			break;

		case "magnolia":
			tgr_do_rss('http://ma.gnolia.com/rss/full/tags/'.str_replace(" ", "+", $_GET["tag"]), 'ma.gnolia.com', $_GET['tag']);
			break;

		case "feedster":
			tgr_do_rss('http://feedster.com/search.php?q='.$_GET['tag'].'&sort=relevance&ie=UTF-8&hl=&content=full&type=rss&limit='. $Cfg['tag_fetcher_amount'] .'&db='.str_replace(" ", "+", $_GET["tag"]), 'feedster.com', $_GET['tag']);
			break;

		case "icerocket":
			tgr_do_rss('http://www.icerocket.com/search?tab=blog&q='.str_replace(" ", "+", $_GET["tag"]).'&rss=1', 'icerocket.com', $_GET['tag']);
			break;

		case "google":
			tgr_do_rss('http://blogsearch.google.com/blogsearch_feeds?hl=en&q='.str_replace(" ", "+", $_GET["tag"]).'&btnG=Search+Blogs&num='. $Cfg['tag_fetcher_amount'] .'&output=rss', 'blogsearch.google.com', $_GET['tag']);
			break;

		case "rawsugar":
			echo "Not yet implemented. but coming soon.<br />Check out <a href=\"http://www.rawsugar.com/\">RawSugar</a>";
			break;

		case "shadows":
			tgr_do_rss('http://www.shadows.com/rss/tag/'.str_replace(" ", "+", $_GET["tag"]), 'shadows.com', $_GET['tag']);
			break;
		case "delicious":
			tgr_do_rss('http://del.icio.us/rss/tag/'.str_replace(" ", "+", $_GET["tag"]), 'del.icio.us', $_GET['tag']);
			break;

		case "43things":
			tgr_do_rss('http://www.43things.com/rss/goals/tag?name='.str_replace(" ", "+", $_GET["tag"]), '43things.com', $_GET['tag']);
			break;
	}
}
?>
