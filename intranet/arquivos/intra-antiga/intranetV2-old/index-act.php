<?php
	/* Header Control // --------------------- */
	header("Content-type: text/html; charset=ISO-8859-1");
	
	/* Start Session // --------------------- */
	@session_start();
	
	/* Parameter // --------------------- */
	if(!empty($_REQUEST['action']) && (isset($_REQUEST['action']))){
		$action = $_REQUEST['action'];
	}else{
		$action = $_POST['action'];
	}
	
	/*  // --------------------- */
	switch($action) {
		case 'getuserip':
			getRemoteUserIP(); // Get remote user IP
			break;
		case 'haspool':
			hasPool(); // Verify if has pool
			break;
		default:
	}
	
	/* Functions // --------------------- */
	function getRemoteUserIP(){
		
		require('classes/db_connection.php');
		require('config/dbconfig.php');
		
		// Get Remote user IP
		$remoteIP = getIp();
		
		$conn = new db_connection($hostname, $username, $password, $database);		
		$result = $conn->select("user_control",array("username"),"address='$remoteIP'");
		
		//  
		if ( $conn->affected_rows() == 1 ) {
			$data = $conn->fetch_array($result);
			$login = $data['username'];
			
			$result = $conn->select("tec_users",array("nome"),"login='$login'");

			$data = $conn->fetch_array($result);
			$nome = $data['nome'];
			
			$_SESSION['IP']	= $remoteIP;
			$_SESSION['LOGIN'] 	= $login;
			
		} else {
			$nome = "404";
		}

		// Return array of values
		//$info[] = array();
		$info['IP'] = $remoteIP;
		$info['USER'] = $nome;
		$info['LOGIN'] = $login;
		
		print(json_encode($info));
	} 
	
	function hasPool(){
		
		require('classes/db_connection.php');
		require('config/dbconfig.php');
		require('functions/fun-net.inc.php');
		
		// Get Remote user IP
		$remoteIP = getIp();
		
		$conn = new db_connection($hostname, $username, $password, $database);		
		$result = $conn->select("user_control",array("username"),"address='$remoteIP'");
		
		//  
		if ( $conn->affected_rows() == 1 ) {
			$data = $conn->fetch_array($result);
			$login = $data['username'];
			
			$result = $conn->select("tec_users",array("nome"),"login='$login'");

			$data = $conn->fetch_array($result);
			$nome = $data['nome'];
			
			$_SESSION['IP']	= $remoteIP;
			$_SESSION['LOGIN'] 	= $login;
			
		} else {
			$nome = "404";
		}

		// Return array of values
		//$info[] = array();
		$info['IP'] = $remoteIP;
		$info['USER'] = $nome;
		$info['LOGIN'] = $login;
		
		print(json_encode($info));
	} 
	
?>
