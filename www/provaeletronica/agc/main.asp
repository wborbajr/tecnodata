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

<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->

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
     
     Session("cboCategoria") = Request("cboCategoria")
     
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletr�nica&nbsp; -&nbsp; [ Painel Administrativo ]</title>
<link href="../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../controlpanel/include/scripts.js"></SCRIPT>
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

<body bgcolor="#E0EBF5">

<div align="center">
	<table border="0" width="760" cellspacing="1" cellpadding="0" bgcolor="#C0C0C0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="10" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
<!--
-------------------------------------------------------------------------------------------
Include da tabela topo
-------------------------------------------------------------------------------------------
-->
							<td height="10">
							<!--#include file="include/topo.asp"-->
							</td>
							<!--
-------------------------------------------------------------------------------------------
Fim do include da tabela topo
-------------------------------------------------------------------------------------------
-->
						</tr>
						<tr>
							<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="100%" colspan="6" height="10">
									</td>
								</tr>
								<tr>
									<td width="11%">
									<a href="main.asp?url=candidatos/">
									<img border="0" src="img/bt_candidatos.jpg" width="80" height="25"></a></td>
									<td width="11%">
									<a href="main.asp?url=prova/">
									<img border="0" src="img/bt_prova.jpg" width="80" height="25"></a></td>
									<td width="11%">
									&nbsp;</td>
									<td width="11%">
									&nbsp;</td>
									<td width="11%">
									<%=Application("Driver")%></td>
									<td width="45%" class="texto2">
									<p align="right" style="margin-right: 10px">
									<font size="1" color="#3672AC"><b>Usu�rio:</b>
									</font><font size="1"><%=Session("txtNome")%></font></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>
							<table border="0" cellpadding="0" cellspacing="1" width="100%" bordercolor="#6FA6DC" bgcolor="#629DD9">
								<tr>
									<td bgcolor="#FFFFFF" valign="top">
									<table border="0" cellpadding="0" width="100%" cellspacing="3">
										<tr>
											<td height="300" valign="top">
											<iframe name=TECNODATA align=left src="<%=url%>" scrolling=yes frameborder=0 width=729 height=300 border="0"></iframe>
											</td>
										</tr>
									</table>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="1"></td>
						</tr>
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
<!--
-------------------------------------------------------------------------------------------
Include da tabela base
-------------------------------------------------------------------------------------------
-->
							<td class="texto2">
							<!--#include file="include/base.asp"-->
							</td>
<!--
-------------------------------------------------------------------------------------------
Fim do include da tabela base
-------------------------------------------------------------------------------------------
-->
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