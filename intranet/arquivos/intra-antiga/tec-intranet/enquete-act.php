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
		case 'buildpoll':
			buildPoll(); // Buil Poll
			break;
		case 'computepoll':
			computePoll(); // Compute Poll
			break;
		default:
	}
	
	/* Functions // --------------------- */
	function buildPoll(){
		
		require('functions/cla-connection.php');
		require('config/dbconfig.php');
		
		$conn = new db_connection($hostname, $username, $password, $database);
		
		// Get topic of poll
		$rsPergunta = $conn->select("enq_pergunta",array("id,enq_pergunta"),"enq_ativa=1");
		
		//  
		if ( $conn->affected_rows() == 1 ) {
			$dtPergunta = $conn->fetch_array($rsPergunta);
			$pergunta = $dtPergunta['enq_pergunta'];
			$enq_id = $dtPergunta['id'];
			
			// Get all answer of current poll
			$rsResposta = $conn->select("enq_resposta",array("id,enq_resposta"),"enq_id='$enq_id'");

			$arrayRet[] = array(
				"PERGUNTA" => $pergunta,
				"ENQID" => $enq_id
			);

			while ( $reposta = $conn->fetch_array($rsResposta) ) {
				$arrayRet[] = array(
					"RESPID" => $reposta['id'],
					"RESPDES"=> $reposta['enq_resposta']
				);				
			}	
		}

		print( json_encode( $arrayRet ) );
	} 
	
	function computePoll(){
		
		require('functions/cla-connection.php');
		require('config/dbconfig.php');

		$enq_id = $_POST['enq_id'];
		$vote = $_POST['vote'];
		$login = $_SESSION['LOGIN'];
		
		$conn = new db_connection($hostname, $username, $password, $database);		
		
		// Update vote count
		$result = $conn->update("enq_resposta",array("enq_votos=enq_votos+1"),"id=$vote");
		
		// Compute Update vote count
		$result = $conn->insert("enq_voto",array("login,enq_id"),array("'$login',$enq_id"));
		
		$info['RET'] = 0;
		
		print(json_encode($info));
	} 
	
?>
