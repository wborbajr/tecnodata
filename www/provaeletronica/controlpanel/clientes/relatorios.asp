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
 If Not Session ("clientes") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza
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
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans WHERE tipo = 'Detran'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Relatórios ]</title>
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
								</td>
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
			<td>
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="450" bgcolor="#C0C0C0">
					<tr>
						<td class="texto2" height="10" bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">Gerenciador de 
								relatórios</font></b></td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<p style="line-height: 140%; margin-top: 2px; margin-bottom: 2px">
								<font size="1">Os relatórios abaixo, pertencem 
								ao cliente NOME e são referentes ao mês vigente. 
								Para visualizar os relatórios dos meses 
								anteriores, basta clicar sob o nome do 
								relatório.</font></p></td>
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
																<font size="1" color="#47858B">
																<b>Relatórios 
																disponíveis</b></font><b><font size="1" color="#47858B">:</font></b></td>
															</tr>
															<tr>
																<td height="30">
																<table border="0" cellpadding="0" cellspacing="5" width="100%">
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Acessos ao sistema BNQ</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<select size="1" name="bilhetagem" class="box">
																		<option value="#">Opções
																		</option>
																		<option>-----------
																		</option>
																		<option value="#">Exportar
																		</option>
																		<option value="#">Imprimir
																		</option>
																		<option value="#">Visualizar
																		</option>
																		</select></td>
																			</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Consumo de provas</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<select size="1" name="bilhetagem3" class="box">
																		<option value="#">Opções
																		</option>
																		<option>-----------
																		</option>
																		<option value="#">Exportar
																		</option>
																		<option value="#">Imprimir
																		</option>
																		<option value="#">Visualizar
																		</option>
																		</select></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Estatísticas de questões</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<select size="1" name="bilhetagem4" class="box">
																		<option value="#">Opções
																		</option>
																		<option>-----------
																		</option>
																		<option value="#">Exportar
																		</option>
																		<option value="#">Imprimir
																		</option>
																		<option value="#">Visualizar
																		</option>
																		</select></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	<tr>
																		<td width="100%">
																		<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
																			<tr>
																				<td class="texto2" height="30">
																				<p align="left" style="margin-left: 10px"><font color="#3672AC">Pagamentos</font></td>
																				<td class="texto2" height="30" bgcolor="#F0F0F0" width="96">
																				<p align="center">
																		<select size="1" name="bilhetagem5" class="box">
																		<option value="#">Opções
																		</option>
																		<option>-----------
																		</option>
																		<option value="#">Exportar
																		</option>
																		<option value="#">Imprimir
																		</option>
																		<option value="#">Visualizar
																		</option>
																		</select></td>
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
											</form>
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