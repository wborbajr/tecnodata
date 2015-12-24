<!--
----------------------------------------------
| Desenvolvido por:                          |
|                                            |
| MENTEC SOLUTION PROVIDER LTDA              |
| Curitiba - PR - Brasil                     |
| www.mentec.com.br                          |
| alo@mentec.com.br                          |
----------------------------------------------
-->

<!--#include file="../include/checalogin.asp"-->
<!--#include file="../include/connectionmysql.asp"-->
<!--#include file="../include/adovbs.inc"-->

<%
 If Not Session ("clientes") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if

 If Not Session ("cadastrar") = "Sim" Then
   Response.Redirect "../include/logar.asp"
 End if
%>

<%
     Dim objConn, objRS, strQ
     Dim TblCursos, TblAcessos, TblAssunto, TblNatureza, TblDisciplinas, TblDificuldade, TblParametros, TblDetrans, TblProva
     Server.ScriptTimeOut = 400
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     ip = Request.ServerVariables("REMOTE_ADDR")
     pagina = "Parametrização"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
     set TblParametrizacao = ObjConn.Execute ("SELECT disciplinas.disciplina AS Disciplina, dificuldade.dificuldade AS Dificuldade, parametrizacao.questoes AS Questoes, parametrizacao.codProva AS codProva FROM parametrizacao INNER JOIN disciplinas ON parametrizacao.codDisciplina = disciplinas.codDisciplina INNER JOIN dificuldade ON parametrizacao.codDificuldade = dificuldade.codDificuldade  WHERE codProva = '"& Request("codProva") &"' ORDER BY disciplinas.disciplina")
     set TblProvas = ObjConn.Execute ("SELECT * FROM configprova WHERE codProva = '"& TblParametrizacao("codProva") &"'")
     set TblDetrans = ObjConn.Execute ("SELECT * FROM detrans WHERE codCliente = '"& Request("codCliente") &"'")
%>


<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Wizard: Prova Passo 1 ]</title>
<link href="../include/estilo.css" rel="stylesheet" type="text/css">
<script language="javaScript" type="text/javascript" SRC="../include/scripts.js"></SCRIPT>
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

<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="709">
		<tr>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="435">
			<p align="left" style="margin-left: 10px; margin-right: 10px"><b>
			<font size="4" color="#C0C0C0">Parametrização da prova</font></b></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#F0F0F0" colspan="2">
			<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table1">
											<form method="post" name="passo3" action="prova_passo3.asp">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="40%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Cliente</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="18%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Cód. da prova</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="18%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Cód. do curso</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="9%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Questões</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="15%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Alternativas</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="40%">
													<p style="margin-left: 10px">
													<font size="1"><%=TblDetrans("nome_fantasia")%></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="18%">
													<p style="margin-left: 10px">
													<font size="1">
													<%=TblParametrizacao("codProva")%></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="18%">
													<p style="margin-left: 10px">
													<font size="1"><%=TblProvas("codCurso")%></font></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="9%">
													<p style="margin-left: 10px">
													<%=TblProvas("questoes")%></td>
													<td bgcolor="#F2F7F7" class="texto2" height="30" width="15%">
													<p style="margin-left: 10px">
													<%=TblProvas("alternativas")%></td>
												</tr>
												</table>
											</td>
										</tr>
				<tr>
			<td height="5">
											</td>
				</tr>
				</form>
				<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table5">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="60%">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Disciplina</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="15%">
													<p style="margin-left: 10px; margin-right: 10px; ">
													<font size="1" color="#808080">
													<b>Dificuldade</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" width="15%">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Questões</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="10%">
													<p style="margin-left: 10px; margin-right: 10px">
													<font size="1" color="#808080">
													<b>Opções</b></font></td>
												</tr>
												<% While Not TblParametrizacao.EOF %>
												<tr>
													<td bgcolor="#FFFFFF" width="60%" class="texto2" height="25">
													<p style="margin-left: 10px">
													<font size="1"><%=TblParametrizacao("Disciplina")%></font></td>
													<td bgcolor="#FFFFFF" width="15%" height="25" class="texto2">
													<p style="margin-left: 10px">
													<font size="1"><%=TblParametrizacao("Dificuldade")%></font></td>
													<td bgcolor="#FFFFFF" width="15%" height="25" class="texto2">
													<p style="margin-left: 10px">
													<font size="1"><%=TblParametrizacao("Questoes")%></font></td>
										<td bgcolor="#FFFFFF" width="10%" class="texto2" height="30">
										<div align="center">
										<table border="0" cellpadding="0" cellspacing="0" width="60" id="table7">
											<tr>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF" id="table8">
														<tr>
															<a href="editar.asp?codProva=<%=TblParametrizacao("codProva")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>E</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF" id="table9">
														<tr>
															<a href="gera_prova.asp?codProva=<%=TblParametrizacao("codProva")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>G</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
												<td width="30">
												<div align="center">
													<table border="1" cellpadding="0" cellspacing="1" width="20" bgcolor="#3672AC" height="20" bordercolorlight="#8BC6E2" bordercolordark="#FFFFFF" id="table10">
														<tr>
															<a href="imprimir.asp?codProva=<%=TblParametrizacao("codProva")%>"><td style="Cursor: hand" onMouseOver="this.style.background='#FFFFFF'" onMouseOut="this.style.background='#E6E6E6'" bgcolor="#E6E6E6" class="texto2">
															<p align="center">
															<font color="#3672AC">
															<b>I</b></font></td></a>
														</tr>
													</table>
												</div>
												</td>
											</tr>
										</table>
										</div>
										</td>
												</tr>
												<%
												TblParametrizacao.MoveNext
												Wend
												%>
												</table>
											</td>
										</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	</table>
</div>

</body>

</html>