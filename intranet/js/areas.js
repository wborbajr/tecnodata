/**
 * @author Waldir Borba Junior
 */

var DEPmenuLinks = {
	init : function(){
		$("#tecno").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-tecno.html");
		});
		
		$("#portal").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-portal.html");
		});
		
		$("#cias").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-cias.html");
		});
		
		$("#xdri").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-xdri.html");
		});
		
		$("#tecno-ambiental").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-tec-ambiental.html");
		});
		
		$("#tecno-inter").mousedown(function(){
			$("#dv_conteudo").load("02-intitucional-areas-tec-interl.html");
		});
		
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	
	DEPmenuLinks.init();
	
});