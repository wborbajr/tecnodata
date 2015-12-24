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

<%
' Declaration variable
dim FS, objFile
dim curPath, tmpPath
dim UserID, FIRTextData

UserID		= Request.Form("UserID")
FIRTextData = Request.Form("FIRTextData")

' Save fir data to file

' Get current path
tmpPath = Request.ServerVariables("PATH_TRANSLATED")
curPath = left(tmpPath, InStrRev(tmpPath, "\")) & "db\"

' Set filename using UserID
SET FS = Server.CreateObject("Scripting.FileSystemObject")
SET objFile = FS.CreateTextFile( curPath & UserID & ".fir", true)
		
objFile.WriteLine UserID
objFile.WriteLine len(FIRTextData)
objFile.WriteLine FIRTextData
		
objFile.Close
SET FS = nothing
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="../../../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
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
	<table border="0" width="709" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="80"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2">
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Bio ID</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Identificação 
									Biométrica</font></td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../../../controlpanel/bnq/img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="2" height="20" valign="top">
							<img border="0" src="../../../controlpanel/img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="2">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form action='regist.asp' name='MainForm' method='post' OnSubmit='return regist();'>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="100">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<font size="1" color="#808080"><b>User ID</b></font><b><font size="1" color="#808080">:</font></b></p>
						</td>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<font size="1"><%= UserID %></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0" width="100">
						<p style="margin-left: 5px">
								<font size="1" color="#808080"><b>Tamanho Fir:</b></font></td>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<font size="1"><%= len(FIRTextData) %></font></td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													<tr>
														<td height="10"></td>
													</tr>
												</table>
												</td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="34%" align="right">&nbsp;</td>
												<td class="texto2" height="25" width="66%">
												<p style="margin-right: 10px" align="right">
												<b>
												<font color="#808080">
												<a href="../../../controlpanel/bnq/funcoes/novousuario.asp">
												<font color="#808080">
												<span style="text-decoration: none">[ 
												<font size="1">» Continuar 
												cadastro</font> 
												]</span></font></a></font></b></td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" colspan="2">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="20">&nbsp;</td>
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