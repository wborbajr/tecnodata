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

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="../../../include/estilo.css" rel="stylesheet" type="text/css">
<script lang='javascript'>

function regist()
{	
	var err, payload
	
	// Check ID is not NULL
	if ( document.MainForm.UserID.value == '' )
	{
		alert('Por favor informe um UserID !');
		return(false);
	}

	try // Exception handling
	{
		// Open device. [AUTO_DETECT]
		// You must open device before enroll.
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
	
		// Enroll user's fingerprint.
		objExtraction.Enroll(payload);
		err = objExtraction.ErrorCode;	// Get error code
	
		if ( err != 0 )		// Enroll failed
		{
			alert('Registration failed ! Error Number : [' + err + ']');
			objDevice.Close(DEVICE_AUTO_DETECT);
			return(false);
		}
		else	// Enroll success
		{
			// Get text encoded FIR data from SecuBSP module.
			document.MainForm.FIRTextData.value = objExtraction.TextEncodeFIR;
			alert('Registration success !');
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
							<td height="20"></td>
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
									<img border="0" src="../../img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td colspan="2" height="20" valign="top">
							<img border="0" src="../../../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right" colspan="2">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form action='cadastra_bio.asp' name='MainForm' method='post' OnSubmit='return regist();'>
				<input type=hidden name='FIRTextData'>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px; margin-top: 5px; margin-bottom: 2px">
						<font size="1" color="#808080"><b>User ID</b></font><b><font size="1" color="#808080">:</font></b></p>
						<p style="margin-left: 5px; margin-top: 2px; margin-bottom: 5px">
						<font color="#808080">Código da identificação biométrica</font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px">
								<font size="1" color="#808080">
												<b>
												<input name="UserID" type="text" class="box" size="55" maxlength="50">
												</b></font></td>
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
												<input type="submit" value="» | Cadastrar BIO" name="btoCadastrar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
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
<OBJECT classid="CLSID:AA8777C7-B84A-4A10-A0A5-02B01A41396C" height=0 width=0 id="objSecuBSP" name="objSecuBSP" VIEWASTEXT></OBJECT>
</body>

</html>