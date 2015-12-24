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



/**
 * Get the TagCosmos. Preferably use the cached version, otherwise just make it
 * on the fly. (and then we store the cached version)
 *
 * If $max is given, it will return at most that many tags, ordered by size.
 * If $weblogname is given, only tags for that weblog will be returned.
 *
 * Returns an array with the following elements:
 * 'minvalue' => minimum value of a tag
 * 'maxvalue' => maximum value of a tag
 * 'amount' => number of tags
 * 'tags' => array of the tags. The indices are the tags, the values the number of occurences
 *
 * @param integer $max
 * @param string $weblogname 
 * @return array
 *
 */
function getTagCosmos($max=0,$weblogname='') {
	global $Paths, $Cfg, $Weblogs;

	if (($weblogname== '') || ($Cfg['weblog_count'] == 1)) {
		$weblogname = '_all_';
	}

	// If the cached version is fresh enough, we restore that
	if ( (file_exists($Paths['pivot_path']."db/ser_tags.php"))  &&
		(filectime($Paths['pivot_path']."db/ser_tags.php") > (time() - (60 * $Cfg['tag_cache_timeout'] ))) ) {

		// Just load it..
		$data = load_serialize("db/ser_tags.php");
		$tagcosmos = $data[$weblogname];

	} else {

		// We have to read it..

		$tagcosmos = array();
		if ($Cfg['weblog_count'] > 1) {
			$temp_db = new db(FALSE);
		}
		foreach ($Weblogs as $weblog => $weblogdata) {
			$tagcosmos[$weblog] = array();
		}

		$tagdir = dir($Paths['pivot_path']."db/tagdata/");

		// Read all tags, build the tag index and save it or later.
		while (false !== ($entry = $tagdir->read())) {
			if (getextension($entry)=="tag") {
				list($tagname) = explode(".", $entry);
				$tagfile = implode("",file($Paths['pivot_path']."db/tagdata/".$entry));
				$tagfile = explode(",", $tagfile);

				// If magic_quotes_gpc is set, we need to strip slashes..
				if (get_magic_quotes_gpc()) {
					$tagname = stripslashes($tagname);
				}

				if ($tagname!="") {
					$tagcosmos['_all_']['tags'][$tagname] = count($tagfile);
                                        if ($Cfg['weblog_count'] > 1) {
						foreach ($tagfile as $entrycode) {
							$temp_entry = $temp_db->read_entry($entrycode);
							$cat_weblogs = find_weblogs_with_cat($temp_entry['category']);
							foreach ($cat_weblogs as $cat_weblog) {
								$tagcosmos[$cat_weblog]['tags'][$tagname]++;
							}
						}
					}
                                }
			}
		}

		$tagdir->close();

		save_serialize($Paths['pivot_path']."db/ser_tags.php", $tagcosmos);
    
		$tagcosmos = $tagcosmos[$weblogname];
	}

	$tagcosmos['amount'] = count($tagcosmos['tags']);

	// if $max is given, we need to filter out the smaller tags, until the required size is reached.
	if (($max!=0) && ($max<count($tagcosmos['tags']))) {
		arsort($tagcosmos['tags']);
		$tagcosmos['tags'] = array_slice($tagcosmos['tags'], 0, $max);
	}

	ksort($tagcosmos['tags']);

	$tagcosmos['minvalue'] = 1000;
	$tagcosmos['maxvalue'] = 0;

	// We determine what the min and max-value in the cosmos is.
	foreach($tagcosmos['tags'] as $key => $value)	{
		$tagcosmos['maxvalue'] = max($tagcosmos['maxvalue'], $value);
		$tagcosmos['minvalue'] = min($tagcosmos['minvalue'], $value);
	}

	return $tagcosmos;

}


/**
 * Get the tags from the current entry as an array. if $link is true,
 * the array will consist of links to the individual tag pages.
 *
 * @param boolean $link
 * @param string $text
 * @param mixed $additional
 * @return array
 */
function getTags($link=true, $text="", $additional=false) {
	global $db;

	// If text is not empty, we gather tags from that, else we use the current
	// $db->entry
	if ($text == "") {
		$text = $db->entry["introduction"].$db->entry["body"];
	}

	// If additional is not empty, we gather tags from that, else we use the
	// current $db->keywords
	if ($additional === false) {
		$additional = $db->entry["keywords"];
	}

	// Parsing out the tags from the tt snippet in the text, taking into
	// account the optional second URL parameter.
	preg_match_all('/\[\[\s?tt\s?:\s?([^:\]]*)(\s?:[^\]]*)?\s?\]\]/i', $text, $aTagsList);

	// We don't need the entire result set, only the 'real' matches:
	$aTagsList = $aTagsList[1];

	// Add the keywords..
	$keywords = explode(",", $additional );

	foreach($keywords as $key => $item) {
		$item = strtolower(trim($item));
		if ($item!="") {
			$aTagsList[] = $item;
		}
	}

	foreach($aTagsList as $key => $value) {
		$aTagsList[$key] = normalizeTag($value);

		// If magic_quotes_gpc is set, we need to strip slashes..
		if (get_magic_quotes_gpc()) {
			$aTagsList[$key] = stripslashes($aTagsList[$key]);
		}

	}

	$aTagsList = array_unique($aTagsList);
	sort($aTagsList);

	// Make links, perhaps..
	if ($link) {
		foreach($aTagsList as $key => $value) {
			$aTagsList[$key] = sprintf('<a rel="tag" href="%s" title="%s: %s">%s</a>',
				tagLink($value),
				lang('tags', 'tag'),
				$value,
				$value
			);
		}
	}


	return $aTagsList;

}

/**
 * Normalize tag to avoid duplicate noise.
 *
 * Currently we trim spaces, lowercase, remove quotes and HTML entities, and
 * treat 'star wars', 'star-wars', 'star+wars' and 'star_wars' as similar
 * (with the underscore version as the base case).
 *
 * @todo Since tag is used as filename not all characters should be allowed.
 *
 * @param string $tag
 * @return string
 */
function normalizeTag($tag){
	$tag = trim($tag);
	$tag = decode_text($tag,'special');
	// Decode the rest of the HTML enities if possible.
	$tag = unentify($tag);
	$tag = trim(strtolower($tag));
	$tag = str_replace(array("'",'"'), "", $tag);
	$tag = str_replace(array(" ","-","+"), "_", $tag);
	// Replacing character(s) not allowed in filenames.
	$tag = str_replace("/", "_", $tag);
	// Remove HTML enities we didn't manage to decode.
	$tag = preg_replace("/&([a-z\d]{2,7}|#\d{2,5});/i", "", $tag);
	if (empty($tag)) {
		$tag = "__empty__";
	}
	return $tag;
}


/**
 * Write out all tags for any given entry..
 *
 * @param array $entry
 */
function writeTags($tags, $oldtags, $code) {

    if (is_string($tags)) {
        $tags = explode(", ", $tags);
    }
    $oldtags = explode(", ", $oldtags);

    // Loop through new tags, and add them..
    if (is_array($tags) && (count($tags)>0)) {
        foreach($tags as $tag) {
            writeTag($tag, $code);
            make_related_tags($tag, $tags);
        }
    }

    // Loop through old tags, and delete them if they are no longer present.
    if (is_array($oldtags) && (count($oldtags)>0)) {
        foreach ($oldtags as $oldtag) {
            if (!in_array($oldtag, $tags)) {
                deleteTag($oldtag, $code);
            }
        }
    }

}


/**
 * Write out a single tag, checking if it doesn't exist already.
 *
 * @param string $tag
 * @param integer $entrycode
 */
function writeTag($tag, $entrycode) {
	global $Paths;

	$tag = normalizeTag($tag);

	if ($tag=="__empty__") {
	    debug("Pivot can't save an empty tag! (in entry $entrycode)");
	    return "";
	}

	$sFileName = strtolower($tag);

	if(!is_dir($Paths['pivot_path']."db/tagdata"))	{
		return "<b>ERROR: You must create ".$Paths['pivot_path']."db/tagdata and set the permissions to world writable!!! Bailing out.";
	}

	if(file_exists($Paths['pivot_path']."db/tagdata/".$sFileName.".tag"))	{

		$aFileArr = explode(",",implode("",file($Paths['pivot_path']."db/tagdata/".$sFileName.".tag")));

		if(!in_array($entrycode, $aFileArr))	{

			$aFileArr[] = $entrycode;
			$sNewFileString = implode(",",$aFileArr);

			write_file($Paths['pivot_path']."db/tagdata/".$sFileName.".tag", $sNewFileString);

		}

	} else {

		write_file($Paths['pivot_path']."db/tagdata/".$sFileName.".tag", $entrycode);

	}


}


/**
 * Deletes all tags for any given entry.
 *
 * @param mixed $tags
 * @param integer $entrycode
 * @return void
 */
function deleteTags($tags, $entrycode) {

	if (is_string($tags)) {
		$tags = explode(", ", $tags);
	}

	// Loop through tags, and delete them..
	foreach($tags as $tag) {
		deleteTag($tag, $entrycode);
	}
}


/**
 * Delete a single tag for any given entry.
 *
 * @param string $tag
 * @param integer $entrycode
 */
function deleteTag($tag, $entrycode) {
	global $Paths;

	$tag = normalizeTag($tag);

	$sFileName = strtolower($tag);

	if(!is_dir($Paths['pivot_path']."db/tagdata"))	{
		return "<b>ERROR: You must create ".$Paths['pivot_path']."db/tagdata and set the permissions to world writable!!! Bailing out.";
	}

	if(file_exists($Paths['pivot_path']."db/tagdata/".$sFileName.".tag"))	{

		$aFileArr = explode(",",implode("",file($Paths['pivot_path']."db/tagdata/".$sFileName.".tag")));

		if(in_array($entrycode, $aFileArr))	{

			foreach ($aFileArr as $key => $value) {
				if ($value=="" || $value==$entrycode) {
					unset($aFileArr[$key]);
				}
			}

			if (count($aFileArr)==0) {

				// we can remove the empty tag file (and associated files)..
				unlink($Paths['pivot_path']."db/tagdata/".$sFileName.".tag");
				@unlink($Paths['pivot_path']."db/tagdata/".$sFileName."-tagpage.cache");
				@unlink($Paths['pivot_path']."db/tagdata/".$sFileName.".rel");

			} else {

				$sNewFileString = implode(",",$aFileArr);
				write_file($Paths['pivot_path']."db/tagdata/".$sFileName.".tag", $sNewFileString);

			}
		}

	}

}


/**
 * Print out the current Tag Cosmos as a fancy tagcloud in HTML, with smaller
 * and larger tags, dependent on how often they occur. Returns the output as HTML.
 *
 * @return string
 */
function printTagCosmos()	{
    global $Paths, $Cfg, $Current_weblog;

    $tagcosmos = getTagCosmos(0, $Current_weblog);

    $htmllinks = array();


    // This is the factor we need to calculate the EM sizes. $minsize is 1 em,
    // $maxsize will be ($maxsize / $minsize) EM.. Take care if $tagcosmos['maxvalue'] == $tagcosmos['minvalue']
    if ($tagcosmos['maxvalue'] != $tagcosmos['minvalue']) {
        $factor = ($Cfg['tag_max_font'] - $Cfg['tag_min_font']) / ($tagcosmos['maxvalue'] - $tagcosmos['minvalue']) / $Cfg['tag_min_font'];
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

    $output = "<div id='tagpage'>\n<h2>".lang('tags','tags')."</h2>\n";
    $output .= "<p>".lang('tags','localcosmos_description')."</p>\n";
    $output .= "<div id=\"tagcosmos\" style=\"font-size: {$Cfg['tag_min_font']}px;\">\n";

    $output .= implode("\n", $htmllinks);

    // Since it'll be built in, we don't want to display Marco's name on every page. Sorry Marco, you know we love you! ;-)
    // $output .= "<br/><br/><small>Taggerati extension for <a href=\"http://www.pivotlog.net/\">Pivot</a> by <a href=\"http://www.i-marco.nl/weblog/\">Marco van Hylckama Vlieg</a></small>";

    $output .= "</div>\n</div>\n\n";

    return $output;
}

/**
 * Print out the tag page for any given tag. Returns the output as HTML.
 *
 * @param string $tag
 * @return string
 */
function printTag($tag) {
	global $Paths, $Cfg, $Current_weblog;

	$tag = normalizeTag($tag);
	if(!file_exists($Paths['pivot_path']."db/tagdata/".$tag.".tag"))  {
		return "No such tag";
	}


	// If magic_quotes_gpc is set, we need to strip slashes..
	if (get_magic_quotes_gpc()) {
		$tag = stripslashes($tag);
	}

	if(file_exists($Paths['pivot_path']."db/tagdata/".$tag."-tagpage.cache"))  {
		if(filectime($Paths['pivot_path']."db/tagdata/".$tag."-tagpage.cache") < (time() - (60 * $Cfg['tag_cache_timeout'] )))  {
			@unlink($Paths['pivot_path']."db/tagdata/".$tag."-tagpage.cache");
		}
		else  {
			return "<!--CACHE HIT-->".file_get_contents($Paths['pivot_path']."db/tagdata/".$tag."-tagpage.cache");
		}
	}


	if($Cfg['tag_fetcher_enabled'])  {
		$para_weblog = "?w=".para_weblog($Current_weblog);
		$output = '
			<script type="text/javascript" src="'.$Paths['pivot_url'].'includes/js/jquery.js"></script>
			<script type="text/javascript">
			/*<![CDATA[ */
			function doList(type, tag)  {
				$("#tgrrsslist").html(\'<img src="'.$Paths['pivot_url'].'pics/taggerati/loading_\' + type + \'.gif" alt=""/>\');
				var url = "'.$Paths['pivot_url'].'includes/ajax_rsslist.php'.$para_weblog.'";
				$.get( url, { type: type, tag: tag }, function(output) { $("#tgrrsslist").html(output); } );
			}
			/* ]]> */
			</script>
		';
	}

	$output .= "<div id='tagpage'>\n<h2>".lang('tags','tagoverview_header')." '".str_replace("+"," ",$tag)."'</h2>\n\n";
	$output .= "<h3>".lang('tags','entries_with_tag')." '" . str_replace("+"," ",$tag) . "'</h3>\n\n";
	$output .= get_entries_with_tag($tag);
	$output .= "<h3>".lang('tags','related_tags')."</h3>\n\n";
	if(file_exists($Paths['pivot_path']."db/tagdata/".$tag.".rel"))	{
		$fpTagFile = fopen($Paths['pivot_path']."db/tagdata/".$tag.".rel", "r");
		$sTagString = "";
		while(!feof($fpTagFile))	{
			$sTagString .= fread($fpTagFile, 4096);
		}
		fclose($fpTagFile);
		$aTagList = explode(",", $sTagString);
		$nCount = 0;
		foreach($aTagList as $sThisTag)	{
			$output .= "\n<a href=\"". tagLink(str_replace(" ", "+",$sThisTag))."\" class=\"taglinkext\">$sThisTag</a>";
			$nCount++;
			if($nCount < sizeof($aTagList))	{
				$output .= ", ";
			}

		}
	}
	else	{
		$output .= "\n<p>".lang('tags','no_related_tags')."<p>\n";
	}



	if($Cfg['tag_fetcher_enabled'])  {
		$output .= "\n<div id='feedfetcher'>\n";
		$output .= "<h3>".lang('tags','external_feeds')." '" . str_replace("+"," ",$tag) . "'</h3>\n\n";
		$output .= "<p>\n".lang('tags','click_icon')." '" . str_replace("+"," ",$tag) . "'</p>\n<p id='tagbuttons'>\n";

		$sites = array('technorati'=>'Technorati', 'delicious'=>'Del.icio.us', 'furl'=>'Furl', 'magnolia'=>'Ma.gnolia',
				 'google'=>'Google', 'feedster'=>'Feedster', 'icerocket'=>'Icerocket', 'tagzania'=>'TagZania',
				 'shadows'=>'Shadows', 'feedmarker'=>'Feedmarker', '43things'=>'43 Things' );

		foreach ($sites as $key=>$value) {
			$output .= sprintf("<a href=\"javascript:doList('%s','%s');\"><img src=\"%spics/taggerati/%s.png\" alt=\"%s\" /></a>\n",
				$key,
				str_replace('/','',$_GET['tag']),
				$Paths['pivot_url'],
				$key,
				$value);
		}


		$output .= "</p>";

		$output .= "<div id=\"tgrrsslist\"></div>";
		$output .= "</div>\n";
	}


	if($Cfg['tag_flickr_enabled'])  {
			$output .= "<h3>".lang('tags','flickr_images')." '" . str_replace("+"," ",$tag) . "'</h3>\n\n";
			$output .= '

	<!-- Start of Flickr Badge -->
	<div id="flickrpics">
	<table><tr>
	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&amp;count=' . $Cfg['tag_flickr_amount'] . '&amp;display=latest&amp;size=s&amp;layout=h&amp;source=all_tag&amp;tag='.$tag.'"></script>
	</tr></table>
	</div>

	';

	}

	$output .= "</div>\n";
	$output .= "<!-- cached at: ".date("H:i", time())."-->";

	// Since it'll be built in, we don't want to display Marco's name on every page. Sorry Marco, you know we love you! ;-)
	// $output .= "<br/><br/><small>Taggerati extension for <a href=\"http://www.pivotlog.net/\">Pivot</a> by <a href=\"http://www.i-marco.nl/weblog/\">Marco van Hylckama Vlieg</a></small>";

	write_file($Paths['pivot_path']."db/tagdata/".$tag."-tagpage.cache", $output);


	return $output;
}

/**
 * Make a link to any given $tag.
 *
 * @param string $tag
 * @param string $template
 * @return string
 */
function tagLink($tag, $template="") {
	global $Paths, $Current_weblog, $Cfg;

	$tag = normalizeTag($tag);

	if ( ($Cfg['mod_rewrite']==0) && ($Cfg['mod_taglinks']!=1) ) {
	    
		$link = $Paths['pivot_url']."tags.php?tag=".urlencode($tag);
		if (para_weblog_needed($Current_weblog)) {
			$link .= "&amp;w=" . para_weblog($Current_weblog);
		}
		if ($template != "") {
			$link .= "&amp;t=$template";
		}
		
		return $link;
	    
	} else if ($Cfg['mod_rewrite']==0) {
	    
		$link = $Paths['pivot_url']."tags.php";
		if (para_weblog_needed($Current_weblog)) {
			$link .= "?w=" . para_weblog($Current_weblog);
			if ($template != "") {
				$link .= "&amp;t=$template";
			}
		} else {
			if ($template != "") {
				$link .= "?t=$template";
			}
		}
		return $link."/".urlencode($tag);
		
	} else {
		$link = $Paths['log_url']."tag";
		if (para_weblog_needed($Current_weblog)) {
			$link .= "/w=" . para_weblog($Current_weblog);
		}
		if ($template != "") {
			$link .= "/t=$template";
		}
		return $link."/".urlencode($tag);
	}

	
}

/**
 * Needs cleanup!!
 *
 * @param unknown_type $p_sTag
 * @param unknown_type $p_nSkip
 * @return unknown
 */
function get_entries_with_tag($p_sTag, $p_nSkip=0)	{
	global $db, $Paths;

	$p_sTag = strtolower($p_sTag);
	$p_sTag = str_replace(" ","+", $p_sTag);
	if(file_exists($Paths['pivot_path']."db/tagdata/$p_sTag.tag"))  {
		$fpTagFile = fopen($Paths['pivot_path']."db/tagdata/$p_sTag.tag", "r");
	}
	else  {
		return "";
	}
	$sEntriesString = "";
	while(!feof($fpTagFile))	{
		$sEntriesString .= fread($fpTagFile, 4096);
	}
	fclose($fpTagFile);
	$aEntries = explode(",",$sEntriesString);
	rsort($aEntries);

	$aLinks = array();

	foreach($aEntries as $nThisEntry)	{
		$myDB = new db();
		global $Paths;
		$myDB->read_entry($nThisEntry);
		$sTitle = $myDB->entry["title"];

		if($myDB->entry["code"] != $p_nSkip)	{
			$aLinks[] = "<li><a href=\"".make_filelink($myDB->entry["code"],'','')."\">".$sTitle."</a></li>";
		}
	}

	if (count($aLinks)>0) {
		$sLinkList = "<ul style=\"padding-left:10px;\">\n";
		$sLinkList .= implode("\n", $aLinks);
		$sLinkList .= "</ul>\n";
		return $sLinkList;
	} else {
		return "";
	}



}




/**
 * automagically determine related tags.
 *
 * @param string $p_sTag
 * @param array $p_aAllTags
 */
function make_related_tags($p_sTag, $p_aAllTags)	{
	global $Paths;

	if(!file_exists($Paths['pivot_path']."db/tagdata/$p_sTag".".rel"))  {
		$aRelTags = array();
		foreach($p_aAllTags as $sTheTag)	{
			if($sTheTag != $p_sTag)	{
				array_push($aRelTags, $sTheTag);
			}
		}

		if(sizeof($p_aAllTags) > 1)	{
			write_file($Paths['pivot_path']."db/tagdata/".str_replace(" ","+",$p_sTag).".rel", implode(",",$aRelTags) );
		}

	} else {

		$aRelArray = explode(",", implode("", file($Paths['pivot_path']."db/tagdata/$p_sTag".".rel")));
		$bMustWrite = false;

		foreach($p_aAllTags as $sThisOne)	{
			if((!in_array($sThisOne, $aRelArray)) && (!in_array($p_sTag, $p_aAllTags)))	{
				array_push($aRelArray, $sThisOne);
				$bMustWrite = true;
			}
		}

		if($bMustWrite)	{
			write_file($Paths['pivot_path']."db/tagdata/$p_sTag".".rel", implode(",",$aRelArray));
		}
	}
}



?>
