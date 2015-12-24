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
if(!defined('INPIVOT')){ die('not in pivot'); }

// Lamer protection
$currentfile = basename(__FILE__);
require dirname(dirname(__FILE__))."/lamer_protection.php";

function is_user($name) {
	global $Paths;

	$name_md5 = strtolower(md5(strtolower($name))); 
	
	if (file_exists($Paths['pivot_path'].'db/users/'.$name_md5.'.php')) {
		return TRUE;	
	} else {
		return FALSE;
	}
	
}



function reg_user($user) {
	global $Cfg, $Paths, $Current_weblog;

	$name_md5 = strtolower(md5(strtolower($user['name']))); 
	
	if (save_serialize($Paths['pivot_path'].'db/users/'.$name_md5.'.php', $user)) {	
		printf("<h2>%s</h2>\n\n", lang('commentuser', 'user_stored'));	
	} else {	
		printf("<h2>%s</h2>\n\n", lang('commentuser', 'user_stored_failed'));
	}
	
	$self= $Paths['host'] . $_SERVER['PHP_SELF'];
	
	$mail1 = lang('commentuser', 'registered')."\n\n";
	$mail2 = lang('commentuser', 'reg_verify_long')."\n\n";
	$url = sprintf("%s?func=verify&name=%s&code=%s&w=%s", $self, urlencode($user['name']), 
		md5($user['pass']."email"), para_weblog($Current_weblog));
	
	$mail = sprintf($mail1.$mail2, $Cfg['sitename'], $url );

	if (!mail($user['email'], "[Pivot] ".lang('commentuser','reg_confirmation'), $mail, "From: ".$user['email'])) {
		$mail2 = '<a href="%s">'.lang('commentuser','reg_verify_short').'</a>';
		$mail = sprintf($mail1.$mail2, $Cfg['sitename'], $url );
		echo "\n<br />". nl2br($mail) ."<br />\n";
	} else {
	    echo sprintf(lang('commentuser','reg_verification'), $user['email']);
	}
	notify_new('visitor_registration', array('add',$user['name']));
}


function mail_pass($user) {
	global $Cfg, $Paths;

	$self= $Paths['host'] . $_SERVER['PHP_SELF'];
	
	$mail = lang('commentuser', 'forgotten_pass_mail');
	
	$mail = str_replace("%site%", $Cfg['sitename'], $mail);
	$mail = str_replace("%name%", $Cfg['sitename'], $mail);	
	$mail = str_replace("%pass%", $user['pass'], $mail);
	$mail = str_replace("%link%", $self, $mail);


	if (!mail($user['email'], "[Pivot] Lost Password", $mail, "From: ".$user['email'])) {
		echo "<br />". nl2br($mail) ."<br />";
	}

	
}

function load_user($name) {
	// Abort immediately if empty name given
	if ($name == "") {
		return FALSE;
	}

	if (strpos($name, "|")>0) {
		list($name) = explode("|", $name);
	}

	$name_md5 = strtolower(md5(strtolower($name))); 
	
	if (is_user($name)) {
		$user = load_serialize('db/users/'.$name_md5.'.php');
		return $user;
	} else {
		return FALSE;
	}
}

function check_user_hash($name,$hash) {	
	
	$name_md5 = strtolower(md5(strtolower($name))); 
	
	if (is_user($name)) {
		$user = load_serialize('db/users/'.$name_md5.'.php');
		return (md5($user['pass']) == $hash);
	} else {
		return FALSE;
	}
	
}

function save_user($user) {
	global $Cfg, $Paths;

	$name_md5 = strtolower(md5(strtolower($user['name']))); 
	
	if (save_serialize($Paths['pivot_path'].'db/users/'.$name_md5.'.php', $user)) {
		
		// echo "User stored!<br /><br />";
		
	} else {
		
		echo "Could not store user!!<br /><br />";	
	}
		
}

?>
