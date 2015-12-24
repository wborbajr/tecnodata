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
	block_postedspam();
}

define('LIVEPAGE', TRUE);

include_once("pv_core.php");
include_once("modules/module_userreg.php");

$db = new db();

// Select the first weblog, if weblog not specified.
list($Pivot_Vars['w']) = explode("/",$Pivot_Vars['w']);
if ($Pivot_Vars['w'] != "") {
	if ($Pivot_Vars['w'] == "_all_") {
		reset ($Weblogs);
		$Current_weblog = (key($Weblogs));
	} else {
		$override_weblog = weblog_from_para($Pivot_Vars['w']);
		if (!$override_weblog) {
			piv_error("Weblog doesn't exist","Selected weblog \"".
			htmlspecialchars($Pivot_Vars['w'])."\" doesn't exist.");
		} else {
			$Current_weblog = $override_weblog;
		}
	}
} else {
	reset ($Weblogs);
	$Current_weblog = (key($Weblogs));
}

LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

// Set the template for the tags page
list($Pivot_Vars['t']) = explode("/",$Pivot_Vars['t']);
if (!isset($Pivot_Vars['t']) || empty($Pivot_Vars['t'])) {
	if (isset($Weblogs[$Current_weblog]['extra_template']) && ($Weblogs[$Current_weblog]['extra_template']!="") ) {
		$template = $Weblogs[$Current_weblog]['extra_template'];
	} else {
		$template = $Weblogs[$Current_weblog]['archive_template'];
	}
} else {
	$template = $Pivot_Vars['t'];
}

$template_html = load_template($template);
$template_html = replace_subweblogs_templates($template_html,"[[tagpage]]\n");

if (!($template_html)) {
	piv_error("Template error", "Could not load template file, <i>".
		htmlspecialchars($template)."</i>, because it doesn't exist.");
} else {
	$output=$template_html;
	$output=parse_step4($output);
}

echo ($output);
flush();


?>
