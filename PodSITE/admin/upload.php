<?

function genFileName($extensao) {
    global $config;

    // Gera um nome �nico para a imagem
    $temp = substr(md5(uniqid(time())), 0, 10);
    $imagem_nome = $temp . "." . $extensao;

    // Verifica se o arquivo j� existe, caso positivo, chama essa fun��o novamente
    if(file_exists($config["diretorio"] . $imagem_nome)) {
        $imagem_nome = nome($extensao);
    }

    return $imagem_nome;
}

// Prepara a vari�vel caso o formul�rio tenha sido postado
$arquivo = isset($_FILES["podcastFile"]) ? $_FILES["podcastFile"] : FALSE;

//print_r($arquivo);
//exit;

// Diret�rio onde a imagem ser� salva
$config = array();
$config["diretorio"] = "../podcast/";

if($arquivo) {
	$erro = array();
	
	if(!eregi("^audio\/(wma|mp3|wav|mpeg)$", $arquivo["type"])) {
		$erro[] = "Arquivo em formato inv�lido! A imagem deve ser mp3, wma ou wav. Envie outro arquivo";
	}

	if(!sizeof($erro)) {
		// Pega extens�o do arquivo, o indice 1 do array conter� a extens�o
		preg_match("/\.(wma|mp3|wav|mpeg){1}$/i", $arquivo["name"], $ext);

		// Gera nome �nico para a imagem
		$file_name = genFileName($ext[1]);

		// Caminho de onde a imagem ficar�
		$file_dir = $config["diretorio"] . $file_name;

		// Faz o upload da imagem
		move_uploaded_file($arquivo["tmp_name"], $file_dir);

		$file_path = $file_name;
	}else{
		echo "<h1>" . $erro[0] . "</h1>";
		exit;
	}
	
/*
	echo "<br>";
	echo "Original : " . $arquivo['name'] . "<br>";
	echo "Servidor : " . $file_path  . "<br>";
	echo "Path ....: " . $file_dir . "<br>";
	echo "EXT .....: " . $ext[1];
*/	

	include("../functions/db-connection.php");
	include("../functions/cla-connection.php");
	
	$conn = new cla_connection($hostname, $username, $password, $database);
	
	$nome_original 	= $arquivo['name'];
	$nome_servidor 	= $file_path;
	$ext 			= $ext[1];
	$area   		= $_REQUEST['area'];
	$descri 		= $_REQUEST['txDescri'];
	$data			= date("Y-m-d H:i:s");

	// INSERT
	$result = $conn->insert("podcast",
		array("descricao,nome_servidor,nome_original,ext,area,data"),
		array("'$descri','$nome_servidor','$nome_original','$ext',$area,'$data'")
	);
	
	$ret = array();

	$ret['RETORNO']	= $result;
	
	print json_encode ( $ret );

}

?>