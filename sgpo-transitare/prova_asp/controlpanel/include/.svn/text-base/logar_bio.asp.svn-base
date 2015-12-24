<!--#include file="../include/connectionmysql.asp"-->

<%
 
     Dim objConn, objRS, strQ
     Dim TblUsuarios
     Server.ScriptTimeOut = 400
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Login"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     set TblUsuarios = ObjConn.Execute ("SELECT * FROM usuarios")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//
-->
</script>
<script lang='javascript'>

function capture()
{	
	var err
	
	// Check ID is not NULL
	if ( document.MainForm.UserID.value == '' )
	{
		alert('Please enter user id !');
		return(false);
	}
	
	try // Exception handling
	{
		// Open device. [AUTO_DETECT]
		// You must open device before capture.
		DEVICE_FDP02		= 1;
		DEVICE_FDU01		= 2;
		DEVICE_AUTO_DETECT	= 255;
	
		var objDevice = document.objSecuBSP.Device;
		var objExtraction = document.objSecuBSP.Extraction;
				
		objDevice.Open(DEVICE_AUTO_DETECT);

		err = objDevice.ErrorCode;	// Get error code	
		if ( err != 0 )		// Device open failed
		{
			alert('Device open failed !');
			return(false);
		}
			
		// Capture user's fingerprint.
		objExtraction.Capture();
		err = objExtraction.ErrorCode;	// Get error code
	
		if ( err != 0 )		// Enroll failed
		{
			alert('Capture failed ! Error Number : [' + err + ']');
			objDevice.Close(DEVICE_AUTO_DETECT);
			return(false);
		}
		else	// Capture success
		{
			// Get text encoded FIR data from SecuBSP module.
			document.MainForm.FIRTextData.value = objExtraction.TextEncodeFIR;
			alert('Capture success !');
		}
	
		// Close device. [AUTO_DETECT]
		objDevice.Close(DEVICE_AUTO_DETECT);
		
		objExtraction = 0;
		objDevice = 0;		

	}
	catch(e)
	{
		alert(e.message);
		return(false);
	}
	
	// Submit main form
	document.MainForm.submit();
	return(true);
}

</script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" width="710" cellspacing="1" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="60"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2">
									<p align="center" style="margin: 2px 20px">
									<font size="5" color="#CC0000"><b>ACESSO 
									RESTRITO</b></font></p>
									<p align="center" style="margin: 2px 20px">
									<font size="2" color="#CC0000">Somente para 
									funcionários da Tecnodata</font></td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="2" height="40" valign="top">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
											<form action='../bnq/funcoes/bio/verify.asp' name='MainForm' method='post' OnSubmit='return capture();'>
											<input type=hidden name='FIRTextData'>
												<td class="texto2" height="25" width="34%" align="right">
												<p style="margin-right: 5px">
												<font size="1"><b>Usuário:</b></font></td>
												<td class="texto2" height="25" width="66%">
												<select size="1" name="UserID" class="box">
												<option selected>----</option>
												<option value="123456789">Cesar
												</option>
												<option value="033421">Jean Sartor
												</option>
												<option value="987987">Waldir
												</option>
												</select></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="34%" align="right"></td>
												<td class="texto2" height="25" width="66%">
												<input type="submit" value="» | OK" name="btoLogon" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
												</form>
											</tr>
											<tr>
												<td class="texto2" height="10" width="100%" align="right" colspan="2"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="2">
												<p style="margin-right: 10px">
												<font color="#808080">[ 
												<font size="1">
												<a class="linktx2" href="../bnq/funcoes/lembrador.asp">
												<font color="#808080">Esqueci 
												minha senha</font></a></font>&nbsp; |&nbsp; 
												<span style="font-size: 7pt">
												<a class="linktx2" href="../bnq/funcoes/novousuario.asp">
												<font color="#808080">Efetuar meu cadastro</font></a></span> 
												]</font></td>
											</tr>
											<tr>
												<td colspan="2" height="20" valign="bottom">
												<p align="right">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
										</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="10"></td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>
<OBJECT classid="CLSID:AA8777C7-B84A-4A10-A0A5-02B01A41396C"		 
		height=0 width=0
		id="objSecuBSP"
		name="objSecuBSP"
    VIEWASTEXT>
</OBJECT>
</body>

</html>