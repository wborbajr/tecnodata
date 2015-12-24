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
 If Not Session ("bnq") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
 
     Dim objConn, objRS, strQ
     Dim TblDisciplinas, TblQuestoes
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "BNQ"
     ip = Request.ServerVariables("REMOTE_ADDR")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDisciplinas = ObjConn.Execute ("SELECT * FROM disciplinas")
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE codDisciplina = '"& Session("cboCategoria") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ BNQ ]</title>
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
			<p align="left" style="margin-left: 10px; margin-right: 10px">
			<font size="4" color="#C0C0C0"><b>BNQ -</b> Banco Nacional de 
			Questões</font></td>
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
			<td colspan="2">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
							<td>
							<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
								<tr>
									<td bgcolor="#FFFFFF" width="100%" valign="top">
									<table border="0" cellpadding="0" cellspacing="3" width="100%">
										<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F0F0F0">
												<tr>
													<td>
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td class="texto2" bgcolor="#F2F7F7">
																	<p style="margin: 10px">
																	<b>
																	<font size="1" color="#808080">
																	Selecione 
																	uma 
																	categoria 
																	para editar 
																	as questões:</font></b></td>
																	<td width="260" bgcolor="#F2F7F7">
																	<select size="1" name="cboCategoria" onChange="MM_jumpMenu('parent',this,0)" class="box">
																	<option value="Selecione uma categoria" selected>Selecione uma categoria</option>
																	<option>-------------------------</option>
																	<% While Not TblDisciplinas.EOF %>
																	<option value="../main.asp?url=bnq/&amp;cboCategoria=<%=TblDisciplinas("codDisciplina")%>"><%=TblDisciplinas("disciplina")%></option>
																	<%
																	TblDisciplinas.MoveNext
																	Wend
																	%>
																	</select></td>
																	</form>
																</tr>
															</table>
															</td>
														</tr>
													</table>
													</td>
												</tr>
												<tr>
													<td>
													<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="1" height="1"></td>
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
			<td colspan="2">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
							<td height="10"></td>
						</tr>
				<tr>
							<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td height="10">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td width="82">
											<a onclick="OpenWindow('../include/pop.asp?url=../bnq/funcoes/novacategoria.asp','PERFIL','342','290','no');" href="#"><img border="0" src="../img/bt_novacategoria.jpg" width="80" height="25"></a></td>
											<td width="82">
											<a href="questoes/novaquestao.asp">
											<img border="0" src="../img/bt_novaquestao.jpg" width="80" height="25"></a></td>
											<td width="82">
											<a onclick="OpenWindow('../include/pop.asp?url=../bnq/funcoes/novoperfil.asp','PERFIL','342','290','no');" href="#">
											<img border="0" src="../img/bt_novoperfil.jpg" width="80" height="25"></a></td>
											<td class="texto2" width="25">
											&nbsp;</td>
											<td class="texto2">
											&nbsp;</td>
											<td class="texto2" width="218">
											<div align="right">
											<table border="0" cellpadding="0" cellspacing="0" width="150">
											<form method="post" name="procurar" action="busca.asp">
												<tr>
													<td width="120">
													<input type="text" name="busca" size="22" class="box"></td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#C0C0C0" height="20" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
														<tr>
															<a href="javascript:document.procurar.submit()"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>»</b></font></td></a>
														</tr>
														</form>
													</table>
												</div>
												</td>
												</tr>
											</table>
											</div>
											</td>
										</tr>
									</table>
									</td>
								</tr>
							</table>
							</td>
						</tr>
				<tr>
							<td height="1"></td>
						</tr>
				<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td>
									<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0">
										<tr>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="72%">
											<p style="margin-left: 5px">
											<font size="1" color="#808080"><b>
											Pergunta</b></font></td>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="17%">
											<p style="margin-left: 5px">
											<font size="1" color="#808080"><b>
											Status</b></font></td>
											<td bgcolor="#F0F0F0" class="texto2" height="25" width="9%">
											<p style="margin-left: 5px" align="center">
											<b><font size="1" color="#808080">#</font></b></td>
										</tr>
										<% While Not TblQuestoes.EOF %>
										<tr>
										  <td bgcolor="#FFFFFF" class="texto2" width="72%"><p style="margin-left: 5px">
											<p style="margin-left: 5px; margin-top:5px; margin-bottom:5px; margin-right:10px">
											<font size="1">
											<%=TblQuestoes("pergunta")%>
											</font>
											</td>
											<td bgcolor="#FFFFFF" class="texto2" width="17%">
											<p style="margin-left: 5px">
											<font size="1"><%=TblQuestoes("status")%></font></td>
											<td bgcolor="#FFFFFF" class="texto2" width="9%">
										<div align="center">
										<table border="0" cellpadding="0" cellspacing="0" width="60" height="30">
											<tr>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="questoes/editar.asp?codquestao=<%=TblQuestoes("codQuestao")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>E</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="questoes/estatisticas.asp?codquestao=<%=TblQuestoes("codQuestao")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>S</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
											</tr>
										</table>
										</div>
											</td>
										</tr>
										<%
																	TblQuestoes.MoveNext
																	Wend
																	%>
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
			</td>
		</tr>
	</table>
</div>

<p>
																	&nbsp;</p>

</body>

</html>