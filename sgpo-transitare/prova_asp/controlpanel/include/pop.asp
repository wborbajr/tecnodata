<%

url = Trim(Request("url"))
titulo = Trim(Request("titulo"))

%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Language" content="pt-br">
<title>TECNODATA - Sistema BNQ</title>
<LINK REL=StyleSheet HREF="../estilo.css" TYPE="text/css">
<script language="javaScript" type="text/javascript" SRC="../popup.js"></SCRIPT>
<script language="javaScript" type="text/javascript" SRC="scripts.js"></SCRIPT>
</head>

<body topmargin="0" leftmargin="0">

<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="350" id="table1">
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td bgcolor="#3672AC" height="80" class="texto1">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="77">
							<p style="margin-left: 10px">
							<img border="0" src="../img/logotipo.gif" width="60" height="60"></td>
							<td><img border="0" src="../img/logo_nome.gif"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="1"></td>
				</tr>
				<tr>
					<td bgcolor="#FF9900">
					<p align="right">
					<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
				</tr>
				<tr>
					<td>
					<iframe name=MENTEC align=left src="<%=url%>" scrolling=yes frameborder=0 width=345 height=200></iframe>
					</td>
				</tr>
				<tr>
					<td height="1">
					</td>
				</tr>
				<tr>
					<td height="5" bgcolor="#3672AC">
					</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table2" bgcolor="#F0F0F0">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table3">
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table5">
								<tr>
									<td width="2"></td>
									<td width="446" valign="top">
                                    </td>
									<td width="2"></td>
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