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
 If Not Session ("bnq") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
 
     Dim objConn, objRS, strQ
     Dim TblDisciplinas, TblQuestoes, TblPrimeiraHabilitacao, TblInstrutor, TblReciclagem, TblRenovavao, totalQuestoes
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "BNQ"
     ip = Request.ServerVariables("REMOTE_ADDR")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas ORDER BY disciplina")
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE "& Request("curso") &" = 'S'")
     totalQuestoes = TblQuestoes.RecordCount
     
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ BNQ ]</title>
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
			<p align="left" style="margin-left: 10px; margin-right: 10px">
			<font size="4" color="#C0C0C0"><b>BNQ -</b> Banco Nacional de 
			Questões</font></td>
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
			<td colspan="2">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
							<td height="10"></td>
						</tr>
				<tr>
							<td height="10">
							</td>
						</tr>
				<tr>
							<td height="1"></td>
						</tr>
				<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td>
									<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
										<tr>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="7%">
											<p align="center">
											<font size="1" color="#808080"><b>#</b></font></td>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="65%">
											<p style="margin-left: 5px">
											<font size="1" color="#808080"><b>Pergunta</b></font></td>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="17%">
											&nbsp;</td>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="9%">
											&nbsp;</td>
										</tr>
										<% While Not TblQuestoes.EOF %>
										<tr>
										  <td bgcolor="#FFFFFF" class="texto2" width="7%">
											<p align="center">
											<%
											Dim x 
											for x = 1 to ""& totalQuestoes &""
											%>
											<% next %>
											</td>
										  <td bgcolor="#FFFFFF" class="texto2" width="65%"><p style="margin-left: 5px">
											<p style="margin-left: 5px; margin-top:5px; margin-bottom:5px; margin-right:10px">
											<font size="1">
											<%=TblQuestoes("pergunta")%>
											</font>
											</td>
											<td bgcolor="#FFFFFF" class="texto2" width="17%">
											&nbsp;</td>
											<td bgcolor="#FFFFFF" class="texto2" width="9%">
										&nbsp;</td>
										</tr>
										<%
																	TblQuestoes.MoveNext
																	Wend
																	%>
									</table>
									</td>
								</tr>
								</table>
							</td>
						</tr>
				<tr>
					<td height="10"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<p>
																	&nbsp;</p>

</body>

</html>