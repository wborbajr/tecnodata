<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ronaldo Ribeiro</title>
</head>

<body><?php
$nome = $_POST["nome"];
$cargo = $_POST["cargo"];
$email = $_POST["email"];
$avaliacao = $_POST["avaliacao"];
$corinthians = $_POST["corinthians"];
$santos = $_POST["santos"];
$atletico = $_POST["atletico"];
$coritiba = $_POST["coritiba"];
$parana = $_POST["parana"];
$palmeiras = $_POST["palmeiras"];
$saopaulo = $_POST["saopaulo"];

$msg = $_POST ["msg"];
$mensagem = "Avaliação do site por $nome\n\n";
$mensagem .= "Nome: $nome\n\n";
$mensagem .= "E-mail: $email\n\n";
$mensagem .= "$nome avaliou o Site como: $avaliacao\n\n";
$mensagem .= "$nome avaliou o Corinthians como: $corinthians\n\n";
$mensagem .= "$nome avaliou o Santos como: $santos\n\n";
$mensagem .= "$nome avaliou o Atlético Paranaense como: $atletico\n\n";
$mensagem .= "$nome avaliou o Coritiba como: $coritiba\n\n";
$mensagem .= "$nome avaliou o Paraná Clube como: $parana\n\n";
$mensagem .= "$nome avaliou o Palmeiras como: $palmeiras\n\n";
$mensagem .= "$nome avaliou o São Paulo como: $saopaulo\n\n";

$mensagem .= "Mensagem deixada por $nome\n$msg\n\n";
mail("rrzero@bol.com.br", "Avaliação", $mensagem, "From: $nome");
echo "<h3> Obrigado pela avaliação</h3>\n\n";
?>
</body>
</html>
