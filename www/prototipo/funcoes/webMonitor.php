<?php

/*
//      HTTP Check
//
//
//      Author:         Pablo Costa
//      Lastmod:        2000-12-06
//      Homepage:       http://shark.ib.usp.br
//
//      PHP:
//      <?
//      include("http-check.php");
//      ?>              



Script para verificar se servidores web estao online,
a partir de uma lista fornecida.

No exemplo utilizei o site de operadoras de pager
eu utilizo este script no endereco:

http://shark.ib.usp.br/pager

*/



$data                 =     date(  "H:i (d/m/Y)", time() );
$fonte                =    "<font face=\"Verdana,Arial,Helvetica\" size=\"2\">";         
$link_prefix_on             =       "ONLINE";
$link_prefix_off            =       "OFFLINE";
$link_postfix           =       "<BR>\n";
$cache_file                =       "/tmp/pager.net.cache";    // Cache do arquivo
$cache_time             =       1800;             // Intervalo de renovacao fixado em 30 minutos        
$target                 =       "_top";                                 
$time                   =       split(" ", microtime());
$cache_time_rnd         =       300 - rand(0, 600);

/*

Colocar o array de servidores aqui
Seguindo o esquema:
"Nome do site" => "url do site"

*/

$SERVER = array(

    "Betany"    => "www.bethany.com.br",         
    "Conectel"  => "www.conectel.com.br",       
    "Mobitel"   => "www.mobi.com.br",          
    "Pageacess" => "www.pageacess.com.br",    
    "Pagenet"   => "www.pagenet.com.br",     
    "Toktel"    => "www.toktel.com.br",     
    "Teletrim"  => "www.teletrim.com.br"   
);                                             


srand((double)microtime()*1000000);
if ( (!(file_exists($cache_file))) || ((filectime($cache_file) + $cache_time - $time[1]) + $cache_time_rnd < 0) || (!(filesize($cache_file))) ) {      

    $fpwrite = fopen($cache_file, 'w');
    fputs($fpwrite, "<table width=\"50%\" align=center>\n");
    fputs($fpwrite, "<caption>\n");
    fputs($fpwrite, "$fonte<B>Horario</B>: $data</font>\n");
    fputs($fpwrite, "</caption>\n");
    fputs($fpwrite, "<th align=left>$fonte Status</th></font>\n");
    fputs($fpwrite, "<th align=left>$fonte Servidor</th></font>\n");

    if(!$fpwrite) {
        echo "$errstr ($errno)<br>\n";
        exit;
    } 
    else {                                                
        while(list($KEY,$VALUE) = each($SERVER)) {
            $LOGERRORS = 1;
            $httpserver = fsockopen(  "$VALUE", 80, &$errno, &$errstr);

            // Abre a conexao com servidor http
            if(!$httpserver) {
                       // Se a conexao nao falhar
                if (isset($LOGERRORS)) {
                    // Se houver qualquer erro declara offline
                        fputs($fpwrite, "<tr>\n");
                        fputs($fpwrite, "<td>$link_prefix_off</td>\n");
                        fputs($fpwrite, "<td><A HREF=\"http://$VALUE\" TARGET=\"$target\">$KEY</A></td>\n");
                        fputs($fpwrite, "</tr>\n");      
                }
            } 
            else {
                // Sucesso na conexao, verificar servidor web
                set_socket_blocking($httpserver,-1);     
                fwrite($httpserver,  "get index.html\r\n");
                $banner = fgets($httpserver,128);
                fclose($httpserver);
                sleep(1);
                   $file = fopen( "http://$VALUE/",  "r");

                   if (!$file) {
                        fputs($fpwrite, "<tr>\n");
                        fputs($fpwrite, "<td>$link_prefix_off</td>\n");
                        fputs($fpwrite, "<td><A HREF=\"http://$VALUE\" TARGET=\"$target\">$KEY</A></td>\n");
                        fputs($fpwrite, "</tr>");                                        
                         exit;
                }

                   fclose($file);

                fputs($fpwrite, "<tr>\n");
                fputs($fpwrite, "<td>$link_prefix_on</td>\n");
                    fputs($fpwrite, "<td><A HREF=\"http://$VALUE\" TARGET=\"$target\">$KEY</A></td>\n");
                fputs($fpwrite, "</tr>\n");

            }
        }

    } 

    fputs($fpwrite, "</table>\n");
    fclose($fpwrite);  

}

if (file_exists($cache_file)) {
    include($cache_file);
} 

?>