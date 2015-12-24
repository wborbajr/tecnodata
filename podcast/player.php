<?php
	$file = "podcast/" . $_REQUEST['file'];
	
 	header("Content-type: audio/mp3"); // MP3 - mpeg
	header("Content-Disposition: inline; filename=" . $file); 
?>
