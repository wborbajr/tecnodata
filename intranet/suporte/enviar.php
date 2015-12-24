<?php

$nome = $_REQUEST['nome'];
$setor = $_REQUEST['setorl'];
$email = $_REQUEST['email'];
$R1 = $_REQUEST['R1'];
$R2 = $_REQUEST['R2'];
$R3 = $_REQUEST['R3'];
$R4 = $_REQUEST['R4'];
$nota = $_REQUEST['nota'];
$comentario = $_REQUEST['mensagem'];

require ("class.phpmailer.php");
$mail = new phpmailer();

$mail->SetLanguage("br", "language/");
$mail->IsSMTP();
$mail->Host = "smtp.tecnodatacfc.com.br";
$mail->Port = 25;
$mail->Timeout = 30;
$mail->SMTPAuth = true;
$mail->Username = "chamado@tecnodatacfc.com.br";
$mail->Password = "1nf0es";
$mail->From = "chamado@tecnodatacfc.com.br";
$mail->FromName = "$nome";
$mail->AddAddress("lucas@tecnodatacfc.com.br");
$mail->Sender = "chamado@tecnodatacfc.com.br";
$mail->Subject = "Avaliacao Suporte";
$mail->Body .= "Nome: ".$nome. "\r\n";
$mail->Body .= "Setor: ".$setor. "\r\n";
$mail->Body .= "E-mail: ".$email. "\r\n";
$mail->Body .= "1 - Voce esta satisfeito com o atendimento prestado? " .$R1. "\r\n";
$mail->Body .= "2 - A postura do tecnico foi satisfatoria? " .$R2. "\r\n";
$mail->Body .= "3 - O tecnico passou as informacoes de forma clara? " .$R3. "\r\n";
$mail->Body .= "4 - O problema foi resolvido? " .$R4. "\r\n";
$mail->Body .= "5 - De maneira geral, que nota voce daria ao atendimento? - de 0 a 10 " .$nota. "\r\n";
$mail->Body .= "6 - Voce gostaria de fazer alguma reclamacao, comentario ou sugestao? " .$comentario. "\r\n";

$exit = $mail->Send();

if(!$exit){
echo "Problemas no envio da mensagem: ".$value;
echo "<br>".$mail->ErrorInfo;
}else{
echo "";
}
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Suporte Tecnodata</title>
</head>

<body>

<table border="0" width="90%" id="table1">
	<tr>
		<td width="32">&nbsp;</td>
		<td background="">&nbsp;<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p align="center"><b>Sua mensagem foi enviada com sucesso!</b></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</td>
	</tr>
</table>

</body>

</html>
<?
exit;
?>
