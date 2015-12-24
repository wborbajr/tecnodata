<!--#include file="include/connectionmysql.asp"-->
<!--#include file="include/adovbs.inc"-->

<head>
<meta http-equiv="Content-Language" content="pt-br">
</head>

<%

     Dim objConn, objRS, strQ, strConn
     Dim TblQuestoes, TblConfigProva, TblRespProva, TblRespostas
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
     
     set TblProva       = ObjConn.Execute ("UPDATE provas_geradas SET resposta = '"& Request("resposta") &"' WHERE codPG = '"& Request.Form("codPG") &"'")
     
	 Response.Redirect "prova.asp?Pergunta="& Request("Pergunta")+1 &"&RG="& Session("RG") &""
											   
%>