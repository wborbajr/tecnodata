<?
// www.Scripts.Kom.pt
// Script feito com a ajuda de um membro do forum do wmonline.com.br

require("online_inc.php");
?>

<html>
<head>
<title>On-line</title>
<meta http-equiv="refresh" content="8">
<body topmargin="0" leftmargin="0">
</head>
<body bgcolor="#00000" text="#FFFFFF" style="font-family: tahoma; font-size: 10 pt">
</a>
</body>
</html>
<?

mysql_connect($db_host, $db_user, $db_pass) or die (mysql_error());
$timestamp=time();
$timeout=time()-300;
$result=mysql_db_query($db_bdad, "INSERT INTO online VALUES 
('$timestamp','$REMOTE_ADDR','$PHP_SELF')");
$result=mysql_db_query($db_bdad, "DELETE FROM online WHERE timestamp<$timeout");
$result=mysql_db_query($db_bdad, "SELECT DISTINCT ip FROM online");
if (!mysql_connect){echo"die";}

$usuarios=mysql_num_rows($result);
mysql_close();
$cont=1;
print "<table align='center'><th align='center'>Nº</th><th align='center'>IP</th>";
while($res=mysql_fetch_array($result)){
print "<tr><td>$cont</td><td>$res[ip]</td></tr>";
$cont=$cont+1;
}
print "</table>"
?>
<?

if($usuarios == "1"){
if($frase == "1"){ echo "<center><b>$usuarios </b>Usuário Online</center>";  }
if($frase == "2"){ echo "<center><b>$usuarios </b>Cliente Online</center>";  }
if($frase == "3"){ echo "<center><b>$usuarios </b>Visitante Online</center>"; }
if($frase == "4"){ echo "<center><b>$usuarios </b>Pessoa Online</center>";    }
} else {
if($frase == "1"){ echo "<center><b>$usuarios </b>Usuários Online</center>";  }
if($frase == "2"){ echo "<center><b>$usuarios </b>Clientes Online</center>";  }
if($frase == "3"){ echo "<center><b>$usuarios </b>Visitantes Online</center>";}
if($frase == "4"){ echo "<center><b>$usuarios </b>Pessoas Online</center>";  }
}

?>
