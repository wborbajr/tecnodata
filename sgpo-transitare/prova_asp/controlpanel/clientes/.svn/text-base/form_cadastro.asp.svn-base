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
 If Not Session ("clientes") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if

 If Not Session ("cadastrar") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblDetrans
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Novo Detran/Ciretan"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblDetrans    = ObjConn.Execute ("SELECT * FROM detrans WHERE tipo = 'Detran'")
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
						<table border="0" cellpadding="0" cellspacing="0" width="488" bgcolor="#F0F0F0">
							<tr>
								<td class="texto3" height="10" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="450">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">:: Editar 
								Detran/Ciretran</font></b></td>
							</tr>
							<tr>
								<td height="1" class="texto2" background="../img/linha_hori.gif">
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="2">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>Tipo 
										de cadastro :</b></font></td>
									</tr>
									<tr>
									<form method="post" name="cadastro" action="confirma_cadastro.asp">
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30">
																				<p align="center">
														<input type="radio" value="Detran" name="tipo"></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="420">
																				<p align="left" style="margin-left: 7px">
														<font size="1" color="#3672AC">
														Cadastrar novo Detran</font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30">
										<p align="center">
														<input type="radio" value="Ciretran" name="tipo"></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="420">
																				<table border="0" cellpadding="0" cellspacing="0" width="100%">
																					<tr>
																						<td class="texto2" width="50%">
																				<p align="left" style="margin-left: 7px">
														<font size="1" color="#3672AC">
														Cadastrar nova Ciretran</font></td>
																						<td class="texto2" width="50%">
			<select size="1" name="id_detran" class="box">
			<option selected value="#">--- Selecione um Detran ---</option>
			<option value="#">-------------------------</option>
			<% While Not TblDetrans.EOF %>
			<option value="<%=TblDetrans("codCliente")%>"><%=TblDetrans("nome_fantasia")%></option>
			<%
			TblDetrans.MoveNext
			Wend
			%>
			</select></td>
																					</tr>
																				</table>
										</td>
									</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								&nbsp;</td>
							</tr>
							<tr>
								<td height="20" class="texto2">
								<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
									<tr>
										<td class="texto2" height="30" colspan="2">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Informações cadastrais :</b></font></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
																				<p align="left" style="margin-left: 5px"><font size="1" color="#47858B">Razão Social:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 5px">
														<input type="text" name="razao_social" size="60" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Nome 
										fantasia:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="nome_fantasia" size="40" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">CNPJ:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cnpj" size="25" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Inscr. 
										Estadual:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="ins_estadual" size="25" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Cidade:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cidade" size="40" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Estado:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
												<select size="1" name="uf" onBlur="this.className='box';" onFocus="this.className='boxon';" class="box" style="width: 200">
												<option selected>--- Selecione um estado ---</option>
                            					<option>---------------</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernanbuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
												</select></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Endereço:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="endereco" size="60" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Cep:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="cep" size="15" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Telefone:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="telefone" size="25" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">E-mail:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="email" size="40" class="box"></td>
									</tr>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="30%">
										<p align="left" style="margin-left: 5px">
										<font size="1" color="#47858B">Site:</font></td>
										<td bgcolor="#F0F0F0" class="texto2" height="30" width="70%">
																				<p align="left" style="margin-left: 7px">
			<input type="text" name="site" size="40" class="box"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="10" class="texto2">
								</td>
							</tr>
							</table>
								</div>
								</td>
							</tr>
							<tr>
								<td>
								<p align="right" style="margin-right: 18px">
												<input type="submit" value="» | Cadastrar" name="btoCadastrar" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
												<input type="reset" value="x | Cancelar" name="btoCancelar" style="font-size: 9px; font-family: Verdana; font-weight: bold">
												</td>
							 </form>
							</tr>
							<tr>
								<td height="10">
								</td>
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