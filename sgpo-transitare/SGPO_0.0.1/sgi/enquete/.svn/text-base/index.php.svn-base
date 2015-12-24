<?
	/*
		Enquente para pesquisa interna de opinião.
		by Reinaldo S Guth - reiwolf
		Setor: TI
		Responsável: Luciano
		Data Início: Jul/2007
	*/

	include_once("config.inc.php");

	// Se ainda não votou.
/*
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
*/
	// Seleciona a enquete da vez para ser mostrada.
	$sql = "select * from tab01_enquetes where tab01_ativa = 1 limit 1";
	$res = query($sql);

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
  <table width="400" height="400" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" background="images/bg.jpg">
    <tr>
      <td valign="bottom" id="conteudo" >
	  <table width="100%" height="380" border="0" align="center" id="tb_login" style="display: ">
        <tr>
          <td height="80">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><table style="display: " width="380" border="0" align="center">

              <tr>
                <td valign="top">&nbsp;</td>
                <td colspan="2"><strong>Identifique-se e vote. </strong></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td align="right">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="33" valign="top">&nbsp;</td>
                <td width="91" align="right">Login:</td>
                <td width="242"><input name="campo1" type="text" id="campo1" /></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td align="right">Senha:</td>
                <td><input name="campo2" type="text" id="campo2" /></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td align="left"></td>
                <td><input name="btn_login" type="button" id="btn_login" value="Entrar" /></td>
              </tr>
              <tr>
                <td colspan="3" valign="top">&nbsp;</td>
                </tr>
          </table>
		  	<div id="div_enquetes" style="border: 0px solid black; height:150px; overflow: auto;">
				<h2 align="center">Identifique-se.</h2>
		  	</div>          </td>
        </tr>
        <? if ($votou!='') echo "<tr><td><hr size='0' /></td></tr><tr><th>".converte($votou)."</th></tr>";?>
        <tr>
          <td><hr size="0" /></td>
        </tr>
      </table>

	  <div id="div_enquete">ops!
	  </div>
      </td>
    </tr>
  </table>
</body>
</html>
<script language="javascript">votou = '<?=$votou?>';</script>
<script language="javascript" src="enquete.js.php"></script>
