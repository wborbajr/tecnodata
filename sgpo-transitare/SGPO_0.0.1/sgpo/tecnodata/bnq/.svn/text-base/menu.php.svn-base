<?
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  include("../../include/config.inc.php");
  require_once('funcoes.inc.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
        <script src="../../js/jquery.js" type="text/javascript"></script>
        <link href="./css/prova_menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-top: 5px;
}
-->
</style></head>
<body>
<center>
	<p>Disciplina: 
	  <? monta_select('disciplina_id', "SELECT * FROM `disciplina` ORDER BY 1"); ?>
&nbsp;&nbsp;&nbsp;
	Visualizar questões:
    <select id=bnq_simulado>
      <option value=0>** TODAS **</option>
      <option value=1>** DE SIMULADOS **</option>
      <option value=2>** FECHADAS **</option>
    </select>
	<input id="btn_Filtrar" type=button value="Filtrar">
</p>
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="40" class="tabtit" align="center">&nbsp;BNQ #&nbsp;</td>
        <td width="40" class="tabtit" align="center">Simu-<br>
          lado</td>
        <td width="110" class="tabtit"><div align="center">Disciplina</div></td>
        <td width="48" class="tabtit"><div align="center">Dific.</div></td>
        <td width="100" class="tabtit"><div align="center">Natureza</div></td>
        <td width="100" class="tabtit"><div align="center">Assunto</div></td>
        <td class="tabtit"><div align="center">Quest&atilde;o</div></td>
        <td width="80" class="tabtit"><div align="center">Status</div></td>
      </tr>
    </table>
</center>
</body>
</html>
<script language="javascript">

  $("#btn_Filtrar").click(function(){
		opcoes = "disciplina_id="+$("#disciplina_id").val()+"&simulado="+$("#bnq_simulado").val();
		winBNQ = window.open('meio.php?'+opcoes,'bottomFrame');
  });
</script>

