<?
//------------------------------------------------------------------------
// index.php
// Pagina principal para acesso ao educacinal
//
// Autor: Waldir Borba Junior
// Data.: 10/11/2005
//------------------------------------------------------------------------

include("./includes/cabecalho.php");
include("./includes/conexao.inc.php");

if (isset($_GET["erro"])) {
   	echo "<p>ERRO: " . $_GET["erro"] . "</p>";
} 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();
	
	// pegando dados do formulario
	$login = str_replace("'","",$_POST["txtUsuario"]);
	$senha = $_POST["txtSenha"];
	$senha = md5($senha);

	// verificado login no banco de dados
	dbcon();
	
	$query = mysql_query("select * from usuario where login = '$login' and senha = '$senha'");
	if (!$query) {
		die("Erro ao select da tabela usuário. Técnico:" . mysql_error());
	}
	
	// verificando se encontrou registros do login e senha no banco de dados.
	if (mysql_num_rows($query) > 0) {
		$dados = mysql_fetch_array($query); // pegando dados do banco.
		$login = $dados["login"];
		$chave = "1a2cf8gk68gj67gf784kh69fo6"; // chave secreca
		$ip = $_SERVER["REMOTE_ADR"]; // ip do usuario
		$hora = time(); // pegado horario atual.
		$chave = md5($login . $chave . $ip . $hora);
		// registrando a session com um array com o codLogin, login e a chave.
		$_SESSION['MeuLogin'] = array("id" => $idpes,"login" => $login,"chave" => $chave,"hora" => $hora);
		// redirecionando para a pagina registrada.
		header("location: principal.php");
	} else {
		// redirecionando para o formulario de login com o erro.
		header("location: index.php?erro=Usuário ou senha Inválida");
	}
}
	
?>

<html>
<head>
<title><?=$title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="css/tecnodata.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
/* classes for validator */
.tfvHighlight
{font-weight: bold; color: red; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}
.tfvNormal
{font-weight: normal; color: black; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}
-->
</style>
<script language="javascript" src="./tigra_js/validator.js" type="text/javascript"></script>

<script language="JavaScript1.2">
   function setaFoco()
   {
      document.frmLogin.txtUsuario.focus();
   }
</script>

</head>

<body onLoad="javascript:setaFoco()">
<table width="82%" height="88%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="656" height="36"><div align="center"><img src="images/logo_tecnodata.jpg" width="200" height="162"></div></td>
    <td width="286"><div align="center"></div></td>
    <td width="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="76"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="250" height="76" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="250" height="76" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="250" height="76" bgcolor="#006699">
                      <form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmLogin" id="frmLogin" onSubmit="return v.exec()">
                          <table width="90%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td id="txtUsuario"><div align="center"><font color="#FFFF00" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>usu&aacute;rio:</strong></font></div></td>
                            </tr>
                            <tr>
                              <td><div align="center">
                                  <input name="txtUsuario" type="text" class="form2" id="txtUsuario" size="20" maxlength="20">
                                </div></td>
                            </tr>
                            <tr>
                              <td id="txtSenha"><div align="center"><font color="#FFFF00" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>senha:</strong></font></div></td>
                            </tr>
                            <tr>
                              <td><div align="center">
                                  <input name="txtSenha" type="password" class="form2" id="txtSenha" size="20" maxlength="8">
                                </div></td>
                            </tr>
                            <tr>
                              <td> <div align="center">
                                  <br>
                                  <input name="login" type="submit" class="label_botao" value="login">
                                </div></td>
                            </tr>
                          </table>
                        </form></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="394"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script>
// form fields description structure
var a_fields = {
	'txtUsuario': {
		'l': 'Usuário',  // label
		'r': true,    // required
		'f': 'alpha',  // format (see below)
		't': 'txtUsuario',// id of the element to highlight if input not validated
		
		'm': null     // must match specified form field
	},
	'txtSenha':{'l':'Senha','r':true,'f':'password','t':'txtSenha'},
},

o_config = {
	'to_disable' : ['Submit', 'Reset'],
	'alert' : 1
}

// validator constructor call
var v = new validator('frmLogin', a_fields, o_config);

</script>

</body>
</html>
