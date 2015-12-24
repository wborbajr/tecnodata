/**
 * @author Waldir Borba Junior
 */

var populaGrid = {
	init : function () {
		$.ajax ({
			type      : "POST",
			url       : "lastpod-act.php",
			dataType  : "json",
			data      : "action=popula",
			timeout   : 2000,
			beforeSend: function () {
				$("#tb_podcast").html("Aguarde...");
			},
			success   : function (request) {
				var aSize = request.length;
				var _html = "";
				
				var linha1 = 0;
				var linha2 = 0;
				var linha3 = 0;
				
				for( x = 0; x < aSize; x++ ){
					fundo = (linha1 == 0) ? "bgcolor='#E4E4E4' >" : "bgcolor='#f4f4f4' >";
					linha1 = (linha1 == 0 ) ? 1 : 0;

/*
  <tr>
    <td colspan="2" align="center">dasd</td>
  </tr>
  <tr>
    <td align="center">dn</td>
    <td align="center">play</td>
  </tr>
*/
					
					_html +="<tr " +  fundo ;
					_html +="<td colspan='2'>"+request[x].DESCRICAO +"</td>";
					_html +="</tr>";
					_html +="<tr " +  fundo ;
					_html +="<td align='center' width='100'><a href='poddown.php?file=" + request[x].ARQUIVO + "'><img src='img/downloadicon.png' alt='Download do podcast' border='0'></a>"+"</td>";
					_html +="<td align='center' width='100'><a class='media' href='podcast/"+ request[x].ARQUIVO +"'></a></td>";
					_html +="</tr>";
				}
				$("#tb_podcast").html(_html);
				
				$('a.media').media( { width: 85, height: 20 } );
			},
			error     : function () {
				$("#tb_podcast").html("");
			}
		});
	}
};

/*  Onload Functions    //---------------------------*/
$(document).ready(function(){
	populaGrid.init();	
});
