/**
 * @author Waldir Borba Junior
 */

var targetURL = 'enquete-act.php';

/* Functions // --------------------- */
var buildPoll = {
	init : function () {
		$.ajax({
			type: "POST",
			url: targetURL,
			dataType: "json",
			data: "action=buildpoll",
			timeout: 3000,
			beforeSend: function() {
				//loading.start();
			},			
			success: function(request){
				//loading.stop();
				
				var aSize = request.length;
				var _html = "";
				
				//<!-- Pergunta -->
	            _html += "<tr>";
	            _html +=     "<td colspan=\"2\" align=\"center\">";
	            _html +=         request[0].PERGUNTA; 
	            _html +=     "</td>";
	            _html += "</tr>";
	            _html +=  "<tr>";
	            _html +=      "<td colspan=\"2\">";
	            _html +=          "&nbsp;";
	            _html +=      "</td>";
	            _html +=  "</tr>";

				$("#enq_id").val(request[0].ENQID);

				for( x = 1; x < aSize; x++ ){
					//<!-- Respostas -->
		            _html +=  "<tr>";
		            _html +=      "<td width=\"130\">";
		            _html +=          request[x].RESPDES; 
		            _html +=      "</td>";
		            _html +=      "<td width=\"50\">";
		            _html +=          "<input name=\"rbpoll\" id="+ request[x].RESPID +" value=\""+request[x].RESPID+"\" type=\"radio\" />";		            
					_html +=      "</td>";
		            _html +=  "</tr>";
					
				}

				//<!-- Botao -->
	            _html +=  "<tr>";
	            _html +=      "<td colspan=\"2\" align=\"center\">";
	            _html +=          "<input name=\"btVote\" type=\"button\" id=\"btVote\" value=\"Votar\">";
	            _html +=      "</td>";
	            _html +=  "</tr>";

				$("#tb_conteudo").html(_html);
				
				// Compute user choice
				computePoll.init();
			}
		});		
	}
}

var computePoll = {
	init : function(){
		$("#btVote").mousedown(function(){
			
//			$('input[type=radio][value=x]').get(0).checked = true;
//			$('input[value=x]').get(0).checked = true;
//			$('input[value=x]').attr('checked','checked');
//			$(':radio').get(0).checked = true;
//			$("input[@type=radio][@checked]");

			var boolValid = false;
			var opcao = null;
			$('input:radio').each(function() {
				if ( $(this).is(':checked') ) {
					boolValid = true;
					opcao = this.id;
					$("#btVote").hide();
				}
			});
			
			var enq_id = $("#enq_id").val();

			var valuesToSend = "enq_id=" + enq_id +"&vote=" + opcao;
			
//			var inputs = [];
//			$("input:radio").each(function(){
//				inputs.push(this.id + "=" + escape(this.value));
//			});
//			
//			var valuesToSend = inputs.join("&");
			
			$.ajax({
				type: "POST",
				url: targetURL,
				dataType: "json",
				data: "action=computepoll&" + valuesToSend,
				timeout: 2000,
				beforeSend: function() {
					//loading.start();
				},			
				success: function(){
					//loading.stop();
					window.location = "index.html";

				},
				error: function(e){
					//loading.stop();
					alert("Erro computando voto \n\n" + e[0]);
				}
			});
		})
	}
}; // end

/* OnLoad Functions // --------------------- */
$(document).ready(function () { 

	// Get Logger User
	buildPoll.init();
	
});