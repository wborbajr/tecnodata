<?
require_once("../include/dao_functions.php");

//class Prova {
class Prova extends daoFunctions {

	// Parametros da Prova
	private $numeroQuestoes;
	private $numeroAlternativas;
	private $taxaAprovacao;
	private $duracaoProva;

    // Dados do Candidato
    private $nomeCandidato;
    private	$cursoCandidato;
    private	$renachCandidato;
    private	$cpfCandidato;

    private $questao;
    private	$opcao;

    // Objeto de execucao do SQL
    private $dao;

	// Construtor da classe prova
    //public function Prova(){
    public function __contruct(){

    }

// Parametros do Cliente -------------------------------------------------------

	// Numero de Questoes
	public function set_numeroQuestoes($VnumeroQuestoes){
		$this->numeroQuestoes = $VnumeroQuestoes;
	}
	public function get_numeroQuestoes(){
		return $this->numeroQuestoes;
	}

	// Numero de Alternativas
	public function set_numeroAlternativas($VnumeroAlternativas){
		$this->numeroAlternativas = $VnumeroAlternativas;
	}
	public function get_numeroAlternativas(){
		return $this->numeroAlternativas;
	}

	// Taxa de Aprovacao
	public function set_taxaAprovacao($VtaxaAprovacao){
		$this->taxaAprovacao = $VtaxaAprovacao;
	}
	public function get_taxaAprovacao(){
		return $this->taxaAprovacao;
	}

	// Duracao da Prova
	public function set_duracaoProva($VduracaoProva){
		$this->duracaoProva = $VduracaoProva;
	}
	public function get_duracaoProva(){
		return $this->duracaoProva;
	}

// Parametros do Candidato -----------------------------------------------------

	// Nome do Candidato
	public function set_nomeCandidato($VnomeCandidato){
		$this->nomeCandidato = $VnomeCandidato;
	}
	public function get_nomeCandidato(){
		return $this->nomeCandidato;
	}

	// Curso do Candidato
	public function set_cursoCandidato($VcursoCandidato){
		$this->cursoCandidato = $VcursoCandidato;
	}
	public function get_cursoCandidato(){
		return $this->cursoCandidato;
	}

	// RENACH do Candidato
	public function set_renachCandidato($VrenachCandidato){
		$this->renachCandidato = $VrenachCandidato;
	}
	public function get_renachCandidato(){
		return $this->renachCandidato;
	}

	// CPF do Candidato
	public function set_cpfCandidato($VcpfCandidato){
		$this->cpfCandidato = $VcpfCandidato;
	}
	public function get_cpfCandidato(){
		return $this->cpfCandidato;
	}

// Parametros do Candidato -------------------------------------------------------

	// Busca o parametro do cliente
	//
	// @param - codigo do cliente
	// @return - array de dados contendo o parametro do cliente
	public function clienteParametro($cliente=0101100) {
		$this->dao = new daoFunctions();

		$sql = "SELECT *
				FROM parametro
				WHERE cliente_id = '$cliente'";

		return $this->dao->query($sql);

/*
		$this->set_numeroQuestoes($aParametros_Cliente[0][0][param_nr_questoes]);
		$this->set_numeroAlternativas($aParametros_Cliente[0][0][param_nr_alternativas]);
		$this->set_taxaAprovacao($aParametros_Cliente[0][0][param_tx_aprovacao]);
		$this->set_duracaoProva($aParametros_Cliente[0][0][param_duracao]);
*/
	}

	public function bucaProva($renachCandidato=0101100){		$this->dao = new daoFunctions();

		$sql = "-- Pelo numero do renach do candidado
				-- localiza-se a prova que ele vai realizar
				-- e veririfica na parametrizacao como
				-- deve ser montada a prova
				SELECT pd.disciplina_id, pd.par_dis_dificuldade, par_dis_nr_questao
				FROM param_curso_disciplina pd
				WHERE pd.curso_id = (SELECT p.curso_id
				FROM prova p
				WHERE p.cand_id = (SELECT c.cand_id
				FROM candidato c
				WHERE c.cand_renach = '$renachCandidato')
				)";

		return $this->dao->query($sql);
	}

}

// Campo de teste :)

$objProva = new Prova();

// Codigo do cliente e retorna vetor com parametrizacao do cliente
$acliParam = $objProva->clienteParametro(1);

// RENACH do candidato e retorna o vetor de prova
$aproParam = $objProva->bucaProva(3);


/*
echo "Numero de Questoes ".$objProva->get_numeroQuestoes(). "<br />";
echo "Numero de Alternativas  ".$objProva->get_numeroAlternativas(). "<br />";
echo "TX Aprovacao ".$objProva->get_taxaAprovacao(). "% <br />";
echo "Duracao  ".$objProva->get_duracaoProva(). "<br />";
*/

?>