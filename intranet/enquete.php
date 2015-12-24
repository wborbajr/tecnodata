<?
/*
    Para ver o resultado da enquete, fazer um procedimento utilizando o script SQL abaixo:

    # Os resultados, baseando-se nos IP de quem votou
		select tab01_id, tab02_voto, count(tab02_voto)
		from tab02_voto
		where tab01_id = 1
		group by tab01_id, tab02_voto

		# A pergunta e as opções e seus respectivos resultados, baseados em dados fixos e mutáveis (forjáveis)
		select tab01_pergunta, tab01_resp1, tab01_perc1, tab01_resp2, tab01_perc2
		from tab01_enquetes a
		where tab01_id = 1

		# Quantas vezes o mesmo ip participou de nossas campanhas?
		select tab02_ip ip, count(tab02_ip) votos
		from tab02_voto
		group by tab02_ip
		order by tab02_ip

*/
	require_once('classes/db_connection.php');
	require_once('config/dbconfig.php');
	require_once('functions/fun-net.inc.php');

	$ip = getIP();
	$voto = $_POST['radio_voto'];
	$votou = '';

	$conn = new db_connection($hostname, $username, $password, $database);
	$result = $conn->select("enq_pergunta",array("id,enq_pergunta,enq_obrigatoria"),"enq_ativa = 1");

	// Seleciona a enquete da vez, só pra pegar o ID
	$data = $conn->fetch_array($result);
	$id = $data['tab01_id'];
	
	$result = $conn->select("enq_voto",array("tab01_id"),"tab01_id = '$id' and tab02_ip = '$ip'");
	$data = $conn->fetch_array($result);

	// Se ainda não votou.
	if ($data['tab02_ip']=='') {

		// Computa o voto
		if ($_POST['radio_voto']!='') {
			$id = $_POST['tab01_id'];

			$sql = "insert into tab02_voto VALUES ('$id', '$ip', now(), $voto)";
			mysql_query($sql) or die( mysql_error() );

			$sql = "update tab01_enquetes set tab01_perc$voto = (tab01_perc$voto +1) where tab01_id = '$id'";
			mysql_query($sql) or die( mysql_error() );

			$votou = "Seu voto foi computado. Agradecemos a participação.";
		};

	} else {

		$votou = "Seu voto JÁ foi computado. Agradecemos a participação.";

	};

	// Seleciona a enquete da vez para ser mostrada.
	$result = $conn->select("enq_enquetes",array("*"),"tab01_ativa = '1' limit 1");
	$data_enquete = $conn->fetch_array($result);
	
	echo "acabou de fetchar";
	
	echo $data_enquete['tab01_resp1'];
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enquete [Tecnodata]</title>

<link href="css/semfundo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body, table, th, input, radio {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td valign="bottom"><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" align="center">
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="9">&nbsp;</td>
                <td><?=$data_enquete['tab01_pergunta'];?>
                    <input name="tab01_id" type="hidden" id="tab01_id" value="<?=$data_enquete['tab01_id'];?>" />
                </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><hr size="0" /></td>
        </tr>
        <tr>
          <td><table width="96%" border="0" align="center">
<?
	$y = 1;
	
	echo $data_enquete[2];
	
	for ($x = 2; $x < 16; $x += 2) {
		  if ($data_enquete[$x]!='') {
			echo "aqui";
?>
              <tr>
                <td align="center" valign="top"><input name="radio_voto" id="v<?=$y?>" value="<?=$y?>" type="radio" style="display: none" /></td>
                <td align="left"><?=$data_enquete[$x];?></td>
                <td align="right">
					<div id="r<?=$y?>">
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
        <? if ($votou!='') echo "<tr><td><hr size='0' /></td></tr><tr><th>".$votou."</th></tr>";?>
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
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="javascript">votou = '<?=$votou?>';</script>
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="js/enquete.js"></script>
</script>