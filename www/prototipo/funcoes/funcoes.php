<?
// Funcao para exiber a data e hora no formato "Quinta-feira, 23 de agosto de 2001 - Hora: 16:54"
function dataHora()
{
	$diasemana[0] = "Domingo";
	$diasemana[1] = "Segunda-feira";
	$diasemana[2] = "Terça-feira";
	$diasemana[3] = "Quarta-feira";
	$diasemana[4] = "Quinta-feira";
	$diasemana[5] = "Sexta-feira";
	$diasemana[6] = "Sábado";
	
	$mesnome[1] = "janeiro";
	$mesnome[2] = "fevereiro";
	$mesnome[3] = "março";
	$mesnome[4] = "abril";
	$mesnome[5] = "maio";
	$mesnome[6] = "junho";
	$mesnome[7] = "julho";
	$mesnome[8] = "agosto";
	$mesnome[9] = "setembro";
	$mesnome[10] = "outubro";
	$mesnome[11] = "novembro";
	$mesnome[12] = "dezembro";
	
	$ano = date('Y');
	$mes = date('n');
	$dia = date('d');
	$diasem = date('w');
	$hora=getdate();  
	//inicio da Modificação
	if ($hora['minutes']<10) {
		   $hora['minutes']="0".$hora['minutes']  ;    
	}
	// fim da Modificação
	$horacerta=($hora['hours'].':'.$hora['minutes']);
	
	$data = $diasemana[$diasem].', '.$dia.' de '.$mesnome[$mes].' de '.$ano.' - Hora: '.$horacerta;
	echo($data); 
}

/*
  Função converte_data
  Autor : Adir Amaral - Taober.com.br
  Data  : 18/11/2002
  Versão: 1.0

Esta função não necessita de parâmetros
ela converte a data automaticamente no
padrão americano para brasileiro e vice-versa
basta usar assim:

echo converte_data("data_a_converter");

*/

function converte_data($data){
	if (strstr($data, "/")){
		$A = explode ("/", $data);
		$V_data = $A[2] . "-". $A[1] . "-" . $A[0];
	}
	else{
		$A = explode ("-", $data);
		$V_data = $A[2] . "/". $A[1] . "/" . $A[0];	
	}
	return $V_data;
}

function FormataCEP($cep) {
    $cep = ereg_replace("[^0-9]", "", $cep);
    if (strlen($cep) == 8) return $cep[0] . $cep[1] . "." . $cep[2] . $cep[3] . $cep[4] . '-'. $cep[5] . $cep[6] . $cep[7];
    else return false;
}

?>
