var timercount = 0;
var timestart  = null;

// Avisos de timeout da Prova
var beep = new Array('59:57','58:50','58:48');

function showtimer() {
	if(timercount) {
		clearTimeout(timercount);
		clockID = 0;
	}
	if(!timestart){
		timestart = new Date();
	}
	var timeend = new Date();
	// Cronometro progressivo
//	var timedifference = timeend.getTime() - timestart.getTime();

	// Cronometro regressivo
	var timedifference = timestart.getTime() - timeend.getTime();

	timeend.setTime(timedifference);
	var minutes_passed = timeend.getMinutes();
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
		    document.getElementById("td_cargando").innerHTML = "Aten��o... " + decorrido;
			$("td_cargando").show();
			//alert(decorrido);
		}
    }


	timercount = setTimeout("showtimer()", 1000);
}

function sw_start(){
	if(!timercount){
		timestart   = new Date();
		document.getElementById("timetextarea").value = "01:00";
//		document.getElementById("laptime").value = "";
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
	if(timercount) {
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
}

function Reset() {
	timestart = null;
	document.getElementById("timetextarea").value = "01:00";
	document.getElementById("laptime").value = "";
}
