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


include_once("pv_core.php");

if (file_exists("db/ser_lastcomm.php")) {
	 $file = array_reverse(load_serialize("db/ser_lastcomm.php", true, true));
} else {
	 $file = array();
}

$override_weblog = find_current_weblog_request();
if(empty($override_weblog)) {
	$override_weblog = find_current_weblog_referer();
}
set_current_weblog($override_weblog);

$db = new db(FALSE);

header("Content-type: application/xml");

start_comment_feed();

$count = 0;
foreach($file as $item) {
	add_comment_feeditem($item);
	$count++;
	if ($count>19) { break; } 
}

finish_comment_feed();


function start_comment_feed() {
	global $atom, $atom_items, $build, $Current_user, $Weblogs, $Current_weblog, $Paths, $Users, $Cfg;

	$link = $Paths['host'] . fixPath($Paths['pivot_url'] . $Weblogs[$Current_weblog]['front_path'] .  $Weblogs[$Current_weblog]['front_filename']);
	$link_self = $Paths['host'] . $Paths['pivot_url'] . "commentsfeed.php";
        if (!empty($_SERVER['QUERY_STRING'])) {
		$link_self .= "?".$_SERVER['QUERY_STRING']; 
	}

	$atom_preamble='<?xml version="1.0" encoding="%charset%"?'.'>
<feed xmlns="http://www.w3.org/2005/Atom"
	xml:lang="%lang%">
	<title>%title% - Comments</title>
	<subtitle>%description%</subtitle>
	<link rel="alternate" type="text/html" href="%link%"/>
	<link rel="self" type="application/atom+xml" href="%link_self%"/>
        <updated>%date%</updated>
        <author>
		<name>%admin-nick%</name>
		<uri>%link%</uri>
		<email>%admin-email%</email>
	</author>
	<id>tag:%sitename_safe%,%year%:%title_safe%</id>
	<generator uri="http://www.pivotlog.net" version="%version%">Pivot</generator>
	<rights>Copyright (c) %year%, Authors of %sitename%</rights>
';

	
	reset($Users);
	$user = each($Users);
	$user = $user['value'];


	$from = array(
		"%title%",
		"%title_safe%",
		"%sitename%",
		"%sitename_safe%",
		"%link%",
		"%link_self%",
		"%description%",
		"%author%",
		"%admin-email%",
		"%admin-nick%",
		"%year%",
		"%date%",
		"%genagent%",
		"%version%",
		"%lang%",
		"%charset%",
	);

	$to = array(
		str_replace("&", "&amp;", $Weblogs[$Current_weblog]['name']),
		str_replace("_", "", safe_string($Weblogs[$Current_weblog]['name'], TRUE)),
		$Cfg['sitename'],
		strtolower(str_replace("_", "", safe_string($Cfg['sitename'], TRUE))),
		$link, 
		$link_self, 
		$Weblogs[$Current_weblog]['payoff'], 
		$Current_user,
		$user['email'],
    $user['nick'],
		date("Y"),
		date("Y-m-d\TH:i:s").rss_offset(), 
		"http://www.pivotlog.net/?ver=".urlencode($build),
		$build,
		snippet_lang(),
		snippet_charset(),
	);


	$atom= str_replace($from, $to, $atom_preamble);

	$atom_items = array();
	

}

function add_comment_feeditem($item) {
	global $db, $rss_items, $atom_items, $Cfg, $Weblogs, $Current_weblog, $Allow_RSS, $Paths;

	if (!siteurl_isset()) {
		$weblog = $Paths['host'].$Paths['pivot_url'];
	} else {
		$weblog = $Weblogs[$Current_weblog]['siteurl'];
	}

	$entry = $db->read_entry($item['code']);
	
	$link =  make_fileurl($item['uid'], "", "");

	$title = $db->entry['title'];
	
	$date = format_date( $item['date'], "%year%-%month%-%day%T%hour24%:%minute%:00").rss_offset();
	
	$description = htmlspecialchars(strip_tags($item['comment']));
	$description = str_replace("&nbsp;"," ", $description);	
	
	$id = safe_string($item["name"],TRUE) . "-" . format_date($item["date"], "%ye%%month%%day%%hour24%%minute%");
	
	$tag = 	str_replace("_", "",  strtolower(safe_string($Cfg['sitename'], TRUE))) . ",". date("Y") . ":" . $id;
	
	// make sure description is not too long..
	if ( (isset($Weblogs[$Current_weblog]['rss_full'])) && ($Weblogs[$Current_weblog]['rss_full']==0) ) {
		// don't put anything in the content.
		$content="";
	} else {
		// put the introduction and body in the content..
		$content = str_replace("&nbsp;"," ", ($introduction.$body));	
	}

	if (isemail($item['email'])) {
		$email = "\n<email>".$item['email']."</email>";	
	} else {
		$email = "";	
	}

	if (isurl($item['url'])) {
		if (strpos($item["url"], "ttp://") < 1 ) {
			$item["url"]="http://".$item["url"];
		}
		$url = "\n<uri>".$item['url']."</uri>";	
	} else {
		$url = "";	
	}

	$atom_item='
	<entry>
	    <title>%author% on %title%</title>
	    <link rel="alternate" type="text/html" href="%link%#%id%"/>
	    <updated>%date%</updated>
	    <published>%date%</published>
	    <id>tag:%tag%</id>
	    <summary type="text">%description%</summary>
	    <content type="html" xml:lang="%lang%" xml:base="%link%">
		<![CDATA[ 
			%content%
		]]>
	    </content>
	    <author>
		<name>%author%</name>%url%%email%
	    </author>
	</entry>
';


	$from = array(
		"%title%", 
		"%link%", 
		"%id%",
		"%description%", 
		"%content%",
		"%author%",
		"%guid%", 
		"%date%", 
		"%tag%",
		"%lang%",
		"%url%",
		"%email%",
	);

	$to = array(
		htmlspecialchars(strip_tags($entry['title'])), 
		$link, 
		$id,
		RelativeToAbsoluteURLS($description), 
		trim(comment_format($item['comment'])),
		htmlspecialchars(unentify($item['name'])), 
		$item['uid']."@".$weblog, 
		$date, 
		$tag,
		snippet_lang(),
		$url,
		$email,
	);

	$atom_item= str_replace($from, $to, $atom_item);

	$atom_items[$date]=$atom_item;


}

function finish_comment_feed() {
	global $rss, $rss_items, $atom, $atom_items, $Weblogs, $Current_weblog, $VerboseGenerate;

	// sort the items..
	ksort($atom_items);
	$atom_items= array_reverse($atom_items);

	//write out the atom feed
	if($Weblogs[$Current_weblog]['atom_filename'] != "") {
			
		foreach ($atom_items as $item) {
			$atom .= $item;
		}

		$atom.="\n</feed>\n";

		echo $atom;
		

	}

}


?>
