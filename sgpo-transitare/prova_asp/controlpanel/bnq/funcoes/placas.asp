<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nome Do arquivo</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<%
Set fs = server.CreateObject("Scripting.FileSystemObject")
Set pasta = fs.GetFolder("D:\Jean\Meus documentos\Webs\provaeletronica\prova\placas\")
%>
<table border="0" cellspacing="1" cellpadding="0" bgcolor="#C0C0C0" width="399">
<tr>
<td class="td" height="30" bgcolor="#F0F0F0">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Nome Do arquivo</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0" align="center">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">IMG</font></b></td>
</tr>
<%
FOR EACH file IN pasta.Files
%>
<tr>
<form method="post" name="imgupdate" action="upload.asp">
<td align="right" bgcolor="#FFFFFF"><a href="../../../prova/placas/<%=file.name%>">
<font size="1" face="Verdana">
<p style="margin-right: 5px">
<input type="hidden" name="caminho_img" size="20" value="<%=file.name%>"><%=file.name%></font></a></td>
<td align="center" bgcolor="#FFFFFF">
<p style="margin: 5px"><font size="1" face="Verdana">
<img border="0" src="../../../prova/placas/<%=file.name%>" height="80" width="80"></font></td>
</tr>
<%
NEXT
%>
<tr>
<td align="right" bgcolor="#FFFFFF" colspan="2">
<p style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px">
<input type="submit" value="» | Atualizar" name="atualizar" class="botao"></td>
</form>
</tr>
</body>

</html>