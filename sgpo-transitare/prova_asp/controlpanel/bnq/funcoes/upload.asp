<!--#include file="../../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblPerfis, TblAcessos
     Dim img1, img2
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Upload de imagens"
     data = date
     hora = time
     img1 = ""& Request("img1") &""
     img2 = ""& Request("img2") &""
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblUpdateImg = ObjConn.Execute ("UPDATE questoes SET img1 = '"& img1 &"', img2 = '"& img2 &"' WHERE codQuestao = '"& Session("codigoquestao") &"'")
   
%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Upload de imagem</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="5" leftmargin="0" rightmargin="0" bottommargin="0">
<div align="center">
											<table border="0" cellpadding="0" cellspacing="1" width="320" bgcolor="#C0C0C0">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Upload de imagens</b></font></td>
												</tr>
												<tr>
												<form method="post" name="imgupload" action="upload.asp">
													<td bgcolor="#FFFFFF" height="30" width="100%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1">As imagens da 
													Questão: <b>&quot;<%=Session("codigoquestao")%>&quot;</b> foram 
													atualizadas.</font></td>
												</tr>
												</table>
</div>
</body>

</html>