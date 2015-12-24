<?php

/**
 * Contains support functions used by Pivot.
 *
 * @package pivot
 */


// ---------------------------------------------------------------------------
//
// PIVOT - LICENSE:
//
// This file is part of Pivot. Pivot and all its parts are licensed under
// the GPL version 2. see: http://www.pivotlog.net/help/help_about_gpl.php
// for more information.
//
// ---------------------------------------------------------------------------


//save the settings file each time the script ends. (linux only..)
//register_shutdown_function('SaveSettings');

/**
 * Load up the settings.
 */
function GetSettings() {
	global $Cfg, $Weblogs, $pivot_path;

	// get the config file
	$fh = file($pivot_path.'pv_cfg_settings.php');

	foreach ($fh as $fh_this) {
		@list($name, $val) = split("!", $fh_this);
		$Cfg[$name] = rtrim(ltrim($val));
	}
	GetUserInfo();
	ExpandSessions();

	@$Cfg['ping_urls']=str_replace("|", "\n", $Cfg['ping_urls']);
	@$Cfg['default_introduction']=str_replace("|", "\n", $Cfg['default_introduction']);

	if (!isset($Cfg['selfreg'])) { $Cfg['selfreg']= 0; }
	if (!isset($Cfg['xmlrpc'])) { $Cfg['xmlrpc']= 0; }
	if (!isset($Cfg['hashcash'])) { $Cfg['hashcash']= 0; }
	if (!isset($Cfg['spamquiz'])) { $Cfg['spamquiz']= 0; }
	if (!isset($Cfg['hardened_trackback'])) { $Cfg['hardened_trackback']= 0; }
	if (!isset($Cfg['moderate_comments'])) { $Cfg['moderate_comments']= 0; }
	if (!isset($Cfg['lastcomm_amount_max'])) { $Cfg['lastcomm_amount_max'] = 60; }

	if (!isset($Cfg['tag_cache_timeout'])) { $Cfg['tag_cache_timeout'] = 60; }
	if (!isset($Cfg['tag_flickr_enabled'])) { $Cfg['tag_flickr_enabled'] = 1; }
	if (!isset($Cfg['tag_flickr_amount'])) { $Cfg['tag_flickr_amount'] = 6; }
	if (!isset($Cfg['tag_fetcher_enabled'])) { $Cfg['tag_fetcher_enabled'] = 1; }
	if (!isset($Cfg['tag_fetcher_amount'])) { $Cfg['tag_fetcher_amount'] = 10; }
	if (!isset($Cfg['tag_min_font'])) { $Cfg['tag_min_font'] = 9; }
	if (!isset($Cfg['tag_max_font'])) { $Cfg['tag_max_font'] = 42; }

	if(!isset($Cfg['server_spam_key']))  {
  		$key = $_SERVER['SERVER_SIGNATURE'].$_SERVER['SERVER_ADDR'].$_SERVER['SCRIPT_URI'].$_SERVER['DOCUMENT_ROOT'].time();
      	$Cfg['server_spam_key'] = md5($key);
  	}

	// also get the weblogs file
	$Weblogs = load_serialize($pivot_path."pv_cfg_weblogs.php");
	unset($Weblogs['']);

    // Set the number of weblogs in this Pivot installation.
    $Cfg['weblog_count'] = count($Weblogs);

}


/**
 * save the settings.
 *
 */
function SaveSettings() {
    global $Cfg;

    PutUserInfo();
    ContractSessions();

    // Use a local config array so we don't change the configuration in use ...
    $tmpCfg = $Cfg;

    // a hack for ping_urls.
    if (isset($Cfg['ping_urls'])) {
        $tmpCfg['ping_urls'] = str_replace("\n", "|", $tmpCfg['ping_urls']);
        $tmpCfg['ping_urls'] = str_replace("\r", "", $tmpCfg['ping_urls']);
    }

    // a hack for default_intro
    if (isset($Cfg['default_introduction'])) {
        $tmpCfg['default_introduction'] = str_replace("\n", "|", $tmpCfg['default_introduction']);
        $tmpCfg['default_introduction'] = str_replace("\r", "", $tmpCfg['default_introduction']);
    }


    $output = "<?php\n";

    ksort($tmpCfg);

    foreach($tmpCfg as $key => $value) {
        if($key && ($value != '') && ($key!='tempsessions')) {
            $output .= "$key!$value\n";
        }
    }

    $output .= "?".">\n";

    // Disallow user to interrupt
    ignore_user_abort(TRUE);

    // Do a last check, see if there's at least one user in it, and enough lines.
    if ( (strpos($output, "user-")>0) && (strpos($output, "users!")>0) && (count($Cfg)>10) ) {

        if ($fp = fopen('pv_cfg_settings.php', 'w')) {
            fwrite($fp, $output);
            fclose($fp);
            debug("Wrote config file with " . count($Cfg) . " items..");
        } else {
            debug("Could not write config file...");
        }

    } else {

        debug("Cowardly refuse to write b0rken config file.. ");

    }


}

/**
 * Convert the 'serialized' sessions from $Cfg to an array
 */
function ExpandSessions() {
	global $Cfg;
	if (isset($Cfg['sessions'])) {
		foreach(split('\|-\|' , $Cfg['sessions']) as $val){
			$vars = split('\|', $val);
			$i = 1 ;
			while( isset( $vars[$i] )) {
				$Cfg['tempsessions'][$vars[0]][] = $vars[$i];
				$i++;
			}
		}
	}
}

/**
 * Convert the Session arrays to 'serialized' strings, add/update them to
 * the $Cfg array
 */
function ContractSessions() {
	global $Cfg;

	while (list($session,$meh) = @each($Cfg['tempsessions'])) {
		if(($Cfg['tempsessions'][$session][2] - time()) >= 0) {
			$tmp[] = $session.'|'.join('|', $Cfg['tempsessions'][$session]);
		}
	}

	if ( (isset($tmp)) && (is_array($tmp)) ) {
		$Cfg['sessions'] = join('|-|', $tmp);
	}
}


/**
 * Gets the user info for everyone from the $Cfg array, and fill the $Users array
 *
 */
function GetUserInfo() {
	global $Cfg, $Users;
	if(isset($Cfg['users']))  {
		foreach(split('\|', trim($Cfg['users'])) as $inc => $user){
			foreach(split('\|-\|' , $Cfg['user-' . $user]) as $var => $val){
				list($Nvar, $Nval) = split('\|', $val);
				$Users[$user][$Nvar] = $Nval;
			}
		}
	}
}


/**
 * Get all the users info from the $Users array and add it to the $Cfg array
 */
function PutUserInfo() {
	global $Cfg, $Users;
	foreach($Users as $username => $user){
		$userdata = array();
		foreach($user as $key => $val){
			$userdata[] = "$key|$val";
		}
		// bob notes: changed to >= 2 (otherwise it won't store username 'bob')
		// i feel neglected now :-.
		if(strlen($username) >= 2) {
			$Cfg["user-$username"] = join('|-|', $userdata);
		}
	}
}

/**
 * Get the User fields from the $Cfg array.
 *
 * @return array
 */
function GetUserFields() {
	global $Cfg;
	foreach(split('\|', trim($Cfg['userfields'])) as $inc => $field){
		foreach(split('\|-\|' , $Cfg['uf-' . $field]) as $var => $val){
			list($Nvar, $Nval) = split('\|', $val);
			$ufields[$field][$Nvar] = $Nval;
		}
	}
	// Over-riding the value from the config file (since the language
	// might have changed since it was saved). The right solution is
	// of course to *not* save the 'heading' userfield...
	$ufields['heading']['disp'] = lang('adminbar', 'userfields');
	$ufields['heading']['size'] = 2;
	$ufields['heading']['type'] = 8;

	return $ufields;
}

/**
 * rebuilds all the info from user fields, which should have been taken from GetUserFields
 *
 */
function PutUserFields($data) {
    global $Cfg;

	foreach($data as $key => $arr) {
		$userfieldlist[] = $key;
        $userfielddata = array();
		foreach($arr as $arrkey => $val){
			$userfielddata[] = "$arrkey|$val";
		}
		$Cfg['uf-'.$key] = join("|-|", $userfielddata);
	}

	$Cfg['userfields'] = join("|", $userfieldlist);
}

/**
 * Expands the list of weblogs from the $Cfg array
 */
function ExpandBlogs(){
	global $Cfg;

	foreach(split('\|-\|', trim($Cfg['weblogs'])) as $inc => $still){
		foreach(split('\|' , $still) as $key => $val){
			$weblogs[] = $val;
		}

	}
	//	print_r($lWeblogs);
	return $weblogs;
}


/**
 * Checks the input from form fields.
 *
 * If it returns nothing, it passes.
 * 0 - fail by input [not alphanumberic or _]
 * 1 - fail by length [too short]
 * 2 - fail by length [too long]
 *
 * @param string $input
 * @param int $minlen
 * @param int $maxlen
 * @return int
 */
function CheckInput($input, $minlen=2, $maxlen=12) {
	if(ereg("^[a-zA-Z0-9\_\s]+$", $input)){
		if(strlen($input) < $minlen){
			return 	1;
		}
		if(strlen($input) > $maxlen){
			return 2;
		}
	}else{
		return 0;
	}
}



/**
 * Checks if the text is a valid e-mail address.
 *
 * Given a chain it returns true if $theAdr conforms to RFC 2822.
 * It does not check the existence of the address.
 * Suppose a mail of the form
 *  <pre>
 *  addr-spec     = local-part "@" domain
 *  local-part    = dot-atom / quoted-string / obs-local-part
 *  dot-atom      = [CFWS] dot-atom-text [CFWS]
 *  dot-atom-text = 1*atext *("." 1*atext)
 *  atext         = ALPHA / DIGIT /    ; Any character except controls,
 *        "!" / "#" / "$" / "%" /      ;  SP, and specials.
 *        "&" / "'" / "*" / "+" /      ;  Used for atoms
 *        "-" / "/" / "=" / "?" /
 *        "^" / "_" / "`" / "{" /
 *        "|" / "}" / "~" / "." /
 * </pre>
 *
 * @param string $theAdr
 * @return boolean
 */
function isemail( $theAdr ) {

    // default
    $result = FALSE;

    // go ahead
    if(( ''!=$theAdr )||( is_string( $theAdr ))) {
        $mail_array = explode( '@',$theAdr );
    }

    if( !is_array( $mail_array )) { return FALSE; }

    if( 2 == count( $mail_array )) {
        $adr_array  = explode( '.',$mail_array[1] );
    } else {
        return FALSE;
    }

    if( !is_array( $adr_array ))  { return FALSE; }
    if( 1 == count( $adr_array )) { return FALSE; }

    /* relevant info:
     * $mail_array[0] contains atext
     * $adr_array  contains parts of address
     *          and last one must be at least 2 chars
     */

    // quick checks
    $domain = array_pop( $adr_array );
    if(( is_string( $domain ))&&( 1 < strlen( $domain ))) {
        // put back
        $adr_array[] = $domain;
        $domain = implode( '',$adr_array );
        // now we have two string to test
        // $domain and $mail_array[0]
        $domain        = ereg_replace( "[[:alnum:]]","",$domain );
        $domain        = ereg_replace( "[-|\_]","",$domain );
        $mail_array[0] = ereg_replace( "[[:alnum:]]","",$mail_array[0] );
        $mail_array[0] = ereg_replace( "[-.|\!|\#|\$|\%|\&|\'|\*|\+|\/|\=|\? |\^|\_|\`|\{|\||\}|\~]","",$mail_array[0] );

        // final
        if(( '' == $domain )&&( '' == $mail_array[0] )) { $result = TRUE; }
    }
    return $result;
}



/**
 * Checks whether the text is an URL or not.
 *
 * @param string $url
 * @return boolean
 */
function isurl($url) {

	return (preg_match("/((ftp|https?):\/\/)?([a-z0-9](?:[-a-z0-9]*[a-z0-9])?\.)+(com\b|edu\b|biz\b|org\b|gov\b|in(?:t|fo)\b|mil\b|net\b|name\b|museum\b|coop\b|aero\b|[a-z][a-z]\b|[0-9]{1,3})/i",$url));

}


/**
 * Check against unauthorised external access..
 *
 * @param boolean $strict Allow get request if false.
 * @return boolean
 *
 */
function check_csrf($strict = true) {
	global $Cfg;

	// if the undocumented 'skip_csrf_check' is set, we skip the test.
	if ($Cfg['skip_csrf_check']==1) {
		return true; // Foolish, foolish people..
	}


	// Check if we used POST instead of GET..
	if($strict && ($_SERVER['REQUEST_METHOD'] != "POST")) {
		piv_error( "This action requires the use of POST!",
				"In other words: stop messing about, since you should never see this message in normal use.");
	}

	// Get the referer and current request..
	$referer = $_SERVER['HTTP_REFERER'];
	$current = sprintf("http://%s%s",
		$_SERVER['HTTP_HOST'],
		(isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'])
		);

	$referer = parse_url($referer);
	$current = parse_url($current);

	// Check if the 'host' and 'path' are the same..
	if ( ($referer['host']!=$current['host']) || ($referer['path']!=$current['path']) ) {

		$error = "For your safety, Pivot requires that a valid referer is passed between most pages.
				 Pivot couldn't get the correct referer, so it will not allow you to perform the
				 action you have requested.</p>

				 <p>Usually this means one of the following:</p>

				 <ul><li>You're using a proxy that filters out referers. Ask whomever maintains this
				 proxy to enable referers, or simply don't use a proxy.</li>
				 <li>You're using some kind of 'internet privacy' software on your computer that
				 prevents this. For example, some firewalls, as well as Norton Internet Security do
				 this. Please see the software's help on how to allow referers.</li>
				 <li>You're a hacker!! Ksst! Go away!!</li></ul>

				 <p>If none of the above is the case, please go to <a href='http://pivotlog.net/forum/'>
				 the Pivot Forum</a>, and we'll help you sort it out.</p>";

		$error .= "<p style='font-size:80%;'>(Host: '" . $current['host'] . "' vs. '" . $referer['host'] ."'. <br /> \n" ;
		$error .= "Path: '" . $current['path'] . "' vs. '" . $referer['path'] ."'.) \n" ;

		piv_error( "Could not get a valid referer!", $error);
	}

	return true;

}

/**
 * Creates the form to change the user settings.
 *
 * @param int $admin
 * @param int $erred
 * @param array $newdata
 */
function libchange_user($admin=0, $erred=0, $newdata='') {
	global $Pivot_Vars, $Users, $ThisUser, $Cfg;


	if($erred==0){
		$userfields = get_userfields($admin);
	}else{
		$userfields = $newdata;
	}
	if($admin==1){
		$theuser = $Pivot_Vars['edituser'];
		$ThisUser = $Users[$theuser];
	}else{
		$theuser = $Pivot_Vars['user'];
	}

	MinLevel($Users[$theuser]['userlevel']);


	StartForm('save_user', $admin);
	GenSetting('username', '', '', 7, $theuser, '', '');
	StartTable();

	// so the user can't change his name..
	$userfields[0][4] = $theuser;
	$userfields[0][6] = "disabled='disabled'";

	// make sure superadmin doesn't demote himself.
	if( ($admin==1) && ($Users[$theuser]['userlevel'] > 3) ) {
		foreach($userfields as $key => $userfield) {
			// this loop makes sure we don't set the wrong field..
			if ($userfield[0] == "userlevel") {
				$userfields[$key][4] = array('0' => lang('userlevels',4-$Users[$theuser]['userlevel']), '1' => $Users[$theuser]['userlevel']);
			}
		}
	}

	if($erred==0){
		$ufields = GetUserFields();
		foreach($ufields As $keyname => $arrg) {
			// Skipping fields that we aren't allowed to change
			if (($admin!=1) && ($Users[$theuser]['userlevel'] < $ufields[$keyname]['minlevel'])) {
				continue;
			}
			$type = 0;
			if(is_int($ufields[$keyname]['maxlen'])){
				$maxl =  'maxlength=\"'.$ufields[$keyname]['maxlen'].'\"';
			}else{
				$maxl = '';
			}
			array_push($userfields, array($keyname, $ufields[$keyname]['disp'], '', $ufields[$keyname]['type'], $Users[$theuser][$keyname], $ufields[$keyname]['size'], $maxl));

		}
	}


	// checkboxes for allowed categories
	if($Users[$Pivot_Vars['user']]['userlevel'] > 2){

		$userfields[] = array('heading', lang('config', 'allowed_cats'), '', 8, '', 2);

		foreach(explode("|", $Cfg['cats']) as $cat){
			if ($cat != "" ) {

				$label = sprintf('&nbsp;&nbsp;&nbsp;'.$cat);
				$allowed_users = explode("|", $Cfg['cat-'.$cat]);
				$cat_encoded = urlencode($cat);
				if (in_array($theuser, $allowed_users)) {
					$userfields[] = array('allowed['.$cat_encoded.']', $label, '', 2, 1, '', '');
				} else {
					$userfields[] = array('allowed['.$cat_encoded.']', $label, '', 2, 0, '', '');
				}
			}
		}
		$userfields[(count($userfields)-1)][2]  = lang('config', 'allowed_cats_desc');

	}

	DisplaySettings($userfields, 'ThisUser');

	if($Pivot_Vars['func']=='admin' && ($Pivot_Vars['do']=='edituser' || $Pivot_Vars['do']=='save_user') && $Users[$Pivot_Vars['user']]['userlevel'] > $Users[$theuser]['userlevel']){
		GenSetting('heading', lang('general', 'delete') , '', 8);
		GenSetting('delete_user', lang('config', 'delete_user'), lang('config', 'delete_user_desc'), 3, 'yn');
	}

	EndForm(lang('userinfo','edituser_button'), 1);
}


/**
 * Saves the user settings.
 *
 * @param int $admin
 */
function libsave_change_user($admin=0) {
	global $Pivot_Vars, $Users, $Cfg, $Paths;

	// Sanitize passed variables to prevent people from inserting characters that
	// could be interpreted as dividers.
	foreach ($Pivot_Vars as $key => $val) {
		$Pivot_Vars[$key] = preg_replace("/[!|\n]/i", "", $Pivot_Vars[$key]);
	}

	$userfields = get_userfields($admin);
	$ufields = GetUserFields();

	if($admin==1){
		$theuser = $Pivot_Vars['username'];
	}else{
		$theuser = $Pivot_Vars['user'];
	}
	if(($Pivot_Vars['delete_user']==1) && ($Users[$Pivot_Vars['user']]['userlevel'] >= 3)){

		if($Pivot_Vars['confirmed'] == 1){

			//delete him from the config file, nothing else.
			$tmp_arr = explode("|", $Cfg['users']);
			foreach($tmp_arr as $candidate){
				if($candidate != $Pivot_Vars['username']){
					$tmp_arr2[] = $candidate;
				}
			}
			$Cfg['users'] = implode( "|", $tmp_arr2);
			unset($Users[$Pivot_Vars['username']]);
			unset($Cfg['user-'.$Pivot_Vars['username']]);
			see_users();
		}else{
			$vars = array('username', $Pivot_Vars['username'], 'delete_user', 1);
			ConfirmPage(lang('ufield_main','del_title'), $vars, sprintf( lang('config', 'delete_user_confirm'), $Pivot_Vars['username']));
		}

	}else{

		foreach($ufields As $keyname => $intarr){
			// Skipping fields that we aren't allowed to change
			if (($admin!=1) && ($Users[$theuser]['userlevel'] < $ufields[$keyname]['minlevel'])) {
				continue;
			}
			array_push($userfields, array($keyname, $ufields[$keyname]['disp'], '', $ufields[$keyname]['type'], $Users[$theuser][$keyname], $ufields[$keyname]['size'], $maxl));

			if($ufields[$keyname]['filter'] != '' && (strlen($Pivot_Vars[$keyname]) > 0)){
				$tfunk = 'is' . $ufields[$keyname]['filter'];
				if(!($tfunk($Pivot_Vars[$keyname]))){
					$userfields[count($userfields)-1][2] = 'hey, that input doesn\'t go along with the filter in place';
					$Piverr++;
				}
			}
		}
		$arraycount = Count($userfields);

		if(strlen($Pivot_Vars['pass1']) + strlen($Pivot_Vars['pass2']) >= 1){
			if((trim($Pivot_Vars['pass1'])) != (trim($Pivot_Vars['pass2']))) {
				$userfields[2][2] = lang('userinfo','pass_dont_match');
				$Piverr++;
			}

			if( strlen($Pivot_Vars['pass1']) < 4 ){
				$userfields[1][2] = lang('userinfo','pass_too_short');
				$Piverr++;
			}


			if( $Pivot_Vars['pass1'] == $Pivot_Vars['username'] ){
				$userfields[1][2] = lang('userinfo','pass_equal_name');
				$Piverr++;
			}

		}
		if($Piverr==0){

			// make sure the superadmin doesn't demote himsef/herself..
			if ($Users[$theuser]['userlevel']==4){
				$Pivot_Vars['userlevel']=4;
			}

			// get confirmation if user gets admin rights
			if(($Pivot_Vars['userlevel']==3) && ($Users[$theuser]['userlevel']<3) && ($Pivot_Vars['confirmed'] != 1)){
				$vars = array();
				$arraycount = Count($userfields);
				for($i = 0; $i < $arraycount; $i++){
					array_push($vars, $userfields[$i][0], $Pivot_Vars[$userfields[$i][0]]);
				}
				ConfirmPage(lang('userinfo','c_admin_title'), $vars, sprintf(lang('userinfo','c_admin_message'), $theuser));
			}else{
				//it's all good.
				if(strlen($Pivot_Vars['pass1']) >= 6){
					$Users[$theuser]['pass'] = md5($Pivot_Vars['pass1']);
					if($_COOKIE['mode'] == 'stayloggedin' && $Pivot_Vars['user'] == $theuser){
						setcookie('pass', md5($Pivot_Vars['pass1']),
							time()+$Cfg['cookie_length'], $Paths['cookie_url']);
					}
					//change the session key too..
					$Cfg['tempsessions'][$Pivot_Vars['session']][1] = md5($Pivot_Vars['pass1']);
				}
				for($i = 0; $i < $arraycount; $i++){
					if(($userfields[$i][0] != 'heading') && ($userfields[$i][0] != 'pass1') && ($userfields[$i][0] != 'pass2')) {
						$Users[$theuser][$userfields[$i][0]] = $Pivot_Vars[$userfields[$i][0]];
					}
				}

				// set the categories..

				if($Users[$Pivot_Vars['user']]['userlevel'] > 2){
					foreach (explode("|", $Cfg['cats']) as $category) {

						$allowed_users = explode("|", $Cfg['cat-'.$category]);

						if (isset($Pivot_Vars['allowed'][urlencode($category)])) {
							// add the user..
							if (!in_array($theuser, $allowed_users)) {
								$allowed_users[] = $theuser;
							}

						} else {
							// remove the user..
							if (in_array($theuser, $allowed_users)) {
								foreach ($allowed_users as $key => $user) {
									if ($user == $theuser) { unset ($allowed_users[$key]); }
								}
							}
						}

						$Cfg['cat-'.$category] = implode("|", $allowed_users);

					}
				}

				/**
				 * Rather crude check to prevent corrupting the file:
				 * if $Users[$theuser]['username'] is empty, we refuse to save.
				 */
				if ($Users[$theuser]['username'] != "") {
					debug("changes saved for ". $theuser);
					SaveSettings();
				} else {
					// not right..
					debug("Changes not saved..");

				}


				//so we can reload the languages and such

				if($admin==1){

					redirect('index.php?session='.$Pivot_Vars['session'].'&amp;menu=admin&amp;func=admin&do=seeusers');
					die();
				}else{

					redirect('index.php?session='.$Pivot_Vars['session'].'&amp;menu=userinfo&amp;func=u_settings');
					die();
				}

			}

		} else {
			//reshow the spage
			$Pivot_Vars['edituser'] = $Pivot_Vars['username'];
			//regroup the old settings.
			for($i=0; $i < $arraycount; $i++){
				if($userfields[$i][3]==0){
					$userfields[$i][4] = $Pivot_Vars[$userfields[$i][0]];
				}elseif($userfields[$i][3]==3){
					$userfields[$i][6] = $Pivot_Vars[$userfields[$i][0]];
				}
			}
		}
		if($Users[$theuser]['userlevel'] > 3){
			//ARGHH!!!!!!
			$unf[0] = $userfields[4][6];
			$unf[1] = 'disabled';
			unset($userfields[4][6]);
			$userfields[4][6] = $unf;
		}

		if($admin==1){
			change_user(1, $userfields);
		}else{
			u_settings_screen(1, $userfields);
		}
	}
	PutUserInfo();
}

/**
 * Shows the list of files/images in the upload folder.
 */
function show_image_list($fileArray,$thumbArray) {
	global $Cfg, $Pivot_Vars, $Paths;

	printf('<script language="javascript" type="text/javascript">function pop(a){
	window.open("modules/module_image.php?image="+a,"%s","toolbar=no,resizable=yes,scrollbars=yes,width=940,height=570");}</script>',$file['name']);

	$myurl =sprintf("index.php?session=%s&amp;menu=files&amp;doaction=1", $Pivot_Vars['session']);
	printf("<form name='form1' method='post' action='%s'>", $myurl);

	echo '<table cellspacing="0" class="tabular_border">';

	printf("<tr class='tabular_header'>\n<td>&nbsp;</td>\n<td width='200'>%s</td>\n<td>%s</td>\n<td width='100'>%s</td>\n<td>%s</td>\n<td>%s</td>\n</tr>\n\n",lang('upload','filename'),lang('upload','thumbnail'),lang('upload','date'),lang('upload','filesize'),lang('upload','dimensions'));


	foreach($fileArray as $key => $file) {

		$fullentry = fixpath(sprintf('%s../%s%s',$Paths['pivot_url'] ,$Cfg['upload_path'],$file['name']));
		$thumb = checkThumbAvailable($file['name']);

		// get the image's witdh and height
		list($file['width'],$file['height']) = getimagesize( urldecode( sprintf('../%s%s' ,$Cfg['upload_path'],$file['name'] ) ) );

		if (!isset($linecount)) {
			$linecount=1;
		} else {
			$linecount++;
		}

		if (($linecount % 2)==0) {
			$bg_color="tabular_line_even";
		} else {
			$bg_color="tabular_line_odd";
		}

		$url=sprintf($Paths['pivot_url']."includes/photo.php?img=%s&amp;w=%s&amp;h=%s&amp;t=%s", urlencode(base64_encode($fullentry)), $file['width'], $file['height'], $file['name']);
		$view_html = sprintf("<a href='%s' onclick=\"window.open('%s', 'imagewindow', 'width=%s, height=%s, directories=no, location=no, menubar=no, scrollbars=no, status=no, toolbar=no, resizable=no');return false\" target='_self' title='%s'>", urldecode($fullentry), $url, $file['width'], $file['height'], $file['name'] );

		printf('<tr class="%s">',$bg_color);
		printf("\n<td><input type='checkbox' name='check[%s]' /></td>\n",$file['name']);
		printf('<td>%s%s</a></td>',$view_html, trimtext(strtolower(urldecode($file['name'])), 40, TRUE));

		if($thumb != $file['name']) {
			printf('<td><a href="javascript:pop(\'%s\');">' . lang('upload', 'edit') . '</a></td>',$file['name']);
		} else {
			printf('<td><a href="javascript:pop(\'%s\');">' . lang('upload', 'create') . '</a></td>',$file['name']);
		}

		printf("\n<td>%s</td>\n<td>%d KB</td>\n<td>%d x %d</td>\n</tr>\n\n",$file['date'],$file['size'],$file['width'],$file['height']);
	}

	echo '<tr class="tabular_nav"><td colspan="7"><img src="pics/arrow_ltr.gif" width="29" height="14" border="0" alt="" />';
	echo '<a href="#" onclick=\'setCheckboxes("form1", true); return false;\'>'. lang('forms', 'c_all') .'</a> / ';
	echo '<a href="#" onclick=\'setCheckboxes("form1", false); return false;\'>'. lang('forms', 'c_none') .'</a>';
	echo '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;'. lang('forms', 'with_checked_files');
	echo '<select name="action" class="input"><option value="" selected="selected">'. lang('forms', 'choose') .'</option><option value="delete">'. lang('forms', 'delete') .'</option></select>';
	echo '&nbsp;&nbsp;<input type="submit" value="'. lang('go') .'" class="button" />';
	printf("</td>\n</tr></table>\n</form>\n\n");

	StartForm('file_upload', 0, 'enctype="multipart/form-data"');

	echo "<br /><table border='0'>";

	GenSetting('',lang('upload','thisfile'),'',8,'',6);
	printf('<tr><td><input name="%s" type="file"  class="input" /></td><td>',$Cfg['upload_file_name']);
	printf('<input type="submit" value="%s" class="button" /></td></tr></table></form>',lang('go'));

	PageFooter();
}

/**
 * Shows image preview.
 */
function show_image_preview($fileArray,$thumbArray) 	{
	global $Cfg, $Pivot_Vars, $Paths;

	printf("\n\n<script language='javascript' type='text/javascript'>\nfunction pop(a){
	window.open('modules/module_image.php?image='+a,'','toolbar=no,resizable=yes,scrollbars=yes,width=940,height=570');\n}\n</script>\n\n");

	$myurl =sprintf("index.php?session=%s&amp;menu=files&amp;doaction=1", $Pivot_Vars['session']);
	printf("<form name='form1' method='post' action='%s'>", $myurl);

	echo "\n\n<div style='margin:0px; padding:0px;'>\n\n";

	foreach($fileArray as $file) {

		$ext=getextension(strtolower($file['name']));
		if ( ($ext!="gif") && ($ext!="jpg") && ($ext!="jpeg") && ($ext!="png") && ($ext!="swf") ) {
			continue;
		}

		$thumb = checkThumbAvailable($file['name']);
		$fullentry = fixpath(sprintf('%s../%s%s',$Paths['pivot_url'] ,$Cfg['upload_path'],$file['name']));
		$thumbententry = urldecode(fixpath(sprintf('%s../%s%s',$Paths['pivot_url'] ,$Cfg['upload_path'],$thumb)));

		list($thumbwidth, $thumbheight) = getimagesize(urldecode("../".$Cfg['upload_path'].$thumb));

		// Calculate rescaling factor for
		// showing thumbnail in table/div

		// for wide thumbnails, take two 'cells', otherwise one..
		if ( ($thumbwidth / $thumbheight) < 2 ) {
			$mw	= 130;
		}	else {
			$mw = 268; // * 2 , + 8
		}

		$mh		= 80;
		$scalew = $thumbwidth / $mw;
		$scaleh = $thumbheight / $mh;
		$factor = max($scalew,$scaleh);
		$dw		= $thumbwidth / $factor;
		$dh		= $thumbheight / $factor;

		// get the image's witdh and height
		list($file['width'],$file['height']) = getimagesize( urldecode( sprintf('../%s%s' ,$Cfg['upload_path'],$file['name'] ) ) );

		// if filesize is bigger than 9999 KB
		// then filesize comment is changed, this
		// is just for not fucking up the tables/divs
		if(strlen($file['size']) > 4) {
			// see!? no more than 4 chars,
			// please change size of file
			$fs = 'BIGASS';
		} else {
			// show actual filesize + string KB
			$fs = $file['size'].'KB';
		}

		echo "\n<div style='float:left; border:1px solid #2D5A5A; margin:3px;'>\n";
		printf('<table cellpadding="0" cellspacing="0" width="%d" border="0">',$mw);

		printf("\n\n<tr>\n<td align='center' valign='middle' bgcolor='#BBBBBB' height='%d' colspan='2'>",$mh);

		// make the 'view' link
		$url=sprintf($Paths['pivot_url'] . "includes/photo.php?img=%s&amp;w=%s&amp;h=%s&amp;t=%s", urlencode(base64_encode($fullentry)), $file['width'], $file['height'], $file['name']);

		$view_html = sprintf("\n<a href='%s' onclick=\"window.open('%s', 'imagewindow', 'width=%s, height=%s, directories=no, location=no, menubar=no, scrollbars=no, status=no, toolbar=no, resizable=no');return false\" target='_self' title='%s (%s)'>", urldecode($fullentry), $url, $file['width'], $file['height'], $file['name'], $fs );

		if($thumbententry != $file['name']) {
			printf("\n%s<img src='%s' width='%d' height='%d' border='0' alt='%s' /></a>\n",$view_html,$thumbententry,$dw,$dh,$file['name']);
		} else {
			printf("\n%s<small>%s <br /><br />(No Thumbnail)</small></a>\n",$view_html, wordwrap(urldecode($file['name']),14, ' ',1));
		}
		echo "</td>\n</tr>\n\n<tr>\n<td bgcolor='#B6CCCC'>\n";
		printf("<input type='checkbox' name='check[%s]' /></td>",$file['name']);


		printf('<td align="center" bgcolor="#B6CCCC" height="17">%sview</a>&nbsp;/&nbsp;', $view_html);

		if($thumb != $file['name']) {
			printf('<a href="javascript:pop(\'%s\');">edit</a></td>',$file['name']);
		} else {
			printf('<a href="javascript:pop(\'%s\');">create</a></td>',$file['name']);
		}

		echo '</tr></table></div>';

	}

	echo "\n</div>\n<br clear='all' />\n\n";

	printf("<table cellpadding='2'><tr><td bgcolor='#B6CCCC'>");
	echo '<a href="#" onclick=\'setCheckboxes("form1", true); return false;\'>'. lang('forms', 'c_all') .'</a> / ';
	echo '<a href="#" onclick=\'setCheckboxes("form1", false); return false;\'>'. lang('forms', 'c_none') .'</a>';
	echo '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;'. lang('forms', 'with_checked_files');
	echo '<select name="action" class="input"><option value="" selected="selected">'. lang('forms', 'choose') .'</option><option value="delete">'. lang('forms', 'delete') .'</option></select>';
	echo '&nbsp;&nbsp;<input type="submit" value="'. lang('go') .'" class="button" />';
	printf("</td></tr></table></form>");

	flush();

	StartForm('file_upload', 0, 'enctype="multipart/form-data"');

	echo "<br /><table border='0'>";

	GenSetting('',lang('upload','thisfile'),'',8,'',6);
	printf('<tr><td><input name="%s" type="file"  class="input" /></td><td>',$Cfg['upload_file_name']);
	printf('<input type="submit" value="%s" class="button" /></td></tr></table>',lang('go'));

	PageFooter();
}

/**
 * Opens images directory and splitting the
 * thumbnails from the original in 2 arrays.
 */
function getFileList() {
    global $fileArray, $thumbArray;
    $temparray = getFileListRecur();

    $fileArray = $temparray[0];
    $thumbArray = $temparray[1];


    return array($fileArray, $thumbArray);
}

function getFileListRecur($localpath="") {
    global $Paths;

    $localfileArray = Array();
    $localthumbArray = Array();

    $uploadPath = $Paths['upload_path'].$localpath;

    $dh = opendir($uploadPath) or die(lang('error','path_open'));

    while(false !== ($f = readdir($dh))) {
        $files[] = $f;
    }

    sort($files);

    foreach ($files as $f) {
        if(is_file($uploadPath.$f)) {
            $fileSize = round(filesize($uploadPath.$f)/1024);
            $fileDate = filemtime($uploadPath.$f);
            $fileDate = format_date(date('Y-m-d-H-i', $fileDate),'%day%-%month%-%ye% %hour24%:%minute%');
            if(!preg_match('/(\.thumb\.)/',$f)) {
                //$tmp = getImageSize($uploadPath.$f);
                $tmp = Array('name'=>$localpath . urlencode($f),  'date'=>$fileDate, 'size'=>$fileSize);
                array_push($localfileArray,$tmp);
            } else {
                //$tmp = getImageSize($uploadPath.$f);
                $tmp = Array('name'=>$localpath.$f, 'date'=>$fileDate, 'size'=>$fileSize);
                array_push($localthumbArray,$tmp);
            }
        } else if (is_dir($uploadPath.$f) && $f != "." && $f != "..") {
            $temparray = getFileListRecur("$localpath$f/");

            foreach($temparray[0] as $t) {
                array_push($localfileArray,$t);
            }
            foreach($temparray[1] as $t) {
                array_push($localthumbArray,$t);
            }
        }
    }
    closedir($dh);

    usort($localfileArray, 'filearray_sort');

    return array($localfileArray, $localthumbArray);
} 

function filearray_sort($a, $b) {
	if (strtolower($a['name']) == strtolower($b['name'])) return 0;
	return (strtolower($a['name']) < strtolower($b['name'])) ? -1 : 1;
}

/**
 * Check for a given filename, if we also have a matching thumbnail.
*/
function checkThumbAvailable($str)
{
	global $thumbArray;

	// first we split up the extension from filename
	// with a simple regexp... god i love regexp :-)
	preg_match('/^(.*)\.(.*)$/i',$str,$match);
	$compare = strtolower($match[1]);

	foreach($thumbArray as $val) {

		$thumb = strtolower(substr($val['name'],0,strlen($compare)));

		if($compare == $thumb) {
			// MATCH!!!
			$str = $val['name'];
			break;
		}
	}
	return $str;
}


/**
 * Gets the extension (if any) of a filename.
 *
 * @param string $file
 * @return string
 */
function getextension($file) {
	$pos=strrpos($file, ".");
	if (is_string ($pos) && !$pos) {
		return "";
	} else {
		$ext=substr($file, $pos+1);
		return $ext;
	}
}

/**
 * Formats all data in an entry according to the passed $format.
 *
 * @param array $entry
 * @param string $format
 * @return string
 */
function format_entry( $entry, $format) {

	// if format does nof contain '%' just return to save some processing time
	if (strpos($format, "%")=== FALSE) {
		return $format;
	}

	foreach ($entry as $key => $value) {
                if (is_array($value)) {
			$value = implode(', ',$value);
		}
		$format=str_replace("%$key%", $value, $format);
	}
	return $format;
}

/**
 * Formats date, according to the passed $format
 *
 * @param string $date
 * @param string $format
 * @param string $title
 * @return string
 */
function format_date( $date="", $format="", $title="") {
	global $Cfg, $current_date, $db;

	$english_day_array = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
	$english_month_array = array("Jan", "Feb", "Mar", "Apr", "May", "Jun",
		"Jul", "Aug", "Sep", "Oct", "Nov", "Dec");


	if ($format=="") { $format="%day% %monname% '%ye%"; }

	// if format does nof contain '%' just return to save some processing time
	if (strpos($format, "%")=== FALSE) {
		return $format;
	}

	if ($date=="") {$date= date("Y-m-d-H-i", get_current_date()); }
	list($yr,$mo,$da,$ho,$mi)=split("-",$date);

	$mktime = mktime(1,1,1,$mo,$da,$yr);
	$day = @date("w",$mktime);

	$ho12 = ($ho>11) ? $ho - 12 : $ho;
	$ampm= ($ho12==$ho) ? "am" : "pm";
	if ($ho12==0) { $ho12=12; }

	$format=str_replace("%minute%", $mi, $format);
	$format=str_replace("%hour12%", $ho12, $format);
	$format=str_replace("%ampm%", $ampm, $format);
	$format=str_replace("%hour24%", $ho, $format);
	$format=str_replace("%day%", $da, $format);
	$format=str_replace("%daynum%", $day, $format);
	$format=str_replace("%dayname%", lang ("days" , $day), $format);
	$format=str_replace("%dname%", lang ("days_abbr" , $day), $format);
	$format=str_replace("%english_dname%", $english_day_array[$day], $format);
	$format=str_replace("%weekday%", lang ("days" , $day), $format);
	$format=str_replace("%weeknum%", @date("W",$mktime), $format);
	$format=str_replace("%month%", $mo, $format);
	$format=str_replace("%monthname%", lang('months', -1+$mo), $format);
	$format=str_replace("%monname%", lang('months_abbr', -1+$mo), $format);
	$format=str_replace("%english_monname%", $english_month_array[-1+$mo], $format);
	$format=str_replace("%year%", $yr, $format);
	$format=str_replace("%ye%", substr($yr,2), $format);

	// === JM - 2004/09/12 ¥¥¥
	$format=str_replace("%aye%", "&#8217;".substr($yr,2), $format);
	$format=str_replace("%ordday%", 1*$da, $format);
	$format=str_replace("%ordmonth%", 1*$mo, $format);
	// === END JM ¥¥¥

	//while not part of 'dates', we also replace %title% with the
	//entry's, suitable for use in filenames
	$format=str_replace("%title%", safe_string(substr($title,0,28),TRUE) , $format);

	return $format;
}


/**
 * Formats date range, according to the passed format
 *
 * @param string $start_date
 * @param string $end_date
 * @param string $format
 * @return string
 */
function format_date_range( $start_date, $end_date, $format) {
	global $Cfg, $current_date;

	list($st_yr,$st_mo,$st_da)=split("-",$start_date);
	list($en_yr,$en_mo,$en_da)=split("-",$end_date);

	$mktime = mktime(1,1,1,$st_mo,$st_da,$st_yr);
	$day = @date("w",$mktime);

	$format=str_replace("%st_day%", $st_da, $format);
	$format=str_replace("%st_daynum%", $day, $format);
	$format=str_replace("%st_dayname%", lang ( "days" , $day), $format);
	$format=str_replace("%st_dname%", lang ("days_abbr" , $day), $format);
	$format=str_replace("%st_weekday%", lang ( "days" , $day), $format);
	$format=str_replace("%st_weeknum%", @date("W",$mktime), $format);
	$format=str_replace("%st_month%", $st_mo, $format);
	$format=str_replace("%st_monthname%", lang('months', -1+$st_mo), $format);
	$format=str_replace("%st_monname%", lang('months_abbr', -1+$st_mo), $format);
	$format=str_replace("%st_year%", $st_yr, $format);
	$format=str_replace("%st_ye%", substr($st_yr,2), $format);

	// === JM - 2004/09/12 ¥¥¥
	$format=str_replace("%st_aye%", "&#8217;".substr($st_yr,2), $format);
	$format=str_replace("%st_ordday%", 1*$st_da, $format);
	$format=str_replace("%st_ordmonth%", 1*$st_mo, $format);
	// === END JM ¥¥¥
	$mktime = mktime(1,1,1,$en_mo,$en_da,$en_yr);

	$format=str_replace("%en_day%", $en_da, $format);
	$format=str_replace("%en_daynum%", $day, $format);
	$format=str_replace("%en_dayname%", lang("days" , $day), $format);
	$format=str_replace("%en_dname%", lang ("days_abbr" , $day), $format);
	$format=str_replace("%en_weekday%", lang("days" , $day), $format);
	$format=str_replace("%en_weeknum%", @date("W",$mktime), $format);
	$format=str_replace("%en_month%", $en_mo, $format);
	$format=str_replace("%en_monthname%", lang('months',-1+$en_mo), $format);
	$format=str_replace("%en_monname%", lang('months_abbr',-1+$en_mo), $format);
	$format=str_replace("%en_year%", $en_yr, $format);
	$format=str_replace("%en_ye%", substr($en_yr,2), $format);

	// === JM - 2004/09/12 ¥¥¥
	$format=str_replace("%en_aye%", "&#8217;".substr($en_yr,2), $format);
	$format=str_replace("%en_ordday%", 1*$en_da, $format);
	$format=str_replace("%en_ordmonth%", 1*$en_mo, $format);
	// === END JM ¥¥¥

	return $format;
}



/**
 * Get a date in RFC 2822 format, which is _not_ localised!!
 *
 * @see http://www.faqs.org/rfcs/rfc2822
 *
 * @param string $time
 * @return string
 */
function get_rfcdate($time) {

    $day_array = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
	$month_array = array("","Jan", "Feb", "Mar", "Apr", "May", "Jun",
		"Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

    $date = date("r", $time);
    $date_arr = preg_split("/[ ]+/", $date);

    $date_arr[0] = $day_array[ date("w", $time) ] . ",";
    $date_arr[2] = $month_array[ date("n", $time) ];

    $date = implode(" ", $date_arr);

    return $date;

}

/**
 * Gets current Unix timestamp (in seconds) with microseconds, as a float.
 *
 * @return float
 */
function getmicrotime(){
	list($usec, $sec) = explode(" ",microtime());
	return ((float)$usec + (float)$sec);
}


/**
 * Calculates time that was needed for execution.
 *
 * @param string $type
 * @return string
 */
function timetaken($type="") {
	global $starttime;
	$endtime = getmicrotime();
	$time_taken = $endtime - $starttime;
	$time_taken= number_format($time_taken, 3);  // optional

	if ($type=="int") {
		return $time_taken;
	} else {
		return "<span class='timetaken'>$time_taken</span>";
	}
}


/**
 * Starts the timer.
 *
 * @param string $label The label/id for the starting timer.
 */
function start_timer($label) {
	global $timer_running_array, $timer_stopped_array, $timer_stack, $started_count;

	$started_count[] = $label;

	// if the last item on the stack is set, stop it.
	if (count($timer_stack)>0) {
		$stop = end($timer_stack);
		//debug("interrupt: ". $stop);

		if (isset($timer_running_array[$stop])) {
			$timer_stopped_array[$stop] += timetaken('int') - $timer_running_array[$stop];
			unset ($timer_running_array[$label]);
		}

	}


	//debug("start: $label");
	$timer_running_array[$label] = timetaken('int');
	$timer_stack[]=$label;

}


/**
 * Stops the timer.
 *
 * @param string $label The label/id for the stoping timer.
 */
function stop_timer($label) {
	global $timer_running_array, $timer_stopped_array, $timer_stack, $stopped_count;

	$stopped_count[] = $label;

	if (!isset($timer_stopped_array[$label])) { $timer_stopped_array[$label] = 0; }

	if (isset($timer_running_array[$label])) {
		//debug("stop $label:" . ( timetaken('int')  - $timer_running_array[$label]));
		$timer_stopped_array[$label] += timetaken('int') - $timer_running_array[$label];
		unset ($timer_running_array[$label]);

		array_pop($timer_stack);
		$continue = end($timer_stack);
		//debug("continue: ". $continue);

		$timer_running_array[$continue] = timetaken('int');

	}

}

/**
 * Prints stopped (and any running) timers.
 *
 * @return string
 */
function print_timers() {
	global $timer_running_array, $timer_stopped_array, $timer_stack, $started_count, $stopped_count;

	if (!isset($started_count)) { return; }

	// see if we opened more than we closed..
	foreach ($started_count as $value) { $open_count[$value]++; }
	foreach ($stopped_count as $value) { $open_count[$value]--; }
	foreach ($open_count as $key => $value) {
		if ($value <> 0) {
			echo "<b>$key = $value</b><br />";
		}
	}

	arsort($timer_stopped_array);

	echo "<pre>timer array:";
	print_r($timer_stopped_array);
	echo "</pre>";

}


/**
 * Prints a row for an entry in the entries screen.
 *
 * @param array $entry
 */
function print_row(&$entry){
	global $db, $linecount, $Pivot_Vars, $Users;

	if($entry['code']=="") { return; }

	if (!isset($linecount)) {
		$linecount=1;
	} else {
		$linecount++;
	}

	if (($linecount % 2)==0) {
		$bg_color="tabular_line_even";
	} else {
		$bg_color="tabular_line_odd";
	}


	printf("	<tr class='%s'>\n", $bg_color);

	printf("<td><input type='checkbox' name='check[%s]' /></td>",  $entry['code']);

	//if ( !isset($entry['status'])) { $entry['status']="hold"; }

	if ( $entry['status']=='publish' ) {
		//$pubdate = "published on: ". format_date($entry['publish_date'], "%day%-%monname%-%ye% %hour24%:%minute%");
		printf("		<td><a href=\"javascript:open_preview('%s')\">published</a>&nbsp;&nbsp;</td>\n", $entry['code']);
	} else {
		//$pubdate = "publish on: ". format_date($entry['publish_date'], "%day%-%monname%-%ye% %hour24%:%minute%");
		printf("		<td>%s&nbsp;&nbsp;</td>\n", $entry['status']);
	}

	//


	// You can only edit your own entries, or the entries of someone who has a
	// lower userlevel, or if you're 'Admin'
	$user = $Pivot_Vars['user'];
	$userlevel = $Users[$user]['userlevel'];
	// If the entry's user (author) no longer exists, set the userlevel to
	// normal (so advanced users and admins can edit it).
	$entryuserlevel = (isset($Users[$entry['user']]) ? $Users[$entry['user']]['userlevel'] : 1);
	if ( ($user==$entry['user']) || ($userlevel> $entryuserlevel) || ($userlevel>=3) ) {
		$editurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=modify&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
		printf("		<td width='200'><span class='tabular'><a href='%s' title='%s'>%s</a></span></td>\n", $editurl, 'edit this entry',   trimtext($entry['title'], 30, TRUE));
	} else {
		printf("		<td width='200'><span class='tabular'><b>%s</b></span></td>\n",   trimtext($entry['title'], 30, TRUE));
	}

	if (is_array($entry['category'])) {
		$mycat = implode(", ",$entry['category']);
		printf("		<td><span title='%s'>%s</span></td>\n", $mycat, trimtext($mycat,14));
	} else {
		if ($entry['category']=="") { $entry['category']="(none)"; }
		printf("		<td>%s</td>\n", $entry['category']);
	}
	printf("		<td>%s</td>\n", $entry['user']);
	$date1= format_date($entry['date'], "%day%-%monname%-%ye% %hour24%:%minute%");
	//$date2= "created on: ". format_date($entry['edit_date'], "%day%-%monname%-%ye% %hour24%:%minute%")." / last edited on: ". format_date($entry['edit_date'], "%day%-%monname%-%ye% %hour24%:%minute%");
	printf("		<td class='tabular'>%s</td>\n", $date1);
	if ($entry['commcount']>0) {

		// You're only allowed to edit comments for your own entries if you're userlevel 2,
		// or for other entries if you're admin.
		if (  ( ($Pivot_Vars['user']==$entry['user']) && ($Users[$Pivot_Vars['user']]['userlevel']>=2) ) || ($Users[$Pivot_Vars['user']]['userlevel']>=3) ) {
			$commurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
			printf("		<td><a href='%s' title=\"%s\">%s</a></td>\n", $commurl, $entry['cnames'], $entry['commcount']);
		} else {
			printf("		<td>%s</td>\n", $entry['commcount']);
		}


	} else {
		printf("		<td>0</td>\n");
	}
        if ($entry['trackcount']>0) {

		// You're only allowed to edit comments for your own entries if you're userlevel 2,
		// or for other entries if you're admin.
		if (  ( ($Pivot_Vars['user']==$entry['user']) && ($Users[$Pivot_Vars['user']]['userlevel']>=2) ) || ($Users[$Pivot_Vars['user']]['userlevel']>=3) ) {
			$trackurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
			printf("		<td><a href='%s' title=\"%s\">%s</a></td>\n", $trackurl, $entry['tnames'], $entry['trackcount']);
		} else {
			printf("		<td>%s</td>\n", $entry['trackcount']);
		}


	} else {
		printf("		<td>0</td>\n");
	}
        printf("	</tr>\n\n");

}


/**
 * Prints a row for an entry in the overview screen.
 *
 * @param array $entry
 */
function print_row_overview(&$entry){
	global $db, $linecount, $Pivot_Vars, $Users;

	if($entry['code']=="") { return; }

	if (!isset($linecount)) {
		$linecount=1;
	} else {
		$linecount++;
	}

	if (($linecount % 2)==0) {
		$bg_color="tabular_line_even";
	} else {
		$bg_color="tabular_line_odd";
	}


	printf("	<tr class='%s'>\n", $bg_color);


	// You can only edit your own entries or the entries of someone who has a
	// lower userlevel, or if you're 'Admin'
	if ( ($Pivot_Vars['user']==$entry['user']) || ($Users[$Pivot_Vars['user']]['userlevel']> $Users[$entry['user']]['userlevel']) || ($Users[$Pivot_Vars['user']]['userlevel']>=3) ) {
		$editurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=modify&amp;id=%s",
		$Pivot_Vars['session'], $entry['code']);
		printf("		<td class='tabular-small'><a href='%s' title='%s'>%s</a></td>\n",
		$editurl, 'edit this entry',   trimtext($entry['title'], 22, TRUE));
	} else {
		printf("		<td class='tabular-small'><b>%s</b></td>\n",
		trimtext($entry['title'], 22, TRUE));
	}


	printf("		<td class='tabular-small'>%s</td>\n", $entry['user']);
	$date1= format_date($entry['date'], "%day%-%monname%-%ye%");

	printf("		<td class='tabular-small'>%s</td>\n", $date1);
	if ($entry['commcount']>0) {

		// You're only allowed to edit comments for your own entries if you're userlevel 2,
		// or for other entries if you're admin.
		if (  ( ($Pivot_Vars['user']==$entry['user']) && ($Users[$Pivot_Vars['user']]['userlevel']>=2) ) || ($Users[$Pivot_Vars['user']]['userlevel']>=3) ) {
			$commurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
			printf("		<td class='tabular-small'><a href='%s' title=\"%s\">%s</a></td>\n", $commurl, $entry['cnames'], $entry['commcount']);
		} else {
			printf("		<td class='tabular-small'>%s</td>\n", $entry['commcount']);
		}


	} else {
		printf("		<td>0</td>\n");
	}
        if ($entry['trackcount']>0) {

		// You're only allowed to edit comments for your own entries if you're userlevel 2,
		// or for other entries if you're admin.
		if (  ( ($Pivot_Vars['user']==$entry['user']) && ($Users[$Pivot_Vars['user']]['userlevel']>=2) ) || ($Users[$Pivot_Vars['user']]['userlevel']>=3) ) {
			$trackurl=sprintf("index.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;id=%s", $Pivot_Vars['session'], $entry['code']);
			printf("		<td class='tabular-small'><a href='%s' title=\"%s\">%s</a></td>\n", $trackurl, $entry['tnames'], $entry['trackcount']);
		} else {
			printf("		<td class='tabular-small'>%s</td>\n", $entry['trackcount']);
		}


	} else {
		printf("		<td>0</td>\n");
	}
	printf("	</tr>\n\n");

}

/**
 * Prints the last comments in the overview screen.
 *
 * @param int $num
 */
function last_comments_overview($num) {
	global $Pivot_Vars;


	// First check if there are any comments waiting to be moderated..

	if (file_exists("db/ser_modqueue.php")) {
		$modqueue = array_reverse(load_serialize("db/ser_modqueue.php", true, true));
	} else {
		$modqueue = array();
	}

	if (count($modqueue)>0) {

		printf("<table cellspacing='0' class='tabular_border' border='0' width='340'
				style='margin-top:6px;'>\n<tr class='tabular_nav'>\n<td colspan='2'>\n%s</td></tr>",
					lang("userbar","moderate_comments"));

		$msg = lang("userbar","moderate_comments_desc");
		$msg = str_replace("%1", count($modqueue), $msg);
		printf("\n<tr>\n<td colspan='2' style='white-space:normal;'>\n<p><a href='index.php?menu=moderate_comments&amp;session=%s'>", $Pivot_Vars['session']);
		printf("%s</a></p>\n</td>\n</tr>\n</table>\n<br>\n\n", $msg);

	}



	// Then display the last comments..
	if (file_exists("db/ser_lastcomm.php")) {
		$lastcomments = array_reverse(load_serialize("db/ser_lastcomm.php", true, true));
	} else {
		$lastcomments = array();
	}

	if (count($lastcomments)>0) {

		printf("<table cellspacing='0' class='tabular_border' border='0' width='340'
				style='margin-top:6px;'>\n<tr class='tabular_nav'>\n<td colspan='2'>\n<span style='float:right'>( ");


		// Only print the (more) links we've not currently selected.
		if ($num!=5) {
				$morelink = sprintf("index.php?session=%s&amp;menu=main&amp;morecomments=5", $Pivot_Vars['session']);
				printf('<a href="%s">5</a> ', $morelink );
		}


		if ($num!=20) {
				$morelink = sprintf("index.php?session=%s&amp;menu=main&amp;morecomments=20", $Pivot_Vars['session']);
				printf('<a href="%s">20</a> ', $morelink );
		}

		if ($num!=60) {
				$morelink = sprintf("index.php?session=%s&amp;menu=main&amp;morecomments=60", $Pivot_Vars['session']);
				printf('<a href="%s">60</a> ', $morelink );
		}


		printf(')</span>%s</td></tr>', lang("userbar","recent_comments"));

		$linecount = 1;
		foreach ($lastcomments as $lastcomment) {

			if (($linecount % 2)==0) {
				$bg_color="tabular_line_even";
			} else {
				$bg_color="tabular_line_odd";
			}


			$name = trimtext($lastcomment['name'], 22, FALSE);
			$date = format_date($lastcomment['date'], "%day%-%monname%-%ye% %hour24%:%minute%");
			$comm = trimtext($lastcomment['comment'], 78, FALSE);
			$comm = mywordwrap($comm, 20, "  ", 1);

			$link=sprintf("index.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;", $Pivot_Vars['session']);
			$editlink=sprintf("%sid=%s#a%s", $link, $lastcomment['code'], $lastcomment['date']);
			$dellink=sprintf("%sid=%s&amp;del=%s",
					$link, $lastcomment['code'], urlencode($lastcomment['name']."@".$lastcomment['date']));
			$reportpopup=sprintf("openReportComment('%s', '%s','%s', '%s');",
					$Pivot_Vars['session'], $lastcomment['code'], urlencode($lastcomment['name']."@".$lastcomment['date']), $dellink);




			printf("<tr class='%s'><td class='tabular-small'><a href='%s'>%s</a><br /><span class='date'>%s</span></td>",
					$bg_color,
					$editlink,
					$name,
					$date
				);

			printf("<td valign='top' class='tabular-small' style='white-space: normal;'>");
			printf("<span style='float:right'><a href='%s' title='%s'>[D]</a>",
					$dellink,
					lang('entries', 'delete_comment')
				);
			printf("<a href='#' onclick=\"%s\" title='%s'>[R]</a></span>%s</td></tr>",
					$reportpopup,
					lang('entries', 'report_comment'),
					$comm
				);

			if ( ($linecount++)>=$num) { break; }

		}

		/*
		echo '<tr class="tabular_nav"><td colspan="2"><form id="oneclickdelete" name="oneclickdelete">';
		printf('<input type="checkbox" value="1" %s /> %s',
				($cfg['oneclickdelete']==1) ? 'checked="checked"' : '',
				lang('comment', 'oneclickreport')
			);
		echo '</form></td></tr>';
		*/

		echo '</table><br />';

	}


}

/**
 * Gets an array with available themes.
 *
 * @return array
 */
function getthemes() {


	$themes = array();
	$dh = opendir('theme/');
		while($fname = readdir($dh)) {
			if(preg_match('!(.*?)_theme.inc.php!', $fname, $null)){
				$themefile = file('theme/'.$fname);
				array_push($themes, trim(substr($themefile[1], 2, -1)), $null[1]);
			}
		}
		$themefile = '';
	closedir($dh);

	return $themes;
}


/**
 * Gets an array with available templates.
 *
 * @param string $filter
 * @return array
 */
function gettemplates($filter="") {
	$d= dir("templates");
	while ($entry=$d->read()) {
		$ext=getextension($entry);
		if (($ext=="htm")||($ext=="html")) {

			$templates[]= $entry;
			$templates[]= $entry;

		}
	}
	$d->close();

	// remove _sub_commentform.. it's evil!
	foreach ($templates as $key => $val) {
		if ($val=="_sub_commentform.html") { unset($templates[$key]); }
	}

	sort($templates);

	if ($filter!="") {
		foreach ($templates as $template) {
			if (strpos($template, $filter) !== FALSE) {
				$filtered[]=$template;
			}
		}

		// only filter if there are at least two (otherwise it breaks for people who
		// do upgrades)..
		if (count($filtered)>3) {
			return $filtered;
		} else {
			return $templates;
		}

	} else {
		return $templates;

	}

}


/**
 * Returns a bit of HTML to insert a select with all available categories
 *
 * @param string $type
 * @return string
 */
function get_categories_select($type="single") {
	global $db, $Cfg, $Pivot_Vars;

	$allcats = cfg_cats();

	// if we're logged in, we select the categories in which
	// the current user is allowed to post entries.
	if (isset($Pivot_Vars['user'])) {
		$cats = array();
		foreach ($allcats as $cat) {

			if (in_array($Pivot_Vars['user'], $cat['allowed'])) {
				$cats[] = $cat['name'];
			}
		}
	} else {
		// else just select them all.
		$cats = array();
		foreach ($allcats as $cat) {
			$cats[] = $cat['name'];
		}
	}


	$output="";

	if (isset($db)) {
		$this_cat=$db->entry['category'];
	} else {
		// set a default category..
		$this_cat=array($cats[0]);
	}

	if ($type=="single") {

		$output="<select name='f_catsing' class='input' id='f_catsing' onChange='syncCat1(this);'>";

		foreach ($cats as $cat) {

			$cat= trim($cat);
			@$sel = (in_array($cat, $this_cat)) ? " selected" : "";
			$output.="<option value='$cat'$sel>$cat</option>\n";


		}

		$selmul = (count($this_cat)>1) ? " selected" : "";
		$selnone = (count($this_cat)<1) ? " selected" : "";

		$output.="<option value='(multiple)' ".$selmul.">(multiple)</option>\n";
		$output.="<option value='(none)' ".$selnone.">(none)</option>\n";

		$output.="</select>&nbsp;";
	} else {

		$output="<select name='f_catmult[]' size='6' multiple='multiple' class='input' style='height: auto;' id='f_catmult' onChange='syncCat2(this);'>";
		foreach ($cats as $cat) {
			$cat= trim($cat);
			@$sel = (in_array($cat, $this_cat)) ? " selected" : "";
			$output.="<option value='$cat'$sel>$cat</option>";
		}

		$output.="</select>&nbsp;";

	}



	return $output;
}


/**
 * Returns the number of categories
 *
 * @return int
 */
function get_categories_num() {

	return count(cfg_cats());

}


/**
 * returns 'true' if it finds a category in $theEntryCats
 * that isn't in $theExclusionCats, else returns false
 * determines if an entry can be indexed based on current exclusion categories
 */
function can_search_cats( $theExclusionCats,$theEntryCats ) {

	// special case - if array empty then return true
	// cannot have an exclusion in that case...

	if( 0 == count( $theExclusionCats )) { return TRUE; }

	foreach( $theEntryCats as $catValue ) {
		foreach( $theExclusionCats as $excluValue ) {
			if( $catValue!=$excluValue ) { return TRUE; }
		}
	}
	return FALSE;
}


/**
 * used by 'cfg_cat_nosearchindex()' and 'cfg_cats()'
 */
function cfg_getarray( $theArrayName ) {
	global $Cfg;

	$thisArray = explode( '|',$Cfg[$theArrayName] );

	natcasesort( $thisArray);

	foreach( $thisArray as $key => $value) {
		if( ''==$value ) { unset( $thisArray[$key] ); }
	}
	return $thisArray;
}


/**
 * Returns $Cfg['cats-searchexclusion'] as an array sorted and without empty ones.
 *
 * @return array
 */
function cfg_cat_nosearchindex() {
	$thisArray = cfg_getarray( 'cats-searchexclusion' );
	return $thisArray;
}


/**
 * Return $Cfg['cats'] as an array sorted and without empty ones.
 *
 * @return array
 */
function cfg_cats() {
	global $Cfg;

	$tempArray = cfg_getarray('cats');

	// make the array keyed..
	foreach($tempArray as $cat) {
		$thisArray[$cat]['name'] = $cat;
	}


	// get the array of order, and clean up the cats-order, while we're at it
	if (isset($Cfg['cats-order'])) {
		$temp_arr = explode("|-|", $Cfg['cats-order']);
		foreach($temp_arr as $key => $temp_item) {
			list ($cat, $order) = explode('|', $temp_item);
			if (isset($thisArray[$cat])) {
				$thisArray[$cat]['order'] = $order;
			} else {
				unset($temp_arr[$key]);
			}
		}
		$Cfg['cats-order'] = implode("|-|", $temp_arr);
	}

	// get the searchexclusions..
	$tempArray = cfg_getarray('cats-searchexclusion');
	foreach($tempArray as $cat) {
		$thisArray[$cat]['searchexclusion'] = 1;
	}

	// get the public status..
	$tempArray = cfg_getarray('cats-nonpublic');
	foreach($tempArray as $cat) {
		$thisArray[$cat]['nonpublic'] = 1;
	}


	// get the hidden status..
	$tempArray = cfg_getarray('cats-hidden');
	foreach($tempArray as $cat) {
		$thisArray[$cat]['hidden'] = 1;
	}



	// get the allowed users..
	foreach ($thisArray as $key => $cat) {
		$thisArray[$key]['allowed'] = cfg_getarray('cat-'. $key);
	}

	// sort them by 'order'
	usort($thisArray, "category_sort");

	// unfortunately, usort destroys the keys.. put back the the keys..
	foreach ($thisArray as $key => $value) {
		unset($thisArray[$key]);
		if ($value['name'] != "") {
			$thisArray[ $value['name'] ] = $value;
		}
	}

	return $thisArray;
}


// Sort the categories array by order..
function category_sort($a, $b) {
   if ($a['order'] == $b['order']) {
        return strcasecmp($a['name'], $b['name']) ;
   }
   return ($a['order'] < $b['order']) ? -1 : 1;
}

function category_simplesort($a, $b) {
	global $allcats;

	if ($allcats[$a]['order'] == $allcats[$b]['order']) {
        return strcasecmp($a, $b) ;
   }
   return ($allcats[$a]['order'] < $allcats[$b]['order']) ? -1 : 1;
}

/**
 * Finds which weblogs publish a certain category.
 *
 * @param mixed $cats
 * @return array
 */
function find_weblogs_with_cat($cats) {
	global $Weblogs;

	// $cats might be a string with one cat, if so, convert to array
	if (is_string($cats)) {
		$cats= array($cats);
	}

	$res=array();

	// search every weblog for all cats
	foreach ($Weblogs as $key => $weblog) {
		foreach ($cats as $cat) {
			if (in_array($cat, $weblog['categories'])) {
				$res[]=$key;
			}
		}

	}
	return array_unique($res);
}

/**
 * Finds which cats are published by a certain blog.
 *
 * @param string $weblog
 * @return array
 */
function find_cats_in_weblog($weblog) {
	global $Weblogs;
	return $Weblogs[$weblog]['categories'];
}

/**
 * Finds the current weblog based on w GET/POST parameter (if available).
 *
 * If a weblog can't be determined from the w parameter, an empty string is
 * returned.
 *
 * @param boolean $abort_on_failure
 * @return string
 */
function find_current_weblog_request($abort_on_failure = true) {
	global $Weblogs, $Pivot_Vars;
	$override_weblog = "";
	if (isset($Pivot_Vars['w']) && ($Pivot_Vars['w'] != "")) {
		$override_weblog = weblog_from_para($Pivot_Vars['w']);
		if (!$override_weblog && $abort_on_failure) {
			piv_error("Weblog doesn't exist","Selected weblog \"".
			htmlspecialchars($Pivot_Vars['w'])."\" doesn't exist.");
		}
	}
	return $override_weblog;
}

/**
 * Finds the current weblog based on HTTP_REFERER (if available).
 *
 * We check if the referer can be matched to a weblog's homepage. If
 * a weblog can't be determined from HTTP_REFERER, an empty string is
 * returned.
 *
 * @return string
 */
function find_current_weblog_referer() {
	global $Weblogs, $Pivot_Vars, $Paths;
	$override_weblog = "";
	$referer = str_replace("http://".$Pivot_Vars['HTTP_HOST'], "", $Pivot_Vars['HTTP_REFERER']);
	if ($referer!="") {
		foreach($Weblogs as $weblogkey => $weblog) {
			$filename = fixpath($Paths['pivot_url'] . $weblog['front_path'] . $weblog['front_filename']);
			if ( ($referer == $filename) ||
				($referer == preg_replace("#/index.[^.]{2,4}$#i", "/", $filename)) ||
				($referer == preg_replace("#/default.[^.]{2,4}$#i", "/", $filename))) {
				$override_weblog = $weblogkey;
			}
		}
	}
	return $override_weblog;
}

/**
 * Sets the current weblog.
 *
 * If the input parameter is an empty string, i.e., we were unable to detect
 * the weblog, the first weblog in the $Weblogs array is selected.
 *
 * @param mixed $weblog
 * @return void
 */
function set_current_weblog($weblog) {
	global $Current_weblog, $Weblogs;
	if (!empty($weblog)) {
		$Current_weblog = $weblog;
	} else {
		reset($Weblogs);
		$Current_weblog = key($Weblogs);
	}
}

// merge a split date
function fix_date($date, $time) {

	//debug("date: $date , $time " );

	list($month, $day, $year)=split('[ /.:-]',$date);
	@list($hour,$minute,$sec)=split('[ /.:-]',$time);

	//$reverse_month=array_flip ($lang['Months']);

	//$month=1+$reverse_month[$month];

	return sprintf("%04d-%02d-%02d-%02d-%02d", $year, $month, $day, $hour, $minute);

}

/**
 * Returns an absolute path to the front or archive page for the current
 * weblog.
 *
 * NB! Currently only reports the path to the frontpage and
 * hence only works if $type is set to "index".
 *
 * @param string type
 * @return string
 */
function get_log_url($type) {
	global $Weblogs, $Current_weblog, $db, $Paths;

	if ($type=='index') {
		if ($Weblogs[$Current_weblog]['front_path'][0] == '/') {
			$path = $Weblogs[$Current_weblog]['front_path'] . $Weblogs[$Current_weblog]['front_filename'];
		} else {
			$path = $Paths['pivot_url'] . $Weblogs[$Current_weblog]['front_path'] . $Weblogs[$Current_weblog]['front_filename'];
		}
		$path = fixPath($path);
	}

	// debug ("get_log_url path: ".$path);

	return $path;

}

/**
 * Sets the local absolute URL to the (current) weblog directory.
 *
 * @return void
 */
function set_paths_log_url() {
	global $Paths;

	$Paths['log_url'] = dirname(get_log_url('index'))."/";
	if ($Paths['log_url'] == "//") { $Paths['log_url']="/"; }
}

/**
 * Cleans up/fixes a relative paths.
 *
 * As an example '/site/pivot/../index.php' becomes '/site/index.php'.
 *
 * @param string $path
 * @return string
 */
function fixPath($path) {
	$path = str_replace("\/", "/", $path);
	$path      = ereg_replace('/+', '/', $path);
	$patharray = explode('/', $path);
	foreach ($patharray as $item) {
		if ($item == "..") {
			// remove the previous element
			@array_pop($new_path);
		} else if ( ($item != ".") ) {
			$new_path[]=$item;
		}
	}
	return implode("/", $new_path);
}

/**
 * Ensures that paths in the weblog config ends with a slash (as assumed
 * by the Pivot internals).
 *
 * @param string $path
 * @return string
 */
function fixPathSlash($path) {
        $path .= "/";
	$path = str_replace("//", "/", $path);
	return $path;
}

/**
 * Recursively creates chmodded directories.
 *
 * NB! Directories are created with permission 777 - worldwriteable -
 * unless you have added a line 'chmod_dir|XYZ' to pv_cfg_settings.php.
 *
 * @param string $name
 */
function makedir($name) {
	global $Cfg;

	// if it exists, just return.
	if (file_exists($name)) {
		return;
	}

	// if more than one level, try parent first..
	if (dirname($name) != ".") {
		makedir(dirname($name));
	}

	// use permission if set in pv_cfg_settings.php
	if (isset($Cfg['chmod_dir'])) {
		$mode = '0'.$Cfg['chmod_dir'];
	} else {
		$mode = '0777';
	}
	$mode_dec = octdec($mode);

	$oldumask = umask(0);
	@mkdir ($name, $mode_dec);
	@chmod ($name, $mode_dec);
	umask($oldumask);

}

/**
 * Builds the frontpage, recent archives and static entry pages.
 *
 * @uses generate_pages generates the pages.
 *
 * @param boolean $verbose
 * @return void
 */
function buildfrontpage_function($verbose = true) {
	global $db, $Pivot_Vars, $Cfg, $VerboseGenerate, $pivot_path, $Weblogs;

	$db = new db();

	if (isset($Cfg['rebuild_look_back'])) {
		$look_back = $Cfg['rebuild_look_back'];
	} else {
		$look_back = 3;
	}

	$amount = max(4, $look_back*(count($Weblogs)));
	$overview_arr = $db->getlist(-$amount,0,"","", FALSE);

	$VerboseGenerate = $verbose;

	foreach ($overview_arr as $entry) {
		generate_pages($entry['code'], TRUE, TRUE, TRUE, FALSE);
	}

}




function getdaterange($date, $unit) {

	$numdaysin = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

	list($yr,$mo,$da,$ho,$mi)=split("-",$date);

	$yr_min = $yr_max = $yr;
	$mo_min = $mo_max = $mo;

	if ($unit=='day') {

		$range_min = date("Y-m-d-00-00", mktime(0,0,0,$mo,$da,$yr));
		$range_max = date("Y-m-d-23-59", mktime(0,0,0,$mo,$da,$yr));

	} else if ($unit=='week') {

		$dow = ((@date("w", mktime(0,0,0,$mo,$da,$yr)) + 6) % 7);
		$range_min = @date("Y-m-d-00-00", mktime(0,0,0,$mo,($da-$dow),$yr));
		$range_max = @date("Y-m-d-23-59", mktime(0,0,0,$mo,($da-$dow+6),$yr));

	} else if ($unit=='month'){

		$da_min = '01';
		$da_max = $numdaysin[(0+$mo_max)];

		// put the ranges back together.
		$range_min = sprintf("%02d-%02d-%02d-00-00", $yr_min,$mo_min,$da_min);
		$range_max = sprintf("%02d-%02d-%02d-23-59", $yr_max,$mo_max,$da_max);

	} else {

		$mo_min = '01';
		$mo_max = '12';
		$da_min = '01';
		$da_max = '31';

		// put the ranges back together.
		$range_min = sprintf("%02d-%02d-%02d-00-00", $yr_min,$mo_min,$da_min);
		$range_max = sprintf("%02d-%02d-%02d-23-59", $yr_max,$mo_max,$da_max);

	}

	return array($range_min, $range_max);

}


function entries_action ($do_action, $do_entries) {
	global $Pivot_Vars;

	// if deleting, this is serialized
	if (!is_array($do_entries)) {
		$do_entries = unserialize(stripslashes($do_entries));
	}

	// Do not combine search with actions.
	unset($Pivot_Vars['search']);

	foreach ($do_entries as $do_entry => $dummy) {
		if ($do_action=="delete") { entries_action_delete($do_entry); }
		if ($do_action=="hold") { entries_action_hold($do_entry); }
		if ($do_action=="publish") { entries_action_publish($do_entry); }
		if ($do_action=="generate") { entries_action_generate($do_entry); }
	}


	buildfrontpage_function(false);

}

// 2004/12/28 =*=*= JM - bug report 0056 - problems if $last_comms isn't an array on windows servers
function entries_action_delete( $code ) {
    global $db, $Pivot_Vars, $Users;

    $db = new db();

    if ($db->get_entries_count()<2) {
     	echo "<p>".lang('general', 'cantdeletelast')."</p>";
    	return;
    }


    $db->read_entry( $code );
    // checking to see whether user is allowed to delete the entry goes here
    if(( $Pivot_Vars['user'] == $db->entry['user'] ) || ( $Users[$Pivot_Vars['user']]['userlevel'] >= 3 )) {

        if (file_exists("db/ser_lastcomm.php")) {
		 $last_comms = load_serialize("db/ser_lastcomm.php", true, true);
	} else {
		 $last_comms = array();
	}

        if(( count( $last_comms ) > 0 ) && ( is_array( $last_comms ))) {
            foreach( $last_comms as $key => $last_comm ) {
                if(( $last_comm['code'] == $code )) {
                    unset( $last_comms[$key] );
                }
            }
            save_serialize( "db/ser_lastcomm.php", $last_comms );
        }

        $db->delete_entry();
    } else {

        $msg = "<p>".lang('general', 'cantdelete')."</p>";
        $msg = str_replace( "%title%","'".$db->entry['title']."'",$msg );
        echo $msg;
    }

}


function entries_action_hold($code) {
	global $db, $Pivot_Vars, $Users;

	$db = new db();
	$db->read_entry($code);

	// checking to see whether user is allowed to hold the entry goes here
	if ( ($Pivot_Vars['user'] == $db->entry['user']) || ($Users[$Pivot_Vars['user']]['userlevel'] >= 3) ) {
		$entry= $db->entry;
		$entry['status']="hold";

		$db->set_entry($entry);
		$db->save_entry();

	} else {
		$msg = lang('general', 'cantdothat');
		$msg = str_replace("%title%", "'".$db->entry['title']."'", $msg);
		echo $msg."<br />";
	}
}

function entries_action_publish($code) {
	global $db, $Pivot_Vars, $Users;

	$db = new db();
	$db->read_entry($code);

	// checking to see whether user is allowed to publish the entry goes here
	if ( ($Pivot_Vars['user'] == $db->entry['user']) || ($Users[$Pivot_Vars['user']]['userlevel'] >= 3) ) {
		$entry= $db->entry;
		$entry['status']="publish";
		$db->set_entry($entry);
		$db->save_entry();
		notify_new('entry',$entry);
	} else {
		$msg = lang('general', 'cantdothat');
		$msg = str_replace("%title%", "'".$db->entry['title']."'", $msg);
		echo $msg."<br />";
	}
}

function entries_action_generate($code) {
	global $db, $Pivot_Vars, $Users;

	$db = new db();
	$db->read_entry($code);

	// checking to see whether user is allowed to generate the entry goes here
	if ( ($Pivot_Vars['user'] == $db->entry['user']) || ($Users[$Pivot_Vars['user']]['userlevel'] >= 3) ) {
		$entry= $db->entry;
		if ($entry['status']!="publish") {
			$entry['status']="publish";
			$db->set_entry($entry);
			$db->save_entry();
			notify_new('entry',$entry);
		}
		generate_pages($entry['code'], TRUE, TRUE, TRUE, FALSE);
	} else {
		$msg = lang('general', 'cantdothat');
		$msg = str_replace("%title%", "'".$db->entry['title']."'", $msg);
		echo $msg."<br />";
	}
}


/**
 * Process a comment for moderation. Action 1 = allow,
 * action 2 = delete.
 *
 * When allowed, the comment is changed in the entry, so it is displayed, and it
 * is added to the last_comments. Whene deleted it'll be deleted from the entry
 *
 * @param array $comm
 * @param integer $action
 */
function moderate_process($comm, $action) {
	global $db, $Paths, $Current_weblog, $Cfg;

	if (!isset($db)) {
		$db = new db();
	}

	if ($action==1) {
		// Allow comment.

		// First, get the entry..
		$entry = $db->read_entry($comm['code'], true);

		$send_notifaction = false;

		foreach ($entry['comments'] as $key => $loopcomm) {

			if (($loopcomm['name']==$comm['name']) && ($loopcomm['date']==$comm['date'])) {

				// fix the entry..
				$entry['comments'][$key]['moderate'] = 0;

				// Store the comment that's approved. We need it a bit later on to send the notifications
				$modcomment = $entry['comments'][$key];

				// Save it..
				$db->set_entry($entry);
				$db->save_entry();

				// Add it to the 'last comments'..
				if (file_exists("db/ser_lastcomm.php")) {
					 $lastcomm = load_serialize("db/ser_lastcomm.php", true, true);
				} else {
					 $lastcomm = array();
				}
				$lastcomm[] = $comm;

				if (count($lastcomm)>$Cfg['lastcomm_amount_max']) {
					array_shift ($lastcomm);
				}

				save_serialize("db/ser_lastcomm.php", $lastcomm );
				$send_notifaction = true;

			}

		}

		// Regenerate the entry page (if it's static) and the corresponding archive page.
		generate_pages($comm['code'], TRUE, FALSE, TRUE, FALSE, FALSE);

		if ($send_notifaction) {
			// We need to determine the current weblog..
			$weblogs = find_weblogs_with_cat($entry['category']);
			$Current_weblog = current($weblogs);

			// Handle the users that want to be notified via email..
			notify_new('comment',array($entry,$modcomment));
		}


	} else if ($action==2) {
		// Delete comment.

		// First, get the entry..
		$entry = $db->read_entry($comm['code'], true);

		foreach ($entry['comments'] as $key => $loopcomm) {

			if (($loopcomm['name']==$comm['name']) && ($loopcomm['date']==$comm['date'])) {

				// fix the entry..
				unset($entry['comments'][$key]);

				// Save it..
				$db->set_entry($entry);
				$db->save_entry();

			}
		}
	}

}



/**
 * Delegates the (file) action to the correct function.
 *
 * @param string $do_action The action to execute
 * @param array $do_files The files to be handled
 */
function files_action ($do_action, $do_files) {
	foreach ($do_files as $do_file => $dummy) {
		if ($do_action=="delete") {
			// File names are URL encoded in the file form
			files_action_delete(urldecode($do_file));
		}
	}
}

/**
 * Deletes a template or uploaded file.
 *
 * Uses the global variable $Pivot_Vars['do'] to select what type of file to delete.
 * @param string $name Filename (without the directory path)
 */
function files_action_delete($name) {
	global $Cfg, $Pivot_Vars, $Paths;

	if($Pivot_Vars['do'] == 'templates') {
		unlink($Paths['templates_path'] . $name);
	} else {
		unlink($Paths['upload_path'] . $name);
		$thumbname = preg_replace("/(.*)\.([^.]*)/","\\1.thumb.\\2", $name);
		@unlink($Paths['upload_path'] . $thumbname);
	}

	// also force the archive index file to be updated
	@unlink($Paths['pivot_path'].'db/ser-archives.php');
}


/**
 * Load the translation table that is used to convert textual emoticons
 * to their graphical counterpart
 *
 * @return void
 */
function init_emoticons() {
	global $emot, $emot_path, $Paths, $emoticon_window, $emoticon_window_width, $emoticon_window_height;

	if(!defined('_EMOTICONS_INCLUDED'))  {
		define('_EMOTICONS_INCLUDED',1);

		if (file_exists($Paths['extensions_path']."emoticons/config.inc.php")) {
			include ($Paths['extensions_path']."emoticons/config.inc.php");

			$path = fixpath(sprintf("%semoticons/%s", $Paths['extensions_url'], $emoticon_images));
			$align = set_target("", " align='middle'");
			foreach ($emot as $emot_code => $emot_file) {
				$emot[$emot_code]=sprintf("<img src='%s%s' alt='%s'%s/>", $path, $emot_file, addslashes($emot_code), $align);
			}
		}
	}


}

/**
 * Convert textual emoticons into their graphical counterpart.
 *
 * @param string $text
 * @return string
 */
function emoticonize($text) {
	global $emot;

	init_emoticons();

	// If we're on PHP 4.3 or higher, we can use a regular expression to prevent
	// parsing of emoticons inside a <tag>. Older PHP versions will use 'dumb'
	// translation.
	if(function_exists("preg_replace")) {

		// Loop through the emoticons, replacing them one by one.
		foreach ($emot as $emot_code => $emot_html) {
			$text = preg_replace('/(?!<.*?)('.preg_quote($emot_code,'/').')(?![^<>]*?>)/si', $emot_html, $text);
		}

	} else {

		// Loop through the emoticons, replacing them one by one.
		foreach ($emot as $emot_code => $emot_html) {
			$text = str_replace($emot_code, $emot_html, $text);
		}

	}


	return $text;

}


/**
 * Convert links without 'target=_blank' so that they do open in a new
 * window, if it's set in the weblog settings.
 *
 * @uses link_targetblank_add_callback
 * @uses link_rel_add_callback
 * @param string $text
 * @param bool $autoredirect
 * @return string
 */
function targetblank($text, $autoredirect=false) {
	global $Weblogs, $Current_weblog, $Cfg, $link_rel_add;

	if ( $Weblogs[$Current_weblog]['target_blank']==1 ) {
		$text = preg_replace_callback("#<a [^>]*href=(\"|')[^\n]+\\1[^>]*>.*</a>#iUs", 
			"link_targetblank_add_callback", $text);

		if ($autoredirect) {
			$link_rel_add = "nofollow";
			$text = preg_replace_callback("#<a [^>]*href=(\"|')[^\n]+\\1[^>]*>.*</a>#iUs", 
				"link_rel_add_callback", $text);
		}

	} else {

		$rel = "";

		if ( $Weblogs[$Current_weblog]['target_blank']==2 ) {
			$rel="external";
		}

		if ($autoredirect) {
			$rel.=" nofollow";
			$rel = trim($rel);
		}

		if (strlen($rel)>1) {
			$link_rel_add = $rel;
			$text = preg_replace_callback("#<a [^>]*href=(\"|')[^\n]+\\1[^>]*>.*</a>#iUs", 
				"link_rel_add_callback", $text);
		}
	}

	return $text;

}

/**
 * Adds a rel attribute to a link if not already set for the link.
 * If there already is a rel attribute the value is merged with
 * the existing one(s).
 *
 * @param array $matches is the array of matches from a preg_replace_callback call
 * @return string
 */
function link_rel_add_callback($matches) {
	global $link_rel_add;
	$text = $matches[0];
	if (strpos($text, " rel=") === false) {
		return str_replace("<a ", "<a rel=\"$link_rel_add\" ", $text);
	} else {
		return preg_replace("#rel=(\"|')([^>\n]+)\\1#iUs","rel=\"\\2 $link_rel_add\"",$text); 
	}
}

/**
 * Adds 'target="_blank"' if no target already set for the link.
 *
 * @param array $matches is the array of matches from a preg_replace_callback call
 * @return string
 */
function link_targetblank_add_callback($matches) {
	$text = $matches[0];
	if (strpos($text, " target=") === false) {
		return str_replace("<a ", "<a target=\"_blank\" ", $text);
	} else {
		return $text; 
	}
}

/**
 * Replace a portion of a string $text
 * with x's starting at position $leftpos through to position $rightpos.
 * $text is passed by reference...
 */
function blankout(&$text, $leftpos, $rightpos) {
	while ($leftpos<=$rightpos) {
		$text[$leftpos]="x";
		$leftpos++;
	}
}


/**
 * Searches in (HTML) text for the value of a attribute.
 *
 * For example, after calling:
 * <code>$my_value=get_attr_value('size', 'color="green" size="12"');</code>
 * my_value will contain 12
 *
 * @param string $att_name Name of attribuite to find the value of
 * @param string $attributes Text which contains the attribute set to a value
 */
function get_attr_value($att_name, $attributes) {

	// first, we need do do some tricks to find out where we'll have
	// to split the $attributes string
	$attributes=stripslashes(str_replace("&quot;",'"', $attributes));
	$this_attr=substr($attributes, strpos($attributes,$att_name));
	$pos=strpos($attributes,$att_name);

    // then we split it, using a regex
	if (preg_match("/$att_name=\"([^\"]*)\"/i", $attributes, $parts)) {
		return $parts[1];
	} else {
		return "";
	}
}

/**
 * Initializes an encoding table.
 *
 * Basically it is the output from get_html_translation_table
 * completed with some other characters. The table only works for
 * text in ISO-8859-1 encoding. The function sets the global variables
 * $encode_html, $encode_html_slim and $decode_html (which is used by entify
 * and unentify).
 *
 * @link http://php.net/function.get_html_translation_table
 */
function init_encode_table() {
	global $encode_html,$encode_html_slim, $decode_html;

	// To encode funny characters like é to &eacute; we use
	// the standard php-functions.
	$encode_html=get_html_translation_table(HTML_ENTITIES);

	// unfortunately, these are not complete, so we add some more..
	$encode_html['‘']="&#0145;";
	$encode_html['’']="&#0146;";
	$encode_html['‚']="&#0130;";
	$encode_html['“']="&#0147;";
	$encode_html['”']="&#0148;";
	$encode_html['™']="&#0153;";
	$encode_html['¶']="&oelig;";
	$encode_html['€']="&euro;";
	//$encode_html['']="";

	// The array to translate entities to funny characters..
	$decode_html=array_flip($encode_html);

	$encode_html_slim =  $encode_html;

	unset($encode_html_slim['"']);
	unset($encode_html_slim["'"]);
	unset($encode_html_slim['<']);
	unset($encode_html_slim['>']);

	/* echo "<pre>";
	print_r($encode_html_slim);
	echo "</pre>";

	echo(count($encode_html)."<BR>");
	echo(count($encode_html_slim)."<br>");
	*/
}


function escape($i) {
	//global $encode_html, $decode_html;

	$i = stripslashes($i);
	//$i = strtr($i, $decode_html);

	// according to the php manual, these have to be translated back
	// in order to output proper html
	// '&' (ampersand) becomes '&amp;'
	// '"' (double quote) becomes '&quot;' when ENT_NOQUOTES is not set.
	// ''' (single quote) becomes '&#039;' only when ENT_QUOTES is set.
	// '<' (less than) becomes '&lt;'
	// '>' (greater than) becomes '&gt;'

	$i = str_replace ('&lt;', '<', $i);
	$i = str_replace ('&gt;', '>', $i);
	$i = str_replace ('&quot;', '"', $i);
	$i = str_replace ('&#039;', "'", $i);
	$i = str_replace ('&amp;', "&", $i);

	return $i;
}

/**
 * Sanctifies user input to be used in Javascript by stripping HTML tags,
 * escaping single quotes, specialchar double quotes, and fixing line endings.
 *
 * @param string $text
 * @param string $legal_tags Tags that aren't stripped
 * @return string
 */
function js_sanctify($text, $legal_tags = '') {
	$safe_text = strip_tags($text, $legal_tags);
	$safe_text = str_replace('"', '&quot;', $safe_text);
	$safe_text = preg_replace('/&#(x)?0*(?(1)27|39);?/i', "'", $safe_text);
	$safe_text = preg_replace("/\r?\n/", "\\n", addslashes($safe_text));
	return $safe_text;
}

/**
 * Converts accented characters to HTML entities, but leave HTML tags alone.
 *
 * The function is used when storing comments (and maybe more).
 */
function entify($i) {
	global $encode_html_slim, $i18n_use;

	if ($i18n_use) {
		return i18n_entify($i);
	}

	if (!isset($encode_html_slim)) {
		init_encode_table();
	}

	$i = strtr($i, $encode_html_slim);

	// these have to be translated back in order to output html-tags
	//$i = str_replace ('&lt;', '<', $i);
	//$i = str_replace ('&gt;', '>', $i);
	//$i = str_replace ('&quot;', '"', $i);
	//$i = str_replace ('&#039;', "'", $i);
	//$i = str_replace ('&amp;', "&", $i);

	return $i;
}


/**
 * Converts HTML entities to accented characters.
 */
function unentify($i) {
	global $encode_html, $decode_html, $i18n_use;

	if ($i18n_use) {
		return i18n_unentify($i);
	}

	if (!isset($encode_html)) {
		init_encode_table();
	}

	$i = strtr($i, $decode_html);

	return $i;
}

/**
 * Replaces ' / " with &#039; / &quot; in the text $i.
 *
 * @param string $i
 * @return string
 */
function addquotes($i) {

	$i= str_replace("'", '&#039;', $i);
	$i= str_replace('"', '&quot;', $i);

	return $i;

}

/**
 * Replaces &gt; / &lt; with &amp;gt; / &amp;lt; in the text $i.
 *
 * @param string $i
 * @return string
 */
function addltgt($i) {

	$i= str_replace('&gt;', '&amp;gt;', $i);
	$i= str_replace('&lt;', '&amp;lt;', $i);

	return $i;

}


/**
 * Checks if text is HTML (crap) saved by/pasted
 * from Microsoft word.
 */
function is_word_html($text) {

	$a = strpos($text, "<o:p></o:p>");
	$b = strpos($text, "MsoNormal");
	$c = strpos($text, "mso-bidi");
	$d = strpos($text, "xml:namespace");

	//echo "$a - $b - $c - $d";

	return ($a || $b || $c || $d);
}



/**
 * Makes sure n00b users cannot post < ? echo "pom"; ? > and the like..
 *
 * @param string $text text to be stripped for scripting code
 * @return string $text stripped text
 */
function strip_scripting($text) {
	global $Pivot_Vars, $Users;

	if($Users[$Pivot_Vars['user']]['userlevel'] < 3) {
		// all users that are not administrator..
		$text = str_replace("<?", "&lt;?", $text);
		$text = str_replace("?".">", "?&gt;", $text);
		$text = str_replace("<%", "&lt;%", $text);
		$text = str_replace("%".">", "%&gt;", $text);
		return $text;
	} else {
		return $text;
	}

}



/**
 * Simple function that strips off all the crap
 * Microsoft Word inserts when saving as HTML.
 *
 * Only the following tags are kept:
 * <code><b><i><u><a><br><p><em><strong></code>
 */
function strip_word_html($text) {
	$text = stripslashes($text);
	$text = str_replace("<?xml:namespace", "<pom", $text);
	// Only keep the elements listed
	$text = strip_tags($text,'<b><i><u><a><br><p><em><strong>');
	// Remove all attributes from the URLs.
	$text = ereg_replace ("<a[^>]+href *= *([^ >]+)[^>]*>", "<a href=\\1>", $text);
	// Remove all attributes (from the allowed elements)
	$text = ereg_replace ("<([b|i|u|br|p|em|strong])[^>]*>","<\\1>", $text);
	// Replace blank/empty lines with two breaks to make a visible blank line
	$text = preg_replace('/^\s*$/m','<br /><br />', $text);

	return $text;
}

/**
 * Rewrite of PHP's wordwrap function, so it won't break HTML entities.
 *
 * Formerly we first removed entities (using unentify), wrap the text at the
 * wanted width and then added the entities again (using entify). This caused
 * lot of problems so now we are using a trick from
 * http://www.greywyvern.com/code/php/htmlwrap.phps
 * where entities are replaced by the ACK (006) ASCII symbol, the text wrapped and
 * then the entities reinserted.
 *
 * @param string $i string to wrap
 * @param int $width which character to wrap at
 * @param string $break which character/string to break with
 * @param boolean $cut force wrap exactly at the given character
 * @return string
 */
function mywordwrap($i, $width=25, $break="  ", $cut=1) {
	global $i18n_use;

	// Use the ACK (006) ASCII symbol to replace all HTML entities temporarily
	$i = str_replace("\x06", "", $i);
	preg_match_all("/&([a-z\d]{2,7}|#\d{2,5});/i", $i, $ents);
	$i = preg_replace("/&([a-z\d]{2,7}|#\d{2,5});/i", "\x06", $i);

	if ($i18n_use) {
		$i = i18n_wordwrap($i, $width, $break, $cut);
	} else {
		$i = wordwrap($i, $width, $break, $cut);
	}

	// Put captured HTML entities back into the string
	foreach ($ents[0] as $ent) {
		$i = preg_replace("/\x06/", $ent, $i, 1);
	}

	return $i;

}



/**
 * Trim a text to a given length, taking html entities into account.
 *
 * Formerly we first removed entities (using unentify), cut the text at the
 * wanted length and then added the entities again (using entify). This caused
 * lot of problems so now we are using a trick from
 * http://www.greywyvern.com/code/php/htmlwrap.phps
 * where entities are replaced by the ACK (006) ASCII symbol, the text cut and
 * then the entities reinserted.
 *
 * @param string $str string to trim
 * @param int $length position where to trim
 * @param boolean $nbsp whether to replace spaces by &nbsp; entities
 * @param boolean $hellip whether to add &hellip; entity at the end
 *
 * @return string trimmed string
 */
function trimtext($str, $length, $nbsp=false, $hellip=true) {

	$str = strip_tags($str);

	// Use the ACK (006) ASCII symbol to replace all HTML entities temporarily
	$str = str_replace("\x06", "", $str);
	preg_match_all("/&([a-z\d]{2,7}|#\d{2,5});/i", $str, $ents);
	$str = preg_replace("/&([a-z\d]{2,7}|#\d{2,5});/i", "\x06", $str);

	if (function_exists('mb_strwidth')) {
		if (mb_strwidth($str)>$length) {
			$my_encoding = snippet_charset();
			if ($my_encoding != "") {
				$str = mb_strimwidth($str,0,$length+1, '', $my_encoding);
			} else {
				$str = mb_strimwidth($str,0,$length+1);
			}
			if ($hellip) {
				$str .= '&hellip;';
			}
		}
	} else {
		if (strlen($str)>$length) {
			$str = substr($str,0,$length+1);
			if ($hellip) {
				$str .= '&hellip;';
			}
		}
	}

	if ($nbsp==true) {
		$str=str_replace(" ", "&nbsp;", $str);
	}

	$str=str_replace("http://", "", $str);

	// Put captured HTML entities back into the string
	foreach ($ents[0] as $ent) {
		$str = preg_replace("/\x06/", $ent, $str, 1);
	}

	return $str;

}

/**
 * Decodes text using different levels. (Opposite of encode_text.)
 *
 * Currently 'minimal' and 'special' is supported. The later is the
 * same as reverting htmlspecialchars (with ENT_QUOTES). 'minimal' behaves
 * as 'special' except that "&lt;" / "&gt;" is left untouched.
 *
 * @param string $text
 * @param string $level
 * @return string
 */
function decode_text($text,$level = 'minimal') {
        if ($level == 'minimal') {
		$text = str_replace(array('&quot;','&#039;','&amp;'),array('"','\'','&'),$text);
		return $text;
	} else if ($level == 'special') {
		if (function_exists('htmlspecialchars_decode')) {
			return htmlspecialchars_decode($text,ENT_QUOTES);
		} else {
			$text = str_replace(array('&quot;','&#039;','&amp;'),array('"','\'','&'),$text);
			$text = str_replace(array('&lt;','&gt;'),array("<",">"),$text);
			return $text;
		}
        } else {
		debug("Unknown level - text not decoded");
		return $text;
	}
}

/**
 * Encodes text using different levels.
 *
 * Currently 'minimal' and 'special' is supported. The later is the
 * same as htmlspecialchars (with ENT_QUOTES). 'minimal' behaves
 * as 'special' except that "<" / ">" is left untouched.
 *
 * @param string $text
 * @param string $level
 * @return string
 */
function encode_text($text,$level = 'minimal') {
        if ($level == 'minimal') {
		$text = str_replace(array('"','\''),array("&quot;","&#039;"),$text);
		$text = preg_replace("/&(?!(#[0-9]+|[a-z]+);)/i", "&amp;", $text);
		return $text;
	} else if ($level == 'special') {
		return htmlspecialchars($text,ENT_QUOTES);
        } else {
		debug("Unknown level - text not encoded");
		return $text;
	}
}

/**
 * Creates a Javascript encoded mailto link.
 *
 * If encoding of e-mail addresses is disabled in the weblog config,
 * ot outputs a plain HTML mailto link.
 *
 * @param string $mail
 * @param string $nick Text of mailto link.
 * @param string $title Title the mailto link (prefixed with "email").
 * @return string
 */
function encodemail_link($mail, $nick, $title="") {
	global $Weblogs , $Current_weblog;

	if ($mail=="") {
		return $nick;
	} else {
		$mail=strip_tags($mail);
	}

	if ($title=="") {
		$title=$nick;
	} else {
		$title=strip_tags($title);
	}

	$title= str_replace("'", '&#039;', $title);
	$title= str_replace('"', '&quot;', $title);

	if ($Weblogs[$Current_weblog]['encode_email_addresses']) {
		include_once "modules/safeaddress.inc.php";
		$mail = safeAddress($mail, $nick, lang('email')." $title", 1, 0);
		return $mail;
	} else {
		return "<a href='mailto:$mail' title='".lang('email')." ".addslashes($title)."'>$nick</a>";
	}

}


/**
 * Wrapper for Textile.
 *
 * Uses Textile 2 by default, but if it's not there it falls back to Textile 1.
 *
 * @param string $str
 * @return string
 */
function pivot_textile($str) {
	global $textile;

	// If magic_quotes_gpc is set, we need to add slashes..
	if (get_magic_quotes_gpc()) {
		$str = addslashes($str);
	}

	if (isset($textile)) {

		$output = $textile->TextileThis($str);
		return $output;

	} else 	if (file_exists("includes/textile/classtextile.php")) {

		include_once "includes/textile/classtextile.php";

		$textile = new Textile;

		$output = $textile->TextileThis($str);
		return $output;

	} else if (file_exists("includes/textile/textile.php")) {

		include_once 'includes/textile/textile.php';
		return textile($str);

	} else {

		return $str;

	}

}


/**
 * Wrapper for Markdown/SmartyPants
 *
 * @param string $str
 * @param integer $with_smartypants If equal to 4 SmartyPants is also used.
 * @return string
 */
function pivot_markdown($str, $with_smartypants=0) {
	global $Cfg;

	if (file_exists("includes/markdown/markdown.php")) {

		include_once "includes/markdown/markdown.php";

		$output = markdown($str);

		if ($with_smartypants == 4) {
			include_once 'includes/markdown/smartypants.php';
			$output = SmartyPants($output);
		}

		return $output;

	} else {

		debug("couldn't find includes/markdown/markdown.php");

		return $str;

	}

}


/**
 * Get the link to edit an entry directly from the frontpage.
 *
 * @param string $text
 * @param integer $uid
 * @return string
 */
function get_editentrylink($name="", $uid=0) {
	global $Paths, $Pivot_Vars, $db;

	if ($uid==0) { $uid = $db->entry['code']; }

	if( isset($_COOKIE['user']) && isset($_COOKIE['hash']) && ($_COOKIE['mode'] == 'stayloggedin') &&
	( (!isset($Pivot_Vars['session'])) || ($Pivot_Vars['session'] == "")) ) {
		// Try to revive an old Session..
		ReviveSession();
	}

	if ((isset($Pivot_Vars['user'])) && ($Pivot_Vars['user']!="")) {

		$link = sprintf("%sindex.php?session=%s&amp;menu=entries&amp;func=modify&amp;id=%s",
			$Paths['pivot_url'],
			$Pivot_Vars['session'],
			$uid);

		$output = sprintf("<a href='%s'>%s</a>", $link, $name);

	} else {
		$output = "";
	}

	return $output;

}



/**
 * Get the link to edit or delete comments directly from the entrypage.
 *
 * @param integer $uid
 * @param integer $count
 * @return string
 */
function get_editcommentlink($uid=0, $number) {
	global $Paths, $Pivot_Vars, $db;

	if (!defined('LIVEPAGE')) {

		// For generated pages we don't make the links
		$output = "";

	} else {

		// For livepages we make the links..
		if ($uid==0) { $uid = $db->entry['code']; }

		if( isset($_COOKIE['user']) && isset($_COOKIE['hash']) && ($_COOKIE['mode'] == 'stayloggedin') &&
		( (!isset($Pivot_Vars['session'])) || ($Pivot_Vars['session'] == "")) ) {
			// Try to revive an old Session..
			ReviveSession();
		}

		if ((isset($Pivot_Vars['user'])) && ($Pivot_Vars['user']!="")) {

	        $editlink = sprintf("%sindex.php?session=%s&amp;menu=entries&amp;func=editcomments&amp;id=%s",
						$Paths['pivot_url'],
						$Pivot_Vars['session'],
						$uid);

			$output = sprintf("(<a href='%s&amp;edit=%s'>%s</a>", $editlink, $number, lang('general', 'edit'));
			$output .= sprintf(" / <a href='%s&amp;del=%s'>%s</a>)", $editlink, $number, lang('general', 'delete'));

		} else {
			$output = "";
		}
	}

	return $output;

}



/**
 * Get the link to edit or delete trackbacks directly from the entrypage.
 *
 * @param integer $uid
 * @param integer $count
 * @return string
 */
function get_edittrackbacklink($uid=0, $number) {
	global $Paths, $Pivot_Vars, $db;

	if (!defined('LIVEPAGE')) {

		// For generated pages we don't make the links
		$output = "";

	} else {

		// For livepages we make the links..
		if ($uid==0) { $uid = $db->entry['code']; }

		if( isset($_COOKIE['user']) && isset($_COOKIE['hash']) && ($_COOKIE['mode'] == 'stayloggedin') &&
		( (!isset($Pivot_Vars['session'])) || ($Pivot_Vars['session'] == "")) ) {
			// Try to revive an old Session..
			ReviveSession();
		}

		if ((isset($Pivot_Vars['user'])) && ($Pivot_Vars['user']!="")) {

	        $editlink = sprintf("%sindex.php?session=%s&amp;menu=entries&amp;func=edittrackbacks&amp;id=%s",
						$Paths['pivot_url'],
						$Pivot_Vars['session'],
						$uid);

			$output = sprintf("(<a href='%s&amp;edit=%s'>%s</a>", $editlink, $number, lang('general', 'edit'));
			$output .= sprintf(" / <a href='%s&amp;del=%s'>%s</a>)", $editlink, $number, lang('general', 'delete'));

		} else {
			$output = "";
		}
	}

	return $output;
}


/**
 * Get the link to the visitor registration page.
 *
 * @param string $linktext
 * @return string
 */
function get_register_as_visitor_link($linktext) {
	global $Paths, $Current_weblog;

	$url = $Paths['pivot_url']."user.php?w=".para_weblog($Current_weblog);
	if ($linktext == '') {
		$linktext = snippet_label("register");
	}
	return "<a href='$url' class='pivot-system-links'>$linktext</a>";
}


/**
 * Checks if there is a registered visitor (stored in a cookie).
 *
 * @param string $linktext
 * @return string
 */
function get_registered_state() {
	global $Pivot_Vars,  $Pivot_Cookies;

	if (isset($Pivot_Vars['HTTP_COOKIE']) && !isset($Pivot_Cookies))  {
		foreach (explode(";", $Pivot_Vars['HTTP_COOKIE']) as $cookie) {
			list ($key, $value)= explode("=", $cookie);
			$Pivot_Cookies[trim($key)] = urldecode(trim($value));
		}
	}

	if (isset($Pivot_Cookies['piv_reguser']))  {
		return "registered";
	}
}


/** 
 * Produces the Javascript code that prefills the comment form (either when
 * previewing or being a registered visitor).
 *
 * @param string $name
 * @param string $email
 * @param string $url
 * @param string $cookie
 * @param string $comm
 * @param integer $notify
 * @param integer $hidemail
 * @return string
 */
function fill_comment_form($name='', $email='', $url='', $cookie='', $comm='', $notify=0, $hidemail=0) {
	global $Paths;    
	require_once $Paths['pivot_path']."modules/module_userreg.php";

	// if user is logged in as registered visitor, we must always use
	// that info in the form. 
	if ($user = load_user($_COOKIE['piv_reguser'])) {
		$name = $user['name'];
		$email = $user['email'];
		$url = $user['url'];
		$notify = $user['notify_default'];
		$hidemail = 1-$user['show_address'];
	}

	// Clean up user input
	$name = js_sanctify($name);
	$email = js_sanctify($email);
	$url = js_sanctify($url);
	$comm = js_sanctify($comm, '<b>,<i>,<em>,<strong>');
	
	$output = "<script type=\"text/javascript\">\n";
	$output .= "var form = document.getElementById('form');\n";
	$output .= "if (form) { ";
	if ($name!="") {
		$output .=  "form.piv_name.value='".($name)."';\n";
	}
	if ($email!="") {
		$output .=  "form.piv_email.value='".($email)."';\n";
	}
	if ($url!="") {
		$output .=  "form.piv_url.value='".($url)."';\n";
	}
	if ($comm!="") {
		$output .=  "form.piv_comment.value='".($comm)."';\n";
	}

	if ($cookie=="yes") {
		$output .=  "form.piv_rememberinfo[0].checked=true;\n";
	} else {
		$output .=  "form.piv_rememberinfo[1].checked=true;\n";
	}
	
	if ($notify==1) {
		$output .=  "form.piv_notify.checked=true;\n";
	} else {
		$output .=  "form.piv_notify.checked=false;\n";
	}
		
	if ($hidemail==1) {
		$output .=  "form.piv_discreet.checked=true;\n";
	} else {
		$output .=  "form.piv_discreet.checked=false;\n";
	}
	
	$output .= "}";
	$output .=  "</script>\n";
	return $output;

}


/**
 * Formats comments according the settings for the current weblog.
 *
 * We strip _all_ tags except <b> and <i> and after that
 * we convert everything that looks like a url or mail-address
 * to the equivalent link (if enabled). Using textile if enabled.
 *
 * @param string $text
 * @return string
 */
function comment_format( $text ) {
	global $Cfg,$Weblogs,$Current_weblog,$Paths;

	$text = trim( strip_tags( $text,'<b>,<i>,<em>,<strong>' ));
	$text = preg_replace('/<([^\s>]*)(\s[^<]*)>/i',"<\\1>", $text);

	// did user request '_blank' target rerouting?
	if(( 1 == $Weblogs[$Current_weblog]['target_blank'] )) {
		$target = ' target="_blank"';
	} else {
		$target = '';
	}

	if( 1 == $Weblogs[$Current_weblog]['comment_textile'] ) {

		if ( 1 == $Weblogs[$Current_weblog]['comment_texttolinks'] ) {
			// the old-style automatic links are converted to textile links.
			$text = preg_replace("/([ \t]|^)www\./mi", "\\1http://www.", $text);
			$text = preg_replace("#([ \t]|^)(http://[^ )\r\n]+)#mi", "\\1\"\\2\":\\2", $text);

			// Fix wrongfully matched images..
			$text = preg_replace('/"http:\\/\/([-a-z0-9_.\/]*)!":http:\/\/([-a-z0-9_.\/]*)!/Ui', '!http://\\1!', $text);

			$text =  eregi_replace("([-a-z0-9_]+(\.[_a-z0-9-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)+))",
				"<a href=\"mailto:\\1\">\\1</A>",$text);
		}

		$text = pivot_textile( $text );

		// when textiled, we only want <br />, and not <p>.. Clean <p> and </p>
		$text = preg_replace("/<br \/>/sUi", "", $text);
		$text = preg_replace("/<p([^>]*)>/sUi", "", $text);
		$text = preg_replace("/<\/p>/sUi", "", $text);
		// make textile also obey the target setting
		$text = eregi_replace('<a href="(http://[^"]+)">([^<]+)</a>',"<a href=\"\\1\"$target>[[\\2]]</a>",$text);
		$text = eregi_replace('<a href="(https://[^"]+)">([^<]+)</a>',"<a href=\"\\1\"$target>[[\\2]]</a>",$text);
		$text = eregi_replace('<a href="(ftp://[^"]+)">([^<]+)</a>',"<a href=\"\\1\"$target>[[\\2]]</a>",$text);
		$text = nl2br(trim($text));

	} else if ( 1 == $Weblogs[$Current_weblog]['comment_texttolinks'] ) {

		$text = preg_replace("#([ \t]|^)www\.#mi","\\1http://www.",$text);
		$text = preg_replace("#([ \t]|^)ftp\.#mi","\\1ftp://ftp.",$text);
		$text = preg_replace("#([ \t]|^)(http://[^ )\r\n]+)#mi","\\1<a href=\"\\2\"$target>[[\\2]]</a>",$text);
		$text = preg_replace("#([ \t]|^)(https://[^ )\r\n]+)#mi","\\1<a href=\"\\2\"$target>[[\\2]]</a>",$text);
		$text = preg_replace("#([ \t]|^)(ftp://[^ )\r\n]+)#mi","\\1<a href=\"\\2\"$target>[[\\2]]</a>",$text);

		preg_match_all ("|\[\[(.*)\]\]|U", $text, $match, PREG_PATTERN_ORDER);

		// do we need to do changes?
		if(( is_array( $match )) && ( count( $match ) > 0 )) {
			foreach( $match[1] as $url ) {
				$url2 = str_replace( '@',  '%40', $url );
				$text = str_replace( $url, $url2, $text );
			}
		}

		$text =  eregi_replace("([-a-z0-9_]+(\.[_a-z0-9-]+)*@([a-z0-9-]+(\.[a-z0 -9-]+)+))",
			"<a href=\"mailto:\\1\">\\1</a>",$text);

		// now change the '@' back...
		$text = str_replace( '%40','@',$text );
	}

	// If not using Textile convert linebreaks to HTML breaks.
	if( 1 != $Weblogs[$Current_weblog]['comment_textile'] ) {
		$text = nl2br( trim( $text ));
	}

	// then make long urls into short urls, with correct link..
	preg_match_all ("|\[\[(.*)\]\]|U", $text, $match, PREG_PATTERN_ORDER);

	foreach( $match[1] as $url ) {
		if( strlen( $url ) > 40 ) {
			$s_url = substr( $url,0,40 ).'..';
		} else {
			$s_url = $url;
		}
		$text = str_replace( '[['.$url.']]',$s_url,$text );
	}

	// perhaps redirect the link..
	if( isset( $Weblogs[$Current_weblog]['lastcomm_redirect'] ) && ( 1 ==  $Weblogs[$Current_weblog]['lastcomm_redirect'] )) {
		//$text = str_replace(  'href="http://','href="'.$Paths['pivot_url'].'includes/re.php?http://',$text );
		$text = preg_replace("#<a href=(\"|')([^>\n]+)\\1([^<>]*)>(.*)</a>#iUs",
			"<a href=\"\\2\" \\3 rel='nofollow'>\\4</a>",$text);
	}

	if ($Weblogs[$Current_weblog]['emoticons']==1) {
		$text=emoticonize($text);
	}

	// If magic_quotes_gpc is not set, we need to strip slashes..
	if (!get_magic_quotes_gpc()) {
		$text = stripslashes($text);
	}

	return ($text);
}


/**
 * Formats trackbacks according the settings for the current weblog.
 *
 * We strip _all_ tags except <b> and <i> and after that
 * we convert everything that looks like a url or mail-address
 * to the equivalent link (if enabled).
 *
 * @param string $text
 * @return string
 */
function trackback_format( $text ) {
	global $Cfg,$Weblogs,$Current_weblog,$Paths;

	$text = trim( strip_tags( $text,'<b>,<i>,<em>,<strong>' ));

	// did user request '_blank' target rerouting?
	if ( 1 == $Weblogs[$Current_weblog]['target_blank'] ) {
		$target = ' target="_blank"';
	} else {
		$target = '';
	}

	if ( 1 == $Weblogs[$Current_weblog]['comment_texttolinks'] ) {
		$text = eregi_replace("([ \t]|^)www\."," http://www.",$text);
		$text = eregi_replace("([ \t]|^)ftp\."," ftp://ftp.",$text);
		$text = eregi_replace("(http://[^ )\r\n]+)","<a  href=\"\\1\"$target>[[\\1]]</a>",$text);
		$text = eregi_replace("(https://[^ )\r\n]+)","<a  href=\"\\1\"$target>[[\\1]]</a>",$text);
		$text = eregi_replace("(ftp://[^ )\r\n]+)","<a  href=\"\\1\"$target>[[\\1]]</a>",$text);


		// 2004/11/30 =*=*= JM - clear up messed ftp links with '@' in
		preg_match_all ("|\[\[(.*)\]\]|U", $text, $match, PREG_PATTERN_ORDER);

		// do we need to do changes?
		if(( is_array( $match )) && ( count( $match ) > 0 )) {
			foreach( $match[1] as $url ) {
				$url2 = str_replace( '@',  '%40', $url );
				$text = str_replace( $url, $url2, $text );
			}
		}
		$text =  eregi_replace("([-a-z0-9_]+(\.[_a-z0-9-]+)*@([a-z0-9-]+(\.[a-z0 -9-]+)+))",
			"<a href=\"mailto:\\1\">\\1</a>",$text);


		// now change the '@' back...
		$text = str_replace( '%40','@',$text );

		// then make long urls into short urls, with correct link..
		preg_match_all ("|\[\[(.*)\]\]|U", $text, $match, PREG_PATTERN_ORDER);

		foreach( $match[1] as $url ) {
			if( strlen( $url ) > 40 ) {
				$s_url = substr( $url,0,40 ).'..';
			} else {
				$s_url = $url;
			}
			$text = str_replace( '[['.$url.']]',$s_url,$text );
		}

		// perhaps redirect the link..
		if( isset( $Weblogs[$Current_weblog]['lastcomm_redirect'] ) && ( 1 ==  $Weblogs[$Current_weblog]['lastcomm_redirect'] )) {
			//$text = str_replace(  'href="http://','href="'.$Paths['pivot_url'].'includes/re.php?http://',$text );
			$text = preg_replace("#<a href=(\"|')([^>\n]+)\\1([^<>]*)>(.*)</a>#iUs",
				"<a href=\"\\2\" \\3 rel='nofollow'>\\4</a>",$text);
		}
	}

	$text = nl2br( trim( $text ));

	if ($Weblogs[$Current_weblog]['emoticons']==1) {
		$text=emoticonize($text);
	}

	return (stripslashes($text));
}


/**
 * Tests a file, and outputs some information about that file.
 *
 * @param string $name
 * @see filemappings()
 */
function testfile($name) {
	global $testfile_array;

	if (file_exists($name)) {
		echo "- This file does exist";
		if (is_writable($name)) {
			echo " and is writable!";
		} else {
			echo " and is <b>not</b> writable";
		}
	} else {

		if (strpos("$name", "%")>0) {
			// special case for archives and entries
			if (is_writable(dirname($name))) {
				echo "- These files <b>can</b> be created by Pivot!";
			} else {
				echo "- These files can <b>not</b> be created either. <br />&nbsp;&nbsp;
				Please check the rights of the following folder using your FTP program :<br />
				&nbsp;&nbsp;<span class='filename'>". dirname(realpath($name))."</span>";
			}

		} else {
			// all other cases
			echo "- This file does <b>not</b> exist";
			if (is_writable(dirname($name))) {
				echo " but <b>can</b> be created by Pivot! (no action required)";
			} else {
				echo " and can <b>not</b> be created either. <br />&nbsp;&nbsp;
				Please check the rights of the following folder using your FTP program :<br />
				&nbsp;&nbsp;<span class='filename'>". dirname(realpath($name))."</span>";
			}
		}
	}

	echo "<br />\n";

	if (!isset($testfile_array[$name])) {
		$testfile_array[$name] = TRUE;
	} else {
		$str = "Another Weblog also writes to this file!! You should really change the settings
			on this weblog or on the other one!";
		echo "- <b>".wordwrap($str, 80, "<br />&nbsp;\n")."</b><br />\n";
	}

}


// This function loads a serialized file, unserializes it, and returns it
function load_serialize($filename, $silent=FALSE, $force=FALSE) {
	global $serialize_cache, $Paths;

	$filename = fixpath($filename);


	if (!is_readable($filename)) {

		if (is_readable($Paths['pivot_path'].$filename)) {
			$filename = $Paths['pivot_path'].$filename;
		} else {
			$filename = "../".$filename;
		}
	}

	if (!is_readable($filename)) {

		// If $silent is true, fail gracefully..
		if ($silent) { return ""; }

		echo "<p>pad: ".getcwd()."</p>";
		$message = str_replace("%name%", $filename, "A needed file ('%name%') does exist, but pivot is not allowed to read it. <br /><br />Try logging in with your ftp-client and check to see if it is chmodded to be readable by the webuser (ie: 766). Else go <a href='javascript:history.go(-1)'>back</a> to the last page.");
		piv_error("File is not readable!", $message, 0);
	}

	$serialized_data = trim(implode("", file($filename)));

	$serialized_data = str_replace("<?php /* pivot */ die(); ?>", "", $serialized_data);

	@$data = unserialize($serialized_data);
	if (is_array($data)) {
		return $data;
	} else {
		$temp_serialized_data = preg_replace("/\r\n/", "\n", $serialized_data);
		if (@$data = unserialize($temp_serialized_data)) {
			return $data;
		} else {
			$temp_serialized_data = preg_replace("/\n/", "\r\n", $serialized_data);
			if (@$data = unserialize($temp_serialized_data)) {
				return $data;
			} else {
				return FALSE;
			}
		}
	}
}

// This function serializes some data and then saves it.
function save_serialize($filename, &$data) {
	global $Cfg;

	$filename = fixPath($filename);

	$ser_string = "<?php /* pivot */ die(); ?>".serialize($data);

	// disallow user to interrupt
	ignore_user_abort(TRUE);

	$old_umask = umask(0111);

	if (($Cfg['unlink'] == 1) && (file_exists($filename))) {
		/* unlinking is good for some safe_mode users */
		/* and bad for some others.. i hate safe_mode */
		@unlink($filename);
	}

	// open the file and lock it.
	if($fp=fopen($filename, "w")) {
		flock( $fp, LOCK_EX );

		// write it
		if (fwrite($fp, $ser_string)) {
			flock( $fp, LOCK_UN );
			fclose($fp);
		} else {
			flock( $fp, LOCK_UN );
			fclose($fp);
			piv_error("Error writing file",  "The file <b>$filename</b> could not be written! Current path: ".getcwd()."." );
			return FALSE;
		}
	} else {
		piv_error("Error opening file",  "The file <b>$filename</b> could not be opened for writing! Current path: ".getcwd()."." );

		return FALSE;
	}
	umask($old_umask);

	// reset the users ability to interrupt the script
	ignore_user_abort(FALSE);


	return TRUE;

}


/**
 *  Saves a file, and outputs some feedback, if wanted.
 */
function write_file($filename, $output, $mode='w') {
	global $Paths, $VerboseGenerate;

	if ($VerboseGenerate) {
		echo lang('general', 'write').": ".$filename."<br />\n";
	}

	// open up..
	$opened = false;
	if ($fh = @fopen( $filename, $mode)) {
		$opened = true;
	} else {
		if ($fh = @fopen( fixpath($Paths['pivot_path'].$filename), 'w' )) {
			$opened = true;
		}
	}

	// if opening failed it's no reason to continue
	if (!$opened) {
		debug("Unable to open (handle to) $filename - can not write to file");
		if ($VerboseGenerate) {
			echo lang('general', 'write_open_error').": ".$filename."<br />\n";
		}
		return;
	}

	// wrrrriting!
	if(!fwrite($fh, $output)) {
		if ($VerboseGenerate) {
			echo lang('general', 'write_write_error').": ".$filename."<br />\n";
		}
	}

	fclose( $fh );
	chmod_file($filename);
}

/**
 * Chmods a file (according to the configuration).
 */
function chmod_file($filename) {
	global $Cfg;
	$oldumask = umask(0);
	// to avoid typecasting misery, just use some ugly hardcoded if's
	if ($Cfg['chmod']=='0777') {
		@chmod ($filename, 0777);
	} else if ($Cfg['chmod']=='0755') {
		@chmod ($filename, 0755);
	} else if ($Cfg['chmod']=='0666') {
		@chmod ($filename, 0666);
	} else if ($Cfg['chmod']=='0655') {
		@chmod ($filename, 0655);
	} else {
		@chmod ($filename, 0644);
	}
	umask($oldumask);
}


// redirect. first through header, otherwise by javascript..
function redirect($url, $rand = 0, $die=1) {
	global $Cfg, $Current_weblog;

	// to make sure the visitor gets to see the new page, we redirect with a dummy parameter..
	if ($rand==1) {
		srand ((double) microtime() * 1000000);
		$randval = rand();
		$url.="?r=".$randval;
	}

	$url= str_replace('&amp;', '&', $url);

	header("Location: ".$url);
	echo "<script>self.location='$url';</script>";
	if ($die==1) { die(); } else { echo "don't die"; }


}

// wrapped by a 'function_exists', since it might already be defined..
if (!function_exists('safe_string')) {

	/**
	 * For filenames and titles and such we can't use all characters, so this function
	*/
	function safe_string($str, $strict=FALSE) {
		global $i18n_use;
		if ($i18n_use) {
			return i18n_safe_string($str, $strict);
		}

		$str = strip_tags($str);

		$str = strtr (
				strtr($str,
					'©®¹¾¼ÀÁÂÃÅÇÈÉÊËÌÍÎÏÑÒÓÔÕØÙÚÛÝàáâãäåçèéêëìíîïñòóôõøùúûýÿ',
					'SZszYAAAAACEEEEIIIINOOOOOUUUYaaaaaaceeeeiiiinooooouuuyy'),
				array(
					'Þ' => 'TH',
					'þ' => 'th',
					'Ð' => 'DH',
					'ð' => 'dh',
					'ä' => 'ae',
					'ü' => 'ue',
					'ö' => 'oe',
					'Ä' => 'AE',
					'Ü' => 'UE',
					'Ö' => 'OE',
					'ß' => 'ss',
					'¦' => 'OE',
					'¶' => 'oe',
					'Æ' => 'AE',
					'æ' => 'ae',
					'µ' => 'mu'
				)
			);

		$str=str_replace("&amp;", "", $str);

		if ($strict) {
			$str=str_replace(" ", "_", $str);
			$str=strtolower(ereg_replace("[^a-zA-Z0-9_]", "", $str));
		} else {
			$str=ereg_replace("[^a-zA-Z0-9 _.,-]", "", $str);
		}
		return $str;
	}
}


/**
* Remove trailing whitespace from a given string. Not just spaces and linebreaks,
* but also &nbsp;, <br />'s and the like.
*/
function strip_trailing_space($text) {
	global $db, $Cfg;

	$text=trim($text)."[[end]]";
	$end_p = preg_match("~</p>\[\[end\]\]$~mi", $text);
	$text = preg_replace("~(&nbsp;|<br>|<br />|<p>|</p>|\n|\r| )*\[\[end\]\]$~mi", "", $text);
	if ($end_p) { $text.="</p>"; }

	return $text;
}

/**
 * convert linebreaks to <br />
 */
function convert_br($text) {

	debug("convert_br: ". $text);
	// first of all, convert <p> tags with an align property to a temporary tag..
	$text = preg_replace("~<p align=(.*)>(.*)</p>~mUi", "<XX align=\\1>\\2</XX>", $text);

	//convert linebreaks to <br />
	$text = nl2br($text);

	// convert <XX> back, and strip the extra <br />..
	$text = str_replace("<XX ", "<p ", $text);
	$text = str_replace("</XX>", "</p>", $text);
	$text = str_replace("</p><br />", "</p>", $text);
	$text = str_replace("<br />\n<p ", "<p ", $text);
	$text = str_replace("<br />\r\n<p ", "<p ", $text);

	return $text;

}


/**
 * Returns a string, based on whether we're generating output for
 * strict XHTML or plain old HTML
 */
function set_target($forxhtml, $forhtml) {
	global $Weblogs, $Current_weblog;

	// xhtml workaround
	if ($Weblogs[$Current_weblog]['target_blank']==2) {
		return $forxhtml;
	} else {
		// for silly people that have <base target="_blank"> set..
		return $forhtml;
	}

}



/**
 * adapted from an article by Allan Kent on phpbuilder.com
 * this function takes the current system time and date, and offsets
 * it to get the time and date we want to output to our users.
 */
function get_current_date() {
	global $Cfg;

	//debug("GCD: ".$Cfg['timeoffset_unit']." x ".$Cfg['timeoffset']);

	$date_time_array  = getdate();

	$hours =  $date_time_array["hours"];
	$minutes =  $date_time_array["minutes"];
	$seconds =  $date_time_array["seconds"];
	$month =  $date_time_array["mon"];
	$day =  $date_time_array["mday"];
	$year =  $date_time_array["year"];

	$timestamp =  mktime($hours ,$minutes, $seconds,$month ,$day, $year);

	switch ($Cfg['timeoffset_unit']) {

		case "y": $year +=$Cfg['timeoffset']; break;
		case "m": $month +=$Cfg['timeoffset']; break;
		case "d": $day+=$Cfg['timeoffset']; break;
		case "h": $hours+=$Cfg['timeoffset']; break;
		case "i": $minutes+=$Cfg['timeoffset']; break;

	}
	$timestamp =  mktime($hours ,$minutes, $seconds,$month ,$day, $year);
	return $timestamp;

}

/**
 * Outputs the HTML to open the Ping Window
 */
function open_ping_window($weblogs) {
	global $Cfg, $Pivot_Vars;




	if (isset($Cfg['ping']) && ($Cfg['ping'] == 1) ) {
		$pingurl= "includes/ping.php?session=". $Pivot_Vars['session'];

		if (is_array($weblogs) && (count($weblogs)>0)) {
			foreach ($weblogs as $key => $weblog) {
				$weblogs[$key] = para_weblog($weblog);
			}
			$pingurl .= "&weblogs=". implode('|', $weblogs);
		}

		$rand=rand(10000,99999);
		printf("<div id='note'></div>");
		printf("<script>setTimeout(\"open_win('%s','ping_%s', 'location=no, status=yes, scrollbars=yes, resizable=yes, width=420, height=200')\",  1000);\n</script>\n", $pingurl, $rand);
	}

}


/**
 * When an entry is created or edited, it's passed in $_POST ($Pivot_vars).
 * This function gets all the variables and returns it as an $entry array
 *
 * @return array
 */
function get_entry_from_post() {
	global $Users, $Pivot_Vars, $useWysiwyg, $db, $Cfg;

	if ( (isset($Pivot_Vars['f_code'])) && ($Pivot_Vars['f_code']!=""))  {
		$entry = $db->read_entry($Pivot_Vars['f_code']);
		$entry['oldstatus'] = $entry['status'];
	} else {
		$entry['code'] = ">";
	}

	if ( (strlen($Pivot_Vars['f_createdate_1'])>7) && ($Pivot_Vars['f_createdate_1']!="00-00-0000") ) {
		// if the date is filled, we try to parse it..
		$entry['date'] = fix_date($Pivot_Vars['f_createdate_1'], $Pivot_Vars['f_createdate_2']);
	} else {
		// otherwise we'll just assume 'now'.
		$entry['date'] = date("Y-m-d-H-i", get_current_date());
	}


	if (isset($Pivot_Vars['f_introduction_text'])) {
		$entry['introduction'] = strip_trailing_space($Pivot_Vars['f_introduction_text']);
		$entry['body'] = strip_trailing_space($Pivot_Vars['f_body_text']);

	} else {
		$entry['introduction'] = strip_trailing_space($Pivot_Vars['f_introduction']);
		$entry['body'] = strip_trailing_space($Pivot_Vars['f_body']);
	}

	// If magic_quotes_gpc is set, we need to strip slashes..
	if (get_magic_quotes_gpc()) {
		$entry['introduction'] = stripslashes($entry['introduction']);
		$entry['body'] = stripslashes($entry['body']);
		$Pivot_Vars['f_title'] = stripslashes($Pivot_Vars['f_title']);
		$Pivot_Vars['f_subtitle'] = stripslashes($Pivot_Vars['f_subtitle']);
	}

	$entry['introduction'] = tidy_html($entry['introduction'], TRUE);
	$entry['body'] = tidy_html($entry['body'], TRUE);
	$entry['category'] = @$Pivot_Vars['f_catmult'];
	$entry['publish_date'] = fix_date($Pivot_Vars['f_publishdate_1'], $Pivot_Vars['f_publishdate_2']);
	$entry['edit_date'] = date("Y-m-d-H-i");
	$entry['title'] = strip_trailing_space($Pivot_Vars['f_title']);
	$entry['subtitle'] = strip_trailing_space($Pivot_Vars['f_subtitle']);
	$entry['user'] = $Pivot_Vars['f_user'];
	$entry['convert_lb'] = $Pivot_Vars['convert_lb'];
	$entry['status'] =  $Pivot_Vars['f_status'];
	$entry['allow_comments'] =  $Pivot_Vars['f_allowcomments'];
	$entry['vialink'] =  strip_tags($Pivot_Vars['f_vialink']);
	$entry['viatitle'] =  strip_tags($Pivot_Vars['f_viatitle']);

	// Only store the tb_url if we're not publishing. (because if we publish, we ping it, and forget it)
	if ($entry['status']!="publish") {
		$entry['tb_url'] =  strip_tags($Pivot_Vars['tb_url']);
	} else if (isset($entry['tb_url'])) {
		unset($entry['tb_url']);
	}

	// Gather all tags from introduction and body in keywords..
	$tags = getTags(false, $entry['introduction'] . $entry['body'], strip_tags($Pivot_Vars['f_keywords']));
	$entry['keywords'] = implode(", ", $tags);

	return $entry;

}



/**
 * Function used by the 'backup config' option:
 * adds a file to the zip.
 *
 * @param string $filename
 * @return void
 */
function addfiletozip($filename) {
	global $zipfile;

	$data = implode("", file($filename));
	$zipfile -> addFile($data, $filename);
}

/**
 * Function used by the 'backup db' option:
 * adds a directory (recursively) to the zip.
 *
 * @param string $dirname
 * @return void
 */
function adddirtozip($dirname) {
	$d = dir($dirname);
	while (false !== ($entry = $d->read())) {
		if ( ($entry != ".") && ($entry != "..") ) {
			if (is_dir($dirname.$entry)) {
				adddirtozip($dirname.$entry."/");
			} else {
				addfiletozip($dirname.$entry);
			}
		}
	}
	$d->close();
}



/**
 * piv_error prints an error message, does a debug backtrace print out
 * and exits.
 *
 * On the admin pages it will just display the text on the current page and
 * add the page footer (if endpage is equal to 1). On weblog pages it will use
 * the extra page template for the current weblog.
 *
 * @param string $name
 * @param string $message
 * @param boolean $endpage
 */
function piv_error($name, $message, $endpage=0){
	global $db, $Current_weblog, $Weblogs, $Pivot_Vars;

	if (!isset($db)) {
		$db = new db();
	}

        if (!isset($Current_weblog)) {
		reset($Weblogs);
		if (isset($Pivot_Vars['w'])) {
			$Current_weblog = weblog_from_para($Pivot_Vars['w']);
			if (!$Current_weblog) {
				$Current_weblog = key($Weblogs);
			}
		} else {
			$Current_weblog = key($Weblogs);
		}
	}

	debug_printbacktrace();

	$text = "<div class='pivot-error'>\n<h2>$name</h2>\n\n".
		"<p>$message</p>\n</div>\n";
	if($endpage==1 || (!defined('LIVEPAGE') && !defined('INWEBLOG'))) {
		echo $text;
		PageFooter();
		exit();
	}


	// Use the extra template for the current weblog
	if (isset($Weblogs[$Current_weblog]['extra_template']) && ($Weblogs[$Current_weblog]['extra_template']!="") ) {
		$template_html = load_template($Weblogs[$Current_weblog]['extra_template']);
	} else {
        	$template_html = load_template($Weblogs[$Current_weblog]['archive_template']);
	}

	// Match and replace the [[weblog]] tags for the error output
	$template_html = replace_subweblogs_templates($template_html,$text);

	if (!($template_html)) {
		ErrorOut("Could not load template file: <i>$template</i> [does not exist]");
	} else {
		$output=$template_html;
		$output=parse_step4($output);
	}

	echo ($output);
	flush();
	exit();
}

/**
 * Sends notification for any type - currently only entries/comments.
 *
 * @param string $type
 * @param array $data
 * @return void
 */
function notify_new($type,$data){
	global $Paths, $Current_weblog, $Users, $Weblogs, $i18n_use;
        // FIXME:
        // $contact_addr used below is not set because there is really no
        // good setting for that - the comment_emailto setting for each e-mail
        // isn't meant for the from header...
	if ($type == 'comment') {
		// splitting up input data
		$entry = $data[0];
		$comment = $data[1];
                if (isset($data[2]) && $data[2]) {
			debug("Notification of new comment surpressed.");
			return;
		}

		// make a nice title for the mail..
		if (strlen($entry['title'])>2) {
			$title=$entry['title'];
			$title=strip_tags($title);
		} else {
			$title=substr($entry['introduction'],0,300);
			$title=strip_tags($title);
			$title=str_replace("\n","",$title);
			$title=str_replace("\r","",$title);
			$title=substr($title,0,60);
		}

		$id = safe_string($comment["name"],TRUE) . "-" .  format_date($comment["date"], "%ye%%month%%day%%hour24%%minute%");

		// Make the array of users that want to be notified via email..
		$notify_arr = array();

		foreach($entry['comments'] as $temp_comm) {
			if (($temp_comm['notify']==1) && (isemail($temp_comm['email'])))	{
				$notify_arr[ $temp_comm['email'] ] = 1;
			}
			if (($temp_comm['notify']==0) && (isemail($temp_comm['email'])))	{
				unset( $notify_arr[ $temp_comm['email'] ] );
			}
		}

		// don't send to the user that did the comment...
		if (isset($notify_arr[ $comment['email'] ])) {
			unset( $notify_arr[ $comment['email'] ] );
		}

		// send mail to those on the 'notify me' list..
		if (count($notify_arr)>0) {
			$contact_addr = $Users[$entry['user']]['email'];
			$user = $Users[$entry['user']]['nick'];
			if (empty($user)) {
				$user = $entry['user'];
			}
			if (!$i18n_use) $user = utf8_encode($user);
			$body=sprintf(lang('comment','email_posted_comm').":\n\n", unentify($comment['name']));
			$body.=sprintf("%s", unentify($comment['comment']));
			$body.=sprintf("\n\n-------------\n");
			$body.=sprintf(lang('weblog_text','name').": %s\n", unentify($comment['name']));
			$body.=sprintf(lang('comment','email_comm_on')."\n", $title);
			$body.=sprintf("\n%s:\n%s%s\n", lang('comment','email_view_entry'), $Paths['host'], make_filelink($entry['code'], "", ""));
			$body.=sprintf("%s:\n%s%s\n", lang('comment','email_view_comm'), $Paths['host'], make_filelink($entry['code'], "", $id));
			if (!$i18n_use) $body = utf8_encode($body);
			$body = decode_text($body,'special');

			$contact_name = '=?UTF-8?B?'.base64_encode($user).'?=';
			$add_header = sprintf("From: \"'%s'\" <%s>\n", $contact_name, $contact_addr);
			$add_header.="MIME-Version: 1.0\n";
			$add_header.="Content-Type: text/plain; charset=UTF-8; format=flowed\n";
			$add_header.="Content-Transfer-Encoding: 8bit\n";

			$subject = lang('comment','email_subject_notify')." Re: $title";
			if (!$i18n_use) $subject = utf8_encode($subject);
			$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

			foreach($notify_arr as $addr => $val) {
				$addr = trim($addr);
				@mail($addr, $subject, $body, $add_header);
				debug("Sent Notify to $addr from '".$comment['name']."'");
			}
		}
	} else if ($type == 'entry') {
		$entry = $data;

		// We need to determine the current weblog..
		$weblogs = find_weblogs_with_cat($entry['category']);
		$Current_weblog = current($weblogs);

		// make a nice title for the mail..
		if (strlen($entry['title'])>2) {
			$title=$entry['title'];
			$title=strip_tags($title);
		} else {
			$title=substr($entry['introduction'],0,300);
			$title=strip_tags($title);
			$title=str_replace("\n","",$title);
			$title=str_replace("\r","",$title);
			$title=substr($title,0,60);
		}
		$title = unentify($title);

		// Make the array of users that want to be notified via email..
		$comment_users = get_registered_visitors();
		$notify_arr = array();
		foreach ($comment_users as $commuserdata) {
			if ($commuserdata['verified'] && !$commuserdata['disabled'] && $commuserdata['notify_entries']) {
				$notify_arr[ $commuserdata['email'] ] = $commuserdata['name'];
			}
		}

		// send mail to those on the 'notify me' list..
		if (count($notify_arr)>0) {
			$contact_addr = $Users[$entry['user']]['email'];

			// Get the user's nickname (or username if nickname
			// isn't set), and the weblog's name.
			$user = $Users[$entry['user']]['nick'];
			if (empty($user)) {
				$user = $entry['user'];
			}
			if (!$i18n_use) $user = utf8_encode($user);
			$weblog = find_weblogs_with_cat($entry['category']);
			$weblog = $Weblogs[$weblog[0]]['name'];

			$defaultbody = sprintf(lang('comment','email_posted_entry').":\n\n", $user );
			$defaultbody .= sprintf("%s\n\n%s\n", $title, unentify(strip_tags($entry['introduction'])));
			$defaultbody .= sprintf("\n\n-------------\n");

			$defaultbody .= sprintf("\n%s:\n%s%s\n", lang('comment','email_view_fullentry'), $Paths['host'], make_filelink($entry, "", ""));

			$defaultbody .= sprintf("\n%s:\n%s%suser.php%s\n", lang('comment','email_view_settings'),
				$Paths['host'], $Paths['pivot_url'], "?w=".para_weblog($Current_weblog));

			$defaultbody .= sprintf("\n%s: %%name%% (%%addr%%)\n", lang('comment','email_sent_to'), $Paths['host'], $Paths['pivot_url']);

			$defaultbody = decode_text($defaultbody, 'special');
			if (!$i18n_use) $defaultbody = utf8_encode($defaultbody);

			$contact_name = '=?UTF-8?B?'.base64_encode($user).'?=';
			$add_header = sprintf("From: \"'%s'\" <%s>\n", $contact_name, $contact_addr);
			$add_header.="MIME-Version: 1.0\n";
			$add_header.="Content-Type: text/plain; charset=UTF-8; format=flowed\n";
			$add_header.="Content-Transfer-Encoding: 8bit\n";

			$subject = lang('comment','email_subject_notify')." $title - $weblog";
			if (!$i18n_use) $subject = utf8_encode($subject);
			$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

			$notified = array();

			foreach($notify_arr as $addr => $name) {

				$addr = trim($addr);

				$body = $defaultbody;
				$body = str_replace("%name%", $name, $body);
				$body = str_replace("%addr%", $addr, $body);

				@mail($addr, $subject, $body, $add_header);
				debug("Sent Notify to $addr from '".$entry['user']."'");

				$notified[] = sprintf("%s (%s)", $name, $addr);

			}

			$notified = sprintf("%s: %s", lang('comment','email_notified') , implode(", ", $notified) );

			return $notified;

		}
	} else if ($type == 'visitor_registration') {
		$type = $data[0];
		$name = $data[1];
		// Only sending notification to superadmin
		foreach ($Users as $key => $value) {
			if ($value['userlevel'] == 4) {
				$user = $key;
				break;
			}
		}
		$contact_addr = $Users[$user]['email'];
		$contact_name = $Users[$user]['nick'];
		if (empty($contact_name)) {
			$contact_name = $user;
		}
		if ($type == 'add') {
			$subject = "New visitor registration - $name";
		} else {
			$subject = "New visitor confirmed - $name";
		}
		$body = $subject;
		$body .= sprintf("\n\nView visitor information:\n%s%s?menu=admin&func=admin&do=seecommusers\n",
			$Paths['host'], $Paths['pivot_url']);
		if (!$i18n_use) { 
			$contact_name = utf8_encode($contact_name);
			$subject = utf8_encode($subject);
			$body = utf8_encode($body);
		}

		$contact_name = '=?UTF-8?B?'.base64_encode($contact_name).'?=';
		$add_header = sprintf("From: \"'%s'\" <%s>\n", $contact_name, $contact_addr);
		$add_header.="MIME-Version: 1.0\n";
		$add_header.="Content-Type: text/plain; charset=UTF-8; format=flowed\n";
		$add_header.="Content-Transfer-Encoding: 8bit\n";
		$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

		@mail($contact_addr, $subject, $body, $add_header);
		debug("Sent registered visitor notification for $name");
		return;

	} else {
		debug("Unknown notify type '$type'");
	}
}


/**
 * Returns all Registered Visitors as an array.
 *
 * @return $array
 */
function get_registered_visitors() {
	global $Paths;
	$comment_users = array();
	if ($dh = opendir($Paths['pivot_path']."db/users/")) {
		while (($file = readdir($dh)) !== false) {
			if (getextension($file) == "php") {
				$name_md5 = basename($file,".php");
				$comment_users[$name_md5] = load_serialize($Paths['pivot_path'].'db/users/'.$file);;
			}
		}
	}
	closedir($dh);
	return $comment_users;
}


/**
 * convert relative URL's to absolute URL's. Used when we need an absolute path in RSS feeds.
 *
 * @param string $link
 * @return string
 */
function RelativeToAbsoluteURLS($link) {

	$host = "http://".$_SERVER['HTTP_HOST'];

	$link = preg_replace("/a href=(['\"])(?!http)/mUi", "a href=\\1$host\\2", $link);
	$link = preg_replace("/img src=(['\"])(?!http)/mUi", "img src=\\1$host\\2", $link);

	return ($link);
}


function inweblogcheck() {
	global $Paths;

	// store the current dir, and change to the pivot dir.
	$olddir = getcwd();
	chdir($Paths['pivot_path']);

	// start input buffering..
	ob_start();

 	if (timedpublishcheck()) {
 		if (!headers_sent()) {
 			header("location: ". $_SERVER['REQUEST_URI']);
 		} else {
 			// else the next visitor will just see the updated page..
 		}
 	}

 	// stop buffering and flush the output..
 	ob_end_flush();

 	// change back to the original dir.
	chdir($olddir);
}

function timedpublishcheck() {
	global $serialize_cache, $Cfg, $Paths;

 	$temp_db = new db();

 	if (isset($Cfg['check_for_timed_publish']) && ($Cfg['check_for_timed_publish']>0)) {
 		$amount = $Cfg['check_for_timed_publish'];
 	} else {
 		$amount = 10;
 	}

 	$entries = $temp_db->getlist(-$amount, 0, "", "", false, "date");

 	$date = date("Y-m-d-H-i", get_current_date());

	$regen = false;

	foreach ($entries as $entry) {


		if (($entry['status'] == "timed" ) ) {


			$entry = $temp_db->read_entry($entry['code']);

			if ($entry['publish_date'] <= $date) {

				debug("toggle");

				$entry['date'] = $entry['publish_date'];
				$entry['status'] = "publish";

				$temp_db->set_entry($entry);
				$temp_db->save_entry(TRUE);
				notify_new('entry',$entry);

				$regen = TRUE;

				// 2004/10/17 =*=*= JM
				// can only do this if we know Cfg['search_index'] status...
				if( isset( $Cfg )) {
					// if the global index as they are made var is set - can continue
					// the rest is copied from 'entrysubmit_screen()' in pv_core.php
					if(( '1'==$Cfg['search_index'] )&&( can_search_cats( cfg_cat_nosearchindex(),$entry['category'] ))) {
						include_once( 'modules/module_search.php' );
						update_index( $temp_db->entry );
						debug('update search index: '.$temp_db->entry['code']);
					}
				}
			}
		}
	}

	if ($regen) {
		buildfrontpage_function();
		return TRUE;
	} else {
		return FALSE;
	}

}



/**
 * add_hook adds a hook into pivot functionality. It will look for the
 * matching file in extensions/hooks/, and include_once it, it it is present.
 * the first time it is included, the _init function will be called.
 *
 * @param string hook_name
 * @param string hook_type
 *
 */
function add_hook($hook_name="", $hook_type="pre") {
	global $Paths;

	if ($hook_name=="") {
		return;
	}

	$hook = $hook_type."_".$hook_name;

	if (file_exists($Paths['extensions_path']."hooks/".$hook.".php")) {

		if(!function_exists($hook."_init")) {
			include_once($Paths['extensions_path']."hooks/".$hook.".php");
			$init_function = $hook."_init";
			if(function_exists($init_function)) {
				$init_function();
			}
		}
	} else {
		// debug("File ".$Paths['extensions_path']."hooks/".$hook.".php doesn't exist.");
	}

	return;

}


/**
 * execute_hook runs the code in the main function in the hook. It will check
 * if the matching finction is present, and then execute it.
 *
 *
 * @param string hook_name
 * @param string hook_type
 * @param variable params
 *
 */
function execute_hook($hook_name="", $hook_type="pre", &$param1, &$param2, &$param3 ) {
	global $Paths;

	if ($hook_name=="") {
		return;
	}

	$hook = $hook_type."_".$hook_name;

        // Non-existing hook file is reported when we call add_hook.
	if (!file_exists($Paths['extensions_path']."hooks/".$hook.".php")) {
		return false;
	}

	if(function_exists($hook)) {
		debug("exec_hook: $hook");
		$hook($param1, $param2, $param3);
		return true;
	} else {
		debug("hook not present: $hook");
		return false;
	}


}


/**
 * Calculates the time difference between the web and file server.
 *
 * This function is used by hardened bbclone and trackbacks (to get the
 * correct time when deleting keys that are older than a given time).
 *
 * @param boolean $debug
 * @return int
 */
function timediffwebfile($debug=false) {
	global $Paths;
	$dummy = $Paths['pivot_path']."db/dummy.txt";
	@touch($dummy);
	$offset = (time() - filectime($dummy));
	@unlink($dummy);
	if ($debug) {
		debug("The web and file server time diff: $offset");
	}
	return $offset;
}


/**
 * Check if the w parameter is needed in Pivot
 * generated URL (for sites with multiple weblogs).
 *
 * Whenever a weblog is undetermined Pivot, resets
 * $Weblogs to get the key of the first weblog. We
 * are doing the same here.
 *
 * @return boolean
 * @param string $weblog Weblog to be examined.
 * @param array $categories
 */
function para_weblog_needed($weblog, $categories = "") {
	global $Cfg, $Weblogs;
	reset($Weblogs);
	if ($Cfg['weblog_count']>1) {
		if ($categories != "") {
			$in_weblogs = find_weblogs_with_cat($categories);
			if ((count($in_weblogs) != 0) && !in_array($weblog,$in_weblogs)) {
				return true;
			}
		}
		if (key($Weblogs)!=$weblog) {
			return true;
		}
	}
	return false;
}


/**
 * Compares versions of software.
 *
 * Versions should use the "MAJOR.MINOR.EDIT" scheme, or in other words
 * the format "x.y.z" where (x, y, z) are numbers in [0-9].
 *
 * @param string $currentversion
 * @param string $requiredversion
 * @return boolean
 *
 */
function check_version($currentversion, $requiredversion) {
   list($majorC, $minorC, $editC) = split('[/.-]', $currentversion);
   list($majorR, $minorR, $editR) = split('[/.-]', $requiredversion);

   if ($majorC > $majorR) { return true; }
   if ($majorC < $majorR) { return false; }
   // same major - check minor
   if ($minorC > $minorR) { return true; }
   if ($minorC < $minorR) { return false; }
   // and same minor
   if ($editC  >= $editR) { return true; }
   return false;
}

/**
 * Checks if the version of Pivot is as required.
 *
 * The required version must be given in the format "x.y.z" where (x, y, z)
 * are numbers in [0-9]. ("z" may be left out and is then assumed to be 0.)
 *
 * @param string $requiredversion
 * @return boolean
 */
function check_pivot_version($requiredversion) {
	global $build;
	preg_match("/[^\d]*([\d.-]*).*/",$build,$match);
	$buildversion = $match[1];
	list($majorB, $minorB, $editB) = split('[/.-]', $buildversion);
	list($majorR, $minorR, $editR) = split('[/.-]', $requiredversion);
	if (!isset($editB)) $editB = 0;
	if (!isset($editR)) $editR = 0;
	$buildversion = implode(".", array($majorB, $minorB, $editB));
	$requiredversion = implode(".", array($majorR, $minorR, $editR));

	return check_version($buildversion, $requiredversion);
}

/**
 * Defines the function str_word_count() for PHP versions older than 4.3.0.
 *
 * The code is taken from the PHP_Compat package.
 *
 * @link        http://php.net/function.str_word_count
 * @author      Aidan Lister <aidan@php.net>
 * @version     $Revision: 1.2 $
 */
if (!function_exists('str_word_count'))
{
    function str_word_count($string, $format = null)
    {
        if ($format != 1 && $format != 2 && $format !== null) {
            trigger_error("str_word_count() The specified format parameter, '$format' is invalid", E_USER_WARNING);
            return false;
        }

        $word_string = preg_replace('/[0-9]+/', '', $string);
        $word_array  = preg_split('/[^A-Za-z0-9_\']+/', $word_string, -1, PREG_SPLIT_NO_EMPTY);

        switch ($format) {
            case null:
                return count($word_array);
                break;

            case 1:
                return $word_array;
                break;

            case 2:
                $lastmatch = 0;
                $word_assoc = array();
                foreach ($word_array as $word) {
                    $word_assoc[$lastmatch = strpos($string, $word, $lastmatch)] = $word;
                }
                return $word_assoc;
                break;
        }
    }
}



if (!defined('CASE_LOWER')) {
    define('CASE_LOWER', 0);
}

if (!defined('CASE_UPPER')) {
    define('CASE_UPPER', 1);
}


/**
 * Defines the function array_change_key_case() for PHP versions older than 4.2.0.
 *
 * The code is taken from the PHP_Compat package.
 *
 * @link        http://php.net/function.array_change_key_case
 * @author      Stephan Schmidt <schst@php.net>
 * @author      Aidan Lister <aidan@php.net>
 * @version     $Revision: 1.2 $
 */
if (!function_exists('array_change_key_case'))
{
    function array_change_key_case($input, $case = CASE_LOWER)
    {
        if (!is_array($input)) {
            trigger_error('array_change_key_case(): The argument should be an array', E_USER_WARNING);
            return false;
        }

        $output   = array ();
        $keys     = array_keys($input);
        $casefunc = ($case == CASE_LOWER) ? 'strtolower' : 'strtoupper';

        foreach ($keys as $key) {
            $output[$casefunc($key)] = $input[$key];
        }

        return $output;
    }
}


?>
