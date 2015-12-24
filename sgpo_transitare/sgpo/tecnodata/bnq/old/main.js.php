$(document).ready(function(){
 	  $("#lista_ref_legal").hide('slow');
    $("#tb_ref_legal").hide();

    $("#btn_ref_pesq").click(function(){    	  $("#lista_ref_legal").load("ref_legal_pesq.inc.php",
    	        {  ref_legal_diploma:   $("#ref_legal_diploma").val()
    	          ,ref_legal_numero:    $("#ref_legal_numero").val()
    	          ,ref_legal_capitulo:  $("#ref_legal_capitulo").val()
    	          ,ref_legal_secao:     $("#ref_legal_secao").val()
    	          ,ref_legal_artigo:    $("#ref_legal_artigo").val()
    	          ,ref_legal_paragrafo: $("#ref_legal_paragrafo").val()
    	          ,ref_legal_inciso:    $("#ref_legal_inciso").val()
    	          ,ref_legal_alinea:    $("#ref_legal_alinea").val()
    	          ,ref_legal_item:      $("#ref_legal_item").val()
    	        }
    	  );
 	      $("#lista_ref_legal").show('slow');
    })

    $("#btn_ref_novo").click(function(){
        alert('btn_ref_novo');
    })
});
