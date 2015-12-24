/**
 * @author Waldir Borba Junior
 */

function ajaxFileUpload() {
	$("#loading")
	.ajaxStart(function(){
		$(this).show();
	})
	.ajaxComplete(function(){
		$(this).hide();
	});

	$.ajaxFileUpload ( {
			url:'upload-act.php',
			secureuri:false,
			fileElementId:'fileToUpload',
			dataType: 'json',
/*
			success: function (data, status) {
				if(typeof(data.error) != 'undefined') {
					if(data.error != '') {
						//alert(data.error);
					}else {
						//alert(data.msg + "\n\n Salvo com sucesso.");
					}
				}
			},
*/
			error: function (data, status, e) {
				alert(e);
			}
		}
	)
	
	return false;
}

var saveData = {
	init : function(){
		$("#btGO").mousedown(function(){
								   
			// Upload file to server
			ajaxFileUpload( );
			//

			var inputs = [];
			$("input:input").each(function(){
				inputs.push(this.id + "=" + escape(this.value));
			});
			
			var area=$("#area").val();
						
			var valueToSend = inputs.join("&")+"&area="+area;
			
			console.log(valueToSend);
			
			$.ajax({
				type: "POST",
				url: "upload-act.php",
				dataType: "json",
				data: "action=save&" + valueToSend,
				timeout: 2000,
				beforeSend: function() {
					//loading.start();
				},			
				success: function(data){
					//loading.stop();
					if ( data.msg ) {
						alert("Salvo com sucesso.");
					}
				},
				error: function(data, status, e){
					//loading.stop();
				}
			});
		})
	}
}; // end_saveData


/*  Onload Functions    //---------------------------*/
$(document).ready(function(){

	// Focus field
	$("#txDescri").focus();
	
	saveData.init();
	
});
