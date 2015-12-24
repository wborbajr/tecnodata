$(document).ready(function(){

	// Enter no campo tx_renach, Processa
	$("input").keydown(function(e){
	    smg = '';

	    if (e.keyCode == 13) {	        if ($("#campo1").val()=='') {
	        	smg = 'Informe seu EMail\n';
	        };

	        if ($("#campo2").val()=='') {	            smg += 'Informe sua Senha\n';
	        }

	        if (smg!='') {
	        	alert(smg);
	        } else {	        	$("#btn_Entrar").click();
	        }
	    };
	});

	// Mostra mensagem de progresso enquanto valida candidato
	$("#btn_Entrar").click(function(){
        busca_candidato();
	});

	// Todos as imagens do gabarito.
	$("img").each(function() {
        var x = $(this).attr("id");

	    $(this).click(function(){
			if (x.substring(0,11)=='img_questao') {
	        	x = x.substring(12);
	   			$("#tb_conteudo_meio").load("./questoes.inc.php", { iQuestao: parseInt(x) });
			};
	    });
	});

	$("#a_cadastrese").click(function(){
    	$("#tb_conteudo_meio").load("cadastrar.inc.php");
     });

});

function busca_candidato() {
        Mostra_Mensagem('on');

		// Executa a pesquisa pelo candidato, no banco de dados
		$.ajax({
 		   type: "POST"
		  ,url: "./include/autentica_login.php"
		  ,data: "campo1="+$("#campo1").val()+"&campo2="+$("#campo2").val()
		  ,dataType: "script"
		  ,error: function(msg) {		      	alert('ERRO! \n'+msg);
                Mostra_Mensagem('off');
		  }
		  ,success: function(msg){

	  		 // Alimenta matriz publica com dados do candidato
	  		 if (msg == -1) {
	  		     alert('Email não cadastrado em nosso sistema.');

	  		 } else if (msg == 0) {
	  		     alert('Senha inválida!');

	  		 } else if (msg == 1) {
	  		     alert('Não há simulado agendado!');

	  		 } else {
	  		 	$("#tb_conteudo_meio").load('./iniciar_simulado.inc.php');

	  		 }

            Mostra_Mensagem('off');
		  }
		});
};