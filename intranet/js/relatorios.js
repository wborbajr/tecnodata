/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#relat1").mousedown(function(){
			$("#dv_conteudo").load("09-relatorios-sac.html");
		});
		
		$("#inst2").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-missao.html");
		});
		
		$("#inst3").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-historico.html");
		});
		
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});