<?php
header("Content-type: text/html; charset=ISO-8859-1");

session_start();

if(!empty($_REQUEST['action']) && (isset($_REQUEST['action']))){
	$action = $_REQUEST['action'];
}else{
	$action = $_POST['action'];
}

switch($action) {
	case 'popula':
		populaGrid(); // Exibe os dados no Grid
		break;
	case 'delpod':
		delpod(); // Elimina os dados
		break;
	case 'updpod':
		updpod(); // Chama para edicao os dados
		break;
	default:
}

function populaGrid () {
	include("../functions/db-connection.php");
	include("../functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$sql  = "DELETE FROM podcast_temp;";
	$rs = $conn->query($sql,false);

	$sql = "INSERT INTO podcast_temp (`id`,`descricao`,`nome_servidor`,`area`,`data`) (SELECT `id`,`descricao`,`nome_servidor`,`area`,`data` FROM podcast WHERE area IN (1) ORDER BY data DESC );";
	$rs = $conn->query($sql,false);

	$sql = "INSERT INTO podcast_temp (`id`,`descricao`,`nome_servidor`,`area`,`data`) (SELECT `id`,`descricao`,`nome_servidor`,`area`,`data` FROM podcast WHERE area IN (2) ORDER BY data DESC );";
	$rs = $conn->query($sql,false);

	$sql = "INSERT INTO podcast_temp (`id`,`descricao`,`nome_servidor`,`area`,`data`) (SELECT `id`,`descricao`,`nome_servidor`,`area`,`data` FROM podcast WHERE area IN (3) ORDER BY data DESC );";
	$rs = $conn->query($sql,false);

	$sql = "SELECT `id`,`descricao`,`nome_servidor`,`area`,`data` FROM podcast_temp ORDER BY area, data DESC; ";
	$rs = $conn->query($sql,false);

	while ( $dados = $conn->fetch_array($rs) ) {
		$arrayRet[] = array(
			"ID" => $dados['id'],
			"DESCRICAO"=> utf8_encode($dados['descricao']),
			"ARQUIVO" => $dados['nome_servidor'],
			"DATA"=> $dados['data'],
			"AREA" => $dados['area']
		);				
	}
	print json_encode($arrayRet);	
}

function delpod() {

	include("../functions/db-connection.php");
	include("../functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$id = $_REQUEST['idpod'];
	
	$sql  = "DELETE FROM podcast WHERE id = $id";
	$rs = $conn->query($sql,false);

};

function updpod() {

	include("../functions/db-connection.php");
	include("../functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$id = $_REQUEST['idpod'];
	
	$sql  = "DELETE FROM podcast WHERE id = $id";
	$rs = $conn->query($sql,false);

};
?>
