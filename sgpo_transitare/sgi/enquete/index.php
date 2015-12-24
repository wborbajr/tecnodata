<?
	$ip = getenv("REMOTE_ADDR");
	$voto = $_POST['radio_voto'];
	$votou = '';

	$conn = mysql_connect('192.168.0.6','root','@senha');
	$db   = mysql_select_db('sgi', $conn);

/*
	if ($ip=='127.0.0.1') {
  		$db   = mysql_select_db('sgpo', $conn);
	} else {
  		$db   = mysql_select_db('sgi', $conn);
	};
*/
	// Seleciona a enquete da vez, só pra pegar o ID
	$sql = "select * from tab01_enquetes where tab01_ativa = 1 limit 1";
	$res = mysql_query($sql);

	$data_enquete = mysql_fetch_array($res);
	$id = $data_enquete['tab01_id'];

	$sql = "select * from tab02_voto where tab01_id = '$id' and tab02_ip = '$ip' ";
	$res = mysql_query($sql) or die( mysql_error());
	$data = mysql_fetch_array($res);

	// Se ainda não votou.
	if ($data['tab02_ip']=='') {

		// Computa o voto
		if ($_POST['radio_voto']!='') {
			$id = $_POST['tab01_id'];

			$sql = "insert into tab02_voto VALUES ('$id', '$ip', '', $voto)";
			mysql_query($sql) or die( mysql_error() );

			$sql = "update tab01_enquetes set tab01_perc$voto = (tab01_perc$voto +1) where tab01_id = '$id'";
			mysql_query($sql) or die( mysql_error() );

			$votou = "Seu voto foi computado. Agradeço a participação.";
		};

	} else {

		$votou = "Seu voto JÁ foi computado. Agradeço a participação.";

	};

	// Seleciona a enquete da vez para ser mostrada.
	$sql = "select * from tab01_enquetes where tab01_ativa = 1 limit 1";
	$res = mysql_query($sql);

	$data_enquete = mysql_fetch_array($res);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesquisa de opini&atilde;o [Tecnodata]</title>
<script language="javascript" src="/jquery.js"></script>
<style type="text/css">
<!--
body {
	font-family: Geneva, Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" height="400" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" background="images/bg.jpg">
    <tr>
      <td valign="bottom"><table width="100%" border="0" align="center">
        <tr>
          <td>&nbsp;&nbsp;Enquete Nr.:
            <?=$data_enquete['tab01_id']?>
              <input name="tab01_id" type="hidden" id="tab01_id" value="<?=converte($data_enquete['tab01_id']);?>" /></td>
        </tr>
        <tr>
          <td align="left"><hr width=75% size="0"/></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="9">&nbsp;</td>
                <td><?=converte($data_enquete['tab01_pergunta']);?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><hr size="0" /></td>
        </tr>
        <tr>
          <td><table border="0" align="center">
              <?
	$y = 1;
	for ($x = 3; $x < 16; $x += 2) {
		  if ($data_enquete[$x]!='') {
?>
              <tr>
                <td valign="top"><input name="radio_voto" id="v<?=$y?>" value="<?=$y?>" type="radio" style="display: none" /></td>
                <td align="left"><?=converte($data_enquete[$x]);?></td>
                <td align="right"><div id="r<?=$y?>">
                    <?=$data_enquete[$x+1]?>
                </td>
              </tr>
              <?
		  };

		  $y++;
	};
?>
          </table></td>
        </tr>
        <? if ($votou!='') echo "<tr><td><hr size='0' /></td></tr><tr><th>".converte($votou)."</th></tr>";?>
        <tr>
          <td><hr size="0" /></td>
        </tr>
        <tr>
          <th align="center" valign="middle"><table width="100%" border="0">
              <tr>
                <td><input name="btn_voltar" type="button" id="btn_voltar" value="&lt;&lt;" />
                    <input name="btn_votar" type="submit" id="btn_votar" value="Votar" /></td>
                <td><input name="btn_resultado" type="button" id="btn_resultado" value="Ver Resultado" /></td>
              </tr>
          </table></th>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
<script language="javascript">votou = '<?=$votou?>';</script>
<script language="javascript" src="enquete.js.php"></script>
<?
function converte($sTxt) {
  if (getenv("REMOTE_ADDR") == '127.0.0.1') {
    	$sRtn = $sTxt;
   } else
   		$sRtn = utf8_encode($sTxt);

//   return htmlspecialchars(stripslashes($sTxt));
   return $sTxt;
}
?>