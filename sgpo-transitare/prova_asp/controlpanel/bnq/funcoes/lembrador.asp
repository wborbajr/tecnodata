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

<!--#include file="../../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletr�nica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
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
									<td width="399" class="texto2" valign="top">
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Lembrador</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Utilize-o 
									para recuperar sua senha</font><p align="right" style="margin-left:40px; margin-right:20px; margin-top:50px; margin-bottom:2px">
									<font size="2" color="#1E1E1E">� partir 
									desse ponto seu IP ser� monitorado:</font><p align="right" style="margin-left:40px; margin-right:20px; margin-top:2px; margin-bottom:2px">
									<font size="2" color="#CC0000"><%=Request.ServerVariables("REMOTE_ADDR")%> </font>
									</td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="2" height="20" valign="top">
							<img border="0" src="../../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="2">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form method="post" name="lembrador" action="recupera_senha.asp">
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<font size="1" color="#808080"><b>CPF</b></font><b><font size="1" color="#808080">:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">Para resgatar a sua senha, 
						preencha o seu CPF no campo abaixo.</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												<input name="txtCpf" type="text" class="box" size="25" maxlength="11"> 
												</b></font>
								<font color="#808080">Somente n�meros</font></td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													<tr>
														<td height="10"></td>
													</tr>
												</table>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="34%" align="right">&nbsp;</td>
												<td class="texto2" height="25" width="66%">
												<p style="margin-right: 10px" align="right">
												<input type="submit" value="� | Recuperar" name="btoRecuperar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" colspan="2">&nbsp;</td>
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

</body>

</html>