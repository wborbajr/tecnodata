<?php

	require_once("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	
	// Executa a conexao com o banco de dados
	dbcon();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Verifica se clicou em impressora
		if($_POST["txtAcao"] == "imprimir"){
			$_SESSION["acao"] = "imprimir";
			$_SESSION["codigo"] = $_POST["txtCod"];
			header("Location: ficha_escolas.php");
			exit;
		}
			
		// Verifica se selecionou um consultor ou informou alguma escola
		if(!empty($_POST["txtNome"])){
			$SQL = "SELECT e.idesc, e.nome_fantasia, e.cidade, e.uf, p.nome
					 FROM escola e, pessoa p
					WHERE e.idpes = p.idpes ";
			$SQL .= " AND e.nome_fantasia LIKE '%".$_POST["txtNome"]."%'";
			$SQL .= " ORDER BY nome_fantasia ";	
			
			//die($SQL);

			// Executa a procura
			$PES = mysql_query($SQL);
	
			if (!$PES) {
				die("Erro ao select da tabela ESCOLAS. Técnico:" . mysql_error());
			}
	
			if (mysql_num_rows($PES) < 1){
				$_SESSION["MSG"] = "Não existem dados para ser pesquisado.";
			}
	
		}else{
			$_SESSION["MSG"] = "Informe o nome da escola ou parte do nome.";
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
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; }
.style7 {
	color: #000099;
	font-weight: bold;
}
-->
</style>

<script language="JavaScript" type="text/javascript">
function processa(fqual,facao) {
	document.frmPesquisa.txtAcao.value=facao;
	document.frmPesquisa.txtCod.value=fqual;

	document.frmPesquisa.submit();
}
</script>

</head>
<body>
<form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmPesquisa" id="frmPesquisa">
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
					<span class="texto"><strong>&nbsp;&nbsp;&nbsp;Pesquisa Escola </strong> 
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
			        <div align="center" style="width:100%;color:red;" ><? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?></div></td>
			</tr>
		    <? } ?>
              <tr>
                <td class="texto">
                  <table width="100%"  border="0" align="center" cellpadding="5" cellspacing="2">
                    <tr>
                        <td width="24%" align="right" class="texto"><div align="right" class="style3">Escola</div></td>
                        <td width="76%"  align="left" class="texto"><input name="txtNome" type="text" class="box" size="80" maxlength="55"></td>
                    </tr>
                    <tr>
                      <td  class="texto" align="center" colspan="2">
		        		<input name="btPesquisa" type="button" id="btPesquisa" style="cursor:pointer;" onClick="javascript:document.frmPesquisa.submit();" value="Pesquisa" accesskey="P" alt="Pressione ALT-P para pesquisar.">
		        		<span class="style6">(<span class="style7">ALT-P</span>)</span></td>
                    </tr>
                    <tr>
                      <td colspan="2"  class="texto"><hr></td>
                    </tr>
                    <tr bgcolor="#F9F9F9">
                      <td colspan="2" class="texto">
		      <table width="99%"  border="0" cellspacing="2" cellpadding="2">
                        <tr >
                          <td width="23%" align="center"><b class="texto style1 style2"> <b>Consultor</b></b></td>
                          <td width="38%" align="center"><b class="texto style1 style2">Escola</b></td>
                          <td width="30%" align="center"><b class="texto style1 style2">Cidade/UF</b></td>
                          <td width="9%" align="center"><b class="texto style1 style2">Imprimir</b></td>
                          </tr>
				  <?
					while($dados = mysql_fetch_array($PES)){
		          ?>
                        <tr bgcolor="#EFEFEF">
                          <td><span class="style4"><? echo $dados["nome"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["nome_fantasia"]; ?></span></td>
                          <td><span class="style4"><? echo trim($dados["cidade"]);?> / <? echo trim($dados["uf"]);?> </span></td>
                          <td align="center">
						  <a onClick="processa('<? echo $dados["idesc"]; ?>','imprimir');" style="cursor:pointer;"><img src="images/print.gif" alt="Imprimir Ficha de Cadastro" width="19" height="19"></a>						  </td>
                          </tr>
					<?
					}
					?>					  
                      </table>					  </td>
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
  <input name="txtCod" type="hidden" >
  <input name="txtAcao" type="hidden" >
</form>
</body>
</html>