<?
require("online_inc.php");
?>

<html>
<head>
<title>On-line</title>
<meta http-equiv="refresh" content="5">
<body topmargin="0" leftmargin="0">
</head>
<body style="font-family: tahoma; font-size: 10 pt">
<?
/*
mysql_connect($db_host, $db_user, $db_pass) or die (mysql_error());
$timestamp=time();
$timeout=time()-400;
$REMOTE_ADDR = getenv("REMOTE_ADDR");

$sql = "select ip from online where ip = '$REMOTE_ADDR'";
$res = mysql_db_query($db_bdad, $sql) or die( mysql_error() );
$data = mysql_fetch_array($res);

if ($data['ip']!='') {

    // Update
   $result=mysql_db_query($db_bdad, "UPDATE online SET timestamp = '$timestamp' WHERE ip = '$REMOTE_ADDR'") or die( mysql_error() );

} else {

   // Insert
   $result=mysql_db_query($db_bdad, "INSERT INTO online VALUES ('$timestamp','$REMOTE_ADDR','".date('d/m/Y G:i:s')."')") or die( mysql_error() );
}

$result=mysql_db_query($db_bdad, "DELETE FROM online WHERE timestamp<$timeout") or die( mysql_error() );

$result=mysql_db_query($db_bdad, "SELECT DISTINCT ip FROM online") or die( mysql_error() );

$usuarios=mysql_num_rows($result);
mysql_close();
*/
?>
<font color='#003399' size=2 face=verdana><b>
<?
$sTxt = '';

if($usuarios == "1"){
if($frase == "1"){ $sTxt = "$usuarios </b>Usuário Online</a>";   }
if($frase == "2"){ $sTxt = "$usuarios </b>Cliente Online</a>";   }
if($frase == "3"){ $sTxt = "$usuarios </b>Visitante Online</a>"; }
if($frase == "4"){ $sTxt = "$usuarios </b>Pessoa Online</a>";    }
} else {
if($frase == "1"){ $sTxt = "$usuarios </b>Usuários Online</a>";  }
if($frase == "2"){ $sTxt = "$usuarios </b>Clientes Online</a>";  }
if($frase == "3"){ $sTxt = "$usuarios </b>Visitantes Online</a>";}
if($frase == "4"){ $sTxt = "$usuarios </b>Pessoas Online</a>";   }
}

//echo "<center>$sTxt</center>";
echo "<table border=0 align=center width=100%><tr><td align=center><font face=verdana size=2><a href='http://192.168.0.6/' target='frm_baixo_1'>Menu Intranet</a></font></td><td align=right><font face=verdana size=2><b>$sTxt</b> desde ".date('d/m/Y G:i:s')."&nbsp;</font></td></tr></table>";
?>
</font>
</body>
</html>

