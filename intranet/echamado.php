<?php

	$nome = $_REQUEST['nome'];
	$setor = $_REQUEST['setor'];
	$email = $_REQUEST['email'];
	$D1 = $_REQUEST['D1'];
	$D2 = $_REQUEST['D2'];
	$comentario = $_REQUEST['mensagem'];
	
	$result = false;

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

	$result = $mail->Send();

	$ret = array();
	$ret['RETORNO']	= $result;

	print json_encode ( $ret );	
?>
