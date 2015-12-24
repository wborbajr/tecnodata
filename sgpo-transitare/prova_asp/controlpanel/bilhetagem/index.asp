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
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza
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
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans")
     set TblMeses = ObjConn.Execute ("SELECT DISTINCT mes FROM provas_geradas")
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
													<td bgcolor="#F2F7F7" height="25" width="60%" class="texto2" align="left">
													<p style="margin-left: 5px">
													<font size="1" color="#47858B">
													<b>Cliente</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="18%" class="texto2" align="center">
													<p style="margin-left: 5px">
													<font size="1" color="#47858B">
													<b>Mês atual</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="153" align="center" class="texto2">
															<font size="1" color="#47858B">
															<b>Outros Meses</b></font></td>
												</tr>
												<% While Not TblDetrans.EOF %>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="60%" class="texto2" align="left">
										<p style="margin-left: 5px">
										<font size="1"><%=TblDetrans("razao_social")%></font></td>
										<td bgcolor="#FFFFFF" height="30" width="18%" class="texto2" align="center"><p align="center">
										<font size="1">
										<%
										Select Case "6"
											Case "1"	
												Response.Write "<a href='relatorio_provas.asp?mes="& month(now) &"&codCliente="& TblDetrans("codCliente") &"'>Janeiro</a>"
											Case "2"	
												Response.Write "Fevereiro"
											Case "3"	
												Response.Write "Março"
											Case "4"	
												Response.Write "Abril"
											Case "5"	
												Response.Write "Maio"
											Case "6"	
												Response.Write "<a href='relatorio_provas.asp?mes="& month(now) &"&codCliente="& TblDetrans("codCliente") &"' class='linktx2'>Junho</a>"
											Case "7"	
												Response.Write "Julho"
											Case "8"	
												Response.Write "Agosto"
											Case "9"	
												Response.Write "Setembro"
											Case "10"	
												Response.Write "Outubro"
											Case "11"	
												Response.Write "Novembro"
											Case "12"	
												Response.Write "Dezembro"
										End Select
										%>
										</font>
										</td>
										<td bgcolor="#FFFFFF" width="153" class="texto2" height="30">
										<p align="center">
										<select size="1" name="uf" class="box">
										<% While Not TblMeses.EOF %>
										<option value="<%=TblMeses("mes")%>"><%=TblMeses("mes")%></option>
										<%
										TblMeses.MoveNext
										Wend
										%>
										</select></td>
												</tr>
										<%
										TblDetrans.MoveNext
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