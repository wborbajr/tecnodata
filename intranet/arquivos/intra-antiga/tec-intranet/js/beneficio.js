/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#ben1").mousedown(function(){
			$("#dv_conteudo").load("08-vale-alimentacao-transporte-saude.html");
		});
		
		$("#ben2").mousedown(function(){
			$("#dv_conteudo").load("08-cafe-manha.html");
		});
		
		$("#ben3").mousedown(function(){
			$("#dv_conteudo").load("08-cozinha-equipamentos.html");
		});
		
		$("#ben4").mousedown(function(){
			$("#dv_conteudo").load("08-intranet.html");
		});
		
		$("#ben5").mousedown(function(){
			$("#dv_conteudo").load("08-estacionamento.html");
		});
		
		$("#ben6").mousedown(function(){
			$("#dv_conteudo").load("08-seguranca.html");
		});
		
		$("#ben7").mousedown(function(){
			$("#dv_conteudo").load("08-materiais-escritorio.html");
		});
		
		$("#ben8").mousedown(function(){
			$("#dv_conteudo").load("08-suporte-ti.html");
		});
		
		$("#ben9").mousedown(function(){
			$("#dv_conteudo").load("08-aniversario.html");
		});
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});