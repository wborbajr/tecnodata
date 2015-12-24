<?
	require_once("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");
	require_once("includes/populaCombo.inc.php");

	// Executa a conexao com o banco de dados
	dbcon();
	
	// Verirfica se esta vindo para edicao
	if($_SESSION["acao"] == "edita"){
		$codEscola = $_SESSION["codigo"];
		$_SESSION["acao"] = "";
		$_SESSION["codigo"] = "";
		
		$SQL = "SELECT * FROM escola WHERE idesc = " . $codEscola;
		
		$result = mysql_query($SQL);

		if (!$result) {
			die("Erro ao select da tabela ESCOLA. Técnico:" . mysql_error());
		}

		$dados = mysql_fetch_array($result);
		
	}
	
    // Verifica se foi pressionado o botao gravar.
	if ($_SERVER['REQUEST_METHOD'] == "POST"){

		// Inclusao da calsse para gerar o SQL
		require("./class/clausulas_sql.class.php"); 
		
		// Define a classe
		$sql = new clausulas_sql;
		
		// INSERT
		if($_POST["txtEdita"] == "") {
			// Campos e dados para INSERT
			$campos = array(
			"idpes","cnpj","insc_est","nome_fantasia","razao_social",
			"endereco","bairro","cidade","uf","cep",
			"fone","fax","falar_com","cargo",
			"email","ensino_inf","ensino_inf_nr","ensino_fun1",
			"ensino_fun1_nr","ensino_med","ensino_med_nr","ensino_fun2",
			"ensino_fun2_nr","ensino_total","sistema","jogos",
			"apm_representante","apm_telefone","acessa_internet","acessa_ineternet_out",
			"env_pais","env_pais_outros","transporte","tranporte_outros","orcamento","email_tipo","status");
			
			$dados = array(
			$_POST["cbConsultor"],$_POST["txtCNPJ"],$_POST["txtInsEST"],strtoupper($_POST["txtNomfanta"]),strtoupper($_POST["txtRazSoc"]),
			strtoupper($_POST["txtEnd"]),strtoupper($_POST["txtBairro"]),strtoupper($_POST["txtCidade"]),$_POST["cbUF"],$_POST["txtCEP"],
			$_POST["txtFone"],$_POST["txtFAX"],strtoupper($_POST["txtFalarCom"]),strtoupper($_POST["txtCargo"]),
			$_POST["txtEmail"],$_POST["cbINF"],$_POST["txtNrINF"],$_POST["cbFUNI"],
			$_POST["txtNrFUNI"],$_POST["cbMedio"],$_POST["txtNrMedio"],$_POST["cbFUNII"],
			$_POST["txtNrFUNII"],$_POST["txtTotal"],$_POST["cbSistema"],$_POST["cbJogos"],
			$_POST["txtRepAPM"],$_POST["txtFoneAPM"],$_POST["cbAcINET"],$_POST["txtAcINETOutro"],
			$_POST["cbEnvPais"],$_POST["txtEnvPaisOutro"],$_POST["cbTran"],$_POST["txtTransOutro"],
			$_POST["cbOrcamento"],$_POST["cbEmail"],$_POST["cbStatus"]);
	
			// Gera a cláusula SQL INSERT
			$comando_sql = "";
			$comando_sql = $sql->gera_insert("escola", $campos, $dados); 

		// UPDATE
		}else{ 
			// Campos e dados para INSERT
			$campos = array(
			"idpes","cnpj","insc_est","nome_fantasia","razao_social",
			"endereco","bairro","cidade","uf","cep",
			"fone","fax","falar_com","cargo",
			"email","ensino_inf","ensino_inf_nr","ensino_fun1",
			"ensino_fun1_nr","ensino_med","ensino_med_nr","ensino_fun2",
			"ensino_fun2_nr","ensino_total","sistema","jogos",
			"apm_representante","apm_telefone","acessa_internet","acessa_ineternet_out",
			"env_pais","env_pais_outros","transporte","tranporte_outros","orcamento","email_tipo","status");
			
			$dados = array(
			$_POST["cbConsultor"],$_POST["txtCNPJ"],$_POST["txtInsEST"],strtoupper($_POST["txtNomfanta"]),strtoupper($_POST["txtRazSoc"]),
			strtoupper($_POST["txtEnd"]),strtoupper($_POST["txtBairro"]),strtoupper($_POST["txtCidade"]),$_POST["cbUF"],$_POST["txtCEP"],
			$_POST["txtFone"],$_POST["txtFAX"],strtoupper($_POST["txtFalarCom"]),strtoupper($_POST["txtCargo"]),
			$_POST["txtEmail"],$_POST["cbINF"],$_POST["txtNrINF"],$_POST["cbFUNI"],
			$_POST["txtNrFUNI"],$_POST["cbMedio"],$_POST["txtNrMedio"],$_POST["cbFUNII"],
			$_POST["txtNrFUNII"],$_POST["txtTotal"],$_POST["cbSistema"],$_POST["cbJogos"],
			$_POST["txtRepAPM"],$_POST["txtFoneAPM"],$_POST["cbAcINET"],$_POST["txtAcINETOutro"],
			$_POST["cbEnvPais"],$_POST["txtEnvPaisOutro"],$_POST["cbTran"],$_POST["txtTransOutro"],
			$_POST["cbOrcamento"],$_POST["cbEmail"],$_POST["cbStatus"]);
	
			// Gera a cláusula SQL INSERT
			$comando_sql = "";
			$comando_sql = $sql->gera_update("escola", $campos, $dados, "WHERE idesc = " . $_POST["txtEdita"]); 

		}
		
		$result = mysql_query($comando_sql);
		
		if ($result == 1){
			$_SESSION["MSG"] = "Informação gravada com sucesso.";
		}else{
			$_SESSION["MSG"] = "Erro ao incluir escola. Tente novamente.";
		}
	}
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
-->
</style>
</head>
<body bgcolor="#FFFFFF" >
<form method="post" name="frmCad" id="frmCad" action="<? echo $_SERVER["PHP_SELF"]; ?>" tmt:validate="true" >
			<center>
				<table border="0" width="95%" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="5" class="tdfun"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
									<td><div align="center" class="style10 style13"><span class="style10 "><b>
									<? $mostra=$_SESSION["MSG"]; echo $mostra; $_SESSION["MSG"]="" ?>
		                    </b></span></div></td>
							</tr>
								
								<tr>
									<td bgcolor="#6699FF"><font color="#FFFFFF" size="2" face="arial"><b><span class="titulo">Escola
                </span></b></font></td>
								</tr>
					</table>					</tr>
					<tr>
      <td width="4" valign="top">&nbsp;</td>
      <td width="117" id="cbConsultor"><span class="style10 style11">Consultor</span></td>

      <td valign="top">
	  
		<? $arrayUsuario = populaCombo("pessoa","idpes","nome","","nome"); ?>
		<select name="cbConsultor" tmt:invalidindex="0" tmt:message="Selecione um consultor" />
		<option>Selecione</option>
		<?
		for ($i = 0; $i < count($arrayUsuario); ++$i) {
		?>
		<option value="<? echo $arrayUsuario[$i][0]; ?>" <? if ($dados["idpes"]==$arrayUsuario[$i][0]){ echo "selected"; } ?>><? echo $arrayUsuario[$i][1]; ?></option>
		<?
		}
		?>
		</select>	
	  
	  </td>
      <td class="style7 style11 style10">&nbsp;&nbsp;&nbsp;Status</td>
      <td valign="top">
	  <select name="cbStatus" id="cbStatus">
          <option value="">Selecione</option>
	      <option value="P" <? if ($dados["status"]=="P"){ echo "selected"; } ?>>Prospect</option>
	      <option value="R" <? if ($dados["status"]=="R"){ echo "selected"; } ?>>Retorno</option>
      </select>      </td>
				  </tr>
<tr>
						<td>&nbsp;</td>
						<td id="txtCNPJ"><span class="style10 style11">CNPJ</span></td>
						<td><input name="txtCNPJ" type="text" id="txtCNPJ" value="<? echo $dados["cnpj"];?>" ></td>
						<td width="92" class="style7"><span class="texto style4 style1 style11 style10">&nbsp;&nbsp;&nbsp;Insc Est </span></td>
						<td width="165" align="left"><input name="txtInsEST" type="text" id="txtInsEST" value="<? echo $dados["insc_est"];?>"></td>
</tr>	
    <tr>
      <td valign="top">&nbsp;</td>
      <td id="txtNomfanta"><span class="style10 style11">Nome Fantasia </span></td>
      <td valign="top"><input name="txtNomfanta" type="text" class="required" id="txtNomfanta" size="35" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe o nome fantasia" value="<? echo $dados["nome_fantasia"];?>"/></td>
      <td valign="top"><span class="style12">&nbsp; Orçamento</span></td>
      <td valign="top">
	  <select name="cbOrcamento" id="cbOrcamento">
          <option value="">Selecione</option>
	      <option value="M" <? if ($dados["orcamento"]=="M"){ echo "selected"; } ?>>e-Mail</option>
	      <option value="C" <? if ($dados["orcamento"]=="C"){ echo "selected"; } ?>>Correio</option>
	      <option value="F" <? if ($dados["orcamento"]=="F"){ echo "selected"; } ?>>Fax</option>
	      <option value="E" <? if ($dados["orcamento"]=="E"){ echo "selected"; } ?>>em Mãos</option>
      </select>
	  </td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td><span class="style7 style10 style11" >Raz&atilde;o Social </span></td>
      <td valign="top"><input name="txtRazSoc" type="text" id="txtRazSoc" value="<? echo $dados["razao_social"];?>" size="35"></td>
      <td valign="top"><span class="style12">&nbsp; e-Mail</span></td>
      <td valign="top">
	  <select name="cbEmail" id="cbEmail">
          <option value="">Selecione</option>
	      <option value="A" <? if ($dados["email_tipo"]=="A"){ echo "selected"; } ?>>Apresentação</option>
	      <option value="P" <? if ($dados["email_tipo"]=="P"){ echo "selected"; } ?>>Perg Freq</option>
	      <option value="T" <? if ($dados["email_tipo"]=="T"){ echo "selected"; } ?>>Todos</option>
      </select>
	  </td>
    </tr>
					<tr>
						<td valign="top" colspan="5">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>Endere&ccedil;o</b></font></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtEnd"><span class="style12">Endereço</span></td>
						<td colspan="3"><input name="txtEnd" type="text" class="required" id="txtEnd" value="<? echo $dados["endereco"];?>" size="75" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe um endereço válido" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtBairro"><span class="style12">Bairro</span></td>
						<td colspan="3"><input name="txtBairro" type="text" class="required" id="txtBairro" value="<? echo $dados["bairro"];?>" size="75" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe um bairro válido" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtCidade"><span class="style12">Cidade</span></td>
						<td><input name="txtCidade" type="text" class="required" id="txtCidade" value="<? echo $dados["cidade"];?>" size="35" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe uma cidade válida" /></td>
						<td id="cbUF"><span class="style12">&nbsp;&nbsp;&nbsp;Estado</span></td>
						<td align="left">
						<select name="cbUF" size="1" class="required" id="cbUF" >
							<option value="">Selecione</option>
							<option value="AC"<? if ($dados["uf"]=="AC"){ echo "selected"; } ?>>AC</option>
							<option value="AL"<? if ($dados["uf"]=="AL"){ echo "selected"; } ?>>AL</option>
							<option value="AM"<? if ($dados["uf"]=="AM"){ echo "selected"; } ?>>AM</option>
							<option value="AP"<? if ($dados["uf"]=="AP"){ echo "selected"; } ?>>AP</option>
							<option value="BA"<? if ($dados["uf"]=="BA"){ echo "selected"; } ?>>BA</option>
							<option value="CE"<? if ($dados["uf"]=="CE"){ echo "selected"; } ?>>CE</option>
							<option value="DF"<? if ($dados["uf"]=="DF"){ echo "selected"; } ?>>DF</option>
							<option value="GO"<? if ($dados["uf"]=="GO"){ echo "selected"; } ?>>GO</option>
							<option value="MA"<? if ($dados["uf"]=="MA"){ echo "selected"; } ?>>MA</option>
							<option value="MT"<? if ($dados["uf"]=="MT"){ echo "selected"; } ?>>MT</option>
							<option value="MS"<? if ($dados["uf"]=="MS"){ echo "selected"; } ?>>MS</option>
							<option value="MG"<? if ($dados["uf"]=="MG"){ echo "selected"; } ?>>MG</option>
							<option value="PA"<? if ($dados["uf"]=="PA"){ echo "selected"; } ?>>PA</option>
							<option value="PB"<? if ($dados["uf"]=="PB"){ echo "selected"; } ?>>PB</option>
							<option value="PR"<? if ($dados["uf"]=="PR"){ echo "selected"; } ?>>PR</option>
							<option value="PE"<? if ($dados["uf"]=="PE"){ echo "selected"; } ?>>PE</option>
							<option value="PI"<? if ($dados["uf"]=="PI"){ echo "selected"; } ?>>PI</option>
							<option value="RJ"<? if ($dados["uf"]=="RJ"){ echo "selected"; } ?>>RJ</option>
							<option value="RN"<? if ($dados["uf"]=="RN"){ echo "selected"; } ?>>RN</option>
							<option value="RO"<? if ($dados["uf"]=="RO"){ echo "selected"; } ?>>RO</option>
							<option value="RS"<? if ($dados["uf"]=="RS"){ echo "selected"; } ?>>RS</option>
							<option value="RR"<? if ($dados["uf"]=="RR"){ echo "selected"; } ?>>RR</option>
							<option value="SC"<? if ($dados["uf"]=="SC"){ echo "selected"; } ?>>SC</option>
							<option value="SE"<? if ($dados["uf"]=="SE"){ echo "selected"; } ?>>SE</option>
							<option value="SP"<? if ($dados["uf"]=="SP"){ echo "selected"; } ?>>SP</option>

						</select>
							</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtCEP"><span class="style12">CEP</span></td>
					    <td width="223"><input name="txtCEP" class="required" id="txtCEP" value="<? echo $dados["cep"];?>" size="9"  tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe um CEP válido" tmt:filters="numbersonly" />
					        <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="http://www.cep.com.br" target="_blank">
					  Pesquisar CEP</a></font></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;</span></td>
				    <td align="left">					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>
<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun">
							<font color="#FFFFFF" size="2" face="arial"><b>Contato</b></font></td>
				  </tr>
					
					<tr>
						<td>&nbsp;</td>
						<td id="txtFone"><span class="style12">Fone</span></td>
						<td><input name="txtFone" class="required" id="txtFone" value="<? echo $dados["fone"];?>" size="15"  tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe um telefone válido" />						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >Fax</span></td>
						<td colspan="1"><input name="txtFAX" type="text" id="txtFAX" value="<? echo $dados["fax"];?>" size="15" maxlength="19"></td>
						<td id="txtFalarCom"><span class="style12">falar com</span></td>
					  <td><input name="txtFalarCom" type="text" class="required" id="txtFalarCom" value="<? echo $dados["falar_com"];?>" size="30" maxlength="50" tmt:required="true" tmt:errorclass="invalid" tmt:message="Informe um contato válido" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style4 style1 style10 style11">Cargo</span></td>
						<td colspan="3"><input name="txtCargo" type="text" id="txtCargo" value="<? echo $dados["cargo"];?>" size="80"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >E-mail</span></td>
					  <td colspan="3"><input name="txtEmail" type="text" id="txtEmail" value="<? echo $dados["email"];?>" size="80" tmt:errorclass="invalid" tmt:message="Informe um email válido" tmt:pattern="email" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						
        <td colspan="3">&nbsp;</td>
					</tr>					
<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>Ensino</b></font></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						    <input name="cbINF" type="checkbox" class="boxes" id="cbINF"  value="true" <? if ($dados["ensino_inf"]=="t"){ echo "checked"; } ?> />	    Infantil</span></td>
						<td><span class="style1"><span class="style7">
					  <input name="txtNrINF" type="text" id="txtNrINF" value="<? echo $dados["ensino_inf_nr"];?>" size="6"  />
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;<span class="style1 style10 style11">
						    <input name="cbFUNI" type="checkbox" class="boxes" id="cbFUNI" value="true" <? if ($dados["ensino_fun1"]=="t"){ echo "checked"; } ?> />
                        </span>Fund I</span></td>
						<td align="left"><span class="style1"><span class="style7">
						  <input name="txtNrFUNI" type="text"  id="txtNrFUNI" value="<? echo $dados["ensino_fun1_nr"];?>" size="6"  />
						</span></span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  <input name="cbMedio" type="checkbox" class="boxes" id="cbMedio" value="true" <? if ($dados["ensino_med"]=="t"){ echo "checked"; } ?>/>
 M&eacute;dio

						</span></td>
				      <td width="223"><span class="style1"><span class="style7">
				        <input name="txtNrMedio" type="text" id="txtNrMedio" value="<? echo $dados["ensino_med_nr"];?>" size="6" />
				      </span></span></td>
					    <td><span class="texto style4 style1 style10 style11"><span class="style1 style10 style11"> 
					       &nbsp; <input name="cbFUNII" type="checkbox" class="boxes" id="cbFUNII" value="true" <? if ($dados["ensino_fun2"]=="t"){ echo "checked"; } ?>/>
					    </span>
                        
                        Fund II</span></td>
					    <td align="left"><span class="style1"></span>					<span class="style7">
					      <input name="txtNrFUNII" type="text" id="txtNrFUNII" value="<? echo $dados["ensino_fun2_nr"];?>" size="6" />
					    </span></tr>
<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
 Total

						</span></td>
				        <td width="223"><span class="style1"><span class="style7">
				        <input name="txtTotal" type="text" id="txtTotal" value="<? echo $dados["ensino_total"];?>" size="6">
				      </span></span></td>
					    <td><span class="texto style4 style1">&nbsp;&nbsp;&nbsp;</span></td>
					    <td align="left"><span class="style1"></span>					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>					
<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>Aceita&ccedil;&atilde;o</b></font></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  Sistema</span></td>
						<td><span class="style1"><span class="style7 style10 style11">
						  <select name="cbSistema" id="cbSistema">
							  <option value="">Selecione</option>
							  <option value="O" <? if ($dados["sistema"]=="O"){ echo "selected"; } ?>>Ótima</option>
							  <option value="B" <? if ($dados["sistema"]=="B"){ echo "selected"; } ?>>Boa</option>
							  <option value="R" <? if ($dados["sistema"]=="R"){ echo "selected"; } ?>>Ruim</option>
			            </select>
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
						  Jogos</span></td>
						<td align="left"><span class="style12">
						  <select name="cbJogos" id="cbJogos">
							  <option value="">Selecione</option>
							  <option value="O" <? if ($dados["jogos"]=="O"){ echo "selected"; } ?>>Ótima</option>
							  <option value="B" <? if ($dados["jogos"]=="B"){ echo "selected"; } ?>>Boa</option>
							  <option value="R" <? if ($dados["jogos"]=="R"){ echo "selected"; } ?>>Ruim</option>
				        </select>
						</span> </td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>	
<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>APM</b></font></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >Representante</span></td>
						<td colspan="3"><input name="txtRepAPM" type="text" id="txtRepAPM" value="<? echo $dados["apm_representante"];?>" size="50"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >Telefone</span></td>
						<td colspan="3"><input name="txtFoneAPM" type="text" id="txtFoneAPM" value="<? echo $dados["apm_telefone"];?>"></td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>									
<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>Informa&ccedil;&otilde;es Complementares </b></font></td>
				  </tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  Acessa Internet </span></td>
						<td><span class="style1"><span class="style7">
						  <select name="cbAcINET" id="cbAcINET">
							  <option value="">Selecione</option>
							  <option value="E" <? if ($dados["acessa_internet"]=="E"){ echo "selected"; } ?>>Escola</option>
							  <option value="C" <? if ($dados["acessa_internet"]=="C"){ echo "selected"; } ?>>Casa</option>
							  <option value="Y" <? if ($dados["acessa_internet"]=="Y"){ echo "selected"; } ?>>Cyber</option>
							  <option value="O" <? if ($dados["acessa_internet"]=="O"){ echo "selected"; } ?>>Outros</option>
			            </select>
						  <input name="txtAcINETOutro" type="text" id="txtAcINETOutro" value="<? echo $dados["acessa_ineternet_out"];?>">
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
						  Env Pais </span></td>
					  <td align="left"><select name="cbEnvPais" id="cbEnvPais">
							  <option value="">Selecione</option>
							  <option value="P" <? if ($dados["env_pais"]=="P"){ echo "selected"; } ?>>Palestras</option>
							  <option value="S" <? if ($dados["env_pais"]=="S"){ echo "selected"; } ?>>Sites</option>
							  <option value="E" <? if ($dados["env_pais"]=="E"){ echo "selected"; } ?>>Eventos</option>
							  <option value="O" <? if ($dados["env_pais"]=="O"){ echo "selected"; } ?>>Outros</option>
						  </select>
						  <input name="txtEnvPaisOutro" type="text" id="txtEnvPaisOutro" value="<? echo $dados["env_pais_outros"];?>"></td>
					</tr>
<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  Meio Transporte </span></td>
						<td><span class="style1"><span class="style7">
						  <select name="cbTran" id="cbTran">
							  <option value="">Selecione</option>
							  <option value="P" <? if ($dados["transporte"]=="P"){ echo "selected"; } ?>>Publico</option>
							  <option value="A" <? if ($dados["transporte"]=="A"){ echo "selected"; } ?>>Particular</option>
							  <option value="C" <? if ($dados["transporte"]=="C"){ echo "selected"; } ?>>Contrato</option>
							  <option value="O" <? if ($dados["transporte"]=="O"){ echo "selected"; } ?>>Outros</option>
			             </select>
						  <input name="txtTransOutro" type="text" id="txtTransOutro" value="<? echo $dados["tranporte_outros"];?>">
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;</span></td>
						<td align="left">&nbsp;</td>
				  </tr>										
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>					
				</table>
				<br>
				<input name="btGravar" type="submit" class="label_botao" id="btGravar" value="Gravar">
	</center>
		<input name="txtEdita" type="hidden" id="txtEdita" value="<? echo $codEscola;?>">
		</form>
</body>
</html>

