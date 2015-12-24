<!--#include file="../../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblPerfis, TblAcessos
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
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
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
													<td bgcolor="#F2F7F7" height="20" width="100%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Imagem 1:</font></td>
												</tr>
												<tr>
												<form method="post" name="imgupload" ENCTYPE="multipart/form-data" action="upload.asp">
													<td bgcolor="#FFFFFF" height="30" width="100%" class="texto2">
													<p style="margin-left: 10px">
															<input type="file" name="img1" size="42" class="box"></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="20" width="100%" class="texto2">
													<p style="margin-left: 10px">
													<font size="1" color="#47858B">
													Imagem 2:</font><input type="hidden" name="codquestao" size="1" value="<%=Request("codquestao")%>"></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="30" width="100%" class="texto2">
													<p style="margin-left: 10px">
															<input type="file" name="img2" size="42" class="box"></td>
												</tr>
												<tr>
													<td bgcolor="#F0F0F0" height="30" width="100%" class="texto2">
									<p align="right" style="margin-right: 10px">
												<input type="submit" value="» | Upload" name="btoUploadq" style="font-size: 9px; font-family: Verdana; font-weight: bold">&nbsp;
												<input type="reset" value="x | Cancelar" name="btoCancelar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
												</tr>
												</table>
</div>
</body>

</html>