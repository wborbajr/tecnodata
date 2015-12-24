<?php

$nome = $_REQUEST['nome'];
$setor = $_REQUEST['setorl'];
$email = $_REQUEST['email'];
$D1 = $_REQUEST['D1'];
$D2 = $_REQUEST['D2'];
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
$mail->AddAddress("sti@tecnodatacfc.com.br");
$mail->Sender = "chamado@tecnodatacfc.com.br";
$mail->Subject = "Chamado Suporte";
$mail->Body .= "Nome: ".$nome. "\r\n";
$mail->Body .= "Setor: ".$setor. "\r\n";
$mail->Body .= "E-mail: ".$email. "\r\n";
$mail->Body .= "1. -  Qual o motivo do chamado? " .$D1. "\r\n";
$mail->Body .= "2. - Referente a qual assunto? " .$D2. "\r\n";
$mail->Body .= "3. - Descreva o problema ou dúvida? " .$comentario. "\r\n";

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
