<?
	require("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("includes/populaCombo.inc.php");

	// Executa a conexao com o banco de dados
	dbcon();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// verificado login no banco de dados
		
		$SQL  = "INSERT INTO usuario (idpes,senha,login) VALUES (\"".$_POST["cbConsultor"]."\",\"".md5($_POST["senha"])."\",\"".$_POST["usuario"]."\")";
			
		$result = mysql_query($SQL);
		
		if ($result == 1){
			$_SESSION["MSG"] = "Usuário cadastrado com sucesso";
		}else{
			$_SESSION["MSG"] = "Erro ao incluir usuário. Tente novamente.";
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
.style11 {font-size: 10px}
.style12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style14 {color: #0000FF}
.style16 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.btAltera {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	color: #0000FF;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.btExclui {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	color: #FF0000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.style18 {color: #FF0000}

-->
</style>
<script language="JavaScript" type="text/javascript" src="tmt_validator/script_tmt_validator.js"></script>

<link href="tmt_validator/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style19 {
	font-size: 14px;
	color: #FF0000;
}
-->
</style>
</head>

<body>
<form method="post" name="frmUsuario" id="frmUsuario" action="<? echo $_SERVER["PHP_SELF"]; ?>" tmt:validate="true">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="30" colspan="7"><span class="style19">&nbsp;
        </span>
        <div align="center" class="style19">
            <? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?>
        </div></td>
  </tr>
  <tr>
    <td height="30" colspan="7">&nbsp;
	</td>
  </tr>
  <tr>
    <td width="90" height="22">&nbsp;</td>
    <td colspan="2" align="right" valign="middle" id="usuario">Usu&aacute;rio</td>
    <td width="10">&nbsp;</td>
    <td colspan="2" valign="top">
		<? $arrayUsuario = populaCombo("pessoa","idpes","nome","","nome"); ?>
        <select name="cbConsultor" tmt:invalidindex="0" tmt:message="Selecione um consultor" />
		<option>Selecione um consultor</option>
		<?
		for ($i = 0; $i < count($arrayUsuario); ++$i) {
		?>
        <option value="<? echo $arrayUsuario[$i][0]; ?>"><? echo $arrayUsuario[$i][1]; ?></option>
		<?
		}
		?>
      </select>	
	</td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="2" align="right" valign="middle" id="senha">Senha</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">
	<input type="password" name="senha1" id="senha1" class="required" tmt:required="true" tmt:errorclass="invalid" />	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="2" align="right" valign="middle" id="senha">Confirma&ccedil;&atilde;o </td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">
	<input type="password" name="senha2" id="senha2" class="required" tmt:required="true" tmt:errorclass="invalid" tmt:equalto="senha1" tmt:message="Informe as duas senhas iguais" />	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16"></td>
    <td width="70"></td>
    <td width="40"></td>
    <td></td>
    <td width="20"></td>
    <td width="130"></td>
    <td></td>
  </tr>
  <tr>
    <td height="24"></td>
    <td colspan="5"><div align="center">
      <input name="btGravar" type="submit" id="btGravar" value="Gravar" />
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="36"></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<table width="149" height="43" border="0" align="center" cellspacing="1">
  <tr>
    <td width="90" height="16" bgcolor="#FFCC66"><span class="style12">Usu&aacute;rio</span></td>
    <td width="18" bgcolor="#FFCC66"><div align="center"><span class="style12">A</span></div></td>
    <td width="19" bgcolor="#FFCC66"><div align="center"><span class="style12">X</span></div></td>
  </tr>
  <?
	// Controle da coloração das linhas
	if ($total==''){$total='0';}
		
  	$SQL = "SELECT login FROM usuario ORDER BY login";
	$result = mysql_query($SQL);
	while($array = mysql_fetch_array($result)){
		if($total=='0'){
  ?>
  <tr>
    <td height="24" bgcolor="#FFFFCC"><span class="style16"><? echo $array["login"]; ?></span></td>
    <td bgcolor="#FFFFCC"><div align="center"><span class="style11">
      <input name="btAletera" type="button" class="btAltera" id="btAletera" value="A" />
    </span></div></td>
    <td bgcolor="#FFFFCC"><div align="center"><span class="style11">
      <input name="btExclui" type="button" class="btExclui" id="btExclui" value="X" />
    </span></div></td>
  </tr>
  <?
  		}else{
		?>
  <tr>
    <td height="24" ><span class="style16"><? echo $array["login"]; ?></span></td>
    <td ><div align="center"><span class="style11">
      <input name="btAletera" type="button" class="btAltera" id="btAletera" value="A" />
    </span></div></td>
    <td ><div align="center"><span class="style11">
      <input name="btExclui" type="button" class="btExclui" id="btExclui" value="X" />
    </span></div></td>
  </tr>
		 <?				
			$total = -1;
		}
		$total++;
  	}
  ?>
</table>
</form>

<p class="style12"><span class="style14">A - Altera</span><br />
  <span class="style18">X - Exclui</span> </p>
</body>
</html>

