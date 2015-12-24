<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<h1 align="center">
<?
//RECEBE OS DADOS DO FORMULÁRIO
$v_nome      =   $_POST["nome"];
$v_email      =   $_POST["email"];
$v_titulo       =   $_POST["titulo"];
$v_empresa       =   $_POST["empresa"];
$v_produto       =   $_POST["produto"];
$v_data       =   $_POST["data"];
$v_hora       =   $_POST["hora"];
$v_assunto        =   $_POST["assunto"];

$mens   =  "---------------------------------------------------------------------\n";
$mens  .=  "                        Retorno E-mail Marketing                            \n";
$mens  .=  "---------------------------------------------------------------------\n\n";
$mens  .=  "Nome: ".$v_nome."                                             \n";
$mens  .=  "Email: ".$v_email."                                                  \n";
$mens  .=  "Telefone: ".$v_titulo."                                                \n";
$mens  .=  "Empresa/CFC: ".$v_empresa."                                                \n";
$mens  .=  "Empresa/CFC: ".$v_produto."                                                \n";
$mens  .=  "Empresa/CFC: ".$v_data."                                                \n";
$mens  .=  "Empresa/CFC: ".$v_hora."                                                \n";
$mens  .=  "Mensagem: ".$v_assunto."                                                  \n\n";
//DISPARA O EMAIL
if(mail("aurelio@tecnodatacfc.com.br","Retorno E-mail Marketing", $mens,"From:".$v_email)){
echo"Contato enviado com sucesso";
}
?>
</h1>
            <p align="center"><a href="index.html" class="destaque style1">Voltar para p&aacute;gina inicial</a></p>
</body>
</html>
