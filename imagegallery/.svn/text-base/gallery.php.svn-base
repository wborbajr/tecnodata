<?php

header("Content-Type: text/html; charset=iso-8859-1",true);
//header("Content-Type: application/xhtml+xml; charset=iso-8859-1");
//header("Content-Type: text/html; charset=utf-8",true);

$action = $_REQUEST['action'];
$path   = $_REQUEST['caminho'];

if ( $action == "buildimages") {
	buildImages( $path );
}

function buildImages ( $dirname ) {
	$ext = array ( "jpg", "png", "jpeg", "gif" );
	
	if ( $handle = opendir ( $dirname ) ) {
		while( false !== ( $file = readdir ( $handle) ) ) {
		
			$description = pathinfo($file);
			
			for ( $i=0; $i<sizeof ( $ext ); $i++ )
				if ( stristr ( $file, "." . $ext[$i] ) ) {
					$files[] = array (
						"IMG"=>$file,
						"TXT"=>$description['filename']
					);
				}
		}
		closedir ( $handle );
	}
	print json_encode ( $files );
}
?>
