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
     Dim TblAcessos, TblDetrans, TblCandidatos
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Clientes"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '"& Session("codCliente") &"' AND tipo = 'Detran'")
     set TblCandidatos = ObjConn.Execute ("SELECT * FROM candidatos WHERE codCandidato = '"& Request("codCandidato") &"'")
     set TblProvas = ObjConn.Execute ("SELECT * FROM configprova WHERE codCliente = '"& Session("codCliente") &"'")
     
     Session("codCandidato") = Request("codCandidato")
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
			<b>
			<font size="4" color="#A6C2E1">Candidatos</font></b></td>
			<td bgcolor="#DAE6F3" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<select size="1" name="funcoes" class="box">
			<option selected value="#">--- Acesso rápido ---</option>
			<option value="#">-------------------------</option>
			</select></td>
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
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table1">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="35%">
													<p style="margin-left: 10px" align="left">
													<b>
													<font size="1" color="#808080">
													Validação do candidato:
													</font><font size="1"><%=TblCandidatos("nome")%></font></b></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="18%">
													<font size="1" color="#808080">
													Data da prova: </font>
													<font size="1"><b><%=TblCandidatos("diaProva")%>/<%=TblCandidatos("mesProva")%>/<%=TblCandidatos("anoProva")%></b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="17%">
													<font size="1" color="#808080">
													Hora da prova: </font><b>
													<font size="1"><%=TblCandidatos("horaProva")%></font></b></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" width="70%" class="texto2" align="center" valign="top" colspan="3">
															<table border="0" cellpadding="0" cellspacing="10" width="100%" id="table2">
																<tr>
																	<td valign="top">
																	<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table3" bgcolor="#C0C0C0">
																		<tr>
																			<td bgcolor="#F2F7F7" height="25" class="texto2" colspan="2">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Dados 
																			cadastrais 
																			do 
																			candidato</font></td>
																		</tr>
																		<tr>
																		
																			<td bgcolor="#FFFFFF" class="texto2" height="25" colspan="2">
																			<div align="center">
																				<table border="0" cellpadding="0" cellspacing="5" width="100%" id="table4">
																					<tr>
																						<td valign="top">
																						<div align="center">
																							<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table5">
																								<tr>
																									<td height="30" class="texto2" width="107"><font face="Tahoma" style="font-size: 9pt">Nome:</font></td>
																									<td height="30" class="texto2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table6">
																											<tr>
																												<td bgcolor="#FFFFFF" class="texto2" height="22"><font size="1">
																												<p style="margin-left: 5px"><%=TblCandidatos("nome")%></font></td>
																											</tr>
																										</table>
																									</div>
																									</td>
																									<td height="30" class="texto2" width="336">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="0" width="60%" id="table14">
																											<tr>
																												<td width="77" class="texto2" height="22"><b><font size="1" color="#47858B">Confere:</font></b></td>
																												<td class="texto2" height="22">
																												<div align="center">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table15">
																														<tr>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Sim" name="nome_confere"></font></td>
																															<td class="texto2">Sim</td>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Não" name="nome_confere"></font></td>
																															<td class="texto2">Não</td>
																														</tr>
																													</table>
																												</div>
																												</td>
																											</tr>
																										</table>
																									</div>
																									</td>
																								</tr>
																								<tr>
																									<td height="30" class="texto2" width="107"><font face="Tahoma" style="font-size: 9pt">CPF:</font></td>
																									<td height="30" class="texto2"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table7">
																											<tr>
																												<td bgcolor="#FFFFFF" class="texto2" height="22">
																												<p style="margin-left: 5px"><font size="1"><%=TblCandidatos("cpf")%></font></td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																									<td height="30" class="texto2" width="336"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="0" width="60%" id="table18">
																											<tr>
																												<td width="77" class="texto2" height="22"><b><font size="1" color="#47858B">Confere:</font></b></td>
																												<td class="texto2" height="22">
																												<div align="center">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table19">
																														<tr>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Sim" name="cpf_confere"></font></td>
																															<td class="texto2">Sim</td>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Não" name="cpf_confere"></font></td>
																															<td class="texto2">Não</td>
																														</tr>
																													</table>
																												</div>
																												</td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																								</tr>
																								<tr>
																									<td height="30" class="texto2" width="107"><font face="Tahoma" style="font-size: 9pt">RG:</font></td>
																									<td height="30" class="texto2"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table8">
																											<tr>
																												<td bgcolor="#FFFFFF" class="texto2" height="22"><font size="1">
																												<p style="margin-left: 5px"><%=TblCandidatos("rg")%></font></td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																									<td height="30" class="texto2" width="336"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="0" width="60%" id="table22">
																											<tr>
																												<td width="77" class="texto2" height="22"><b><font size="1" color="#47858B">Confere:</font></b></td>
																												<td class="texto2" height="22">
																												<div align="center">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table23">
																														<tr>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Sim" name="rg_confere"></font></td>
																															<td class="texto2">Sim</td>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Não" name="rg_confere"></font></td>
																															<td class="texto2">Não</td>
																														</tr>
																													</table>
																												</div>
																												</td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																								</tr>
																								<tr>
																									<td height="30" class="texto2" width="107"><font face="Tahoma" style="font-size: 9pt">Renach:</font></td>
																									<td height="30" class="texto2"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table9">
																											<tr>
																												<td bgcolor="#FFFFFF" class="texto2" height="22"><font size="1">
																												<p style="margin-left: 5px"><%=TblCandidatos("renach")%></font></td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																									<td height="30" class="texto2" width="336"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="0" width="60%" id="table26">
																											<tr>
																												<td width="77" class="texto2" height="22"><b><font size="1" color="#47858B">Confere:</font></b></td>
																												<td class="texto2" height="22">
																												<div align="center">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table27">
																														<tr>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Sim" name="renach_confere"></font></td>
																															<td class="texto2">Sim</td>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Não" name="renach_confere"></font></td>
																															<td class="texto2">Não</td>
																														</tr>
																													</table>
																												</div>
																												</td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																								</tr>
																								<tr>
																									<td height="30" class="texto2" width="107"><font face="Tahoma" style="font-size: 9pt">E-mail:</font></td>
																									<td height="30" class="texto2"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table10">
																											<tr>
																												<td bgcolor="#FFFFFF" class="texto2" height="22"><font size="1">
																												<p style="margin-left: 5px"><%=TblCandidatos("email")%></font></td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																									<td height="30" class="texto2" width="336"><font size="2">
																									<div align="center">
																										<table border="0" cellpadding="0" cellspacing="0" width="60%" id="table30">
																											<tr>
																												<td width="77" class="texto2" height="22"><b><font size="1" color="#47858B">Confere:</font></b></td>
																												<td class="texto2" height="22">
																												<div align="center">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table31">
																														<tr>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Sim" name="email_confere"></font></td>
																															<td class="texto2">Sim</td>
																															<td class="texto2" width="5%"><font size="2">
																															<input type="radio" value="Não" name="email_confere"></font></td>
																															<td class="texto2">Não</td>
																														</tr>
																													</table>
																												</div>
																												</td>
																											</tr>
																										</table>
																									</div>
																			</font>
																									</td>
																								</tr>
																							</table>
																						</div>
																						</td>
																					</tr>
																				</table>
																			</div>
																			</td>
																			</font>
																			<font size="2">
																		</tr>
																		<tr>
																		
																			<td bgcolor="#F2F7F7" class="texto2" height="25" colspan="2">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Validação 
																			biométrica</font></td>
																		</tr>
																		<tr>
																		
																			<td bgcolor="#FFFFFF" class="texto2" height="25" colspan="2">
																			<div align="center">
																				<table border="0" cellpadding="0" cellspacing="5" width="100%" id="table49">
																					<tr>
																						<td width="30%" height="120">
																						<p align="center">&nbsp;</td>
																						<td width="30%" height="120">
																						<p align="center">&nbsp;</td>
																						<td valign="top" width="40%" height="120">&nbsp;</td>
																					</tr>
																				</table>
																			</div>
																			</td>
																			</tr>
																		<tr>
																		
																			<td bgcolor="#F2F7F7" class="texto2" height="25" width="13%">
																			<font size="1" color="#47858B">
																			<p style="margin-left: 5px">
																			Gerar 
																			prova:</td>
																		
																			<td bgcolor="#F2F7F7" class="texto2" height="25" width="86%">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			<select size="1" name="prova" class="box" onChange="MM_jumpMenu('parent',this,0)">
																			<option value="#">---</option>
																			<% While Not TblProvas.EOF %>
																			<option value="../main.asp?url=prova/gera_prova2.asp?codProva=<%=TblProvas("codProva")%>&codCliente=<%=Session("codCliente")%>&codcandidato=<%=Request("codCandidato")%>"><%=TblProvas("nomeProva")%></option>
																			<%
																			TblProvas.MoveNext
																			Wend
																			%>
																			</select></font></td>
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
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>