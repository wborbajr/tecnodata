
/* Object Literal  //----------------------*/
var savePodCast = {
	controle : 0,
	
	init : function () {
		$("#btGO").mousedown( savePodCast.save );
	},
	
	save : function () {
		$("#frmPodcast").ajaxSubmit({
			url: 'upload.php',
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


/* OnLoad Function  //----------------------*/
$(document).ready(function(){

	savePodCast.init();

});
