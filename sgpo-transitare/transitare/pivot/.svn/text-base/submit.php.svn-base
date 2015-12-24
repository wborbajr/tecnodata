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

include_once("pv_core.php");
include_once("modules/module_userreg.php");

// convert encoding to UTF-8
i18n_array_to_utf8($Pivot_Vars, $dummy_variable);

// Using our integrated Spam Killer
killspam();

$message = "";

// Check if the spam-key is set, but only for comments. Not for 'votes' and 'karma'
if ( (isset($Pivot_Vars['piv_comment'])) && (!isset($Pivot_Vars['piv_spkey'])) )  {
	echo "Spam is not appreciated.";
	logspammer( $Pivot_Vars['piv_comment'], "sskc");
	die();
} else if( (isset($Pivot_Vars['piv_comment'])) &&
		($Pivot_Vars['piv_spkey'] != md5($Cfg['server_spam_key'].$Pivot_Vars['piv_code'])))  {
	echo "Spam is not appreciated.";
	logspammer( $Pivot_Vars['piv_comment'], "sskc");
	die();
}

add_hook("sumbit", "pre");

/**
 * Creates the file that holds the last comments.
 *
 * @param array $tempcomm
 */
function generate_last_comments($tempcomm) {
	global $my_weblog, $db, $Cfg;

	// if it exists, load it
	if (file_exists("db/ser_lastcomm.php")) {
		 $lastcomm = load_serialize("db/ser_lastcomm.php", true, true);
	} else {
		 $lastcomm = array();
	}	
	
	
	$lastcomm[] = array(
		'name' => $tempcomm['name'],
		'email' => $tempcomm['email'],
		'url' => $tempcomm['url'],
		'date' => $tempcomm['date'],
		'comment' => trimtext($tempcomm['comment'],250),
		'code' => $db->entry['code'],
		'title' => trimtext($db->entry['title'],50),
		'category' => $db->entry['category'],
		'ip' => $tempcomm['ip'],

	);

	if (count($lastcomm)>intval($Cfg['lastcomm_amount_max'])) {
		array_shift ($lastcomm);
	}

	save_serialize("db/ser_lastcomm.php", $lastcomm );

}



/**
 * Creates the file that holds the queue for comment moderation.
 *
 * @param array $tempcomm
 */
function generate_moderation_queue($tempcomm) {
	global $my_weblog, $db;

	// if it exists, load it
	if (file_exists("db/ser_modqueue.php")) {
		 $lastcomm = load_serialize("db/ser_modqueue.php", true, true);
	} else {
		 $lastcomm = array();
	}


	$lastcomm[] = array(
		'name' => $tempcomm['name'],
		'email' => $tempcomm['email'],
		'url' => $tempcomm['url'],
		'date' => $tempcomm['date'],
		'comment' => $tempcomm['comment'],
		'code' => $db->entry['code'],
		'title' => trimtext($db->entry['title'],50),
		'category' => $db->entry['category'],
		'ip' => $tempcomm['ip'],

	);


	save_serialize("db/ser_modqueue.php", $lastcomm );

}



function fill_comment_form_submit($name, $email, $url, $cookie, $comm, $notify, $discreet) {

	// Clean up user input
	$name = js_sanctify($name);
	$email = js_sanctify($email);
	$url = js_sanctify($url);
	$comm = js_sanctify($comm, '<b>,<i>,<em>,<strong>');
        
	$output = "<script type=\"text/javascript\">\n";
	$output .= "var form = document.getElementById('form');\n";
	$output .= "if (form) {\n";
	if ($name!="") {
		$output .= "form.piv_name.value='".$name."';\n";
	}
	if ($email!="") {
		$output .= "form.piv_email.value='".$email."';\n";
	}
	if ($url!="") {
		$output .= "form.piv_url.value='".$url."';\n";
	}
	if ($comm!="") {
		$output .= "form.piv_comment.value='".$comm."';\n";
	}

	if ($cookie=="yes") {
		$output .= "form.piv_rememberinfo[0].checked=true;\n";
	} else {
		$output .= "form.piv_rememberinfo[1].checked=true;\n";
	}

	if ($notify!="") {
		$output .= "form.piv_notify.checked=true;\n";
	}
	if ($discreet!="") {
		$output .= "form.piv_discreet.checked=true;\n;";
	}
	$output .= "}\n</script>\n";

	return $output;

}


function send_mail_comm() {
	global $Cfg, $db, $my_comment, $ip, $date, $Weblogs, $Current_weblog, $Paths, $Users, $i18n_use;

	$cat_weblogs = find_weblogs_with_cat($db->entry['category']);

	$addr_arr= array();

	foreach ($cat_weblogs as $this_weblog) {
		if ($Weblogs[$this_weblog]['comment_sendmail'] == 1) {
			$addr_arr = array_merge($addr_arr, explode(",", $Weblogs[$this_weblog]['comment_emailto']));
		}
	}

	// make a nice title for the mail..
	if (strlen($db->entry['title'])>2) {
		$title=$db->entry['title'];
		$title=strip_tags($title);
	} else {
		$title=substr($db->entry['introduction'],0,300);
		$title=strip_tags($title);
		$title=str_replace("\n","",$title);
		$title=str_replace("\r","",$title);
		$title=substr($title,0,60);
	}

	if (!$i18n_use) { $title = utf8_encode($title); }

	// maybe send some mail to authors..
	if (count($addr_arr)>0) {
		$adminurl = $Paths['host'].$Paths['pivot_url']."index.php?";
		$id = safe_string($my_comment["name"],TRUE) . "-" .  format_date($my_comment["date"], "%ye%%month%%day%%hour24%%minute%");
		$editlink = $adminurl."menu=entries&func=editcomments&id=".$db->entry['code'];
		$approvelink = $adminurl."menu=moderate_comments&".urlencode($id)."=1";
		$deletelink = $adminurl."menu=moderate_comments&".urlencode($id)."=2";
		$blocklink = $adminurl."menu=entries&func=editcomments&id=".
									$db->entry['code']."&blocksingle=".$my_comment['ip'];

		$comment = ($my_comment['comment']);

		// $comment = unentify($comment);

		$body=sprintf(lang('comment','email_posted_comm').":\n\n", unentify($my_comment['name']));
		$body.=sprintf("%s", $comment);
		$body.=sprintf("\n\n-------------\n");
		$body.=sprintf(lang('weblog_text','name').": %s\n", unentify($my_comment['name']));
		$body.=sprintf(lang('weblog_text','ip').": %s\n", $my_comment['ip']);
		$body.=sprintf(lang('weblog_text','date').": %s\n", $my_comment['date']);
		$body.=trim(sprintf(lang('weblog_text','email').": %s", $my_comment['email']))."\n";
		$body.=trim(sprintf(lang('weblog_text','url').": %s\n", $my_comment['url']))."\n";
		$body.=sprintf("\n".lang('comment','email_comm_on')."\n", $title);

		if (count($notify_arr)>0) {
			$body.=sprintf(lang('comment','notifications').": %s\n", implode(", ", array_keys($notify_arr)));
		}

		$body.=sprintf("-------------\n");
		if ($Cfg['moderate_comments']==1) {
			$body.=sprintf(lang('comment','email_allow_comm').":\n%s\n", $approvelink);
			$body.=sprintf("\n".lang('comment','email_delete_comm').":\n%s\n", $deletelink);
		}
		$body.=sprintf("\n%s:\n%s%s\n", lang('comment','email_view_entry'), $Paths['host'], make_filelink("", "", ""));
		$body.=sprintf("\n%s:\n%s%s\n", lang('comment','email_view_comm'), $Paths['host'], make_filelink("", "", $id));
		$body.=sprintf("\n%s:\n%s\n", lang('comment','email_edit_comm'), $editlink );
		$body.=sprintf("\n%s:\n%s\n", lang('comment','email_block_ip'), $blocklink );
		if (!$i18n_use) $body = utf8_encode($body);

		$name = $my_comment['name'];
		if (!$i18n_use) $name = utf8_encode($name);
		$comment_name = '=?UTF-8?B?'.base64_encode($name).'?=';
		if (isemail($my_comment['email'])) {
			$add_header=sprintf("From: \"%s\" <%s>\n", $comment_name, $my_comment['email']);
		} else {
			$add_header=sprintf("From: \"'%s'\" <%s>\n", $comment_name, $addr_arr[0]);
		}
		$add_header.="MIME-Version: 1.0\n";
		$add_header.="Content-Type: text/plain; charset=UTF-8; format=flowed\n";
		$add_header.="Content-Transfer-Encoding: 8bit\n";

		$subject = lang('comment','email_subject_comm')." Re: $title";
		$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

		$addr_arr = array_unique($addr_arr);

		foreach($addr_arr as $addr) {
			$addr = trim($addr);
			@mail($addr, $subject, $body, $add_header);
			debug("Send Mail to $addr for '".$my_comment['name']."'");
		}

	}

	// Handle the users that want to be notified via email..
	notify_new('comment',array($db->entry,$my_comment,$Cfg['moderate_comments']));
}



$Pivot_Vars['piv_name'] = strip_tags($Pivot_Vars['piv_name']);
$Pivot_Vars['piv_email'] = strip_tags($Pivot_Vars['piv_email']);
$Pivot_Vars['piv_url'] = strip_tags($Pivot_Vars['piv_url']);

$Current_weblog = $Pivot_Vars['piv_weblog'];
// switch to weblog's language
LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);


if (ip_check_block($Pivot_Vars['REMOTE_ADDR'])) {
	debug("Blocked user from $ip tried to comment");
	piv_error("You are Blocked", "Your IP-address has been blocked, so you are not".
		" allowed to leave comments on this site. We know IP-adresses can easily be faked,".
		" but it helps. Have a nice day<br /><br />Go <a href='javascript:history.go(-1)'>".
		"back</a> to the last page, and do something else.",0);

}

// set cookies (or delete) only if explicitely told so..
if ($Pivot_Vars['piv_rememberinfo']=="yes") {
	// If magic_quotes_gpc is set, we need to strip slashes..
	if (get_magic_quotes_gpc()) {
		setcookie("piv_name", stripslashes($Pivot_Vars['piv_name']), time()+2592000, $Paths['cookie_url']);
		setcookie("piv_email", stripslashes($Pivot_Vars['piv_email']), time()+2592000, $Paths['cookie_url']);
		setcookie("piv_url", stripslashes($Pivot_Vars['piv_url']), time()+2592000, $Paths['cookie_url']);
	} else {
		setcookie("piv_name", $Pivot_Vars['piv_name'], time()+2592000, $Paths['cookie_url']);
		setcookie("piv_email", $Pivot_Vars['piv_email'], time()+2592000, $Paths['cookie_url']);
		setcookie("piv_url", $Pivot_Vars['piv_url'], time()+2592000, $Paths['cookie_url']);
	}
	setcookie("piv_rememberinfo", "yes", time()+2592000, $Paths['cookie_url']);
	//debug ("cookiezet: ". stripslashes($Pivot_Vars['piv_name']));
} else if ($Pivot_Vars['piv_rememberinfo']=="no") {
	setcookie("piv_name", "", time()-1000, $Paths['cookie_url']);
	setcookie("piv_email", "", time()-1000, $Paths['cookie_url']);
	setcookie("piv_url", "", time()-1000, $Paths['cookie_url']);
	setcookie("piv_rememberinfo", "", time()-1000, $Paths['cookie_url']);
	//debug("delcookie: " );
}


// load an entry
if (isset($Pivot_Vars['piv_code'])) {

	$db = new db();
	$entry = $db->read_entry($Pivot_Vars['piv_code']);

	execute_hook("submit", "pre", $Pivot_Vars);

	if (isset($Pivot_Vars['vote'])) {
		// we vote !!
		$ip = $Pivot_Vars['group'] . $Pivot_Vars['REMOTE_ADDR'];
		$value = $Pivot_Vars['vote'];

		if (isset($entry['votes'][$ip])) {
			$message = lang('karma','already');
			//debug("vote '$value' from '".$ip."' not added (already voted).");
		} else {
			$entry['votes'][$ip] = $value;
			$message = lang('karma','register');
			debug("vote '$value' from '".$ip."' added.");
			$myval = isset ($lang['karma'][$value]) ? lang('karma', $value) : $value;
			$message = str_replace('%val%', $myval , $message);
			// generating the page.
			$db->set_entry($entry);
			$db->save_entry(FALSE); // do not update the index.
			$db->unread_entry($entry['code']);

			generate_pages($Pivot_Vars['piv_code'], TRUE, TRUE, FALSE, FALSE, FALSE);

		}

		echo $message;

		echo "<script>self.focus(); </script>";

		echo "<br /><br /><div align=\"center\"><input type='button' value='ok' onclick='if (window.opener) { window.opener.location.reload(); } self.close();'></div>";



		die();


	} else {
		// we comment !!

		// Check if we're allowed to comment on this entry. 'isset' is needed, because old entries 
		// might not have 'allow comments' set to either choice.
		if (isset($entry['allow_comments']) && ($entry['allow_comments']==0) ) {
			echo "Spam is not appreciated.";
			logspammer( $Pivot_Vars['piv_comment'], "closedcomments");
			die();
		}
		
		$registered = 0;
		// check if we are TEH REG USER..
		if (strlen($_COOKIE['piv_reguser'])>4) {
			list($reg_name, $reg_hash) = explode("|", $_COOKIE['piv_reguser']);

			debug("reg: $reg_name, $reg_hash");
			if ((check_user_hash($reg_name, $reg_hash)) && ($reg_name == $Pivot_Vars['piv_name'])) {
				$registered = 1;
			}
		}

		// If magic_quotes_gpc is set, we need to strip slashes..
		if (get_magic_quotes_gpc()) {
			$Pivot_Vars['piv_name'] = stripslashes($Pivot_Vars['piv_name']);
			$Pivot_Vars['piv_email'] = stripslashes($Pivot_Vars['piv_email']);
			$Pivot_Vars['piv_url'] = stripslashes($Pivot_Vars['piv_url']);
			$Pivot_Vars['piv_comment'] = stripslashes($Pivot_Vars['piv_comment']);
		}	
	
		$comment_text = strip_trailing_space($Pivot_Vars['piv_comment']);
		$comment_text = str_replace("\r\n", "\n", $comment_text); // CRLF(Win) to LF
		$comment_text = str_replace("\r", "\n", $comment_text); // CR(Mac) to LF
		
		$my_comment = array(
			'name' => entify($Pivot_Vars['piv_name']),
			'email' =>entify($Pivot_Vars['piv_email']),
			'url' => entify($Pivot_Vars['piv_url']),
			'ip' => $Pivot_Vars['REMOTE_ADDR'],
			'date' => format_date("", "%year%-%month%-%day%-%hour24%-%minute%"),
			'comment' => $comment_text,
			'registered' => $registered,
			'notify' => $Pivot_Vars['piv_notify'],
			'discreet' => $Pivot_Vars['piv_discreet'],
			'moderate' => $Cfg['moderate_comments']==1
		);

		//here we do a check to prevent double entries...
		$duplicate=FALSE;

		if (isset($entry['comments']) && (count($entry['comments']) > 0 ) ) {
			foreach($entry['comments'] as $loop_comment) {
				$diff =  1 / ( min( strlen($loop_comment['comment']), 200) /
					(levenshtein(substr($loop_comment['comment'],0,200) , 
						substr($my_comment['comment'],0,200)) + 1) );
				if ( ($diff < 0.25) && ($loop_comment['ip'] == $my_comment['ip']) ) {
					$duplicate=TRUE;
					break;
				}
			}
		}

		// set the message and take proper action:
		if (isset($Pivot_Vars['preview'])) {

			// Add a 'show in preview' flag to $my_comment, otherwise it would be suppressed on display
			$my_comment['showpreview'] = 1;
			
			// update the current entry
			$entry['comments'][] = $my_comment;
			$Pivot_Vars['message'] = lang('comment','preview');
			unset($Pivot_Vars['post']);
			$Pivot_Vars['preview'] = TRUE;

		} else if (!$duplicate)  {
			
			// update the current entry
			$entry['comments'][] = $my_comment;

			if ($Cfg['moderate_comments'] == 1) {
				$message .= lang('comment','moderate_stored');
			} else {
				$message = lang('comment','register');
			}

			$message = "&message=".urlencode($message);
			$Pivot_Vars['post'] = TRUE;

		} else {

			// Add a 'show in preview' flag to $my_comment, otherwise it would be suppressed on display
			$my_comment['showpreview'] = 1;			

			$Pivot_Vars['message'] = lang('comment','duplicate');
			//$message = "&message=".urlencode($message);
			unset($Pivot_Vars['post']);
			$Pivot_Vars['preview'] = TRUE;

		}
	}



	// if comment or name is missing, give a notice, and show the form again..
	if ( (!isset($Pivot_Vars['vote'])) && (strlen($my_comment['name'])<2) ) {
		$Pivot_Vars['message'] = lang('comment','no_name');
		unset($Pivot_Vars['post']);
		$Pivot_Vars['preview'] = TRUE;
	}

	if ( (!isset($Pivot_Vars['vote'])) && (strlen($my_comment['comment'])<3) ) {
		$Pivot_Vars['message'] = lang('comment','no_comment');
		unset($Pivot_Vars['post']);
		$Pivot_Vars['preview'] = TRUE;
	}

	// check num of hyperlinks by loweblog.com
	if ( isset($Cfg['maxhrefs']) && ($Cfg['maxhrefs'] > 0) ) {
		$low_comment = strtolower($my_comment['comment']);
		$low_comment_formatted = strtolower(comment_format($my_comment['comment']));
		if ( (substr_count($low_comment, "href=") > $Cfg['maxhrefs']) ||
		    (substr_count($low_comment_formatted, "href=") > $Cfg['maxhrefs']) ) {
			$Pivot_Vars['message'] = lang('comment','too_many_hrefs');
			unset($Pivot_Vars['post']);
			$Pivot_Vars['preview'] = TRUE;
		}
  	}

	if (isset($Pivot_Vars['post'])) {
		$db->set_entry($entry);

		// switch to weblog's language (it might be changed in the meantime)
		LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);

		$db->save_entry(FALSE); // do not update the index.

		//update the 'last comments' file
		if (isset($my_comment)) {
			if($Cfg['moderate_comments']!=1)  {
				generate_last_comments($my_comment);
				debug("comment from '".$Pivot_Vars['piv_name']."' added.");
			} else {
				generate_moderation_queue($my_comment);
                                debug("comment from '".$Pivot_Vars['piv_name']."' added to moderation queue.");
			}
		}

		// remove it from cache, to make sure the latest one is used.
		$db->unread_entry($entry['code']);

		// first get the filename..
		$filelink = make_filelink($Pivot_Vars['piv_code'], $Pivot_Vars['piv_weblog'], '', $message, TRUE);

		// send mail..
		if (!isset($Pivot_Vars['vote'])) {
			send_mail_comm();
		}

		// regenerate entry, frontpage and archive..
		generate_pages($Pivot_Vars['piv_code'], TRUE, TRUE, TRUE, FALSE, FALSE);

		redirect( $filelink);

	}



	if (isset($Pivot_Vars['preview'])) {
		$db->set_entry($entry);

		define('__SILENT__', TRUE);
		define('LIVEPAGE', TRUE);

		// only set the message if not done yet (otherwise the 'no_name' notice would be overwritten)
		if (!isset($Pivot_Vars['message'])) {
			$Pivot_Vars['message'] = lang('comment','preview');
		}

		$output = parse_entry($Pivot_Vars['piv_code'], $Current_weblog);
		$comm_js = fill_comment_form_submit($Pivot_Vars['piv_name'], $Pivot_Vars['piv_email'], 
			$Pivot_Vars['piv_url'], $Pivot_Vars['piv_rememberinfo'], $Pivot_Vars['piv_comment'], 
			$Pivot_Vars['piv_notify'], $Pivot_Vars['piv_discreet']);
		echo str_replace("</body>","$comm_js\n</body>",$output);
	}
} else {
	echo "No id..";
}


?>
