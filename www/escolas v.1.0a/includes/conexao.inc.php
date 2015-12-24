<?
//------------------------------------------------------------------------
// Controle de conexao com o banco de dados
//
// Autor: Waldir Borba Junior
// Data.: 10/11/2005
//------------------------------------------------------------------------

function dbcon()
{
	$host="localhost";
	$username="educacional";
	$password="#educa";
	$database="educacional";

	@mysql_connect($host,$username,$password) or die(mysql_error());
    @mysql_select_db($database) or die(mysql_error());
}

?>