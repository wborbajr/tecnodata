<%
' Declaration variable
dim FS, objFile
dim curPath, tmpPath
dim msg
dim UserID, UserPWD, FIRTextData
dim fUserID, fFIRSize, fFIRTextData
dim payload, objSecuBSP

UserID		= Request.Form("UserID")
FIRTextData = Request.Form("FIRTextData")

' Get current path
tmpPath = Request.ServerVariables("PATH_TRANSLATED")
curPath = left(tmpPath, InStrRev(tmpPath, "\")) & "db\"

SET FS = Server.CreateObject("Scripting.FileSystemObject")

' Check file exist
if not ( FS.FileExists(curPath & UserID & ".fir") ) then

	' File not found error
	msg = "User not found ! Verification failed !"

else

	' Read fir data form file
	SET objFile = FS.OpenTextFile(curPath & UserID & ".fir", 1)
	
	' Read user id and fir data form file
	fUserID			= objFile.ReadLine
	fFIRSize		= objFile.ReadLine
	fFIRTextData	= objFile.ReadLine
	
	objFile.Close
	
	' Match captured fir data with stored fir data
	
	' Set SecuBSP object
	Set objSecuBSP = Server.CreateObject("SBSPCOM.SecuBSP")	
	Set objMatching = objSecuBSP.Matching
	
	' Verify Match
	' storedTextFIR1 is Caputured FIR
	' storedTextFIR2 is FIR from file

	call objMatching.VerifyMatch(CStr(FIRTextData), CStr(fFIRTextData))

	if objMatching.ErrorCode = 0 then	' Matching failed. [0:FALSE,Others:TRUE]

	if objMatching.MatchingResult = 0 then	' Matching failed. [0:FALSE,Others:TRUE]
	
		msg = msg + "Matching failed ! Verification failed !"
	
	else	' Matching success
	
		msg = "Verification success !!!"
		Session("Auth") = "Y"
		Session("Bilhetagem") = "Sim"
		Session("BNQ") = "Sim"
		Session("Clientes") = "Sim"
		Response.Redirect "../../../index.asp"
	
	end if
	
	else
	
		msg = objMatching.ErrorCode
		
	end if
	
	
	' Release SecuBSP object
	Set objMatching = nothing
	Set objSecuBSP = nothing

end if

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

<font color=#800000><b>Verification</b></font>

<br>
<br>
<br>

<b>User ID : <%= UserID %></b>

<br>
<br>

<font size=5 color=#000080><b><%= msg %></b></font>
<hr noshade width=300>

<br>
<br>
<br>

<a href='./'>Return to HOME</a>.

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