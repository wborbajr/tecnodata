<html>
<head>
<script language="vbscript">
function FormataValor(id)
tam = len(id.value)
tecla = window.event.keycode
document.form.valor2.value = tecla
Select Case tecla
Case "96","97","98","99","100","101","102","103","104","105"
if tam > 2 then
id.value = replace(replace(id.value,".",""),",","")
tam = len(id.value)
direita = right(id.value,2)
esquerda = left(id.value,tam-2)
id.value = esquerda &","&direita
end if
Case else
id.value = left(id.value,tam-1)
end select
end function
</script>
</head>
<body bgcolor="#F2F2F2"><BR><BR><BR>
<div align="center">
<center>
<table width="379" border="1" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" bordercolorlight="#FFFFFF"><TR><TD bgcolor="#FF6600" width="371" bordercolorlight="#000000" bordercolordark="#000000">
<p align="center"><b><font size="1" face="Verdana" color="#FFFFFF">Função
Formata Valor em (R$) automaticamente</font></b></td></tr><tr><TD bgcolor="#CCCCCC" width="371" bordercolorlight="#000000" bordercolordark="#000000">
<form name=form>
<p align="center">
<b><font size="1" face="Verdana">
Valor 1: R$<input type="text" name="valor1" id="valor1" onKeyup="FormataValor(me)" size="20" maxlength="20">
</font></b>
<p align="center"><b><font size="1" face="Verdana">Valor 2: R$<input type="text" name="valor2" id="valor2" onKeyup="FormataValor(me)" size="20" maxlength="20">
</font></b>
</p>
</form>
</td></tr>
</table>
</center>
</div>
<p> </p>
<p> </p>
<p> </p>
<p align="center"><font size="1" face="Arial" color="#003399">Powered by d1gu</font></p>
</body>
</html>