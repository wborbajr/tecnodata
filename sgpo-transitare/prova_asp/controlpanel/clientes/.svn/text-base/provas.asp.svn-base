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
     Dim TblAcessos, TblProvas, TblDelProvas, TblDelParametrizacao
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Provas parametrizadas"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblProvas    = ObjConn.Execute ("SELECT * FROM configprova WHERE codCliente = '"& Request("codCliente") &"' ORDER BY nomeprova")
     set TblDelProvas    = ObjConn.Execute ("DELETE FROM configprova WHERE codProva = '"& Request("deletarProva") &"'")
     set TblDelParametrizacao    = ObjConn.Execute ("DELETE FROM parametrizacao WHERE codProva = '"& Request("deletarProva") &"'")
     Session("codCurso") = TblProvas("codCurso")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Wizard: Prova Passo 1 ]</title>
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
			<font size="4" color="#C0C0C0">Provas parametrizadas</font></b></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			&nbsp;</td>
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
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table2">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p align="center"><b>
													<font size="1">#</font></b></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Nome da prova:</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Questões</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Alternativas:</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Dispensável</b></font></td>
												</tr>
												<% While Not TblProvas.EOF %>
												<tr>
													<td bgcolor="#FFFFFF" width="6%" class="texto2">
													<p align="center">
													<font color="#3672AC"><b><a href="<%=Request.ServerVariables("SCRIPT_NAME")%>?deletarProva=<%=TblProvas("codProva")%>">
													<font color="#3672AC">X</font></a></b></font></font></td>
													<td bgcolor="#FFFFFF" width="40%" class="texto2">
													<p style="margin-left: 8px"><font size="1">
													<a href="detalha_prova.asp?codProva=<%=TblProvas("codProva")%>&codCliente=<%=TblProvas("codCliente")%>" class="linktx2"><%=TblProvas("nomeprova")%></a></font>
													</td>
													<td bgcolor="#FFFFFF" width="15%" class="texto2">
													<p style="margin-left: 8px">
																				<font size="1">
																				<%=TblProvas("questoes")%></font></td>
													<td bgcolor="#FFFFFF" height="40" width="16%" class="texto2">
													<p style="margin-left: 8px">
													<font size="1">
													<%=TblProvas("alternativas")%></font></td>
													<td bgcolor="#FFFFFF" height="40" width="22%" class="texto2">
													<p style="margin-left: 8px">
													<font size="1">
													<%=TblProvas("dispensavel")%></font></td>
												</tr>
												<%
												TblProvas.MoveNext
												Wend
												%>
												</table>
											</td>
										</tr>
				<tr>
			<td height="10">
											</td>
				</tr>
				</form>
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