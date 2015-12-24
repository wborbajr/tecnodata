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
     set TblContatos = ObjConn.Execute ("SELECT * FROM contatos WHERE id_cliente = '"& Request("ID") &"'")
     set TblCustomerUser    = ObjConn.Execute ("SELECT * FROM usuarios WHERE id_cliente = '"& Request("id") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Bilhetagem ]</title>
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
								<b><font size="2" color="#808080">:: </font></b>
								<font size="2" color="#808080"><b>Bilhetagem</b></font></td>
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
								<td height="20" class="texto2" bgcolor="#F2F7F7">
								<div align="center">
								<table border="0" cellpadding="0" cellspacing="1" width="450" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="5">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Detalhes financeiros do cliente :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="14%" align="center">
																				<font color="#47858B"><b>Mês</b></font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="15%" align="center">
																				<font color="#47858B"><b>Provas</b></font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="21%">
																				<p style="margin-left: 5px"><font color="#47858B"><b>Valor</b></font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%" align="center">
																				<font color="#47858B"><b>Status</b></font></td>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="24%">
																				<p align="center"><font color="#47858B"><b>Opções</b></font></td>
									</tr>
									<% if TblCustomerUser.EOF = true then %>
									<b>
									<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Este cliente ainda não utilizou o sistema -</font></b><font size="2">
									<%
									if Not TblCustomerUser.EOF then TblCustomerUser.MoveFirst
									End if
									While Not TblCustomerUser.EOF
									%>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="14%" align="center">
										<font size="1" color="#808080">Abril/05</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="15%" align="center">
										<font size="1" color="#808080">1735</font></td>
										</font>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="21%" align="center">
										<p style="margin-left: 5px" align="left">
										<font size="1" color="#808080">R$ 
										1.783,00</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%" align="center">
										<font size="1" color="#808080">Pendente</font></td>
										<font size="2">
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="24%" align="center">
										<p style="margin-left: 5px"></td>
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
								<td height="20" class="texto2">
								&nbsp;</td>
							</tr>
									<tr>
								<td height="20" class="texto2" bgcolor="#F2F7F7">
								<div align="center">
								<table border="0" cellpadding="0" cellspacing="1" width="450" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>Total 
										faturado com este cliente até o momento :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="98%" align="center">
																				<p style="margin-left: 5px" align="left"><font size="1" color="#808080">R$ 90.000,00 (Noventa mil reais)</font></td>
									</tr>
									</table>
								</div>
								</td>
											</tr>
							<tr>
								<td height="10" class="texto2">
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
			<td colspan="2" height="10"></td>
		</tr>
	</table>
</div>

</body>

</html>