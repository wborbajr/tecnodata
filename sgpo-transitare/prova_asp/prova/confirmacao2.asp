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
     pagina = "Checa Quest. Respondidas"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     
     set TblDetrans     	= ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '1'")
     set TblCandidatos  	= ObjConn.Execute ("SELECT * FROM candidatos WHERE rg = '"& Session("rg") &"'")
     set TblProvas_Geradas  = ObjConn.Execute ("SELECT * FROM provas_geradas WHERE codCandidato = '"& Session("codCandidato") &"'")
     
%>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Ambiente de avaliação ]</title>
<link href="include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="include/scripts.js"></SCRIPT>
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

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" bgcolor="#F0F0F0" style="text-align: center">

	<div align="center">
		<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table6">
			<tr>
				<td height="100" bgcolor="#F0F0F0" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td height="100" bgcolor="#F0F0F0" colspan="2">
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="1" width="90%" id="table11" bgcolor="#C0C0C0">
						<tr>
							<td bgcolor="#F0F0F0" width="22%" height="15" class="texto2">
							<p style="margin-left: 5px"><font color="#808080">
							<b>Nome do candidato</b></font></td>
							<td bgcolor="#F0F0F0" width="21%" height="15" class="texto2">
							<p style="margin-left: 5px"><font color="#808080">
							<b>Renach</b></font></td>
							<td bgcolor="#F0F0F0" width="22%" height="15" class="texto2">
							<p style="margin-left: 5px"><font color="#808080">
							<b>CPF</b></font></td>
							<td bgcolor="#F0F0F0" width="21%" height="15" class="texto2">
							<p style="margin-left: 5px"><font color="#808080">
							<b>Status</b></font></td>
							<td bgcolor="#F0F0F0" height="15" class="texto2" width="14%">
							<p style="margin-left: 5px"><b>
							<font color="#808080">Data da prova</font></b></td>
						</tr>
						<tr>
							<td bgcolor="#F0F0F0" width="22%" class="texto2" rowspan="3">
							<p align="center"><font size="2" color="#808080"><%=TblCandidatos("nome")%></font></td>
							<td bgcolor="#F0F0F0" width="21%" class="texto2" rowspan="3">
							<p align="center"><font size="2" color="#808080"><%=TblCandidatos("renach")%></font></td>
							<td bgcolor="#F0F0F0" width="22%" class="texto2" rowspan="3">
							<p align="center"><font size="2" color="#808080"><%=TblCandidatos("cpf")%></font></td>
							<td bgcolor="#F0F0F0" width="21%" class="texto2" rowspan="3">
							<p align="center"><font size="2" color="#808080">
									<%
									if TblCandidatos("status") = "Prova gerada" then
									   Response.Write "Em avaliação"
									else
									   Response.Write "Prova encerrada"
									end if
									%></font></td>
							<td bgcolor="#F0F0F0" height="15" class="texto2" width="14%">
							<p align="center"><font size="1" color="#808080"><%=TblCandidatos("diaProva")%>/<%=TblCandidatos("mesProva")%>/<%=TblCandidatos("anoProva")%></font></td>
						</tr>
						<tr>
							<td bgcolor="#F0F0F0" height="15" class="texto2" width="14%">
							<p style="margin-left: 5px"><b>
							<font color="#808080">Hora da prova</font></b></td>
						</tr>
						<tr>
							<td bgcolor="#F0F0F0" height="15" class="texto2" width="14%">
							<p align="center"><font color="#808080"><%=TblCandidatos("horaProva")%></font></td>
						</tr>
					</table></div>
				</td>
			</tr>
			<tr>
				<td height="2" colspan="2"></td>
			</tr>
			<tr>
				<td bgcolor="#3672AC" width="30%">
							<div align="center">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table9">
									<tr>
										<td height="90">
						<div align="center">
							<table border="0" cellpadding="0" cellspacing="0" width="62%" id="table10">
								<tr>
									<td width="77">
									<p style="margin-left: 10px">
									<img border="0" src="http://www.tecnodatacfc.com.br/img/logotipo.gif"></td>
									<td>
									<img border="0" src="http://www.tecnodatacfc.com.br/img/logo_nome.gif" width="90" height="10"></td>
									</tr>
							</table>
						</div>
										</td>
									</tr>
									</table>
								</div>
							</td>
				<td bgcolor="#93B8DD" width="70%" height="144" align="center">
    			<font face="Verdana" size="4"><b>
    			<%
    			While Not TblProvas_Geradas.EOF
			
	       		If TblProvas_Geradas("questao_correta") = TblProvas_Geradas("resposta") then
			   contagem = contagem + 1
	    		end if
				
				TblProvas_Geradas.MoveNext
				Wend
				
				Session("contagem") = contagem
    			%>
    			
    			<%
    			
    			Dim porcentagem
    			porcentagem = Session("contagem") * 100 / 30
    			%>
    			
     			<%
     			if Session("contagem") > Session("media_aprovacao") then
     				Response.Write "Você foi APROVADO com "&FormatNumber(porcentagem,0)&"% de aproveitamento.<br>Sua nota está sendo transmitida para o Detran."
     		    else
     		       Response.Write "Você foi REPROVADO com "&FormatNumber(porcentagem,0)&"% de aproveitamento.<br>Por favor entre em contato com seu CFC."
     		    end if
     			%></font>
				</td>
			</tr>
			<tr>
				<td height="3" colspan="2" align="center"></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>
	</div>
</body>

</html>