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
 If Not Session ("clientes") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if

 If Not Session ("cadastrar") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblDetrans, TblAcessos, TblAssunto, TblNatureza, TblDisciplinas, TblDisciplinas2, TblDificuldade
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Parametrização"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblAssunto = ObjConn.Execute ("SELECT * FROM assuntos")
     set TblNatureza = ObjConn.Execute ("SELECT * FROM natureza")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas ORDER BY disciplina")
     set TblDisciplinas2 = ObjConn.Execute ("SELECT * FROM disciplinas ORDER BY disciplina")
     set TblDificuldade = ObjConn.Execute ("SELECT * FROM dificuldade")
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans WHERE id = '"& Request("id") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Contatos ]</title>
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
			<font size="4" color="#C0C0C0">Parametrização do ambiente de prova</font></b></td>
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
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
			<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table8">
												<tr>
													<td bgcolor="#FFFFFF" class="texto2" width="35%" valign="top">
													<table border="0" cellpadding="0" cellspacing="5" width="100%" id="table13">
														<tr>
															<td valign="top">
															<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table14">
																<tr>
																	<td height="20"></td>
																</tr>
																<% While Not TblDisciplinas2.EOF %>
																<tr>
																	<td class="texto2" height="30">
																	<font face="Verdana" size="1"><%=TblDisciplinas2("disciplina")%></font></td>
																</tr>
																<%
																TblDisciplinas2.MoveNext
																Wend
																%>
															</table>
															</td>
														</tr>
													</table>
													</td>
													<td bgcolor="#FFFFFF" class="texto2" width="65%" valign="top">
													<table border="0" cellpadding="0" cellspacing="5" width="100%" id="table11">
														<tr>
														<% While Not TblDetrans.EOF %>
															<td>
															<table border="0" cellpadding="0" cellspacing="1" width="10%" bgcolor="#C0C0C0" id="table12">
																
																<tr>
																	<td bgcolor="#F2F7F7" height="20" class="texto2" align="center" width="15%">
																	<font size="1" color="#47858B">
																	<%=TblDetrans("uf")%></font></td>
																</tr>
																<% While Not TblDisciplinas.EOF %>
																<tr>
																	<td bgcolor="#FFFFFF" height="30" class="texto2" align="center" width="15%">
															<input type="text" name="<%=TblDisciplinas("codDisciplina")%>" size="5" class="box"></td>
																</tr>
																<%
																TblDisciplinas.MoveNext
																Wend
																%>
															</table>
															</td><%
															TblDetrans.MoveNext
															Wend
															%>
														</tr>
													</table>
													</td>
												</tr>
												</table>
											</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	</table>
</div>

</body>

</html>