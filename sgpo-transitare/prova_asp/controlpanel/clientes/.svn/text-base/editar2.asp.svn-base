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
 
%>

<%
     Dim objConn, objRS, strQ
     Dim TblDetrans, TblAcessos, TblCustomerUser, TblDisciplinas, TblCursos
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Edita cadastro de cliente ("& Request("id") &")"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans WHERE id = '"& Request("id") &"'")
     set TblCustomerUser    = ObjConn.Execute ("SELECT * FROM usuarios WHERE id_cliente = '"& Request("id") &"'")
     set TblDisciplinas    = ObjConn.Execute ("SELECT * FROM disciplinas")
     set TblCursos = ObjConn.Execute ("SELECT * FROM cursos ORDER BY curso")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Editar cadastro ]</title>
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
			<td height="10"><!--#include file="topo.asp"--></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
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
								<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="100%">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F0F0F0">
													<tr>
			<td height="10" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
													</tr>
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="450">
					<tr>
						<td class="texto2" height="10" bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">:: Editar 
								Detran/Ciretran</font></b></td>
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
																<td height="25" class="texto2">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>Tipo 
										de cadastro :</b></font></td>
															</tr>
															<tr>
																<td height="30">
																<table border="0" cellpadding="0" cellspacing="5" width="100%">
																	<tr>
																		<td width="98%" class="texto2">
																		<font size="1">
																		<%
																		Select Case TblDetrans("tipo")
																			Case "Detran"
																				Response.Write "Detran: ("& TblDetrans("razao_social") &")"
																    		Case "Ciretran"
																    		    Response.Write "Ciretran: ("& TblDetrans("nome_fantasia") &")"
																		End Select
																		%>
																		</font></td>
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
								&nbsp;</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="2">
										<form name="edita_cadastro" action="atualiza_cadastro.asp">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>Dados 
										cadastrais do cliente :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
																				<p align="left" style="margin-left: 5px"><font color="#47858B">Cód. de registro:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
														<input type="text" READONLY name="codcliente" size="10" class="box" value="<%=TblDetrans("id")%>">
														<font color="#C0C0C0">
														campo não editável</font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Razão Social:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
														<input type="text" name="razao_social" size="55" class="box" value="<%=TblDetrans("razao_social")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Nome fantasia:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="nome_fantasia" size="40" class="box" value="<%=TblDetrans("nome_fantasia")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">CNPJ:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cnpj" size="25" class="box" value="<%=TblDetrans("cnpj")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Ins. Estadual:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="ins_estadual" size="25" class="box" value="<%=TblDetrans("ins_estadual")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Cidade:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cidade" size="40" class="box" value="<%=TblDetrans("cidade")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Estado:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<select size="1" name="uf" class="box">
			<option selected value="<%=TblDetrans("uf")%>"><%=TblDetrans("uf")%></option>
			<option value="#">-------------------------</option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federeal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambco</option>
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
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Endereço:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="endereco" size="55" class="box" value="<%=TblDetrans("endereco")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Cep:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cep" size="15" class="box" value="<%=TblDetrans("cep")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Telefone:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="telefone" size="25" class="box" value="<%=TblDetrans("telefone")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">E-mail:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="email" size="40" class="box" value="<%=TblDetrans("email")%>"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Site:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
										<p align="left" style="margin-left: 7px">
			<input type="text" name="site" size="40" class="box" value="<%=TblDetrans("site")%>"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								&nbsp;</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="5">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Configurações do ambiente de prova :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="16%" align="center">
																				<p><font color="#47858B" size="1">Questões</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="16%" align="center">
										<font size="1" color="#47858B">Altern.</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%" align="center">
										<font size="1" color="#47858B">Apl. 
										Disp.</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%" align="center">
										<font color="#47858B" size="1">Uso do sistema</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%" align="center">
										<font size="1" color="#47858B">Tx. 
										Aprovação</font></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="16%" align="center">
																				<font color="#47858B">
														<select size="1" name="questoes" class="box">
														<option <% if TblDetrans("questoes") = "30" Then  Response.Write"selected"%> value="30">30</option>
														<option <% if TblDetrans("questoes") = "40" Then  Response.Write"selected"%> value="40">40</option>
														<option <% if TblDetrans("questoes") = "50" Then  Response.Write"selected"%> value="50">50</option>
														</select></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="16%" align="center">
			<select size="1" name="alternativas" class="box">
			<option <% if TblDetrans("alternativas") = "4" Then  Response.Write"selected"%> value="4">4</option>
			<option <% if TblDetrans("alternativas") = "5" Then  Response.Write"selected"%> value="5">5</option>
			</select></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="20%" align="center">
			<select size="1" name="dispensavel" class="box">
			<option <% if TblDetrans("dispensavel") = "Sim" Then  Response.Write"selected"%> value="Sim">Sim</option>
			<option <% if TblDetrans("dispensavel") = "Não" Then  Response.Write"selected"%> value="Não">Não</option>
			</select></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%" align="center">
			<select size="1" name="status" class="box">
			<option <% if TblDetrans("status") = "Permitir" Then  Response.Write"selected"%> value="Permitir">Permitir</option>
			<option <% if TblDetrans("status") = "Bloquear" Then  Response.Write"selected"%> value="Bloquear">Bloquear</option>
			</select></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%" align="center">
			<input type="text" name="taxa_aprovacao" size="5" class="box" value="<%=TblDetrans("taxa_aprovacao")%>">
			<font size="1" color="#808080">%</font></td>
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
												<input type="submit" value="» | Atualizar" name="btoAtualizar" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
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
												<td class="texto2" height="20" width="100%" align="left" bgcolor="#F0F0F0">&nbsp;</td>
											</tr>
											<tr>
												<td class="texto2" height="20" width="100%" align="left" bgcolor="#F0F0F0">
												<div align="center">
								<table border="0" cellpadding="0" cellspacing="1" width="450" bgcolor="#FFFFFF" id="table1">
									<tr>
										<td class="texto2" height="30" colspan="4">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Liberação de cursos :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="25%" align="center">
																				<font size="1" color="#47858B">1ª Habilitação</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="25%" align="center">
										<font size="1" color="#47858B">Instrutor</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="25%" align="center">
										<font size="1" color="#47858B">
										Reciclagem</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="25%" align="center">
										<font size="1" color="#47858B">Renovação</font></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="100%" align="center" colspan="4">
<table align="left" width="200" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="bottom">
	<input type="text" name="combobox" value="" onClick="cb_exibe_esconde()" style="border-left:2px inset whitesmoke; border-top:2px inset whitesmoke; border-bottom:2px inset whitesmoke; width: 200; border-right: medium none; height: 20; font-family: arial; font-size: 12px" readonly title=""></td>
    <td width="1%" valign="bottom"><img src="../img/cb.gif" width="17" height="21" onClick="cb_exibe_esconde()"></td>
  </tr>
</table>
<div align=left id="cb_opcoes" style="position:absolute; left:232px; top:828px; width:215px; height:82px; z-index:1; font-family: verdana; font-size: 10px; background: white; border: 1px solid gray; overflow: auto; display: none;">
<% While Not TblCursos.EOF %>
<input type="checkbox" name="cb_opcao" value="<%=TblCursos("curso")%>" onClick="cd_atualiza_valores()"><%=TblCursos("curso")%><br>
<%
TblCursos.MoveNext
Wend
%>

</div>
</td>
									</tr>
									</table>
													</div>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="20" width="100%" align="left" bgcolor="#F0F0F0">&nbsp;</td>
											</tr>
											<tr>
												<td class="texto2" height="1" width="100%" align="right" bgcolor="#C0C0C0"></td>
											</tr>
											<tr>
												<td class="texto2" height="1" width="100%" align="right" bgcolor="#FFFFFF"></td>
											</tr>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" bgcolor="#F2F7F7"></td>
											</tr>
											<tr>
								<td height="20" class="texto2" bgcolor="#F2F7F7">
								<div align="center">
								<table border="0" cellpadding="0" cellspacing="1" width="450" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="3">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Usuários do cliente :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="10%" align="center">
																				<b><font color="#47858B">ID</font></b></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="42%">
																				<p style="margin-left: 5px"><font color="#47858B"><b>Nome</b></font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="48%">
																				<p style="margin-left: 5px"><font color="#47858B"><b>E-mail</b></font></td>
									</tr>
									<% if TblCustomerUser.EOF = true then %>
									<b>
									<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem usuários cadastrados -</font></b><font size="2">
									<%
									if Not TblCustomerUser.EOF then TblCustomerUser.MoveFirst
									End if
									While Not TblCustomerUser.EOF
									%>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="10%" align="center">
										<font size="1" color="#808080"><%=TblCustomerUser("id")%></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="42%">
										<p style="margin-left: 5px">
										<font color="#808080" size="1"><%=TblCustomerUser("txtNome")%></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="48%">
										<p style="margin-left: 5px">
										<font size="1" color="#808080"><%=TblCustomerUser("txtEmail")%></font></td>
									</tr>
									<%
									TblCustomerUser.MoveNext
									Wend
									%>
									</table>
								</div>
								</td>
											</tr>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" bgcolor="#F2F7F7">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
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
			<td height="10"></td>
		</tr>
	</table>
</div>

</body>

</html>