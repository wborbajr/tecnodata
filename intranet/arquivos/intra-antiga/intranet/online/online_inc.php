<?php

//Área de Configuração

//Nome do Host, normalmente é localhost
$db_host = "192.168.0.6";

//O seu nome de usuário
$db_user = "root";

//A sua senha
$db_pass = "@senha";

//O nome de seu banco de dados
$db_bdad = "sgi";


 //Não mude nada daqui para baixo!

 $versao 	= "1.4";

 // Frases //
 // 1 - Usuário Online
 // 2 - Cliente Online
 // 3 - Visitante Online
 // 4 - Pessoa Online
 $frase		= "1";

 function head() {
 print "
 <html>

 <head>
 <title>On-line $versao - criado por www.brmasters.com.br</title>
 <style>
 <!--
 textarea     { font-family: Tahoma; font-size: 8pt; padding: 3 }
 input        { font-family: Tahoma; font-size: 8pt;  }
 select        { font-family: Tahoma; font-size: 8pt; }
 a {text-decoration: none}
 A:hover {color: #003399; text-decoration: underline}
 -->
 </style>
 </head>

 <body bgcolor='#ffffff' text='#003399' link='#cccccc' vlink='#cccccc' alink='#003399' style='font-family: Verdana;'>
<font face='Arial' size='2'>
<center><p><a href='http://www.riodominios.com.br' target='_blank'>
<img border='0' src='http://www.brmasters.com.br/banner/banner2.gif'></a></p>

<b>Online $versao - Instalar</b></center>";
 }

 function foot() {
 print "<br><br><center>Desenvolvido por <a href='mailto:suporte@brmasters.com.br'>Anderson</a></font></center>\n</body>\n</html>";
 }

 //Bad Password
 function bad_pass() {
 head();
 print "Erro, Volte e tente de novo";
 foot();
 exit();
 }

?>
