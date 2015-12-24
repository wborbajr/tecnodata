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
 If Not Session ("Auth") = "Y" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ, strConn
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
<title>AGC -&nbsp; [ Configuração ]</title>
<link href="../../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../../controlpanel/include/scripts.js"></SCRIPT>
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
			<td bgcolor="#DAE6F3" height="37" class="texto1" width="435">
			<p align="left" style="margin-left: 10px; margin-right: 10px">
			<b>
			<font size="4" color="#A6C2E1">Configuração</font></b></td>
			<td bgcolor="#DAE6F3" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<select size="1" name="funcoes" class="box">
			<option selected value="#">--- Acesso rápido ---</option>
			<option value="#">-------------------------</option>
			</select></td>
		</tr>
		<tr>
			<td bgcolor="#DAE6F3" colspan="2">
			<p align="right">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
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
								<td height="10"></td>
							</tr>
							<tr>
								<td>
								<!--#include file="../include/menu.asp"-->
								</td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							</table>
					</div>
					</td>
					<td width="1" background="../../controlpanel/img/linha_vert.gif" valign="top">
					<img border="0" src="../../controlpanel/img/linha_vert.gif" width="1" height="4"></td>
					<td width="508" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="488">
							<tr>
								<td height="10">
								</td>
							</tr>
							<tr>
								<td>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F0F0F0">
									<tr>
										<td>
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
									</tr>
									<tr>
										<td class="texto" align="left">
										<p style="line-height: 180%; margin-left: 10px; margin-right: 10px; margin-top: 5px; margin-bottom: 10px">
										<b><font size="2" color="#3672AC">Dados 
										do sistemas \\</font></b></td>
									</tr>
									<tr>
										<td class="texto2">
										<p style="line-height: 145%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 5px">
										<font size="1">Abaixo estão descritas as 
										configurações da prova, quanto a 
										quantidade de questões, alternativas e 
										opção dispensável. Para alterar essas 
										configurações, você deve entrar em 
										contato com o administrador do sistema 
										BNQ.</font></td>
									</tr>
									<tr>
										<td height="20">&nbsp;</td>
									</tr>
									<tr>
										<td>
										<div align="center">
											<table border="0" cellpadding="0" cellspacing="1" width="468" bgcolor="#C0C0C0">
												<tr>
													<td bgcolor="#FFFFFF">
													<table border="0" cellpadding="0" cellspacing="3" width="100%">
														<tr>
															<td width="20%" class="texto2" height="20" align="center" valign="bottom">
															<p style="margin-bottom: 2px">
															<font color="#3672AC">
															<b>Questões</b></font></td>
															<td width="20%" class="texto2" height="20" align="center" valign="bottom">
															<p style="margin-bottom: 2px">
															<font color="#3672AC">
															<b>Alternativas</b></font></td>
															<td width="30%" class="texto2" height="20" align="center" valign="bottom">
															<p style="margin-bottom: 2px">
															<font color="#3672AC">
															<b>Dispensável</b></font></td>
															<td width="30%" class="texto2" height="20" align="center" valign="bottom">
															<p style="margin-bottom: 2px">
															<font color="#3672AC">
															<b>Sistema ativo</b></font></td>
														</tr>
														<tr>
															<td width="20%" bgcolor="#E6EEF7" class="texto2" height="40" align="center">
															<b>
															<font size="3" color="#808080">
															30</font></b></td>
															<td width="20%" bgcolor="#E6EEF7" class="texto2" height="40" align="center">
															<b>
															<font size="3" color="#808080">
															5</font></b></td>
															<td width="30%" bgcolor="#E6EEF7" class="texto2" height="40" align="center">
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td class="texto2" width="88">
																	<p style="margin-left: 5px">
																	<font color="#808080">
																	Aplicar 
																	questão 
																	dispensável?</font></td>
																	<td class="texto2">
																	<p align="center">
			<select size="1" name="dispensavel" class="box">
			<option value="Sim">S</option>
			<option value="Não">N</option>
			</select></td>
																</tr>
															</table>
															</td>
															<td width="30%" bgcolor="#E6EEF7" class="texto2" height="40" align="center">
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td class="texto2" width="88">
																	<p style="margin-left: 5px">
																	<font color="#808080">
																	Desligar o 
																	sistema BNQ?</font></td>
																	<td class="texto2">
																	<p align="center">
			<select size="1" name="sistema_ativo" class="box">
			<option value="Sim">S</option>
			<option value="Não">N</option>
			</select></td>
																</tr>
															</table>
															</td>
														</tr>
													</table>
													</td>
												</tr>
												</table>
										</div>
										</td>
									</tr>
									<tr>
										<td height="10"></td>
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