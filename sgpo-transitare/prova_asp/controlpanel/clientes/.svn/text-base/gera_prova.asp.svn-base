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
     pagina = "Gera Prova"
     data = date
     hora = time
     set TblAcessos = ObjConn.Execute ("INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" & Session("codUser") & "','" & pagina & "','" & date & "','" & Time & "','" & ip & "')")
%>

<%
	Dim TblSelectQuestoes
	set TblSelectQuestoes = ObjConn.Execute ("SELECT ")
	set TblParametrizacao = ObjConn.Execute ("SELECT disciplinas.disciplina AS Disciplina, dificuldade.dificuldade AS Dificuldade, parametrizacao.questoes AS Questoes, parametrizacao.codProva AS codProva FROM parametrizacao INNER JOIN disciplinas ON parametrizacao.codDisciplina = disciplinas.codDisciplina INNER JOIN dificuldade ON parametrizacao.codDificuldade = dificuldade.codDificuldade  WHERE codProva = '"& Request("codProva") &"' ORDER BY disciplinas.disciplina")
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
			<td height="5"></td>
		</tr>
		<tr>
			<td height="10">
			<div align="right">
				<table border="0" cellpadding="0" cellspacing="0" width="290" id="table11">
					<tr>
						<td>
											<div align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="130" id="table13" bgcolor="#9DC6C6">
													<tr>
														<a href="javascript:document.passo1.submit()"><td style="Cursor: hand" class="texto2" height="27">
														<p align="center" style="margin-top: 3px">
														<b>
														<font size="1" color="#47858B">
														» | </font></b>
														<font size="1" color="#47858B">
														<b>Cancelar PROVA</b></font></td></a>
													</tr>
													<tr>
														<td>
														<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
													</tr>
												</table>
											</div>
						</td>
						<td>
											<div align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="140" id="table12" bgcolor="#9DC6C6">
													<tr>
														<a href="javascript:document.passo1.submit()"><td style="Cursor: hand" class="texto2" height="27">
														<p align="center" style="margin-top: 3px">
														<b>
														<font size="1" color="#47858B">
														» | Imprimir PROVA</font></b></td></a>
													</tr>
													<tr>
														<td>
														<p align="right">
									<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
													</tr>
												</table>
											</div>
						</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
											<td>
											<div align="center">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table14">
													<tr>
														<td width="41" valign="top">
														<table border="0" cellpadding="0" cellspacing="1" width="30" bgcolor="#9DC6C6" id="table15" height="30">
															<tr>
																<td bgcolor="#F2F7F7" class="texto2">
																<p align="center">
																<font size="2" color="#000000">
																<b>1</b></font></td>
															</tr>
														</table>
														</td>
														<td>&nbsp;</td>
													</tr>
													<tr>
														<td width="41">&nbsp;</td>
														<td>&nbsp;</td>
													</tr>
												</table>
											</div>
											</td>
										</tr>
				</form>
				<tr>
											<td>
											&nbsp;</td>
										</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
</div>

</body>

</html>