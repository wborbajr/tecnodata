<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->

<%

     Dim objConn, objRS, strQ, strConn
     Dim TblQuestoes, TblConfigProva, TblRespProva, TblRespostas
     Dim codCandidato
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ObjConn.CursorLocation = 3
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     set TblDetrans     = ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '1'")
     set TblCandidatos  = ObjConn.Execute ("SELECT * FROM candidatos WHERE renach = '"& Session("renach") &"'")
     
     set TblQuestoes    = ObjConn.Execute ("SELECT questoes.codQuestao AS codQuestao, "&_
					      " questoes.Pergunta AS pergunta, "&_
					      " questoes.Resp1 AS Resp1, "&_
					      " questoes.Resp2 AS Resp2, "&_
					      " questoes.Resp3 AS Resp3, "&_
					      " questoes.Resp4 AS Resp4, "&_
					      " questoes.Resp5 AS Resp5, "&_
					      " questoes.img1 AS img1, "&_
					      " questoes.img2 AS img2, "&_
					      " questoes.correta AS questao_correta, "&_
					      " provas_geradas.resposta AS resposta, "&_
					      " provas_geradas.codCandidato AS condCandidato, "&_
					      " provas_geradas.codProva AS codProva, "&_
					      " provas_geradas.codPG AS codPG, "&_
					      " provas_geradas.codCandidato AS codCandidato "&_
					      " FROM questoes "&_
					      " INNER JOIN provas_geradas ON questoes.codQuestao = provas_geradas.codQuestao "&_
					      " INNER JOIN configprova ON configprova.codProva = provas_geradas.codProva "&_
					      " WHERE provas_geradas.codCliente = '1' AND "&_
					      " provas_geradas.codCandidato = 28")
    
    '(SELECT codCandidato FROM candidatos WHERE renach = "& Session("renach") &")
    
     set TblConfigProva = ObjConn.Execute ("SELECT * FROM configprova WHERE codCliente = '1' AND codProva = '"& TblQuestoes("codProva") &"'")
     set TblProva       = ObjConn.Execute ("UPDATE provas_geradas SET resposta = '"& Request("resposta") &"' WHERE codPG = '"& Request.Form("codPG") &"'")
     
     set TblRespProva = ObjConn.Execute ("SELECT * FROM provas_geradas WHERE codCandidato = '"& TblQuestoes("codCandidato") &"' AND codProva = '"& TblQuestoes("codProva") &"'")
     set TblRespostas = ObjConn.Execute ("SELECT * FROM provas_geradas WHERE codCandidato = '"& TblQuestoes("codCandidato") &"' AND codProva = '"& TblQuestoes("codProva") &"' AND codPG = '"& Request.Form("codPG") &"'")
     
     Session("RG") = TblCandidatos("RG")
     Session("codCandidato") = TblQuestoes("codCandidato")
     
     
  'Início do contador de acertos da prova
  '---------------------------------------------------
     Dim taxa_aprovacao, media_aprovacao
     
     taxa_aprovacao = TblDetrans("taxa_aprovacao") / 100
     Session("media_aprovacao") = TblDetrans("questoes") * taxa_aprovacao
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Ambiente de avaliação ]</title>
<link href="include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="include/scripts.js"></SCRIPT>
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

<body bgcolor="#B1CCE4" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1">
		<tr>
			<td colspan="3" height="80">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table22" height="80">
					<tr>
						<td width="20%">
						<div align="center">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table23">
								<tr>
									<td width="77">
									<p style="margin-left: 10px">
									<img border="0" src="http://www.tecnodatacfc.com.br/img/logotipo.gif"></td>
									<td>
									<img border="0" src="http://www.tecnodatacfc.com.br/img/logo_nome.gif" width="90" height="10"></td>
									</tr>
							</table>
						</div>
						</td>
						<td width="79%">
						<div align="right">
							<table border="0" cellpadding="0" cellspacing="1" width="90%" id="table24" bgcolor="#98BCDC">
								<tr>
									<td bgcolor="#B1CCE4" width="22%" height="15" class="texto2">
									<p style="margin-left: 5px">
									<font color="#3672AC"><b>Nome do candidato</b></font></td>
									<td bgcolor="#B1CCE4" width="21%" height="15" class="texto2">
									<p style="margin-left: 5px">
									<font color="#3672AC"><b>Renach</b></font></td>
									<td bgcolor="#B1CCE4" width="22%" height="15" class="texto2">
									<p style="margin-left: 5px">
									<font color="#3672AC"><b>CPF</b></font></td>
									<td bgcolor="#B1CCE4" width="21%" height="15" class="texto2">
									<p style="margin-left: 5px">
									<font color="#3672AC"><b>Status</b></font></td>
									<td bgcolor="#B1CCE4" height="15" class="texto2" width="14%">
									<p style="margin-left: 5px"><b>
									<font color="#3672AC">Data da prova</font></b></td>
								</tr>
								<tr>
									<td bgcolor="#B1CCE4" width="22%" class="texto2" rowspan="3">
									<p align="center"><font size="2"><%=TblCandidatos("nome")%></font></td>
									<td bgcolor="#B1CCE4" width="21%" class="texto2" rowspan="3">
									<p align="center"><font size="2"><%=TblCandidatos("renach")%></font></td>
									<td bgcolor="#B1CCE4" width="22%" class="texto2" rowspan="3">
									<p align="center"><font size="2"><%=TblCandidatos("cpf")%></font></td>
									<td bgcolor="#B1CCE4" width="21%" class="texto2" rowspan="3">
									<p align="center"><font size="2">
									<%
									if TblCandidatos("status") = "Prova gerada" then
									   Response.Write "Em avaliação"
									else
									   Response.Write "Prova encerrada"
									end if
									%></font></td>
									<td bgcolor="#B1CCE4" height="15" class="texto2" width="14%">
									<p align="center"><font size="1"><%=TblCandidatos("diaProva")%>/<%=TblCandidatos("mesProva")%>/<%=TblCandidatos("anoProva")%></font></td>
								</tr>
								<tr>
									<td bgcolor="#B1CCE4" height="15" class="texto2" width="14%">
									<p style="margin-left: 5px"><b>
									<font color="#3672AC">Hora da prova</font></b></td>
								</tr>
								<tr>
									<td bgcolor="#B1CCE4" height="15" class="texto2" width="14%">
									<p align="center"><%=TblCandidatos("horaProva")%></td>
								</tr>
							</table>
						</div>
						</td>
						<td width="1%">
						&nbsp;</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="5" bgcolor="#3672AC"></td>
		</tr>
		<tr>
			<td width="20%" bgcolor="#F0F0F0" valign="top">

		<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table20">
			<tr>
											<td class="texto1" bgcolor="#E1E1E1" height="60">
											<p align="left" style="margin-left: 10px">
											<font face="Arial" style="font-weight: 700" color="#C0C0C0" size="5">
											00:59:59</font></td>
										</tr>
			<tr>
											<td class="texto1">
											<div align="center">
												<table border="0" cellpadding="0" cellspacing="5" width="100%" id="table21">
													<tr>
											<td class="texto1">
											<p style="margin-left: 10px; margin-top: 5px; margin-bottom: 10px">
											<font color="#3672AC"><b>Instruções</b></font></td>
													</tr>
													<tr>
											<td class="texto2">
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>1.)</b> Leia atentamente a 
											questão.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>2.)</b> Clique com o mouse sobre 
											a alternativa que considera correta 
											ou digite a letra correspondente no 
											espaço indicado.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>3.)</b> É possível pular uma 
											questão e voltar para respondê-la 
											depois, clicando nas setas ou no 
											número corresponder a questão.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>4.)</b> O gabarito mostra 
											automaticamente as questão que já 
											foram respondidas.</td>
													</tr>
													<tr>
														<td>&nbsp;</td>
													</tr>
												</table>
											</div>
											</td>
										</tr>
			<tr>
											<td class="texto1">
											&nbsp;</td>
										</tr>
			</table>
		
			</td>
			<td bgcolor="#3672AC" width="5" valign="top">
			<img border="0" src="img/linha_azul.gif" width="5" height="1"></td>
			<td width="80%" bgcolor="#FFFFFF" valign="top">
			<div align="center">
													<% if TblQuestoes.EOF = true then %>
																<b>
													<font size="2" face="verdana, tahoma, arial" color="#CC0000">
																- Essa prova não existe -</font></b><font size="2">
																<%
																if Not TblQuestoes.EOF then TblQuestoes.MoveFirst
																End if
																
																%>
																<%
																If IsEmpty(Request.QueryString("Pergunta")) Then
																   CurrentPage = 1
																Else
																   CurrentPage = Cint(Request.QueryString("Pergunta"))
																End If
																TblQuestoes.PageSize = 1
																TblQuestoes.AbsolutePage = CurrentPage
																Do Until TblQuestoes.AbsolutePage <> CurrentPage or TblQuestoes.EOF
																%>
													<table border="0" cellpadding="0" cellspacing="10" width="100%" id="table1">
														<form method="post" name="prova" action="<% if Request.QueryString("Pergunta") = TblConfigProva("questoes") then  Response.Write ""&Request.ServerVariables("SCRIPT_NAME")&"?Pergunta="& Request.QueryString("Pergunta") &"&RG="& Request("rg") &""  else   Response.Write ""&Request.ServerVariables("SCRIPT_NAME")&"?Pergunta="& Request.QueryString("Pergunta")+1 &"&RG="& Request("rg") &""  end if %>">
														</form>
														<tr>
															<td valign="top">
															<div align="center">
																<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table2">
																	<tr>
																		<td colspan="2">
																		<div align="center">
																			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table3">
																				<tr><font size="2">
																					<td class="texto2" colspan="3" height="25">
																					<p style="margin-left: 2px"><b><font size="1">Pergunta: <%=Request.QueryString("Pergunta")%></font></b></td>
																				</tr>
																				<tr><font size="2">
																					<td class="texto2" height="5" colspan="3" bgcolor="#CFE0EF"></td>
																				</tr>
																				<tr><font size="2">
																					<td class="texto2" colspan="3" height="1"></td>
																				</tr>
																				<tr><font size="2">
																					<td class="texto2" width="168" bgcolor="#8BC6E2"></td>
																					<td class="texto2" width="65%" bgcolor="#8BC6E2"></td>
																					<td class="texto2" width="35%"></td>
																				</tr>
																			</table>
																		</div>
																		</td>
																	</tr>
																	<tr>
																		<td height="30" colspan="2">
																		<font face="Arial">
						<%=TblQuestoes("pergunta")%> 
						<font face="Arial" size="2"><input type="hidden" name="codQuestaoResp" size="5" value="<%=TblQuestoes("codQuestao")%>">
																		</font> 
						<font face="Arial" size="2"><input type="hidden" name="Pergunta" size="5" value="<%=Request.QueryString("Pergunta")%>">
																		<input type="hidden" name="codProva" size="5" value="<%=TblQuestoes("codProva")%>"> </font> 
						<font face="Arial" size="2">
																		<input type="hidden" name="codPG" size="5" value="<%=TblQuestoes("codPG")%>"></font>
						<font face="Arial" size="2">
																		<input type="hidden" name="questao_correta" size="5" value="<%=TblQuestoes("questao_correta")%>"></font></font></td>
																	</tr>
																	<tr>
																		<td height="30" colspan="2"></td>
																	</tr>
																	<tr>
																		<td class="texto2" width="82%" valign="top">
																		<table border="0" width="100%" id="table49" cellspacing="0" cellpadding="0">
																			<tr>
																				<td width="44"><font size="2">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#EBF1FA" id="table51">
							    <%
								Dim i
								for i = 65 to 69
								%>
																			<tr id="Questao0" onMouseOver="this.style.background='#F0F0F0';" onmouseout="this.style.backgroundColor='';">
																				<td height="40" width="40" align="center" class="texto2" bgcolor="#CFE0EF"><font color="#3672AC">
																				<b>
																				<%=chr(i)%></b></font></td>
																				
																			</tr>
																			<% next %>
																		</table>
													</font>
																				</td>
																				<td><font size="2">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#EBF1FA" id="table50">
							    <%
								Dim alternativa
								for alternativa = 1 to TblConfigProva("alternativas")
								%>
																			<tr id="Questao" onMouseOver="this.style.background='#F0F0F0';" onmouseout="this.style.backgroundColor='';">
																				<label for="resposta<%=alternativa%>"><td style="Cursor: hand" onMouseOver="this.style.background='#F0F0F0'" onMouseOut="this.style.background='#FFFFFF'" height="40" class="texto1" bgcolor="#FFFFFF">
																				<p style="margin: 5px 10px"><%=TblQuestoes("Resp"& alternativa &"")%></td></label>

																			    <td style="Cursor: hand" onMouseOver="this.style.background='#F0F0F0'" onMouseOut="this.style.background='#FFFFFF'" height="40" class="texto1" bgcolor="#FFFFFF" width="47">
																				<p align="center"><font size="2">
																				<input type="radio" value="<%=alternativa%>" name="resposta" id="resposta<%=alternativa%>" accesskey="<%=alternativa%>"></font></td>
																				<% next %>
																			</tr>
																		</table>
													</font>
																				</td>
																			</tr>
																		</table>
																		</td>
																		<td class="texto2" width="18%" valign="top">
																		<div align="center">
																			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table10">
																				<tr>
																					<td height="100">
																					<p align="center"><img border="0" src="placas/<%=TblQuestoes("img1")%>" width="80" height="80"></td>
																				</tr>
																				<tr>
																					<td height="100">
																					<p align="center"><img border="0" src="placas/<%=TblQuestoes("img2")%>" width="80" height="80"></td>
																				</tr>
																			</table>
																		</div>
																		</td>
																	</tr>
																	<tr>
																		<td colspan="2" height="40">&nbsp;</td>
																	</tr>
																	<tr>
																		<td colspan="2">
																		<div align="center">
																			<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#B1CCE4" id="opcoesdeResposta" height="60">
																				<tr>
																					<td bgcolor="#EBF1FA"><font size="2">
																					<div align="center">
																						<table border="0" cellpadding="0" cellspacing="0" width="100%" height="30" id="table25">
																							<tr>
																								<td width="50%">
																								<div align="center">
																									<table border="1" cellpadding="0" cellspacing="0" width="90" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class="texto2" bgcolor="#E0DFE3" id="table26">
																										<tr>
															<%
															if Request.QueryString("Pergunta") = "1" then
															   Response.Write "<a href='#'>"
															else
															   Response.Write "<a href='"&Request.ServerVariables("SCRIPT_NAME")&"?Pergunta="& Request.QueryString("Pergunta")-1 &"&RG="& Request("rg") &"'>"
															end if
															%>
																											<td style="Cursor: hand" class="texto2" height="30">
																											<p align="center"><b>« | Voltar</b></td></a>
																										</tr>
																									</table></div></td>
																								<td width="50%"><font size="2">
																								<div align="center">
																									<table border="1" cellpadding="0" cellspacing="0" width="100" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class="texto2" bgcolor="#E0DFE3" id="table27">
																										<tr>
																		<%
																		if Request.QueryString("Pergunta") = TblConfigProva("questoes") then
																		   Response.Write "<a href='#'>"
																		else
																		   Response.Write "<a href='"&Request.ServerVariables("SCRIPT_NAME")&"?Pergunta="& Request.QueryString("Pergunta")+1 &"&RG="& Request("rg") &"'>"
																		end if
																		%>
																											<td style="Cursor: hand" class="texto2" height="30">
																											<p align="center"><b>» | Avançar</b></td></a>
																										</tr>
																									</table></div></font></td>
																							</tr>
																						</table></div></font></td>
																					<td bgcolor="#EBF1FA" width="555"><font size="2">
																					<div align="center">
																						<table border="0" cellpadding="0" cellspacing="0" width="100%" height="30" id="table31">
																							<tr>
																								<td width="50%">
																								&nbsp;</td>
																								<td width="50%"><font size="2">
																								<div align="center">
																									<table border="1" cellpadding="0" cellspacing="0" width="90%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class="texto2" bgcolor="#E0DFE3" id="table48">
																										<tr><a href="javascript:document.prova.submit()">
																											<td style="Cursor: hand" class="texto2" height="30">
																											<p align="center"><b>» | Responder essa questão</b></td></a>
																										</tr>
																									</table></div></font></td>
																									</form>
																							</tr>
																						</table></div></font></td>
																					<td bgcolor="#F0F0E6" width="175"><font size="2">
																					<div align="center">
																						<table border="1" cellpadding="0" cellspacing="0" width="80%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class="texto2" bgcolor="#E0DFE3" id="table17">
																							<tr>
																								<a href="confirmacao2.asp" onClick="return confirm('Deseja concluir a prova agora?')"><td style="Cursor: hand" class="texto2" height="30">
																								<p align="center"><b>» | Encerrar a Prova</b></td></a>
																							</tr>
																						</table></div></font></td>
																				</tr>
																			</table>
																		</div>
																		</td>
																	</tr>
																</table></div>
															</td>
														</tr>
														<tr>
															<td valign="top" height="10">
															</td>
														</tr>
													</table>
													<%
													TblQuestoes.Movenext
													Loop
													%></div>
													</font>
			</td>
		</tr>
		<tr>
			<td colspan="3" bgcolor="#3672AC">

													</td>
			<td valign="top" height="5" bgcolor="#3672AC"></td>
		</tr>
		<tr>
			<td colspan="3" height="5" bgcolor="#FFFFFF">

													</td>
			<td valign="top" height="5" bgcolor="#FFFFFF"></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" colspan="3" height="50">

													<div align="center">
													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table43">
									<tr>
										<td>
								
								
								<% While Not TblRespProva.EOF %>
							<td>
							<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table44">
								<tr>
									<td height="20">
									<div align="center">
										<table border="0" cellpadding="0" cellspacing="1" width="20" height="20" id="table45" bgcolor="#3672AC">
											<tr>
												<td style="Cursor: hand" onMouseOver="this.style.background='#F0F0F0'" onMouseOut="this.style.background='#FFFFFF'" bgcolor="#FFFFFF" class="texto2">
												<p align="center"><%=TblRespProva("resposta")%>
												</td>
											</tr>
										</table></div></td>
								</tr>
							</table></td>		    
							<%
							TblRespProva.MoveNext
							Wend
							%>
			</td>
		</tr>
									<tr>
										<td>
								
							<%
							For X = 1 to TblConfigProva("questoes")
							%>	
							<td>
							<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table46">
								<tr>
									<td height="20">
									<div align="center">
										<table border="0" cellpadding="0" cellspacing="0" width="20" height="20" id="table47">
											<tr><a href="<%=Request.ServerVariables("SCRIPT_NAME")%>?Pergunta=<%=X%>&renach=<%=Session("renach")%>">
												<td style="Cursor: hand" onMouseOver="this.style.background='#F0F0F0'" onMouseOut="this.style.background='#FFFFFF'" bgcolor="#FFFFFF" class="texto2">
												<p align="center">
															<b><%=X%></b></td>
												</a>
											</tr>
										</table></div></td>
								</tr>
							</table>
							</td>
							<% next %>
		</tr>
		</table>
	</div>
		</tr>
	</table>
</div>
</body>

</html>