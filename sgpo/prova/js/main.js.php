$(document).ready(function() {

/*
  var aCandidato;
  var timercount = 0;
  var timestart  = null;
  aOpcoes = new Array(0,1,2,3,4,5,6);
*/
});

$(document).ready(Inicio);

function Inicio(){
    // Carrega tela de indentificação do candidato
    $("#tb_conteudo_meio").load("./renach.inc.php");
}


// Oculta os paineis referentes à aplicação de prova
function tela_prova_status_hide(){
    $("#td_esquerdo_fundo").attr("background", "imagens/recortes/images/layout-das-telas_vazio_042.gif");
    $("#td_candidato_dados_fundo").attr("background", "imagens/recortes/images/layout-das-telas_vazio_02.gif");
    $("#tb_candidato_dados").hide("slow");
    $("#tb_esquerdo").hide("slow");
}

function Mostra_Mensagem(msg) {
	$("#td_cargando").html(msg);
	$("#td_cargando").animate({left: 10, opacity: 'toggle'}, 1500, "toggle");
	$("#td_cargando").animate({left: 10, opacity: 'toggle'}, 1500, "toggle");
}


