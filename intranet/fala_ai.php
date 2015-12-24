<?php

	$nome = $_REQUEST['nome'];
	$setor = $_REQUEST['setor'];
	$email = $_REQUEST['email'];
	$D1 = $_REQUEST['D1'];
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
	$mail->AddAddress("aurelio@tecnodatacfc.com.br");
	$mail->Sender = "chamado@tecnodatacfc.com.br";
	$mail->Subject = "Mensagem do Fala aí - Intranet";
	$mail->Body .= "Nome: ".$nome. "\r\n";
	$mail->Body .= "Setor: ".$setor. "\r\n";
	$mail->Body .= "E-mail: ".$email. "\r\n";
	$mail->Body .= "1. -  Qual o motivo? " .$D1. "\r\n";
	$mail->Body .= "2. - Mensagem? " .$comentario. "\r\n";

	$result = $mail->Send();

	$ret = array();
	$ret['RETORNO']	= $result;

	print json_encode ( $ret );
?>
