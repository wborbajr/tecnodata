<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
 
     Dim objConn, objRS, strQ
     Dim v1, v2
     Dim TblDisciplinas, TblQuestoes, TblPrimeiraHabilitacao, TblInstrutor, TblReciclagem, TblRenovavao
     Dim totalQuest, TblQuestoes2
     Dim contador
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Lista Parametros BD"
     ip = Request.ServerVariables("REMOTE_ADDR")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
'     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE codDisciplina AND codAssunto AND primeirahabilitacao = 'S'")
     set TblQuestoes = ObjConn.Execute ("SELECT questoes.codQuestao AS codQuestao, questoes.codDificuldade AS codDificuldade, disciplinas.codDisciplina AS codDisciplina, disciplinas.Disciplina AS Disciplina, assuntos.codAssunto AS codAssunto, assuntos.Assunto AS Assunto FROM questoes INNER JOIN disciplinas ON questoes.codDisciplina = disciplinas.codDisciplina INNER JOIN assuntos ON questoes.codAssunto = assuntos.codAssunto  WHERE questoes.codAssunto AND questoes.codDisciplina AND questoes.renovacao = 'S'")
  
     v1 = TblQuestoes("codDisciplina")
     v2 = TblQuestoes("codAssunto")
     
     'set TblQuestoes = ObjConn.Execute ("SELECT disciplinas.codDisciplina AS codDisciplina")
     
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
	<table border="0" cellpadding="0" cellspacing="0" width="680">
		<tr>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="425">
			<p align="left" style="margin-left: 10px; margin-right: 10px; margin-top:5px; margin-bottom:2px">
			<b><font size="4" color="#C0C0C0">Tecnodata Trânsito Ltda</font></b><p align="left" style="margin-left: 10px; margin-right: 10px; margin-top:2px; margin-bottom:5px">
			<font size="2" color="#C0C0C0"><b>Apresentação da Estrutura dos 
			Bancos de Questões</b></font></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="255">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<font color="#3672AC"><b>Renovação</b></font></td>
		</tr>
		<tr>
			<td bgcolor="#F0F0F0" colspan="2">
			<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
		</tr>
		<tr>
			<td colspan="2" height="15">
											</td>
			</tr>
		<tr>
			<td colspan="2" height="5">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="99%" id="table1" bgcolor="#C0C0C0">
					<tr>
						<td bgcolor="#F0F0F0" height="25" class="texto2" align="center" width="37">
						<b><font size="1" color="#808080">Disc.</font></b></td>
						<td bgcolor="#F0F0F0" height="25" class="texto2">
						<p style="margin-left: 5px"><b>
						<font size="1" color="#808080">Disciplina</font></b></td>
						<td bgcolor="#F0F0F0" height="25" class="texto2" width="33">
						<p align="center"><b><font size="1" color="#808080">Ass.</font></b></td>
						<td bgcolor="#F0F0F0" height="25" class="texto2">
						<p style="margin-left: 5px"><b>
						<font size="1" color="#808080">Asunto</font></b></td>
						<td bgcolor="#F0F0F0" height="25" class="texto2" width="342">
						<p align="center"><b><font size="1" color="#808080">
						Relação de questões (Dif)</font></b></td>
						<td bgcolor="#F0F0F0" height="25" class="texto2" width="37">
						<p align="center"><b><font size="1" color="#808080">
						Total</font></b></td>
					</tr>
					
					<tr>
						<td bgcolor="#FFFFFF" class="texto2" height="20" align="center" width="37">
						<p style="margin-top: 5px; margin-bottom: 5px"><%=TblQuestoes("codDisciplina")%></td>
						<td bgcolor="#FFFFFF" class="texto2" height="20">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px">
						<%=TblQuestoes("Disciplina")%></td>
						<td bgcolor="#FFFFFF" class="texto2" height="20" width="33">
						<p style="margin-top: 5px; margin-bottom: 5px" align="center">
						<%=TblQuestoes("codAssunto")%></td>
						<td bgcolor="#FFFFFF" class="texto2" height="20">
						<p style="margin-top: 5px; margin-bottom: 5px; margin-left:5px">
						<%=TblQuestoes("Assunto")%></td>
						<td bgcolor="#FFFFFF" class="texto2" height="20" width="342">
						<p style="margin-top: 5px; margin-bottom: 5px" align="center">
						<% while not tblquestoes.EOF %>
						<%
						if TblQuestoes("codDisciplina") = v1 AND TblQuestoes("codAssunto") = v2 then
						    Response.Write ""& TblQuestoes("codQuestao")&""
'						    Contador = Contador + 1
						else
						%>
							<td bgcolor="#FFFFFF" class="texto2" height="20" width="37">
							<p style="margin-top: 5px; margin-bottom: 5px" align="center">
							<% 
							Response.Write contador
							Contador = 0
							%>
							</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF" class="texto2" height="20" align="center" width="37">
								<p style="margin-top: 5px; margin-bottom: 5px"><%=TblQuestoes("codDisciplina")%></td>
								<td bgcolor="#FFFFFF" class="texto2" height="20">
								<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px">
								<%=TblQuestoes("Disciplina")%></td>
								<td bgcolor="#FFFFFF" class="texto2" height="20" width="33">
								<p style="margin-top: 5px; margin-bottom: 5px" align="center">
								<%=TblQuestoes("codAssunto")%></td>
								<td bgcolor="#FFFFFF" class="texto2" height="20">
								<p style="margin-top: 5px; margin-bottom: 5px; margin-left:5px">
								<%=TblQuestoes("Assunto")%></td>
								<td bgcolor="#FFFFFF" class="texto2" height="20" width="342">
								<p style="margin-top: 5px; margin-bottom: 5px" align="center">
						
						<%
						    Response.Write ""& TblQuestoes("codQuestao")&""
						    v1 = TblQuestoes("codDisciplina")
						    v2 = TblQuestoes("codAssunto")
						end if
						%>
						(<%
						Select Case TblQuestoes("codDificuldade")
						Case "1"
							Response.Write "F"
						Case "2"
							Response.Write "M"
						Case "3"
							Response.Write "D"
						End Select
						
						contador= contador+ 1
						%>),<%
						TblQuestoes.MoveNext
						Wend
						%>
						</td>
						<td bgcolor="#FFFFFF" class="texto2" height="20" width="37">
						<p style="margin-top: 5px; margin-bottom: 5px" align="center">
						<% 
						Response.Write contador
						Contador = 0
						%>
						</td>
					</tr>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			</td>
		</tr>
		</table>
</div>

<p>
																	&nbsp;</p>

</body>

</html>