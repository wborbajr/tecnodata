<?php

// Formata da data vinda do bando de AAAA-MM-DD para DD/MM/AAAA
function bancoToData($data, $tam){
	
	if($tam == ""){
		$tam = 4;
		$ini = 0;
	}else{
		$ini = 2;
	}
	
	return substr($data,8,2) . "/" . substr($data,5,2) . "/" . substr($data,$ini,$tam);

}

// Formata da data do html para o banco de DD/MM/AAAA para AAAA-MM-DD
function dataToBanco($data){

	return substr($data,6,4) . "-" . substr($data,3,2) . "-" . substr($data,0,2);

}

function formataHora($hora){
	
	return substr($hora,0,2) . ":" . substr($hora,3,2);
}

?>