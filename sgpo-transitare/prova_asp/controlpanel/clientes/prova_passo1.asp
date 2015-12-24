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
     Dim TblDetrans, TblAcessos, TblDisciplinas, TblDificuldade, TblCursos
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
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas ORDER BY disciplina")
     set TblDificuldade = ObjConn.Execute ("SELECT * FROM dificuldade")
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans ORDER BY nome_fantasia")
     set TblCursos    = ObjConn.Execute ("SELECT * FROM cursos ORDER BY curso")
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
			<font size="4" color="#C0C0C0">Wizard para criação de provas -
			</font><font size="4" color="#9DC6C6">Passo 1</font></b></td>
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
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table1">
											<form method="post" name="passo1" action="prova_passo2.asp">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="125">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Selecione o curso:</b></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="200">
													<p style="margin-left: 10px; margin-right: 10px; ">
			<select size="1" name="codCurso" class="box">
			<option selected value="#">------</option>
			<% While Not TblCursos.EOF %>
			<option value="<%=TblCursos("codCurso")%>"><%=TblCursos("curso")%></option>
			<%
			TblCursos.MoveNext
			Wend
			%>
			</select></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="141">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Selecione o cliente:</b></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px">
			<select size="1" name="codCliente" class="box">
			<option selected value="#">------</option>
			<% While Not TblDetrans.EOF %>
			<option value="<%=TblDetrans("codCliente")%>"><%=TblDetrans("nome_fantasia")%></option>
			<%
			TblDetrans.MoveNext
			Wend
			%>
			</select></td>
												</tr>
												</table>
											</td>
										</tr>
				<tr>
			<td height="5">
											</td>
				</tr>
				<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table2">
												<tr>
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
												<tr>
													<td bgcolor="#FFFFFF" width="46%" class="texto2">
													<p style="margin-left: 8px; ">
															<textarea rows="2" name="nomeprova" cols="55" class="box"></textarea></td>
													<td bgcolor="#FFFFFF" width="15%" class="texto2">
													<p style="margin-left: 8px">
																				<font color="#47858B">
														<select size="1" name="questoes" class="box">
														<option selected>---
														</option>
														<option value="30">30</option>
														<option value="40">40</option>
														<option value="50">50</option>
														</select></font></td>
													<td bgcolor="#FFFFFF" height="40" width="16%">
													<p style="margin-left: 8px">
			<select size="1" name="alternativas" class="box">
			<option selected>---</option>
			<option value="4">4</option>
			<option value="5">5</option>
			</select></td>
													<td bgcolor="#FFFFFF" height="40" width="22%">
													<div align="center">
														<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table3">
															<tr>
																<td align="center" width="20%">
																<input type="radio" value="sim" name="dispensavel"></td>
																<td class="texto2" width="30%">
																Sim</td>
																<td align="center" width="20%">
																<input type="radio" value="não" name="dispensavel"></td>
																<td class="texto2" width="30%">
																Não</td>
															</tr>
														</table>
													</div>
													</td>
												</tr>
												</table>
											</td>
										</tr>
				<tr>
			<td height="10">
											</td>
				</tr>
				<tr>
			<td>
											<div align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="150" id="table4" bgcolor="#9DC6C6">
													<tr>
														<a href="javascript:document.passo1.submit()"><td style="Cursor: hand" class="texto2" height="27">
														<p align="center" style="margin-top: 3px">
														<b>
														<font size="1" color="#47858B">
														» | Próximo passo</font></b></td></a>
													</tr>
													<tr>
														<td>
														<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
													</tr>
												</table>
											</div>
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