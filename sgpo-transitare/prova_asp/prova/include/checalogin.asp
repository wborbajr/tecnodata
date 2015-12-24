<%
 If Not Session ("Auth") = "Y" Then
   Response.Redirect "../include/logar.asp"
 End if
%>
