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

<!--#include file="../../include/checalogin.asp"-->
<!--#include file="../../include/connectionmysql.asp"-->
<!--#include file="../../include/adovbs.inc"-->

<%

     Dim objConn, objRS, strQ
     Dim TblDisciplinas, TblQuestoes, TblAssunto, TblListaAssunto, TblListaNatureza, TblNatureza, codNatureza, codAssunto
     Dim TblDificuldade
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Editar questão ("& Request("codquestao") &")"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas")
     set TblDificuldade = ObjConn.Execute ("SELECT * FROM dificuldade")
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE codQuestao = '"& Request("codquestao") &"'")
     codAssunto = TblQuestoes("codAssunto")
     codNatureza = TblQuestoes("codNatureza")
     set TblAssunto = ObjConn.Execute ("SELECT * FROM assuntos")
     set TblListaAssunto = ObjConn.Execute ("SELECT * FROM assuntos ORDER by assunto")
     set TblNatureza = ObjConn.Execute ("SELECT * FROM natureza")
     set TblListaNatureza = ObjConn.Execute ("SELECT * FROM natureza ORDER by natureza")
     
     Session("codigoquestao") = Request("codquestao")

%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Editar questão ]</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../../include/scripts.js"></SCRIPT>
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

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" width="709" cellpadding="0" cellspacing="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
							<td>
							<!--#include file="../../include/menu_funcoes.asp"-->
							</td>
						</tr>
						<tr>
											<td>
											<% While Not TblQuestoes.EOF %>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table3">
											<form method="post" name="questoes0" action="atualiza_questao.asp">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="18%">
													<p style="margin-left: 10px" align="left">
													<font size="1" color="#808080">
													<b>Cód. da questão</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="82%">
													<p style="margin-left: 10px">
													<font size="1" color="#808080">
													<b>Parâmetros</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="18%" class="texto2" align="center">
													<p align="left" style="margin-left: 10px">
													<font color="#47858B"><b>
													<%=TblQuestoes("codQuestao")%></b></font></td>
													<td bgcolor="#FFFFFF" height="25" width="82%" class="texto2">
															<table border="0" cellpadding="0" cellspacing="0" width="90%" id="table4">
																<tr>
																	<td width="5%" align="center" height="20">
																	<input type="radio" value="Disponível" name="status" <% if TblQuestoes("status") = "Livre" Then  Response.Write"checked"%>></td>
																	<td height="20" class="texto2" width="20%">
																	Disponível</td>
																	<td height="20" class="texto2" width="5%">
																	<p align="center">
																	<input type="radio" value="Bloqueada" name="status" <% if TblQuestoes("status") = "Bloqueado" Then  Response.Write"checked"%>></td>
																	<td height="20" class="texto2" width="20%">
																	Bloqueada</td>
																	<td height="20" class="texto2" width="5%">
																	<p align="center">
																	<input type="radio" value="Em análise" name="status" <% if TblQuestoes("status") = "Em análise" Then  Response.Write"checked"%>></td>
																	<td height="20" class="texto2" width="20%">
																	Em análise</td>
																	<td height="20" class="texto2" width="5%">
																	<p align="center">
																	<input type="radio" value="Manutenção" name="status" <% if TblQuestoes("status") = "Manutenção" Then  Response.Write"checked"%>></td>
																	<td height="20" class="texto2" width="20%">
																	Manutenção</td>
																</tr>
															</table></td>
												</tr>
												</table>
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
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="72%" colspan="9">
													<p style="margin-left: 10px" align="left">
													<b>
													<font size="1" color="#808080">
													Vinculação Legal</font></b></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="28%" colspan="4">
													<p style="margin-left: 10px">
													<font size="1" color="#808080">
													<b>Parâmetros</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Dipl.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Nº.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Cap.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="7%" class="texto2" align="center">
													<font color="#47858B">Sç.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
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
													<td bgcolor="#F2F7F7" height="25" width="6%" align="center" class="texto2">
															<font color="#47858B">
															Dis.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="5%" align="center" class="texto2">
															<font color="#47858B">
															Dif.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="5%" align="center" class="texto2">
															<font color="#47858B">
															Nat.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" align="center" class="texto2">
															<font color="#47858B">
															Ass.</font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="diploma" size="6" class="box" value="<%=TblQuestoes("diploma")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="numero" size="6" class="box" value="<%=TblQuestoes("numero")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="capitulo" size="6" class="box" value="<%=TblQuestoes("capitulo")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="secao" size="6" class="box" value="<%=TblQuestoes("secao")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="artigo" size="6" class="box" value="<%=TblQuestoes("artigo")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="paragrafo" size="6" class="box" value="<%=TblQuestoes("paragrafo")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="inciso" size="6" class="box" value="<%=TblQuestoes("inciso")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="alinea" size="6" class="box" value="<%=TblQuestoes("alinea")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="7%" class="texto2" align="center">
															<input type="text" name="item" size="6" class="box" value="<%=TblQuestoes("item")%>"></td>
													<td bgcolor="#FFFFFF" height="25" width="6%" align="center" class="texto2">
															<select size="1" name="codDisciplina" class="box">
															<% While Not TblDisciplinas.EOF %>
															<option value="<%=TblDisciplinas("codDisciplina")%>" <% if TblQuestoes("codDisciplina") = ""& TblDisciplinas("codDisciplina") &"" Then  Response.Write"selected"%>><%=TblDisciplinas("codDisciplina")%></option>
															<%
															TblDisciplinas.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="5%" align="center" class="texto2">
															<select size="1" name="codDificuldade" class="box">
															<% While Not TblDificuldade.EOF %>
															<option value="<%=TblDificuldade("codDificuldade")%>" <% if TblQuestoes("codDificuldade") = ""& TblDificuldade("codDificuldade") &"" Then  Response.Write"selected"%>><%=TblDificuldade("codDificuldade")%></option>
															<%
															TblDificuldade.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="5%" align="center" class="texto2">
															<select size="1" name="codNatureza" class="box">
															<% While Not TblNatureza.EOF %>
															<option value="<%=TblNatureza("codNatureza")%>" <% if TblQuestoes("codNatureza") = ""& TblNatureza("codNatureza") &"" Then  Response.Write"selected"%>><%=TblNatureza("codNatureza")%></option>
															<%
															TblNatureza.MoveNext
															Wend
															%>
															</select></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" align="center" class="texto2">
															<select size="1" name="codAssunto" class="box">
															<% While Not TblAssunto.EOF %>
															<option value="<%=TblAssunto("codAssunto")%>" <% if TblQuestoes("codAssunto") = ""& TblAssunto("codAssunto") &"" Then  Response.Write"selected"%>><%=TblAssunto("codAssunto")%></option>
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
									<td valign="top" width="740" height="10">
									</td>
								</tr>
								<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Pergunta:</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" colspan="2">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Respostas:</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="200" width="44%" class="texto2" rowspan="5" valign="top">
													<p style="margin-left: 8px; margin-top:10px">
													<textarea rows="11" name="pergunta" cols="39" class="box" style="font-size: 10pt; font-family: Verdana; color: #3672AC; font-weight: bold"><%=TblQuestoes("pergunta")%></textarea></td>
													<td bgcolor="#F2F7F7" height="40" width="10%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Resp1:</font></td>
													<td bgcolor="#FFFFFF" height="40" width="45%">
													<p style="margin-left: 10px">
															<textarea rows="2" name="resp1" cols="55" class="box"><%=TblQuestoes("resp1")%></textarea></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="40" width="10%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Resp2:</font></td>
													<td bgcolor="#FFFFFF" height="40" width="45%">
													<p style="margin-left: 10px">
															<textarea rows="2" name="resp2" cols="55" class="box"><%=TblQuestoes("resp2")%></textarea></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="40" width="10%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Resp3:</font></td>
													<td bgcolor="#FFFFFF" height="40" width="45%">
													<p style="margin-left: 10px">
															<textarea rows="2" name="resp3" cols="55" class="box"><%=TblQuestoes("resp3")%></textarea></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="40" width="10%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Resp4:</font></td>
													<td bgcolor="#FFFFFF" height="40" width="45%">
													<p style="margin-left: 10px">
															<textarea rows="2" name="resp4" cols="55" class="box"><%=TblQuestoes("resp4")%></textarea></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="40" width="10%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Resp5:</font></td>
													<td bgcolor="#FFFFFF" height="40" width="45%">
													<p style="margin-left: 10px">
															<textarea rows="2" name="resp5" cols="55" class="box"><%=TblQuestoes("resp5")%></textarea></td>
												</tr>
												</table>
											</td>
										</tr>
								<tr>
									<td valign="top" width="740" height="10">
									</td>
								</tr>
								<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" colspan="3">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Configurações da questão</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="20" width="17%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Dispensável:</font></td>
													<td bgcolor="#F2F7F7" height="20" width="17%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Correta:</font></td>
													<td bgcolor="#F2F7F7" height="20" width="66%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Perfil:</font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="50" width="17%" class="texto2">
													<p style="margin-left: 10px">
														<select size="1" name="dispensavel" class="box" style="width:80">
														<option <% if TblQuestoes("dispensavel") = "resp1" Then  Response.Write"selected"%> value="resp1">Resp1</option>
														<option <% if TblQuestoes("dispensavel") = "resp2" Then  Response.Write"selected"%> value="resp2">Resp2</option>
														<option <% if TblQuestoes("dispensavel") = "resp3" Then  Response.Write"selected"%> value="resp3">Resp3</option>
														<option <% if TblQuestoes("dispensavel") = "resp4" Then  Response.Write"selected"%> value="resp4">Resp4</option>
														<option <% if TblQuestoes("dispensavel") = "resp5" Then  Response.Write"selected"%> value="resp5">Resp5</option>
														</select></td>
													<td bgcolor="#FFFFFF" height="50" width="17%" class="texto2">
													<p style="margin-left: 10px">
															<select size="1" name="correta" class="box">
															<option value="resp1" <% if TblQuestoes("correta") = "resp1" Then  Response.Write"selected"%>>Resp 1
															</option>
															<option value="resp2" <% if TblQuestoes("correta") = "resp2" Then  Response.Write"selected"%>>Resp 2
															</option>
															<option value="resp3" <% if TblQuestoes("correta") = "resp3" Then  Response.Write"selected"%>>Resp 3
															</option>
															<option value="resp4" <% if TblQuestoes("correta") = "resp4" Then  Response.Write"selected"%>>Resp 4
															</option>
															<option value="resp5" <% if TblQuestoes("correta") = "resp5" Then  Response.Write"selected"%>>Resp 5
															</option>
															</select></td>
													<td bgcolor="#FFFFFF" height="50" width="66%" class="texto2">
													<div align="center">
														<table border="0" cellpadding="0" cellspacing="0" width="410">
															<tr>
																<td height="20" class="texto2" align="center" width="25%">
																<font color="#808080">
																1ª Habilitação</font></td>
																<td height="20" class="texto2" align="center" width="25%">
																<font color="#808080">
																Instrutor</font></td>
																<td height="20" class="texto2" align="center" width="25%">
																<font color="#808080">
																Reciclagem</font></td>
																<td height="20" class="texto2" align="center" width="25%">
																<font color="#808080">
																Renovação</font></td>
															</tr>
															<tr>
																<td height="30" class="texto2" align="center" width="25%">
															<select size="1" name="primeirahabilitacao" class="box">
															<option value="Sim" <% if TblQuestoes("primeirahabilitacao") = "Sim" Then  Response.Write"selected"%>>Sim
															</option>
															<option value="Não" <% if TblQuestoes("primeirahabilitacao") = "Não" Then  Response.Write"selected"%>>Não
															</option>
															</select></td>
																<td height="30" class="texto2" align="center" width="25%">
															<select size="1" name="instrutor" class="box">
															<option value="Sim" <% if TblQuestoes("instrutor") = "Sim" Then  Response.Write"selected"%>>Sim
															</option>
															<option value="Não" <% if TblQuestoes("instrutor") = "Não" Then  Response.Write"selected"%>>Não
															</option>
															</select></td>
																<td height="30" class="texto2" align="center" width="25%">
															<select size="1" name="reciclagem" class="box">
															<option value="Sim" <% if TblQuestoes("reciclagem") = "Sim" Then  Response.Write"selected"%>>Sim
															</option>
															<option value="Não" <% if TblQuestoes("reciclagem") = "Não" Then  Response.Write"selected"%>>Não
															</option>
															</select></td>
																<td height="30" class="texto2" align="center" width="25%">
															<select size="1" name="renovacao" class="box">
															<option value="Sim" <% if TblQuestoes("renovacao") = "Sim" Then  Response.Write"selected"%>>Sim
															</option>
															<option value="Não" <% if TblQuestoes("renovacao") = "Não" Then  Response.Write"selected"%>>Não
															</option>
															</select></td>
															</tr>
														</table>
													</div>
													</td>
												</tr>
												</table>
											</td>
										</tr>
								<tr>
									<td valign="top" width="740" height="10">
									</td>
								</tr>
								<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Imagens da questão</b></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="22%">
													<p style="margin-left: 10px; margin-right:10px" align="right">
													<font size="1" color="#3672AC">
													<a href="#" onclick="OpenWindow('../../include/pop.asp?url=../bnq/funcoes/form_img.asp','IMG','342','290','no');">
													<font color="#47858B">
													<span style="text-decoration: none">
													Atualizar imagens 
													:</span></font></a></font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="100%" class="texto2" colspan="2">
													<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
													<img border="0" src="<%=TblQuestoes("img1")%>">&nbsp;&nbsp;&nbsp;&nbsp;
													<img border="0" src="<%=TblQuestoes("img2")%>"></td>
												</tr>
												</table>
											</td>
										</tr>
								<tr>
											<td height="10">
											<%
											TblQuestoes.MoveNext
											Wend
											%>
											</td>
										</tr>
								<tr>
									<td valign="top" width="740">
									<p align="right">
												<input type="submit" value="» | Atualizar" name="btoAtualizar" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
												<input type="reset" value="x | Cancelar" name="btoCancelar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
								</tr>
								</form>
								<tr>
									<td valign="top" width="100%" height="10">
									</td>
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
	</table>
</div>

</body>

</html>