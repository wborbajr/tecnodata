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

// if id looks like 123/weblogname, we need to split it..
if (isset($_GET['id']) && strpos($_GET['id'],"/")>0) {
	list($_GET['id'], $_GET['w']) = explode("/",$_GET['id']);
}

define('__SILENT__', TRUE);
define('LIVEPAGE', TRUE);

include_once("pv_core.php");
include_once("modules/module_userreg.php");

$direct_output = TRUE;

// some global initialisation stuff. It might seem useless to do it here, when it's
// also done in pv_core. This is necesary, because the superglobals might have been 
// modified in archive_dynamic.php.
$Pivot_Vars = array_merge($_GET , $_POST, $_SERVER);

add_hook("display_entry", "pre");

// convert encoding to UTF-8
i18n_array_to_utf8($Pivot_Vars, $dummy_variable);

if (isset($Pivot_Vars['uid'])) {
	$Pivot_Vars['uid'] = str_replace("standard-", "", $Pivot_Vars['uid']);
	$Pivot_Vars['id'] = $Pivot_Vars['uid'];
}

$override_weblog="";

// check if we need to override the template.
if (isset($Pivot_Vars['t'])) {
	// explicitly defined template is most important.
	$Pivot_Vars['t'] = basename($Pivot_Vars['t']);
	$override_template = $Pivot_Vars['t'];
} else if (isset($Pivot_Vars['w']) && ($Pivot_Vars['w'] != "")) {
	$override_weblog = weblog_from_para($Pivot_Vars['w']);
	// Checking if weblog exists
	if (!isset($Weblogs[$override_weblog])) {
		piv_error("Weblog doesn't exist","Selected weblog \"".
		htmlspecialchars($Pivot_Vars['w'])."\" doesn't exist.");
	}
} else {
	$override_weblog = find_current_weblog_referer();
}

// If non-crufty URLs (mod_rewrite) is enabled and someone tries to
// access the crufty URL, redirect (if not in preview mode). 
// This is search engine friendly.
list($request_script) = explode("?", $_SERVER['REQUEST_URI']);
if (!isset($Pivot_Vars['f_title']) && $Cfg['mod_rewrite'] && (basename($request_script) == "entry.php")) {
	if ($override_weblog == "") {
		reset($Weblogs);
		$Current_weblog = key($Weblogs);
	} else {
		$Current_weblog = $override_weblog;
	}
	$filelink = make_filelink($_GET['id'], '', '');
	// Handle addition query parameters
	$query = '?';
	unset($_GET['id']);
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

// load an entry
if (isset($Pivot_Vars['id'])) {

	execute_hook("display_entry", "pre", $Pivot_Vars['id'], $override_weblog);

	$output = parse_entry($Pivot_Vars['id'], $override_weblog);

	// If registered user, override the other settings..
	if (isset($_COOKIE['piv_reguser'])) {

		list($reg_name, $reg_hash) = explode("|", 	$Pivot_Cookies['piv_reguser']);

		if (check_user_hash($reg_name, $reg_hash)) {
			$reg_user = load_user($reg_name);
			if ($reg_user['show_address']==1) {
				$_COOKIE['piv_email'] = $reg_user['email'];
			} else {
				$_COOKIE['piv_email'] = "";
			}
			$_COOKIE['piv_name'] = $reg_user['name'];
			$_COOKIE['piv_url'] = $reg_user['url'];
		}
	}

	if (count($_COOKIE)>0) {
		$cookie = @fill_comment_form($_COOKIE['piv_name'], $_COOKIE['piv_email'], $_COOKIE['piv_url'], $_COOKIE['piv_rememberinfo'], $_COOKIE['piv_comment']);
		$cookie = i18n_str_to_utf8($cookie);
		$output = str_replace("</body>", $cookie."</body>", $output);
	}

	add_hook("display_entry", "post");
	execute_hook("display_entry", "post", $db->entry, $output, $dummy_variable);

	echo $output;

} else if (isset($Pivot_Vars['f_title'])) {

	// This shows the entry in preview mode.
	define('PREVIEW', TRUE);

	$db = new db();

	$entry = get_entry_from_post();

	$entry['status'] = 'publish';
	$entry = $db->set_entry($entry);

	execute_hook("display_entry", "pre");

	$output = parse_entry($entry['code'], "");

	add_hook("display_entry", "post");
	execute_hook("display_entry", "post", $output);

	echo $output;

} else {

	add_hook("display_entry", "post");
	execute_hook("display_entry", "post", $output);

	echo $output;

}

?>
