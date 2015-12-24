<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: Tecnodata Educacional - Agenda ::. v1.0.0</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:10px;
	top:20px;
	width:740px;
	height:410px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:20px;
	top:70px;
	width:60px;
	height:20px;
	z-index:2;
}
-->
</style>
<link href="css/tecnodata.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#Layer3 {
	position:absolute;
	left:90px;
	top:70px;
	width:640px;
	height:20px;
	z-index:3;
}
#Layer4 {
	position:absolute;
	left:20px;
	top:100px;
	width:60px;
	height:20px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:90px;
	top:100px;
	width:190px;
	height:20px;
	z-index:5;
}
#Layer6 {
	position:absolute;
	left:290px;
	top:100px;
	width:90px;
	height:20px;
	z-index:6;
}
#Layer7 {
	position:absolute;
	left:390px;
	top:100px;
	width:190px;
	height:20px;
	z-index:7;
}
#Layer8 {
	position:absolute;
	left:22px;
	top:40px;
	width:60px;
	height:20px;
	z-index:8;
}
#Layer9 {
	position:absolute;
	left:90px;
	top:40px;
	width:90px;
	height:20px;
	z-index:9;
}
#Layer10 {
	position:absolute;
	left:190px;
	top:40px;
	width:80px;
	height:20px;
	z-index:10;
}
#Layer11 {
	position:absolute;
	left:280px;
	top:40px;
	width:160px;
	height:20px;
	z-index:11;
}
#Layer12 {
	position:absolute;
	left:20px;
	top:130px;
	width:80px;
	height:20px;
	z-index:12;
}
#Layer13 {
	position:absolute;
	left:20px;
	top:150px;
	width:710px;
	height:150px;
	z-index:13;
}
#Layer14 {
	position:absolute;
	left:320px;
	top:360px;
	width:70px;
	height:20px;
	z-index:14;
}
-->
</style>
</head>

<body>
<form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmAgenda" id="frmAgenda">
<div id="Layer1"></div>
<div class="label_campo" id="Layer2">Cliente</div>
<div id="Layer3">
  <select name="select" class="label_input">
  </select>
</div>
<div class="label_campo" id="Layer4">De</div>
<div id="Layer5">
  <select name="select2" class="label_input">
  </select>
</div>
<div class="label_campo" id="Layer6">Para</div>
<div id="Layer7">
  <select name="select3" class="label_input">
  </select>
</div>
<div class="label_campo" id="Layer8">Data</div>
<div id="Layer9">
  <input name="textfield" type="text" class="label_input" size="14" maxlength="10" />
</div>
<div class="label_campo" id="Layer10">Hora</div>
<div id="Layer11">
  <input name="textfield2" type="text" class="label_input" />
</div>
<div class="label_campo" id="Layer12">Observa&ccedil;&atilde;o</div>
<div id="Layer13">
  <textarea name="txtObs" cols="115" rows="11" class="label_input" id="txtObs"></textarea>
</div>
<div id="Layer14">
  <input name="btGravar" type="submit" class="label_botao" id="btGravar" value="Gravar" />
</div>
</form>
</body>
</html>
