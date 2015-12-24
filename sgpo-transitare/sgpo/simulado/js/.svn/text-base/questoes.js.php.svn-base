$(document).ready(function(){
	// Todos os componentes "radiosbox".
	$("input[@type='radio']").each(function() {
        var x = parseInt($(this).attr("name"));

	    $(this).click(function(){
			    aLetra = new Array('', 'A', 'B', 'C', 'D', 'E');
	        $("#img_questao_"+x).attr({ src: "images/check.gif", title: aLetra[ $(this).attr("value") ] });
			    $.post("./include/questoes.valida.inc.php", { iOpcao_checada: $(this).attr("value"), iPos: $(this).attr("name") } );
			    $("#img_questao_"+x).show('slow');
	    });
	});

  $("#tb_ref_legal").hide('slow');

	$("#btn_Avanca").click(function(){
		Aguarde();
		valor = $("#btn_Avanca").attr("name");
   		$("#tb_conteudo_meio").load("./questoes.inc.php", { iQuestao: parseInt(valor) });
	});

	$("#btn_Volta").click(function(){
		Aguarde();
		valor = $("#btn_Volta").attr("name");
   		$("#tb_conteudo_meio").load("./questoes.inc.php", { iQuestao: parseInt(valor) });
	});

	$("#btn_Encerrar").click(function(){
		Aguarde();
    	$("#tb_conteudo_meio").load("./finaliza.inc.php");
	});

	$("#tr_1").click(function(){
		//alert($("#i_1").val());
		$("#i_1").click();
	});

	$("#tr_2").click(function(){
		$("#i_2").click();
	});

	$("#tr_3").click(function(){
		$("#i_3").click();
	});

	$("#tr_4").click(function(){
		$("#i_4").click();
	});

	$("#tr_5").click(function(){
		$("#i_5").click();
	});

});

function Aguarde() {	$("#img_aguarde").show('slow');
	$("#img_aguarde").animate({left: 10, opacity: 'toggle'}, 1500, "toggle");
}

