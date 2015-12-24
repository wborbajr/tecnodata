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
	<table border="0" width="709" cellpadding="0">
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
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Acesso 
									Restrito</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Exclusivo 
									para clientes BNQ<br><%=Request.ServerVariables("REMOTE_ADDR")%></font></td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../../controlpanel/bnq/img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td height="20" valign="top">
							<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form method="post" name="novousuario" action="../../controlpanel/bnq/funcoes/cadastra_novousuario.asp">
					<tr>
						<td class="texto1" height="25" bgcolor="#F0F0F0">
						<p style="line-height: 150%; margin-left: 5px; margin-top: 2px; margin-bottom: 5px" align="center">
						<b><font size="2" color="#CC3300">Não foi possível 
						efetuar seu logon no sistema.</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												&nbsp;</b></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px" align="center">
						<font size="1"><b>--- MOTIVO ---</b></font></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px" align="center">
						<font color="#808080">
  <%
  Select Case Request.QueryString("reacao")
       Case 1:
            Response.Write "Seu acesso foi suspenso pelo administrador do sistema, devido a motivos financeiros."
       Case 2:
            Response.Write "Seus dados estão incorretos. Por favor, tente novamente. Lembre-se que após 3(três) tentativas inválidas seu acesso será bloqueado por questões de segurança."
       Case 4:
            Response.Write "O sistema está temporariamente indisponível, por estar em manuntenção. Tente novamente mais tarde."
       Case 6:
            Response.Write "Suas tentativas de login excederam. Por favor, entre em contato com o Administrador."
  End Select
  %>
						</font></td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													</table>
												</td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="20" width="100%" align="right">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="20">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<p align="left">&nbsp;</p>

</body>

</html>