<?
session_start();

require_once("./dao_functions.php");

//class Prova {
class Prova extends daoFunctions {

	// Parametros do cliente
	public $param_nr_questoes;
	public $param_nr_alternativas;
	public $param_tx_aprovacao;
	public $param_duracao;
	public $param_msg_aprovacao;
	public $param_msg_reprovacao;

	// Dados do candidato
	public $cand_id;
	public $cand_nome;
	public $cand_renach;
	public $cand_bio;

	//
	public $prova_id;
	public $curso_id;
	public $status_id;
	public $pessoa_id;
	public $dataProva;
	public $horaProva;

    // Parametros da prova
    public $disciplina_id;
    public $par_dis_dificuldade;
    public $par_dis_nr_questao;

    // Objeto de execucao do SQL
    private $dao;

	// Construtor da classe prova
    //public function Prova(){
    public function __contruct(){/**/}

	// Busca o parametro do cliente
	//
	// @param - codigo do cliente
	// @return - array de dados contendo o parametro do cliente
	public function clienteParametro($cliente=0101100, $renachCandidato=0101100) {
    	$this->dao = new daoFunctions();

		//
		$sql = "SELECT *
				FROM candidato
				WHERE cand_renach = '$renachCandidato'";

        echo "1";
		$ret = $this->dao->query($sql);

	}
}

echo "oi";


// Campo de teste :)
$objProva = new Prova();

/*
$Objeto = new Prova();
$Objeto->clienteParametro(1,3);

$_SESSION['candidato'] = $Objeto;
$_SESSION['questao']   = $Objeto->questao;
$_SESSION['opcoes']    = $Objeto->opcoes;

// Codigo do cliente e retorna vetor com parametrizacao do cliente
echo "<pre>";
echo count($_SESSION['opcoes']);
echo "<br />";
//print_r($_SESSION['candidato']);
print_r($Objeto->opcoes);
*/
?>