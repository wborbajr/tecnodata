<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->


<%

     Dim objConn, objRS, strQ, strConn
     Dim TblCategorias, TblQuestoes, TblAssunto, TblListaAssunto, TblListaNatureza, TblNatureza, codNatureza, codAssunto
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     
     Session("cboCategoria") = Request("cboCategoria")
     
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Ambiente de avaliação ]</title>
<link href="../controlpanel/include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../controlpanel/include/scripts.js"></SCRIPT>
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

<body bgcolor="#E0EBF5" topmargin="60">

<div align="center">

<table border="0" cellpadding="0" cellspacing="1" width="90%" bgcolor="#BBD3EA">
	<tr>
		<td width="20%" bgcolor="#E0EBF5" height="130">&nbsp;</td>
		<td valign="top" width="80%" bgcolor="#E0EBF5">
		&nbsp;</td>
	</tr>
	<tr>
		<td width="20%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#CFE0EF">
				<p align="center"><font color="#E0EBF5" size="7" face="Arial">
				<b>BNQ</b></font></td>
			</tr>
		</table>
		</td>
		<td valign="top" width="80%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#FFFFFF">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" colspan="3" height="25">
							<p style="margin-left: 5px"><b>
							<font size="1">Identificação da prova</font></b></td>
						</tr>
						<tr>
							<td class="texto2" height="5" colspan="3" bgcolor="#CFE0EF"></td>
						</tr>
						<tr>
							<td class="texto2" colspan="3" height="1"></td>
						</tr>
						<tr>
							<td class="texto2" width="168" bgcolor="#8BC6E2"></td>
							<td class="texto2" width="221" bgcolor="#8BC6E2"></td>
							<td class="texto2" width="253"></td>
						</tr>
						<tr>
							<td class="texto2" colspan="3" height="10"></td>
						</tr>
						<tr>
							<td class="texto2">
							<p align="left" style="margin-left: 5px">Verificação 
							biométrica:</td>
							<form action='../agc/candidatos/bio/verify.asp' name='MainForm' method='post' OnSubmit='return capture();'>
							<input type=hidden name='FIRTextData'>
							<td class="texto2">
														<p align="left">
														<input type="text" name="UserID" size="15" class="box" style="height: 30; text-align:center; font-size:14pt; font-family:Verdana; font-weight:bold; color:#1E1E1E; padding-top:3px; " maxlength="14"></td>
							<td class="texto2">
												<input type="submit" value="OK" name="btoGeraProva" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
												</form>
						</tr>
					</table>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="20%" bgcolor="#E0EBF5" height="130">&nbsp;</td>
		<td valign="top" width="80%" bgcolor="#E0EBF5">
		<table border="0" cellpadding="0" cellspacing="5" width="100%" height="150">
			<tr>
				<td bgcolor="#EBF1FA">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="90%">
						<tr>
							<td class="texto2" height="25">
							<p style="margin-left: 5px">
							<font size="1" color="#ACC8E3"><b>Instruções de 
							identificação</b></font></td>
						</tr>
						<tr>
							<td class="texto2" height="20">
							<p style="margin-left: 15px; margin-top: 10px; margin-bottom: 2px">
							<font color="#AFAFAF">» Pressione suavemente seu 
							polegar direito sob o identificar biométrico</font></p>
							<p style="margin-left: 15px; margin-top: 2px; margin-bottom: 2px">
							<font color="#AFAFAF">» Aguarde até a leitura 
							biométrica estar confirmada</font></p>
							<p style="margin-left: 15px; margin-top: 2px; margin-bottom: 2px">
							<font color="#AFAFAF">» Sua prova será exibida</font></p>
							<p style="margin-left: 15px; margin-top: 2px; margin-bottom: 2px">
							<font color="#AFAFAF">» E boa sorte</font></td>
						</tr>
						</table>
				</div>
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