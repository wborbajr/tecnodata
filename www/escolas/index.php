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
require_once("./includes/manutencao.inc.php");

if ($manutencao == "true") {
	header("location: manutencao.php");
	exit();
}

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
		$_SESSION["USR"] = $_POST["txtUsuario"];
		$_SESSION["codLOGIN"] = $dados["idpes"];
		
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
<script language="JavaScript1.2">
   function setaFoco()
   {
      document.frmLogin.txtUsuario.focus();
   }
</script>

<script language="JavaScript" type="text/javascript" src="tmt_validator/script_tmt_validator.js"></script>
<link href="tmt_validator/style.css" rel="stylesheet" type="text/css">

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
                    <form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmLogin" id="frmLogin" tmt:validate="true">
                          <table width="90%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td id="txtUsuario"><div align="center"><font color="#FFFF00" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>usu&aacute;rio:</strong></font></div></td>
                            </tr>
                            <tr>
                              <td><div align="center">
                                  <input name="txtUsuario" type="text" class="required" id="txtUsuario" size="20" maxlength="20" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe o nome do usuário" tmt:filters="ltrim,rtrim"/>
                                </div></td>
                            </tr>
                            <tr>
                              <td id="txtSenha"><div align="center"><font color="#FFFF00" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>senha:</strong></font></div></td>
                            </tr>
                            <tr>
                              <td><div align="center">
                                  <input name="txtSenha" type="password" class="required" id="txtSenha" size="20" maxlength="8" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe a Senha" tmt:filters="ltrim,rtrim"/>
                                </div></td>
                            </tr>
                            <tr>
                              <td> <div align="center">
                                  <br>
                                  <input name="login" type="submit" class="label_botao" value="entrar">
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

</body>
</html>
