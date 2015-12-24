/**
 * @author Waldir Borba Junior
 */

var targetURL = 'index-act.php';

/* Functions // --------------------- */
var LoggedUser = {
	init : function () {
		$.ajax({
			type: "POST",
			url: targetURL,
			dataType: "json",
			data: "action=getuserip",
			timeout: 3000,
			beforeSend: function() {
				loading.start();
			},			
			success: function(request){
				loading.stop();
				
				if ( request.USER == "404" ) {
					alert("Atenção ! ! !\n\n Você não está habilitado para usar a Intranet. \n Caso realmente deseje utilizar, favor entrar em contato \n com o Departamente de TI.");
					window.location = "restrito.html";
				}

				$("#dv_usuario").html("IP: " + request.IP + " Usuário: " + request.USER);
			}
		});		
	}
}

var pollUser = {
	init : function () {
		$.ajax({
			type: "POST",
			url: targetURL,
			dataType: "json",
			data: "action=haspoll",
			timeout: 3000,
			beforeSend: function() {
				loading.start();
			},			
			success: function(request){
				loading.stop();
				
				if ( request.POLL == true ) {
					alert("Atenção ! ! !\n\n Você tem uma enquete para responder.");
					window.location = "enquete.html";
				}
			}
		});		
	}
}

var easterEgges = {
	init : function(){
		$("#dv_rodape").dblclick(function(){
			$('#ee').load('adm/ee.html');
		})
	}
}; // end_

var menuLinks = {
	init : function(){
		
		$("#lnk1").mousedown(function(){
			$("#dv_conteudo").load("01-main.html");
		});
		
		$("#lnk2").mousedown(function(){
			$("#dv_conteudo").load("02-institucional-icos.html");
		});
		
		$("#lnk3").mousedown(function(){
			$("#dv_conteudo").load("03-tec+10.html");
		});
		
		$("#lnk4").mousedown(function(){
			$("#dv_conteudo").load("04-departamentos.html");
		});
		
		$("#lnk5").mousedown(function(){
			$("#dv_conteudo").load("05-documentos.html");
		});
		
		$("#lnk6").mousedown(function(){
			$("#dv_conteudo").load("06-politicas.html");
		});
		
		$("#lnk7").mousedown(function(){
			$("#dv_conteudo").load("07-procedimentos.html");
		});
		
		$("#lnk8").mousedown(function(){
			$("#dv_conteudo").load("08-beneficios.html");
		});
		
		$("#lnk9").mousedown(function(){
			$("#dv_conteudo").load("09-relatorios.html");
		});
		
		$("#lnk10").mousedown(function(){
			$("#dv_conteudo").load("10-chamadoTI.html");
		});
		
		$("#lnk11").mousedown(function(){
			$("#dv_conteudo").load("11-fala-ai.html");
		});
	}
}

var DEPmenuLinks = {
	init : function(){
		$("#dep1").mousedown(function(){
			$("#dv_conteudo").load("04-marketing-comunicacao.html");
		});
	}
}



/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	var user = null;
	
	// Get Logger User
//	LoggedUser.init();
	
	// Poll Control
//	pollUser.init();
	
	// Easter Egges
	easterEgges.init();
	
	// Menu
	menuLinks.init();
	
	DEPmenuLinks.init();
	
	$("#dv_conteudo").load("01-main.html");

});