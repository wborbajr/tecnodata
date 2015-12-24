/**
 * @author Waldir Borba Junior
 * @date 01/12/2007
 */

var targetURL  = "echamado.php";

// Controle de validacao
var arrayCampos = new Array();

/*
arrayCampos[1] = new Array();
arrayCampos[1]['campo']     = '#t007_nome';
arrayCampos[1]['msg'] 	    = 'Descrição não pode ser nulo';
arrayCampos[1]['conteudo'] 	= null;
// fim
 */
 
var saveData = {
	init : function(){
		$("#B1").mousedown(function(){
			$("#FrontPage_Form1").ajaxSubmit({
				url: targetURL,
				target: "#dvAviso",
				dataType: 'json',
				beforeSubmit: function() {
					$('#dvAviso').html('Aguarde...').fadeIn('fast');
				},
				method : 'POST',
				success : function (data) {
					if (data.RETORNO == true) {
						$('#dvAviso').html('Email enviado com sucesso!').fadeIn('fast');
					} else {
						$('#dvAviso').html('Erro ao enviar email. Tente novamente.').fadeIn('fast');
					}
					
					$('#t007_id').val("");
					$('#action').val("");
				},
				clearForm: true,
				resetForm: true
			});
			
			setTimeout ("$('#dvAviso').fadeOut()", 10000);
		});
	}
}; // end_saveData

/*  Onload Functions    //---------------------------*/
$(document).ready(function(){
	saveData.init();
});