<?
ini_set("display_errors",0);
ini_set("warning",0);

$file = $_GET['file'];
if (!empty($file)){
	$banned_strings = array('../','./','..\\','.\\');

	foreach($banned_strings as $str){ //delete all dangerous input
		$file = str_replace($str, '', $file);
	}

	//get random song
	//$orig_dir = getcwd();//retrieve original working dir
	//chdir($_SERVER['DOCUMENT_ROOT']);
	$path = 'podcast/';//set path to folder with mp3 songs
	$play_file = $path.$file;
	$content_len = @intval(filesize($play_file));
	
	if (@fopen($play_file, 'r')){
		header("Pragma: public");
		header("Expires: 0");
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: pre-check=0, post-check=0, max-age=0', false);
		header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
		$browser = $_SERVER['HTTP_USER_AGENT'];

		if (preg_match('/MSIE 5.5/', $browser) || preg_match('/MSIE 6.0/', $browser)) {
			header('Pragma: private');
			header('Cache-control: private, must-revalidate'); // the c in control is lowercase, didnt work for me with uppercase
			header("Content-Length: ".$content_len); // MUST be a number for IE
			header('Content-Type: audio/mpeg');
			header('Content-Disposition: inline; filename="'.$play_file.'"');
		}else{
			header("Content-Length: ".$content_len);
			header('Content-Type: audio/mpeg');
			header("Content-Disposition: inline; filename=".$play_file."");
		}
		header('Content-Transfer-Encoding: binary');

		if ($play_file = @fopen($play_file, 'r')) {
			while(!feof($play_file) && (connection_status()==0)) {
				print(fread($play_file, 8*1500));//note, this should be set to $content_len but does not work for me somehow :S
				flush();
				//usleep(100000); // can be used to limit download speed
			}
			fclose($play_file);
		}
	}else{
		echo "</br>error opening file $file";
	}
	//chdir($orig_dir);//change back to dir script runs in
}//end of script?> 