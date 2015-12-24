/**
 * @author Waldir Borba Junior
 *
 * 28/04/2008 - Adicionado controle de exibir mais podcast
 */

var maispodcast = {
	init : function() {
		$("#lnkVoltar").click(function(){
			$("#dv_podcast").hide();
			voltar();
		});
	}
};

function carregaPods() {
	$("#dv_conteudo").hide();
	$("#dv_podcast").show();
}

/*  Onload Functions    //---------------------------*/
$(document).ready(function(){
	
	voltar.init();
});
