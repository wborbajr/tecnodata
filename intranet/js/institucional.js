/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#inst1").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-apresentacao.html");
		});
		
		$("#inst2").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-missao.html");
		});
		
		$("#inst3").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-historico.html");
		});
		
		$("#inst4").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-areas.html");
		});
		
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});