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
     Dim TblAcessos, TblDetrans, TblCandidatos
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
     set TblCandidatos = ObjConn.Execute ("SELECT * FROM candidatos WHERE codCliente = '"& Session("codCliente") &"' AND diaProva = '"& day(now) &"' AND mesProva = '"& month(now) &"' AND anoProva = '"& year(now) &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>AGC -&nbsp; [ Prova ]</title>
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
			<td bgcolor="#FFE16A" height="37" class="texto1" width="435">
			<p align="left" style="margin-left: 10px; margin-right: 10px; margin-top:5px">
			<b><font size="4" color="#E8B900">Prova eletrônica</font></b></td>
			<td bgcolor="#FFE16A" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			<select size="1" name="funcoes" class="box">
			<option selected value="#">--- Acesso rápido ---</option>
			<option value="#">-------------------------</option>
			</select></td>
		</tr>
		<tr>
			<td bgcolor="#FFE16A" colspan="2">
			<p align="right">
									<img border="0" src="../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="689">
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
										<td height="10"></td>
									</tr>
									<tr>
										<td height="10">
								<div align="center">
								<table border="0" cellpadding="0" cellspacing="1" width="670" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="4">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#000000"><b>
										Candidatos agendados para hoje :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E6EEF7" class="texto2" height="30" width="12%" align="center">
																				<font color="#3672AC" size="1"><b>RENACH</b></font></td>
										<td bgcolor="#E6EEF7" class="texto2" height="30" width="33%">
																				<p style="margin-left: 5px"><font color="#3672AC" size="1"><b>Nome</b></font></td>
										<td bgcolor="#E6EEF7" class="texto2" height="30" width="10%">
																				<p style="margin-left: 5px"><font color="#3672AC" size="1"><b>Hora</b></font></td>
										<td bgcolor="#E6EEF7" class="texto2" height="30" width="22%">
																				<p style="margin-left: 5px"><font size="1" color="#3672AC"><b>Status da prova: Candidato</b></font></td>
									</tr>
									<% if TblCandidatos.EOF = true then %>
									<b>
									<font size="2" face="verdana, tahoma, arial" color="#CC0000">- Não existem provas agendadas para hoje -</font></b><font size="2">
									<%
									if Not TblCandidatos.EOF then TblCandidatos.MoveFirst
									End if
									While Not TblCandidatos.EOF
									%>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="12%" align="center">
										<font size="1" color="#808080"><%=TblCandidatos("renach")%></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="33%">
										<p style="margin-left: 5px">
										<font color="#808080" size="1"><%=TblCandidatos("Nome")%></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="10%">
										<p style="margin-left: 5px">
										<font size="1" color="#808080"><%=TblCandidatos("horaprova")%></font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="22%">
										<p style="margin-left: 5px">
										<font size="1" color="#808080">
										<%
										Select case TblCandidatos("status")
											Case "Agendado"
												Response.Write "<a href='gerar.asp?codcandidato="&TblCandidatos("codCandidato")&"&codcliente="&TblCandidatos("codcliente")&"' class='linktx2'>Gerar</a>"
											Case "Em avaliação"
												Response.Write "Prova gerada"
											Case "Reprovado"
												Response.Write "Prova finalizada"
											Case "Aprovado"
												Response.Write "Prova finalizada"
											Case "Prova gerada"
												Response.Write "Prova gerada"
										End Select
										%>
										</font></td>
										</font>
									</tr>
									<font size="2">
									<%
									TblCandidatos.MoveNext
									Wend
									%>
									</table>
								</div>
										</td>
									</tr>
									<tr>
										<td height="10">&nbsp;</td>
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
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>