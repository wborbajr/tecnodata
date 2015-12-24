<?php
/*
	include("./includes/class_db_mysql.php");
	
	$querys = new dbConnecta;
	$querys->connect();
	
	$sql = $querys->query("SELECT txtNome, txtSenha FROM usuarios ORDER BY txtNome");
	$reg = $querys->num_rows();
	$rec = $querys->next_record();
	
	echo $sql . " REG " . $reg . " RECO " . $rec["txtSenha"];
	
	$querys->close();
*/

echo query_client_ip();

function query_client_ip()
{
	global $_SERVER;
	
	if(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$clientIP = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $
	))
	{
		// check for internal ips by looking at the first octet
		foreach($matches[0] AS $ip)
		{
			if(!preg_match("#^(10|172\.16|192\.168)\.#", $ip))
			{
				$clientIP = $ip;
				break;
			}
		}

	}
	elseif(isset($_SERVER['HTTP_FROM']))
	{
		$clientIP = $_SERVER['HTTP_FROM'];
	}
	else
	{
		$clientIP = $_SERVER['REMOTE_ADDR'];
	}

	return $clientIP;
}

?>