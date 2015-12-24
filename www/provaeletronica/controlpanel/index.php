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
	session_start();
	if(empty($_SESSION["Auth"])){		
		header("Location: main.php?url=include/logar.php");
		exit;
	}

//	$url = $_GET["url"];

	$pagina = "HOME";
	$ip = $_SERVER["REMOTE_ADDR"];
	$browser = $_SERVER["HTTP_USER_AGENT"];
	$historico = $_SERVER["HTTP_REFERER"];
	$data = date("dmY");
	$hora = time(); // $_SERVER["REQUEST_TIME"];
?>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Painel Administrativo ]</title>
<link href="include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="include/scripts.js"></SCRIPT>
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
	<table border="0" width="710" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top" height="20">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="100%" height="100">
									</td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td class="texto1">
							<p align="center" style="margin-top: 5px; margin-bottom: 5px">
							<font color="#CC3300"><b>Usuário logado.</b></font></p>
							<p align="center" style="margin-top: 5px; margin-bottom: 5px">
							<font color="#808080"><b>Selecione 
											uma opção no menu acima.</b></font></td>
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