<?php
class Core
{
    private $system = array();
    private $db = array();

    function __construct()
    {
        $xml = new Xml("../xml/config.xml");
        $this->system = $xml->obj("sys");
        $this->db = $xml->obj("db");
    }

    public function getSystem($index)
    {
        return $this->system[$index];
    }

    public function getDb($index)
    {
        return $this->db[$index];
    }
}

class Xml
{
    public $data;

    function __construct($file)
    {
        $this->data = simplexml_load_file($file) or die("Não é um arquivo válido");
    }

    function obj($search)
    {
        $obj = $this->data->xpath($search);
        return get_object_vars($obj[0]);
    }
}
?> 