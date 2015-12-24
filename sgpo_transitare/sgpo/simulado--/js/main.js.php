$(document).ready(function(){

    // Carrega tela de indentificação do candidato
    $("#tb_conteudo_meio").load("./autentica.inc.php");

});


function Mostra_Mensagem(status) {    if (status=="on") {
	    $("#div_cargando").show('slow');
	} else {	    $("#div_cargando").hide('slow');	};
}

function criaHidden(id, valor) //Por Bernardo Rufino
	{var eBody = document.getElementsByTagName("body");
    var elem = document.createElement("input");
	elem.setAttribute("type", "hidden");
	elem.setAttribute("value", valor);
	elem.setAttribute("id", id);
    eBody[0].appendChild(elem);}

function contRegress(id, secs, stopZero) //Por Bernardo Rufino
	{//Se está pronto para começar ou já começou.
	if(document.getElementById("bmr-cont"))
		{if(secs) //Foi por uma pessoa
			{if(control.value=="cont"+id+"_run")
				{control.value="cont"+id+"_stop";}
			else if(control.value=="cont"+id+"_stop")
				{control.value="cont"+id+"_run";}
			else if (control.value.indexOf(id)==-1)
				{control.value="cont"+id+"_end";
				control.parentNode.removeChild(control);
				segundos=null; alvo=null; alvoValor=null;
				stopZero=null; time=null;
				contRegress(id, secs, stopZero);}}
		else //Foi o sistema
			{//Se estiver apto à continuar(controle: "cont$ID_run")
			if(control.value=="cont"+id+"_run")
				{segundos--;
				if(alvo.tagName.toLowerCase()=="input") {alvo.value=segundos;}
				else if(alvo.tagName) {alvo.innerHTML=segundos;}
				if(segundos<=0 && stopCont==true)
					{control.value="cont"+id+"_end";
					control.parentNode.removeChild(control);
					segundos=null; alvo=null; alvoValor=null;
					stopZero=null; time=null; control=null; id=null;}
				else {setTimeout("contRegress('"+id+"')", 1000);}}
			//Se não(controle: "cont$ID_stop"), vai ficar tentando.
			else if (control.value=="cont"+id+"_stop")
				{setTimeout("contRegress('"+id+"')", 100);}}}
	else {criaHidden("bmr-cont", "cont"+id+"_run"); //Não, Ainda não começou
		control=document.getElementById("bmr-cont");
		stopCont=((stopZero==null)?true:stopZero);
		alvo=document.getElementById(id);
		segundos=++secs; time=true;
		contRegress(id);}}
