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
 If Not Session ("manutencao") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblAcessos, TblDisciplinas, TblDificuldade, TblAssunto, TblNatureza, TblQuestoes
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Manutenção"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas")
     set TblDificuldade = ObjConn.Execute ("SELECT * FROM dificuldade")
     set TblAssunto = ObjConn.Execute ("SELECT * FROM assuntos")
     set TblNatureza = ObjConn.Execute ("SELECT * FROM natureza")
     
     Dim diplioma
     diploma = Request("diploma")
     
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE status = '"& Request("status") &"'")
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
			<font size="4" color="#C0C0C0">Manutenção</font></b></td>
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
			<td colspan="2" height="10">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table6">
				<tr>
					<td width="84"><a href="#" onclick="OpenWindow('../include/pop.asp?url=../manutencao/novocurso.asp','NOVOCURSO','342','290','no');">
					<img border="0" src="../img/bt_cursos.jpg" width="80" height="25"></a></td>
					<td width="85">
					<img border="0" src="../img/bt_questoes.jpg" width="80" height="25"></td>
					<td>&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" height="1"></td>
		</tr>
		<tr>
			<td colspan="2">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1">
				<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table2">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="90%" colspan="14">
													<p style="margin-left: 10px" align="left">
													<font size="1" color="#808080">
													<b>Critérios de pesquisa</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Status</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Dipl.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Nº.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Cap.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Sç.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Art.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font face="Verdana" color="#47858B">
													§</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Inc.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Alín.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Item</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" align="center" class="texto2">
												<font color="#47858B">Dis.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" align="center" class="texto2">
												<font color="#47858B">Dif.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" align="center" class="texto2">
												<font color="#47858B">Nat.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" align="center" class="texto2">
												<font color="#47858B">Ass.</font></td>
												</tr>
												<form method="post" name="manutencao" action="<%=Request.ServerVariables("SCRIPT_NAME")%>">
												<tr>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<select size="1" name="status" class="box">
															<option selected></option>
															<option value="Em análise">A</option>
															<option value="Bloqueado">B</option>
															<option value="Livre">L</option>
															<option value="Manutenção">M</option>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="diploma" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="numero" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="capitulo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="secao" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="artigo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="paragrafo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="inciso" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="alinea" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" align="center" class="texto2">
															<input type="text" name="item" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" align="center" class="texto2">
															<select size="1" name="codDisciplina" class="box">
															<option selected></option>
															<% While Not TblDisciplinas.EOF %>
															<option value="<%=TblDisciplinas("codDisciplina")%>"><%=TblDisciplinas("codDisciplina")%></option>
															<%
															TblDisciplinas.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" align="center" class="texto2">
															<select size="1" name="codDificuldade" class="box">
															<option selected></option>
															<% While Not TblDificuldade.EOF %>
															<option value="<%=TblDificuldade("codDificuldade")%>"><%=TblDificuldade("codDificuldade")%></option>
															<%
															TblDificuldade.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" align="center" class="texto2">
															<select size="1" name="codNatureza" class="box">
															<option selected></option>
															<% While Not TblNatureza.EOF %>
															<option value="<%=TblNatureza("codNatureza")%>"><%=TblNatureza("codNatureza")%></option>
															<%
															TblNatureza.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" align="center" class="texto2">
															<select size="1" name="codAssunto" class="box">
															<option selected></option>
															<% While Not TblAssunto.EOF %>
															<option value="<%=TblAssunto("codAssunto")%>"><%=TblAssunto("codAssunto")%></option>
															<%
															TblAssunto.MoveNext
															Wend
															%>
															</select></td>
												</tr>
												</table>
											</td>
										</tr>
				<tr>
					<td height="5"></td>
				</tr>
				<tr>
					<td>
												<p align="right">
												<input type="submit" value="» | Buscar" name="btoBuscar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
				</tr>
				</form>
				<tr>
					<td height="20">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table3">
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B" size="1">
													#</font></td>
													<td bgcolor="#F2F7F7" height="25" width="14%" class="texto2" align="center">
													<font size="1" color="#47858B">
													<b>Status</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="40%" class="texto2" align="center">
													<b>
													<font size="1" color="#47858B">
													Vinculação Legal</font></b></td>
													<td bgcolor="#F2F7F7" height="25" width="22%" align="center" class="texto2">
															<font size="1" color="#47858B">
															<b>Parâmetros</b></font></td>
													<td bgcolor="#F2F7F7" height="25" width="18%" align="center" class="texto2">
															<font size="1" color="#47858B">
															<b>#</b></font></td>
												</tr>
												<% While Not TblQuestoes.EOF %>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="6%" class="texto2" align="center">
															<%=TblQuestoes("codQuestao")%></td>
													<td bgcolor="#FFFFFF" height="30" width="14%" class="texto2" align="center">
															<%=TblQuestoes("status")%></td>
													<td bgcolor="#FFFFFF" height="30" width="40%" class="texto2" align="center">
															<table border="0" cellpadding="0" cellspacing="1" width="250" id="table4" bgcolor="#D9E8E8">
																<tr>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="26">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("diploma")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("numero")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("capitulo")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("secao")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("artigo")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("paragrafo")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("inciso")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("alinea")%></span></td>
																	<td bgcolor="#FFFFFF" class="texto2" align="center" height="21" width="28">
																	<span style="font-size: 6pt">
																	<%=TblQuestoes("item")%></span></td>
																</tr>
															</table>
													</td>
													<td bgcolor="#FFFFFF" height="30" width="22%" align="center" class="texto2">
															<div align="center">
																<table border="0" cellpadding="0" cellspacing="1" width="80%" id="table5" bgcolor="#D9E8E8">
																	<tr>
																		<td bgcolor="#FFFFFF" class="texto2" align="center" height="21">&nbsp;</td>
																		<td bgcolor="#FFFFFF" class="texto2" align="center" height="21">&nbsp;</td>
																		<td bgcolor="#FFFFFF" class="texto2" align="center" height="21">&nbsp;</td>
																		<td bgcolor="#FFFFFF" class="texto2" align="center" height="21">&nbsp;</td>
																	</tr>
																</table>
															</div>
													</td>
													<td bgcolor="#FFFFFF" height="30" width="18%" align="center" class="texto2">
															<select size="1" name="funcoes" class="box">
															<option selected value="#">--- Funções ---
															</option>
															<option value="#">Atualizar
															</option>
															<option value="#">Bloquear
															</option>
															<option value="#">Estatísticas
															</option>
															</select></td>
												</tr>
												<%
												TblQuestoes.MoveNext
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