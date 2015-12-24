<html>
<head>
<title>Lista diretório</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<%' O código que faz a lista:
Dim strPath
Dim objFSO
Dim objFolder
Dim objItem
' O diretório que vai ser listado:
dir = "D:\Jean\Meus documentos\Webs\provaeletronica\prova\placas\"
strPath = dir
' Vamos criar aqui o FileSystemObject:
Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
' ler o conteúdo do diretório
Set objFolder = objFSO.GetFolder((strPath))
' Agora vamos formatar a tabela:
%>
Conteúdo do diretório: <B><%= strPath %></B><BR>
<BR>
<form name="criar" action="../criar/criar_criar.asp" method="post">
<TABLE BORDER="3" BORDERCOLOR="#C0C0C0" CELLSPACING="0" CELLPADDING="2">
<TR BGCOLOR="#006600">
<TD height="25" bgcolor="#808080"><FONT COLOR="#FFFFFF" size="1" face="Verdana"><B>Nome do arquivo:</B></FONT></TD>
<TD height="25" bgcolor="#808080"><FONT COLOR="#FFFFFF" size="1" face="Verdana"><B>Tamanho (bytes):</B></FONT></TD>
<TD height="25" bgcolor="#808080"><FONT COLOR="#FFFFFF" size="1" face="Verdana"><B>Criado em:</B></FONT></TD>
<TD height="25" bgcolor="#808080"><FONT COLOR="#FFFFFF" size="1" face="Verdana"><B>Tipo:</B></FONT></TD>
</TR>
<%
' Vamos colocar esta rotina abaixo, para verificar se existem
' front page extensions instaladas, senão vai dar erro 404.
For Each objItem In objFolder.SubFolders
If InStr(1, objItem, "_vti", 1) = 0 Then
%>
<TR BGCOLOR="#CCFFCC">
<TD ALIGN="left" bgcolor="#F0F0F0" ><font face="Verdana" size="1"><input name="subdir" type="hidden" value="<%=objItem.Name%>" title="<%=objItem.Name%>">
</font><font face="Verdana"><font face="Verdana" size="1"><input name="arquivos" type="checkbox" value="<%=dir+mais+objItem.Name+mais%>" title="<%=dir%>"></font><A HREF="teste2.asp?subdir=<%=objItem.Name%>"><font size="1"><%= objItem.Name %></font></A></font></TD>
<TD ALIGN="right" bgcolor="#F0F0F0"><font size="1" face="Verdana"><%= objItem.Size %></font></TD>
<TD ALIGN="left" bgcolor="#F0F0F0" ><font size="1" face="Verdana"><%= objItem.DateCreated %></font></TD>
<TD ALIGN="left" bgcolor="#F0F0F0" ><font size="1" face="Verdana"><%= objItem.Type %></font></TD>
</TR>
<%
End If
Next
' Agora vamos entrar nos subdiretórios

For Each objItem In objFolder.Files
%>
<TR BGCOLOR="#CCFFCC">
<TD ALIGN="left" bgcolor="#F0F0F0" ><A HREF="<%= strPath & objItem.Name %>"><%= objItem.Name %></A></TD>
<TD ALIGN="right" bgcolor="#F0F0F0"><%= objItem.Size %></TD>
<TD ALIGN="left" bgcolor="#F0F0F0" ><%= objItem.DateCreated %></TD>
<TD ALIGN="left" bgcolor="#F0F0F0" ><%= objItem.Type %></TD>
</TR>
<%
Next
' Feito !!! Agora é fechar as variáveis
Set objItem = Nothing
Set objFolder = Nothing
Set objFSO = Nothing
%>
<TR BGCOLOR="#CCFFCC"><TD ALIGN="left" colspan="4" bgcolor="#F0F0F0"><input type="text" name="dirname" size="25"></TD></TR>
<TR BGCOLOR="#CCFFCC"><TD ALIGN="left" colspan="4" bgcolor="#F0F0F0"><input type="submit" name="B12" value=" OK "></TD></TR>
</TABLE>
</form>
</body>
</html>