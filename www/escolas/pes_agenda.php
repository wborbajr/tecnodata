<?php
	require_once("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("./includes/populaCombo.inc.php");
	require_once("./includes/funcoes.inc.php");
	
	// Executa a conexao com o banco de dados
	dbcon();

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
		if(($_POST["txtAcao"] == "excluir") || ($_POST["txtAcao"] == "edita") || ($_POST["txtAcao"] == "realizado")){

			// Exclusao de um agendamento
			if($_POST["txtAcao"] == "excluir"){
				$SQL = "DELETE FROM agenda WHERE idage = " . $_POST["txtCod"];
			}elseif($_POST["txtAcao"] == "realizado"){
				$SQL = "UPDATE agenda SET realizado = 's' WHERE idage = " . $_POST["txtCod"];
			}elseif($_POST["txtAcao"] == "edita"){
				$_SESSION["acao"] = "edita";
				$_SESSION["codigo"] = $_POST["txtCod"];
				header("Location: agenda.php");
				exit;
			}
			
			$result = mysql_query($SQL);
	
			if (!$result) {
				die("Erro ao select da tabela AGENDA. Técnico:" . mysql_error());
			}
	
			if (mysql_num_rows($result) < 1){
				$_SESSION["MSG"] = "Processo realizado com sucesso.";
			}
		}

		// Verifica se selecionou um consultor ou informou alguma escola
		if(($_POST["cbConsultor"] == "Todos os consultores") && ($_POST["dtINI"] == "") && ($_POST["dtFIN"] == "")){
			$SQL = "";
			$SQL = "SELECT a.idesc, a.idage, a.data_obs, a.hora_obs, a.data_vis, a.hora_vis, a.obs, e.nome_fantasia,
					(SELECT nome FROM pessoa WHERE a.idpes_de = idpes) AS agendaDE,
					(SELECT nome FROM pessoa WHERE a.idpes_para = idpes) AS agendaPARA, a.visita
					FROM agenda a, escola e, pessoa p
					WHERE a.idesc = e.idesc
					AND p.idpes = a.idpes_para
					AND a.realizado = ''";

		}else{
			// Excuta a pesquisa com base em parametros
			$SQL = "SELECT a.idesc, a.idage, a.data_obs, a.hora_obs, a.data_vis, a.hora_vis, a.obs, e.nome_fantasia,
					(SELECT nome FROM pessoa WHERE a.idpes_de = idpes) AS agendaDE,
					(SELECT nome FROM pessoa WHERE a.idpes_para = idpes) AS agendaPARA, a.visita
					FROM agenda a, escola e, pessoa p
					WHERE a.idesc = e.idesc
					AND p.idpes = a.idpes_para
					AND a.realizado = ''";

			if($_POST["cbConsultor"] != "Todos os consultores"){
				$SQL .= " AND p.idpes = " . $_POST["cbConsultor"];
			}
			
			if(empty($_POST["txtEscola"])){
				$SQL .= " AND e.nome_fantasia LIKE '%".$_POST["txtEscola"]."%'";				
			}

			if(($_POST["dtINI"] != "") && ($_POST["dtFIN"] != "")){
				$SQL .= " AND a.data_vis BETWEEN '" . dataToBanco($_POST["dtINI"]) ."' AND '" . dataToBanco($_POST["dtFIN"]) . "'";
			}
			
		}

		$SQL .= " ORDER BY a.data_vis, a.hora_vis ";	

		echo " ESCOLA: " . $_POST["txtEscola"] . " SQL: ";
		if(empty($_POST["txtEscola"])){
			echo " VAZIO ";
		}else{
			echo " COM VALOR ";
		}
		die($SQL);

		// Executa a procura
		$PES = mysql_query($SQL);

		if (!$PES){
			die("Erro ao select da tabela AGENDA. Técnico:" . mysql_error());
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
.style7 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #FF0000; }
.style9 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #0000FF; }
-->
</style>

<script language="JavaScript" type="text/javascript">
function processa(fqual,facao) {
	document.frmPesquisa.txtAcao.value=facao;
	document.frmPesquisa.txtCod.value=fqual;

	document.frmPesquisa.submit();
}

function popup(url,nome,w,h){
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',resizable=0,status=0,toolbar=0';
	window.open(url,nome,winprops);
}

</script>

<script language="JavaScript1.2">
function FormatarData(campo,e){
	var cod="";
	if(document.all) {
		cod=event.keyCode;
	}else {
		cod=e.which;
	}
	
	if(cod == 08 || cod == 13 || cod == 46 || cod == 00) return;
		
	if (cod < 48 || cod > 57){
		if (cod < 45 || cod > 57) 
			alert("Digite somente Caracteres Numéricos!");
		cod=0;
		campo.focus(); return false;
	}
	
	tam=campo.value.length; 
	
	if(tam > 9) 
		return false;
	var caract = String.fromCharCode(cod);
	
	if(tam == 2 || tam == 5) {
		campo.value+="/"+caract; 
		return false;
	}
	
	campo.value+=caract; 
	return false;
}
document.onKeyPress=FormatarData;
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
					<span class="texto"><strong>&nbsp;&nbsp;&nbsp;Pesquisa Agenda </strong> 
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
                      <td width="15%" class="texto" align="right"><div align="right" class="style1 style2"><b>Consultor  </b> </div></td>
                      <td  align="left" class="texto">
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
				  </select>                      <span class="style3">De</span>
				  <input name="radiobutton" type="radio" value="d">
				  <span class="style3">Para
				  <input name="radiobutton" type="radio" value="p">
				  </span></td>
                      </tr>
<tr>
                      <td width="15%" class="texto" align="right"><div align="right" class="style1 style2"><b>Escola</b> </div></td>
                      <td  align="left" class="texto"><option value="<? echo $arrayUsuario[$i][0]; ?>">
                      <input type="text" name="aux" value="<? echo $dados["idesc"]; ?>" size="5" readonly="true"/>
                      <input name="txtEscola" size="70" value="<? echo $dados["nome_fantasia"]; ?>" readonly="true" />
                      <a onClick="javascript:popup('procura_escola.php','Escola',650,450);" style="cursor:pointer;"><img src="images/lupa.gif" alt="Procurar escola" width="18" height="15"></a></option></td>
                      </tr>
<tr>
                      <td width="15%" class="texto" align="right"><div align="right" class="style3">Per&iacute;odo</div></td>
                      <td  align="left" class="texto"><input name="dtINI3" type="text" class="box" id="dtINI3" size="11" maxlength="10" OnKeyPress='javascript:return(FormatarData(this,event));'>
                          <span class="style4"><strong>&agrave;</strong></span>
                          <input name="dtFIN2" type="text" class="box" id="dtFIN2" size="11" maxlength="10" OnKeyPress='javascript:return(FormatarData(this,event));'></td>
                      </tr>					
                    <tr>
                      <td  class="texto" align="center" colspan="2">
		        		<input name="btPesquisa" type="button" id="btPesquisa" style="cursor:pointer;" onClick="javascript:document.frmPesquisa.submit();" value="Pesquisa"> 
						&nbsp;&nbsp; 
						<input name="btNovo" type="button" id="btNovo" style="cursor:pointer;" onClick="window.location='agenda.php';return true;" value="Novo">						</td>
                    </tr>
                    <tr>
                      <td colspan="2"  class="texto"><hr>
                      <p><span class="style7">Legenda</span><br>
                          <span class="style9"> <img src="images/lupa.gif" width="16" height="16"> - Mostra ficha da escola | <img src="images/editar_image.gif" width="19" height="19"> - Altera agenda | <img src="images/excluir_image.gif" width="18" height="15">- Exclui agenda | <img src="images/ok.gif" width="24" height="16"> - Agendamento realizado </span></p>
                          <hr></td>
                    </tr>
                    <tr bgcolor="#F9F9F9">
                      <td colspan="2" class="texto">
		      <table width="100%"  border="0" cellspacing="1" cellpadding="1">
                        <tr >
                          <td width="4%" align="center"><b class="texto style1 style2"> <b>Data  </b></b></td>
                          <td width="7%" align="center"><b class="texto style1 style2"><b>Data Vis </b></b></td>
                          <td width="6%" align="center"><b class="texto style1 style2"><b>Hora Vis </b></b></td>
                          <td width="16%" align="center"><b class="texto style1 style2">De</b></td>
                          <td width="10%" align="center"><b class="texto style1 style2">Para</b></td>
                          <td width="13%" align="center"><b class="texto style1 style2">Cliente</b></td>
                          <td width="34%" align="center"><b class="texto style1 style2">Obs</b></td>
                          <td width="3%" align="center">&nbsp;</td>
                          <td width="2%" align="center">&nbsp;</td>
                          <td width="2%" align="center">&nbsp;</td>
                          <td width="3%" align="center">&nbsp;</td>
                        </tr>
				  <?
					while($dados = mysql_fetch_array($PES)){
		          ?>
				  		<? if ($dados["data_vis"] != "0000-00-00"){ ?><tr bgcolor="#FFCC33">
						<? }else{ ?> <tr bgcolor="#EFEFEF"> <? } ?>
                          <td><span class="style4"><? echo bancoToData($dados["data_obs"],2); ?></span></td>
                          <td><span class="style4"><? echo bancoToData($dados["data_vis"],2); ?></span></td>
                          <td><span class="style4"><? echo formataHora($dados["hora_vis"]); ?></span></td>
                          <td><span class="style4"><? echo $dados["agendaDE"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["agendaPARA"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["nome_fantasia"]; ?></span></td>
                          <td><span class="style4"><? echo $dados["obs"]; ?></span></td>
                          <td align="center">
						  <a onClick="javascript:popup('ficha_escola.php?cod=<? echo $dados["idesc"];?>','Escola',650,450);" style="cursor:pointer;"><img src="images/lupa.gif" alt="Ver ficha da escola" width="16" height="16"></a>						  </td>
                          <td align="center">
						  <a onClick="processa('<? echo $dados["idage"]; ?>','edita');" style="cursor:pointer;"><img src="images/editar_image.gif" alt="Alterar agendamento" width="19" height="19"></a>						  </td>
                          <td align="center"><a onClick="if(confirm('Deseja realmente excluir a agendamento?')){processa('<? echo $dados["idage"]; ?>','excluir');}else{return false;}" style="cursor:pointer;"><img src="images/excluir_image.gif" alt="Excluir agendamento" width="18" height="15"></a></td>
                          <td align="center">
				        <a onClick="if(confirm('Deseja marcar como realizado ?')){processa('<? echo $dados["idage"]; ?>','realizado');}else{return false;}" style="cursor:pointer;"><img src="images/ok.gif" alt="Marcar como ação realizada." width="24" height="16"></a></td>
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
