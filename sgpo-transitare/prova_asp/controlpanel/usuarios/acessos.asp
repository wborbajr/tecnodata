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
     set TblAcessos = ObjConn.Execute ("SELECT * FROM acessos WHERE codUsuario = '"& Request("ID") &"' AND txtData = '"& Request("dataAcesso") &"'")
     set TblCurrentUser = ObjConn.Execute ("SELECT * FROM usuarios WHERE codUsuario = '"& Session("coduser") &"'")
     set TblDataAcessos = ObjConn.Execute ("SELECT DISTINCT txtData FROM acessos WHERE codUsuario = '"& Request("ID") &"'")
     
     Session("codUsuario") = Request("ID")
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
								<td height="10" class="texto2">
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
												<input name="ID" READONLY type="text" class="box" size="8" maxlength="50" value="<%=TblCurrentUser("codUsuario")%>" style="color: #47858B; border: 1px solid #DFECEC; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; background-color: #DFECEC; font-size:10px; font-family:Verdana; font-weight:bold; text-align:center"></b></font></td>
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
								<td height="20"></td>
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
								<td>
								<table border="1" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
									<tr>
										<td bgcolor="#F2F7F7" class="texto2" height="25" width="488" colspan="4">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1">
											<tr>
												<td class="texto2">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="tblFormBusca">
												<form method="post" name="buscadata" action="<%=Request.ServerVariables("SCRIPT_MAME")%>">
													<tr>
														<td>
														<p align="right">
														<select size="1" name="dataAcesso" class="box">
														<option selected value="#">-- Selecione uma data --</option>
														<option value="#">-------------------------</option>
														<% While Not TblDataAcessos.EOF %>
														<option value="<%=TblDataAcessos("txtdata")%>"><%=TblDataAcessos("txtdata")%></option>
														<%
														TblDataAcessos.MoveNext
														Wend
														%>
														</select></td>
														<td width="29">
														<p align="center">
														<input type="submit" value="»" name="buscar" class="botao"></td>
													</tr>
													</form>
												</table>
												</td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="238">
										<p style="margin-left: 5px">
										<font size="1" color="#A5A5A5"><b>Página</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="75" align="center">
										<font size="1" color="#A5A5A5"><b>Data</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="75">
										<p align="center">
										<font size="1" color="#A5A5A5"><b>Hora</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="100">
										<p align="center">
										<font size="1" color="#A5A5A5"><b>IP</b></font></td>
									</tr>
									<% While Not TblAcessos.EOF %>
									<tr>
										<td bgcolor="#FFFFFF" width="238" class="texto2" height="30">
										<p style="margin-left: 5px">
										<font size="1"><%=TblAcessos("txtPagina")%></font></td>
										<td bgcolor="#FFFFFF" width="75" align="center" class="texto2" height="30">
										<font size="1">
										<%=TblAcessos("txtData")%></font></td>
										<td bgcolor="#FFFFFF" width="75" class="texto2" height="30">
										<p align="center">
			<%=TblAcessos("txtHora")%></td>
										<td bgcolor="#FFFFFF" width="100" class="texto2" height="30">
										<p align="center"><%=TblAcessos("txtIP")%></td>
									</tr>
									    <%
										TblAcessos.MoveNext
										Wend
										%>
								</table>
								</td>
							</tr>
							<tr>
								<td height="10">
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