/**
 * @author Waldir Borba Junior
 */

var VoltarMenu = {
	init : function(){
		$("#lnk-voltar").mousedown(function(){
			$("#dv_conteudo").load("01-main+notic.html");
		});
	}
}


/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	VoltarMenu.init();
	
});