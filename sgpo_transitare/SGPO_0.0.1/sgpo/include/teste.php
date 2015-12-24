<?
require_once("dao_functions.php");

$funcao = new daoFunctions();

$sql = "SELECT * FROM candidato";

$arr = $funcao->query($sql);

print_r($arr);

?>
