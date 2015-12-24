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

				$("#usuario").html("IP: " + request.IP + " Usuário: " + request.USER);
			}
		});		
	}
}

var poolUser = {
	init : function () {
		$.ajax({
			type: "POST",
			url: targetURL,
			dataType: "json",
			data: "action=haspool",
			timeout: 3000,
			beforeSend: function() {
				loading.start();
			},			
			success: function(request){
				loading.stop();
				
				if ( request.HASPOOL ) {
					alert("Atenção ! ! !\n\n Você não está habilitado para usar a Intranet. \n Caso realmente deseje utilizar, favor entrar em contato \n com o Departamente de TI.");
					window.location = "restrito.html";
				}

				$("#usuario").html("IP: " + request.IP + " Usuário: " + request.USER);
			}
		});		
	}
}


/* OnLoad Functions // --------------------- */
$(document).ready(function () { 
	var user = null;
	
	// Get Logger User
	LoggedUser.init();
	
	// Banner Control
	$('#banner').cycle({ 
	    fx:      'turnDown',
    	delay:   -4000
	});
	
	// Pool Control
	poolUser.init();

});