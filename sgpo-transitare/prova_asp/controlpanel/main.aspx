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
Dim url
url = Request("url")
%>

<%
     
     Session("cboCategoria") = Request("cboCategoria")
     Session("statusCliente") = Request("status")
     Session("numQuestoes") = Request("questoes")
     Session("numAlternativas") = Request("alternativas")
     Session("codDetran") = Request("codDetran")
     Session.TimeOut = 20
     
%>

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
//-->
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
									<a href="main.aspx?url=bilhetagem/">
									<img border="0" src="img/bt_bilhetagem.jpg" width="80" height="25"></a></td>
									<td width="11%">
									<a href="main.aspx?url=bnq/">
									<img border="0" src="img/bt_bnq.jpg" width="80" height="25"></a></td>
									<td width="11%">
									<a href="main.aspx?url=clientes/">
									<img border="0" src="img/bt_clientes.jpg" width="80" height="25"></a></td>
									<td width="11%">
									<a href="main.aspx?url=usuarios/">
									<img border="0" src="img/bt_usuarios.jpg" width="80" height="25"></a></td>
									<td width="11%">
									</td>
									<td width="45%" class="texto2">
									<p align="right" style="margin-right: 10px">
									<font size="1" color="#3672AC"><b>Usuário:</b>
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