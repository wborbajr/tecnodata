<?php

/**
** Esta classe base representa os mamíferos
*/
class Mamifero
{
	var $tamanho, $peso, $inteligencia,  $nome;
	function mamifero() { }    // Uma forma de construtor em PHP
							   // outra é _Contructor() PHP5
	function getInteligencia() {
	return $this->inteligencia;
	}
	function getNome() {
	return $this->nome;
	}
	function setNome($val) {
	$this->name=$val;
	}
}

class Cachorro extends Mamifero
{
	var $dono;
	var $nivel;
	
	function Cachorro()
	{
	$this->inteligencia = "Baixo";
	$this->getInteligencia();  // Marca o nível da inteligencia do cachoro como baixa
	$this->setNome("Lulu");
	}
	function temDono(){}
	function setDono($val) {
	$this->dono=$val;
	}
	function getDono() {
	return $this->dono;
	}
}

class Homem extends Mamifero
{
	var $casado;
	
	function Homem()
	{
	$this->inteligencia = "Alto";
	$this->getInteligencia();  // Marca o nível da inteligencia do cachoro como baixa
	$this->setNome("Jose");
	}
	function eCasado(){}
	function setCasado($val) {
	$this->casado=$val;
	}
	function getCasado() {
	return $this->casado;
	}
}

?>