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

<!--#include file="../../include/checalogin.asp"-->
<!--#include file="../../include/connectionmysql.asp"-->
<!--#include file="../../include/adovbs.inc"-->

<%

     Dim objConn, objRS, strQ
     Dim TblCategorias, TblQuestoes, TblAssunto, TblListaAssunto, TblListaNatureza, TblNatureza, codNatureza, codAssunto
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Cadastro de nova questão ("& Session("codUser") &")"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")

%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Cadastra questão ]</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../../include/scripts.js"></SCRIPT>
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
	<table border="0" width="709" cellpadding="0" cellspacing="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
							<td>
							<!--#include file="../../include/menu_funcoes.asp"-->
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
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Confirmação de cadastro 
													da nova questão:</b></font></td>
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
	
	Checa "codDisciplina"
	Checa "status"
	Checa "dificuldade"
	Checa "codNatureza"
	Checa "codAssunto"
	Checa "pergunta"
	Checa "resp1"
	Checa "resp2"
	Checa "resp3"
	Checa "resp4"
	Checa "resp5"
	Checa "correta"
	Checa "primeirahabilitacao"
	Checa "instrutor"
	Checa "reciclagem"
	Checa "renovacao"
	Checa "dispensavel"

     Dim codDisciplina, dificuldade, status, pergunta, resp1, resp2, resp3, resp4, resp5, dispensavel, correta, primeirahabilitacao
     Dim instrutor, reciclagem, renovacao, nivel, natureza, assunto, TblNovaQuestao
     
     	codDisciplina = Trim(Request.Form("codDisciplina"))
     	dificuldade = Trim(Request.Form("dificuldade"))
     	status = Trim(Request.Form("status"))
     	pergunta = Trim(Request.Form("pergunta"))
     	resp1 = Trim(Request.Form("resp1"))
     	resp2 = Trim(Request.Form("resp2"))
     	resp3 = Trim(Request.Form("resp3"))
     	resp4 = Trim(Request.Form("resp4"))
     	resp5 = Trim(Request.Form("resp5"))
     	dispensavel = Trim(Request.Form("dispensavel"))
     	correta = Trim(Request.Form("correta"))
     	primeirahabilitacao = Trim(Request.Form("primeirahabilitacao"))
     	instrutor = Trim(Request.Form("instrutor"))
     	reciclagem = Trim(Request.Form("reciclagem"))
     	renovacao = Trim(Request.Form("renovacao"))
     	nivel = Trim(Request.Form("nivel"))
     	codNatureza = Trim(Request.Form("codNatureza"))
     	codAssunto = Trim(Request.Form("codAssunto"))
     	data = date
     	hora = time
     	ip = Request.ServerVariables("REMOTE_ADDR")
     
     set TblNovaQuestao = ObjConn.Execute ("INSERT INTO questoes(codDisciplina,dificuldade,codNatureza,codAssunto,pergunta,resp1,resp2,resp3,resp4,resp5,correta,primeirahabilitacao,instrutor,reciclagem,renovacao,dispensavel,status,data,hora,ip) VALUES ('" & codDisciplina & "','" & dificuldade & "','" & codNatureza & "','" & codAssunto & "','" & pergunta & "','" & resp1 & "','" & resp2 & "','" & resp3 & "','" & resp4 & "','" & resp5 & "','" & correta & "','" & primeirahabilitacao & "','" & instrutor & "','" & reciclagem & "','" & renovacao & "','" & dispensavel & "','" & status & "','" & data & "','" & hora & "','" & ip & "')")
     
%>
												<tr>
													<td bgcolor="#F2F7F7" height="20" width="20%" class="texto2">
													<p style="line-height: 150%; margin: 10px">
													<font size="2" color="#47858B">
													A questão &quot;</font><font size="2" color="#3672AC"><%=pergunta%></font><font size="2" color="#47858B">&quot; 
													foi cadastrada com sucesso.</font></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="20%" class="texto2">
													<p align="right" style="margin-right: 10px">
													<b>
													<font size="1" color="#3672AC">
													<a href="#" onclick="OpenWindow('../../include/pop.asp?url=../bnq/funcoes/form_img.asp','IMG','342','290','no');">
													<font color="#3672AC">
													<span style="text-decoration: none">
													Adicionar imagens à questão 
													:</span></font></a></font></b></td>
												</tr>
												</table>
											</td>
										</tr>
								<tr>
									<td valign="top" width="740" height="10">
									</td>
								</tr>
								</form>
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
</div>

</body>

</html>