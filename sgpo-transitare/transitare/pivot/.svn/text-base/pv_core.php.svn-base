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


$build = "Pivot - 1.40.4: 'Dreadwind'";

DEFINE('INPIVOT', TRUE);

// make sure the $Cfg array isn't already set
$Cfg = array();
$Pivot_Vars = array();
$ThisUser = array();

// some global initialisation stuff

// Combine $Pivot_vars, make sure no funny stuff is sent along.
$Pivot_Vars = array_merge($_GET , $_POST, $_SERVER);
if ( (isset($Pivot_Vars['pivot_url'])) || (isset($Pivot_Vars['log_url'])) || (isset($Pivot_Vars['pivot_path'])) ||
		(isset($Pivot_Vars['Cfg'])) || (isset($Pivot_Vars['Users'])) || (isset($Pivot_Vars['Paths'])) ) {
	// Note: even though 'pivot_url', 'log_url', 'pivot_path' aren't used anymore, we still
	// check for them. Older extensions might use them.
	die('no changing of internal variables');
}

if(realpath(__FILE__)=="") {
	$pivot_path = dirname(realpath($_SERVER['SCRIPT_FILENAME']))."/";
} else {
	$pivot_path = dirname(realpath(__FILE__))."/";
}
$pivot_path = str_replace("\\", "/", $pivot_path);


// Include some other files
require_once($pivot_path.'pvlib.php');
require_once($pivot_path.'pvdisp.php');
require_once($pivot_path.'modules/module_db.php');
require_once($pivot_path.'modules/module_i18n.php');
require_once($pivot_path.'modules/module_lang.php');
require_once($pivot_path.'modules/module_parser.php');
require_once($pivot_path.'modules/module_ipblock.php');
require_once($pivot_path.'modules/module_spamkiller.php');
require_once($pivot_path.'modules/module_snippets.php');
require_once($pivot_path.'modules/module_tags.php');


// Check if the current php version is at least 4.1.0..
if(!check_version(PHP_VERSION, "4.1.0") ) {
   echo "<p>Your PHP version is: " . PHP_VERSION . ".<br /> Pivot requires at least PHP version 4.1.0 to run properly!</p>\n\n";
   die();
}


// Start the timer:
$starttime=getmicrotime();



GetSettings();

/**
 * If debug is set, include the file..
 */
if( $Cfg['debug']==1){
	require_once($pivot_path.'modules/module_debug.php');
} else {
	error_reporting(E_ERROR);
	function debug() { }
	function debug_sep() { }
	function debug_printbacktrace() { }
	function debug_printr() { }
}

LoadDefLanguage();
Setpaths();



/**
 * Load the current theme
 */
if (($Cfg['deftheme']=="") || (!file_exists($pivot_path.'theme/'.$Cfg['deftheme'].'_theme.inc.php'))) {
	$Cfg['deftheme'] = "default";
}
require_once($pivot_path.'theme/'.$Cfg['deftheme'].'_theme.inc.php');

/**
 * Set the correct value for $i18n_use
 *
 * This needs work: more than iso-8859-1 have to have 'false'..
 */
if ($CurrentEncoding == "iso-8859-1") {
	$i18n_use = false;
} else {
	$i18n_use = true;
}


// if pv_core is included from a weblog, we might need to check whether it is
// still up to date.
if(defined('INWEBLOG')){
	inweblogcheck();
}



/**
 *  Produce an error message and exit.
 *
 * @param string $msg
 */
function ErrorOut($msg='debug death') {
	global $Pivot_Vars, $Cfg;

	$content = '<b>pivot error</b>: ' . $msg . '<br />';

	$CurrentEncoding = $Cfg['defencoding'];

	echo <<< END_PAGE
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html>
			<head>
			<title>Pivot$title</title>
			<meta http-equiv="Content-Type" content="text/html; charset=$CurrentEncoding" />
			<style type="text/css">
				body {
					background: #F0F0F0;
					margin: 0;
					padding: 20px;
					text-align: left;
				}
				a {
					color: #666666;
				}
				div {
					background-color: #FFFFFF;
					border: 1px solid #111111;
					padding: 7px;
					font-family: tahoma;
					color: #000000;
					width: 550px;
				}
			</style>
			</head>
			<body>
				<div>
					$content
				</div>
			</body>
		</html>
END_PAGE;

	exit();
}

/**
 * Initialise some things when the pivot interface must be shown:
 *
 * - Check if user is trying to register him/herself
 * - Check if user is logged in
 * - Load languages
 * - Convert encoding
 * - Load allowed functions for 'normal users' and 'admins'
 * - depending on userlevel, display the screen for normal or admin users
 *
 * @see CheckSanity(), CheckLogin(), LoadUserLanguage(), mainFunctions(), adminFunctions(), startAdmin(), startNormal()
 */
function Load() {
	global $Pivot_Vars, $Cfg, $Users, $ThisUser;
	CheckSanity();
	if($Cfg['installed'] == 0){
		require_once('setup.php');
	}else{
		CheckLogin();
		// Redirecting to page requested after log in (if needed)
		if (!empty($Pivot_Vars['login_query_string'])) {
			SaveSettings();
			redirect("index.php?".urldecode($Pivot_Vars['login_query_string']).
				"&session=".$Pivot_Vars['session']);
		}
		LoadUserLanguage();

		// convert encoding to UTF-8
		i18n_array_to_utf8($Pivot_Vars, $dummy_variable);

		$ThisUser = $Users[$Pivot_Vars['user']];
		require_once('pv_data.php');
		mainFunctions();
		if($Users[$Pivot_Vars['user']]['userlevel'] >= 3){
			adminFunctions();
		}
		if(isset($Pivot_Vars['menu']) && $Pivot_Vars['menu']=='admin'){
			require_once('pv_admin.php');
			startAdmin();
		}else{
			startNormal();
		}
	}
	SaveSettings();
}

/**
 * Make the $Paths array, which is used in many places to figure out where files should be
 * read from or written to.
 *
 * @see fixpath()
 */
function Setpaths(){
	global $Current_weblog, $Paths, $Cfg;

	$Paths['pivot_url'] = get_pivot_url();
	$Paths['cookie_url'] = fixPathSlash(str_replace('\\', '/', dirname($Paths['pivot_url'])));

	// We are setting $Paths['log_url'] in parse_step4 since it can't be
	// set before we know the weblog anyway.

	$Paths['host']="http://".$_SERVER['HTTP_HOST'];

	if(realpath(__FILE__)=="") {
		$Paths['pivot_path'] = str_replace('\\', '/', dirname(realpath($_SERVER['SCRIPT_FILENAME']))."/");
	} else {
		$Paths['pivot_path'] = str_replace('\\', '/', dirname(realpath(__FILE__))."/");
	}
	$Paths['extensions_path'] = fixpath( $Paths['pivot_path'] . '../' . $Cfg['extensions_path'] );
	$Paths['extensions_url'] = fixpath( $Paths['pivot_url'] . '../' . $Cfg['extensions_path'] );
	$Paths['upload_path'] = fixpath( $Paths['pivot_path'] . '../' . $Cfg['upload_path'] );
	$Paths['upload_url'] = fixpath( $Paths['pivot_url'] . '../' . $Cfg['upload_path'] );
	if( file_exists( $Paths['pivot_path'].'../bbclone/' )) {
		$Paths['bbclone_path'] = fixpath( $Paths['pivot_path'].'../bbclone/' );
	} elseif( file_exists( $Paths['pivot_path'].'../../bbclone/')) {
		$Paths['bbclone_path'] = fixpath( $Paths['pivot_path'].'../../bbclone/' );
	} else {
		$Paths['bbclone_path'] = "";
	}
	$Paths['templates_path'] = fixpath( $Paths['pivot_path'] . 'templates/' );
}

/**
 * Determines the URL to the pivot folder, or returns the URL from the config
 * file if we are not in the pivot folder.
 *
 * @return string
 */
function get_pivot_url() {
	global $Cfg;

	// If we are not in the "pivot" folder or
	// calling pivot with slashes after the script name
	if (!file_exists("./pv_core.php") || (strpos($_SERVER['REQUEST_URI'], ".php/")>0)) {

		if (isset($Cfg['pivot_url'])) {
			$url = $Cfg['pivot_url'];
		} else {
			die("URL to the Pivot folder is unknown - Log into Pivot to set the Pivot URL");
		}

	} else {

		// else we need to calculate pivot_url..

		if (isset($_SERVER['PATH_INFO']) && ($_SERVER['PATH_INFO'] !="") ) {
			$current_path = $_SERVER['PATH_INFO'];
		} else if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] !="") ) {
			$current_path = $_SERVER['PHP_SELF'];
		} else {
			$current_path = $_SERVER['SCRIPT_NAME'];
		}

		// remove windows weirdness in current path
		$current_path = str_replace( '\\','/',$current_path);
		$url = dirname($current_path)."/";
		$url = str_replace("//", "/", $url);

		// For some reason, when this function is called from the popups in the editor,
		// we sometimes get an extra /includes/editor/ attached to the end of the path.
		// If we do, just remove it.. (Yes, i do realize this is an ugly hack, but i
		// can't find out where it goes wrong :-( )
		// Comment by hansfn: It goes wrong because the popus do chdir("../../")
		$url = str_replace("/includes/editor/", "/", $url);

		// Perhaps we need to store the value in the config file..
		if ($url != $Cfg['pivot_url']) {
			$Cfg['pivot_url'] = $url;
			SaveSettings();
		}

	}

	return $url;

}

/**
 * Get the current hostname, taking to account what's set in the weblog config.
 *
 * Try to be as liberal as possible, to prevent unexpected results. These three
 * will all give http://www.example.org as result: www.example.org,
 * http://www.example.org, http://www.example.org/index.html
 *
 * @return string
 */
function gethost() {
	global $Weblogs, $Paths, $Current_weblog;

	if (siteurl_isset()) {
		$host = $Weblogs[$Current_weblog]['siteurl'];
	} else {
		$host = $Paths['host'];
	}

	// check if we have a scheme/protocol, otherwise add it.
	if ( (strpos($host, 'ttp://') == 0) && (strpos($host, 'ttps://') == 0) ) {
		$host = "http://".$host;
	}

	// Split it, and put together the parts we require. (and nothing else)
	$host = parse_url($host);
	$host = sprintf("%s://%s", $host['scheme'], $host['host']);

	return $host;

}

/**
 * Returns whether or not 'siteurl' is set in the weblog config.
 *
 * @return boolean
 */
function siteurl_isset() {
	global $Weblogs, $Paths, $Current_weblog;

	return (strlen($Weblogs[$Current_weblog]['siteurl'])>3);

}

/**
 *  Checks if the current user is at least of userlevel $min. If not, an error screen is displayed.
 *
 * @param integer $min
 */
function MinLevel($min) {
	global $Users, $Pivot_Vars;
	if($Users[$Pivot_Vars['user']]['userlevel'] < $min){
		// Reusing a string from the category section.
		piv_error(lang('category','denied'), lang('minlevel'),1);
	}
}

/**
 * Determines what screen needs to be displayed to 'normal' users. Checks what's set in
 * $Pivot_Vars['func'] and $Pivot_Vars['func'], checks if if the function is set and the user is
 * allowed to go there, and then jumps to that function.
 *
 * Otherwise it displays main_screen()
 *
 * @see startAdmin(), main_screen()
 *
 */
function startNormal() {
	global $Pivot_Vars, $mainInternal;

	$func = $mainInternal[$Pivot_Vars['func']];
	$func2 = $mainInternal[$Pivot_Vars['menu']];

	if ( isset($Pivot_Vars['func']) && isset($func) && (function_exists($func)) ) {
		$func();
	} else if (isset($Pivot_Vars['menu']) &&  (isset($func2)) && (function_exists($func2)) ) {
		$func2();
	} else {
		main_screen();
	}
}


/**
 * Display the Login screen. Also make sure any current session/cookies are cleared.
 * The 'reason' is defined as follows:
 * - 0, "No hacking, please"
 * - 1, "User is banned"
 * - 2, "No session active."
 * - 3, "User logged off"
 * - 4, "Incorrect username or password"
 * - 8, "Please log on. (if you keep getting this message, delete the cookies for this site)"
 *
 * @param boolean $failed
 * @param integer $reason
 * @param string $reason_desc
 *
 * @see CheckLogin()
 *
 */
function Login($failed=0, $reason=0, $reason_desc="") {
	global $Pivot_Vars, $build, $Cfg, $Paths;

	// Remove session cookies
	setcookie('user', '', -9999,$Paths['cookie_url']);
	setcookie('pass', '', -9999,$Paths['cookie_url']);
	setcookie('mode', 'nothing', -9999,$Paths['cookie_url']);

	if($failed == 1) {
		$failed = lang('login','retry');
	}
	if($Pivot_Vars['user']) {
		$uservar = $Pivot_Vars['user'];
	}

	PageHeader(lang('login','title'), 0);

	// Remove 'ban' from config if ban was issues longer than 12 hours ago.
	if(isset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']]) &&
			(abs($Cfg['bn_' . $_SERVER['REMOTE_ADDR']] - time()) >= 60*60*12)){
		unset($Cfg['fl_' . $_SERVER['REMOTE_ADDR']]);
		unset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']]);
	}

	// If there are more than 10 failed login attempts, ip address is banned for 12 hours.
	if($Cfg['fl_' . $_SERVER['REMOTE_ADDR']] >= 10 && ($Cfg['bn_' . $_SERVER['REMOTE_ADDR']] - time() < 60*60*12)){
		Paragraph(lang('login', 'banned'));
		if(!isset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']])){
			$Cfg['bn_' . $_SERVER['REMOTE_ADDR']] = time();
		}
	}else{

		echo "<div style='padding: 20px;'>\n";
		StartForm('login');
		if (!empty($Pivot_Vars['login_query_string'])) {
			$login_query_string = urldecode($Pivot_Vars['login_query_string']);
		} else {
			$login_query_string = $_SERVER['QUERY_STRING'];
		}
		if (!empty($login_query_string) && (strpos($login_query_string,"func=login") === false)) {
			GenSetting('login_query_string', '', '', 7, urlencode($login_query_string));
		}
		StartTable();
		GenSetting('header', lang('login','title'). " &raquo; ".$build,  '', 8);
		GenSetting('user', lang('login','name'), '', 0, $uservar);
		GenSetting('pass', lang('login','pass'), $failed, 1, $passvar);
		GenSetting('remember', lang('login','remember'), '', 3, array( lang('login','rchoice','2'), 'stayloggedin', lang('login','rchoice','0'), 'nothing'), '', $_COOKIE['mode']);
		EndForm(lang('login','title'), 1);

	}

	// Display the reason why this screen is shown, instead of the overview.
	if ($reason > 0) {
		Debug("logged out, because of reason #".$reason. ": ". $reason_desc);
		echo "<p>logged out because of <b>reason #".$reason. ": ". $reason_desc."</b></p>";
	}

	// Add a paragraph to allow the user to delete his session cookies.
	echo "<p>".lang('login','delete_cookies_desc')."<br />";
	$bookmarklet = "javascript:d=new Date();var ck = document.cookie.split(';');for(var i in ck) {document.cookie=ck[i].split('=')[0] + '=;EXPIRES=' + d.toUTCString();};location.href=document.URL;";
	printf("<a href=\"%s\">%s</a></p>", $bookmarklet,  lang('login','delete_cookies'));

	SaveSettings();
	PageFooter();

	exit;
}



/**
 * This function is always called. It checks if:
 * - A user just logged in
 * - A user is logged in, or
 * - A 'persistent login' cookie is set
 *
 * If either of these is true, a new session is started, or an old session is revived.
 * If it's not right, the user is booted to the login screen.
 *
 * @see Login(), NewSession(), ReviveSession()
 *
 */
function CheckLogin() {
	global $Users, $Pivot_Vars, $Cfg, $Paths;

	// User is banned..
	if(isset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']])){
		Login(1, 1, "User is banned");
	}

	// added to not check for referers if no session id is given..
	if(!isset($Pivot_Vars['session'])){
		$uri = 'http://' . $Pivot_Vars['HTTP_HOST'] . $Pivot_Vars['SCRIPT_NAME'];
		if(strpos($Pivot_Vars['HTTP_REFERER'], $uri)!=0){
			$Pivot_Vars['user'] = '';
			Login(0, 2, "No session active.");
		}
	}

	// If we selected logout from the menu..
	if( isset($Pivot_Vars['func']) && ($Pivot_Vars['func'] == 'login') && isset($Pivot_Vars['do']) && ($Pivot_Vars['do'] == 'logout')){

		setcookie('user', '', -9999,$Paths['cookie_url']);
		setcookie('pass', '', -9999,$Paths['cookie_url']);
		setcookie('mode', 'nothing', -9999,$Paths['cookie_url']);
		unset($Users[$Cfg['tempsessions'][$Pivot_Vars['session']][0]]['session']);
		unset($Cfg['tempsessions'][$Pivot_Vars['session']]);

		SaveSettings();
		login(0,3, "User logged off");
	}

	// if the user has cookies set, but no session is active yet..
	if( isset($_COOKIE['user']) && isset($_COOKIE['hash']) && ($_COOKIE['mode'] == 'stayloggedin') &&
		( (!isset($Pivot_Vars['session'])) || ($Pivot_Vars['session'] == "")) ) {

		debug("attempted ReviveSession..");
		// Try to revive an old Session..
		ReviveSession();

	} else if(($Pivot_Vars['func'] == 'login') || ($Pivot_Vars['do'] == 'login')) {

		// if we've just logged in, reset the cookies, if necesary and start a new session..

		debug("attempted login..");

		if ( ($Users[$Pivot_Vars['user']]['pass'] == md5($Pivot_Vars['pass']))
				&& ($Users[$Pivot_Vars['user']]['userlevel']>0) ) {

			NewSession($Pivot_Vars['user']);

		}else{

			// add one to the failed login attempts.
			if(strlen($Pivot_Vars['user']) > 0) {
				$Cfg['fl_' . $_SERVER['REMOTE_ADDR']]++;
			}

			Login(1,4, "Incorrect username or password");

		}

	} else {
		// when running normally, the session stuff is updated.

		$Pivot_Vars['user'] = $Cfg['tempsessions'][$Pivot_Vars['session']][0];

		$ip = substr( $_SERVER['REMOTE_ADDR'], 0, strrpos( $_SERVER['REMOTE_ADDR'], "."));

		// calculated locally: user's pass + current session + ip we got from user
		$hash1 = md5( md5( $Users[$Pivot_Vars['user']]['pass'] . $Pivot_Vars['session'] ) . $ip ) ;

		// stored hash
		$hash2 = $Cfg['tempsessions'][$Pivot_Vars['session']][1];

		// we check if the two hash matches with the one that was stored
		if ($hash1 != $hash2) {

			// if this is the case, something's not ok, so go back to login..
			Login(0,0, "No hacking, please");

		}
	}

	// If by this point no session is set, we will show the login screen..
	if(strlen($Pivot_Vars['session']) == 0) {
		Login(0,8, "Please log on. (if you keep getting this message, delete the cookies for this site)");
	}

	// Update the timer, so we can keep the user logged in.
	if($Cfg['tempsessions'][$Pivot_Vars['session']][2] - time() <= ($Cfg['session_length'] / 4)) {
		$Cfg['tempsessions'][$Pivot_Vars['session']][2] = $Cfg['tempsessions'][$Pivot_Vars['session']][2] + $Cfg['session_length'];

	}


}

/**
 * Checks if the Pivot install is OK.
 *
 * Currently it only checks if the config files are writable.
 */
function CheckSanity() {
	global $pivot_path;
	$insane = false;
	if (!is_writeable($pivot_path."pv_cfg_settings.php")) {
		$insane = "pv_cfg_settings.php";
        } else if (!is_writeable($pivot_path."pv_cfg_weblogs.php")) {
		$insane = "pv_cfg_weblogs.php";
	}
	if ($insane) {
		PageHeader("FATAL ERROR", 0);
		echo "<div class='showlog'>&nbsp;</div><div class='main'><h1>FATAL ERROR</h1>\n";
		piv_error("Insufficient permissions",
			"Admin pages can't be used - \"$insane\" isn't writable.");
		PageFooter();
	}
}

/**
 * Start a new session.
 *
 * @param string $user
 * @see CheckLogin()
 *
 */
function NewSession($user) {
	global $Users, $Cfg, $Pivot_Vars, $Paths;

	debug("Newsession");

	unset($Cfg['fl_' . $_SERVER['REMOTE_ADDR']]);
	unset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']]);

	if(strlen($user) == 0) { return 0; }

	// make a 12char string (ie - hard to guess) for the session identifier.  go us.
	$sid="";
	for ($i = 1 ; $i <= 12; $i++) {
		$rchar = mt_rand(1,30);
		if($rchar <= 10) {
			$sid .= chr(mt_rand(65,90));
		}elseif($rchar <= 20) {
			$sid .= mt_rand(0,9);
		}else{
			$sid .= chr(mt_rand(97,122));
		}
	}

	// make the parts for the hash.
	$hash[1] = md5($Pivot_Vars['pass']);
	$hash[2] = $sid;
	$hash[3] = substr( $_SERVER['REMOTE_ADDR'], 0, strrpos( $_SERVER['REMOTE_ADDR'], "."));

	// make sure cookie length is set
	if ($Cfg['cookie_length']==0) {
		$Cfg['cookie_length'] = 1814400;
	}

	if($Pivot_Vars['remember'] == 'stayloggedin'){

		setcookie('hash', md5( $hash[1].$hash[2] ), time()+$Cfg['cookie_length'],$Paths['cookie_url']);
		setcookie('mode', $Pivot_Vars['remember'], time()+$Cfg['cookie_length'],$Paths['cookie_url']);
 		setcookie('user', $Pivot_Vars['user'], time()+$Cfg['cookie_length'],$Paths['cookie_url']);

 		debug( sprintf("Newsession: user: %s, hash = md5(%s, %s)",
 			$Pivot_Vars['user'],
 			trimtext($hash[1],8),
 			trimtext($hash[1],8)
 		));

	}

	if($Pivot_Vars['remember'] == 'nothing'){

		setcookie('user', '', '0', $Paths['cookie_url']);
		setcookie('hash', '', '0', $Paths['cookie_url']);
		setcookie('mode', $Pivot_Vars['remember'], '0', $Paths['cookie_url']);

 		debug(sprintf("Newsession: user: %s",$Pivot_Vars['user']));

	}

	// remove the old session.
	unset($Cfg['tempsessions'][$Users[$user]['session']]);

	//$Users[$user]['session'] = $sid;
	$Users[$user]['lastlogin'] = time();

	$Pivot_Vars['session'] = $sid;
	$Pivot_Vars['user'] = $user;

	// Make the new session.
	$Cfg['tempsessions'][$sid] = array(
		$user,
		md5( md5($hash[1].$hash[2]) . $hash[3]),
		time()+$Cfg['session_length']
	);


}

/**
 * Revives (continues) an old session: If a user has checked the 'keep me logged in' option,
 * a cookie is set, and this cookie is compared to the sessions in the config.
 *
 * the tempsessions are stored in config, an consist of three strings:
 * [0] => username
 * [1] => magically encypted unique session identifier
 * [2] => time of last login
 *
 * @see CheckLogin()
 */
function ReviveSession() {
	global $Cfg, $Users, $Pivot_Vars;

	// If there are any tempsessions..
	if (is_array($Cfg['tempsessions'])) {

		// loop through them..
		foreach( $Cfg['tempsessions'] as $sess_key => $sess_data) {

			// if the session data matches the user's cookie..
			if ($sess_data[0] == $_COOKIE['user']) {

				$ip = substr( $_SERVER['REMOTE_ADDR'], 0, strrpos( $_SERVER['REMOTE_ADDR'], "."));
				$hash = md5( $_COOKIE['hash'] . $ip);
				// if the hash we just calculated matches the hash in the user's cookie
				if ($hash == $sess_data[1]) {
					$Pivot_Vars['user'] = $sess_data[0];
					$Pivot_Vars['session'] = $sess_key;
					$Users[ $Pivot_Vars['user'] ]['lastlogin'] = time();
					debug("Revived session");
					return;
				}
			}
		}
	}

	debug("Couldn't revive session");

}

/**
 * Display the 'Manage Media' screen. The $image parameter is used to
 * pass messages.
 *
 * Todo: Will be replaced/rewritten
 *
 * @param array $image
 */
function files_main($image='') {
	global $Cfg, $Pivot_Vars;

	$show = 24;

	MinLevel(2);
	PageHeader(lang('userbar','files'),1);
	$ankeiler= (lang('userbar','files').' &raquo; '.lang('userbar','files_title'));

	// if there is an 'action' to do
	if (isset($Pivot_Vars['doaction'])) {
		files_action($Pivot_Vars['action'], $Pivot_Vars['check']);
	}

	if(isset($Pivot_Vars['preview']) && $Pivot_Vars['preview'] == 'true') {
		$myurl = sprintf("index.php?session=%s&amp;menu=files&amp;preview=false", $Pivot_Vars['session']);
		PageAnkeiler($ankeiler, '&raquo; '. lang('upload', 'preview'), $myurl);
	} else {
		$myurl = sprintf("index.php?session=%s&amp;menu=files&amp;preview=true", $Pivot_Vars['session']);
		PageAnkeiler($ankeiler, '&raquo; '. lang('upload', 'thumbs'), $myurl);
	}

	echo "<scr"."ipt language='JavaScript' type='text/javascript'>\nfun"."ction changePage(newLoc)\n{\nnextPage = newLoc.options[newLoc.selectedIndex].value;\nif (nextPage != '') { document.location.href = nextPage; } }</scr"."ipt>\n";

	list($fileArray, $thumbArray) = getFileList();

	$count = count($fileArray);

	$loop= 0;

	do {
		$mystart = substr(strtolower(urldecode($fileArray[$loop]['name'])),0,18);
		if (isset($fileArray[($loop + $show -1)])) {
			$mystop = substr(strtolower(urldecode($fileArray[($loop + $show -1)]['name'])),0,18);
		} else {
			$mystop = "zzz";
		}
		$url = "index.php?session=".$Pivot_Vars['session']."&amp;menu=files&amp;slice=$loop&amp;preview=".$Pivot_Vars['preview'];
		$slice_arr[]="<option value=\"$url\">$mystart - $mystop</option>";
		$loop = $loop + $show;

	} while ($loop < $count);

	if (count($slice_arr)>1) {
		echo "<form name='form1' action=''>";
		echo "<select name='selectedPage' onchange='changePage(this.form.selectedPage)'><option value='#'>Jump to: </option>";
		echo implode("\n", $slice_arr);
		echo "</select></form><hr size='1' noshade='noshade' />";
	}

	// Display the message passed (if any)
	if (!empty($image)) {
		while(list($key, $var) = each($image)){
			echo "<h2 style='margin-left:0px;color:red'>$var</h2>\n";
		}
		echo "<br />";
	}

	if (isset($Pivot_Vars['slice'])) {
		$slice = $Pivot_Vars['slice'];
	} else {
		$slice = 0;
	}

	$fileArray = array_slice($fileArray, $Pivot_Vars['slice'], $show);

	// Here we decide to show the files as a
	// list or as thumbnail preview
	if(isset($Pivot_Vars['preview']) && $Pivot_Vars['preview'] == 'true') {
		// This is the _thumbnail_ preview
		// not to be mistaken with a original preview
		// that would take too much download time
		show_image_preview($fileArray,$thumbArray);
	} else {
		show_image_list($fileArray,$thumbArray);
	}

}

/**
 * Upload a file
 *
 */
function uploadfile() {
	global $Cfg, $Paths, $Users, $Pivot_Vars, $qual, $local;

	MinLevel(2);
	include_once('includes/fileupload-class.php');
	$lang = str_replace("_utf8","",$Users[$Pivot_Vars['user']]['language']);
	$my_uploader = new uploader($lang);

	// OPTIONAL: set the max filesize of uploadable files in bytes
	$my_uploader->max_filesize($Cfg['max_filesize']);

	// UPLOAD the file
	if ($my_uploader->upload('userfile', $Cfg['upload_accept'], $Cfg['upload_extension'])) {
		debug($my_uploader->file['name']);
		$success = $my_uploader->save_file($Paths['upload_path'], $Cfg['upload_save_mode'], 1);
	}


	if ($success) {

		error_reporting(E_ALL);

		include_once("modules/module_imagefunctions.php");

		PageHeader(lang('userbar','main'), 1);
		PageAnkeiler(lang('userbar','files') . ' &raquo; ' . lang('userbar','uploaded_success'));

		printf('<script type="text/javascript">function pop(a){
			window.open("modules/module_image.php?image="+a,"",
				"toolbar=no,resizable=yes,scrollbars=yes,width=940,height=570");
			self.location="index.php?menu=files";}
                        </script>');

		echo '<tr><td align="center" colspan="2">';
		$fullentry = $Paths['upload_url'] . $my_uploader->file['name'];
		echo '<img src="' . $fullentry. '" border="0" alt="new image">';
		echo '</td></tr><tr><td align="right" width="48%"><br /><br />';


		if (auto_thumbnail($my_uploader->file['name'])) {
			echo "<p><b>Thumbnail:</b><br>";
			$thumbfilename = $Paths['upload_url'] . make_thumbname(basename($my_uploader->file['name']));
			printf('<p><img src="%s" />', $thumbfilename);
			printf('<p><a href="javascript:pop(\'%s\')">' . lang('upload', 'edit_thumbnail') . '</a></td>',$my_uploader->file['name']);
		} else {
			printf('<p><a href="javascript:pop(\'%s\');">' . lang('upload', 'create_thumb') . '</a></td>',$my_uploader->file['name']);

		}


		GenSetting('' ,lang('upload','thisfile'),'',8,'',6);
		StartForm('file_upload', 0, 'enctype="multipart/form-data"');
		printf('<input name="%s" type="file"  class="input"><br />',$Cfg['upload_file_name']);
		printf('<input type="submit" value="%s" class="button" /></form>',lang('upload','button'));

		PageFooter();

	} else {
		if($my_uploader->errors) {
			files_main($my_uploader->errors);
		}
	}

}


/**
 * Display the Main screen
 *
 */
function main_screen() {
	global $Cfg, $build, $Users, $Pivot_Vars, $db, $Paths;

	$db = new db();

	PageHeader($Cfg['sitename'], 1);
	PageAnkeiler(lang('userbar','main_title'));

	$welcome = lang('general', 'welcome');
	$welcome = str_replace('%build%', $build, $welcome);



	// Check if there are any comments waiting to be moderated..
	if (file_exists("db/ser_modqueue.php")) {
		$modqueue = array_reverse(load_serialize("db/ser_modqueue.php", true, true));
	} else {
		$modqueue = array();
	}

	if (count($modqueue)>0) {
		// lang("userbar","moderate_comments"));
		$queuemsg = lang("userbar","moderate_comments_desc");
		$queuemsg = str_replace("%1", count($modqueue), $queuemsg);

	} else {
		$queuemsg = lang("userbar","moderate_nocomments_desc");
	}


	// check to see if there are any 'timed publish' items that need to be
	// published..
	timedpublishcheck();

	echo "<!-- main -->";
	echo "<p><b>".$welcome."</b></p>";

	// the 'main menu'..

	$main_funcs = array(
		array(lang('userbar','submit'), 'new_entry', lang('userbar','submit_title'), 'new_entry'),
		array(lang('userbar','moderate_comments'), 'moderate_comments', $queuemsg, 'moderate_comments'),
		array(lang('userbar','entries'), 'entries', lang('userbar','entries_title'), 'entries'),
		array(lang('userbar','u_settings'), 'userinfo', lang('userbar','u_settings_title'), 'userinfo'),
		array(lang('userbar','files'), 'files', lang('userbar','files_title'), 'files'),
	);

	if ($Users[$Pivot_Vars['user']]['userlevel'] >= 3) {
		$main_funcs[] = array(lang('adminbar','spamprotection'), 'spamprotection',
			lang('adminbar','spamprotection_title'), 'admin&amp;func=admin&amp;do=spamprotection');
		$main_funcs[] = array(lang('userbar','admin'), 'admin', lang('userbar','admin_title'), 'admin');
	}

	DispPage($main_funcs, 'overview');


	// If $Pivot_Vars['morecomments'] is not set, we set '0' as default..
	if (!isset($Pivot_Vars['morecomments'])) {
		$Pivot_Vars['morecomments']=5;
	}


	echo "\n\n<div style='position: absolute; right: 20px; top: 55px; border: 0px solid #F00;'>\n\n";

	if ($Pivot_Vars['morecomments']==5) {

		// Show the 'remove setup' notification..
		if( (file_exists('../pivot-setup-safemode.php') || file_exists('../pivot-setup.php')) && ($Cfg['ignore_setupscript']!=1)) {
			echo "\n\n<!-- remove setup script warning -->\n";
			printf("<table cellspacing='0' class='tabular_border' border='0' width='340'><tr class='tabular_nav'>");
			printf("<td colspan='4' class='tabular-lastheader'>%s:</td></tr>", lang("adminbar", "remove_setup_header"));
			printf("<tr class='tabular_line_even'><td class='tabular-small' style='white-space: normal;'>%s</td>", lang("adminbar", "remove_setup"));
			echo '</tr>';
			echo '</table><br />';

		}


		// Show the 'Register Globals is on' warning..
		if (ini_get('register_globals') && ($Cfg['ignore_registerglobals']!=1)) {
			echo "\n\n<!-- register_globals warning -->\n";
			printf("<table cellspacing='0' class='tabular_border' border='0' width='340'><tr class='tabular_nav'>");
			printf("<td colspan='4' class='tabular-lastheader'>%s:</td></tr>", lang("adminbar", "register_globals_header"));
			printf("<tr class='tabular_line_even'><td class='tabular-small' style='white-space: normal;'>%s</td>", lang("adminbar", "register_globals"));
			echo '</tr>';
			echo '</table><br />';
		}


		// Show the 'magic_quotes is on' notification..
		if ( get_magic_quotes_runtime() && ($Cfg['ignore_magicquotes']!=1)) {
			echo "\n\n<!-- magic_quotes warning -->\n";
			printf("<table cellspacing='0' class='tabular_border' border='0' width='340'><tr class='tabular_nav'>");
			printf("<td colspan='4' class='tabular-lastheader'>%s:</td></tr>", lang("adminbar", "magic_quotes_header"));
			printf("<tr class='tabular_line_even'><td class='tabular-small' style='white-space: normal;'>%s</td>", lang("adminbar", "magic_quotes"));
			echo '</tr>';
			echo '</table><br />';

		}


		// Load the latest news from pivotlog.net/notifier.xml
		define('MAGPIE_DIR', realpath('.').'/includes/magpierss/');
		define('MAGPIE_CACHE_DIR', './db/rsscache/');
		define('MAGPIE_FETCH_TIME_OUT', 5);	// 5 second timeout
		define('MAGPIE_CACHE_AGE', 60*60*8); // 8 hours
		require_once(MAGPIE_DIR.'rss_fetch.inc');
		if (isset($Cfg['notifier'])) {
			$feed_url = $Cfg['notifier'];
		} else {
			$feed_url = "http://www.pivotlog.net/notifier.xml";
		}
		$feed = fetch_rss($feed_url);

		// show the 'latest news'.
		echo "\n\n<!-- show latest news -->\n";
		printf("<table cellspacing='0' class='tabular_border' border='0' width='340'><tr class='tabular_nav'>\n");
		printf("<td colspan='4' class='tabular-lastheader'><span style='float:right'>(<a href='http://www.pivotlog.net/'>%s</a>)</span>\n",
			lang("general", "more") );
		printf("%s (%s)</td></tr>\n",
			lang("adminbar", "latest_pivot_news"),
			date("d/m/Y",strtotime(substr(str_replace("T", " ",$feed->items[0]['published']),0,10)))
			);
		printf("<tr class='tabular_line_even'><td class='tabular-small' style='white-space: normal;'> %s</td>\n",
			$feed->items[0]['atom_content']);
		echo "</tr>\n";
		echo "</table><br />\n";
	}

	// Show the last comments.
	last_comments_overview($Pivot_Vars['morecomments']);


	if ($Pivot_Vars['morecomments']==5) {
		// show the last 6 entries
		echo "\n\n<!-- show last entries -->\n";
		$entrylink = sprintf("index.php?session=%s&amp;menu=entries", $Pivot_Vars['session']);
		$overview_arr = array_reverse( $db->getlist(-6,0,"","", TRUE, ''));
		printf("<table cellspacing='0' class='tabular_border' border='0' width='340'><tr class='tabular_nav'>\n");
		printf("<td colspan='5' class='tabular-lastheader'><span style='float:right'>(<a href='%s'>%s</a>)</span>%s</td></tr>\n",
				$entrylink,
				lang("general", "more"),
				lang("userbar","recent_entries")
			);


		foreach ($overview_arr as $overview_line) {
			print_row_overview($overview_line);
		}

		echo "</table><br />\n";

	}

	echo "</div>\n";





	//echo "</td></tr></table>\n\n";

	PageFooter();

}


/**
 * Display the screen with entries.
 *
 * @param string $message
 */
function entries_screen($message="") {
	global $config_array, $Pivot_Vars, $Cfg, $absmax;
	PageHeader(lang('userbar','entries'), 1);
	PageAnkeiler(lang('userbar','entries') . ' &raquo; ' . lang('userbar','entries_title'));

	// display a message, if there is one..
	if ($message!="") {
		echo "<p><b>$message</b></p>";
	}


	// if there is an 'action' to do
	if ( (isset($Pivot_Vars['doaction'])) && ($Pivot_Vars['action']!="") ) {

		if ( ($Pivot_Vars['action']=="delete") && ($Pivot_Vars['confirmed']!=1) ) {
			$vars = array(
			"action", $Pivot_Vars['action'],
			"check", serialize($Pivot_Vars['check']),
			"doaction", "1"
			);
			if (count($Pivot_Vars['check'])==1) {
				ConfirmPage("hmm ho hum", $vars,  lang('entries' , 'delete_one_confirm') );
			} else {
				ConfirmPage("hmm ho hum", $vars,  lang('entries' , 'delete_multiple_confirm') );
			}
		}

		entries_action($Pivot_Vars['action'], $Pivot_Vars['check']);
	}


	$db = new db();

	if (!isset($Cfg['overview_entriesperpage'])) { $Cfg['overview_entriesperpage'] = 20; }

	$absmax = $db->get_entries_count();
	$show = (isset($Pivot_Vars['show'])) ? $Pivot_Vars['show'] : $Cfg['overview_entriesperpage'] ;
	$offset = (isset($Pivot_Vars['offset'])) ? $Pivot_Vars['offset'] : 0 ;


	if (isset($Pivot_Vars['first'])) { $offset=$absmax-$show; }

	$myurl =sprintf("index.php?session=%s&amp;menu=entries", $Pivot_Vars['session']);

	//Sort entries change
	//set initial values for sort values
	$entry_sort = ""; //goes in query string
	$sort = "date";   //goes in the getlist method call
	if(isset($Pivot_Vars['sort'])) {
		$entry_sort = "&amp;sort=".$Pivot_Vars['sort'];
		$sort = $Pivot_Vars['sort'];
		if (isset($Pivot_Vars['reverse'])) {
			$sort_order = TRUE;
			$entry_sort .= "&amp;reverse";
		} else {
			$sort_order = FALSE;
			$myurl .= "&amp;reverse";
		}
	}

	if (isset($Pivot_Vars['filtercat'])) {

		$overview_arr = $db->getlist(-$show,$offset,"", array($Pivot_Vars['filtercat']), $sort_order, $sort);
		$filter = "&amp;filtercat=".$Pivot_Vars['filtercat'];
		$filtertitle = str_replace('%name%', $Pivot_Vars['filtercat'], lang('entries', 'filteron') );

	} else if (isset($Pivot_Vars['filteruser'])) {

		$overview_arr = $db->getlist(-$show,$offset, $Pivot_Vars['filteruser'] , "", $sort_order, $sort);
		$filter = "&amp;filteruser=".$Pivot_Vars['filteruser'];
		$filtertitle = str_replace('%name%', $Pivot_Vars['filteruser'], lang('entries', 'filteron') );

	} else if ( (isset($Pivot_Vars['search'])) && (strlen($Pivot_Vars['search'])>1) ) {

		include_once("modules/module_search.php");
		$overview_arr = search_entries($Pivot_Vars['search']);
		$filtertitle = str_replace('%name%', '&hellip;', lang('entries', 'filteron') );
		$offset =  0;
		$absmax = $show = 1;

	} else {

		$overview_arr = $db->getlist(-$show,$offset,"", "", $sort_order, $sort);
		$filter = "";
		$filtertitle = str_replace('%name%', '&hellip;', lang('entries', 'filteron') );

	}


	if ($offset<($absmax-$show)) {
		$prev=$offset+$show;
		$prevlink=sprintf('<a href="%s&amp;offset=%s&amp;show=%s%s%s">&laquo; '. lang('entries', 'first') .'</a>&nbsp;&nbsp;', $myurl, ($absmax-$show), $show, $filter, $entry_sort);
		$prevlink.=sprintf('<a href="%s&amp;offset=%s&amp;show=%s%s%s">&lsaquo; '. lang('entries', 'previous') .' %s</a>', $myurl, $prev, $show, $filter, $entry_sort, $show);
	} else {
		$prevlink="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}

	if ($offset>0) {
		$next=max(0, $offset-$show);
		$nextlink=sprintf('<a href="%s&amp;offset=%s&amp;show=%s%s%s">&rsaquo; '. lang('entries', 'next') .' %s</a>&nbsp;&nbsp;', $myurl, $next, $show, $filter, $entry_sort, $show);
		$nextlink.=sprintf('<a href="%s&amp;show=%s%s%s">&raquo; '. lang('entries', 'last') .'</a>', $myurl, $show, $filter, $entry_sort);
	} else {
		$nextlink="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}

	// make the html for the paginator..
	$numofpages = (int)ceil(($absmax / abs($show)));
	if ($numofpages > 1) {
		for($i = 0; $i < $numofpages; $i++) {
			$init = $i * abs($show) ;
			$pages_arr[] = sprintf("<option value=\"%s%s&amp;show=%s%s&amp;offset=%s\">%s</option>", 	$myurl, $entry_sort, abs($show), $filter, $init, $i+1);
		}

		$title = str_replace('%num%', ceil($offset / abs($show))+1, lang('entries', 'jumptopage') );
		$pages = "<select name='selectedPage' onchange='changePage(this.form.selectedPage)' 	class='input'>";
		$pages .= sprintf("<option value='' selected='selected'>%s</option>", $title  );
		$pages .= implode ("\n", $pages_arr) ;
		$pages .= "</select>";
	}

	// make the HTML for the filter box
	if ((isset($Pivot_Vars['filtercat'])) || (isset($Pivot_Vars['filteruser'])) ) {
		$pages_arr = array( sprintf("<option value=\"%s%s&amp;show=%s\">%s</option>", $myurl, $entry_sort, abs($show), lang('entries', 'filteroff')) );
	} else {
		$pages_arr = array();
	}
	$cats = cfg_cats();

	$pages_arr[] = "<option value=''>".lang('entries', 'category')."</option>";
	foreach ($cats as $cat) {
		$pages_arr[] = sprintf("<option value=\"%s%s&amp;show=%s&amp;filtercat=%s\"> - %s</option>", $myurl, $entry_sort, abs($show), $cat['name'], $cat['name']);
	}

	$users = explode("|", $Cfg['users']);
	$pages_arr[] = "<option value=''>".lang('entries', 'author')."</option>";
	foreach ($users as $user) {
		$pages_arr[] = sprintf("<option value=\"%s%s&amp;show=%s&amp;filteruser=%s\"> - %s</option>", $myurl, $entry_sort, abs($show), $user, $user);
	}


	$pages .= "<select name='selectedFilter' onchange='changePage(this.form.selectedFilter)' class='input'>";
	$pages .= sprintf("<option value='' selected='selected'>%s</option>", $filtertitle );
	$pages .= implode ("\n", $pages_arr) ;
	$pages .= "</select>";

	$searchval = (isset($Pivot_Vars['search'])) ? $Pivot_Vars['search'] : 'search';

	$pages .= "<input type='text' name='search' value='".$searchval."' class='input' style='padding: 2px; height: 19px; width: 90px;' onfocus='this.select();' />";

	// Some JS for the paginator and filter menus
	echo "<scr"."ipt language='JavaScript' type='text/JavaScript'>\nfun"."ction changePage(newLoc)\n{\nnextPage = newLoc.options[newLoc.selectedIndex].value;\nif (nextPage != '') { document.location.href = nextPage; } }</scr"."ipt>";

	printf("<form name='form1' method='post' action='%s&amp;doaction=1'>\n<table cellspacing='0' class='tabular_border' border='0'>\n", $myurl);
	echo "<tr class='tabular_nav'><td colspan='8'>\n";

	echo '<table cellspacing="0" cellpadding="0" class="tabular_border" style="border:0px;" border="0" width="100%"><tr>';
	printf('<td>%s&nbsp;</td>', $prevlink);
	printf('<td align="center">%s</td>', $pages);
	printf('<td align="right" class="tabular_nav">&nbsp;%s</td></tr></table>', $nextlink);

	echo "\n</td></tr><tr class='tabular_header'><td>&nbsp;</td>";
	echo '<td><a href="'.$myurl.'&amp;sort=status">'. lang('entries', 'status') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=title">'. lang('entries', 'title') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=category">'. lang('entries', 'category') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=user">'. lang('entries', 'author') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=date">'. lang('entries', 'date') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=commcount">'. lang('entries', 'comm') .'</a></td>';
	echo '<td><a href="'.$myurl.'&amp;sort=trackcount">'. lang('entries', 'track') .'</a></td>';
	echo '</tr>';
	//End Sort Entry Changes

	foreach ($overview_arr as $overview_line) {
		print_row($overview_line);
	}


	echo '<tr class="tabular_header"><td colspan="8"><img src="pics/arrow_ltr.gif" width="29" height="14" border="0" alt="" />';
	echo '<a href="#" onclick=\'setCheckboxes("form1", true); return false;\'>'. lang('forms', 'c_all') .'</a> / ';
	echo '<a href="#" onclick=\'setCheckboxes("form1", false); return false;\'>'. lang('forms', 'c_none') .'</a>';
	echo '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;'. lang('forms', 'with_checked_entries');
	echo '<select name="action" class="input">
	<option value="" selected="selected">'. lang('forms', 'choose') .'</option>
	<option value="publish">'. lang('forms', 'publish') .'</option>
	<option value="hold" >'. lang('forms', 'hold') .'</option>
	<option value="delete">'. lang('forms', 'delete') .'</option>
	<option value="generate">'. lang('forms', 'generate') .'</option>
			</select>';

	echo '&nbsp;&nbsp;<input type="submit" value="'. lang('go') .'" class="button" /></td></tr>';


	echo '</table></form>';



	PageFooter();
}

/**
 * Display the 'new entry' screen.
 *
 * @see includes/edit_new.php, modifyentry_screen()
 *
 */
function newentry_screen() {
	global $config_array, $Pivot_Vars, $entry, $Cfg, $useWysiwyg, $Users, $Paths, $Weblogs, $CurrentEncoding, $Language;

	PageHeader(lang('userbar','entries'), 1);
	PageAnkeiler(lang('userbar','entries') . ' &raquo; ' . lang('userbar','submit_title'),  '&raquo; ' . lang('general', 'extended_view'));

	// Include the file that displays the editors
	include_once "includes/edit_new.php";

	PageFooter();
}



/**
 * Display the 'modify entry' screen.
 *
 * @see includes/edit_new.php, modifyentry_screen()
 *
 */
function modifyentry_screen() {
	global $config_array, $Pivot_Vars, $entry, $Cfg, $useWysiwyg, $db, $Users, $Paths, $Weblogs, $CurrentEncoding, $Language;

	$useWysiwyg = TRUE;

	// load an entry
	if (isset($Pivot_Vars['id'])) {

		$db = new db();
		$entry = $db->read_entry($Pivot_Vars['id']);

		if (!isset($entry['publish_date'])) {
			$entry['publish_date'] = $entry['date'];
		}
	}


	// to allow same level users to edit eachother's posts, use:
	// 	} else if ($Users[$Pivot_Vars['user']]['userlevel'] >= $Users[$db->entry['user']]['userlevel'])  {

	/**
	 * Test if the user is allowed to edit this entry.
	 */
	if ($Pivot_Vars['user'] == $db->entry['user']) {
		// allowed to edit own entry
		MinLevel(1);
	} else if ($Users[$Pivot_Vars['user']]['userlevel'] > $Users[$db->entry['user']]['userlevel'])  {
		// someone who has a lower lever
		MinLevel($Users[$db->entry['user']]['userlevel']);
	} else {
		// allowed to edit other people's entries
		MinLevel(3);
	}

	PageHeader(lang('userbar','entries'), 1);
	$ankeiler= lang('userbar','entries') . ' &raquo; ' . lang('userbar','modify_title');
	$ankeiler= str_replace("%1" , '<i>"'.trimtext($entry['title'],25).'"</i>', $ankeiler);
	PageAnkeiler($ankeiler, '&raquo;' . lang('general', 'extended_view'));

	// Include the file that displays the editors
	include_once "includes/edit_new.php";

	PageFooter();
}



/**
 * The screen you'll see after submitting an entry. It stores the entry, updates the indices (pivot's
 * content indices, and the search index), rebuilds the frontpage and XML & Atom feeds, and then it
 * displays a list of the latest entries.
 *
 */
function entrysubmit_screen() {
	global $db, $config_array, $Pivot_Vars, $entry, $Cfg, $Users, $Paths, $Weblogs, $filtered_words;

	// check against unauthorised direct access.
	check_csrf();

	$db = new db();

	$entry = get_entry_from_post();

	if ((!$entry['title']=="") || (!$entry['introduction']=="") || (!$entry['user']=="") ) {

		// in this part, we remove the entry from the categories in which
		// the current user is not allowed to post entries
		foreach ($entry['category'] as $my_cat) {
			$allowed = explode("|", $Cfg['cat-'. $my_cat]);
			if (in_array($Pivot_Vars['user'], $allowed)) {
				$allowed_cats[] = $my_cat;
			} else {
				$message .= '<br />';
				$message .= sprintf( lang( 'entries','entry_catnopost' ),$m_cat ) ;
				debug("not in category: ".$my_cat);
			}
		}

		$entry['category'] = $allowed_cats;

		$db->set_entry($entry);

		if ($db->save_entry(TRUE)) {
			$message = sprintf( lang( 'entries','entry_saved_ok' ).$message,'<i>'.trimtext( $entry['title'],25 ).'</i>' );
		} else {
			$message = sprintf( lang( 'entries','entry_saved_ok' ),'<i>'.trimtext( $entry['title'],25 ).'</i>' );
		}


		// only trigger the ping if it's a new entry..
		if ( ($entry['code']==">") && ($entry['status']=="publish") ) {
			$ping=TRUE;
		} else {
			$ping=FALSE;
		}

		// only notify if entry is published, and is either new or status changed to publish.
		if ($entry['status']=="publish") {
			if ( ($entry['code']==">") || ($entry['oldstatus']!="publish") ) {
				$notified = notify_new('entry',$db->entry);
				$notified = "<br /><br />" . $notified;
			}
        }


		// if the global index as they are made var is set - can continue
		if( '1'==$Cfg['search_index'] ) {
			/*
			2004/10/16 =*=*= JM
			an entry should only be indexed if both are true:
			 - 'publish'==$entry['status']
			 - current date is at least equal to $entry['publish_date']
			I lie, there is another case...
			it is conceivable that this is a timed publish AND the time has come
			I will leave this to timed publish routines - if I can find them...
			-> pvLib ... it's flagged

			and of course, providing that there is at least one
			category where it would be indexed...

			something else that can't be tested... if the user changes a normal
			publish to a timed-publish, or puts on hold when it was previously
			normal. user should reindex in this case

			*/
			// check status and date
			if(( 'publish'==$entry['status'] )
				||(( 'timed'==$entry['status'] )&&( $entry['publish_date'] <= date( 'Y-m-d-H-i' )))) {
				// categories...
				if( can_search_cats( cfg_cat_nosearchindex(),$entry['category'] )) {
					include_once( 'modules/module_search.php' );
					update_index($db->entry);
					debug('update search index: '.$db->entry['code']);
				}
			}
		}

		// perhaps send a trackback ping.
		if ( ($Pivot_Vars['tb_url'] != "") && ($entry['status']=="publish") ) {

			debug("tburl: " . $Pivot_Vars['tb_url']);
			require_once( 'includes/send_trackback.php' );
			$weblogs = find_weblogs_with_cat($db->entry['category']);

			if (isset($Weblogs[$weblogs[0]])) {

				$my_url = $Paths['host'].make_filelink( $db->entry['code'],$weblogs[0],'' );

				$weblog_title = $Weblogs[$weblogs[0]]['name'];
				debug("TRACKBACK ping: $my_url");
				$message .= '<br />' ;
				$message .= sprintf( lang( 'entries','entry_ping_sent' ),$Pivot_Vars['tb_url'] );

				$tb_urls = explode("\n", $Pivot_Vars['tb_url']);

				// make the contents of what to send with the trackback..
				$tb_contents = parse_step4($entry['introduction']);

				if ($Pivot_Vars['convert_lb']==2) {
					$tb_contents = pivot_textile($tb_contents);
				} else if (($Pivot_Vars['convert_lb']==3) || ($Pivot_Vars['convert_lb']==4) )  {
					$tb_contents = pivot_markdown($tb_contents, $Pivot_Vars['convert_lb']);
				}

				$tb_contents = trimtext(strip_tags($tb_contents),255);

				foreach($tb_urls as $tb_url) {
					$tb_url = trim($tb_url);
					if(isurl($tb_url)) {
						trackback_send($Pivot_Vars['tb_url'], $my_url, $entry['title'], $weblog_title, $tb_contents);
					}
				}
			}
		}

		// Update the tags for this entry if it's published and remove the old tags if not
		if ($db->entry['status'] == 'publish') {
			writeTags($db->entry['keywords'], $_POST['f_keywords_old'], $db->entry['code']);
		} else {
			deleteTags($_POST['f_keywords_old'], $db->entry['code']);
		}

	}


	generate_pages( $db->entry['code'],TRUE,TRUE,TRUE,$ping );
	entries_screen( $message . $notified );
}



/**
 * Display the screen to moderate and delete comments.
 *
 * @param string $msg
 */
function moderate_comments($msg="") {
	global $Cfg, $Pivot_Vars, $Users;

	PageHeader(lang('userbar','moderate_comments'), 1);
	PageAnkeiler(lang('userbar','comments') . ' &raquo; ' . lang('userbar','moderate_comments'));



	// First check if there are any comments waiting to be moderated..
	if (file_exists("db/ser_modqueue.php")) {
		$modqueue = array_reverse(load_serialize("db/ser_modqueue.php", true, true));
	} else {
		$modqueue = array();
	}

	// If we have $_POST or $_GET, we might have to allow or delete some comments.

	// Loop through the moderation queue
	foreach($modqueue as $key=>$comm) {

		$commentkey = urlencode(safe_string($comm['name'],TRUE) ."-". format_date($comm['date'],"%ye%%month%%day%%hour24%%minute%"));

		if (isset($Pivot_Vars[$commentkey])) {
			moderate_process($comm, $Pivot_Vars[$commentkey]);
			unset($modqueue[$key]);
			$queue_changed = true;
		}
	}
	if ($queue_changed) {
		save_serialize("db/ser_modqueue.php", $modqueue );
		buildfrontpage_function();
	}



	if (count($modqueue)>0) {

		printf("<form id='modqueue' method='post' name='modqueue' action='index.php?menu=moderate_comments&amp;session=%s'>\n", $Pivot_Vars['session']);

		printf("<table cellspacing='0' class='tabular_border' border='0' width='800'>\n");
		printf("<tr class='tabular_header'><th>%s</th><th>%s</th><th>%s</th><th>%s/%s</th><th>%s</th><th>%s</th>\n",
			lang('general', 'approve'),
			lang('general', 'delete'),
			lang('entries', 'title'),
			lang('weblog_text', 'name'),
			lang('weblog_text', 'ip'),
			lang('entries', 'date'),
			lang('weblog_text', 'comment'));

		$linecount = 1;

		foreach($modqueue as $comm) {

			if (($linecount % 2)==0) {
				$bg_color="tabular_line_even";
			} else {
				$bg_color="tabular_line_odd";
			}


			$commentkey = urlencode(safe_string($comm['name'],TRUE) ."-". format_date($comm['date'],"%ye%%month%%day%%hour24%%minute%"));
			printf("<tr class='%s'><td valign='top' width='1'><input type='radio' name='%s' value='1' /></td>", $bg_color, $commentkey);
			printf("<td valign='top' width='1'><input type='radio' name='%s' value='2' /></td>", $commentkey);
			printf("<td valign='top'>%s", trimtext($comm['title'], 30, TRUE));
			printf("<td valign='top'>%s", $comm['name']);
			if ($comm['email']!= "") {
				printf("/ %s", $comm['email']);
			}
			printf("<br />%s", $comm['ip']);
			if ($comm['link']!= "") {
				printf("/ %s", $comm['link']);
			}
			printf("<td valign='top'>%s", format_date($comm['date'], "%day%-%monname%-%ye% %hour24%:%minute%"));
			printf("</td><td valign='top' style='white-space: normal;'><small>%s</small></td></tr>", $comm['comment']);

			$linecount++;

		}


		printf("<tr class='tabular_header'>");
		printf('<th><a href="#" onclick=\'javascript:setRadiobuttons("modqueue", 1); return false;\'>'. lang('forms', 'c_all') .'</a></th>');
		printf('<th><a href="#" onclick=\'javascript:setRadiobuttons("modqueue", 2); return false;\'>'. lang('forms', 'c_all') .'</a></th>');
		printf('<th colspan="4">&nbsp;</th>');

		printf('</table>');

		printf("<br /><input type='submit' value='%s' />", lang('userbar', 'moderate_comments'));

		printf('<form>');


	} else {

		printf("<p>%s</p>", lang("userbar","moderate_nocomments_desc"));

	}

	PageFooter();

}

/**
 * Display the screen to edit and delete comments.
 *
 * @param string $msg
 * @see submit_comment()
 */
function edit_comments($msg="") {
	global $Cfg, $Pivot_Vars, $Users;

	PageHeader(lang('userbar','comments'), 1);
	PageAnkeiler(lang('userbar','comments') . ' &raquo; ' . lang('userbar','comments_title'));

	$id = $Pivot_Vars['id'];

	$db = new db();

	// read entry if it's not in memory yet.
	$db->read_entry($id, true);

	printf("<p><strong>%s</strong>: %s<br />", lang('entries','title'), $db->entry['title']);
	printf("<strong>%s</strong>: %s<br />", lang('entries','author'), $db->entry['user']);
	printf("<strong>%s</strong>: %s</p><br />", lang('entries','date'), $db->entry['date']);

	if ($Pivot_Vars['user'] == $db->entry['user']) {
		// allowed to edit own comments
		MinLevel(2);
	} else {
		// allowed to edit comments on other people's entries
		MinLevel(3);
	}


	// print if there are no comments
	if ( (!$db->entry['comments']) || (count($db->entry['comments'])<1) ) {
		echo "<p><b>".lang('notice', 'comment_none')."</b><br /><br /></p>";

	} else {


		// perhaps delete a comment.
		if (isset($Pivot_Vars['del'])) {

			// Check if it's a link in the form of name@date..
			// If so, we'll have to walk the comments, selecting the correct one.
			if (strpos($Pivot_Vars['del'],"@")>0) {

				list($delname, $deldate) = explode("@", $Pivot_Vars['del']);
				$Pivot_Vars['del'] = -1;

				foreach($db->entry['comments'] as $key => $value) {
					if (($value['name']==$delname) && ($value['date']==$deldate) ) {
						$Pivot_Vars['del'] = $key;
					}
				}
			}

			// Get the comment that we will delete..
			$del_comm = $db->entry['comments'][ intval($Pivot_Vars['del']) ];


			//remove the comment from last_comments if it's in there..
			if (file_exists("db/ser_lastcomm.php")) {
				$last_comms = load_serialize("db/ser_lastcomm.php", true, true);
			} else {
				$last_comms = array();
			}

			if ($last_comms !== false && count($last_comms)>0) {
				foreach ($last_comms as $key => $last_comm) {
					if ( ($last_comm['code'] == $db->entry['code']) &&
					($last_comm['name'] == $del_comm['name']) &&
					($last_comm['date'] == $del_comm['date'])	){
						unset($last_comms[$key]);
						save_serialize("db/ser_lastcomm.php", $last_comms );
						break;
					}
				}
			}

			// *argh* evil hack to directly delete comments.. I should write a
			// proper wrapper
			unset ($db->entry['comments'][ $Pivot_Vars['del'] ]);
			unset ($db->db_lowlevel->entry['comments'][ $Pivot_Vars['del'] ]);

			$db->save_entry();

			// Rebuild the frontpage
			buildfrontpage_function();

			$msg = lang('notice', 'comment_deleted');

		}

		// perhaps add an ip-block for single ip.
		if (isset($Pivot_Vars['blocksingle'])) {
			$msg = "Added block for IP ".$Pivot_Vars['blocksingle'];
			add_block($Pivot_Vars['blocksingle']);
		}

		// perhaps add an ip-block for single ip.
		if (isset($Pivot_Vars['blockrange'])) {
			$iprange = make_mask ($Pivot_Vars['blockrange']);
			$msg = "Added block for IP-range ".$iprange;
			add_block($iprange);
		}

		// perhaps remove an ip-block for single ip.
		if (isset($Pivot_Vars['unblocksingle'])) {
			$msg = "Removed block for IP ".$Pivot_Vars['unblocksingle'];
			rem_block($Pivot_Vars['unblocksingle']);
		}

		// perhaps remove an ip-block for single ip.
		if (isset($Pivot_Vars['unblockrange'])) {
			$iprange = make_mask ($Pivot_Vars['unblockrange']);
			$msg = "Removed block for IP-range ".$iprange;
			rem_block($iprange);
		}



		// print a message, if there is one.
		if ($msg!="") { echo "<p><B>$msg</b><br /><br /></p>"; }

		// show the edit form, to edit a comment..
		if (isset($Pivot_Vars['edit'])) {

			StartForm('submitcomment', 0);
			StartTable();

			$mycom = $db->entry['comments'][ $Pivot_Vars['edit'] ];

			$settings = array();
			$settings[] = array('heading', lang('weblog_config','shortentry_template'), '', 8, '', 2, '');
			$settings[] = array('name', lang('weblog_text','name'), '', 0, unentify($mycom['name']) , 30, '');
			$settings[] = array('orig_name', '', '', 7, unentify($mycom['name']), '', '');
			$settings[] = array('id', '', '', 7, $id, '', '');
			$settings[] = array('count', '', '', 7, $Pivot_Vars['edit'] , '', '');
			$settings[] = array('email', lang('weblog_text','email'), '', 0, $mycom['email'] , 60, '');
			$settings[] = array('url', lang('weblog_text','url'), '', 0, $mycom['url'] , 60, '');
			$settings[] = array('moderate', lang('weblog_text','moderated'), '', 0, 1-$mycom['moderate'], 10, '');
			$settings[] = array('registered', lang('weblog_text','registered'), '', 0, $mycom['registered'] , 10, '');
			$settings[] = array('notify', lang('weblog_text','notify'), '', 0, $mycom['notify'] , 10, '');
			$settings[] = array('ip', lang('weblog_text','ip'), '', 0, $mycom['ip'] , 30, '');
			$settings[] = array('date', lang('weblog_text','date'), '', 0, $mycom['date'] , 30, '');
			$settings[] = array('comment', lang('weblog_text','comment'), '', 5, $mycom['comment'], 60, 'rows=5');


			DisplaySettings($settings, 'blog_settings');
			EndForm(lang('weblog_config','save_comment'), 1);
		}



		// print out all the comments..
		foreach ($db->entry['comments'] as $key => $comment) {


			$myblock = block_type($comment['ip']);

			if ( ($myblock=="single") || ($myblock=="range") ) {
				$strike = "style='text-decoration: line-through;'";
			} else {
				$strike = "";
			}

			// strip stuff from lamers' comments..
			$comment['name'] = strip_tags($comment['name']);
			$comment['email'] = strip_tags($comment['email']);
			$comment['url'] = strip_tags($comment['url']);

			if ($comment['registered'] == 1) {
				$comment['name'] = "<span style='background-color: #FF9;'>" . $comment['name'] . "</span>";
			}

			printf("<table border=0 cellpadding=2 cellspacing=2 width='95%%' style='border-bottom:".
				" 2px solid #999;'><tr><td width='40%%' valign='top' id='a%s'>%s:&nbsp;<b %s>%s</b><br />",
				$comment['date'],
				lang('weblog_text','name'),
				$strike,
				stripslashes($comment['name'])
			);

			if (strpos($comment['url'], "ttp://") < 1 ) {
				$comment['url']="http://".$comment['url'];
			}

			if (isurl($comment['url'])) {
				$comment['url'] = sprintf("<a href='%s' target='_blank' %s>%s</a>", $comment['url'], $strike, trimtext($comment['url'], 40) );
			}

			if (isemail($comment['email'])) {
				$comment['email'] = sprintf("<a href='mailto:%s' %s>%s</a>", $comment['email'], $strike, trimtext($comment['email'], 40) );
			}

			if ($comment['notify'] == 1) {
				$comment['email'] =  $comment['email'] . "(notify!)";
			}

			if ($comment['moderate'] == 1) {
				printf("<strong>%s</strong><br />", lang('weblog_text', 'waiting_moderation'));
			}


			printf("%s:&nbsp;%s<br />", lang('weblog_text','email'),  $comment['email']);
			printf("%s:&nbsp;%s<br />", lang('weblog_text','url'), $comment['url']);
			printf("%s:&nbsp;%s<br />", lang('weblog_text','ip'), $comment['ip']);
			printf("%s:&nbsp;%s<br />", lang('weblog_text','date'), $comment['date']);

			printf("<td valign='top'><span %s>%s</span></td>", $strike, nl2br(htmlspecialchars($comment['comment'])));

			// only show the option to edit and delete links if the user is an advanced user.
			if ($Users[$Pivot_Vars['user']]['userlevel']>=2) {

				$link=sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;", $Pivot_Vars['session']);
				$editlink=sprintf("%sid=%s&amp;edit=%s", $link, $db->entry['code'], $key);
				$dellink=sprintf("%sid=%s&amp;del=%s", $link, $db->entry['code'], $key);
				$reportpopup=sprintf("openReportComment('%s', '%s','%s','%s');",
						$Pivot_Vars['session'], $db->entry['code'], $key, $dellink);

				printf("</tr><tr class='tabular_line_odd'><td><a href='%s'>%s</a> /", $editlink, lang('entries', 'edit_comment') );
				printf(" <a href='%s'>%s</a> / ", $dellink, lang('entries', 'delete_comment') );

				// only ping.
				// printf(" <a href='#' onclick=\"%s\">%s</a>&nbsp;&nbsp;", $reportpopup, lang('entries', 'report_comment') );

				// ping and delete
				printf(" <a href='#' onclick=\"%s\">%s</a>&nbsp;&nbsp;", $reportpopup, lang('entries', 'report_comment') );


				echo "</td>";

			} else {
				printf("<td>&nbsp;</td>");
			}

			// only show the option to add or remove ip-blocks if the user is an administrator.
			if ($Users[$Pivot_Vars['user']]['userlevel']>=3) {

				if ($myblock=="none") {
					$blocktext1 = str_replace("%s", $comment['ip'], lang('entries', 'block_single'));
					$blocklink1 = sprintf("%sid=%s&blocksingle=%s", $link, $db->entry['code'], $comment['ip']);
					$blocktext2 = str_replace("%s", make_mask($comment['ip']), lang('entries', 'block_range'));
					$blocklink2 = sprintf("%sid=%s&blockrange=%s", $link, $db->entry['code'], $comment['ip']);

					printf("<td><a href='%s'>%s</a> / ", $blocklink1, $blocktext1);
					printf("<a href='%s'>%s</a></td>", $blocklink2, $blocktext2);
				} else if ($myblock=="single") {
					$blocktext1 = str_replace("%s", $comment['ip'], lang('entries', 'unblock_single'));
					$blocklink1 = sprintf("%sid=%s&unblocksingle=%s", $link, $db->entry['code'], $comment['ip']);
					printf("<td><a href='%s'>%s</a></td>", $blocklink1, $blocktext1);
				} else {
					$blocktext1 = str_replace("%s", make_mask($comment['ip']), lang('entries', 'unblock_range'));
					$blocklink1 = sprintf("%sid=%s&unblockrange=%s", $link, $db->entry['code'], $comment['ip']);
					printf("<td><a href='%s'>%s</a></td>", $blocklink1, $blocktext1);
				}

			} else {
				printf("<td>&nbsp;</td>");
			}

			printf("</td></tr></table><br />");
		} // end of printing comments

	}

	// Table for editing the entry / trackbacks (this will be replaced after 1.30,
	// When we put the form-builder in place.
	echo '<table  width="95%"  border="0" cellpadding="5" cellspacing="0">';
	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=modify&amp;id=%s",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- edit entry --><tr><td width="32" valign="top">');
	print_icon('overview', 'new_entry', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries','edit_entry'), lang('entries','edit_entry_desc') );

	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;id=%s",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- edit trackbacks --><tr><td width="32" valign="top">');
	print_icon('entry', 'edit_comments', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries' , 'edit_trackback'), lang('entries' , 'edit_trackback_desc') );


	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;doaction=1&amp;action=delete&amp;check[%s]=1",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- delete entry --><tr><td width="32" valign="top">');
	print_icon('entry', 'del_entry', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries' , 'delete_entry'), lang('entries' , 'delete_entry_desc') );

	echo "</table>";
	// End of table for editing the entry / trackbacks


	PageFooter();

	echo "<br /><br /><br /><br /><br /><br /><br /><br />";
}

/**
 * Store an edited comment, and then show the edit_comment screen
 *
 * @see edit_comment()
 *
 */
function submit_comment() {
	global $Cfg, $Pivot_Vars;

	// If magic_quotes_gpc is set, we need to strip slashes..
	if (get_magic_quotes_gpc()) {
		$Pivot_Vars['name'] = stripslashes($Pivot_Vars['name']);
		$Pivot_Vars['comment'] = stripslashes($Pivot_Vars['comment']);
	}

	$mycomm = array(
		'name' => entify($Pivot_Vars['name']),
		'orig_name' => entify($Pivot_Vars['orig_name']),
		'email' => $Pivot_Vars['email'],
		'url' => $Pivot_Vars['url'],
		'ip' => $Pivot_Vars['ip'],
		'registered' => $Pivot_Vars['registered'],
		'notify' => $Pivot_Vars['notify'],
		'date' => $Pivot_Vars['date'],
		'comment' => $Pivot_Vars['comment'],
		'moderate' => 1-$Pivot_Vars['moderate']
	);

	// Creating a copy for use in the last_comments update
	$mycomm_last = $mycomm;
	$mycomm_last['comment'] = trimtext($Pivot_Vars['comment'],250);
	$mycomm_last['code'] = $Pivot_Vars['id'];
	unset($mycomm_last['registered']);
	unset($mycomm_last['notify']);

	//update last_comments if it's in there..
	if (file_exists("db/ser_lastcomm.php")) {
		$last_comms = load_serialize("db/ser_lastcomm.php", true, true);
	} else {
		$last_comms = array();
	}

	if ($last_comms !== false && count($last_comms)>0) {
		foreach ($last_comms as $key => $last_comm) {
			if ( ($last_comm['code'] == $mycomm_last['code']) &&
			    ($last_comm['name'] == $mycomm_last['orig_name']) &&
			    ($last_comm['date'] == $mycomm_last['date'])	){
				// Keeping old (entry) title and category
				$mycomm_last['title'] = $last_comm['title'];
				$mycomm_last['category'] = $last_comm['category'];
				// Updating the comment
				// $last_comms[$key] = "";
				$last_comms[$key] = $mycomm_last;
				save_serialize("db/ser_lastcomm.php", $last_comms );
				break;
			}
		}
	}

	// Update the entry
	$db = new db();
	$entry = $db->read_entry( $Pivot_Vars['id']);

	$entry['comments'][ $Pivot_Vars['count'] ] = $mycomm;

	$db->set_entry($entry);
	$db->save_entry();

	// remove it from cache, to make sure the laters one is used.
	$db->unread_entry($entry['code']);

	$msg = lang('notice', 'comment_saved');

	edit_comments($msg);



}


/**
 * Displays the screen to edit and delete trackbacks.
 *
 * @param string $msg
 * @see submit_trackback()
 */
function edit_trackbacks($msg="") {
	global $Cfg, $Pivot_Vars, $Users;

	PageHeader(lang('userbar','trackbacks'), 1);
	PageAnkeiler(lang('userbar','trackbacks') . ' &raquo; ' .  lang('userbar','trackbacks_title'));
	$id = $Pivot_Vars['id'];

	$db = new db();

	// read entry if it's not in memory yet.
	$db->read_entry($id, true);

	printf("<p><strong>%s</strong>: %s<br />", lang('entries','title'), $db->entry['title']);
	printf("<strong>%s</strong>: %s<br />", lang('entries','author'), $db->entry['user']);
	printf("<strong>%s</strong>: %s</p><br />", lang('entries','date'), $db->entry['date']);

	if ($Pivot_Vars['user'] == $db->entry['user']) {
		// allowed to edit own trackbacks
		MinLevel(2);
	} else {
		// allowed to edit trackbacks on other people's entries
		MinLevel(3);
	}



	if ( (!$db->entry['trackbacks']) || (count($db->entry['trackbacks'])<1) ) {
		// print if there are no trackbacks
		echo "<p><B>".lang('notice', 'trackback_none')."</b><br /><br /></p>";
	} else {
		// print the trackbacks..

			// perhaps delete a trackback.
		if (isset($Pivot_Vars['del'])) {

			$del_track = $db->entry['trackbacks'][ $Pivot_Vars['del'] ];

			//remove the trackback from last_trackbacks if it's in there..
			if (file_exists("db/ser_lasttrack.php")) {
				$last_tracks = load_serialize("db/ser_lasttrack.php", true, true);
			} else {
				$last_tracks = array();
			}
			if ($last_tracks !== false && count($last_tracks)>0) {
				foreach ($last_tracks as $key => $last_track) {
					if ( ($last_track['code'] == $db->entry['code']) &&
					($last_track['name'] == $del_track['name']) &&
					($last_track['date'] == $del_track['date'])	){
						unset($last_tracks[$key]);
						save_serialize("db/ser_lasttrack.php", $last_tracks );
					}
				}
			}

			// *argh* evil hack to directly delete trackbacks.. I should write a
			// proper wrapper
			unset ($db->entry['trackbacks'][ $Pivot_Vars['del'] ]);
			unset ($db->db_lowlevel->entry['trackbacks'][ $Pivot_Vars['del'] ]);

			$db->save_entry();

			$msg = lang('notice', 'trackback_deleted');

		}

		// perhaps add an ip-block for single ip.
		if (isset($Pivot_Vars['blocksingle'])) {
			$msg = "Added block for IP ".$Pivot_Vars['blocksingle'];
			add_block($Pivot_Vars['blocksingle']);
		}

		// perhaps add an ip-block for single ip.
		if (isset($Pivot_Vars['blockrange'])) {
			$iprange = make_mask ($Pivot_Vars['blockrange']);
			$msg = "Added block for IP-range ".$iprange;
			add_block($iprange);
		}

		// perhaps remove an ip-block for single ip.
		if (isset($Pivot_Vars['unblocksingle'])) {
			$msg = "Removed block for IP ".$Pivot_Vars['unblocksingle'];
			rem_block($Pivot_Vars['unblocksingle']);
		}

		// perhaps remove an ip-block for single ip.
		if (isset($Pivot_Vars['unblockrange'])) {
			$iprange = make_mask ($Pivot_Vars['unblockrange']);
			$msg = "Removed block for IP-range ".$iprange;
			rem_block($iprange);
		}

		// print a message, if there is one.
		if ($msg!="") { echo "<p><B>$msg</b><br /><br /></p>"; }

		// show the edit form, to edit a trackback..
		if (isset($Pivot_Vars['edit'])) {

			StartForm('submittrackback', 0);
			StartTable();

			$mytrack = $db->entry['trackbacks'][ $Pivot_Vars['edit'] ];

			$settings = array();
			$settings[] = array('heading', lang('weblog_config','shortentry_template'), '', 8, '', 2, '');
			$settings[] = array('id', '', '', 7, $id, '', '');
			$settings[] = array('count', '', '', 7, $Pivot_Vars['edit'] , '', '');
			$settings[] = array('name', lang('weblog_text','blog_name'), '', 0, unentify($mytrack['name']) , 60, '');
			$settings[] = array('title', lang('weblog_text','title'), '', 0, unentify($mytrack['title']) , 60, '');
			$settings[] = array('excerpt', lang('weblog_text','excerpt'), '', 5, unentify($mytrack['excerpt']), '60', 'rows=5');
			$settings[] = array('url', lang('weblog_text','url'), '', 0, $mytrack['url'] , 60, '');
			$settings[] = array('ip', lang('weblog_text','ip'), '', 0, $mytrack['ip'] , 30, '');
			$settings[] = array('date', lang('weblog_text','date'), '', 0, $mytrack['date'] , 30, '');


			DisplaySettings($settings, 'blog_settings');
			EndForm(lang('weblog_config','save_trackback'), 1);
		}



		// print out all the trackbacks..
		foreach ($db->entry['trackbacks'] as $key => $trackback) {


			$myblock = block_type($trackback['ip']);

			if ( ($myblock=="single") || ($myblock=="range") ) {
				$strike = "style='text-decoration: line-through;'";
			} else {
				$strike = "";
			}

			// strip stuff from lamers' trackbacks..
			$trackback['url'] = strip_tags($trackback['url']);

			printf("<table border=0 cellpadding=2 cellspacing=2 width='95%%' style='border-bottom:".
			" 2px solid #999;'><tr><td width='40%%' valign='top'>".
	                lang('weblog_text','title').":&nbsp;<b %s>%s</b><br />",
			$strike,  stripslashes($trackback['title']));

			printf(lang('weblog_text','blog_name').":&nbsp;%s<br />", $trackback['name']);
			printf(lang('weblog_text','url').":&nbsp;%s<br />", $trackback['url']);
			printf(lang('weblog_text','ip').":&nbsp;%s<br />", $trackback['ip']);
			printf(lang('weblog_text','date').":&nbsp;%s<br />", $trackback['date']);

			printf("<td valign='top'><span %s>%s</span></td>", $strike, nl2br(htmlspecialchars($trackback['excerpt'])));

			// only show the option to edit and delete links if the user is an advanced user.
			if ($Users[$Pivot_Vars['user']]['userlevel']>=2) {

				$link=sprintf("index.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;", $Pivot_Vars['session']);
				$editlink=sprintf("%sid=%s&amp;edit=%s", $link, $db->entry['code'], $key);
				$dellink=sprintf("%sid=%s&amp;del=%s", $link, $db->entry['code'], $key);
				$reportpopup=sprintf("openReportTrackback('%s', '%s','%s','%s');",
						$Pivot_Vars['session'], $db->entry['code'], $key, $dellink);

				printf("</tr><tr class='tabular_line_odd'><td><a href='%s'>%s</a> /", $editlink, lang('entries', 'edit_trackback') );
				printf(" <a href='%s'>%s</a> / ", $dellink, lang('entries', 'delete_trackback') );

				// only ping.
				// printf(" <a href='#' onclick=\"%s\">%s</a>&nbsp;&nbsp;", $reportpopup, lang('entries', 'report_trackback') );

				// ping and delete
				printf(" <a href='#' onclick=\"%s\">%s</a>&nbsp;&nbsp;", $reportpopup, lang('entries', 'report_trackback') );

			} else {
				printf("<td>&nbsp;</td>");
			}



			// only show the option to add or remove ip-blocks if the user is an administrator.
			if ($Users[$Pivot_Vars['user']]['userlevel']>=3) {

				if ($myblock=="none") {
					$blocktext1 = str_replace("%s", $trackback['ip'], lang('entries', 'block_single'));
					$blocklink1 = sprintf("%sid=%s&blocksingle=%s", $link, $db->entry['code'], $trackback['ip']);
					$blocktext2 = str_replace("%s", make_mask($trackback['ip']), lang('entries', 'block_range'));
					$blocklink2 = sprintf("%sid=%s&blockrange=%s", $link, $db->entry['code'], $trackback['ip']);

					printf("<td><a href='%s'>%s</a> / ", $blocklink1, $blocktext1);
					printf("<a href='%s'>%s</a></td>", $blocklink2, $blocktext2);
				} else if ($myblock=="single") {
					$blocktext1 = str_replace("%s", $trackback['ip'], lang('entries', 'unblock_single'));
					$blocklink1 = sprintf("%sid=%s&unblocksingle=%s", $link, $db->entry['code'], $trackback['ip']);
					printf("<td><a href='%s'>%s</a></td>", $blocklink1, $blocktext1);
				} else {
					$blocktext1 = str_replace("%s", make_mask($trackback['ip']), lang('entries', 'unblock_range'));
					$blocklink1 = sprintf("%sid=%s&unblockrange=%s", $link, $db->entry['code'], $trackback['ip']);
					printf("<td><a href='%s'>%s</a></td>", $blocklink1, $blocktext1);
				}

			} else {
				printf("<td>&nbsp;</td>");
			}

			printf("</td></tr></table><br />");
		} // end of printing trackbacks



	}



	// Table for editing the entry / trackbacks (this will be replaced after 1.30,
	// When we put the form-builder in place.
	echo '<table  width="95%"  border="0" cellpadding="5" cellspacing="0">';
	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=modify&amp;id=%s",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- edit entry --><tr><td width="32" valign="top">');
	print_icon('overview', 'new_entry', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries','edit_entry'), lang('entries','edit_entry_desc') );


	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;id=%s",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- edit comments --><tr><td width="32" valign="top">');
	print_icon('entry', 'edit_comments', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries' , 'edit_comments'), lang('entries' , 'edit_comments_desc') );


	$link = sprintf("index.php?session=%s&amp;menu=entries&amp;doaction=1&amp;action=delete&amp;check[%s]=1",
		$Pivot_Vars['session'], $db->entry['code']);
	printf('<!-- delete entry --><tr><td width="32" valign="top">');
	print_icon('entry', 'del_entry', "<a href=\"".$link."\">");
    printf('</td><td><h3><a href="%s">%s</a></h3><p class="dim">%s</p></td></tr>',
		$link, lang('entries' , 'delete_entry'), lang('entries' , 'delete_entry_desc') );

	echo "</table>";
	// End of table for editing the entry / trackbacks



	PageFooter();

	echo "<br /><br /><br /><br />";
}


/**
 * Store an edited trackback, and then show the edit_trackbacks screen
 *
 * @see edit_trackbacks()
 *
 */
function submit_trackback() {
	global $Cfg, $Pivot_Vars;

	// If magic_quotes_gpc is set, we need to strip slashes..
	if (get_magic_quotes_gpc()) {
		$Pivot_Vars['title'] = stripslashes($Pivot_Vars['title']);
		$Pivot_Vars['excerpt'] = stripslashes($Pivot_Vars['excerpt']);
		$Pivot_Vars['name'] = stripslashes($Pivot_Vars['name']);
	}

	$mytrack = array(
		'title' => entify($Pivot_Vars['title']),
		'excerpt' => entify($Pivot_Vars['excerpt']),
		'name' => entify($Pivot_Vars['name']),
		'url' => $Pivot_Vars['url'],
		'ip' => $Pivot_Vars['ip'],
		'date' => $Pivot_Vars['date'],
	);



	$db = new db();
	$entry = $db->read_entry( $Pivot_Vars['id']);

	$entry['trackbacks'][ $Pivot_Vars['count'] ] = $mytrack;

	$db->set_entry($entry);
	$db->save_entry();

	// remove it from cache, to make sure the laters one is used.
	$db->unread_entry($entry['code']);

	$msg = lang('notice', 'trackback_saved');

	edit_trackbacks($msg);


}



/**
 * The screen that's shown when you click 'rebuild frontpage'
 *
 */
function buildfrontpage() {
	global $Weblogs;

	PageHeader(lang('adminbar','buildfrontpage'), 1);
	PageAnkeiler(lang('adminbar','buildfrontpage'));

	echo "<p>";

	buildfrontpage_function();

	// Ensure that frontpages for all weblogs are built.
	foreach ($Weblogs as $name => $weblog) {
		generate_frontpage($name);
	}

	print_timers();

	echo "</p><p><b>".lang('general', 'done')."</b></p>";

}


/**
 * The screen that's shown when you click 'rebuild index'.
 *
 */
function build_index() {
	global $config_array, $Archive_array;

	PageHeader(lang('adminbar','buildindex'), 1);
	PageAnkeiler(lang('adminbar','buildindex') . ' &raquo; ' . lang('adminbar','buildindex_title'));

	@set_time_limit(0);

	// Force the archive index and tag index file to be updated
	@unlink('db/ser-archives.php');


	// Make a new archive array.
	$Archive_array = make_archive_array();


	// Force the tag index to be updated
	@unlink('db/ser_tags.php');
    $dir = dir('db/tagdata/');
    while (false !== ($entry = $dir->read())) {
          if (getextension($entry)=="cache") {
              unlink('db/tagdata/'.$entry);
          }
    }
    $dir->close();



	echo("<p>". lang('adminbar', 'buildindex_start') ."<br />\n");
	flush();

	$db= new db();
	$db->generate_index();

	echo "<br /><br />\n\n<b>".str_replace("%num%", timetaken(), lang('adminbar', 'buildindex_finished'))."</b><br /><br /></p>\n";

	// stuff stops here..
	PageFooter();
}


/**
 * The screen that's shown when we rebuild the search index.
 *
 */
function build_search() {
	global $Cfg, $filtered_words, $Pivot_Vars;

	PageHeader(lang('adminbar','buildsearchindex'), 1);
	PageAnkeiler(lang('adminbar','buildsearchindex') . ' &raquo; ' . lang('adminbar','buildsearchindex_title'));

	/* JM - Bob said was 300, and was lowered to 200 because of a user
			with large entries going over PHP's 8Mb variables limit... wow!
			Is there a more elegant/flexible solution? he asks.
	*/

	// initialise the threshold.. Initially it's set to 10 * the rebuild_threshold,
	// roughly assuming we index 10 entries per second.
	if (isset($Cfg['rebuild_threshold']) && ($Cfg['rebuild_threshold']>4)) {
		$chunksize = (10 * $Cfg['rebuild_threshold']);
	} else {
		$chunksize = 280;
	}


	@set_time_limit(0);

	echo("<p><strong>". lang('adminbar', 'buildsearchindex_start') ."</strong><br /><br />\n");
	flush();

	makedir("db/search");
	include_once("modules/module_search.php");

	$start = (isset($Pivot_Vars['start'])) ? $Pivot_Vars['start'] : 0;
	$stop = $start + $chunksize;
	$time = (isset($Pivot_Vars['time'])) ? $Pivot_Vars['time'] : 0;

	if($start==0) { clear_index();	}

	$continue = start_index($start, $stop, $time);

	write_index(FALSE);

	$time = (isset($Pivot_Vars['time'])) ? $Pivot_Vars['time'] : 0;
	$time += timetaken('int');

	if($continue) {

		$myurl = sprintf("index.php?session=%s&menu=admin&func=admin&do=build_search&start=%s&time=%s", $Pivot_Vars['session'], $stop, $time);
		printf('<script> self.location = "%s"; </script>',$myurl);
		//printf('<a href="%s">%s</a>',$myurl,$myurl);
	} else {
		echo "<br /><br />\n\n<p><b>".str_replace("%num%", $time, lang('adminbar', 'buildindex_finished'))."</b><br /><br /></p>\n";
	}

	// stuff stops here..
	PageFooter();
}


/**
 * The screen that's shown when we click 'send pings'.
 *
 */
function send_pings() {
	global $Weblogs;
	PageHeader(lang('adminbar','sendping'), 1);
	PageAnkeiler(lang('adminbar','sendping') . ' &raquo; ' . lang('adminbar','sendping_title'));

	$db= new db();

	$ping_weblogs = array();

	foreach ($Weblogs as $name => $weblog) {
		$ping_weblogs[] = $name;
	}

	open_ping_window($ping_weblogs);

	echo "</p><p><b>".lang('general', 'done')."</b></p>";

	PageFooter();
}




/**
 * The screen for editing users.
 *
 * Todo: rewrite, because it's incomprehensible.
 *
 * @param unknown_type $erred
 * @param unknown_type $userfields
 * @see libchange_user()
 */
function u_settings_screen($erred=0, $userfields='') {

	PageHeader(lang('userbar','userinfo'), 1);
	PageAnkeiler(lang('userbar','userinfo') . ' &raquo; ' . lang('userbar','u_settings_title'));

	libchange_user(0, $erred, $userfields);

	// stuff goes here..

	PageFooter();

}


/**
 * Called when submitting a changed user
 *
 * Todo: rewrite, because it's incomprehensible.
 *
 * @see libsave_change_user()
 */
function u_settings_save() {
	global $Pivot_Vars;

	// check against unauthorised direct access.
	check_csrf();

	libsave_change_user(0);

}


/**
 * The screen that lets users add a bookmarklet.
 *
 */
function u_marklet_screen() {
	global $config_array, $Paths;

	PageHeader(lang('userbar','userinfo'), 1);
	PageAnkeiler(lang('userbar','userinfo') . ' &raquo; ' . lang('bookmarklets','bm_add'));


	// A quick hack to make sure the raquo's are encoded when using UTF-8
	$withlinktitle = lang('bookmarklets','bm_withlink');
	$nolinktitle = lang('bookmarklets','bm_nolink');
	$withlinktitle = str_replace("&raquo;", "&#187;", str_replace("»", "&#187;", $withlinktitle));
	$nolinktitle = str_replace("&raquo;", "&#187;", str_replace("»", "&#187;", $nolinktitle));


	$url = gethost().$Paths['pivot_url']."index.php?menu=entries&amp;func=new_entry";

	$withlink = sprintf("javascript:bm=document.selection?document.selection.createRange().text:document.getSelection();void(open('%s&url='+escape(location.href)+'&i='+escape(bm)+'&t='+escape(document.title), 'new_log_entry', 'resizable=yes, scrollbars=yes, width=790, height=480, location=yes, status=yes'));", $url);

	$nolink = sprintf("javascript:void(open('%s','new_log_entry', 'resizable=yes, scrollbars=yes, width=790, height=480, location=yes, status=yes'));", $url);

	$main_funcs = array(array($withlinktitle, $withlink, lang('bookmarklets','bm_withlink_desc')),
	array($nolinktitle, $nolink, lang('bookmarklets','bm_nolink_desc')),

	);

	DispPage($main_funcs);

	echo "<p>".lang('bookmarklets', 'bookmarklets_info');
	echo "<ul><li>".lang('bookmarklets', 'bookmarklets_info_1')."</li>";
	echo "<li>".lang('bookmarklets', 'bookmarklets_info_2')."</li></ul></p>";

	PageFooter();
}




?>
