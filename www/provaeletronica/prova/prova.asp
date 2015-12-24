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

<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->

<%

     Dim objConn, objRS, strQ, strConn
     Dim TblCategorias, TblQuestoes, TblAssunto, TblListaAssunto, TblListaNatureza, TblNatureza, codNatureza, codAssunto
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans WHERE id = '14'")
     Session("cboCategoria") = Request("cboCategoria")
     
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Ambiente de avaliação ]</title>
<link href="../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../controlpanel/include/scripts.js"></SCRIPT>
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

<body bgcolor="#E0EBF5" topmargin="60">

<div align="center">

<table border="0" cellpadding="0" cellspacing="1" width="90%" bgcolor="#BBD3EA">
	<tr>
		<td width="20%" bgcolor="#E0EBF5" height="60">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="60">
			<tr>
				<td bgcolor="#EBF1FA">
				<p align="center"><b>
				<font face="Arial" size="6" color="#CFE0EF">12:48</font></b></td>
			</tr>
		</table>
		</td>
		<td width="80%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="60">
			<tr>
				<td bgcolor="#EBF1FA" width="55%">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" height="15">
							<p style="margin-top: 5px"><b>
							<font size="1" color="#BBD2E8">Nome:</font></b></td>
						</tr>
						<tr>
							<td height="30">
				<p align="left"><b><font face="Arial" color="#99BDDD">Fulano de 
				tal</font></b></td>
						</tr>
					</table>
				</div>
				</td>
				<td bgcolor="#EBF1FA" width="25%">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" height="15">
							<p style="margin-top: 5px">
							<font size="1" color="#BBD2E8"><b>RENACH</b></font><b><font size="1" color="#BBD2E8">:</font></b></td>
						</tr>
						<tr>
							<td height="30">
				<p align="left"><b><font face="Arial" color="#99BDDD">
				1254587844897</font></b></td>
						</tr>
					</table>
				</div>
				</td>
				<td bgcolor="#EBF1FA" width="20%">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" height="15">
							<p style="margin-top: 5px">
							<font size="1" color="#BBD2E8"><b>Código da prova</b></font><b><font size="1" color="#BBD2E8">:</font></b></td>
						</tr>
						<tr>
							<td height="30">
				<p align="left"><b><font face="Arial" color="#99BDDD">125458</font></b></td>
						</tr>
					</table>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="20%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#CFE0EF">
				<p align="center"><b>
				<font face="Arial" size="7" color="#E0EBF5">Logo</font></b></td>
			</tr>
		</table>
		</td>
		<td valign="top" width="80%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#FFFFFF">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" colspan="3" height="25">
							<p style="margin-left: 5px"><font size="1">Pergunta: 
							01</font></td>
						</tr>
						<tr>
							<td class="texto2" height="5" colspan="3" bgcolor="#CFE0EF"></td>
						</tr>
						<tr>
							<td class="texto2" colspan="3" height="1"></td>
						</tr>
						<tr>
							<td class="texto2" width="168" bgcolor="#8BC6E2"></td>
							<td class="texto2" width="212" bgcolor="#8BC6E2"></td>
							<td class="texto2" width="248"></td>
						</tr>
						<tr>
							<td class="texto2" colspan="3" height="20"></td>
						</tr>
						<tr>
							<td class="texto1" colspan="3">
							<p align="left" style="margin-left: 5px">
															<span style="font-weight: 700; font-size: 11pt">
															A diferença entre as 
															placas R-6a e R-6c 
															é:</span></td>
						</tr>
					</table>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="20%" bgcolor="#E0EBF5" height="130" valign="top">
		<table border="0" cellpadding="0" cellspacing="5" width="100%">
			<tr>
											<td class="texto1">
											<p style="margin-left: 10px; margin-top: 5px; margin-bottom: 10px">
											<font color="#3672AC"><b>Instruções</b></font></td>
										</tr>
			<tr>
											<td class="texto2">
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>1.)</b> Leia atentamente a 
											questão.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>2.)</b> Clique com o mouse sobre 
											a alternativa que considera correta 
											ou digite a letra correspondente no 
											espaço indicado.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>3.)</b> É possível pular uma 
											questão e voltar para respondê-la 
											depois, clicando nas setas ou no 
											número corresponder a questão.</p>
											<p style="line-height: 150%; margin-left: 10px; margin-right: 10px; margin-top: 2px; margin-bottom: 7px">
											<b>4.)</b> O gabarito mostra 
											automaticamente as questão que já 
											foram respondidas.</td>
										</tr>
		</table>
		</td>
		<td valign="top" width="80%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#EBF1FA">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" height="20">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="texto2">
							<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#EBF1FA">
								<tr>
									<td height="30" width="30" align="center" class="texto2" bgcolor="#CFE0EF">
									<font color="#3672AC"><b>A</b></font></td>
									<td height="30" class="texto1" bgcolor="#FFFFFF">
									<p style="margin: 5px 10px">A R-6a não 
																	prevê multa, 
																	enquanto que 
																	a R6-c 
																	prevê.</td>
									<td height="30" class="texto1" bgcolor="#FFFFFF" width="30" align="center">
									<input type="radio" value="A" name="questao"></td>
								</tr>
								<tr>
									<td height="30" width="30" align="center" class="texto2" bgcolor="#CFE0EF">
									<font color="#3672AC"><b>B</b></font></td>
									<td height="30" class="texto1" bgcolor="#FFFFFF">
									<p style="margin: 5px 10px">A R-6a não 
																	prevê multa, 
																	enquanto que 
																	a R6-c 
																	prevê.</td>
									<td height="30" class="texto1" bgcolor="#FFFFFF" width="30" align="center">
									<input type="radio" value="B" name="questao"></td>
								</tr>
								<tr>
									<td height="30" width="30" align="center" class="texto2" bgcolor="#CFE0EF">
									<font color="#3672AC"><b>C</b></font></td>
									<td height="30" class="texto1" bgcolor="#FFFFFF">
									<p style="margin: 5px 10px">A R-6a não 
																	prevê multa, 
																	enquanto que 
																	a R6-c 
																	prevê.</td>
									<td height="30" class="texto1" bgcolor="#FFFFFF" width="30" align="center">
									<input type="radio" value="C" name="questao"></td>
								</tr>
								<tr>
									<td height="30" width="30" align="center" class="texto2" bgcolor="#CFE0EF">
									<font color="#3672AC"><b>D</b></font></td>
									<td height="30" class="texto1" bgcolor="#FFFFFF">
									<p style="margin: 5px 10px">A R-6a não 
																	prevê multa, 
																	enquanto que 
																	a R6-c 
																	prevê.</td>
									<td height="30" class="texto1" bgcolor="#FFFFFF" width="30" align="center">
									<input type="radio" value="D" name="questao"></td>
								</tr>
								<tr>
									<td height="30" width="30" align="center" class="texto2" bgcolor="#CFE0EF">
									<font color="#3672AC"><b>E</b></font></td>
									<td height="30" class="texto1" bgcolor="#FFFFFF">
									<p style="margin: 5px 10px">A R-6a não 
																	prevê multa, 
																	enquanto que 
																	a R6-c 
																	prevê.</td>
									<td height="30" class="texto1" bgcolor="#FFFFFF" width="30" align="center">
									<input type="radio" value="E" name="questao"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td class="texto2" height="10">
							</td>
						</tr>
						<tr>
							<td class="texto2">
							<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#EBF1FA" height="30">
								<tr>
									<td width="70%">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
							<td class="texto2" width="40%">
							<p align="left" style="margin-left: 5px">Informe a 
							opção desejada</td>
							<td class="texto2" width="19%">
														<p align="left">
														<input type="text" name="codcliente" size="3" class="box" style="height: 40; text-align:center; font-size:14pt; font-family:Verdana; font-weight:bold; color:#1E1E1E; padding-top:9px" maxlength="14"></td>
							<td class="texto2" width="41%">
												<input type="submit" value="OK" name="btoGeraProva" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
										</tr>
									</table>
									</td>
									<td width="30%">
									<p align="center">
												<input type="submit" value="« | Voltar" name="btoVoltar" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
												<input type="submit" value="Avançar | »" name="btoAvancar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td class="texto2">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="texto2" height="20">
							&nbsp;</td>
						</tr>
						</table>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="100%" bgcolor="#E0EBF5" height="40" colspan="2">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
								
									<td height="20">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td>
								<%
								Dim x
								for x = 1 to TblDetrans("questoes")
								%>
							<td>
							
							<table border="0" cellpadding="0" cellspacing="1" width="100%">
								
								<tr>
								
									<td height="20">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="15" bgcolor="#3672AC" height="15" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															&nbsp;</td>
														</tr>
													</table>
												</div>
												</td>
									</tr>
									
								<tr>
									<td class="texto2" height="15">
									<p align="center"><b><%=x%></b></td>
									
								</tr>
									
							</table>
							</td>
						<% next %>
									</td>
								</tr>
							</table>
												</td>
									</tr>
		</table>
		</td>
	</tr>
</table>

</div>

</body>

</html>