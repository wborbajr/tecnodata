<%
' Declaration variable for property
dim Version, CaptureTimeout, SecurityLevel, EnrollImgaeQuality, VerifyImageQuality

' Set SecuBSP object
Set objSecuBSP = Server.CreateObject("SBSPCOM.SecuBSP")
set objExtraction = objSecuBSP.Extraction

' Get property of SecuBSP
Version				= objSecuBSP.MajorVersion & "." & objSecuBSP.MinorVersion
CaptureTimeout		= objExtraction.DefaultTimeout
SecurityLevel		= objExtraction.SecurityLevel
EnrollImgaeQuality	= objExtraction.EnrollImageQuality
VerifyImageQuality	= objExtraction.VerifyImageQuality

' Release SecuBSP object
set objExtraction = nothing
Set objSecuBSP = nothing
%>

<html>
<link href="../../../include/estilo.css" rel="stylesheet" type="text/css">
<body>

<br>
<br>

<center>
<font size=5><b>SecuBSP IIs Sample</b></font>
<hr>
<p>



<font color=#800000><b>SecuBSP Information</b></font>
<p>

	<table border=1 cellpadding=3>
	<tr><th width=200>Item</th><th width=100>Value</th></tr>
	<tr><td>Version</td><td><%= Version %></td></tr>
	<tr><td>Capture Timeout</td><td><%= CaptureTimeout %></td></tr>
	<tr><td>Security Level</td><td><%= SecurityLevel %></td></tr>
	<tr><td>Enroll Imgae Quality</td><td><%= EnrollImgaeQuality %></td></tr>
	<tr><td>Verify Image Quality</td><td><%= VerifyImageQuality %></td></tr>
	</table>

<br>
<br>
<br>

<font color=#800000><b>Registration & Verification Sample</b></font>
<p>
	
	<a href='regist.htm'>Fingerprint Registration Sample</a>
	<p>
	<a href='verify.htm'>Fingerprint Verification Sample</a>

</center>

<br>
<br>
<br>

<hr>
<p align=right>
<font size=2>Copyright ¨Ï 2003. NITGEN co.,Ltd. All rights reserved.</font>
</p>

</body>
</html>