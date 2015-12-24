<?php

	// Request of all parameters
	$action = $_REQUEST['action'];
	
	if ($action == 'save') {
			saveData(); // Salva os dados
	}else {

		$error 	= "";
		$msg 	= "";
		$target = "../podcast/";
		$fileElementName = 'fileToUpload';
		
		if(!empty($_FILES[$fileElementName]['error'])) {
			switch($_FILES[$fileElementName]['error']) {
	
				case '1':
					$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
					break;
				case '2':
					$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
					break;
				case '3':
					$error = 'The uploaded file was only partially uploaded';
					break;
				case '4':
					$error = 'No file was uploaded.';
					break;
				case '6':
					$error = 'Missing a temporary folder';
					break;
				case '7':
					$error = 'Failed to write file to disk';
					break;
				case '8':
					$error = 'File upload stopped by extension';
					break;
				case '999':
				default:
					$error = 'No error code avaiable';
			}
		}elseif(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none') {
			$error = 'No file was uploaded..';
		}else {
			$tempName = $_FILES['fileToUpload']['tmp_name'];
			$target = $target . $_FILES['fileToUpload']['name'];
			
			@move_uploaded_file($tempName,$target);
			
			$msg .= " Arquivo : " . $_FILES['fileToUpload']['name'] . ", ";
			$msg .= " Tamanho : " . @filesize($_FILES['fileToUpload']['tmp_name']);
			//for security reason, we force to remove all uploaded file
	//		@unlink($_FILES['fileToUpload']);
		}		
	
		$arrayRet['msg'] = $msg;
		$arrayRet['sql'] = $result;
		
		print json_encode($arrayRet);
		
	}
	
function saveData(){
	include("../functions/db-connection.php");
	include("../functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$fileName	= basename($_REQUEST['fileToUpload']);
	$area   	= $_REQUEST['area'];
	$descri 	= $_REQUEST['txDescri'];
	$data		= date("Y-m-d H:i:s");

	// INSERT
	$result = $conn->insert("podcast",array("descricao,arquivo,area,data"),array("'$descri','$fileName',$area,'$data'"));

	//echo $result;
	//exit;
	
	$arrayRet['msg'] = $result;
	
	print json_encode($arrayRet);
}

?>