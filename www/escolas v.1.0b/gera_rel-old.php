<?php

	require("./includes/restrito.inc.php"); 
	require_once('./includes/conexao.inc.php');
	require_once("includes/populaCombo.inc.php");
	
	// Executa a conexao com o banco de dados
	dbcon();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Verifica se esta sendo feito uma alteracao ou exclusao
		if($_POST["acao"] != ""){
			if($_POST["acao"] == "apaga"){
				$SQL = "DELETE FROM escola WHERE idesc = " . $_POST["codigo"];
			}
			
			// Executa a procura
			$result = mysql_query($SQL);
	
			if (!$result) {
				die("Erro ao apagar da tabela ESCOLAS. Técnico:" . mysql_error());
			}
	
			if (mysql_num_rows($PES) == 1){
				$_SESSION["MSG"] = "Não existem dados para ser pesquisado.";
			}			
		}
			
		// Verifica se selecionou um consultor ou informou alguma escola
		if(($_POST["cbConsultor"] == "Todos os consultores") && ($_POST["txtNome"] == "")){
			$SQL = "SELECT e.idesc, e.nome_fantasia, e.fone, e.falar_com, p.nome
					 FROM escola e, pessoa p
					WHERE e.idpes = p.idpes 
					ORDER BY p.nome,nome_fantasia";
		}else{
			// Excuta a pesquisa com base em parametros
			$SQL = "SELECT e.idesc, e.nome_fantasia, e.fone, e.falar_com, p.nome
					 FROM escola e, pessoa p
					WHERE e.idpes = p.idpes ";
			if($_POST["cbConsultor"] != "Todos os consultores"){
				$SQL .= " AND p.idpes = " . $_POST["cbConsultor"];
			}
			if ($_POST["txtNome"] != ""){
				$SQL .= " AND e.nome_fantasia LIKE '%".$_POST["txtNome"]."%'";
			}
			$SQL .= " ORDER BY p.nome,nome_fantasia ";	
		}
		
		// Executa a procura
		$PES = mysql_query($SQL);

		if (!$PES) {
			die("Erro ao select da tabela ESCOLAS. Técnico:" . mysql_error());
		}

		if (mysql_num_rows($PES) < 1){
			$_SESSION["MSG"] = "Não existem dados para ser pesquisado.";
		}
	}
?>

<html>
<head>
<title>.:: ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFEFEF;
}
.td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	color: #FF0000;
	background-color: #FFFFCC;
}
.style2 {font-size: 12px}
.style3 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>

<script language="JavaScript" type="text/javascript">
function processa(fqual,facao) {
	document.frmPesquisa.codigo.value=fqual;
	document.frmPesquisa.acao.value=facao;
	
	document.frmPesquisa.submit();
}
</script>

</head>
<body>
<form action="ficha_escolas.php" method="post" name="frmPesquisa" id="frmPesquisa">
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" valign="middle">
        <tr>
          <td valign="top"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="612" class="texto"></td>
              </tr>
              <tr>
                <td class="td">
					<span class="texto"><strong>&nbsp;&nbsp;&nbsp;Impress&atilde;o de Ficha de  Escola </strong> 
					</span>
				</td>
              </tr>
		    <? if (!empty($_SESSION["MSG"])) { ?>
			<tr>
			    <td colspan="4" class="texto"> 
			    </td>
			</tr>
			<tr>
			    <td colspan="4" class="texto"> 
			    </td>
			</tr>
			<tr>
			    <td colspan="4" class="texto">
			        <div align="center" style="width:100%;color:red;"><? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?></div></td>
			</tr>
		    <? } ?>
              <tr>
                <td class="texto">
                  <table width="100%"  border="0" align="center" cellpadding="5" cellspacing="2">
                    <tr>
                      <td width="15%" class="texto" align="right"><div align="right" class="style1 style2"><b>Escola </b> </div></td>
                      <td  align="left" class="texto">
					<? $arrayUsuario = populaCombo("escola","idesc","nome_fantasia","","nome_fantasia"); ?>
					<select name="codescola" id="codescola" tmt:invalidindex="0" tmt:message="Selecione um consultor" />                    
					<option>Selecine a Escola </option>
					<?
					for ($i = 0; $i < count($arrayUsuario); ++$i) {
					?>
					<option value="<? echo $arrayUsuario[$i][0]; ?>"><? echo $arrayUsuario[$i][1]; ?></option>
					<?
					}
					?>
				  </select>                      </td>
                      </tr>
                    <tr>
                      <td  class="texto" align="center" colspan="2">
		        		<input name="btPesquisa" type="submit" id="btPesquisa" style="cursor:pointer;"  value="Visualizar"> 
						&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2"  class="texto"><hr></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
</form>
</body>
</html>
