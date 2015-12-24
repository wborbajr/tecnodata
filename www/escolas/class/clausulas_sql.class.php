<?php
class clausulas_sql
{
    /**
    * @param string $clausula_sql;
    * @access public
    */
    var $clausula_sql;

    /**
    * Cria cláusulas SQL INSERT
    *
    * @param string $tabela
    * @param array $campos
    * @param array $valores
    * @access public
    */
    function gera_insert($tabela, $campos, $valores)
    {
        $this->clausula_sql = "INSERT INTO " . $tabela . " (";
        
        $quantidade_campos = count($campos);        
        for ($i = 0; $i < $quantidade_campos; ++$i) {
            $this->clausula_sql .= $campos[$i];

            if ($i < ($quantidade_campos-1)) {
                $this->clausula_sql .= ", ";
            }
        }

        $this->clausula_sql .= ") VALUES (";

        for ($i = 0; $i < $quantidade_campos; ++$i) {
            $this->clausula_sql .= clausulas_sql::escreve_valor($valores[$i], $i, $quantidade_campos);
        }

        $this->clausula_sql .= ");";

        return $this->clausula_sql;
    }

    /**
    * Cria cláusulas SQL UPDATE
    *
    * @param string $tabela
    * @param array $campos
    * @param array $valores
    * @param string $sentenca
    * @access public
    */
    function gera_update($tabela, $campos, $valores, $sentenca)
    {
        $this->clausula_sql = "UPDATE " . $tabela . " SET ";

        $quantidade_campos = count($campos);

        for ($i = 0; $i < $quantidade_campos; ++$i) {
            $this->clausula_sql .= $campos[$i] . " = ";
            $this->clausula_sql .= clausulas_sql::escreve_valor($valores[$i], $i, $quantidade_campos);
        }
        
        $this->clausula_sql .= " " . $sentenca . ";";

        return $this->clausula_sql;
    }

    /**
    * Retorna um valor formatado para se inserir na query SQL
    *
    * @param mix $valor
    * @param int $atual
    * @param int $total
    * @access private
    */
    function escreve_valor($valor, $atual, $total)
    {
        if (is_string($valor)) {
            $retorno = "'" . $valor . "'";
        } elseif (empty($valor)) {
            $retorno = "NULL";
        } else {
            $retorno = $valor;
        }

        if ($atual < ($total-1)) {
            $retorno .= ", ";
        }

        return $retorno;
    }
}
?> 