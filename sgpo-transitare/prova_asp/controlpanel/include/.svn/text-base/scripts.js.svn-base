<!--
defaultStatus='Prova Eletrônica - TECNODATA'
//-->

<!-- 

function close_window() {
window.close();
}
//-->

<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

<!--
function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_showHideLayers() { //v3.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->

<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->

<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

//-->


<!--
var win = null;
function OpenWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable=no'
win = window.open(mypage,myname,settings)
}
//-->

<!--
   function txtBoxFormat(objForm, strField, sMask, evtKeyPress) {
     var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;

     if(document.all) { // Internet Explorer
       nTecla = evtKeyPress.keyCode; }
     else if(document.layers) { // Nestcape
       nTecla = evtKeyPress.which;
     }

     sValue = objForm[strField].value;

     // Limpa todos os caracteres de formatação que
     // já estiverem no campo.
     sValue = sValue.toString().replace( "-", "" );
     sValue = sValue.toString().replace( "-", "" );
     sValue = sValue.toString().replace( ".", "" );
     sValue = sValue.toString().replace( ".", "" );
     sValue = sValue.toString().replace( "/", "" );
     sValue = sValue.toString().replace( "/", "" );
     sValue = sValue.toString().replace( "(", "" );
     sValue = sValue.toString().replace( "(", "" );
     sValue = sValue.toString().replace( ")", "" );
     sValue = sValue.toString().replace( ")", "" );
     sValue = sValue.toString().replace( " ", "" );
     sValue = sValue.toString().replace( " ", "" );
     fldLen = sValue.length;
     mskLen = sMask.length;

     i = 0;
     nCount = 0;
     sCod = "";
     mskLen = fldLen;

     while (i <= mskLen) {
       bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/"))
       bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))

       if (bolMask) {
         sCod += sMask.charAt(i);
         mskLen++; }
       else {
         sCod += sValue.charAt(nCount);
         nCount++;
       }

       i++;
     }

     objForm[strField].value = sCod;

     if (nTecla != 8) { // backspace
       if (sMask.charAt(i-1) == "9") { // apenas números...
         return ((nTecla > 47) && (nTecla < 58)); } // números de 0 a 9
       else { // qualquer caracter...
         return true;
       } }
     else {
       return true;
     }
   }
//-->

<!--
function cd_atualiza_valores() {
  var values = '';
  for(i=0;i<document.all.cb_opcao.length;i++){
    if(document.all.cb_opcao[i].checked==true){
      if(values==''){
	    values=values+document.all.cb_opcao[i].value;
	  }
	  else{
		values=values+', '+document.all.cb_opcao[i].value;
	  }
	}
  }
  document.all.combobox.value=values;
  document.all.combobox.title=values;
}
function cb_exibe_esconde() {
  if(document.all.cb_opcoes.style.display==''){
    document.all.cb_opcoes.style.display='none'
  }
  else{
    document.all.cb_opcoes.style.display='';
  }
}
//-->