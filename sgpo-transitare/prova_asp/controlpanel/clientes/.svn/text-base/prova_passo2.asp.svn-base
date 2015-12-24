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
     Dim TblCursos, TblAcessos, TblAssunto, TblNatureza, TblDisciplinas, TblDificuldade, TblConfigProva, TblDetrans, TblProva
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Parametrização - Passo2"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblConfigProva = ObjConn.Execute ("INSERT INTO configprova(codCliente,codCurso,codUsuarioCriador,nomeprova,questoes,alternativas,dispensavel) VALUES ('" & Request("codCliente") & "','" & Request("codCurso") & "','" & Request("codUsuarioCriador") & "','" & Request("nomeprova") & "','" & Request("questoes") & "','" & Request("alternativas") & "','" & Request("dispensavel") & "')")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas_cursos WHERE codCurso = '"& Request("codCurso") &"'")
     set TblDisciplinas_cursos = ObjConn.Execute ("SELECT disciplinas.disciplina AS Disciplina, disciplinas_cursos.codDisciplina AS nomDisciplina FROM disciplinas_cursos INNER JOIN disciplinas ON disciplinas_cursos.codDisciplina = disciplinas.codDisciplina WHERE disciplinas_cursos.codCurso = '"& Request("codCurso") &"' ORDER BY disciplinas.disciplina")
     set TblDificuldade = ObjConn.Execute ("SELECT * FROM dificuldade")
     set TblCursos = ObjConn.Execute ("SELECT * FROM cursos WHERE codCurso = '"& Request("codCurso") &"'")
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '"& Request("codCliente") &"'")
     set TblProva = ObjConn.Execute ("SELECT * FROM configprova WHERE nomeprova = '"& Request("nomeprova") &"'")
     Session("codProva") = TblProva("codProva")
     Session("codCurso") = Request("codCurso")
     Session("codCliente") = Request("codCliente")
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
			</font><font size="4" color="#9DC6C6">Passo 2</font></b></td>
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
											<form method="post" name="passo3" action="prova_passo3.asp">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="261">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Parametrização da prova 
													para o cliente:</b></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
			<b><font size="1" color="#3672AC"><%=TblDetrans("nome_fantasia")%></font></b></td>
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
													<b>Código da prova:</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Disciplinas do curso 
													<span style="text-transform: uppercase">
													<font face="Verdana"><%=TblCursos("curso")%></font></span></b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Dificuldade</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Questões</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" width="17%" class="texto2">
													<p style="margin-left: 8px; ">
															<b>
															<font size="3" color="#3672AC" face="Arial">
															<%=TblProva("codProva")%></font></b></td>
													<td bgcolor="#FFFFFF" width="54%" class="texto2">
													<p style="margin-left: 8px">
															<select size="1" name="codDisciplina" class="box">
															<% While Not TblDisciplinas_cursos.EOF %>
															<option value="<%=TblDisciplinas_cursos("nomDisciplina")%>"><%=TblDisciplinas_cursos("disciplina")%></option>
															<%
															TblDisciplinas_cursos.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="40" width="14%">
													<p style="margin-left: 8px">
															<select size="1" name="codDificuldade" class="box">
															<% While Not TblDificuldade.EOF %>
															<option value="<%=TblDificuldade("codDificuldade")%>"><%=TblDificuldade("dificuldade")%></option>
															<%
															TblDificuldade.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="40" width="14%">
													<p style="margin-left: 8px">
															<input type="text" name="questoes" size="10" class="box"></td>
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
														<a href="javascript:document.passo3.submit()"><td style="Cursor: hand" class="texto2" height="27">
														<p align="center" style="margin-top: 3px">
														<b>
														<font size="1" color="#47858B">
														<span style="text-decoration: none">» | 
														</span></font></b>
														<font size="1" color="#47858B">
														<b>
														<span style="text-decoration: none">
														Adicionar parâmetro</span></b></font></td></a>
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