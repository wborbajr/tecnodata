<?
$path = "home/musicdir/"; //MAKE SURE IT IS OUTSIDE OF THE PUBLIC DOMAIN!

$file = $_GET['file'];

if( (!$file ) or (!file_exists( $path . $file ) ) ) {
die( "File wasnt set or it didnt exist" );
}

$ref = $_SERVER['HTTP_REFERER'];
$domain = 'http://example.com/'; // your domain

if(substr($ref,0,strlen($domain))!= $domain ¦¦!isset($ref) ¦¦ $ref == ''){
die('No stealing music!');
}

header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-type: audio/mpeg"); //mp3 contenttype
header("Cache-Control: no-cache, must-revalidate"); //The page must not be stored in the cache
header("Expires: Mon, 01 Jan 2000 00:00:00 GMT");
readfile( $path . $file );

?> 