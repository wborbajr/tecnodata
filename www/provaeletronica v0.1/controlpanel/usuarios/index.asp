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
 If Not Session ("usuarios") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza, TblAcessos
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Usuários"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblUsuarios = ObjConn.Execute ("SELECT * FROM usuarios ORDER by txtNome")
     set TblCurrentUser = ObjConn.Execute ("SELECT * FROM usuarios WHERE id = '"& Session("coduser") &"'")
     set TblDelUsuarios = ObjConn.Execute ("DELETE FROM usuarios WHERE id = '"& Request("excluir") &"'")
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
								<td height="5" class="texto2">
								</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<p style="line-height: 145%; margin-top: 2px; margin-bottom: 2px">
								<b><font size="1" color="#808080">NOTA:</font></b></p>
								<p style="line-height: 135%; margin-top: 2px; margin-bottom: 2px">
								<font color="#808080">Antes de editar um 
								usuário, esteja ciente que as alterações serão 
								no mesmo instante, e que você poderá estar 
								impossibilitando o acesso de tal usuário ao 
								sistema BNQ e/ou ao AGC.</font></p>
								<p style="line-height: 135%; margin-top: 2px; margin-bottom: 2px">
								<font color="#808080">Qualquer dúvida, entre em 
								contato com o administrador do sistema.</font></td>
							</tr>
							<tr>
								<td height="20"></td>
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
												<input name="ID" READONLY type="text" class="box" size="8" maxlength="50" value="<%=TblCurrentUser("ID")%>" style="color: #47858B; border: 1px solid #DFECEC; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; background-color: #DFECEC; font-size:10px; font-family:Verdana; font-weight:bold; text-align:center"></b></font></td>
															<td bgcolor="#DFECEC" width="61%" height="40" class="texto2">
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
															<font size="1" color="#808080">
															Status</font></p>
															<p style="margin-top: 2px; margin-bottom: 2px" align="center">
															<b>
															<font size="1" color="#47858B">
															<%=TblCurrentUser("status")%></font></b></td>
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
															<b><%=TblCurrentUser("cadastrar")%></b></font></p>
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
															<b><%=TblCurrentUser("editar")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Excluir</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("excluir")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Bilhetagem</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("bilhetagem")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															BNQ</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("bnq")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Clientes</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("clientes")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Usuários</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("usuarios")%></b></font></td>
														</tr>
														<tr>
															<td bgcolor="#DFECEC" width="66%" height="25" class="texto2">
															<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">
															<font size="1" color="#808080">
															Painel Cliente</font></td>
															<td bgcolor="#F0F0F0" width="32%" height="25" class="texto2">
															<p align="center">
															<font size="1" color="#47858B">
															<b><%=TblCurrentUser("painel_cliente")%></b></font></td>
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
								<td height="10">
								</td>
							</tr>
							<tr>
								<td>
								<table border="1" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="303">
										<p style="margin-left: 5px">
										<font size="1" color="#A5A5A5"><b>Usuário</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="75" align="center">
										<font size="1" color="#A5A5A5"><b>Status</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="105">
										<p align="center"><b>
										<font size="1" color="#A5A5A5">Opções</font></b></td>
									</tr>
									<% While Not TblUsuarios.EOF %>
									<tr>
										<td bgcolor="#FFFFFF" width="303" class="texto2" height="30">
										<p style="margin-left: 5px">
										<font size="1"><%=TblUsuarios("txtNome")%></font></td>
										<td bgcolor="#FFFFFF" width="75" align="center" class="texto2" height="30">
										<font size="1">
										<%=TblUsuarios("status")%></font></td>
										<td bgcolor="#FFFFFF" width="105" class="texto2" height="30">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="25%">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="editar.asp?ID=<%=TblUsuarios("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>E</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="25%">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="<%=Request.ServerVariables("SCRIPT_NAME")%>?excluir=<%=TblUsuarios("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" onClick="return confirm('Deseja excluir este usuário?')" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>X</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="25%">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="acessos.asp?ID=<%=TblUsuarios("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>A</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="25%">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="permissoes.asp?ID=<%=TblUsuarios("id")%>"><td style="Cursor: hand" style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>P</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
											</tr>
										</table>
										</td>
									</tr>
									    <%
										TblUsuarios.MoveNext
										Wend
										%>
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