<!--#include file="../../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblCategorias, TblAcessos, TblAddCategorias
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Nova categoria"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblAddCategoria = ObjConn.Execute ("INSERT INTO categorias(categoria) VALUES ('" & Request("categoria") & "')")
     set TblCategorias = ObjConn.Execute ("SELECT * FROM categorias ORDER BY categoria")
%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nova categoria</title>
<link href="../../include/estilo.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="328">
		<tr>
			<td class="texto1">
			<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
			<b><font size="4">Adicionar nova categoria</font></b></td>
		</tr>
		<tr>
			<td>
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="310" bgcolor="#C0C0C0">
					<tr>
						<td bgcolor="#F0F0F0">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td class="texto2">
								<p style="margin-left: 5px; margin-top: 5px"><b>
								<font size="1" color="#808080">Nome da 
								categoria:</font></b></td>
							</tr>
							<tr>
							<form method="post" name="categoria" action="add_novacategoria.asp">
								<td class="texto2" height="25">
								<p style="margin-left: 5px"><b>
								<font size="1" color="#808080">
												<input type="text" name="categoria" size="42" class="box"></font></b></td>
							</tr>
						</table>
						</td>
						<td bgcolor="#F0F0F0" width="67">
						<p align="center">
												<input type="submit" value="» | OK" name="btoLogon" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
												</form>
					</tr>
					</table>
			</div>
			</td>
		</tr>
		<tr>
			<td height="20">&nbsp;</td>
		</tr>
		<tr>
			<td>
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="1" width="310" bgcolor="#C0C0C0">
					<tr>
						<td bgcolor="#F0F0F0" width="262" class="texto2" height="25">
						<p align="left" style="margin-left: 10px">
												<font size="1" color="#808080">
												<b>Categoria</b></font></td>
					</tr>
					<% While Not TblCategorias.EOF %>
					<tr>
						<td bgcolor="#FFFFFF" width="262" class="texto2" height="20">
						<p align="left" style="margin-left: 10px">
						<font size="1" color="#808080"><%=TblCategorias("categoria")%></font></td>
					</tr>
					<%
					TblCategorias.MoveNext
					Wend
					%>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
</div>
</body>

</html>
