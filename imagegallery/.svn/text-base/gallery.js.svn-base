
/* Functions // --------------------- */

if (typeof ATBSIS == "undefined" || !ATBSIS) {
    /**
     * The ATBSIS global namespace object.  If ATBSIS is already defined, the
     * existing ATBSIS object will not be overwritten so that defined
     * namespaces are preserved.
     * @class ATBSIS
     * @static
     */
    var ATBSIS = {};
}

ATBSIS.buildImages = function( caminho ) {
	$.ajax({
		type	  : "POST",
		url	  	  : "gallery.php",
		dataType  : "json",
		data	  : "action=buildimages&caminho="+caminho,
		timeout	  : 3000,
		beforeSend: function () {
			//loading.start();
		},			
		success   : function ( data, status ){
			//loading.stop();
			
			console.log(data);

			var aSize = data.length;
			var x = 0;
			var _html = "";

			for ( x = 0; x < aSize; x++ ) {
				_html +="<a href='"+caminho+"/"+data[x].IMG+"' title='"+data[x].TXT+"'>";
				_html +="<img src='"+caminho+"/"+data[x].IMG+"' width='72' height='72' alt='' />";
				_html +="</a>";
			}
			$("#image_gallery").html(_html);
			ATBSIS.gallery();
		},
		error	  : function ( data, status, e ) {
			alert(e);
		}
	});		
	
};

ATBSIS.gallery = function() {
	$('#gallery a').lightBox();
}

/* OnLoad Functions // --------------------- */

$(document).ready(function(){
	ATBSIS.buildImages( "imgs" );
});
