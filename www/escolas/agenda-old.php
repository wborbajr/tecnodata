<?
	require_once("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("./includes/funcoes.inc.php");
	require_once("includes/populaCombo.inc.php");

	// Executa a conexao com o banco de dados
	dbcon();

	// Verirfica se esta vindo para edicao
	if($_SESSION["acao"] == "edita"){
		$codAgenda = $_SESSION["codigo"];
		$_SESSION["acao"] = "";
		$_SESSION["codigo"] = "";
		
		$SQL = "SELECT * FROM agenda a WHERE idage = " . $codAgenda;
		
		$result = mysql_query($SQL);

		if (!$result) {
			die("Erro ao select da tabela ESCOLA. Técnico:" . mysql_error());
		}

		$dados = mysql_fetch_array($result);
		
		$dataObs = bancoToData($dados["data_obs"]);
		$dataVis = bancoToData($dados["data_vis"]);

	}

    // Verifica se foi pressionado o botao gravar.
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once("./class/clausulas_sql.class.php"); 

		// Define a classe
		$sql = new clausulas_sql;

		$dataObs = dataToBanco($_POST["txtDataOBS"]);
		$dataVis = dataToBanco($_POST["txtDataVIS"]);
		
		if($_POST["txtEdita"] == "") {
			// Campos e dados para INSERT
			$campos = array(idesc, idpes_para, idpes_de, data_obs, hora_obs, data_vis, hora_vis, obs);
			$dados = array($_POST["cbCliente"],$_POST["cbPara"],$_POST["cbDe"],$dataObs,
					$_POST["txtHoraOBS"],$dataVis,$_POST["txtHoraVIS"],$_POST["txtOBS"]);

			// Gera a cláusula SQL INSERT
			$comando_sql = "";
			$comando_sql = $sql->gera_insert("agenda", $campos, $dados); 

		}else{
			$campos = array(idesc, idpes_para, idpes_de, data_obs, hora_obs, data_vis, hora_vis, obs);
			$dados = array($_POST["cbCliente"],$_POST["cbPara"],$_POST["cbDe"],$dataObs,
					$_POST["txtHoraOBS"],$dataVis,$_POST["txtHoraVIS"],$_POST["txtOBS"]);

			// Gera a cláusula SQL UPDATE
			$comando_sql = "";
			$comando_sql = $sql->gera_update("agenda", $campos, $dados, "WHERE idage = " . $_POST["txtEdita"]); 
		}

		$result = mysql_query($comando_sql);
		
		if ($result == 1){
			$_SESSION["MSG"] = "Informação gravada com sucesso.";
		}else{
			$_SESSION["MSG"] = "Erro ao efutar cadastro.";
		}
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
}
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>

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
<form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmAgenda" id="frmAgenda" >
<table width="65%" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td colspan="4" align="center" valign="middle"><span class="style10"><? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?></span></td>
                </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><span class="style8">Data</span></td>
                <td><input name="txtDataOBS" type="text" id="txtDataOBS" OnKeyPress='javascript:return(FormatarData(this,event));' value="<? echo $dataObs;?>" size="12" maxlength="10"/></td>
                <td><span class="style8">Hora</span></td>
                <td><input name="txtHoraOBS" type="text" id="txtHoraOBS" size="7" maxlength="5" value="<? echo $dados["hora_obs"];?>"/></td>
            </tr>
            <tr>
                <td bgcolor="#FFCC33"><span class="style12">Data Visita </span></td>
                <td bgcolor="#FFCC33"><input name="txtDataVIS" type="text" id="txtDataVIS" size="12" maxlength="10" OnKeyPress='javascript:return(FormatarData(this,event));' value="<? echo $dataVis;?>"/></td>
                <td bgcolor="#FFCC33"><span class="style12">Hora Visita </span></td>
                <td bgcolor="#FFCC33"><input name="txtHoraVIS" type="text" id="txtHoraVIS" size="7" maxlength="5" value="<? echo $dados["hora_vis"];?>"/></td>
            </tr>
            <tr>
                <td><span class="style8">Cliente</span></td>
                <td colspan="3">
		<? $arrayUsuario = populaCombo("escola","idesc","nome_fantasia","","nome_fantasia"); ?>
		<select name="cbCliente" id="cbCliente" >
		<option>Selecione o cliente ...</option>
		<?
		for ($i = 0; $i < count($arrayUsuario); ++$i) {
		?>
		<option value="<? echo $arrayUsuario[$i][0]; ?>" <? if ($dados["idesc"]==$arrayUsuario[$i][0]){ echo "selected"; } ?>><? echo $arrayUsuario[$i][1]; ?></option>
		<?
		}
		?>
		</select>	
				 </td>
                </tr>
            <tr>
                <td><span class="style8">De</span></td>
                <td>
		<? $arrayUsuario = populaCombo("pessoa","idpes","nome","","nome"); ?>
		<select name="cbDe" id="cbDe" >
		<option>Agenda de...</option>
		<?
		for ($i = 0; $i < count($arrayUsuario); ++$i) {
		?>
		<option value="<? echo $arrayUsuario[$i][0]; ?>" <? if ($dados["idpes_de"]==$arrayUsuario[$i][0]){ echo "selected"; } ?>><? echo $arrayUsuario[$i][1]; ?></option>
		<?
		}
		?>
		</select>	
				
              </td>
                <td><span class="style8">Para</span></td>
                <td>
		<? $arrayUsuario = populaCombo("pessoa","idpes","nome","","nome"); ?>
		<select name="cbPara" id="cbPara" >
		<option>Agenda Para...</option>
		<?
		for ($i = 0; $i < count($arrayUsuario); ++$i) {
		?>
		<option value="<? echo $arrayUsuario[$i][0]; ?>" <? if ($dados["idpes_para"]==$arrayUsuario[$i][0]){ echo "selected"; } ?>><? echo $arrayUsuario[$i][1]; ?></option>
		<?
		}
		?>
		</select>	

				</td>
            </tr>
            <tr>
                <td valign="top"><span class="style8">Observa&ccedil;&atilde;o</span></td>
                <td colspan="3"><textarea name="txtOBS" cols="80" rows="10" id="txtOBS"><? echo $dados["obs"]; ?></textarea></td>
                </tr>
            
            <tr align="center" valign="middle">
                <td colspan="4"><input name="btGravar" type="submit" id="btGravar" value="Gravar" /></td>
                </tr>
        </table></td>
    </tr>
</table>
		<input name="txtEdita" type="hidden" id="txtEdita" value="<? echo $codAgenda;?>">
</form>
</body>
</html>
