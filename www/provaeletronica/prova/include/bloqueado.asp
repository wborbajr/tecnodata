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

<!--#include file="connectionmysql.asp"-->
<!--#include file="adovbs.inc"-->

<%
url = Request("url")
%>

<%

     Dim objConn, objRS, strQ, strConn
     Dim TblCategorias, TblQuestoes, TblAssunto, TblListaAssunto, TblListaNatureza, TblNatureza, codNatureza, codAssunto
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Painel Administrativo ]</title>
<link href="../../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../../controlpanel/include/scripts.js"></SCRIPT>
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
									<td width="100%" height="100" class="texto">
									&nbsp;</td>
								</tr>
								<tr>
									<td width="100%" height="60" class="texto">
									<p align="center"><b>
									<font size="6" color="#CC3300">Sistema 
									Bloqueado</font></b></td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td class="texto1">
							<p align="center" style="margin:5px 100px; ">
							<b>O seu acesso ao sistema foi bloqueado pelo 
							administrador. Favor entrar em contato com a 
							Tecnodata.</b></td>
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