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


/**
 * The Pivot ajax helper script. This file contains the several functions
 * to dynamically load data into an existing page. 
 */


// For security reasons, this script will only allow calling the following functions:
$allowed_functions = array('getalltags');


// When developing, you can uncomment the following line. Then the script will allow
// $_GET parameters, for easier testing.
$_POST = array_merge($_POST, $_GET);


// Check if the function exists, else we die().
if ( ($_POST['function']=="") || (!in_array($_POST['function'], $allowed_functions)) ) {
	// Can't do that!
	echo "Sorry, but you're not allowed to call '".$_POST['function']."'.";
	die();
} else {
	require_once(dirname(__FILE__)."/pv_core.php");
	
	$_POST['function']();
	
}



/**
 * Get all tags, to display in 'suggested tags' when editing an entry, or 
 * when inserting a tag.
 */
function getalltags() {
	
	$minsize=11; 
	$maxsize=19; 
	$amount=1000; 
 
 	$tagcosmos = getTagCosmos($amount);
	
	foreach($tagcosmos['tags'] as $key => $value)	{
		
		// Calculate the size, depending on value. 
		$nSize = round($minsize + ($value/$tagcosmos['maxvalue']) * ($maxsize - $minsize));
		
		// Write the tags, we add events to them using jquery.
		$htmllinks[$key] = sprintf("<a style=\"font-size:%spx;\" rel=\"tag\" title=\"%s: %s, %s %s\">%s</a>\n",
				$nSize,
				lang('tags', 'tag'),
				$key,
				$value,
				lang('userbar', 'entries'),
				str_replace("+"," ",$key)
			);
	}

	$output .= implode(" ", $htmllinks);

	echo $output;
 	
	
}





?>