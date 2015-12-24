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
     Dim TblAcessos, TblCiretrans
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Novo contato Detran/Ciretan"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblCiretrans = ObjConn.Execute ("SELECT * FROM detrans WHERE id_detran = '"& Request("ID") &"' AND tipo = 'Ciretran'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Ciretrans ]</title>
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
			<font size="4" color="#C0C0C0">Clientes</font></b></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<select size="1" name="funcoes" class="box">
			<option selected value="#">--- Acesso rápido ---</option>
			<option value="#">-------------------------</option>
			</select></td>
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
					<td width="200" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="180">
							<tr>
								<td>
								<!--#include file="menu.asp"-->
								</td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							<tr>
								<td>
								<!--#include file="busca.asp"-->
								</td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							</table>
					</div>
					</td>
					<td width="1" background="../img/linha_vert.gif" valign="top">
					<img border="0" src="../img/linha_vert.gif" width="1" height="4"></td>
					<td width="508" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="488">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="100%">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F0F0F0">
											<tr>
												<td height="10" valign="top">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="450" bgcolor="#C0C0C0">
					<tr>
						<td class="texto2" height="10" bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">:: Ciretrans</font></b></td>
							</tr>
							<tr>
								<td height="1" class="texto2" background="../img/linha_hori.gif">
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="100%">
												<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#9DC6C6">
													<tr>
														<td bgcolor="#F2F7F7">
														<table border="0" cellpadding="0" cellspacing="0" width="100%">
															<tr>
																<td height="30">
																<table border="0" cellpadding="0" cellspacing="5" width="100%">
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="29" width="40" align="center" bgcolor="#F0F0F0">
																				<p><b><font color="#808080" size="1">IDC</font></b></td>
																				<td class="texto2" height="29" bgcolor="#F0F0F0" width="150">
																				<p align="left" style="margin-left: 7px">
														<font size="1" color="#808080">
														<b>Cidade</b></font></td>
																				<td class="texto2" height="29" bgcolor="#F0F0F0" width="165">
																				<p align="left" style="margin-left: 7px"><font size="1" color="#808080"><b>E-mail</b></font></td>
																				<td class="texto2" height="29" bgcolor="#F0F0F0" width="85">
																				<p align="center"><b><font color="#808080" size="1">Opções</font></b></td>
																			</tr>
																			<% if TblCiretrans.EOF = true then %>
																			<b>
																			<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem usuários cadastrados -</font></b><font size="2">
																			<%
																			if Not TblCiretrans.EOF then TblCiretrans.MoveFirst
																			End if
																			While Not TblCiretrans.EOF
																			%>
																			<tr>
																				<td class="texto2" height="31" width="40" align="center">
																				<p><font color="#3672AC"><%=TblCiretrans("id_detran")%></font></td>
																				<td class="texto2" height="31" width="150" align="center">
																				<p align="left" style="margin-left: 7px"><font color="#3672AC"><%=TblCiretrans("cidade")%></font></td>
																				<td class="texto2" height="31" width="165" align="center">
																				<p align="left" style="margin-left: 7px"><font color="#3672AC"><%=TblCiretrans("email")%></font></td>
																				<td class="texto2" height="31" width="85" align="center">
																				<div align="center">
																					<table border="0" cellpadding="0" cellspacing="0" width="75" height="0">
																						<tr>
												<td width="25">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="editar.asp?ID=<%=TblCiretrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>E</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="25">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="contatos.asp?ID=<%=TblCiretrans("id_detran")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>X</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="25">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="mensagens.asp?ID=<%=TblCiretrans("id_detran")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>M</b></font></td></a>
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
																				<td height="1" width="440" align="center" colspan="4" bgcolor="#F0F0F0">
																				</td>
																			</tr>
																			<%
																			TblCiretrans.MoveNext
																			Wend
																			%>
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
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								<p align="right">
												<input type="submit" value="» | Cadastrar" name="btoCadastrar" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
												<input type="reset" value="x | Cancelar" name="btoCancelar" style="font-size: 9px; font-family: Verdana; font-weight: bold">
												</td>
							</tr>
							</form>
							</table>
						</td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="10" width="100%" align="right">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
							</table>
								</td>
							</tr>
							<tr>
								<td>
								</td>
							</tr>
							</table>
					</div>
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