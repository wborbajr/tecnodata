<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
     Dim objConn, objRS, strQ
     Dim v1, v2
     Dim TblDisciplinas, TblQuestoes, TblPrimeiraHabilitacao, TblInstrutor, TblReciclagem, TblRenovavao
     Dim totalQuest, TblQuestoes2
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "Lista Parametros BD"
     ip = Request.ServerVariables("REMOTE_ADDR")
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblQuestoes = ObjConn.Execute ("SELECT * FROM questoes WHERE primeirahabilitacao = 'S'")
'     v1 = "0"
'     v2 = "0"

    v1 = TblQuestoes("codDisciplina")
    v2 = TblQuestoes("codAssunto")

	response.write " Disc = "& TblQuestoes("codDisciplina") &""
	response.write " Assu = "& TblQuestoes("codAssunto") &""
		
'	response.write ""& v1 &""
'	response.write ""& v2 &""
		
	While not tblquestoes.EOF 
	
		if TblQuestoes("codDisciplina") = v1 AND TblQuestoes("codAssunto") = v2 then
		    Response.Write " => Q."& TblQuestoes("codQuestao")&" - " 
		else
		    response.write "<BR>"
			response.write " Disc = "& TblQuestoes("codDisciplina") &""
			response.write " Assu = "& TblQuestoes("codAssunto") &""
		    v1 = TblQuestoes("codDisciplina")
		    v2 = TblQuestoes("codAssunto")
		end if

		Select Case TblQuestoes("codDificuldade")
		Case "1"
			Response.Write "F"
		Case "2"
			Response.Write "M"
		Case "3"
			Response.Write "D"
		End Select

'		response.write ""& v1 &""
'		response.write ""& v2 &""

		TblQuestoes.MoveNext
	Wend
%>