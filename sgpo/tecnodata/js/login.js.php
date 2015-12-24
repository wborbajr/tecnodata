$(document).ready(function(){

	// Enter no campo tx_renach, Processa
	$("input").keydown(function(e){

	    smg = '';

	    if (e.keyCode == 13) {
	        if ($("#campo1").val()=='') {
	        	smg = 'Informe seu EMail\n';
	        };

	        if ($("#campo2").val()=='') {
	            smg += 'Informe sua Senha\n';
	        }

	        if (smg!='') {
	        	alert(smg);
	        } else {
	        	$("#btn_Entrar").click();
	        }
	    };
	});

	// Mostra mensagem de progresso enquanto valida candidato
	$("#btn_Entrar").click(function(){	
        valida_usuario();		
	});

	$("#a_gerasenha").click(function(){
		$("#conteudo_meio").load("./gerasenha.inc.php");
	});

});

function valida_usuario() {
var Msg_Saudacao = '<table width="100%" border="0" cellspacing="0" cellpadding="0">'+
				   '<tr><td height="300"><div align="center"><h1>BEM VINDO! </h1></div></td></tr>'+
				   '</table><p>&nbsp;</p>';
								  
        Mostra_Mensagem('on');

		// Executa a pesquisa pelo candidato, no banco de dados
		$.ajax({
 		   type: "POST"
		  ,url: "./include/autentica_login.php"
		  ,data: "campo1="+$("#campo1").val()+"&campo2="+$("#campo2").val()
		  ,dataType: "script"
		  ,error: function(msg) {
		      	alert('ERRO! \n'+msg);
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
			    alert('oi');
//	  		 	$("#tb_conteudo_meio").load('./iniciar_simulado.inc.php');
	  		 	$("#tb_conteudo_meio").text(Msg_Saudacao);

	  		 }

            Mostra_Mensagem('off');
		  }
		});
};