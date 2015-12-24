<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nome Do arquivo</title>
</head>

<body>
<%
Set fs = server.CreateObject("Scripting.FileSystemObject")
Set pasta = fs.GetFolder("D:\Jean\Meus documentos\Webs\provaeletronica\prova\placas\")
%>
<table border="0" cellspacing="1" cellpadding="0" bgcolor="#C0C0C0">
<tr>
<td class="td" height="30" bgcolor="#F0F0F0">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Nome Do arquivo</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">IMG</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0" align="center">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Tamanho Do arquivo</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0" align="center">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Data Modificado</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0" align="center">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Tipo Do arquivo</font></b></td>
<td class="td" height="30" bgcolor="#F0F0F0" align="center">
<p style="margin-left: 5px; margin-right: 5px"><b><font size="1" face="Verdana">Atributos</font></b></td>
</tr>
<%
FOR EACH file IN pasta.Files
%>
<tr>
<td align="right" bgcolor="#FFFFFF"><a href="../prova/placas/<%=file.name%>">
<font size="1" face="Verdana"><%=file.name%></font></a></td>
<td align="right" bgcolor="#FFFFFF">
<p style="margin: 5px"><font size="1" face="Verdana">
<img border="0" src="../prova/placas/<%=file.name%>" height="40" width="40"></font></td>
<td align="center" bgcolor="#FFFFFF"><font size="1" face="Verdana"><%=formatnumber(file.size)%>kb</font></td>
<td align="center" bgcolor="#FFFFFF"><font size="1" face="Verdana"><%=file.datelastmodified%></font></td><td
align="center" bgcolor="#FFFFFF"><font size="1" face="Verdana"><%=file.type%></font></td>
<td align="center" bgcolor="#FFFFFF"><font size="1" face="Verdana"><%=file.attributes%></font></td>
</tr>
<%
NEXT
%>
</body>

</html>