<?php

/**
 * @author Waldir Borba Junior
 *
 * 29/04/2008 - Waldir Borba Junior  -  Cointrole de contagem de download
 *
 **/

	$podFile = $_REQUEST['file'];

/* Contagem de download do Postcast	//-----------------------------------------------------------------------------------*/ 
	// Controle de quantas vezes foi feito download
	include("functions/db-connection.php");
	include("functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$sql  = "UPDATE podcast SET poddownload=(poddownload+1) WHERE nome_servidor = '". $podFile ."'";
	$rs = $conn->query($sql,false);
	// fim

/* Dowbnload do Podcastg   			//-----------------------------------------------------------------------------------*/ 
	// Download do Podcast
	$file = "podcast/" . $podFile;
	
	$type = "audio/mp3";
	Header("Content-type: ".$type);
	Header("Content-Disposition: attachment; filename=".$file);

	echo file_get_contents($file);
	// fim
	
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
