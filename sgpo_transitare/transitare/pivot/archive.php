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

// First line defense.
if (file_exists(dirname(__FILE__)."/first_defense.php")) {
	include_once(dirname(__FILE__)."/first_defense.php");
	block_refererspam();
}


define('__SILENT__', TRUE);
// apparently also defined in pv_core
// $marco (who hates php notices)
// define('INPIVOT', TRUE);
define('LIVEPAGE', TRUE);

include_once("pv_core.php");
include_once("modules/module_userreg.php");


// convert encoding to UTF-8
i18n_array_to_utf8($Pivot_Vars, $dummy_variable);

if (isset($Pivot_Vars['w']) && ($Pivot_Vars['w'] != "")) {
	// weblog_from_para returns false if the weblog doesn't exist.
	$override_weblog = weblog_from_para($Pivot_Vars['w']);
	if (!$override_weblog) {
		piv_error("Weblog doesn't exist","Selected weblog \"".
		htmlspecialchars($Pivot_Vars['w'])."\" doesn't exist.");
	} else {
		$Pivot_Vars['w'] = $override_weblog;
	}
}
if (isset($Pivot_Vars['c']) && ($Pivot_Vars['c'] != "")) {
	// category_from_para returns false if the category doesn't exist.
	$override_category = category_from_para($Pivot_Vars['c']);
	if (!$override_category) {
		piv_error("Category doesn't exist","Selected category \"".
		htmlspecialchars($Pivot_Vars['c'])."\" doesn't exist.");
	} else {
		$Pivot_Vars['c'] = $override_category;
		// (By enabling the commented out code below you can also require that
		// the category is actually published by a weblog.)
		/*
		$in_weblogs = find_weblogs_with_cat($Pivot_Vars['c']);
		if (count($in_weblogs) == 0) {
			piv_error(lang('error','category_404'), lang('error','category_404_desc'),0);
		}
		*/
	}
}

if (!isset($Pivot_Vars['w']) || ($Pivot_Vars['w'] == "")) {
	$override_weblog = find_current_weblog_referer();
	// Referer didn't reveal anything (or was empty):
	// 1) Match weblog against category if possible else
	// 2) Just select the first weblog.
	if (empty($override_weblog)) {
		if ($Pivot_Vars['c'] != "") {
			$in_weblogs = find_weblogs_with_cat($Pivot_Vars['c']);
			if (count($in_weblogs) != 0) {
				$override_weblog = $in_weblogs[0];
			}
		} else {
			reset($Weblogs);
			$override_weblog = key($Weblogs);
		} 
	} 

	$Pivot_Vars['w'] = $override_weblog;
} else if ($Pivot_Vars['w'] != "") {
	// Both weblog and category has some value - checking if they match
	if ($Pivot_Vars['c'] != "") {
		$in_weblogs = find_weblogs_with_cat($Pivot_Vars['c']); 
		 	     
		if (!in_array($Pivot_Vars['w'],$in_weblogs)) { 
			piv_error("Category/weblog mismatch", 'Category "'.htmlspecialchars($Pivot_Vars['c']).
			"\" doesn't belong to selected weblog (".htmlspecialchars($Pivot_Vars['w']).")."); 
		}
	}
}

if (!isset($Pivot_Vars['c'])) {
	$Pivot_Vars['c']="";
}

if (!isset($Pivot_Vars['u'])) {
	$Pivot_Vars['u']="";
}

if (!isset($Pivot_Vars['t']) || empty($Pivot_Vars['t'])) {
	if ($Pivot_Vars['w'] != "") {
		$Pivot_Vars['t'] = basename($Weblogs[$Pivot_Vars['w']]['extra_template']);
	} else {
		$Pivot_Vars['t'] = "";
	}
} else {
	$Pivot_Vars['t'] = basename($Pivot_Vars['t']);
}

// If non-crufty URLs (mod_rewrite) is enabled and someone tries to
// access the crufty URL, redirect. (Search engine friendly.)
list($request_script) = explode("?", $_SERVER['REQUEST_URI']);
if ($Cfg['mod_rewrite'] && (basename($request_script) == "archive.php") && ($Pivot_Vars['c'] != "")) {
	$Current_weblog = $Pivot_Vars['w'];
	set_paths_log_url();
	$filelink = $Paths['log_url']."category/".$Pivot_Vars['c'];
	// Handle addition query parameters
	if (para_weblog_needed($Pivot_Vars['w'])) {
		$query = '?w='.para_weblog($Pivot_Vars['w']).'&';
	} else {
		$query = '?';
	}
	unset($_GET['c']);
	unset($_GET['w']);
	foreach ($_GET as $key => $value) {
		$query .= $key.'='.urlencode($value).'&';
	}
	if ($query != '?') {
		$filelink .= substr($query, 0, -1);
	}
	// Redirect
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: $filelink");
	exit();
}

$output = generate_live_page($Pivot_Vars['w'], $Pivot_Vars['c'], $Pivot_Vars['t'], $Pivot_Vars['u']);

echo $output;

add_hook("getref", "pre");
execute_hook("getref", "pre", $hook_output);

?>
