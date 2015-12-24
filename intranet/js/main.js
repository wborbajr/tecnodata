/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#notic1").mousedown(function(){
			$("#dv_conteudo").load("01-noticias0001.html");
		});
		
		$("#notic2").mousedown(function(){
			$("#dv_conteudo").load("");
		});
		
		$("#notic3").mousedown(function(){
			$("#dv_conteudo").load("");
		});
		
		$("#txt-int").mousedown(function(){
			$("#dv_conteudo").load("01-main-txt-int.html");
		});
		
		$("#mov-rh").mousedown(function(){
			$("#dv_conteudo").load("01-main-mov-rh.html");
		});
		
		$("#novos-projs").mousedown(function(){
			$("#dv_conteudo").load("01-main-novos-projs.html");
		});
		
		$("#noticias").mousedown(function(){
			$("#dv_conteudo").load("01-main+notic.html");
		});
		
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});