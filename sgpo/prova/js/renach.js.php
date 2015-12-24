$(document).ready(function(){


	// Enter no campo tx_renach, Processa
	$("#tx_renach").keydown(function(e){
	    if (e.keyCode == 13) {$("#btn_Entrar").click();}
	});	

	// Mostra mensagem de progresso enquanto valida candidato
	$("#btn_Entrar").click(function(){

		Mostra_Mensagem('Aguarde. Verificando...');
		busca_candidato();

	});
});

function busca_candidato() {		// Executa a pesquisa pelo candidato, no banco de dados
		$.ajax({
 		   type: "POST"
		  ,url: "./include/renach_acao.php"
		  ,data: "tx_renach="+$("#tx_renach").val()
		  ,dataType: "script"
		  ,error: function() {
								alert('Nao ha prova agendada para o Renach informado.');
		  }
		  ,success: function(msg){

	  		 // Alimenta matriz publica com dados do candidato

	  		 if (msg == -1) {
	  		     alert('Nao ha prova agendada para o Renach informado.');

	  		 } else {
	  		 	$("#tb_conteudo_meio").load('./iniciar_prova.inc.php');

	  		 }
		  }
		});

/*
$.ajax({
		url: "/ajaxmessages.php",
		type: "POST",
		ifModified: 1,
		error: function() { alert("error") },
		success: function(json, status) {},
		complete: function(json, status) {
		eval("var args = " + json);
		$("#ajaxUpdate").append('<div>' + args.messages[0] + '</div>');
	}
});
*/
}

