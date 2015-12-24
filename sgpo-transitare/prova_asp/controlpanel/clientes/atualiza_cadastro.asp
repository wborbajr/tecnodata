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
     Dim TblDetrans
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
%>

<%

     Dim razao_social, nome_fantasia, cnpj, ins_estadual, cidade, uf, endereco, cep, telefone, email, site, questoes, alternativas, dispensavel, status
     set TblDetrans = ObjConn.Execute ("UPDATE detrans SET status = '"& Request("status") &"', razao_social = '"& Request("razao_social") &"', nome_fantasia = '"& Request("nome_fantasia") &"', cnpj = '"& Request("cnpj") &"', ins_estadual = '"& Request("ins_estadual") &"', cidade = '"& Request("cidade") &"', uf = '"& Request("uf") &"', endereco = '"& Request("endereco") &"', cep = '"& Request("cep") &"', telefone = '"& Request("telefone") &"', email = '"& Request("email") &"', site = '"& Request("site") &"', questoes = '"& Request("questoes") &"', alternativas = '"& Request("alternativas") &"', dispensavel = '"& Request("dispensavel") &"', taxa_aprovacao = '"& Request("taxa_aprovacao") &"' WHERE codCliente = '"& Request("codcliente") &"'")
     
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Atualiza cadastro ]</title>
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
								<b><font size="2" color="#808080">:: </font></b>
								<font size="2" color="#808080"><b>Atualização de 
								cadastro</b></font></td>
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
														<font color="#3672AC" size="1">
														<%=Request("codcliente")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Razão Social:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
														<font color="#3672AC" size="1">
														<%=Request("razao_social")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Nome fantasia:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("nome_fantasia")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">CNPJ:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("cnpj")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Ins. Estadual:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("ins_estadual")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Cidade:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("cidade")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Estado:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("uf")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Endereço:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("endereco")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Cep:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("cep")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Telefone:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("telefone")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">E-mail:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("email")%></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font color="#47858B">Site:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
										<p align="left" style="margin-left: 7px">
			<font color="#3672AC" size="1">
			<%=Request("site")%></font></td>
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
																				<font color="#47858B">Questões:</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="16%" align="center">
																				<font color="#47858B">Alternativas</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="20%" align="center">
																				<font color="#47858B">Dispensável</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%" align="center">
																				<font color="#47858B">Uso do sistema</font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%" align="center">
																				<font color="#47858B">Tx. de aprovação</font></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="16%">
										<p align="center">
										<b><font size="1" color="#3672AC"><%=Request("questoes")%></font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="16%">
																				<p align="center">
			<b><font size="1" color="#3672AC"><%=Request("alternativas")%></font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="20%">
																				<p align="center"><b><font size="1" color="#3672AC"><%=Request("dispensavel")%></font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%">
																				<p align="center"><b><font size="1" color="#3672AC"><%=Request("status")%></font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%">
																				<p align="center"><%=Request("taxa_aprovacao")%></td>
									</tr>
									</table>
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
												<td class="texto2" height="10" width="100%" align="right" bgcolor="#F0F0F0"></td>
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
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>