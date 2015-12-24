<? session_start(); ?>
$(document).ready(function(){

	var iDirecao = 0;

	// Mostra mensagem de progresso enquanto valida candidato
	$("#btn_Iniciar").click(function(){

		tela_prova_status_show()

    	$("#tb_conteudo_meio").load("./questoes.inc.php", { iQuestao: 1});

//    	sw_start(<?=$_SESSION[parametros][0][param_duracao]?>);
    	sw_start();
//    	criaHidden('div_contDown', 60);
//    	contRegress('div_contDown', (60*60), true);

	});
});

function tela_prova_status_show() {	//
	// Mostra os paineis referentes à aplicação de prova
	$("#td_candidato_dados_fundo").attr("background", "imagens/recortes/images/layout-das-telas_vazio_022.gif");
	$("#td_esquerdo_fundo").attr("background", "imagens/recortes/images/layout-das-telas_vazio_04.gif");
	$("#tb_candidato_dados").slideDown("slow");

	//
	// Menu lateral esquerdo - help e cronômetro
	$("#tb_esquerdo").slideDown("slow");
	$("#tb_status").slideDown("slow");

	//
	// Gabarito, rodapé
	$("#td_gabarito_fundo").attr("background", "images/layout_limpo_06.jpg");
	$("#tr_gabarito_opcoes").slideDown("slow");


	//
	// Alimenta a tela com as informações sobre o candidato.
	$('#tx_candidato_nome').html("<?=$_SESSION[candidato][0][cand_nome]?>");
	$('#tx_candidato_cpf').html('<?=$_SESSION[candidato][0][cand_cpf]?>');
	$('#td_prova_data').html("<?=date('d/m/Y');?>");
	$('#td_prova_hora').html("<?=date('G:m:s');?>");}

