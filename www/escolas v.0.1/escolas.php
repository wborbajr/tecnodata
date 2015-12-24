<?
	require("./includes/restrito.inc.php"); 
	require_once("./includes/conexao.inc.php");

    // Verifica se foi pressionado o botao gravar.
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		// Verificar se é inclusao / alteracao / exclusao
		
		// Inclusao da calsse para gerar o SQL
		require("./class/clausulas_sql.class.php"); 
		
		// Define a classe
		$sql = new clausulas_sql;
		
		// Campos e dados para INSERT
		$campos = array(
		"idpes","cnpj","insc_est","nome_fantasia","razao_social",
		"endereco","bairro","cidade","uf","cep",
		"fone","fax","falar_com","cargo",
		"email","ensino_inf","ensino_inf_nr","ensino_fun1",
		"ensino_fun1_nr","ensino_med","ensino_med_nr","ensino_fun2",
		"ensino_fun2_nr","ensino_total","sistema","jogos",
		"apm_representante","apm_telefone","acessa_internet","acessa_ineternet_out",
		"env_pais","env_pais_outros","transporte","tranporte_outros","orcamento","email_tipo");
		
		$dados = array(
		$_POST["cbConsultor"],$_POST["txtCNPJ"],$_POST["txtInsEST"],$_POST["txtNomfanta"], $_POST["txtRazSoc"],
		$_POST["txtEnd"],$_POST["txtBairro"],$_POST["txtCidade"],$_POST["cbUF"],$_POST["txtCEP"],
		$_POST["txtFone"],$_POST["txtFAX"],$_POST["txtFalarCom"],$_POST["txtCargo"],
		$_POST["txtEmail"],$_POST["cbINF"],$_POST["txtNrINF"],$_POST["cbFUNI"],
		$_POST["txtNrFUNI"],$_POST["cbMedio"],$_POST["txtNrMedio"],$_POST["cbFUNII"],
		$_POST["txtNrFUNII"],$_POST["txtTotal"],$_POST["cbSistema"],$_POST["cbJogos"],
		$_POST["txtRepAPM"],$_POST["txtFoneAPM"],$_POST["cbAcINET"],$_POST["txtAcINETOutro"],
		$_POST["cbEnvPais"],$_POST["txtEnvPaisOutro"],$_POST["cbTran"],$_POST["txtTransOutro"],
		$_POST["cbOrcamento"],$_POST["cbEmail"]);

		// Gera a cláusula SQL INSERT
		$insert = $sql->gera_insert("escola", $campos, $dados); 
		
		echo $insert;
		exit;
		
		
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
/* classes for validator */
.tfvHighlight
{font-weight: bold; color: red; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}
.tfvNormal
{font-weight: normal; color: black; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px}
-->
</style>
<link href="css/tecnodata.css" rel="stylesheet" type="text/css">
<script language="javascript" src="./tigra_js/validator.js" type="text/javascript"></script>
</head>
<body bgcolor="#FFFFFF" >
<form method="post" name="frmCad" id="frmCad" action="<? echo $_SERVER["PHP_SELF"]; ?>" onSubmit="return v.exec()" >
			<center>
				<table border="0" width="83%" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="5" class="tdfun"><table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td bgcolor="#6699FF"><font color="#FFFFFF" size="2" face="arial"><b><span class="titulo">Escola
                </span></b></font></td>
								</tr>
					</table>					</tr>
					<tr>
      <td width="4" valign="top">&nbsp;</td>
      <td width="117" id="cbConsultor">Consultor</td>

      <td valign="top">
      <select name="cbConsultor" class="label_obrigatorio" id="cbConsultor">
        <option value="0" selected="selected"></option>
		<?
		dbcon();
		$SQL = "SELECT idpes, nome FROM pessoa ORDER BY nome";
		$result=mysql_query($SQL);
		while($array = mysql_fetch_array($result)){
		?>
        <option value="<? echo $array["idpes"]; ?>"><? echo $array["nome"]; ?></option>
		<?
		}
		?>
      </select>	  </td>
      <td class="style7 style11 style10">&nbsp;&nbsp;&nbsp;Status</td>
      <td valign="top"><select name="cbStatus" class="label_input" id="cbStatus">
          <option value="" selected>&nbsp;</option>
          <option value="P">Prospect</option>
          <option value="R">Retorno</option>
      </select>      </td>
				  </tr>
<tr>
						<td>&nbsp;</td>
						<td id="txtCNPJ">CNPJ</td>
						<td><input name="txtCNPJ" type="text" class="label_obrigatorio" id="txtCNPJ"></td>
						<td width="92" class="style7"><span class="texto style4 style1 style11 style10">&nbsp;&nbsp;&nbsp;Insc Est </span></td>
						<td width="165" align="left"><input name="txtInsEST" type="text" class="label_input" id="txtInsEST"></td>
</tr>	
    <tr>
      <td valign="top">&nbsp;</td>
      <td id="txtNomfanta">Nome Fantasia </td>
      <td valign="top"><input name="txtNomfanta" type="text" class="label_obrigatorio" id="txtNomfanta" size="35"></td>
      <td valign="top">&nbsp; Orçamento</td>
      <td valign="top"><select name="cbOrcamento" class="label_input" id="cbOrcamento">
          <option value="" selected>&nbsp;</option>
          <option value="M">e-mail</option>
          <option value="C">Correio</option>
          <option value="F">Fax</option>
          <option value="E">em M&atilde;os</option>
                  </select></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td><span class="style7 style10 style11" >Raz&atilde;o Social </span></td>
      <td valign="top"><input name="txtRazSoc" type="text" class="label_input" id="txtRazSoc" size="35"></td>
      <td valign="top">&nbsp;e-Mail</td>
      <td valign="top"><select name="cbEmail" class="label_input" id="cbEmail">
          <option value="" selected>&nbsp;</option>
          <option value="A">Apresentacao</option>
          <option value="P">Perg Freq</option>
                  </select></td>
    </tr>
					<tr>
						<td valign="top" colspan="5">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="5" bgcolor="#6699FF" class="tdfun"><font color="#FFFFFF" size="2" face="arial"><b>Endere&ccedil;o</b></font></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtEnd">Endereço</td>
						<td colspan="3"><input name="txtEnd" type="text" class="label_obrigatorio" id="txtEnd" size="75"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtBairro">Bairro</td>
						<td colspan="3"><input name="txtBairro" type="text" class="label_obrigatorio" id="txtBairro" size="75"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtCidade">Cidade</td>
						<td><input name="txtCidade" type="text" class="label_obrigatorio" id="txtCidade" size="35"></td>
						<td id="cbUF">&nbsp;&nbsp;&nbsp;Estado</td>
						<td align="left"><select name="cbUF" size="1" class="label_obrigatorio" id="cbUF" >
						    <option value="" selected></option>
								<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AM">AM</option>
<option value="AP">AP</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="DF">DF</option>
<option value="ES">ES</option>
<option value="GO">GO</option>
<option value="MA">MA</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="MG">MG</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PR">PR</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="RS">RS</option>
<option value="RR">RR</option>
<option value="SC">SC</option>
<option value="SE">SE</option>
<option value="SP">SP</option>
<option value="TO">TO</option>
							</select></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td id="txtCEP">CEP</td>
					    <td width="223"><input name="txtCEP" class="label_obrigatorio" id="txtCEP"  size="9" maxlength="8">
					        <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="http://www.cep.com.br" target="_blank">
					  Pesquisar CEP</a></font></td>
						<td><span class="texto style4 style1 style11 style10">&nbsp;&nbsp;&nbsp;</span></td>
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
						<td id="txtFone">Fone</td>
						<td><input name="txtFone" class="label_obrigatorio" id="txtFone" size="15" maxlength="17">						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >Fax</span></td>
						<td colspan="1"><input name="txtFAX" type="text" class="label_input" id="txtFAX" size="15" maxlength="19"></td>
						<td id="txtFalarCom">falar com</td>
					  <td><input name="txtFalarCom" type="text" class="label_obrigatorio" id="txtFalarCom" size="30" maxlength="50"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style4 style1 style10 style11">Cargo</span></td>
						<td colspan="3"><input name="txtCargo" type="text" class="label_input" id="txtCargo" size="75"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >E-mail</span></td>
					  <td colspan="3"><input name="txtEmail" type="text" class="label_input" id="txtEmail" size="80"></td>
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
						  <input name="cbINF" type="checkbox" id="cbINF" value="checkbox">
						  Infantil</span></td>
						<td><span class="style1"><span class="style7">
						  <input name="txtNrINF" type="text" class="label_input" id="txtNrINF" size="6">
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
						  <input name="cbFUNI" type="checkbox" id="cbFUNI" value="checkbox">
                          Fund I</span></td>
						<td align="left"><span class="style1"><span class="style7">
						  <input name="txtNrFUNI" type="text" class="label_input" id="txtNrFUNI" size="6">
						</span></span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  <input name="cbMedio" type="checkbox" id="cbMedio" value="checkbox">
M&eacute;dio

						</span></td>
				      <td width="223"><span class="style1"><span class="style7">
				        <input name="txtNrMedio" type="text" class="label_input" id="txtNrMedio" size="6">
				      </span></span></td>
					    <td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
                        <input name="cbFUNII" type="checkbox" id="cbFUNII" value="checkbox">
                        Fund II</span></td>
					    <td align="left"><span class="style1"></span>					<span class="style7">
					      <input name="txtNrFUNII" type="text" class="label_input" id="txtNrFUNII" size="6">
					    </span></tr>
<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
 Total

						</span></td>
				        <td width="223"><span class="style1"><span class="style7">
				        <input name="txtTotal" type="text" class="label_input" id="txtTotal" size="6">
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
						  <select name="cbSistema" class="label_input" id="cbSistema">
						      <option value="" selected>&nbsp;</option>
						      <option value="O">&Oacute;tima</option>
						      <option value="B">Boa</option>
						      <option value="R">Ruim</option>
				            </select>
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
						  Jogos</span></td>
						<td align="left"><span class="style12">
						  <select name="cbJogos" class="label_input" id="cbJogos">
						      <option value="" selected>&nbsp;</option>
						      <option value="O">&Oacute;tima</option>
						      <option value="B">Boa</option>
						      <option value="R">Ruim</option>
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
						<td colspan="3"><input name="txtRepAPM" type="text" class="label_input" id="txtRepAPM"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><span class="style7 style10 style11" >Telefone</span></td>
						<td colspan="3"><input name="txtFoneAPM" type="text" class="label_input" id="txtFoneAPM"></td>
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
						  <select name="cbAcINET" class="label_input" id="cbAcINET">
						      <option value="" selected>&nbsp;</option>
						      <option value="E">Escola</option>
						      <option value="C">Casa</option>
						      <option value="Y">Cyber</option>
				            </select>
						  <input name="txtAcINETOutro" type="text" class="label_input" id="txtAcINETOutro">
						</span></span></td>
						<td><span class="texto style4 style1 style10 style11">&nbsp;&nbsp;&nbsp;
						  Env Pais </span></td>
					  <td align="left"><select name="cbEnvPais" class="label_input" id="cbEnvPais">
					      <option value="" selected>&nbsp;</option>
					      <option value="P">Palestras</option>
					      <option value="S">Sites</option>
					      <option value="E">Eventos</option>
						  </select>
						  <input name="txtEnvPaisOutro" type="text" class="label_input" id="txtEnvPaisOutro"></td>
					</tr>
<tr>
						<td>&nbsp;</td>
						<td class="style7"><span class="style1 style10 style11">
						  Meio Transporte </span></td>
						<td><span class="style1"><span class="style7">
						  <select name="cbTran" class="label_input" id="cbTran">
						      <option value="" selected>&nbsp;</option>
						      <option value="P">Publico</option>
						      <option value="A">Particular</option>
						      <option value="C">Contrato</option>
						      <option value="O">Outros</option>
				            </select>
						  <input name="txtTransOutro" type="text" class="label_input" id="txtTransOutro">
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
		</form>
<script>
// form fields description structure
var a_fields = {
	'cbConsultor': {'l': 'Consultor','r': true,'f': 'integer','t': 'cbConsultor'},
	'txtCNPJ':{'l':'CNPJ','r':true,'f':'integer','t':'txtCNPJ'},
	'txtNomfanta':{'l':'Nome Fantasia','r':true,'f':'alpha','t':'txtNomfanta'},
	'txtEnd':{'l':'Endereço','r':true,'f':'alpha','t':'txtEnd'},
	'txtBairro':{'l':'Bairro','r':true,'f':'alpha','t':'txtBairro'},
	'txtCidade':{'l':'Cidade','r':true,'f':'alpha','t':'txtCidade'},
	'cbUF':{'l':'Estado','r':true,'f':'alpha','t':'cbUF'},
	'txtCEP':{'l':'CEP','r':true,'f':'integer','t':'txtCEP'},
	'txtFone':{'l':'Telefone','r':true,'f':'phone','t':'txtFone'},
	'txtFalarCom':{'l':'Falar com','r':true,'f':'alpha','t':'txtFalarCom'}
},

o_config = {
	'to_disable' : ['Submit', 'Reset'],
	'alert' : 1
}

// validator constructor call
var v = new validator('frmCad', a_fields, o_config);

</script>
</body>
</html>

