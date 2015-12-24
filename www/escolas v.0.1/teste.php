<?php
// Inclui o arquivo da classe
require "./class/clausulas_sql.class.php";

// Define a classe
$sql = new clausulas_sql;

// Campos e dados para a cl�usula INSERT exemplo
//$campos = array("nome", "cidade", "telefone");
//$dados = array("Antonio Carlos", "S�o Paulo", "(11) 9999-9999");

// Gera a cl�usula SQL INSERT
//$insert = $sql->gera_insert("tabela_agenda", $campos, $dados);

// Campos e dados para a clausula UPDATE
$campos = array("cliente", "produto", "valor", "quantidade");
$dados = array("Alfred", 2, 540);

// Gera a cl�usula SQL UPDATE
$update = $sql->gera_update("tabela_carrinho", $campos, $dados, "WHERE loja = 36"); 

echo $update;

?> 