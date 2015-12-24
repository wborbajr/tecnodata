/**
 * @author Waldir Borba Junior
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
						
						_html_jornal += "<tr " +  fundo ;
						_html_jornal += "<td width='5'>&nbsp;</td>";
						_html_jornal += "<td>";
						_html_jornal += request[x].DESCRICAO + "<br />";
						_html_jornal += "<a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a> <a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_jornal += "</td>"
						_html_jornal += "<td width='5'>&nbsp;</td>";
						_html_jornal += "</tr>";
					}
					
					if (request[x].AREA == 2) {
						fundo = (linha2 == 0) ? "bgcolor='#f4f4f4' >" : "bgcolor='#e4e4e4' >";
						linha2 = (linha2 == 0 ) ? 1 : 0;
						
						_html_entrevista += "<tr " +  fundo ;
						_html_entrevista += "<td width='5'>&nbsp;</td>";
						_html_entrevista += "<td>";
						_html_entrevista += request[x].DESCRICAO + "<br />";
						_html_entrevista += "<a href='poddown.php?file=sample.mp3'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a> <a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_entrevista += "</td>"
						_html_entrevista += "<td width='5'>&nbsp;</td>";
						_html_entrevista += "</tr>";
					}

					if (request[x].AREA == 3) {
						fundo = (linha3 == 0) ? "bgcolor='#E4E4E4' >" : "bgcolor='#f4f4f4' >";
						linha3 = (linha3 == 0 ) ? 1 : 0;
						
						_html_redacao += "<tr " +  fundo ;
						_html_redacao += "<td width='5'>&nbsp;</td>";
						_html_redacao += "<td>";
						_html_redacao += request[x].DESCRICAO + "<br />";
						_html_redacao += "<a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a> <a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a>";
						_html_redacao += "</td>"
						_html_redacao += "<td width='5'>&nbsp;</td>";
						_html_redacao += "</tr>";
					}
				}
				$("#tb_jornal").html(_html_jornal);
				$("#tb_entrevista").html(_html_entrevista);
				$("#tb_redacao").html(_html_redacao);
				
				$('a.media').media( { width: 200, height: 20 } );
			},
			error     : function () {
				
			}
		});
	}
};

/*  Onload Functions    //---------------------------*/
$(document).ready(function(){
	populaGrid.init();	
});
