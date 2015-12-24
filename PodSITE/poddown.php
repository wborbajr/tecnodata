<?php
	$file = "podcast/" . $_REQUEST['file'];
	
	$type = "audio/mp3";
	Header("Content-type: ".$type);
	Header("Content-Disposition: attachment; filename=".$file);

	echo file_get_contents($file);
	
/*
$file = "arquivo.exe";

header("Content-type: application/save");
header("Content-Length:".filesize($file));
header('Content-Disposition: attachment;
filename="' . $file . '"');
header('Expires: 0');
header('Pragma: no-cache');

readfile("$file");
*/	
?>
