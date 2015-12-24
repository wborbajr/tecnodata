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
     Dim TblDetrans, TblUpdateDetrans, TblAcessos
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
			<td height="10"><!--#include file="topo.asp"--></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
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
								<td>
								<table border="1" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="40">
										<p align="center">
										<font size="1" color="#A5A5A5"><b>#</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="40">
										<p align="center"><b>
										<font size="1" color="#A5A5A5">Q</font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="40">
										<p align="center"><b>
										<font size="1" color="#A5A5A5">A</font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="185">
										<p style="margin-left: 5px"><b>
										<font size="1" color="#A5A5A5">Cliente</font></b></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="35" align="center">
										<font size="1" color="#A5A5A5"><b>UF</b></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="25" width="148">
										<p align="center"><b>
										<font size="1" color="#A5A5A5">Opções</font></b></td>
									</tr>
									<% While Not TblDetrans.EOF %>
									<tr>
										<td bgcolor="#FFFFFF" width="40" class="texto2" height="30">
										<table border="0" cellpadding="0" cellspacing="3" width="100%" height="30">
											<tr>
												<td bgcolor="#E0EBF5" class="texto2">
												<p align="center">
												<font size="1" color="#3672AC">
												<b>
												<%
												Select Case TblDetrans("status")
												   Case "Permitir"
												     Response.Write "P"
												   Case "Bloquear"
												     Response.Write "B"
												End Select
												%>
												</b></font></td>
											</tr>
										</table>
										</td>
										<td bgcolor="#FFFFFF" width="40" class="texto2" height="30">
										<table border="0" cellpadding="0" cellspacing="3" width="100%" height="30">
											<tr>
												<td bgcolor="#E0EBF5" class="texto2">
												<p align="center">
												<font size="1" color="#3672AC">
												<b><%=TblDetrans("questoes")%></b></font></td>
											</tr>
										</table>
										</td>
										<td bgcolor="#FFFFFF" width="40" class="texto2" height="30">
										<table border="0" cellpadding="0" cellspacing="3" width="100%" height="30">
											<tr>
												<td bgcolor="#E0EBF5" class="texto2">
												<p align="center">
												<font size="1" color="#3672AC">
												<b><%=TblDetrans("alternativas")%></b></font></td>
											</tr>
										</table>
										</td>
										<td bgcolor="#FFFFFF" width="185" class="texto2" height="30">
										<p style="margin-left: 5px">
										<font size="1"><%=TblDetrans("nome_fantasia")%></font></td>
										<td bgcolor="#FFFFFF" width="35" align="center" class="texto2" height="30">
										<font size="1">
										<%=TblDetrans("uf")%></font></td>
										<td bgcolor="#FFFFFF" width="148" class="texto2" height="30">
										<div align="center">
										<table border="0" cellpadding="0" cellspacing="0" width="140">
											<tr>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="editar.asp?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
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
															<a href="<%=Request.ServerVariables("SCRIPT_NAME")%>?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" onClick="return confirm('Deseja excluir este cliente?')" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>X</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="bilhetagem.asp?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>$</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="ciretrans.asp?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>C</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="relatorios.asp?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>R</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF">
														<tr>
															<a href="parametros.asp?ID=<%=TblDetrans("id")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>P</b></font></td></a>
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
										TblDetrans.MoveNext
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
		</table>
</div>

</body>

</html>