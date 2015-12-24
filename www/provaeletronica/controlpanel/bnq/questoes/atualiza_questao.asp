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
     Dim TblCategorias, TblQuestoes, TblAssunto, TblNatureza
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Questão atualizada ("& Request.Form("codquestao") &")"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Painel de Controle ]</title>
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
	<table border="0" width="710" cellspacing="1" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="10">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="342">
			<p align="left" style="margin-left: 10px; margin-right: 10px">
			<font size="4" color="#C0C0C0"><b>BNQ -</b> Banco Nacional de 
			Questões</font></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="363" valign="bottom">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
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
													&nbsp;<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
													<p style="margin-left: 9px; margin-right: 10px; margin-bottom: 10px">
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
	
	Checa "status"
	Checa "codDisciplina"
	Checa "pergunta"
	Checa "resp1"
	Checa "resp2"
	Checa "resp3"
	Checa "resp4"
	Checa "resp5"
	Checa "dispensavel"
	Checa "correta"
	Checa "primeirahabilitacao"
	Checa "instrutor"
	Checa "reciclagem"
	Checa "renovacao"
    Checa "codNatureza"
	Checa "codAssunto"

     Dim status, diploma, numero, capitulo, secao, artigo, paragrafo, inciso, alinea, item, codDisciplina, codDificuldade, codNatureza
     Dim codAssunto, pergunta, resp1, resp2, resp3, resp4, resp5, dispensavel, correta, primeirahabilitacao, instrutor, reciclagem, renovacao
     
     	status = Trim(Request.Form("status"))
		diploma = Trim(Request.Form("diploma"))
		numero = Trim(Request.Form("numero"))
     	capitulo = Trim(Request.Form("capitulo"))
     	secao = Trim(Request.Form("secao"))
     	artigo = Trim(Request.Form("artigo"))
     	paragrafo = Trim(Request.Form("paragrafo"))
     	inciso = Trim(Request.Form("inciso"))
     	alinea = Trim(Request.Form("alinea"))
     	item = Trim(Request.Form("item"))
     	codDisciplina = Trim(Request.Form("codDisciplina"))
     	codDificuldade = Trim(Request.Form("codDificuldade"))
     	codNatureza = Trim(Request.Form("codNatureza"))
     	codAssunto = Trim(Request.Form("codAssunto"))
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
     	img1 = Trim(Request.Form("img1"))
     	img2 = Trim(Request.Form("img2"))
     
     Dim TblUpdateQuestao, txtData, txtHora, txtIp
     Server.ScriptTimeOut = 400
     txtIp = Request.ServerVariables("REMOTE_ADDR")
     txtData = date
     txtHora = time
     set TblUpdateQuestao = ObjConn.Execute ("UPDATE questoes SET status = '"& status &"', diploma = '"& diploma &"', numero = '"& numero &"', capitulo = '"& capitulo &"', secao = '"& secao &"', artigo = '"& artigo &"' , paragrafo = '"& paragrafo &"', inciso = '"& inciso &"', alinea = '"& alinea &"', item = '"& item &"', codDisciplina = '"& codDisciplina &"', codDificuldade = '"& codDificuldade &"', codNatureza = '"& codNatureza &"', codAssunto = '"& codAssunto &"', pergunta = '"& pergunta &"', resp1 = '"& resp1 &"', resp2 = '"& resp2 &"', resp3 = '"& resp3 &"', resp4 = '"& resp4 &"', resp5 = '"& resp5 &"', correta = '"& correta &"', dispensavel = '"& dispensavel &"', primeirahabilitacao = '"& primeirahabilitacao &"', instrutor = '"& instrutor &"', reciclagem = '"& reciclagem &"', renovacao = '"& renovacao &"', img1 = '"& img1 &"', img2 = '"& img2 &"' WHERE codQuestao = '"& Session("codigoquestao") &"'")
     
%>
													<font size="2">A pergunta 
	&quot;<%=pergunta%>&quot; foi atualizada com sucesso.</font></td>
														</tr>
													</table>
													</td>
												</tr>
												</table>
											</td>
										</tr>
								<tr>
											<td height="10">
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
	</table>
</div>

</body>

</html>