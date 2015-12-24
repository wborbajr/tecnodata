
<?php

session_cache_limiter('none'); //*Use before session_start()
session_start();

$file = 'd67e0360ae.mp3';
_Download("podcast/".$file, $file);

function _Download($f_location,$f_name){
     header ("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Length: ' . filesize($f_location));
    header('Content-Disposition: attachment; filename=' . basename($f_name));
    readfile($f_location);
 }

?>