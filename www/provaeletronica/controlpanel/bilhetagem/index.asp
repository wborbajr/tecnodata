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
 If Not Session ("bilhetagem") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Bilhetagem"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblCategorias = ObjConn.Execute ("SELECT DISTINCT codDisciplina FROM questoes")
     set TblAssunto    = ObjConn.Execute ("SELECT * FROM assuntos")
     set TblNatureza = ObjConn.Execute ("SELECT * FROM natureza")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Bilhetagem ]</title>
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
			<font size="4" color="#C0C0C0">Bilhetagem</font></b></td>
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
					<td width="200">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="180">
							<tr>
								<td height="1"></td>
							</tr>
							<tr>
								<td height="30" class="texto2">
								<p style="margin-left: 5px">
								<a class="menult" href="#a">&#8226<b> 
								Cadastrar Detran</b></a></td>
							</tr>
							<tr>
								<td height="1" background="../img/linha_hori.gif"></td>
							</tr>
							<tr>
								<td height="30" class="texto2">
								<p style="margin-left: 5px">
								<a class="menult" href="#a">&#8226<b> 
								Cadastrar Ciretran</b></a></td>
							</tr>
							<tr>
								<td height="1" background="../img/linha_hori.gif"></td>
							</tr>
							<tr>
								<td height="30" class="texto2">
								<p style="margin-left: 5px">
								<a class="menult" href="#a">&#8226<b> 
								Adicionar contato - Detran</b></a></td>
							</tr>
							<tr>
								<td height="1" background="../img/linha_hori.gif"></td>
							</tr>
							<tr>
								<td height="30" class="texto2">
								<p style="margin-left: 5px">
								<a class="menult" href="#a">&#8226<b> 
								Adicionar contato - Ciretran</b></a></td>
							</tr>
							<tr>
								<td height="1" background="../img/linha_hori.gif"></td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							<tr>
								<td height="10">
								<table border="1" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" bordercolorlight="#F0F0F0" bordercolordark="#FFFFFF">
									<tr>
										<td bgcolor="#FFFFFF" class="texto2" height="25">
										<p style="margin-left: 5px"><b>
										<font size="1" color="#B9B9B9">Busca 
										rápida</font></b></td>
									</tr>
									<tr>
										<td bgcolor="#F0F0F0" class="texto2" height="25">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td>
												<p style="margin: 5px">
												<select size="1" name="detran" class="box" style="width: 160">
												<option selected value="#">: Selecione um Detran
												</option>
												</select></td>
											</tr>
											<tr>
												<td>
												<p style="margin-left:5px; margin-right:5px; margin-bottom:5px">
												<select size="1" name="detran0" class="box" style="width: 160">
												<option selected value="#">: Selecione uma Ciretran
												</option>
												</select></td>
											</tr>
											<tr>
												<td>
												<p style="margin-left:5px; margin-right:5px; margin-bottom:5px">
												<select size="1" name="filtro" class="box" style="width: 160">
												<option selected value="#">: Selecione um filtro
												</option>
												</select></td>
											</tr>
											<tr>
												<td>
												<p style="margin-left:5px; margin-right:5px; margin-bottom:5px">
												<input type="text" name="T1" size="20" style="width: 160" class="box"></td>
											</tr>
											<tr>
												<td>
												<p style="margin: 5px" align="right">
												<input type="submit" value="» | Buscar" name="btoProcurar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td height="10"></td>
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
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
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