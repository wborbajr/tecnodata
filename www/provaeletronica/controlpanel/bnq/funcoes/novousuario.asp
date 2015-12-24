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

<!--#include file="../../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
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
     set TblCategorias = ObjConn.Execute ("SELECT DISTINCT categoria FROM questoes")
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE categoria = '"& Request("cboCategoria") &"'")
%>


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
			<table border="0" cellpadding="0" width="100%">
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
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="2" height="20" valign="top">
							<img border="0" src="../../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="2">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form method="post" name="novousuario" action="cadastra_novousuario.asp">
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<b><font size="1" color="#808080">BioID:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">Código de identificação biométrica</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												<input name="bioID" readonly type="text" class="box" size="30" maxlength="50" value="<%=Session("bioID")%>">
												</b></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<b><font size="1" color="#808080">Nome:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">Através do seu nome, você será 
						identificado no sistema, sempre que acessá-lo.</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												<input name="txtNome" type="text" class="box" size="55" maxlength="50">
												</b></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<font size="1" color="#808080"><b>CPF</b></font><b><font size="1" color="#808080">:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">O seu CPF nunca será divulgado, 
						somente você terá acesso a este dado. Através do seu 
						CPF, você poderá resgatar sua senha caso a esqueça.</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												<input name="txtCpf" type="text" class="box" size="25" maxlength="11"> 
												</b></font>
								<font color="#808080">Somente números</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px"><b>
						<font size="1" color="#808080">E-mail:</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px"><b>
								<font size="1" color="#808080">
												<input name="txtEmail" type="text" class="box" size="55" maxlength="50">
								</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<b><font size="1" color="#808080">Cargo:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">Através do seu cargo, será 
						definido seu nível hierárquico de acesso.</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px"><b>
								<font size="1" color="#808080">
												<input name="txtCargo" type="text" class="box" size="55" maxlength="50">
								</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="225">
						<p style="margin-left: 5px"><b>
						<font size="1" color="#808080">Cidade:</font></b></td>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="82">
						<p style="margin-left: 5px">
						<font size="1" color="#808080"><b>Estado</b></font><b><font size="1" color="#808080">:</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="225">
						<p style="margin-left: 5px"><b>
								<font size="1" color="#808080">
												<input name="txtCidade" type="text" class="box" size="41" maxlength="45">
								</font></b></td>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="82">
						<p style="margin-left: 5px">
						<select size="1" name="cboEstado" class="box">
						<option selected value="#">---</option>
						<option value="PR">PR</option>
						</select></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">
						<p style="margin-left: 5px"><b>
						<font size="1" color="#808080">Senha:</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" colspan="2">						<p style="margin-left: 5px"><b>						<font size="1" color="#808080">
										<input name="txtSenha" type="password" class="box" size="20" maxlength="20">
</font></b><font color="#808080">m&aacute;ximo 20 caracteres</font></td>
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
												<td class="texto2" height="25" width="34%" align="right">&nbsp;</td>
												<td class="texto2" height="25" width="66%">
												<p style="margin-right: 10px" align="right">
												<input type="submit" value="» | Cadastrar" name="btoCadastrar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" colspan="2">&nbsp;</td>
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