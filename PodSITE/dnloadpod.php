<?
	$nome = "podcast/2008_0702_jornal1800.mp3";
	$tipo = "audio/mp3";
	Header("Content-type: ".$tipo);
	Header("Content-Disposition: attachment; filename=".$nome);

	echo file_get_contents($nome);
?>