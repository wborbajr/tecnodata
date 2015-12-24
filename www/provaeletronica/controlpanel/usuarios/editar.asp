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

<!--#include file="../include/checalogin_admin.asp"-->
<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza
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
     set TblUsuarios = ObjConn.Execute ("SELECT * FROM usuarios WHERE ID = '"& Request("ID") &"'")
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
												<div align="center">
													<table border="0" cellpadding="0" cellspacing="1" width="160" bgcolor="#FFFFFF">
														<tr>
															<td bgcolor="#DFECEC" width="37%" height="40" class="texto2">
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
															<font size="1" color="#808080">
															Código</font></p>
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
								<font size="1" color="#808080">
												<b>
												<input name="ID0" READONLY type="text" class="box" size="8" maxlength="50" value="<%=TblUsuarios("ID")%>" style="color: #47858B; border: 1px solid #DFECEC; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; background-color: #DFECEC; font-size:10px; font-family:Verdana; font-weight:bold; text-align:center"></b></font></td>
															<td bgcolor="#DFECEC" width="61%" height="40" class="texto2">
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
															<font size="1" color="#808080">
															Status</font></p>
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
															<b>
															<font size="1" color="#47858B">
															<%=TblUsuarios("status")%></font></b></td>
														</tr>
													</table>
												</div>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="10">
												<p style="margin: 2px 5px; ">
												</td>
											</tr>
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="0" cellpadding="0" cellspacing="1" width="160" bgcolor="#FFFFFF">
														<tr>
															<td width="98%" height="30" class="texto2" colspan="2">
															<p align="center">
															<b>
															<font size="1" color="#47858B">
															Permissões</font></b></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-top: 2px; margin-bottom: 2px; margin-left:10px">
															<font size="1" color="#808080">
															Cadastrar</font></p>
															</td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("cadastrar")%></b></font></p>
															</td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Editar</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("editar")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Excluir</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("excluir")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Bilhetagem</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("bilhetagem")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															BNQ</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("bnq")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Clientes</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("clientes")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Usuários</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("usuarios")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Painel Cliente</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblUsuarios("painel_cliente")%></b></font></td>
														</tr>
													</table>
												</div>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="10">
												</td>
											</tr>
											</table>
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
								<td height="25" class="texto2" width="106">
								<b><font size="1">Código:</font></b></td>
								<td height="25" class="texto2">
								<font size="1" color="#808080">
												<b>
												<input name="ID" READONLY type="text" class="box" size="10" maxlength="50" value="<%=TblUsuarios("ID")%>"></b></font></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Status:</font></b></td>
								<td height="25" class="texto2">
												<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#9DC6C6">
													<tr>
														<td bgcolor="#F2F7F7" class="texto2">
														<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px">
												<select size="1" name="status" onBlur="this.className='box';" onFocus="this.className='boxon';" class="box">
                            					<option <% if TblUsuarios("status") = "Admin" Then  Response.Write"selected"%> value="Admin">Administrador</option>
												<option <% if TblUsuarios("status") = "Bloqueado" Then  Response.Write"selected"%> value="Bloqueado">Bloqueado</option>
												<option <% if TblUsuarios("status") = "Cancelado" Then  Response.Write"selected"%> value="Restrito">Cancelado</option>
												<option <% if TblUsuarios("status") = "Cliente" Then  Response.Write"selected"%> value="Cliente">Cliente</option>
												<option <% if TblUsuarios("status") = "Usuario" Then  Response.Write"selected"%> value="Usuario">Usuário</option>
												<option <% if TblUsuarios("status") = "Analise" Then  Response.Write"selected"%> value="Analise">Análise</option>
												</select> <font color="#47858B">
												Como &quot;Admin&quot; o usuário pode 
												fazer tudo</font></td>
													</tr>
												</table>
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2" colspan="2">
								</td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Nome:</font></b></td>
								<td height="25" class="texto2">
								<font size="1" color="#808080">
												<b>
												<input name="txtNome" type="text" class="box" size="55" maxlength="50" value="<%=TblUsuarios("txtNome")%>"></b></font></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">CPF:</font></b></td>
								<td height="25" class="texto2">
								<font size="1" color="#808080">
												<b>
												<input name="txtCpf" READONLY type="text" class="box" size="25" maxlength="11" value="<%=TblUsuarios("txtCpf")%>"></b></font></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">E-mail:</font></b></td>
								<td height="25" class="texto2"><b>
								<font size="1" color="#808080">
												<input name="txtEmail" type="text" class="box" size="55" maxlength="50" value="<%=TblUsuarios("txtEmail")%>"></font></b></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Cargo:</font></b></td>
								<td height="25" class="texto2"><b>
								<font size="1" color="#808080">
												<input name="txtCargo" type="text" class="box" size="55" maxlength="50" value="<%=TblUsuarios("txtCargo")%>"></font></b></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Cidade:</font></b></td>
								<td height="25" class="texto2"><b>
								<font size="1" color="#808080">
												<input name="txtCidade" type="text" class="box" size="41" maxlength="45" value="<%=TblUsuarios("txtCidade")%>"></font></b></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Estado:</font></b></td>
								<td height="25" class="texto2">
												<select size="1" name="cboEstado" onBlur="this.className='box';" onFocus="this.className='boxon';" class="box">
												<option selected value="<%=TblUsuarios("cboEstado")%>"><%=TblUsuarios("cboEstado")%></option>
                            					<option>---------------</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernanbuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
												</select></td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								<b>
								<font size="1">Senha:</font></b></td>
								<td height="25" class="texto2"><b>						<font size="1" color="#808080">
										<input name="txtSenha" READONLY type="password" class="box" size="20" maxlength="20" value="<%=TblUsuarios("txtSenha")%>"></font></b></td>
							</tr>
							<tr>
								<td height="10" class="texto2" colspan="2">
								</td>
							</tr>
							<tr>
								<td height="25" class="texto2" width="106">
								&nbsp;</td>
								<td height="25" class="texto2">
												<input type="submit" value="» | Atualizar" name="btoAtualizar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
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
											</form>
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