<?
	require("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("bean.inc.php");	
	require_once("./includes/funcoes.inc.php");

	// Executa a conexao com o banco de dados
	dbcon();
	
	$SQL = "";
	$SQL = "SELECT e.*, 
			(SELECT nome  FROM pessoa p WHERE p.idpes = e.idpes) AS consultor
			FROM escola e
			WHERE idesc = " . $_POST["codescola"];
	
	// Executa a procura
	$PES = mysql_query($SQL);

	if (!$PES) {
		die("Erro ao select da tabela AGENDA. Técnico:" . mysql_error());
	}

	if (mysql_num_rows($PES) < 1){
		$_SESSION["MSG"] = "Não existem dados para ser pesquisado.";
	}
	
	$dados = mysql_fetch_array($PES);
?>

<html>
<head>
<title>.:: Tecnodata Educacional - Dados Pessoais ::.</title>

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta name="Microsoft Border" content="none">

<style type="text/css">
<!--
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style11 {font-size: 12px}
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
<link href="css/tecnodata.css" rel="stylesheet" type="text/css">
<link href="tmt_validator/style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="tmt_validator/script_tmt_validator.js"></script>
<style type="text/css">
<!--
.style13 {
	font-size: 14px;
	color: #FF0000;
}
.style14 {
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style15 {
	font-size: 14px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style17 {
	font-size: 14px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style18 {font-size: 14px}
.style19 {color: #000000}
.style20 {
	font-size: 14px;
	font-weight: bold;
}
.style22 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" >
<form method="post" name="frmCad" id="frmCad" action="" >
	<center>
				<table border="0" width="95%" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="5" class="tdfun"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
									<td><div align="center" class="style10 style13">
									    <div align="right">
									        <input name="btGravar" type="button" class="label_botao" id="btGravar" value="Imprimir" onClick="javascript:window.print();">
									    </div>
									</div></td>
							</tr>
								
								<tr>
									<td><b><span class="titulo style14">Escola</span></b>
                
								    <hr></td>
								</tr>
					</table>					</tr>
					<tr>
      <td width="4" valign="top">&nbsp;</td>
      <td colspan="2" id="cbConsultor"><p class="style10 style11"><strong>Consultor</strong><br>
          <? echo $dados["consultor"]; ?>
      </p>          </td>

      <td colspan="2" class="style7 style11 style10"><strong>Status<br>
      </strong><span class="style10 style11"><? echo setStatus($dados["status"]); ?></span></td>
      </tr>
<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style11 style10" id="txtCNPJ"><strong>CNPJ<br>
						</strong><span class="style10 style11"><? echo $dados["cnpj"]; ?></span></td>
						<td colspan="2" class="style10 style11 style1 style4 texto"><strong>Insc Est<br>
						</strong><span class="style10 style11"><? echo $dados["insc_est"]; ?></span></td>
					</tr>	
    <tr>
      <td valign="top">&nbsp;</td>
      <td colspan="2" class="style11 style10" id="txtNomfanta"><strong>Nome Fantasia <br>
      </strong><span class="style10 style11"><? echo $dados["nome_fantasia"]; ?></span></td>
      <td colspan="2" valign="top"><span class="style12"><strong>Orçamento</strong></span><br>
          <span class="style10 style11"><? echo setOrcamento($dados["orcamento"]); ?></span></td>
      </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td colspan="2" class="style11 style10 style7"><strong>Raz&atilde;o Social<br>
          </strong><span class="style10 style11"><? echo $dados["razao_social"]; ?></span><strong><br>
          </strong></td>
      <td colspan="2" valign="top"><span class="style12"><strong>e-Mail</strong></span><br>
          <span class="style10 style11"><? echo setEMail($dados["email_tipo"]); ?></span></td>
      </tr>
					<tr>
						<td valign="top" colspan="5">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="5" class="tdfun"><span class="style10 style17 style18 style19"><b>Endere&ccedil;o</b></span>
					    <hr></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="4" class="style12" id="txtEnd"><strong>Endereço<br>
						</strong><span class="style10 style11"><? echo $dados["endereco"]; ?></span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="4" class="style12" id="txtBairro"><strong>Bairro<br>
						</strong><span class="style10 style11"><? echo $dados["bairro"]; ?></span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style12" id="txtCidade"><strong>Cidade<br>
						</strong><span class="style10 style11"><? echo $dados["cidade"]; ?></span></td>
						<td width="92" class="style12" id="cbUF"><strong>Estado<br>
						</strong><span class="style10 style11"><? echo $dados["uf"]; ?></span></td>
						<td width="165" align="left">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style12" id="txtCEP"><strong>CEP<br>
						</strong><span class="style10 style11"><? echo $dados["cep"]; ?></span><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="http://www.cep.com.br" target="_blank"></a></font></td>
					    <td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;</span></td>
				    <td align="left">					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>
<tr>
						<td colspan="5" class="tdfun">
							<span class="style10 style18"><b>Contato</b></span>
				<hr></td>
				  </tr>
					
					<tr>
						<td>&nbsp;</td>
						<td width="117" class="style12" id="txtFone"><strong>Fone<br>
						</strong><span class="style10 style11"><? echo $dados["fone"]; ?></span></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style11 style10 style7"><strong>Fax<br>
						</strong><span class="style10 style11"><? echo $dados["fax"]; ?></span></td>
						<td colspan="1">&nbsp;</td>
						<td colspan="2" class="style12" id="txtFalarCom"><strong>falar com<br>
						</strong><span class="style10 style11"><? echo $dados["falar_com"]; ?></span></td>
				    </tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style11 style10 style1 style4"><strong>Cargo<br>
						</strong><span class="style10 style11"><? echo $dados["cargo"]; ?></span></td>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style11 style10 style7"><strong>E-mail<br>
						</strong><span class="style10 style11"><? echo $dados["email"]; ?></span></td>
					    <td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						
        <td colspan="3">&nbsp;</td>
					</tr>					
<tr>
						<td colspan="5" class="tdfun"><span class="style10 style18"><b>Ensino</b></span>
			    <hr></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
					    Infantil - <span class="style10 style11"><? echo $dados["ensino_inf_nr"]; ?></span></span></td>
						<td>&nbsp;</td>
						<td><span class="texto style4 style1 style10 style11">Fund I - <span class="style10 style11"><? echo $dados["ensino_fun1_nr"]; ?></span></span></td>
						<td align="left">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
 M&eacute;dio -

						<span class="style10 style11"><? echo $dados["ensino_med_nr"]; ?></span></span></td>
				        <td width="223">&nbsp;</td>
					    <td><span class="texto style4 style1 style10 style11">Fund II - <span class="style10 style11"><? echo $dados["ensino_fun2_nr"]; ?></span></span></td>
					    <td align="left"><span class="style1"></span></tr>
<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
 Total

						- <span class="style10 style11"><? echo $dados["ensino_total"]; ?></span></span></td>
			          <td width="223">&nbsp;</td>
					    <td><span class="texto style4 style1">&nbsp;&nbsp;&nbsp;</span></td>
					    <td align="left"><span class="style1"></span>					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>					
<tr>
						<td colspan="5" class="tdfun"><span class="style10 style17"><b>Aceita&ccedil;&atilde;o</b></span>
		        <hr></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style7"><span class="style1 style10 style11">
						  <strong>Sistema</strong><br>
						  <span class="style10 style11"><? echo setTipo($dados["sistema"]); ?></span></span></td>
						<td colspan="2"><span class="texto style4 style1 style10 style11"><strong>Jogos</strong><br>
					    <span class="style10 style11"><? echo setTipo($dados["jogos"]); ?></span></span></td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>	
<tr>
						<td colspan="5" class="tdfun"><span class="style10 style18"><b>APM</b></span>
			    <hr></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="4"><span class="style7 style10 style11" ><strong>Representante</strong><br>
					    <span class="style10 style11"><? echo $dados["apm_representante"]; ?></span></span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="4"><span class="style7 style10 style11" ><strong>Telefone</strong><br>
					    <span class="style10 style11"><? echo $dados["apm_telefone"]; ?></span></span></td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>									
<tr>
						<td colspan="5" class="tdfun"><span class="style15">Informa&ccedil;&otilde;es Complementares </span>
			    <hr></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style7"><span class="style1 style10 style11">
						  <strong>Acessa Internet </strong><br>
						  <span class="style10 style11"><? echo setInternet($dados["acessa_internet"]); ?> - Outros: <? echo $dados["acessa_ineternet_out"]?>  </span></span></td>
						<td colspan="2" class="style11 style10 style1 style4 texto"><strong>
						  Envolvimento dos Pais <br>
						</strong><span class="style10 style11"><? echo setEnvPais($dados["env_pais"]); ?> - Outros: <? echo $dados["env_pais_outros"]?></span></td>
				    </tr>
<tr>
						<td>&nbsp;</td>
						<td colspan="2" class="style11 style10 style1"><strong>
						  Meio Transporte<br>
			    </strong><span class="style10 style11"><? echo setTransporte($dados["transporte"]); ?> - Outros: <? echo $dados["tranporte_outros"]?></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;</span></td>
						<td align="left">&nbsp;</td>
				  </tr>										
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>
					<tr>
					    <td colspan="5"><span class="style20">Observa&ccedil;&otilde;es</span><br>
				        <hr></td>
				    </tr>
					<tr>
					    <td colspan="5">
<?
			$SQL="";
			$SQL="SELECT a.data_obs, a.hora_obs, a.data_vis, a.hora_vis, a.obs,
					(SELECT nome FROM pessoa WHERE a.idpes_de = idpes) AS agendaDE,
					(SELECT nome FROM pessoa WHERE a.idpes_para = idpes) AS agendaPARA, a.visita
					FROM agenda a, escola e, pessoa p
					WHERE a.idesc = e.idesc
					AND p.idpes = a.idpes_de
					AND a.idesc = " . $_POST["codescola"];
				
			$PES = mysql_query($SQL);
			
			if (!$PES) {
				die("Erro ao select da tabela AGENDA. Técnico:" . mysql_error());
			}
?>
 					 <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="7%"><span class="style22">Data</span></td>
                                <td width="7%"><span class="style22">Hora</span></td>
                                <td width="9%"><span class="style22">Data Vis </span></td>
                                <td width="8%"><span class="style22">Hora Vis </span></td>
                                <td width="18%"><span class="style22">De</span></td>
                                <td width="18%"><span class="style22">Para</span></td>
                                <td width="33%"><span class="style22">Observa&ccedil;&atilde;o</span></td>
                            </tr>
				  <?
					while($dados = mysql_fetch_array($PES)){
		          ?>
                            <tr>
                                <td><span class="style10 style11"><? echo bancoToData($dados["data_obs"],2); ?></span></td>
                                <td><span class="style10 style11"><? echo formataHora($dados["hora_obs"]); ?></span></td>
                                <td><span class="style10 style11"><? echo bancoToData($dados["data_vis"],2); ?></span></td>
                                <td><span class="style10 style11"><? echo formataHora($dados["hora_vis"]); ?></span></td>
                                <td><span class="style10 style11"><? echo $dados["agendaDE"]; ?></span></td>
                                <td><span class="style10 style11"><? echo $dados["agendaPARA"]; ?></span></td>
                                <td><span class="style10 style11"><? echo $dados["obs"]; ?></span></td>
                            </tr>
					<? } ?>
                        </table>
						
						</td>
				    </tr>					
				</table>
		        </center>
		</form>
</body>
</html>

