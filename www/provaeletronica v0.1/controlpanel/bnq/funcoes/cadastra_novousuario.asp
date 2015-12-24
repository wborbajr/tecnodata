<!--#include file="../../include/connectionmysql.asp"-->

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
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
			<table border="0" cellpadding="0" cellspacing="10" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="20"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2" valign="top">
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Acesso 
									Restrito</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Exclusivo para 
									funcionários da Tecnodata</font><p align="center" style="margin: 2px 20px">
									&nbsp;<p align="right" style="margin-left:40px; margin-right:20px; margin-top:50px; margin-bottom:2px">
									<font size="2" color="#1E1E1E"><b>Para 
									acessar o sistema de gerenciamento do BNQ, 
									preencha o formulário ao lado.</b></font><p align="right" style="margin-left:40px; margin-right:20px; margin-top:50px; margin-bottom:2px">
									<font size="2" color="#1E1E1E">À partir 
									desse ponto seu IP será monitorado:</font><p align="right" style="margin-left:40px; margin-right:20px; margin-top:2px; margin-bottom:2px">
									<font size="2" color="#CC0000"><%=Request.ServerVariables("REMOTE_ADDR")%> </font>
									</td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="1" height="1"></td>
									<td width="340" valign="top">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td height="20" valign="top">
							<img border="0" src="../../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
<%

   Dim StrVar

	Function Checa(StrVar)
		StrVar = CStr(StrVar)
		If IsEmpty(request.form(StrVar)) or request.form(StrVar)="" then
			
			response.write "<body topmargin='0' leftmargin='0'>"
			response.write "<table border='0' cellpadding='0' cellspacing='0' width='100%'>"
			response.write "<tr>"
			response.write "<td width='100%'>"
			response.write "<p align='center' style='margin-top: 10; margin-bottom: 10'><p align='center' style='margin-top: 15px; margin-bottom: 20px'><b><font color='#CC0000' face='Verdana' style='font-size: 16pt'>Erro de preenchimento</font></b></p></td>"
			response.write "</tr>"
			response.write "<tr>"
			response.write "<td width='100%'>"
			response.write "<p align='center'><font face='tahoma, verdana, arial'><font size='2' color='#000000'>O campo <b>" & StrVar & "</b> não foi preenchido. Favor </font><b><a href='javascript:history.go(-1)'><font size='2' color='#7379B5'>voltar</font></a></b><font size='2' color='#000000'> e preenchê-lo.</font></font></td>"
			response.write "</tr>"
			response.write "<td width='100%' height='10'></td>"
			response.write "<tr>"
			response.write "<td width='100%'></td>"
			response.write "</tr>"
			response.write "</table>"
			response.write "</body>"

			response.end
			passer = "False"
		Else
			Name = request.form(StrVar)
		End If	

	End Function
	
	Checa "txtNome"
	Checa "txtCpf"
	Checa "txtEmail"
	Checa "txtCargo"
	Checa "txtCidade"
	Checa "cboEstado"
	Checa "txtSenha"

     Dim txtNome, txtCpf, txtEmail, txtCargo, txtCidade, cboEstado, txtSenha, status
     
     	txtNome = Trim(Request.Form("txtNome"))
     	txtCpf = Trim(Request.Form("txtCpf"))
     	txtEmail = Trim(Request.Form("txtEmail"))
     	txtCargo = Trim(Request.Form("txtCargo"))
     	txtCidade = Trim(Request.Form("txtCidade"))
     	cboEstado = Trim(Request.Form("cboEstado"))
     	txtSenha = Trim(Request.Form("txtSenha"))
     
     Dim objConn, objRS, strQ, strConn
     Dim TblNovoUsuario, txtData, txtHora, txtIp
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     txtIp = Request.ServerVariables("REMOTE_ADDR")
     txtData = date
     txtHora = time
     set TblNovoUsuario = ObjConn.Execute ("INSERT INTO usuarios(txtNome,txtCpf,txtEmail,txtCargo,txtCidade,cboEstado,txtSenha,status,txtData,txtHora,txtIp) VALUES ('" & txtNome & "','" & txtCpf & "','" & txtEmail & "','" & txtCargo & "','" & txtCidade & "','" & cboEstado & "','" & txtSenha & "',' Analise ','" & txtData & "','" & txtHora & "','" & txtIp & "')")
%>
			<td height="20" class="texto1">
						<p style="margin-left: 10px; margin-top: 5px; margin-bottom: 10px">
						<b><font color="#808080"><%=txtNome%>,</font></b></p>
			<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 5px; line-height:150%; margin-right:10px">
						<b>
						<font color="#808080">Seu cadastro foi efetuado com 
						sucesso, porém, você ainda não possui acesso ao sistema.</font></b></p>
						<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 5px; line-height:150%; margin-right:10px">
						<font color="#808080">Seu cadastro será analisado pelo 
						administrador do sistema, cujo qual, irá lhe dar 
						permissões específicas. Assim que seu cadastro for 
						liberado, você será notificado através do e-mail: </font>
						<font color="#3672AC"><%=txtEmail%></font></p>
						<p style="margin-left: 10px; margin-top: 20px; margin-bottom: 5px; line-height:150%; margin-right:10px">
						<font color="#808080">Lembre-se dos seus dados de logon:</font></p>
						<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 5px; line-height:150%; margin-right:10px">
						<font color="#808080"><b>CPF:</b> <%=txtCpf%>&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Senha:</b> <%=txtSenha%></font></p>
			</td>
													</tr>
													<tr>
														<td height="10"></td>
													</tr>
													<tr>
														<td height="10">
														<div align="center">
															<table border="0" cellpadding="0" cellspacing="1" width="310" bgcolor="#CC3300">
																<tr>
																	<td bgcolor="#F0F0F0">
																	<table border="0" cellpadding="0" cellspacing="5" width="100%">
																		<tr>
																			<td bgcolor="#FFFFFF" class="texto1">
																			<p style="margin: 10px">
																			<font color="#CC3300">
																			<b>
																			<a href="bio/regist.asp">
																			<font color="#CC3300">
																			Clique 
																			aqui</font></a></b>, 
																			para 
																			cadastrar 
																			sua 
																			impressão 
																			digital.</font></td>
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
											</form>
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

</body>

</html>