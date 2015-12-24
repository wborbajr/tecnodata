<?php
/**
 * $Id: dao_mysql.php,v 1.00 2006/08/26 13:27 waldir Exp *
 *
 * @program    dao_mysql.php
 * @desc       Classe de acesso ao banco de dados mySQL
 * @author     Waldir Borba Junior
 * @email      wborbajr [at] gmail [dot] com
 * @date       2007/06/09
 * @copyright  (c) 2007 by Waldir Borba Junior
 * @license    GNU / General Public Licence
 * @version    1.0.2007
 * @lastupdate
 *
 * informações - Object Aggregation/Composition Functions php.net
 *
 * TODO
 *
     try {
        $conexao = mysql_connect("localhost", "root", "");
    } catch(Exception $e) {
        echo "Ocorreu o erro $e";
    }
 *
 *
 try {
    throw new Exception('Oops!! Ocorreu um erro');
 } catch (Exception $e) {
    echo $e->getMessage();
 }
 *
 
 */

// Arquivo contendo parametros do sistema
require_once("database.inc.php");

class daoMYSQL {
	// parametros para conexao
	var $dbName 	= DB_NAME;			// nome da base de dados
	var $dbHostname = DB_SERVER;	// host da base de dados
	var $dbUsername = DB_USER;		// nome do usuario da base de dados
	var $dbPassword = DB_PASS;		// senha do usuario

	// armazena o resultado das consultas
	var $result;
	var $numRows;

	// armazena o handle da conexao
	var $conn;

    /**
    * @param string $clausula_sql;
    * @access public
    */
    var $clausula_sql;
	
	function daoMYSQL(){
		// Define um construtor vazio
	}

	/**
	* Conecta ao banco de dados
	*
	* @function dbConnect
	* @param $persistent false - normal, true - persistente
	* @return Boolean - True ou False
	*/
	function dbConnect() {
		$ret = false;

		$this->conn = mysql_connect($this->dbHostname, $this->dbUsername, $this->dbPassword) or die(msqyl_error());

		if($this->conn) {
			// seleciona a base de dados
			$this->conn = mysql_select_db($this->dbName, $this->conn);

			if($this->conn) {
				$ret = true;
			}
		}
		return $ret;
	}

	/**
	* Consulta a base de dados e armazena o resultado no objeto
	*
	* @function dbQuery
	* @param $query - sql a ser executada
	* @return false - erro, true - consulta enviada
	*/
	function dbQuery($query) {
		$this->result = mysql_query($query);
		if($this->result) {
			//$this->result = $result;
			//$this->numRows = mysql_num_rows($this->result);
			return true;
		}
		return false;
	}

	/**
	* Retorna um array com os resultados da consulta
	*
	* @function fetchRow
	* @return $result array de registros
	*/
	function fetchRow() {
		return mysql_fetch_row($this->result);
	}

	/**
	* Retorna um array associativo com os resultados da consulta
	*
	* @function fetchArray
	* @return $result array de registros
	*/
	function fetchArray() {
		return mysql_fetch_array($this->result, MYSQL_ASSOC);
	}

	/**
	* Retorna um objeto com os resultados da consulta
	*
	* @function fetchObject
	* @return $result objeto contendo registros
	*/
	function fetchObject() {
		return mysql_fetch_object($this->result);
	}

	/**
	* Retorna o numero de linhas afetadas pela ultima consulta
	*
	* @function affectedRows
	* @return $rows numero de linhas afetadas
	*/
	function affectedRows() {
		return mysql_affected_rows($this->conn);
	}

	/**
	* Limpa o ponteiro de resultados
	*
	* @function freeResult
	*/
	function freeResult() {
		return mysql_free_result($this->result);
	}

	/**
	* Fecha a conexao com o servidor
	*
	* @function dbDisconnect
	* @return false - falha, true - desconectado
	*/
	function dbDisconnect() {
		return mysql_close($this->conn);
	}
} //class daoMYSQL {
?>