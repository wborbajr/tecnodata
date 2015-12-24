<?
	// Classe para controle do banco de dados
	require_once("../../includes/class_db_mysql.php");
	
	session_start();

// Dim StrVar, RSacesso
/*
function Checa($StrVar){
//		StrVar = CStr(StrVar)
//		If IsEmpty(request.form(StrVar)) or request.form(StrVar)="" then
	if (empty($StrVar)){
		echo  "<html>";
		echo  "<head>";
		echo  "<meta http-equiv='Content-Language' content='pt-br'>";
		echo  "<meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>";
		echo  "<title>TECNODATA  |  ACESSO RESTRITO</title>";
		echo  "<LINK REL=StyleSheet HREF='system/estilo.css' TYPE='text/css'>";
		echo  "</head>";
		echo  "<body topmargin='50' leftmargin='0' bgcolor='#000000'>";
		echo  "<div align='center'>";
		echo  "  <center>";
		echo  "  <table border='0' cellpadding='0' width='760' bgcolor='#FFFFFF' cellspacing='3'>";
		echo  "    <tr>";
		echo  "      <td width='350' valign='top' bgcolor='#0059C1' height='250'>";
		echo  "				<p style='margin-left: 15px; margin-top:10px; margin-bottom:10px'>";
		echo  "				<img border='0' src='../img/logomarca.jpg' width='44' height='100'><p style='margin-left: 15px; margin-top:2px; margin-bottom:2px'>";
		echo  "				<font color='#FFD700' face='Verdana'><b>";
		echo  "				<span style='font-size: 16pt'>Tecnodata</span></b></font><p style='margin-left: 15px; margin-top:2px; margin-bottom:2px'>";
		echo  "				<b><font size='1' color='#FFFFFF' face='Verdana'>SIAC - Sistema ";
		echo  "				de Acompanhamento de Clientes&nbsp; -&nbsp; v 1</font></b></td>";
		echo  "      <td width='410'>";
		echo  "        <table border='0' cellpadding='0' cellspacing='0' width='100%' id='table1'>";
		echo  "						<tr>";
		echo  "										<td>";
		echo  "										<p style='margin: 10px'><b>";
		echo  "										<font face='Tahoma' style='font-size: 13pt' color='#CC0000'>";
		echo  "										Erro de preenchimento...</font></b></td>";
		echo  "						</tr>";
		echo  "						<tr>";
		echo  "										<td>";
		echo  "										<div align='center'>";
		echo  "														<table border='0' cellpadding='0' cellspacing='0' width='390' id='table2'>";
		echo  "																		<tr>";
		echo  "																						<td valign='top'>";
		echo  "																						<table border='0' cellpadding='0' cellspacing='0' width='390' id='table3'>";
		echo  "																										<tr>";
		echo  "																														<td class='texto2'>";
		echo  "																														<p style='line-height: 160%'><font face='Tahoma'><font size='2' color='#000000'>O campo </font><font size='2' color='#0059C1'><b>".$StrVar."</b></font><font size='2' color='#000000'>, não foi preenchido. Favor <b><a href='javascript:history.go(-1)'><font color='#000000'><span style='text-decoration: none'>voltar</span></font></a></b> e preenchê-lo.</font></font></td>";
		echo  "																														</tr>";
		echo  "																										</tr>";
		echo  "																										</table>";
		echo  "																						</td>";
		echo  "																		</tr>";
		echo  "														</table>";
		echo  "										</div>";
		echo  "										</td>";
		echo  "						</tr>";
		echo  "						<tr>";
		echo  "										<td></td>";
		echo  "						</tr>";
		echo  "						</table>";
		echo  "        </td>";
		echo  "    </tr>";
		echo  "  </table>";
		echo  "  </center>";
		echo  "</div>";
		echo  "</body>";
		echo  "</html>";
		
		$passer = "False";
	}else{
		$Name = $StrVar;
	}
}
	
	Checa(txtNome);
	Checa(txtSenha);
*/
	if(!empty($_SESSION["LogonCount"])){
		if($_SESSION["LogonCount"] > 2){
			header("Location: falha.php?reacao=6");
		}
	}
 
//	if(($_GET["mode"] == "logon") and (!empty(trim($_GET["txtNome"]))) and (!empty(trim($_GET["txtSenha"]))){
	if($_GET["mode"] == "logon"){
		$vtxtNome = trim($_POST["txtNome"]);
		$vtxtSenha = trim($_POST["txtSenha"]);
		
	// Instancia o objeto de conexao
		$DB = new dbConnecta();

		$vSQL = "SELECT * FROM usuarios WHERE txtNome = '". $vtxtNome ."'";
		
		$DB->query($vSQL);
		$rec = $DB->next_record();
		
		if($DB->num_rows() > 0) {
			if($vtxtSenha == trim($rec["txtSenha"])){

				$status = trim($rec["status"]);

				if(($status == "Usuario") || ($status == "Admin")){
					$_SESSION["Auth"] = "Y";
					$_SESSION["coduser"] = trim($rec["Id"]);
					$_SESSION["Status"] = trim($rec["status"]);
					$_SESSION["txtNome"] = trim($rec["txtNome"]);
					$_SESSION["cadastrar"] = trim($rec["cadastrar"]);
					$_SESSION["excluir"] = trim($rec["excluir"]);
					$_SESSION["editar"] = trim($rec["editar"]);
					$_SESSION["bilhetagem"] = trim($rec["bilhetagem"]);
					$_SESSION["bnq"] = trim($rec["bnq"]);
					$_SESSION["clientes"] = trim($rec["clientes"]);
					$_SESSION["usuarios"] = trim($rec["usuarios"]);
					$_SESSION["painel_cliente"] = trim($rec["painel_cliente"]);
					$DB->close();
					header("Location: ../index.php");
				}elseif($status == "Analise"){
						$_SESSION["Analise"] = "Y";
						$_SESSION["coduser"] = trim($rec["Id"]);
						$_SESSION["Status"] = trim($rec["status"]);
						$_SESSION["txtNome"] = trim($rec["txtNome"]);
						$DB->close();
						header("Location: falha.php?reacao=2");
				} // if(($status
			}else{
				$_SESSION["LogonCount"] = $_SESSION["LogonCount"] + 1;
			} // if($vtxtS
		} // if($DB->
	} // if($_GET[
?>

<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Prova Eletrônica&nbsp; -&nbsp; [ ACESSO RESTRITO ]</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
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

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<div align="center">
	<table border="0" width="709" cellpadding="0">
		<tr>
			<td bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td height="60"></td>
						</tr>
						<tr>
							<td valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="399" class="texto2">
									<p align="center" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 2px">
									<font size="6" color="#CC0000"><b>Acesso 
									Restrito</b></font></p>
									<p align="center" style="margin-top:2px; margin-bottom:2px">
									<font size="2" color="#CC0000">Exclusivo para 
									funcionários da Tecnodata<br><? echo $_SERVER["REMOTE_ADDR"]; echo " - " . $_SESSION["LogonCount"];?></font> </td>
									<td width="1" bgcolor="#C0C0C0" valign="top">
									<img border="0" src="../bnq/img/linha_bra.gif" width="1" height="1"></td>
									<td width="340">
									<div align="right">
										<table border="0" cellpadding="0" cellspacing="0" width="330" bgcolor="#F0F0F0">
											<tr>
												<td height="20" valign="top">
							<img border="0" src="../img/linha_bra.gif" width="4" height="4"></td>
											</tr>
											<tr>
												<td class="texto2" height="25" width="100%" align="right">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
			<td height="20">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="310" bgcolor="#C0C0C0">
				<form method="post" name="novousuario" action="../bnq/funcoes/cadastra_novousuario.php">
					<tr>
						<td class="texto1" height="25" bgcolor="#F0F0F0">
						<p style="line-height: 150%; margin-left: 5px; margin-top: 2px; margin-bottom: 5px" align="center">
						<b><font size="2" color="#CC3300">Não foi possível 
						efetuar seu logon no sistema.</font></b></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p align="center"><u><b><font size="1" color="#3672AC">
						<a href="javascript:history.go(-1)">
						<font color="#3672AC">Tentar novamente</font></a></font></b></u></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px" align="center">
								<font size="1" color="#808080">
												<b>
												&nbsp;</b></font></td>
					</tr>
					<tr>
						<td class="texto2" height="25" bgcolor="#F0F0F0">
						<p style="margin-left: 5px" align="center">
						<font color="#808080">Preste atenção ao digitar seus 
						dados. Seu acesso será bloqueado na terceira tentativa 
						inválida.</font></td>
					</tr>
					</table>
			</div>
			</td>
													</tr>
													</table>
												</td>
											</tr>
											</form>
											<tr>
												<td class="texto2" height="20" width="100%" align="right">&nbsp;</td>
											</tr>
											</table>
									</div>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="20">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<p align="left">&nbsp;</p>

</body>

</html>