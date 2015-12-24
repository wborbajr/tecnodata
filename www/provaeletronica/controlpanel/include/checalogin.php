<?
	session_start();
	
	if($_SESSION["Auth"] != "Y"){
		header("Location: ../include/logar.php");
	}
?>
