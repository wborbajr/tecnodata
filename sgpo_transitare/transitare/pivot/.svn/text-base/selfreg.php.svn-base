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

// If you don't want the self-registered users to have access to all
// categories, uncomment the line below (and list only the categories
// the user is allowed to post in).
// $selfreg_cats = array("Category1","Category2");
//
// END USER CONFIGURATION

define('LIVEPAGE', TRUE);
include_once('pv_core.php');

$override_weblog = find_current_weblog_request();
if(empty($override_weblog)) {
	$override_weblog = find_current_weblog_referer();
}
set_current_weblog($override_weblog);
LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

if (!$Cfg['selfreg']) {
	piv_error(lang('userinfo','selfreg'),lang('userinfo','disabled'));
}

// Saving the page contents using
ob_start();

$setupstepn = 5;
$Setupstep1 = array(
	array('username', lang('userinfo','username'), '', 0, '', '', ''),
	array('pass1', lang('userinfo','pass1'), '', 1, '', '', 'maxlength="15"'),
	array('pass2', lang('userinfo','pass2'), '', 1, '', '', 'maxlength="15"'),
	array('email', lang('userinfo','email'), '', 0, '', '', ''),
	array('nick', lang('userinfo','nickname'), '', 0, '', '', ''),
);

if(!isset($Pivot_Vars['step'])){
	$setupstepn = 1;
}elseif($Pivot_Vars['step'] == 1){

	// Sanitize passed variables to prevent people from inserting characters that
	// could be interpreted as dividers.
	$Pivot_Vars['username'] = preg_replace("/[!|\n]/i", "", $Pivot_Vars['username']);
	$Pivot_Vars['pass1'] = preg_replace("/[!|\n]/i", "", $Pivot_Vars['pass1']);
	$Pivot_Vars['pass2'] = preg_replace("/[!|\n]/i", "", $Pivot_Vars['pass2']);
	$Pivot_Vars['email'] = preg_replace("/[!|\n]/i", "", $Pivot_Vars['email']);
	$Pivot_Vars['nick'] = preg_replace("/[!|\n]/i", "", $Pivot_Vars['nick']);
	
	if(isset($Users[$Pivot_Vars['username']])){
		$Setupstep1[0][2] = lang('userinfo','username_in_use');
		$Piverr++;
	}

	if(strlen($Pivot_Vars['username']) < 3){
		$Setupstep1[0][2] = lang('userinfo', 'username_too_short');
		$Piverr++;
	}

	if((trim(strtolower($Pivot_Vars['pass1']))) != (trim(strtolower($Pivot_Vars['pass2'])))) {
		$Setupstep1[2][2] = lang('userinfo', 'pass_dont_match');;
		$Piverr++;
	}

	if( (trim(strtolower($Pivot_Vars['pass1']))) == (trim(strtolower($Pivot_Vars['username'])))) {
		$Setupstep1[2][2] = lang('userinfo', 'pass_equal_name');
		$Piverr++;
	}

	if((strlen($Pivot_Vars['pass1'])) < 4 ){
		$Setupstep1[1][2] = lang('userinfo', 'pass_too_short');
		$Piverr++;
	}

	if((strlen($Pivot_Vars['pass1'])) > 14 ){
		$Setupstep1[1][2] = 'Password can be 14 characters at most. You know you will have to remember this, right?';
		$Piverr++;
	}

	if(!(isemail($Pivot_Vars['email']))) {
		$Setupstep1[3][2] = lang('userinfo', 'not_good_email');
		$Piverr++;
	}

	if($Piverr > 0){
		$setupstepn = 1;
		$Setupstep1[0][4] = $Pivot_Vars['username'];
		$Setupstep1[3][4] = $Pivot_Vars['email'];
		$Setupstep1[4][5] = $Pivot_Vars['nick'];


	}else{

		$setupstepn = 2;

		$Users[$Pivot_Vars['username']]['pass'] = md5($Pivot_Vars['pass1']);
		$Users[$Pivot_Vars['username']]['email'] = $Pivot_Vars['email'];
		$Users[$Pivot_Vars['username']]['nick'] = $Pivot_Vars['nick'];
		$Users[$Pivot_Vars['username']]['userlevel'] = 1;
		$Users[$Pivot_Vars['username']]['language'] = $Cfg['deflang'];

		$Cfg['users'] .= '|'.$Pivot_Vars['username'];

		// set the categories.,
		if (!isset($selfreg_cats)) $selfreg_cats = cfg_getarray('cats');
		foreach ($selfreg_cats as $category) {
			// add the user..
			$allowed_users = explode("|", $Cfg[ 'cat-'.$category]);
			$allowed_users[] = $Pivot_Vars['username'];
			$allowed_users = array_unique($allowed_users);
			$Cfg[ 'cat-'.$category ] = implode("|", $allowed_users);
		}


		PutUserInfo();
	}
}

$var = "Setupstep{$setupstepn}";
if($setupstepn==1){
	$next = lang('general','go');
}else{
	SaveSettings();
	redirect('index.php');
}

$selfurl = $Paths['pivot_url'].'selfreg.php';
if (isset($_GET['w']) && !empty($_GET['w'])) {
	$selfurl .= '?w='.$_GET['w'];
}
// Printing out the form - not using the StartForm function
// since we need this file as the action URL.
echo "<h2>".lang('userinfo','selfreg')."</h2>\n";
echo '<form method="post" action="'.$selfurl.'" class="nopadding">'."\n";
GenSetting('step','','',7,$setupstepn);
StartTable($caption);
DisplaySettings($$var);
EndForm($next, 1);

$form = ob_get_contents();
ob_end_clean();

$db = new db;

// Use the extra template for the current weblog
if (isset($Weblogs[$Current_weblog]['extra_template']) && ($Weblogs[$Current_weblog]['extra_template']!="") ) {
	$template_html = load_template($Weblogs[$Current_weblog]['extra_template']);
} else {
	$template_html = load_template($Weblogs[$Current_weblog]['archive_template']);
}

// Match and replace the [[weblog]] tags for the form output
if (preg_match_all('/\[\[(sub)?weblog:(.*)?(:[0-9]*)?\]\]/siU', $template_html, $match)) {

	if (count($match[1])==1) {
		$template_html = str_replace($match[0][0], $form, $template_html);
	} else {
		$template_html = preg_replace("/\[\[(sub)?weblog:standard(:[0-9]*)?\]\]/siU", $form, $template_html);

		foreach ($match[0] as $name) {
			$template_html = str_replace($name, "", $template_html);
		}
	}

}

if (!($template_html)) {
	ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
} else {
	$output=$template_html;
	$output=parse_step4($output);
}

echo ($output);
flush();

?>
