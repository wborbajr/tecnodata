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

<?
	session_start();
	$_SESSION["bilhetagem"] = "Sim";
	$_SESSION["codUser"] = "1";
	if($_SESSION["bilhetagem"] != "Sim") {
		header("Location: ../include/logar.php");
	}

	$ip = $_SERVER["REMOTE_ADDR"];
	$pagina = "Manutenção";
	$data = date("dmY");
	$hora = time();
	$TblAcessos = "INSERT INTO acessos(codusuario,txtPagina,txtData,txtHora,txtIP) VALUES ('" . $_SESSION["codUser"] . "','" . $pagina . "','" . $data . "','" . $hora . "','" . $ip . "')";
	$TblDisciplinas = "SELECT * FROM disciplinas";
	$TblDificuldade = "SELECT * FROM dificuldade";
	$TblAssunto = "SELECT * FROM assuntos";
	$TblNatureza = "SELECT * FROM natureza";
?>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ Bilhetagem ]</title>
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
			<font size="4" color="#C0C0C0">Manutenção</font></b></td>
			<td bgcolor="#F0F0F0" height="37" class="texto1" width="274">
			<p align="right" style="margin-right: 10px; margin-top: 5px">
			</td>
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
			<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1">
				<tr>
											<td>
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table2">
												<tr>
													<td bgcolor="#F0F0F0" class="texto2" height="30" align="center" width="72%" colspan="9">
													<p style="margin-left: 10px" align="left">
													<font size="1" color="#808080">
													<b>Critérios de pesquisa</b></font></td>
													<td bgcolor="#F0F0F0" class="texto2" height="30" width="16%">
													<p style="margin-left: 10px">
													<font size="1" color="#808080">
													<b>Buscar</b></font></td>
												</tr>
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Dipl.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Nº.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Cap.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Sç.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Art.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font face="Verdana" color="#47858B">
													§</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Inc.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Alín.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="8%" class="texto2" align="center">
													<font color="#47858B">Item</font></td>
													<td bgcolor="#FFFFFF" height="50" width="16%" align="center" class="texto2" rowspan="2">
												<input type="submit" value="» | Buscar" name="btoBuscar" style="font-size: 9px; font-family: Verdana; font-weight: bold"></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="diploma" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="numero" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="capitulo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="secao" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="artigo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="paragrafo" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="inciso" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="alinea" size="6" class="box"></td>
													<td bgcolor="#FFFFFF" height="25" width="8%" class="texto2" align="center">
															<input type="text" name="item" size="6" class="box"></td>
												</tr>
												</table>
											</td>
										</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
											<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#C0C0C0" id="table3">
												<tr>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Dipl.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Nº.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Cap.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Sç.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Art.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font face="Verdana" color="#47858B">
													§</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Inc.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Alín.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" class="texto2" align="center">
													<font color="#47858B">Item</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" align="center" class="texto2">
															<font color="#47858B">
															Dis.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" align="center" class="texto2">
															<font color="#47858B">
															Dif.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" align="center" class="texto2">
															<font color="#47858B">
															Nat.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="6%" align="center" class="texto2">
															<font color="#47858B">
															Ass.</font></td>
													<td bgcolor="#F2F7F7" height="25" width="22%" align="center" class="texto2">
															<b>
															<font color="#47858B" size="1">
															Opções</font></b></td>
												</tr>
												<tr>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" class="texto2" align="center">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" align="center" class="texto2">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" align="center" class="texto2">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" align="center" class="texto2">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="6%" align="center" class="texto2">&nbsp;
															</td>
													<td bgcolor="#FFFFFF" height="25" width="22%" align="center" class="texto2">&nbsp;
															</td>
												</tr>
												</table>
											</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>