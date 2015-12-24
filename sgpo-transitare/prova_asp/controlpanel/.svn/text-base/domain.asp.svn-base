 <%@ Language=VBScript %>
<HTML>
<HEAD>
<META NAME="GENERATOR" Content="Microsoft Visual Studio 6.0">
<title>ADSI Domain browser</title>
</HEAD>
<BODY>
<!-- Author: Adrian Forbes -->

<%
sDomain = Request("Domain")
sComputer = Request("Computer")
sGroup = Request("Group")
sUser = Request("User")

if len(trim(sUser)) > 0 then
    Set objGroup = GetObject("WinNT://" & sDomain & "/" & sComputer & "/" & sUser)
    For Each objUser In objGroup.Groups
        Response.Write objUser.Name & "<br>" & vbCrLf
    Next
    Response.Write "</table><p><a href=adsi.asp?Domain=" & sDomain & "&Computer=" & sComputer & ">Back to " & sComputer & "</a></p>"
elseif len(trim(sGroup)) > 0 then
    Set objGroup = GetObject("WinNT://" & sDomain & "/" & sComputer & "/" & sGroup)
    For Each objUser In objGroup.Members
        Response.Write objUser.Name & "<br>" & vbCrLf
    Next
    Response.Write "</table><p><a href=adsi.asp?Domain=" & sDomain & "&Computer=" & sComputer & ">Back to " & sComputer & "</a></p>"
elseif len(trim(sComputer)) > 0 then
    Set objComputer = GetObject("WinNT://" & sDomain & "/" & sComputer)
    Response.Write "<table border=0>"
    For Each objObject In objComputer
        if strcomp(objObject.Class, "group", 1) = 0 then
            Response.Write "<tr><td>" & objObject.Class & "</td><td>&nbsp;&nbsp;<a href=adsi.asp?Domain=" & sDomain & "&Computer=" & sComputer & "&Group=" & objObject.Name & ">" & objObject.Name & "</a></td></tr>" & vbCrLf
        elseif strcomp(objObject.Class, "user", 1) = 0 then
            Response.Write "<tr><td>" & objObject.Class & "</td><td>&nbsp;&nbsp;<a href=adsi.asp?Domain=" & sDomain & "&Computer=" & sComputer & "&User=" & objObject.Name & ">" & objObject.Name & "</a></td></tr>" & vbCrLf
        else
            Response.Write "<tr><td>" & objObject.Class & "</td><td>&nbsp;&nbsp;" & objObject.Name & "</td></tr>" & vbCrLf
        end if
    Next
    Response.Write "</table><p><a href=adsi.asp?Domain=" & sDomain & ">Back to " & sDomain & "</a></p>"
elseif len(trim(sDomain)) > 0 then
    Set objDomain = GetObject("WinNT://" & sDomain)
    For Each objComputer In objDomain
        if strcomp(objComputer.Class, "computer", 1) = 0 then
            Response.Write "<a href=adsi.asp?domain=" & sDomain & "&computer=" & objComputer.Name & ">" & objComputer.Name & "<br>"
        end if
    Next
   
    Response.Write "<p><a href=adsi.asp>Back to domain list</a></p>"
else
    Set objWinNT = GetObject("WinNT:")
    For Each objDomain In objWinNT
        if strcomp(objDomain.Class, "domain", 1) = 0 then
            Response.Write "<a href=adsi.asp?domain=" & objDomain.Name & ">" & objDomain.Name & "<br>"
        end if
    Next
end if
%>

</BODY>
</HTML>