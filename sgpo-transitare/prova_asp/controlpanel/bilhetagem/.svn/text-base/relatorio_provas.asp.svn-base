<!--#include file="../include/checalogin.asp"-->
<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
 If Not Session ("bilhetagem") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblAcessos, TblRelatProvas
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Bilhetagem"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblRelatProvas = ObjConn.Execute ("SELECT DISTINCT codCandidato FROM provas_geradas WHERE mes = '"& Request("mes") &"' AND codCliente = '"& Request("codCliente") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Bilhetagem ]</title>
<link href="../include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../include/scripts.js"></SCRIPT>
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

<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="709">
		<tr>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="435">
			<p align="left" style="margin-left: 10px; margin-right: 10px"><b>
			<font size="4" color="#C0C0C0">Bilhetagem</font></b></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<select size="1" name="funcoes" class="box">
			<option selected value="#">--- Acesso rápido ---</option>
			<option value="#">-------------------------</option>
			</select></td>
		</tr>
		<tr>
			<td bgcolor="#F0F0F0" colspan="2">
			<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table6">
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="39%" class="texto2" align="left">
													<p style="margin-left: 5px">
													<font size="1" color="#47858B">
													<b>Candidato</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="22%" class="texto2" align="left">
													<p style="margin-left: 5px">
													<font size="1" color="#47858B">
													<b>Renach</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="277" align="center" class="texto2">
															<font size="1" color="#47858B">
															<b>Informações da 
															Prova</b></font></td>
												</tr>
												<% While Not TblRelatProvas.EOF %>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="39%" class="texto2" align="left">
										<p style="margin-left: 5px">
										<font size="1"><%=TblRelatProvas("codCandidato")%></font></td>
													<td bgcolor="#FFFFFF" height="30" width="22%" class="texto2" align="left">
										<p style="margin-left: 5px">&nbsp;</td>
										<td bgcolor="#FFFFFF" width="277" class="texto2" height="30">
										<div align="center">
										<table border="0" cellpadding="0" cellspacing="1" width="95%" id="table7" bgcolor="#C0C0C0" height="20">
											<tr>
												<td width="15%" bgcolor="#FFFFFF" align="center" class="texto2">
												<b>
												<font size="1" color="#808080">
												</font></b></td>
												<td width="15%" bgcolor="#FFFFFF" align="center" class="texto2">
												<b>
												<font size="1" color="#808080">
												Hora</font></b></td>
												<td width="15%" bgcolor="#FFFFFF" align="center" class="texto2">
												<b>
												<font size="1" color="#808080">
												Status</font></b></td>
											</tr>
										</table>
										</div>
										</td>
												</tr>
										<%
										TblRelatProvas.MoveNext
										Wend
										%>
												</table>
											</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>