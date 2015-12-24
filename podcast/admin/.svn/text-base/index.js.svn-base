// JavaScript Document

var populaGrid = {
	init : function () {
		$.ajax ({
			type      : "POST",
			url       : "index-act.php",
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
						
						_html_jornal += "<tr " +  fundo ;
//						_html_jornal += "<td width='5'>&nbsp;</td>";
						_html_jornal += "<td>";
						_html_jornal += request[x].DESCRICAO + "<br />";
						_html_jornal += "<a class='media' href='../podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_jornal += "<a href=\"#\"><img id=\"btDel\" title=\"" +request[x].ID+ "\" src=\"../img/delete.gif\" alt=\"Remove o podcast atual.\" border=\"0\" /></a> Apagar Podcast &nbsp;&nbsp;";
//						_html_jornal += "<a href=\"#\"><img id=\"btAlt\" title=\"" +request[x].ID+ "\" src=\"../img/update.gif\" alt=\"Altera o podcast atual.\" border=\"0\" /></a> Alterar Podcast";
						_html_jornal += "</td>"
//						_html_jornal += "<td width='40'>&nbsp;</td>";
						_html_jornal += "</tr>";
					}
					
					if (request[x].AREA == 2) {
						fundo = (linha2 == 0) ? "bgcolor='#f4f4f4' >" : "bgcolor='#e4e4e4' >";
						linha2 = (linha2 == 0 ) ? 1 : 0;
						
						_html_entrevista += "<tr " +  fundo ;
//						_html_entrevista += "<td width='5'>&nbsp;</td>";
						_html_entrevista += "<td>";
						_html_entrevista += request[x].DESCRICAO + "<br />";
						_html_entrevista += "<a class='media' href='../podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_entrevista += "<a href=\"#\"><img id=\"btDel\" title=\"" +request[x].ID+ "\" src=\"../img/delete.gif\" alt=\"Remove o podcast atual.\" border=\"0\" /></a> Apagar Podcast &nbsp;&nbsp;";
//						_html_entrevista += "<a href=\"#\"><img id=\"btAlt\" title=\"" +request[x].ID+ "\" src=\"../img/update.gif\" alt=\"Altera o podcast atual.\" border=\"0\" /></a> Alterar Podcast";
						_html_entrevista += "</td>"
//						_html_entrevista += "<td width='40'>&nbsp;</td>";
						_html_entrevista += "</tr>";
					}

					if (request[x].AREA == 3) {
						fundo = (linha3 == 0) ? "bgcolor='#E4E4E4' >" : "bgcolor='#f4f4f4' >";
						linha3 = (linha3 == 0 ) ? 1 : 0;
						
						_html_redacao += "<tr " +  fundo ;
//						_html_redacao += "<td width='5'>&nbsp;</td>";
						_html_redacao += "<td>";
						_html_redacao += request[x].DESCRICAO + "<br />";
						_html_redacao += "<a class='media' href='../podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_redacao += "<a href=\"#\"><img id=\"btDel\" title=\"" +request[x].ID+ "\" src=\"../img/delete.gif\" alt=\"Remove o podcast atual.\" border=\"0\" /></a> Apagar Podcast &nbsp;&nbsp;";
//						_html_redacao += "<a href=\"#\"><img id=\"btAlt\" title=\"" +request[x].ID+ "\" src=\"../img/update.gif\" alt=\"Altera o podcast atual.\" border=\"0\" /></a> Alterar Podcast";
						_html_redacao += "</td>"
//						_html_redacao += "<td width='40'>&nbsp;</td>";
						_html_redacao += "</tr>";
					}
				}
				$("#tb_jornal").html(_html_jornal);
				$("#tb_entrevista").html(_html_entrevista);
				$("#tb_redacao").html(_html_redacao);
				
				$('a.media').media( { width: 200, height: 20 } );
				
				deletePodcast.init();
			},
			error     : function () {
				
			}
		});
	}
};

var deletePodcast = {
	init : function(){
		$("img[@id=btDel]").mousedown(function(){
			$.ajax({
				type: "POST",
				url: "index-act.php",
				dataType: "html",
				data: "action=delpod&idpod="+$(this).attr('title'),
				timeout: 2000,
				beforeSend: function() {
				},			
				success: function(data, status){
					populaGrid.init();
				},
				error: function(data, status, e){
					alert("Erro eliminando Podcast\n\n" + e);
				}
			}); // end_ajax
		});
	}
};

var updatePodcast = {
	init : function(){
		$("img[@id=btAlt]").mousedown(function(){
			$.ajax({
				type: "POST",
				url: "index-act.php",
				dataType: "html",
				data: "action=updpod&idpod="+$(this).attr('title'),
				timeout: 2000,
				beforeSend: function() {
				},			
				success: function(data, status){
					populaGrid.init();
				},
				error: function(data, status, e){
					alert("Erro eliminando Podcast\n\n" + e);
				}
			}); // end_ajax
		});
	}
};


$(document).ready(function(){
						   
	populaGrid.init();
	
});