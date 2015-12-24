<?
	require("./includes/restrito.inc.php"); 
	require_once('./includes/conexao.inc.php');

	if($_SERVER["REQUEST_METHOD"] == "POST"){
//		if($_SESSION["synctoken"] == $_POST["token"]) {
			require_once("./includes/conexao.inc.php");

			// verificado login no banco de dados
			dbcon();
			
			$usu = $_POST["usuario"];
			$sen = md5($_POST["senha"]);
			
			$SQL  = 'INSERT INTO usuario (senha,login) VALUES';
			$SQL .= ' (\'' . $sen . '\',\'' . $usu . '\')';
			
			$result = mysql_query($SQL);
			
			if ($result == 1){
				echo "<p align=\"center\"><strong><font color=\"#FF0000\" size=\"3\" face=\"Verdana, Arial, Helvetica, sans-serif\">Usuário cadastrado com sucesso.</font></strong></p>";
			}else{
				echo "<p align=\"center\"><strong><font color=\"#FF0000\" size=\"3\" face=\"Verdana, Arial, Helvetica, sans-serif\">Erro ao incluir usuário. Tente novamente.</font></strong></p>";
			}
//		}else {
//			echo "TESTE";
//			echo "<p align=\"center\"><strong><font color=\"#FF0000\" size=\"3\" face=\"Verdana, Arial, Helvetica, sans-serif\">Esta sessão não é mais válida. Loge novamente.</font></strong></p>";
//			exit 1;
//		}		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 12px; font-weight: bold; }
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
/* classes for validator */
.tfvHighlight
{font-weight: bold; color: red; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}
.tfvNormal
{font-weight: normal; color: black; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}

-->
</style>
<script language="javascript" src="./tigra_js/validator.js" type="text/javascript"></script>

</head>

<body>
<form method="post" name="frmUsuario" id="frmUsuario" action="<? echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return v.exec()">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="90" height="30">&nbsp;</td>
    <td width="70">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="130">&nbsp;</td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td id="usuario" colspan="2" valign="top">Usu&aacute;rio</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><input name="usuario" type="text" id="usuario" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td id="senha" colspan="2" valign="top">Senha</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">
	<input name="senha" type="password" id="senha" />
	<input type="hidden" name="token" value="<?=$_SESSION["synctoken"]?>"> 
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
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
	// verificado login no banco de dados
	dbcon();

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

<script>
// form fields description structure
var a_fields = {
	'usuario': {
		'l': 'Usuário',  // label
		'r': true,    // required
		'f': 'alpha',  // format (see below)
		't': 'usuario',// id of the element to highlight if input not validated
		
		'm': null,     // must match specified form field
		'mn': 4,       // minimum length
		'mx': 10       // maximum length
	},
	'senha':{'l':'Senha','r':true,'f':'password','t':'senha'}
},

o_config = {
	'to_disable' : ['Submit', 'Reset'],
	'alert' : 1
}

// validator constructor call
var v = new validator('frmUsuario', a_fields, o_config);

</script>
<p class="style12"><span class="style14">A - Altera</span><br />
  <span class="style18">X - Exclui</span> </p>
</body>
</html>

