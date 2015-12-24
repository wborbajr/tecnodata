<?php

	require_once("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("includes/populaCombo.inc.php");
	
	// Executa a conexao com o banco de dados
	dbcon();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Verifica se esta sendo feito uma alteracao ou exclusao
		if(($_POST["txtAcao"] == "exclui") || ($_POST["txtAcao"] == "edita")){

			// Exclusao de um agendamento
			if($_POST["txtAcao"] == "exclui"){
				$SQL = "DELETE FROM escola WHERE idesc = " . $_POST["txtCod"];
			}elseif($_POST["txtAcao"] == "edita"){
				$_SESSION["acao"] = "edita";
				$_SESSION["codigo"] = $_POST["txtCod"];
				header("Location: escolas.php");
				exit;
			}
			
			$result = mysql_query($SQL);
	
			if (!$result) {
				die("Erro ao select da tabela AGENDA. Técnico:" . mysql_error());
			}
	
			if (mysql_num_rows($result) < 1){
				$_SESSION["MSG"] = "Registro excluido com sucesso.";
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
			        <div align="center" style="width:100%;color:red;"><? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?></div></td>
			</tr>
		    <? } ?>
              <tr>
                <td class="texto">
                  <table width="100%"  border="0" align="center" cellpadding="5" cellspacing="2">
                    <tr>
                      <td width="15%" class="texto" align="right"><div align="right" class="style1 style2"><b>Consultor </b> </div></td>
                      <td width="26%"  align="left" class="texto">
					<? $arrayUsuario = populaCombo("pessoa","idpes","nome","","nome"); ?>
					<select name="cbConsultor" tmt:invalidindex="0" tmt:message="Selecione um consultor" />
					<option>Todos os consultores</option>
					<?
					for ($i = 0; $i < count($arrayUsuario); ++$i) {
					?>
					<option value="<? echo $arrayUsuario[$i][0]; ?>"><? echo $arrayUsuario[$i][1]; ?></option>
					<?
					}
					?>
  				    </select>	
                      </td>
                      <td width="16%"  align="left" class="texto"><div align="right" class="style3">Escola</div></td>
                      <td width="43%"  align="left" class="texto"><input name="txtNome" type="text" class="box" size="50" maxlength="55"></td>
                    </tr>
                    <tr>
                      <td  class="texto" align="center" colspan="4">
		        		<input name="btPesquisa" type="button" id="btPesquisa" style="cursor:pointer;" onClick="javascript:document.frmPesquisa.submit();" value="Pesquisa"> 
						&nbsp;&nbsp; 
						<input name="btNovo" type="button" id="btNovo" style="cursor:pointer;" onClick="window.location='escolas.php';return true;" value="Novo">
						</td>
                    </tr>
                    <tr>
                      <td colspan="4"  class="texto"><hr></td>
                    </tr>
                    <tr bgcolor="#F9F9F9">
                      <td colspan="4" class="texto">
		      <table width="98%"  border="0" cellspacing="2" cellpadding="2">
                        <tr >
                          <td width="15%" align="center"><b class="texto style1 style2"> <b>Consultor</b></b></td>
                          <td width="30%" align="center"><b class="texto style1 style2">Escola</b></td>
                          <td width="15%" align="center"><b class="texto style1 style2">Fone</b></td>
                          <td width="28%" align="center"><b class="texto style1 style2">Contato</b></td>
                          <td width="6%" align="center"><b class="texto style1 style2">Alterar</b></td>
                          <td width="6%" align="center"><b class="texto style1 style2">Excluir</b></td>
                        </tr>
				  <?
					while($dados = mysql_fetch_array($PES)){
		          ?>
                        <tr bgcolor="#EFEFEF">
                          <td><span class="style4"><? echo $dados["nome"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["nome_fantasia"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["fone"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["falar_com"]; ?></span></td>
                          <td align="center">
						  <a onClick="processa('<? echo $dados["idesc"]; ?>','edita');" style="cursor:pointer;"><img src="images/editar_image.gif" alt="Alterar cadastro" width="19" height="19"></a>
						  </td>
                          <td align="center">
				        <a onClick="if(confirm('Deseja realmente excluir a escola?')){processa('<? echo $dados["idesc"]; ?>','exclui');}else{return false;}" style="cursor:pointer;"><img src="images/excluir_image.gif" alt="Excluir cadastro" width="18" height="15"></a>
						  </td>
                        </tr>
					<?
					}
					?>					  
                      </table>
					  </td>
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
