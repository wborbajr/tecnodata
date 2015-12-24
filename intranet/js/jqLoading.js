var loading = {
	start: function(p) {
		var getDoc = (p) ? parent.document : document ;
		var load = getDoc.createElement('div') ;

		$(load)
		.attr('id','__xLoading')
		.css({
			position: "absolute",
			background : "#DF0000",
			color: "#fff",
			padding: "3px",
			width: "80px",
			top: "0",
			right: "0",
			font: "14px bold Verdana, Arial, Helvetica, sans-serif, #FF0000",
			padding: "6px",
			border: "2px solid #CC3300"
		})
		.html('Aguarde...');

		$(getDoc.body).prepend(load);
	},
	
	stop: function(p) {
		var getDoc = (p) ? parent.document : document ;
			$(getDoc.getElementById('__xLoading')).remove();
	}
}
