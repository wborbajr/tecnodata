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
     Dim TblDetrans, TblCiretrans
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
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans WHERE tipo = '"& Request("tipo") &"'")
     Session("tipo") = Request("tipo")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Cadastro de clientes ]</title>
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
								<b><font size="2" color="#808080">:: Cadastro de 
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
								<td height="20" class="texto2">
								<p style="line-height: 140%; margin-top: 2px; margin-bottom: 2px">
								<font size="1">Aqui você pode especificar as 
								permissões únicas para este usuário.</font></p>
								<p style="line-height: 140%; margin-top: 2px; margin-bottom: 5px">
								<font size="1">Somente usuários administradores 
								devem ter permissão de exclusão.</font></td>
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
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Adicionar um novo contato para 
										Detran/Ciretran :</b></font></td>
									</tr>
									<tr>
									<form method="post" name="cadastro" action="cadastra_contato.asp">
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="447" colspan="2">
																				<p align="left" style="margin-left: 7px">
														<font size="1" color="#3672AC">
														Selecione o tipo de 
														contato</font></td>
										</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="193">
																				<p align="left" style="margin-left: 7px">
														<select size="1" name="tipo" class="box" onChange="MM_jumpMenu('parent',this,0)">
			<option selected value="#">--- Tipo de contato ---</option>
			<option value="#">-------------------------</option>
			<option value="../main.asp?url=clientes/form_contato.asp?tipo=Detran">
			Detran</option>
			<option value="../main.asp?url=clientes/form_contato.asp?tipo=Ciretran">
			Ciretran</option>
			</select></td>
										<td bgcolor="#E3EEEE" class="texto2" width="254">
																				<p align="left" style="margin-left: 7px">
														<select size="1" name="id_cliente0" class="box">
			<option selected value="#">--- Selecione um <%=Session("tipo")%> ---</option>
			<option value="#">-------------------------</option>
			<% While Not TblDetrans.EOF %>
			<option value="<%=TblDetrans("codCliente")%>"><%=TblDetrans("nome_fantasia")%></option>
			<%
			TblDetrans.MoveNext
			Wend
			%>
			</select></td>
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
										<td class="texto2" height="30" colspan="4">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>Dados 
										cadastrais do novo contato :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%">
																				<p align="left" style="margin-left: 5px"><font size="1" color="#47858B">Nome:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="79%" colspan="3">
																				<p align="left" style="margin-left: 5px">
														<input type="text" name="nome" size="60" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Cargo:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="79%" colspan="3">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cargo" size="40" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">E-mail:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="79%" colspan="3">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="email" size="40" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Telefone:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="43%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="telefone" size="25" class="box"></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="13%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Ramal:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="23%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="ramal" size="12" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Celular:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="79%" colspan="3">
																				<p align="left" style="margin-left: 7px">
												<input type="text" name="celular" size="25" class="box"></td>
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