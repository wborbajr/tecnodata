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

<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
 If Not Session ("Status") = "Cliente" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ, strConn
     Dim TblAcessos, TblDetrans, TblCandidatosToday, TblCandidatosTomorrow
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
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans WHERE id = '"& Session("codCliente") &"' AND tipo = 'Detran'")
     set TblCandidatosToday = ObjConn.Execute ("SELECT * FROM candidatos WHERE codCliente = '"& Session("codCliente") &"' AND dataProva = '"& date &"'")
     set TblCandidatosTomorrow = ObjConn.Execute ("SELECT * FROM candidatos WHERE codCliente = '"& Session("codCliente") &"' AND dataProva = '"& DateAdd("d",1,date) &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>AGC -&nbsp; [ Candidatos ]</title>
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
			<font size="4" color="#A6C2E1">Candidatos</font></b></td>
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
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table8">
				<tr>
					<td width="191">
						<table border="0" cellpadding="0" cellspacing="0" width="180" id="table9">
							<tr>
								<td>
								<table border="1" cellpadding="0" cellspacing="0" width="100%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" bgcolor="#F0F0F0" height="25" id="table10">
									<tr>
										<td style="Cursor: hand" onMouseOver="this.style.background='#F2F7F7'" onMouseOut="this.style.background='#F0F0F0'" class="texto2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table11">
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="0" width="10" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" height="10" id="table12">
														<tr>
															<td bgcolor="#FFFFFF">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="1" height="1"></td>
														</tr>
													</table>
												</div>
												</td>
												<td width="155" class="texto2">
												<font color="#AAAAAA"><b>
												<font size="1">Exportar 
												candidatos</font></b></font></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" width="180" id="table16">
							<tr>
								<td>
								<table border="1" cellpadding="0" cellspacing="0" width="100%" bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" bgcolor="#F0F0F0" height="25" id="table20">
									<tr>
										<td style="Cursor: hand" onMouseOver="this.style.background='#F2F7F7'" onMouseOut="this.style.background='#F0F0F0'" class="texto2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table21">
											<tr>
												<td class="texto2">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="0" width="10" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" height="10" id="table22">
														<tr>
															<td bgcolor="#FFFFFF">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="1" height="1"></td>
														</tr>
													</table>
												</div>
												</td>
												<td width="155" class="texto2">
												<font size="1" color="#AAAAAA">
												<b>Im</b></font><font color="#AAAAAA"><b><font size="1">portar candidatos</font></b></font></td>
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
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table1">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="60%">
													<p style="margin-left: 10px" align="left">
													<font size="1" color="#808080">
													<b>Candidatos com prova 
													agendada para hoje</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="40%">
													<p style="margin-left: 10px">
													<font size="1" color="#808080">
													<b>Previsão para amanhã</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" width="60%" class="texto2" align="center" valign="top">
															<table border="0" cellpadding="0" cellspacing="10" width="100%" id="table2">
																<tr>
																	<td valign="top">
																	<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table3" bgcolor="#C0C0C0">
																		<tr>
																			<td bgcolor="#F2F7F7" height="25" class="texto2">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Nome</font></td>
																			<td bgcolor="#F2F7F7" height="25" class="texto2" width="127">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Renach</font></td>
																			<td bgcolor="#F2F7F7" height="25" class="texto2" width="53">
																			<p align="center">
																			<font size="1" color="#47858B">
																			#</font></td>
																		</tr>
																		<tr>
																		<% if TblCandidatosToday.EOF = true then %>
																		<b>
																		<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem provas agendadas para hoje -</font></b><font size="2">
																		<%
																		if Not TblCandidatosToday.EOF then TblCandidatosToday.MoveFirst
																		End if
																		While Not TblCandidatosToday.EOF
																		%>
																			<td bgcolor="#FFFFFF" class="texto2" height="22">
																			<p style="margin-left: 5px">
																			<font size="1">
																			<%=TblCandidatosToday("Nome")%></font></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="22" width="127">
																			<p style="margin-left: 5px">
																			<font size="1">
																			<%=TblCandidatosToday("renach")%></font></td>
																			<td bgcolor="#FFFFFF" class="texto2" height="22" width="53">
																			<p align="center">
																			<img border="0" src="../img/img_geraprova.gif"></td>
																			<%
																	TblCandidatosToday.MoveNext
																	Wend
																	%>
																		</tr>
																	</table>
																	</td>
																</tr>
															</table>
													</td>
													<td bgcolor="#FFFFFF" width="40%" align="center" class="texto2" valign="top">
															<table border="0" cellpadding="0" cellspacing="10" width="100%" id="table6">
																<tr>
																	<td valign="top">
																	<table border="0" cellpadding="0" cellspacing="1" width="100%" id="table7" bgcolor="#C0C0C0">
																		<tr>
																			<td bgcolor="#F2F7F7" height="25" class="texto2">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Nome</font></td>
																			<td bgcolor="#F2F7F7" height="25" class="texto2" width="109">
																			<p style="margin-left: 5px">
																			<font size="1" color="#47858B">
																			Renach</font></td>
																		</tr>
																		<tr>
																		<% if TblCandidatosTomorrow.EOF = true then %>
																		<b>
																		<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem provas agendadas para amanhã -</font></b><font size="2">
																		<%
																		if Not TblCandidatosTomorrow.EOF then TblCandidatosTomorrow.MoveFirst
																		End if
																		While Not TblCandidatosTomorrow.EOF
																		%>
																			<td bgcolor="#FFFFFF" class="texto2" height="20">
																			<font size="1">
																			<p style="margin-left: 5px">
																			<%=TblCandidatosTomorrow("nome")%></font></td>
																			<td bgcolor="#FFFFFF" class="texto2" width="109" height="20">
																			<p style="margin-left: 5px">
																			<font size="1">
																			<%=TblCandidatosTomorrow("renach")%></font></td>
																			<%
																			TblCandidatosTomorrow.MoveNext
																			Wend
																			%>
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
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>