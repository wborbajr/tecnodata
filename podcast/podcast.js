/**
 * @author Waldir Borba Junior
 *
 * 28/04/2008 - Adicionado controle de exibir mais podcast
 */

var populaGrid = {
	init : function () {
		$.ajax ({
			type      : "POST",
			url       : "podcast-act.php",
			dataType  : "json",
			data      : "action=popula",
			timeout   : 2000,
			beforeSend: function () {
				
			},
			success   : function (request) {
				var aSize = request.length;
				var _html_jornal = "";
				var _html_entrevista = "";
				var _html_redacao = "";
				
				var linha1 = 0;
				var linha2 = 0;
				var linha3 = 0;
				
				for( x = 0; x < aSize; x++ ){
					
					if (request[x].AREA == 1) {
						fundo = (linha1 == 0) ? "bgcolor='#E4E4E4' >" : "bgcolor='#f4f4f4' >";
						linha1 = (linha1 == 0 ) ? 1 : 0;
						
						_html_jornal +="<tr " +  fundo ;
						_html_jornal +="<td colspan='2' height='40'>"+request[x].DESCRICAO +"</td>";
						_html_jornal +="</tr>";
						_html_jornal +="<tr " +  fundo ;
						_html_jornal +="<td align='center' width='100'><a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a>"+"</td>";
						_html_jornal +="<td align='center' width='100'><a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a></td>";
						_html_jornal +="</tr>";
					}
					
					if (request[x].AREA == 2) {
						fundo = (linha2 == 0) ? "bgcolor='#f4f4f4' >" : "bgcolor='#e4e4e4' >";
						linha2 = (linha2 == 0 ) ? 1 : 0;
						
						_html_entrevista +="<tr " +  fundo ;
						_html_entrevista +="<td colspan='2' height='40'>"+request[x].DESCRICAO +"</td>";
						_html_entrevista +="</tr>";
						_html_entrevista +="<tr " +  fundo ;
						_html_entrevista +="<td align='center' width='100'><a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a>"+"</td>";
						_html_entrevista +="<td align='center' width='100'><a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a></td>";
						_html_entrevista +="</tr>";
					}

					if (request[x].AREA == 3) {
						fundo = (linha3 == 0) ? "bgcolor='#E4E4E4' >" : "bgcolor='#f4f4f4' >";
						linha3 = (linha3 == 0 ) ? 1 : 0;
						
						_html_redacao +="<tr " +  fundo ;
						_html_redacao +="<td colspan='2' height='40'>"+request[x].DESCRICAO +"</td>";
						_html_redacao +="</tr>";
						_html_redacao +="<tr " +  fundo ;
						_html_redacao +="<td align='center' width='100'><a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a>"+"</td>";
						_html_redacao +="<td align='center' width='100'><a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a></td>";
						_html_redacao +="</tr>";
					}
				}
				$("#tb_jornal").html(_html_jornal);
				$("#tb_entrevista").html(_html_entrevista);
				$("#tb_redacao").html(_html_redacao);
				
				$('a.media').media( { width: 85, height: 20 } );
			},
			error     : function () {
				
			}
		});
	}
};

var maispodcast = {
	init : function() {
		$("#maispod1").click(function(){
			$("#dv_podcast").hide();
			carregaPods();
		});
		$("#maispod2").click(function(){
			$("#dv_podcast").hide();
			carregaPods();
		});
		$("#maispod3").click(function(){
			$("#dv_podcast").hide();
			carregaPods();
		});
	}
};

var voltar = {
	init : function() {
		$("#lnkVoltar").click(function(){
			$("#dv_conteudo").hide();
			$("#dv_podcast").show();
		});
	}
};

var searchPodcast = {
	init : function() {
		$( "#btBusca" ).click( searchPodcast.search )
	},
	
	search : function() {
		$("#pesPod").ajaxSubmit({
			url: 'pespod.php',
			target: "#aviso",
			dataType: 'json',
			beforeSubmit: function() {
				$('#aviso').html('Aguarde...');
			},
			method : 'POST',
			success : function (data) {
				if (data.RETORNO == true) {
					$('#aviso').html('Podcast salvo com sucesso...');
				} else {
					$('#aviso').html('Erro ao salvar Podcast. Tente novamente.');
				}
			},
			clearForm: true,
			resetForm: true
		});
	}
};

function carregaPods() {
	$("#dv_conteudo").show();
	$("#dv_podcast").hide();
}

/*  Onload Functions    //---------------------------*/
$(document).ready(function(){

	$("#dv_conteudo").hide();
	
	populaGrid.init();	
	
	maispodcast.init();
	
	voltar.init();
	
	searchPodcast.init();
});
