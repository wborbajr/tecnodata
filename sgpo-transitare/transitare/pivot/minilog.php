<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Pivot &raquo; New Entry</title>
</head>

<body>
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

include "pv_core.php";

if (count($_POST)>2) {

        if($Cfg['fl_' . $_SERVER['REMOTE_ADDR']] >= 10 && ($Cfg['bn_' . $_SERVER['REMOTE_ADDR']] - time() < 60*60*12)){
            if(!isset($Cfg['bn_' . $_SERVER['REMOTE_ADDR']])){
                $Cfg['bn_' . $_SERVER['REMOTE_ADDR']] = time();
            }
            SaveSettings();
            debug("IP {$_SERVER['REMOTE_ADDR']} is banned.");
            die("Your IP is banned.");
        }
	// There's input, so we're going to post.
        $error = false;
	$entry['user'] = $_POST['username'];
        if (strlen($entry['user']) == 0) {
            echo "<b>Error: You must provide a username.</b><br />";
            $error = true;
        }
	$entry['pass'] = $_POST['password'];
        if (strlen($entry['pass']) == 0) {
            echo "<b>Error: You must provide a password.</b><br />";
            $error = true;
        }
	$entry['title'] = stripslashes($_POST['title']);
        if (strlen($entry['title']) <= 2) {
            echo "<b>Error: Too short entry title.</b><br />";
            $error = true;
        }
	$entry['introduction'] = stripslashes($_POST['introduction']);
        if (strlen($entry['introduction']) < 4) {
            echo "<b>Error: Too short entry text.</b><br />";
            $error = true;
        }
	$entry['category'] = $_POST['f_catsing'];
	$entry['allow_comments']=1;
	$entry['convert_lb']=0;

	// check if the user and pass are valid
        if ($error) {
            echo "<b>Not posted: For some reason</b><br />";
        } else if ($Users[$entry['user']]['pass'] == md5($entry['pass']))  {

            // if so, save the new entry and generate files (if necesary)
            $db = new db();
            $entry['code']=">";
            $entry['date']= date('Y-m-d-H-i');

            //fix the category
            $entry['category'] = array ($entry['category']);

            $entry = $db->set_entry($entry);
            $db->save_entry();

            // remove it from cache, to make sure the latest one is used.
            $db->unread_entry($entry['code']);

            // regenerate entry, frontpage and archive..
            generate_pages($entry['code'], TRUE, TRUE, TRUE);

            echo "<b>Your entry has been posted!</b><br />";

	} else {
            echo "<b>Not posted: Wrong User and/or Password</b><br />";
            // add one to the failed login attempts.
            if(strlen($entry['user']) > 0) {
                $Cfg['fl_' . $_SERVER['REMOTE_ADDR']]++;
                SaveSettings();
            }
            debug("Wrong password/username ({$entry['user']})");
	}
}

?>
<form name="form1" method="post" action="minilog.php">
<p>Username:<br />
<input type="text" name="username" value="<?php echo $_POST['username']; ?>"/>
</p>
<p>Password:<br />
<input type="password" name="password" />
</p>
<p>Title:<br />
<input type="text" name="title" style="width:95%" value="<?php echo $_POST['title']; ?>"/>
</p>
<p>Entry:<br />
<textarea name="introduction" cols="60" rows="5" 
    style="width:95%"><?php echo $_POST['introduction']; ?></textarea>
</p>
<p>Category:<br />
<?php echo get_categories_select("single"); ?>
</p>
<p>
<input type="submit" name="Submit" value="Post entry!" />
</p>
</form>
</body>
</html>
