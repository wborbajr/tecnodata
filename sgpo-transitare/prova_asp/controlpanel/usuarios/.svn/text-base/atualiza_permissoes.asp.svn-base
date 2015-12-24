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
     Dim objConn, objRS, strQ
     Dim TblAcessos, TblUsuarios, TblPermissoes
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Editar usuários ("& Request("ID") &")"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblUsuarios = ObjConn.Execute ("SELECT * FROM usuarios WHERE codUsuario = '"& Request("ID") &"'")
     set TblPermissoes = ObjConn.Execute ("UPDATE usuarios SET cadastrar = '"& Request("cadastrar") &"', excluir = '"& Request("excluir") &"', editar = '"& Request("editar") &"', bilhetagem = '"& Request("bilhetagem") &"', bnq = '"& Request("bnq") &"', clientes = '"& Request("clientes") &"', usuarios = '"& Request("usuarios") &"', manutencao = '"& Request("manutencao") &"', painel_cliente = '"& Request("painel_cliente") &"' WHERE codUsuario = '"& Request("ID") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Usuários ]</title>
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
			<font size="4" color="#C0C0C0">Usuários</font></b></td>
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
								<td height="20">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td height="10">
										</td>
									</tr>
									<tr>
										<td>
								<table border="1" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
									<tr>
										<td bgcolor="#FFFFFF" class="texto2" height="25">
										<p style="margin-left: 5px">
										<font size="1" color="#B9B9B9"><b>Dados 
										do usuário</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="25">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="texto2" height="5">
												</td>
											</tr>
											<tr>
												<td class="texto2">
												<p style="margin: 2px 5px; ">
												<b>
												<font size="1" color="#808080">Código</font></b><p style="margin: 2px 5px; ">
								<font size="1" color="#808080">
												<b>
												<input name="ID" READONLY type="text" class="box" size="10" maxlength="50" value="<%=TblUsuarios("codUsuario")%>" style="color: #3672AC; border: 1px solid #F0F0F0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; background-color: #F0F0F0"></b></font></td>
											</tr>
											<tr>
												<td class="texto2" height="5">
												</td>
											</tr>
											<tr>
												<td class="texto2">
												<p style="margin:2px 5px; ">
												<b>
												<font size="1" color="#808080">Status</font></b><p style="margin:2px 5px; ">
												<font size="1" color="#3672AC"><%=TblUsuarios("status")%></font></td>
											</tr>
											<tr>
												<td class="texto2" height="10">
												</td>
											</tr>
											<tr>
												<td class="texto2">
												<p style="margin:2px 5px; ">
												<b>
												<font size="1" color="#808080">Nome</font></b><p style="margin:2px 5px; ">
												<font size="1" color="#3672AC"><%=TblUsuarios("txtNome")%></font></td>
											</tr>
											<tr>
												<td height="10">
												<p style="margin-left:5px; margin-right:5px; margin-bottom:5px">
												</td>
											</tr>
											</table>
										</td>
									</tr>
								</table>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="20">&nbsp;</td>
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
				<form method="post" name="usuario" action="atualiza_usuario.asp">
					<tr>
						<td class="texto2" height="10" bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">Gerenciador de 
								permissões</font></b></td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<p style="line-height: 140%; margin-top: 2px">
								<b><font size="1">As permissões do usuário 
								formam atualizadas com sucesso.</font></b></td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								&nbsp;</td>
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
																<td height="20" class="texto2">
																<p style="margin-left: 5px">
																<b>
																<font size="1" color="#47858B">
																Funções:</font></b></td>
															</tr>
															<tr>
																<td height="30">
																<table border="0" cellpadding="0" cellspacing="5" width="100%">
																	<tr>
																		<td width="20%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="20">
																				<p align="center"><font color="#3672AC">Cadastrar</font></td>
																			</tr>
																			<tr>
																				<td bgcolor="#F0F0F0" height="30">
																				<p align="center">
																		<span style="text-transform: uppercase; font-weight:700">
																		<font size="1" color="#808080" face="Verdana">
																		<%=Request("cadastrar")%></font></span></td>
																			</tr>
																		</table>
																		</td>
																		<td width="20%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="20">
																				<p align="center"><font color="#3672AC">Excluir</font></td>
																			</tr>
																			<tr>
																				<td bgcolor="#F0F0F0" height="30">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font color="#808080" size="1">
																		<%=Request("excluir")%></font></b></span></td>
																			</tr>
																		</table>
																		</td>
																		<td width="20%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="20">
																				<p align="center"><font color="#3672AC">Editar</font></td>
																			</tr>
																			<tr>
																				<td bgcolor="#F0F0F0" height="30">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font color="#808080" size="1">
																		<%=Request("editar")%></font></b></span></td>
																			</tr>
																		</table>
																		</td>
																		<td width="40%">
												&nbsp;</td>
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
								<td height="20" class="texto2">
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
																<td height="20" class="texto2">
																<p style="margin-left: 5px">
																<font size="1" color="#47858B">
																<b>Áreas de 
																acesso</b></font><b><font size="1" color="#47858B">:</font></b></td>
															</tr>
															<tr>
																<td height="30">
																<table border="0" cellpadding="0" cellspacing="5" width="100%">
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Bilhetagem (controle de provas geradas e financeiro)</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("bilhetagem")%></font></b></span></td>
																			</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">BNQ - Banco Nacional de Questões</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("bnq")%></font></b></span></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Clientes</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("clientes")%></font></b></span></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Usuários</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("usuarios")%></font></b></span></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																		</form>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF" id="table2">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Manutenção de questões</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("manutencao")%></font></b></span></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF" id="table1">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Painel do cliente</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<span style="text-transform: uppercase">
																		<b>
																		<font size="1" color="#808080">
																		<%=Request("painel_cliente")%></font></b></span></td>
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
								</table>
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
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
								<td height="10"></td>
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