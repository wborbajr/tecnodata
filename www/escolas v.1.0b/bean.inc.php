<?php

function setStatus($status){

	if($status == "P"){
		$ret = "Prospect";
	}else{
		$ret = "Retorno";
	}
	
	return $ret;
}

function setOrcamento($status){

	if($status == "M"){
		$ret = "e-mail";
	}elseif($status == "C"){
		$ret = "Correio";
	}elseif($status == "F"){
		$ret = "Fax";
	}elseif($status == "E"){
		$ret = "em M�os";
	}
	
	return $ret;
	
}

function setEMail($status){

	if($status == "A"){
		$ret = "Apresenta��o";
	}elseif($status == "P"){
		$ret = "Perguntas Frequentes";
	}elseif($status == "T"){
		$ret = "Todos";
	}
	
	return $ret;
	
}

function setTipo($status){

	if($status == "O"){
		$ret = "�tima";
	}elseif($status == "B"){
		$ret = "Boa";
	}elseif($status == "R"){
		$ret = "Ruim";
	}
	
	return $ret;

}

function setInternet($status){

	if($status == "E"){
		$ret = "Escola";
	}elseif($status == "C"){
		$ret = "em Casa";
	}elseif($status == "Y"){
		$ret = "Cyber Caf�";
	}elseif($status == "O"){
		$ret = "Outros";
	}
	
	return $ret;

}

function setEnvPais($status){

	if($status == "P"){
		$ret = "Palestras";
	}elseif($status == "S"){
		$ret = "Sites";
	}elseif($status == "E"){
		$ret = "Eventos";
	}elseif($status == "O"){
		$ret = "Outros";
	}
	
	return $ret;

}

function setTransporte($status){

	if($status == "P"){
		$ret = "P�blico";
	}elseif($status == "A"){
		$ret = "Particular";
	}elseif($status == "C"){
		$ret = "Contrato";
	}elseif($status == "O"){
		$ret = "Outros";
	}
	
	return $ret;

}


?>