<!--
----------------------------------------------
| JEAN SARTOR                                |
| Curitiba - PR - Brasil                     |
| www.jeansartor.com.br                      |
| falecomigo@jeansartor.com.br               |
----------------------------------------------
-->

<%
 If Not Session ("Auth") = "Y" Then
   Response.Redirect "system/logar.asp"
 End if
%>

<!--#include file="system/connectionmysql.asp"-->
<!--#include file="system/adovbs.inc"-->

<%
 
     Dim objConn, objRS, strQ, strConn, TblUsuarios, TblStats, TblVisitas, TblTomorrow, TblDelVisitas
     Dim coduser, data_acesso, hora_acesso, pagina, ip
     Server.ScriptTimeOut = 400
     Set objConn =Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     ObjConn.CursorLocation = 3
     objConn.ConnectionString = strConn
     objConn.Open strConn
     set TblUsuarios = ObjConn.Execute("SELECT * FROM usuarios WHERE registro = '" & Session("coduser") & "'")
     data_acesso = date
     hora_acesso = time
     pagina = "SIAC - Home"
     ip = Request.ServerVariables("REMOTE_ADDR")
     set TblStats = ObjConn.Execute ("INSERT INTO estatisticas(coduser,data_acesso,hora_acesso,pagina,ip) VALUES ('" & Session("coduser") & "','" & data_acesso & "','" & hora_acesso & "','" & pagina & "','" & ip & "')")
     set TblVisitas = ObjConn.Execute("SELECT clientes.razao_social AS empresa, visitas.data AS datavisita, visitas.hora AS horavisita, clientes.registro AS registro, visitas.registro AS codvisita FROM clientes INNER JOIN visitas ON clientes.registro = visitas.codcliente WHERE visitas.data = '"& date &"'")
     set TblTomorrow = ObjConn.Execute("SELECT clientes.razao_social AS empresa, visitas.data AS datavisita, visitas.hora AS horavisita, clientes.registro AS registro, visitas.registro AS codvisita FROM clientes INNER JOIN visitas ON clientes.registro = visitas.codcliente WHERE visitas.data = '"& DateAdd("d",1,date) &"'")
     set TblDelVisitas = ObjConn.Execute("DELETE FROM visitas WHERE registro = '"& Request("codvisita") &"'")
     
%>

<html>

<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>BLUM Informática&nbsp; |&nbsp; SIAC - Sistema de Acompanhamento de 
Clientes</title>
<LINK REL="StyleSheet" HREF="system/estilo.css" TYPE="text/css">
</head>

<body topmargin="10" leftmargin="0" bgcolor="#000000" bottommargin="10">
<div align="center">
  <center>
  <table border="0" cellpadding="0" width="760" bgcolor="#FFFFFF" cellspacing="3">
    <tr>
      <td width="100%" bgcolor="#0059C1" height="100" class="texto2">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="table2" height="100">
			<tr>
				<td width="554">
				<p style="margin-left: 15px; margin-top:2px; margin-bottom:2px">
				<font color="#FFD700"><b><span style="font-size: 16pt">BLUM 
				Informática</span></b></font><p style="margin-left: 15px; margin-top:2px; margin-bottom:2px">
				<b><font size="1" color="#FFFFFF">SIAC - Sistema de 
				Acompanhamento de Clientes&nbsp; -&nbsp; v 1</font></b></td>
				<td width="200" class="menu" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table14">
								<tr>
												<td width="200" class="menu" height="20">
				<p align="right" style="margin-right: 5px; margin-top: 2px; margin-bottom: 2px">
				<font color="#FFFFFF"><b><a href="SYSTEM/LOGOUT.ASP">
				<font color="#FFFFFF"><span style="text-decoration: none">SAIR</span></font></a></b></font><b><font color="#FFFFFF"> 
				| </font>
				<font color="#FFD700">X</font></b></td>
								</tr>
								<tr>
												<td width="200" class="menu">&nbsp;</td>
								</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#8C8E7B" height="45" align="center">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1" height="45">
			<tr>
				<a href="clientes/"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#FFD700'" class="menu" width="139" bgcolor="#FFD700">
				<p align="left" style="margin-left: 15px">
				<font color="#000000" style="font-size: 13pt"><b>Clientes</b></font></td></a>
				<td bgcolor="#FFFFFF" width="1">
				<img border="0" src="IMG/linha_bra.gif" width="1" height="1"></td>
				<a href="servicos/"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#FFD700'" class="menu" width="139" bgcolor="#FFD700">
				<p align="left" style="margin-left: 15px"><font color="#000000">
				<span style="font-size: 13pt"><b>Serviços</b></span></font></td></a>
				<td bgcolor="#FFFFFF" width="1">
				<img border="0" src="IMG/linha_bra.gif" width="1" height="1"></td>
				<a href="agenda/"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#FFD700'" class="menu" width="140" bgcolor="#FFD700">
				<p align="left" style="margin-left: 15px"><font color="#000000">
				<span style="font-size: 13pt"><b>Agenda</b></span></font></td></a>
				<td bgcolor="#FFFFFF" width="1">
				<img border="0" src="IMG/linha_bra.gif" width="1" height="1"></td>
				<a href="pesquisa/"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#FFD700'" class="menu" width="139" bgcolor="#FFD700">
				<p align="left" style="margin-left: 15px"><font color="#000000">
				<span style="font-size: 13pt"><b>Pesquisa</b></span></font></td></a>
				<td bgcolor="#FFFFFF" width="1">
				<img border="0" src="IMG/linha_bra.gif" width="1" height="1"></td>
				<a href="mailling/"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#FFD700'" class="menu" width="139" bgcolor="#FFD700">
				<p align="left" style="margin-left: 15px"><font color="#000000">
				<span style="font-size: 13pt"><b>Mailling</b></span></font></td></a>
			</tr>
		</table>
        </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
        <table border="0" cellpadding="0" cellspacing="0" width="754" id="table3" height="263">
			<tr>
				<td width="350" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table4">
					<tr>
						<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table5">
							<tr>
								<td class="mnlt">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table17">
									<tr>
										<td class="mnlt">
										<p style="margin-left: 15px; margin-top:15px">
										<font face="Arial" style="font-size: 11pt" color="#000000">
										<b>• Procurar cliente</b></font></td>
									</tr>
									<tr>
										<td class="texto2" height="0">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table18">
											<tr>
												<td width="291" colspan="2" height="5">
												</td>
											</tr>
											<tr>
												<td width="24">&nbsp;</td>
												<td width="267" valign="top">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table19" height="37">
												<form method="post" name="busca" action="clientes/busca_cliente.asp?action=search::verify">
													<tr>
														<td class="texto2" width="87" height="20" align="left">
														<p style="margin-right: 5px">
														Procurar por:</td>
														<td class="texto2" width="180" height="20">
														<select size="1" name="filtro" onBlur="this.className='box1';" onFocus="this.className='box1on';" class="box1" style="width: 170">
														<option selected>--- Selecione um filtro ---
														</option>
														<option value="cidade">Cidade
														</option>
														<option value="registro">
														Código de registro
														</option>
														<option value="cnpj">CNPJ
														</option>
														<option value="email">
														E-mail</option>
														<option value="razao_social">Razão Social
														</option>
														</select></td>
													</tr>
													<tr>
														<td class="texto2" width="87" height="20" align="left">
														Status:</td>
														<td class="texto2" width="180" height="20">
												<select size="1" name="status" onBlur="this.className='box1';" onFocus="this.className='box1on';" class="box1" style="width: 170">
                            					<option>--- Selecione um status ---</option>
                            					<option value="Ativo">Ativo
												</option>
												<option value="Em prospecção">Em prospecção
												</option>
												<option value="Visitado">Visitado
												</option>
												<option value="Em negociação">Em negociação
												</option>
												<option value="Inativo">Inativo
												</option>
												</select></td>
													</tr>
													<tr>
														<td class="texto2" width="87" height="20" align="left">
														<p style="margin-right: 5px">
														Digite o valor:</td>
														<td class="texto2" width="180" height="20">
														<input type="text" name="valor" size="27" onBlur="this.className='box1';" onFocus="this.className='box1on';" class="box1" style="width: 168"></td>
													</tr>
													<tr>
														<td class="texto2" width="87" height="16">
														</td>
														<td class="texto2" width="180" height="16">
														<p style="margin-top: 2px">
														<a href="javascript:document.busca.submit()">
														<img border="0" id="img1" src="img/bt_procurar.jpg" height="20" width="80" alt="» | Procurar"></a>
														<a href="javascript:document.busca.reset()">
														<img border="0" id="img2" src="img/bt_cancelar.jpg" height="20" width="80" alt="» | Cancelar"></a></td>
													</tr>
													<tr>
														<td class="texto2" width="267" height="5" colspan="2">
														</td>
													</tr>
													</form>
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
						</td>
					</tr>
					<tr>
						<td background="IMG/linha_bg_h.gif">
						<img border="0" src="IMG/linha_bg_h.gif" width="4" height="1"></td>
					</tr>
					<tr>
						<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table11">
							<tr>
								<td class="mnlt" height="15">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table23">
									<tr>
										<td class="mnlt" height="15"></td>
									</tr>
									<tr>
										<td class="mnlt">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table24">
											<tr>
												<td width="50%" class="mnlt">
												<p style="margin-left: 15px">
												<font face="Arial" style="font-size: 11pt" color="#000000">
												<b>• Meus dados</b></font></td>
												<td width="50%" class="texto2">
												<p align="right" style="margin-right: 24px">
												&nbsp;</td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td class="texto2" height="0">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table25">
											<tr>
												<td width="24">&nbsp;</td>
												<td width="267" valign="top">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table26" height="37">
													<tr>
														<td class="texto2" width="267" height="5" align="left">
														</td>
													</tr>
													<tr>
														<td class="texto2" width="267" height="20" align="left">
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														Nome:</p>
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														<b>
														<font color="#000000"><%=TblUsuarios("nome")%></font></b></td>
													</tr>
													<tr>
														<td class="texto2" width="267" height="5" align="left">
														</td>
													</tr>
													<tr>
														<td class="texto2" width="267" height="20">
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														Cargo:</p>
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														<b>
														<font color="#000000">
												<%=TblUsuarios("cargo")%></font></b></td>
													</tr>
													<tr>
														<td width="267" height="5">
														</td>
													</tr>
													<tr>
														<td class="texto2" width="267" height="20">
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														E-mail:</p>
														<p style="margin-right: 5px; margin-top:2px; margin-bottom:2px">
														<b>
														<font color="#000000"><%=TblUsuarios("email")%></font></b></td>
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
								<td class="texto2" height="0">
								&nbsp;</td>
							</tr>
							</table>
						</td>
					</tr>
				</table>
				</td>
				<td background="IMG/linha_bg.gif" width="1" valign="top">
				<img border="0" src="IMG/linha_bg.gif" width="1" height="4"></td>
				<td width="476" valign="top" class="mnlt" bgcolor="#F0F0F0" height="253">
								<table border="0" width="100%" id="table17" cellspacing="0" cellpadding="0">
									<tr>
										<td>
								<p style="margin-left: 15px; margin-top:15px; margin-bottom:5px">
								<font face="Arial" style="font-size: 11pt"><b>&#8226 
								Compromissos para hoje</b></font></td>
									</tr>
									<tr>
										<td><div align="center">
												<table border="0" cellpadding="0" cellspacing="0" width="177" id="table24" height="20">
																<tr>
																				<td width="177" height="20" valign="top"><div align="center">
												<table border="0" cellpadding="0" cellspacing="1" width="420" id="table25" bgcolor="#C0C0C0">
												
																<tr>

																				<td class="texto2" width="56%" bgcolor="#F0F0EB" height="15">
																				<p style="margin-left: 5px; margin-top: 2px"><font color="#000000"><span style="font-weight: 700; font-size: 6pt">EMPRESA</span></font></td>
																				<td class="texto2" height="15" width="18%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top: 2px">
												<font color="#000000">
												<span style="font-weight: 700; font-size: 6pt">
												DATA</span></font></td>
																				<td class="texto2" height="15" width="13%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top: 2px">
												<font color="#000000">
												<span style="font-weight: 700; font-size: 6pt">
												HORA</span></font></td>
																				<td class="texto2" height="15" width="12%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top:2px">
												<font color="#000000">
												<span style="font-size: 6pt; font-weight: 700">
												OPÇÕES</span></font></td>
																</tr>
																<% if TblVisitas.EOF = true then %>
																<b>
													<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem compromissos para hoje -</font></b><font size="2">
																<%
																if Not TblVisitas.EOF then TblVisitas.MoveFirst
																End if
																While Not TblVisitas.EOF
																%>
																<tr>
																				<td class="texto2" width="56%" bgcolor="#FFFFFF" height="20">
																				<p style="margin-left: 5px"><%=TblVisitas("empresa")%></td>
																				<td class="texto2" height="20" width="18%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px"><%=TblVisitas("datavisita")%></td>
																				<td class="texto2" height="20" width="13%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px"><%=TblVisitas("horavisita")%></td>
																				<td class="texto2" height="20" width="12%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px">
												<font size="2">
												<a class="inf" href="<%=Request.ServerVariables("SCRIPT_NAME")%>?codvisita=<%=TblVisitas("codvisita")%>">Ex</a></font> | 
												<font size="2">
												<a class="inf" href="clientes/ficha_completa.asp?registro=<%=TblVisitas("registro")%>#Compromissos">Vi</a></td>
																</tr><%
																 TblVisitas.Movenext
																 Wend
																 TblVisitas.Close
																 %>
																
												</table>
								</div>
																				</td>
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
								<p style="margin-left: 15px; margin-top:15px; margin-bottom:5px">
								<font face="Arial" style="font-size: 11pt"><b>&#8226 
								Compromissos para amanhã</b></font></td>
									</tr>
									<tr>
										<td><div align="center">
												<table border="0" cellpadding="0" cellspacing="0" width="177" id="table29" height="20">
																<tr>
																				<td width="177" height="20" valign="top"><div align="center">
												<table border="0" cellpadding="0" cellspacing="1" width="420" id="table30" bgcolor="#C0C0C0">
												
																<tr>

																				<td class="texto2" width="56%" bgcolor="#F0F0EB" height="15">
																				<p style="margin-left: 5px; margin-top: 2px"><font color="#000000"><span style="font-weight: 700; font-size: 6pt">EMPRESA</span></font></td>
																				<td class="texto2" height="15" width="18%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top: 2px">
												<font color="#000000">
												<span style="font-weight: 700; font-size: 6pt">
												DATA</span></font></td>
																				<td class="texto2" height="15" width="13%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top: 2px">
												<font color="#000000">
												<span style="font-weight: 700; font-size: 6pt">
												HORA</span></font></td>
																				<td class="texto2" height="15" width="12%" bgcolor="#F0F0EB">
												<p style="margin-left: 5px; margin-top:2px">
												<font color="#000000">
												<span style="font-size: 6pt; font-weight: 700">
												OPÇÕES</span></font></td>
																</tr>
																<% if TblTomorrow.EOF = true then %>
																<b>
													<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem compromissos para amanhã -</font></b><font size="2">
																<%
																if Not TblTomorrow.EOF then TblTomorrow.MoveFirst
																End if
																While Not TblTomorrow.EOF
																%>
																<tr>
																				<td class="texto2" width="56%" bgcolor="#FFFFFF" height="20">
																				<p style="margin-left: 5px"><%=TblTomorrow("empresa")%></td>
																				<td class="texto2" height="20" width="18%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px"><%=TblTomorrow("datavisita")%></td>
																				<td class="texto2" height="20" width="13%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px"><%=TblTomorrow("horavisita")%></td>
																				<td class="texto2" height="20" width="12%" bgcolor="#FFFFFF">
												<p style="margin-left: 5px">
												<font size="2">
												<a class="inf" href="<%=Request.ServerVariables("SCRIPT_NAME")%>?codvisita=<%=TblTomorrow("codvisita")%>">Ex</a></font> | 
												<font size="2">
												<a class="inf" href="clientes/ficha_completa.asp?registro=<%=TblTomorrow("registro")%>#Compromissos">Vi</a></td>
																</tr><%
																 TblTomorrow.Movenext
																 Wend
																 TblTomorrow.Close
																 %>
																
												</table>
								</div>
																				</td>
																</tr>
												</table>
								</div>
										</td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
								<p></td>
			</tr>
			</table>
        </td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>