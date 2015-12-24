var timercount = 0;
var timestart  = null;
var clockID    = null;
var showout	   = -1;

// Avisos de timeout da Prova
var beep = new Array('10:00', '05:00', '03:00', '01:00', '00:55', '00:50', '00:40', '00:30', '00:20', '00:00');
var tempo = 1;

var timeout = (60 - tempo);

function showtimer() {
	if(!timercount) {
		clearTimeout(timercount);
		clockID = 0;
	}

	if(!timestart){
		timestart = new Date();
	}
	var timeend = new Date();

	// Cronometro progressivo
	var timedifference = timeend.getTime() - timestart.getTime();

	// Cronometro regressivo
	var timedifference = timestart.getTime() - timeend.getTime();

	timeend.setTime(timedifference);

	var minutes_passed = timeend.getMinutes()-timeout;

	if(minutes_passed < 10){
		minutes_passed = "0" + minutes_passed;
	}
	var seconds_passed = timeend.getSeconds();
	if(seconds_passed < 10){
		seconds_passed = "0" + seconds_passed;
	}

	decorrido = minutes_passed + ":" + seconds_passed;
	document.getElementById("timetextarea").value = minutes_passed + ":" + seconds_passed;

    var iLen = beep.length;

    for (x=0; x < iLen; x++) {
		if(decorrido == beep[x]){
		    $("#timer_status").text("Aten&ccedil;&atilde;o para o tempo restante: " + decorrido);
		    $("#timer_status").show('slow');
		    showout = 40;

			if (x == (iLen-1)) {
			    Encerra_Cronometro();
			}
		}

		if (showout!=-1) {
  			if (showout==0) {
				$("#timer_status").hide('slow');
		    };
		    showout--
		};
    }

	if (timercount)
  	  timercount = setTimeout("showtimer()", 1000);
}

function sw_start(){
	if(!timercount){
		timestart   = new Date();
		document.getElementById("timetextarea").value = "--:--";
		timercount  = setTimeout("showtimer()", 1000);
	}
	else{
	var timeend = new Date();
		var timedifference = timeend.getTime() - timestart.getTime();
		timeend.setTime(timedifference);
		var minutes_passed = timeend.getMinutes();
		if(minutes_passed < 10){
			minutes_passed = "0" + minutes_passed;
		}
		var seconds_passed = timeend.getSeconds();
		if(seconds_passed < 10){
			seconds_passed = "0" + seconds_passed;
		}
		var milliseconds_passed = timeend.getMilliseconds();
		if(milliseconds_passed < 10){
			milliseconds_passed = "00" + milliseconds_passed;
		}
		else if(milliseconds_passed < 100){
			milliseconds_passed = "0" + milliseconds_passed;
		}
		document.getElementById("laptime").value = minutes_passed + ":" + seconds_passed + "." + milliseconds_passed;
	}
}

function Stop() {
	if(!timercount) {
		clearTimeout(timercount);
		timercount  = 0;
		var timeend = new Date();
		var timedifference = timeend.getTime() - timestart.getTime();
		timeend.setTime(timedifference);
		var minutes_passed = timeend.getMinutes();
		if(minutes_passed < 10){
			minutes_passed = "0" + minutes_passed;
		}
		var seconds_passed = timeend.getSeconds();
		if(seconds_passed < 10){
			seconds_passed = "0" + seconds_passed;
		}
		var milliseconds_passed = timeend.getMilliseconds();
		if(milliseconds_passed < 10){
			milliseconds_passed = "00" + milliseconds_passed;
		}
		else if(milliseconds_passed < 100){
			milliseconds_passed = "0" + milliseconds_passed;
		}
		document.getElementById("timetextarea").value = minutes_passed + ":" + seconds_passed + "." + milliseconds_passed;
	}

	timestart = null;
	timercount  = null;
}

function Reset() {
	timestart = null;
	document.getElementById("timetextarea").value = "00:00";
	document.getElementById("laptime").value = "";
}

function Encerra_Cronometro() {
	timercount = 0;
	timestart  = null;

	$("#tb_conteudo_meio").load("finalizado.inc.php");
	$("#timer_status").text("Aten&ccedil;&atilde;o para o tempo restante: ENCERRADO!!");

	alert('Fim do prazo para a resolução do simulado.');
}