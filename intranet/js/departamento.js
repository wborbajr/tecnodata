/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#dep1").mousedown(function(){
			$("#dv_conteudo").load("04-marketing-comunicacao.html");
		});
		
		$("#dep2").mousedown(function(){
			$("#dv_conteudo").load("04-portal-radio-transito.html");
		});
		
		$("#dep3").mousedown(function(){
			$("#dv_conteudo").load("04-nucleo-conteudo-treinamento.html");
		});
		
		$("#dep4").mousedown(function(){
			$("#dv_conteudo").load("04-novas-tecnologias-ti.html");
		});
		
		$("#dep5").mousedown(function(){
			$("#dv_conteudo").load("04-comercial.html");
		});
		
		$("#dep6").mousedown(function(){
			$("#dv_conteudo").load("04-desenvolvimento-gestao.html");
		});
		
		$("#dep7").mousedown(function(){
			$("#dv_conteudo").load("04-audio-video.html");
		});
		
		$("#dep8").mousedown(function(){
			$("#dv_conteudo").load("04-financeiro.html");
		});
		
		$("#dep9").mousedown(function(){
			$("#dv_conteudo").load("04-compras.html");
		});
		
		$("#dep10").mousedown(function(){
			$("#dv_conteudo").load("04-departamento-pessoal.html");
		});
		
		$("#dep11").mousedown(function(){
			$("#dv_conteudo").load("04-departamento-contabil.html");
		});
		
		$("#dep12").mousedown(function(){
			$("#dv_conteudo").load("04-comunicacao-criacao.html");
		});
		
		$("#dep13").mousedown(function(){
			$("#dv_conteudo").load("04-x-drive-cias-transito.html");
		});
		
		$("#dep14").mousedown(function(){
			$("#dv_conteudo").load("04-novos-negocios.html");
		});
		
		$("#dep15").mousedown(function(){
			$("#dv_conteudo").load("04-tecno-inter.html");
		});
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});