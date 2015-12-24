<%
 If Not Session ("Auth") = "Y" Then
   Response.Redirect "../include/logar.asp"
 End if
 
  If Not Session ("Status") = "Admin" Then
   Response.Redirect "../include/logar.asp"
 End if
%>
