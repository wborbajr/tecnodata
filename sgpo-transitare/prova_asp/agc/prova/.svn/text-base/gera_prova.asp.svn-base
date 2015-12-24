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

<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
 If Not Session ("Painel_Cliente") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ, strConn
     Dim TblAcessos, TblGeraProva, v1, v2, TblProvaGerada
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Gera Prova"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblConfigProva = ObjConn.Execute ("SELECT * FROM configprova WHERE codProva = '"& Request("codProva") &"'")
     set TblGeraProva = ObjConn.Execute ("SELECT questoes.codQuestao AS codQuestao, questoes.codDisciplina AS codDisciplina, questoes.codDificuldade AS codDificuldade FROM questoes INNER JOIN parametrizacao ON questoes.codDisciplina = parametrizacao.codDisciplina INNER JOIN dificuldade ON questoes.codDificuldade = dificuldade.codDificuldade WHERE parametrizacao.codDisciplina AND parametrizacao.codDificuldade AND parametrizacao.codProva = '"& Request("codProva") &"' ORDER BY RAND() LIMIT "&TblConfigProva("questoes")&"")
     
     set TblStatusProva = ObjConn.Execute ("UPDATE candidatos SET status = 'Prova gerada' WHERE codCandidato = '"& Session("codCandidato") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>AGC -&nbsp; [ Candidatos ]</title>
<link href="../../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../../controlpanel/include/scripts.js"></SCRIPT>
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
			<td bgcolor="#DAE6F3" height="37" class="texto1" width="435">
			<p align="left" style="margin-left: 10px; margin-right: 10px">
			<b><font size="4" color="#A6C2E1">Gera Prova</font></b></td>
			<td bgcolor="#DAE6F3" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#DAE6F3" colspan="2">
			<p align="right">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table2" bgcolor="#C0C0C0">
					<tr>
						<td bgcolor="#F0F0F0" class="texto2" height="25">
						<p style="margin-left: 5px">
						<font size="1" color="#808080"><b>Disciplina</b></font></td>
						<td bgcolor="#F0F0F0" class="texto2" height="25">
						<p style="margin-left: 5px">
						<font size="1" color="#808080"><b>Dificuldade</b></font></td>
						<td bgcolor="#F0F0F0" class="texto2" height="25">
						<p style="margin-left: 5px">
						<font size="1" color="#808080"><b>Cód. Questão</b></font></td>
					</tr>
					<% while not tblGeraProva.EOF %>
						<%
						if TblGeraProva("codDisciplina") = v1 AND TblGeraProva("codDificuldade") = v2 then
						else
						objconn.Execute ("INSERT INTO provas_geradas(codCliente,codCandidato,codProva,codDisciplina,codDificuldade,codQuestao) VALUES ('"& Session("codCliente") &"','"& Session("codCandidato") &"','"& Request("codProva") &"','"& TblGeraProva("codDisciplina") &"','"& TblGeraProva("codDificuldade") &"','"& TblGeraProva("codQuestao") &"')")
						%>
					<tr>
						<td bgcolor="#FFFFFF" height="20" class="texto2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px"><%=TblGeraProva("codDisciplina")%></td>
						<td bgcolor="#FFFFFF" height="20" class="texto2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px"><%=TblGeraProva("codDificuldade")%></td>
						<td bgcolor="#FFFFFF" height="20" class="texto2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px"><%=TblGeraProva("codQuestao")%></td>
					</tr>
					<%
					end if
					%>
					<%
					TblGeraProva.MoveNext
					Wend
					%>
				</table>
			</div>
			</td>
		</tr>
	</table>
</div>
</body>

</html>