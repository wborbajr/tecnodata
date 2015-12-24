/**
 * @author Waldir Borba Junior
 */

var VoltarMenu = {
	init : function(){
		$("#lnk-voltar").mousedown(function(){
			$("#dv_conteudo").load("08-beneficios.html");
		});
	}
}


/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	VoltarMenu.init();
	
});