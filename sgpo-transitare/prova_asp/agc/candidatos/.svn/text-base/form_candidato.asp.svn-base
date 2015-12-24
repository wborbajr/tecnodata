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
     Dim TblAcessos, TblDetrans, TblCandidatosToday, TblCandidatosTomorrow
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
     
     Dim data, dia
     data = now()
     dia = day(data)
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
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table8">
				<tr>
					<td width="191">
						<table border="0" cellpadding="0" cellspacing="0" width="180" id="table9">
							<tr>
								<td>
								<table border="1" cellpadding="0" cellspacing="0" width="100%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" bgcolor="#F0F0F0" height="25" id="table10">
									<tr>
										<td style="Cursor: hand" onMouseOver="this.style.background='#F2F7F7'" onMouseOut="this.style.background='#F0F0F0'" class="texto2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table11">
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="0" width="10" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" height="10" id="table12">
														<tr>
															<td bgcolor="#FFFFFF">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="1" height="1"></td>
														</tr>
													</table>
												</div>
												</td>
												<td width="155" class="texto2">
												<font color="#AAAAAA"><b>
												<font size="1">Exportar 
												candidatos</font></b></font></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							</table>
					</td>
					<td width="192">
						<table border="0" cellpadding="0" cellspacing="0" width="180" id="table16">
							<tr>
								<td>
								<table border="1" cellpadding="0" cellspacing="0" width="100%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" bgcolor="#F0F0F0" height="25" id="table20">
									<tr>
										<td style="Cursor: hand" onMouseOver="this.style.background='#F2F7F7'" onMouseOut="this.style.background='#F0F0F0'" class="texto2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table21">
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="0" width="10" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" height="10" id="table22">
														<tr>
															<td bgcolor="#FFFFFF">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="1" height="1"></td>
														</tr>
													</table>
												</div>
												</td>
												<td width="155" class="texto2">
												<font size="1" color="#AAAAAA">
												<b>Im</b></font><font color="#AAAAAA"><b><font size="1">portar candidatos</font></b></font></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							</table>
					</td>
					<td width="180">
								<table border="1" cellpadding="0" cellspacing="0" width="100%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" bgcolor="#F0F0F0" height="25" id="table26">
									<tr>
										<td style="Cursor: hand" onMouseOver="this.style.background='#F2F7F7'" onMouseOut="this.style.background='#F0F0F0'" class="texto2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table27">
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="0" width="10" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" height="10" id="table28">
														<tr>
															<td bgcolor="#FFFFFF">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="1" height="1"></td>
														</tr>
													</table>
												</div>
												</td>
												<td width="155" class="texto2">
												<font size="1" color="#AAAAAA">
												<b>Cadastrar</b></font><font color="#AAAAAA"><b><font size="1"> candidato</font></b></font></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
					</td>
					<td>
						&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table1">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="68%">
													<p style="margin-left: 10px" align="left">
													<font size="1" color="#808080">
													<b>Cadastro de candidato 
													teste</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" width="68%" class="texto2" align="center" valign="top">
															<table border="0" cellpadding="0" cellspacing="10" width="100%" id="table2">
																<tr>
																	<td valign="top">
																	<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table3" bgcolor="#C0C0C0">
																	<form method="post" name="cadastro" action="add_candidato.asp">
																		<tr>
																			<td bgcolor="#F2F7F7" height="20" class="texto2">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Nome</font></td>
																			<td bgcolor="#F2F7F7" height="20" class="texto2" width="187">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			E-mail</font></td>
																			<td bgcolor="#F2F7F7" height="20" class="texto2" width="178">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			CPF</font></td>
																			<td bgcolor="#F2F7F7" height="20" class="texto2" width="157">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			RG</font></td>
																		</tr>
																		<tr>
																			<td bgcolor="#FFFFFF" class="texto2" height="25">
																			<p style="margin-left: 5px">
														<input type="text" name="nome" size="25" class="box"><font size="1"></font></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="187">
																			<p style="margin-left: 5px">
																			<font size="2">
														<input type="text" name="email" size="25" class="box"></font><font size="1"></font></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="178">
																			<p style="margin-left: 5px"><font size="2">
														<input type="text" name="cpf" size="25" class="box"></td>

																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="157">
																			<p style="margin-left: 5px"><font size="2">
														<input type="text" name="rg" size="25" class="box"></td>
																		</tr>
																		<tr>
																			<td bgcolor="#F2F7F7" class="texto2" height="20">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Renach</font></td>
																			<td bgcolor="#F2F7F7" class="texto2" height="20" width="187">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Biometria</font></td>
																			<td bgcolor="#F2F7F7" class="texto2" height="20" width="178">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Data 
																			da 
																			prova</font></td>
																			<td bgcolor="#F2F7F7" class="texto2" height="20" width="157">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Hora 
																			da 
																			prova</font></td>
																		</tr>
																		<tr>
																			<td bgcolor="#FFFFFF" class="texto2" height="25">
																			<p style="margin-left: 5px"><font size="2">
														<input type="text" name="renach" size="25" class="box"></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="187">
																			<p style="margin-left: 5px">&nbsp;</td>
																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="178">
																			<p style="margin-left: 5px">
														<select size="1" name="diaProva" class="box">
			<option value="1" <% if dia = "1"  then  Response.Write "selected"%>>01</option>
			<option value="2" <% if dia = "2"  then  Response.Write "selected"%>>02</option>
			<option value="3" <% if dia = "3"  then  Response.Write "selected"%>>03</option>
			<option value="4" <% if dia = "4"  then  Response.Write "selected"%>>04</option>
			<option value="5" <% if dia = "5"  then  Response.Write "selected"%>>05</option>
			<option value="6" <% if dia = "6"  then  Response.Write "selected"%>>06</option>
			<option value="7" <% if dia = "7"  then  Response.Write "selected"%>>07</option>
			<option value="8" <% if dia = "8"  then  Response.Write "selected"%>>08</option>
			<option value="9" <% if dia = "9"  then  Response.Write "selected"%>>09</option>
			<option value="10" <% if dia = "10"  then  Response.Write "selected"%>>10</option>
			<option value="11" <% if dia = "11"  then  Response.Write "selected"%>>11</option>
			<option value="12" <% if dia = "12"  then  Response.Write "selected"%>>12</option>
			<option value="13" <% if dia = "13"  then  Response.Write "selected"%>>13</option>
			<option value="14" <% if dia = "14"  then  Response.Write "selected"%>>14</option>
			<option value="15" <% if dia = "15"  then  Response.Write "selected"%>>15</option>
			<option value="16" <% if dia = "16"  then  Response.Write "selected"%>>16</option>
			<option value="17" <% if dia = "17"  then  Response.Write "selected"%>>17</option>
			<option value="18" <% if dia = "18"  then  Response.Write "selected"%>>18</option>
			<option value="19" <% if dia = "19"  then  Response.Write "selected"%>>19</option>
			<option value="20" <% if dia = "20"  then  Response.Write "selected"%>>20</option>
			<option value="21" <% if dia = "21"  then  Response.Write "selected"%>>21</option>
			<option value="22" <% if dia = "22"  then  Response.Write "selected"%>>22</option>
			<option value="23" <% if dia = "23"  then  Response.Write "selected"%>>23</option>
			<option value="24" <% if dia = "24"  then  Response.Write "selected"%>>24</option>
			<option value="25" <% if dia = "25"  then  Response.Write "selected"%>>25</option>
			<option value="26" <% if dia = "26"  then  Response.Write "selected"%>>26</option>
			<option value="27" <% if dia = "27"  then  Response.Write "selected"%>>27</option>
			<option value="28" <% if dia = "28"  then  Response.Write "selected"%>>28</option>
			<option value="29" <% if dia = "29"  then  Response.Write "selected"%>>29</option>
			<option value="30" <% if dia = "30"  then  Response.Write "selected"%>>30</option>
			<option value="31" <% if dia = "31"  then  Response.Write "selected"%>>31</option>
			</select><font size="2"><select size="1" name="mesProva" class="box">
			<option value="1" <% if month(now) = "1"  then  Response.Write "selected"%>>Jan</option>
			<option value="2" <% if month(now) = "2"  then  Response.Write "selected"%>>Fev</option>
			<option value="3" <% if month(now) = "3"  then  Response.Write "selected"%>>Mar</option>
			<option value="4" <% if month(now) = "4"  then  Response.Write "selected"%>>Abr</option>
			<option value="5" <% if month(now) = "5"  then  Response.Write "selected"%>>Mai</option>
			<option value="6" <% if month(now) = "6"  then  Response.Write "selected"%>>Jun</option>
			<option value="7" <% if month(now) = "7"  then  Response.Write "selected"%>>Jul</option>
			<option value="8" <% if month(now) = "8"  then  Response.Write "selected"%>>Ago</option>
			<option value="9" <% if month(now) = "9"  then  Response.Write "selected"%>>Set</option>
			<option value="10" <% if month(now) = "10"  then  Response.Write "selected"%>>Out</option>
			<option value="11" <% if month(now) = "11"  then  Response.Write "selected"%>>Nov</option>
			<option value="12" <% if month(now) = "12"  then  Response.Write "selected"%>>Dez</option>
			</select><select size="1" name="anoProva" class="box">
			<option value="2006">2006</option>
			</select></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="25" width="157">
																			<p style="margin-left: 5px"><font size="2">
														<select size="1" name="hora_prova" class="box">
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			</select>:<select size="1" name="minuto_prova" class="box">
			<option value="00">00</option>
			<option value="5">05</option>
			<option value="10">10</option>
			<option value="15">15</option>
			<option value="20">20</option>
			<option value="25">25</option>
			<option value="30">30</option>
			<option value="35">35</option>
			<option value="40">40</option>
			<option value="45">45</option>
			<option value="50">50</option>
			<option value="55">55</option>
			</select></td>
																		</tr>
																	</table>
																	</td>
																</tr>
																<tr>
																	<td valign="top">
											<div align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100" id="table29" bgcolor="#9DC6C6">
													<tr>
														<a href="javascript:document.cadastro.submit()"><td style="Cursor: hand" class="texto2" height="27">
														<p align="center" style="margin-top: 3px">
														<b>
														<font size="1" color="#47858B">
														» | </font></b>
														<font size="1" color="#47858B">
														<b>Cadastrar</b></font></td></a>
													</tr>
													<tr>
														<td>
														<p align="right">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
													</tr>
												</table>
											</div>
																	</td>
																</tr>
																</form>
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