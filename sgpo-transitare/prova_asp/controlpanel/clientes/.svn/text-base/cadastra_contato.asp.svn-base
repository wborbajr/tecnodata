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
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza, TblAcessos
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Confima cadastro de cliente"
     ip = Request.ServerVariables("REMOTE_ADDR")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & txtPagina & "','" & Date & "','" & Time & "','" & txtIP & "')")
     set TblAssunto    = ObjConn.Execute ("SELECT * FROM assuntos")
     set TblNatureza = ObjConn.Execute ("SELECT * FROM natureza")
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
									<img border="0" src="../../img/linha_bra.gif" width="4" height="4"></td>
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
						<table border="0" cellpadding="0" cellspacing="0" width="488">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td height="10">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="488" bgcolor="#F0F0F0">
							<tr>
								<td class="texto3" height="10" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
							</tr>
							<tr>
								<td height="10">
								<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="450">
							<tr>
								<td height="25" class="texto2">
								<b><font size="2" color="#808080">:: Cadastro de 
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
										<td class="texto2" height="30">
										<form name="edita_cadastro" action="atualiza_cadastro.asp">
										<p style="margin-left: 5px; margin-right:10px" align="right">
										<font size="1" color="#47858B"><b>
										Confirmação de cadastro :</b></font></td>
									</tr>
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
	
	Checa "tipo"
	Checa "razao_social"
	Checa "nome_fantasia"
	Checa "cnpj"
	Checa "cidade"
	Checa "uf"
	Checa "endereco"

    Dim tipo, id_detran, razao_social, nome_fantasia, cnpj, ins_estadual, cidade, uf, endereco, cep, telefone, email, site
     
     	tipo = Trim(Request.Form("tipo"))
     	id_detran = Trim(Request.Form("id_detran"))
     	razao_social = Trim(Request.Form("razao_social"))
     	nome_fantasia = Trim(Request.Form("nome_fantasia"))
     	cnpj = Trim(Request.Form("cnpj"))
     	ins_estadual = Trim(Request.Form("ins_estadual"))
     	cidade = Trim(Request.Form("cidade"))
     	uf = Trim(Request.Form("uf"))
     	endereco = Trim(Request.Form("endereco"))
     	cep = Trim(Request.Form("cep"))
     	telefone = Trim(Request.Form("telefone"))
     	email = Trim(Request.Form("email"))
     	site = Trim(Request.Form("site"))
        
     set TblCliente = ObjConn.Execute ("INSERT INTO detrans(tipo,id_detran,razao_social,nome_fantasia,cnpj,ins_estadual,cidade,uf,endereco,cep,telefone,email,site,data,hora,ip) VALUES ('" & tipo & "','" & id_detran & "','" & razao_social & "','" & nome_fantasia & "','" & cnpj & "','" & ins_estadual & "','" & cidade & "',' uf ','" & endereco & "','" & cep & "','" & telefone & "','" & email & "','" & site & "','" & data & "','" & hora & "','" & ip & "')")
     
%>
									<tr>
										<td bgcolor="#E3EEEE" class="texto2" height="30" width="100%">
								<p style="line-height: 140%; margin-left: 15px; margin-top: 2px">
								<font size="1" color="#47858B">O contato <b><%=nome%></b> foi cadastrado com 
								sucesso.</font></td>
									</tr>
									</table>
								</td>
							</tr>
							</table></div>
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
								<td height="10"></td>
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