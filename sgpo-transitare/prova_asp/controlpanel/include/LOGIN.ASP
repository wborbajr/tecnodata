<!--#include file="../include/connectionmysql.asp"-->

<%

 Dim StrVar, RSacesso

	Function Checa(StrVar)
		StrVar = CStr(StrVar)
		If IsEmpty(request.form(StrVar)) or request.form(StrVar)="" then
					
			response.write "<html>"
			response.write "<head>"
			response.write "<meta http-equiv='Content-Language' content='pt-br'>"
			response.write "<meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>"
			response.write "<title>TECNODATA  |  ACESSO RESTRITO</title>"
			response.write "<LINK REL=StyleSheet HREF='system/estilo.css' TYPE='text/css'>"
			response.write "</head>"
			response.write "<body topmargin='50' leftmargin='0' bgcolor='#000000'>"
			response.write "<div align='center'>"
			response.write "  <center>"
			response.write "  <table border='0' cellpadding='0' width='760' bgcolor='#FFFFFF' cellspacing='3'>"
			response.write "    <tr>"
			response.write "      <td width='350' valign='top' bgcolor='#0059C1' height='250'>"
			response.write "				<p style='margin-left: 15px; margin-top:10px; margin-bottom:10px'>"
			response.write "				<img border='0' src='../img/logomarca.jpg' width='44' height='100'><p style='margin-left: 15px; margin-top:2px; margin-bottom:2px'>"
			response.write "				<font color='#FFD700' face='Verdana'><b>"
			response.write "				<span style='font-size: 16pt'>Tecnodata</span></b></font><p style='margin-left: 15px; margin-top:2px; margin-bottom:2px'>"
			response.write "				<b><font size='1' color='#FFFFFF' face='Verdana'>SIAC - Sistema "
			response.write "				de Acompanhamento de Clientes&nbsp; -&nbsp; v 1</font></b></td>"
			response.write "      <td width='410'>"
			response.write "        <table border='0' cellpadding='0' cellspacing='0' width='100%' id='table1'>"
			response.write "						<tr>"
			response.write "										<td>"
			response.write "										<p style='margin: 10px'><b>"
			response.write "										<font face='Tahoma' style='font-size: 13pt' color='#CC0000'>"
			response.write "										Erro de preenchimento...</font></b></td>"
			response.write "						</tr>"
			response.write "						<tr>"
			response.write "										<td>"
			response.write "										<div align='center'>"
			response.write "														<table border='0' cellpadding='0' cellspacing='0' width='390' id='table2'>"
			response.write "																		<tr>"
			response.write "																						<td valign='top'>"
			response.write "																						<table border='0' cellpadding='0' cellspacing='0' width='390' id='table3'>"
			response.write "																										<tr>"
			response.write "																														<td class='texto2'>"
			response.write "																														<p style='line-height: 160%'><font face='Tahoma'><font size='2' color='#000000'>O campo </font><font size='2' color='#0059C1'><b>"& StrVar &"</b></font><font size='2' color='#000000'>, não foi preenchido. Favor <b><a href='javascript:history.go(-1)'><font color='#000000'><span style='text-decoration: none'>voltar</span></font></a></b> e preenchê-lo.</font></font></td>"
			response.write "																														</tr>"
			response.write "																										</tr>"
			response.write "																										</table>"
			response.write "																						</td>"
			response.write "																		</tr>"
			response.write "														</table>"
			response.write "										</div>"
			response.write "										</td>"
			response.write "						</tr>"
			response.write "						<tr>"
			response.write "										<td></td>"
			response.write "						</tr>"
			response.write "						</table>"
			response.write "        </td>"
			response.write "    </tr>"
			response.write "  </table>"
			response.write "  </center>"
			response.write "</div>"
			response.write "</body>"
			response.write "</html>"
			
			

			response.end
			passer = "False"
		Else
			Name = request.form(StrVar)
		End If	

	End Function
	
	Checa "txtNome"
	Checa "txtSenha"

 If Session ("LogonCount") >2 Then
    Response.Redirect "falha.asp?reacao=6"
 End if
 
 If Request.QueryString("mode") = "logon" And _
    (Trim(Request.Form("txtNome")) <> "" And _
    Trim(Request.Form("txtSenha")) <> "") Then
    
vtxtNome = (Trim(Request.Form("txtNome")))
vtxtSenha = Trim(Request.Form("txtSenha"))

Set objConn = Server.CreateObject ("ADODB.Connection")
objConn.ConnectionString = strConn
objConn.Open strConn

vSQL = "SELECT * FROM usuarios WHERE txtNome = '"& vtxtNome &"'"

Set RSacesso = objConn.Execute (vSQL)

If Not RSacesso.EOF Then

If vtxtSenha = Trim(RSAcesso.Fields("txtSenha")) Then

   Select Case Trim(RSacesso.Fields("Status"))
     Case "Usuario" :
           Session ("Auth") = "Y"
           Session ("coduser") = Trim(RSacesso.Fields("codUsuario"))
           Session ("Status") = Trim(RSacesso.Fields("Status"))
           Session ("txtNome") = Trim(RSacesso.Fields("txtNome"))
           Session ("cadastrar") = Trim(RSacesso.Fields("cadastrar"))
           Session ("excluir") = Trim(RSacesso.Fields("excluir"))
           Session ("editar") = Trim(RSacesso.Fields("editar"))
           Session ("bilhetagem") = Trim(RSacesso.Fields("bilhetagem"))
           Session ("benchmark") = Trim(RSacesso.Fields("benchmark"))
           Session ("bnq") = Trim(RSacesso.Fields("bnq"))
           Session ("clientes") = Trim(RSacesso.Fields("clientes"))
           Session ("usuarios") = Trim(RSacesso.Fields("usuarios"))
           Session ("painel_cliente") = Trim(RSacesso.Fields("painel_cliente"))
           Response.Redirect "../"
     Case "Admin" :
           Session ("Auth") = "Y"
           Session ("Coduser") = Trim(RSacesso.Fields("codUsuario"))
           Session ("Status") = Trim(RSacesso.Fields("Status"))
           Session ("txtNome") = Trim(RSacesso.Fields("txtNome"))
           Session ("cadastrar") = Trim(RSacesso.Fields("cadastrar"))
           Session ("excluir") = Trim(RSacesso.Fields("excluir"))
           Session ("editar") = Trim(RSacesso.Fields("editar"))
           Session ("bilhetagem") = Trim(RSacesso.Fields("bilhetagem"))
           Session ("benchmark") = Trim(RSacesso.Fields("benchmark"))
           Session ("bnq") = Trim(RSacesso.Fields("bnq"))
           Session ("clientes") = Trim(RSacesso.Fields("clientes"))
           Session ("usuarios") = Trim(RSacesso.Fields("usuarios"))
           Session ("manutencao") = Trim(RSacesso.Fields("manutencao"))
           Session ("painel_cliente") = Trim(RSacesso.Fields("painel_cliente"))
           Response.Redirect "../"
     Case "Analise" :
           Session ("Analise") = "Y"
           Session ("Coduser") = Trim(RSacesso.Fields("codUsuario"))
           Session ("Status") = Trim(RSacesso.Fields("Status"))
           Session ("txtNome") = Trim(RSacesso.Fields("txtNome"))
           Response.Redirect "falha.asp?reacao=2"
           
     End Select
     
     Response.End
     
   End If
   
   Session ("LogonCount") = Session ("LogonCount") +1
   
End if
End if

%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
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

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" width="709" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="60"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2">
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Acesso 
									Restrito</b></font></p>
									<p align="center" style="margin-top:2px; margin-bottom:2px">
									<font size="2" color="#CC0000">Exclusivo para 
									funcionários da Tecnodata<br><%=Request.ServerVariables("REMOTE_ADDR")%></font></td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../bnq/img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td height="20" valign="top">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form method="post" name="novousuario" action="../bnq/funcoes/cadastra_novousuario.asp">
					<tr>
						<td class="texto1" height="25" bgcolor="#F0F0F0">
						<p style="line-height: 150%; margin-left: 5px; margin-top: 2px; margin-bottom: 5px" align="center">
						<b><font size="2" color="#CC3300">Não foi possível 
						efetuar seu logon no sistema.</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p align="center"><u><b><font size="1" color="#3672AC">
						<a href="javascript:history.go(-1)">
						<font color="#3672AC">Tentar novamente</font></a></font></b></u></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px" align="center">
								<font size="1" color="#808080">
												<b>
												&nbsp;</b></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px" align="center">
						<font color="#808080">Preste atenção ao digitar seus 
						dados. Seu acesso será bloqueado na terceira tentativa 
						inválida.</font></td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													</table>
												</td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="20" width="100%" align="right">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="20">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<p align="left">&nbsp;</p>

</body>

</html>