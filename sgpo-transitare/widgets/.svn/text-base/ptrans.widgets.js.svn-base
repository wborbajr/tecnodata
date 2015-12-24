(
function(){
    var widgetDate = new Date();
    var widgetScript = document.getElementsByTagName('script')[document.getElementsByTagName('script').length-1];
    var widgetParent = widgetScript.parentNode;
    var counter = 0;
    try {
        eval("var getParam=[];\n"+unescape((widgetScript.src+"&").replace(/.*?\?/,"&").match(/\&*[^\&]*?\=.*?\&/g,"").join(";").replace(/;&/g,";").replace(/^&/g,"getParam['").replace(/&$/,"\";").replace(/=/g,"']=\"").replace(/&;/g,"\";\ngetParam['")));
        var estacao = getParam['estacao'].toUpperCase();
        var skin    = getParam['skin'].toLowerCase();
        var tema    = getParam['tema'].toLowerCase();
    }
    catch (e) {
        if(estacao && skin) {
            var tema = "noticias";
        }
        else {
            var estacao = "ESPORTE";
            var skin    = "1";
        }
    }
    
    if(widgetParent.className=="UOLWidgetsStyle") widgetParent.id = "UOLWidgetsStyle"+estacao+tema+skin;

    var widgetContainer = document.createElement("div");
    widgetParent.insertBefore(widgetContainer, widgetScript);
    
	// Variável sem função!!
    widgetSite = location.href;
	
    site = "http://widgets.uol.com.br/UolWidgetsConfig"+estacao+".js?ts="+widgetDate.getTime();
	
    // Desabilitado por ReiWolf
	//document.write('<script src=site type="text/javascript"></script>');

    var isLoad = setInterval(function(){
        try {
            counter += 1;
            widgetContainer.innerHTML = eval('UolWidgetsConfig'+estacao+'[tema][skin]');
            clearInterval(isLoad);
        }
        catch (e) {
            if(counter>5) { // 3 seconds timeout
				pageretorno = '<iframe src="http://www.portaldotransito.com.br/widgets/index.php?site="+widgetSite width="160" height="376" frameborder="0" border="0" scrolling="no"></iframe>';
                widgetContainer.innerHTML = pageretorno;
                clearInterval(isLoad);
            }
            else {
                return;
            }
         }
    },500);
}
)();