<?php
	/* Header Control // --------------------- */
	header("Content-type: text/html; charset=ISO-8859-1");
	
	/* Start Session // --------------------- */
	session_start();
	
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
		case 'haspoll':
			hasPoll(); // Verify if has poll
			break;
		default:
	}
	
	/* Functions // --------------------- */
	function getRemoteUserIP(){
		
		require('functions/cla-connection.php');
		require('config/dbconfig.php');
		require('functions/fun-net.inc.php');
		
		// Get Remote user IP
		$remoteIP = getIp();
		
		$conn = new db_connection($hostname, $username, $password, $database);
		
		// Verify is remote IP is logged
		$result = $conn->select("user_control",array("username"),"address='$remoteIP'");
		
		//  
		if ( $conn->affected_rows() == 1 ) {
			$data = $conn->fetch_array($result);
			$login = $data['username'];
			
			// Verify login and find the user name
			$result = $conn->select("tec_users",array("nome"),"login='$login'");

			$data = $conn->fetch_array($result);
			$nome = $data['nome'];
			
			$_SESSION['IP']	= $remoteIP;
			$_SESSION['LOGIN'] = $login;
			
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
	
	function hasPoll(){
		
		require('functions/cla-connection.php');
		require('config/dbconfig.php');
		
		// No poll avaliable
		$POLL = false;
		
		$conn = new db_connection($hostname, $username, $password, $database);		
		
		// Check is has active pool
		$result = $conn->select("enq_pergunta",array("id"),"enq_ativa=1");
		
		// Has one active poll  
		if ( $conn->affected_rows() == 1 ) {
			$data = $conn->fetch_array($result);
			$poll = $data['id'];
			
			$login = $_SESSION['LOGIN'];
			
			// 
			$result = $conn->select("enq_voto",array("login"),"enq_id='$poll' and login = '$login'");
			
			// User has already voted 
			if ( $conn->affected_rows() == 0 ) {
				$POLL = true;
			}
		}

		// Return array of values
		//$info[] = array();
		$info['POLL'] = $POLL;
		
		print(json_encode($info));
	} 
	
?>
