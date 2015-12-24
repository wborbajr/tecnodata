<?php

$tbkey_debug = false;
 
include_once("../../pv_core.php");

$keydir = $Paths["pivot_path"]."db/tbkeys/";
$tburl = $Paths["host"].$Paths["pivot_url"]."tb.php?tb_id=".$_GET["id"]."&amp;key=";

if (!strstr($_SERVER["HTTP_REFERER"], $_SERVER["SERVER_NAME"]))  {
	// Creating a bogus key
	$tbkey = md5(microtime());
	debug("hardened trackbacks: illegal request - creating bogus key");
} else {
	makedir($keydir);
	$tbkey = md5($Cfg['server_spam_key'].$_SERVER["REMOTE_ADDR"].$_GET["id"].time());
	if (!touch ($keydir.$tbkey)) {
		debug("hardened trackbacks: directory $keydir isn't writable - can't create key");
	} else {
		chmod_file($keydir.$tbkey);
	}
}

// Getting the time offset between the web and file server (if there is any)
$offset = timediffwebfile($tbkey_debug);

// delete keys older than 15 minutes
$nNow = time();
$handle=opendir($keydir);
while (false!==($file = readdir($handle))) {
	$filepath = $keydir.$file;
	if (!is_dir($filepath) && ($file != "index.html")) {
		$Diff = ($nNow - filectime($filepath));
		if (($Diff > (60*15 + $offset)) && ($tbkey_debug!=true)) {
			unlink($filepath);
		}
	}
}
closedir($handle);

echo "\nvar tbkey='$tbkey';\n";

echo <<< EOM

function showTBURL(element_id)  {
        var element = document.getElementById(element_id);
        element.innerHTML = '{$tburl}' + tbkey;
}

function showTBURLgen(element_id, tburl_gen)  {
	var element = document.getElementById(element_id);
	element.innerHTML = tburl_gen;
}

EOM;

?>
