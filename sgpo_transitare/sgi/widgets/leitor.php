<?
#Conex�o ao banco de dados
$conexao = mysql_connect("216.157.145.55", "portald_admin", "Tcfdt1614");
$db = mysql_select_db("portald_portal");

# Grava estat�stica de quem est� consutlado
$sql = "INSERT INTO `tab03_rss_leituras` (`tab03_rss`,`tab03_ip`) VALUES ('Not�cias','".getenv("REMOTE_ADDR")."')";
//@mysql_query($sql);

#Realizando o SELECT dos dados para gerar o feed RSS a partir deles (� utilizado o limite de 20 registros para o feed n�o ficar muito extenso)
$sql = "SELECT id, data_news, hora, url, manchete, fonte, autor FROM `plugar` ORDER BY id desc LIMIT 20";
$resultado = mysql_query($sql)
or die ('Material temporariamente indisponivel. Tente novamente em alguns minutos.');

// �ltima not�cia
$linha=mysql_fetch_array($resultado);
$id = $linha["id"];
$manchete = $linha["manchete"];
$url	= "http://www.portaldotransito.com.br/mostraplugin2.asp?id=$id";

echo "<dl>";
echo "	<dd class='manchete'>";
echo "		<a href='$url' target='_blank'>Noticia mais recente<br />$data - $manchete<br/></a>";
echo "	</dd>";

while ($linha=mysql_fetch_array($resultado)) {
       $id = $linha["id"];
       $data = $linha["data_news"].' - '.$linha["hora"];
       $manchete = $linha["manchete"];
	   $url	= "http://www.portaldotransito.com.br/mostraplugin2.asp?id=$id";
	   
	   echo "	<dd>";
	   echo "		<a href='$url' target='_blank'><b>$data</b><br />$manchete</a>";
	   echo "	</dd>";

}
echo "</dl>";	   
?>
