<?php
function dl_file_resume($file){

   //First, see if the file exists
   if (!is_file($file)) { die("<b>404 File not found!</b>"); }

   //Gather relevent info about file
   $len = filesize($file);
   $filename = basename($file);
   $file_extension = strtolower(substr(strrchr($filename,"."),1));

   //This will set the Content-Type to the appropriate setting for the file
   switch( $file_extension ) {
     case "exe": $ctype="application/octet-stream"; break;
     case "zip": $ctype="application/zip"; break;
     case "mp3": $ctype="audio/mpeg"; break;
     case "mpg":$ctype="video/mpeg"; break;
     case "avi": $ctype="video/x-msvideo"; break;

     //The following are for extensions that shouldn't be downloaded (sensitive stuff, like php files)
     case "php":
     case "htm":
     case "html":
     case "txt": die("<b>Cannot be used for ". $file_extension ." files!</b>"); break;

     default: $ctype="application/force-download";
   }

   //Begin writing headers
   header("Pragma: public");
   header("Expires: 0");
   header("Cache-Control:");
   header("Cache-Control: public");
   header("Content-Description: File Transfer");
  
   //Use the switch-generated Content-Type
   header("Content-Type: $ctype");
$filespaces = str_replace("_", " ", $filename);

//if your filename contains underscores, you can replace them with spaces
  $header='Content-Disposition: attachment; filename='.$filespaces.';';
   header($header );
   header("Content-Transfer-Encoding: binary");

  $size=filesize($file);
//check if http_range is sent by browser (or download manager)
   if(isset($_ENV['HTTP_RANGE'])) {
 list($a, $range)=explode("=",$_ENV['HTTP_RANGE']);
//if yes, download missing part
 str_replace($range, "-", $range);
 $size2=$size-1;
 header("Content-Range: $range$size2/$size");
 $new_length=$size2-$range;
 header("Content-Length: $new_length");
//if not, download whole file
} else {
 $size2=$size-1;
 header("Content-Range: bytes 0-$size2/$size");
 header("Content-Length: ".$size2);
}
//open the file
$fp=fopen("$file","r");
//seek to start of missing part
fseek($fp,$range);
//start buffered download
while(!feof($fp))
{
//reset time limit for big files
set_time_limit();
print(fread($fp,1024*8));
 flush();
}
fclose($fp);
  
   exit;
    
}

//EXAMPLE
//dl_file_resume("somefile.mp3");

?>

