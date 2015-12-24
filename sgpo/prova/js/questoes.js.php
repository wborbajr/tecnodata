$(document).ready(function(){
	// Todos os componentes "radiosbox".
	$("input[@type='radio']").each(function() {
        var x = parseInt($(this).attr("name"));

	    $(this).click(function(){			Aguarde();
	        $("#img_questao_"+x).attr({ src: "imagens/recortes/images/check.gif", title: $(this).attr("value") });
			$.post("./include/questoes.valida.inc.php", { iOpcao_checada: $(this).attr("value"), iPos: $(this).attr("name") } );
	    });
	});

	// Todos as imagens do gabarito.
	$("#img_questao_30").click(function(){
		Aguarde();
    	$.post("./include/questoes.direto.inc.php", {iDir: 30});
    	$("#tb_conteudo_meio").load("./questoes.inc.php");
	});

	$("#img_questao_1").click(function(){
		Aguarde();
    	$.post("./include/questoes.direto.inc.php", {iDir: 1});
    	$("#tb_conteudo_meio").load("./questoes.inc.php");
	});

	$("#btn_Avanca").click(function(){	    if (ipos < 30) {
			Aguarde();
			$.getIfModified("./include/questoes.valida.inc.php", { iDir: 1 } );
	    	$("#tb_conteudo_meio").load("./questoes.inc.php");
    	}

	});

	$("#btn_Volta").click(function(){
	    if (ipos > 1) {			Aguarde();
			$.getIfModified("./include/questoes.valida.inc.php", { iDir: -1 } );
	    	$("#tb_conteudo_meio").load("./questoes.inc.php");
    	}
	});

	$("#btn_Encerrar").click(function(){
		Aguarde();
    	$.post("./include/questoes.direto.inc.php", {iDir: 31});
    	$("#tb_conteudo_meio").load("./finaliza.inc.php");
	});
});

function Aguarde() {	$("#img_aguarde").show('slow');
	$("#img_aguarde").animate({left: 10, opacity: 'toggle'}, 1500, "toggle");
}

