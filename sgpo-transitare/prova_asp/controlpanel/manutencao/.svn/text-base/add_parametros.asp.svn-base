<!--#include file="../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblAcessos, TblAddParametros, TblCursos, TblDisciplinas, TblDisciplinas_cursos
     Dim codCurso, codDisciplina
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Nova categoria"
     data = date
     hora = time
     codCurso = Request("codCurso")
     codDisciplina = Request("codDisciplina")
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblAddParametros = ObjConn.Execute ("INSERT INTO disciplinas_cursos(codCurso,codDisciplina) VALUES ('"& codCurso & "','" & codDisciplina & "')")
     set TblCursos = ObjConn.Execute ("SELECT * FROM cursos WHERE codCurso = '"& Session("codCurso") &"'")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas ORDER BY disciplina")
     set TblDisciplinas_cursos = ObjConn.Execute ("SELECT disciplinas.disciplina AS Disciplina, disciplinas_cursos.codDisciplina AS nomDisciplina FROM disciplinas INNER JOIN disciplinas_cursos ON disciplinas_cursos.codDisciplina = disciplinas.codDisciplina WHERE disciplinas_cursos.codCurso = '"& Request("codCurso") &"' ORDER BY Disciplina")
%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nova categoria</title>
<link href="../include/estilo.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="328">
		<tr>
			<td class="texto1">
			<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 2px">
			<font size="4">Parâmetros do curso:</font><p style="margin-left: 10px; margin-top: 2px; margin-bottom: 10px">
			<b><font size="4" color="#3672AC"><%=TblCursos("curso")%></font></b></td>
		</tr>
		<tr>
			<td>
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="310" bgcolor="#C0C0C0" id="table1">
					<tr>
						<td bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table2">
							<tr>
								<td class="texto2">
								<p style="margin-left: 5px; margin-top: 5px">
								<font size="1" color="#808080"><b>Adicione as 
								disciplinas deste curso</b></font><b><font size="1" color="#808080">:</font></b></td>
							</tr>
							<tr>
							<form method="post" name="categoria" action="add_parametros.asp">
								<td class="texto2" height="25">
								<p style="margin-left: 5px">
															<input type="hidden" name="codCurso" size="20" value="<%=Session("codCurso")%>"><select size="1" name="codDisciplina" class="box">
															<% While Not TblDisciplinas.EOF %>
															<option value="<%=TblDisciplinas("codDisciplina")%>"><%=TblDisciplinas("disciplina")%></option>
															<%
															TblDisciplinas.MoveNext
															Wend
															%>
															</select></td>
							</tr>
							<tr>
								<td class="texto2" height="25">
								<p style="margin-left: 5px; margin-right: 5px; margin-bottom: 5px" align="right">
												<input type="submit" value="» | Adicionar" name="btoAdicionar" style="font-size: 9px; font-family: Verdana; font-weight: bold; float:left"></td>
							</tr>
						</table>
						</td>
					</form>
					</tr>
					</table>
			</div>
			</td>
		</tr>
		<tr>
			<td height="20">&nbsp;</td>
		</tr>
		<tr>
			<td>
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="310" bgcolor="#C0C0C0">
					<tr>
						<td bgcolor="#F0F0F0" width="262" class="texto2" height="25">
						<p align="left" style="margin-left: 10px">
												<font size="1" color="#808080">
												<b>Disciplinas cadastradas</b></font></td>
					</tr>
					<% While Not TblDisciplinas_cursos.EOF %>
					<tr>
						<td bgcolor="#FFFFFF" width="262" class="texto2" height="20">
						<p align="left" style="margin-left: 10px">
						<font size="1" color="#808080"><%=TblDisciplinas_cursos("disciplina")%></font></td>
					</tr>
					<%
					TblDisciplinas_cursos.MoveNext
					Wend
					%>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
</div>
</body>

</html>