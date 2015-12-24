<?
/**
 * $Id: dao_functions.php,v 1.00 2006/08/26 13:27 waldir Exp *
 *
 * @program    dao_functions.php
 * @desc       Funcoes de manipulacao de acesso a dados
 * @author     Waldir Borba Junior
 * @email      wborbajr [at] gmail [dot] com
 * @date       2007/06/09
 * @copyright  (c) 2007 by Waldir Borba Junior
 * @license    GNU / General Public Licence
 * @version    1.0.2007
 * @lastupdate
 *
 */
require_once("dao_mysql.php");

//class daoFunctions extends daoMYSQL {
class daoFunctions {

	var $myCLASS;

	function daoFunctions(){
		$this->myCLASS = new daoMYSQL();
	}

	/**
	* Verficia usuario e senha
	*
	* @function dbDisconnect
	* @param $tabela
	* @param $campo_login
	* @param $campo_senha
	* @param $login
	* @param $senha
	* @param $condicao_extra
	* @return false - nao achou nada ou erro, true - encontrou o usuario
	*/
	function query($sql=""){
		$ret = array();
		if(!empty($sql)){
			$this->myCLASS->dbConnect();
			if($this->myCLASS->dbQuery($sql)){//			    $ret = $this->myCLASS->affectedRows();
				while($dados = $this->myCLASS->fetchArray()){
					$ret[] = array($dados);
				}
			}
		}
		return $ret;
	}
}
?>
