<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<?
function query($sql, $iModo = 0) {
	$conn = mysql_connect('192.168.0.6','root','@senha');
	$db   = mysql_select_db('sgi', $conn);
	$res  = mysql_query($sql) or die("Erro! Favor comunicar o erro ao setor de TI.<hr>$sql<hr>".mysql_error());
	
	if ($iModo==0)	return $res;
	else return mysql_fetch_array($res);
};

function converte($sTxt) {
  if (getenv("REMOTE_ADDR") == '127.0.0.1') {
    	$sRtn = htmlspecialchars(stripslashes($sTxt));
   } else
   		$sRtn = utf8_encode($sTxt);

//   return htmlspecialchars(stripslashes($sRtn));
   return $sRtn;
}
?>