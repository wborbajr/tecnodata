<!--
----------------------------------------------
| Desenvolvido por:                          |
|                                            |
| MENTEC SOLUTION PROVIDER LTDA              |
| Curitiba - PR - Brasil                     |
| www.mentec.com.br                          |
| alo@mentec.com.br                          |
----------------------------------------------
-->

<?
	require_once("../../includes/class_db_mysql.php");

	$pagina = "Login";
	$ip = $_SERVER["REMOTE_ADDR"];
	$browser = $_SERVER["HTTP_USER_AGENT"];
	$historico = $_SERVER["HTTP_REFERER"];
	$data = date("dmY");
	$hora = time();
		
	$DB = new dbConnecta();
?>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//
-->
</script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" width="710" cellspacing="1" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="60"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2">
									<p align="center" style="margin: 2px 20px">
									<font size="5" color="#CC0000"><b>ACESSO 
									RESTRITO</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Somente para 
									funcionários da Tecnodata</font></td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img src="../img/linha_bra.gif" width="1" height="1" border="0"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="3" height="40" valign="top">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
											<form method="post" name="login" action="login.php?mode=logon">
												<td class="texto2" height="25" width="34%" align="right">
												<p style="margin-right: 5px">
												<font size="1"><b>Usuário:</b></font></td>
												<td class="texto2" height="25" width="66%" colspan="2">
												<select size="1" name="txtNome" class="box">
												<option selected value="#">Selecione um usuário</option>
												<option>--------------------</option>
												<?
												$arrayUsuario = $DB->populaCombo("usuarios","txtNome","txtNome","","txtNome");
												for ($i = 0; $i < count($arrayUsuario); ++$i) { 
												?>
												<option value="<? echo $arrayUsuario[$i][0]; ?>"> <? echo $arrayUsuario[$i][1]; ?></option>
												<?
												}
												?>
												</select></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="34%" align="right">
												<p style="margin-right: 5px">
												<font size="1"><b>Senha:</b></font></td>
												<td class="texto2" height="25" width="35%">
												<input type="password" name="txtSenha" size="20" class="box"></td>
												<td class="texto2" height="25" width="31%"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="34%" align="right"></td>
												<td class="texto2" height="25" width="66%" colspan="2">
												<input type="submit" value="» | OK" name="btoLogon" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
											</form>
											</tr>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" colspan="3"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="3">
												<p style="margin-right: 10px">
												<font color="#808080">[ 
												<font size="1">Esqueci 
												minha senha</font>&nbsp; |&nbsp; 
												<span style="font-size: 7pt">
												<a class="linktx2" href="../bnq/funcoes/bio/bio.php">
												<font color="#808080">Efetuar meu cadastro</font></a></span> 
												]</font></td>
											</tr>
											<tr>
												<td colspan="3" height="20" valign="bottom">
												<p align="right">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
										</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="10"></td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>