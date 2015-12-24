<?php

//Função auxiliar para converter Query em Array
function populaCombo($tabela, $campo1, $campo2, $condicao, $ordem){
	$host="localhost";
	$username="educacional";
	$password="#educa";
	$database="educacional";

	@mysql_connect($host,$username,$password) or die(mysql_error());
    @mysql_select_db($database) or die(mysql_error());

	$_res = array();
	$i = 0;
	$SQL = "SELECT " . $campo1 . "," . $campo2 . " FROM " . $tabela;

	if($condicao != ""){
		$SQL .= " WHERE " . $condicao;
	}

	if($ordem != ""){
		$SQL .= " ORDER BY " . $ordem;
	}

	$result=mysql_query($SQL);
	
	while($l = mysql_fetch_array($result)) {
		$_res[$i] = array();
		foreach($l as $campo => $valor) $_res[$i][strtolower($campo)] = $valor;
		$i++;
	}
	return $_res;
}

/*
$combo = populaCombo("pessoa","idpes","nome","");

for ($i = 0; $i < count($combo); ++$i) {
	echo  $combo[$i][0] . " --> " . $combo[$i][1];
}
*/

?>