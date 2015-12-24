<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->

<%

     Dim objConn, objRS, strQ, strConn
     Dim TblQuestoes, TblConfigProva
     Dim codCandidato
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ObjConn.CursorLocation = 3
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     
     set TblDetrans     = ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '1'")
     set TblCandidatos  = ObjConn.Execute ("SELECT * FROM candidatos WHERE rg = '"& Session("rg") &"'")
     set TblProvas_Geradas  = ObjConn.Execute ("SELECT * FROM provas_geradas WHERE codCandidato = '19'")

%>

<%
While Not TblProvas_Geradas.EOF

	if Not isNull(TblProvas_Geradas("Resposta")) then
		Response.Redirect "confirmacao2.asp"
	else
		Response.Redirect "concluir.asp"
	end if

TblProvas_Geradas.MoveNext
Wend
%>