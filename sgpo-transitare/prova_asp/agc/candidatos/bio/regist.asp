<!-- //////////////////////////////////////////////////////////////////////////////////////////////

	default.asp : implementation file 

	Date        : 2003. 05. 15
	Author      : Bastian Choi
	Copyright   : NITGEN co.
	
////////////////////////////////////////////////////////////////////////////////////////////// -->

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

<body>

<br>
<br>

<center>
<font size=5><b>SecuBSP IIs Sample</b></font>
<hr>
<p>

<font color=#800000><b>Registration</b></font>

<br>
<br>
<br>

<font size=5 color=#000080><b>Registration Success !!!</b></font>
<hr noshade width=300>

<br>
<br>

<b>Registration Information</b>
<p>

<table border=1 cellpadding=3>
<tr><th width=200>Item</th><th width=100>Value</th></tr>
<tr><td>User ID</td><td><%= UserID %></td></tr>
<tr><td>FIR Data size</td><td><%= len(FIRTextData) %></td></tr>
</table>
<p>

<a href='./'>Return to HOME</a>.

<br>
<br>
<br>

<hr>
<p align=right>
<font size=2>Copyright ¨Ï 2003. NITGEN co.,Ltd. All rights reserved.</font>
</p>

</body>
</html>