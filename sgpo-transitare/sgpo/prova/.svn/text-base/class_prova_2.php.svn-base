<?
require_once("../include/dao_functions.php");

//class Prova {
class Prova extends daoFunctions {

	// Parametros do cliente
	public $param_nr_questoes;
	public $param_nr_alternativas;
	public $param_tx_aprovacao;
	public $param_duracao;
	public $param_msg_aprovacao;
	public $param_msg_reprovacao;

	public $dataProva;
	public $horaProva;

	// Dados do candidato
	public $cand_id;
	public $cand_nome;
	public $cand_renach;
	public $cand_bio;

    // Parametros da prova
    public $disciplina_id;
    public $par_dis_dificuldade;
    public $par_dis_nr_questao;
    public $questao;

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

		$sql = "SELECT *
				FROM parametro
				WHERE cliente_id = '$cliente'";

		$ret = $this->dao->query($sql);

		$this->param_nr_questoes 	 = $ret[0][0][param_nr_questoes];
		$this->param_nr_alternativas = $ret[0][0][param_nr_alternativas];
		$this->param_tx_aprovacao	 = $ret[0][0][param_tx_aprovacao];
		$this->param_duracao		 = $ret[0][0][param_duracao];
		$this->param_msg_aprovacao	 = $ret[0][0][param_msg_aprovacao];
		$this->param_msg_reprovacao  = $ret[0][0][param_msg_reprovacao];

		$sql = "SELECT *
				FROM candidato
				WHERE cand_renach = '$renachCandidato'";

		$ret = $this->dao->query($sql);

		$this->cand_id     	= $ret[0][0][cand_id];
		$this->cand_nome	= $ret[0][0][cand_nome];
		$this->cand_renach	= $ret[0][0][cand_renach];
		$this->cand_bio		= $ret[0][0][cand_bio];

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

		$ret = $this->dao->query($sql);

        $iQuestoes_Qtd = $this->param_nr_questoes;
        $iQuestoes_Disciplina_Qtd = count($ret[0][0]);
        $sQuestoes = '0';
        $Questao_Nr = 0;

	 	// Qtd de Questões para o cliente
		for ($x=0; $x<$iQuestoes_Qtd; $x++) {

			$iDisciplina        = $ret[$x][0][disciplina_id];
			$iDificuldade  		= $ret[$x][0][par_dis_dificuldade];
			$iDisciplinas_Qtd	= $ret[$x][0][par_dis_nr_questao];

			// Quantidade de questoes por disciplina e por dificuldade
			for ($z=0;$z<$iDisciplinas_Qtd;$z++) {

				$sql = " -- Seleciona randomicamente 1 pergunta
						-- passando como parametro
						-- o codigo da disciplina e a dificuldade
						-- ps: bnq_status_id = 1 (Disponível)
						SELECT b.*
						FROM bnq b
						WHERE b.bnq_id NOT IN (".
						$sQuestoes // Não permite repetição de questões
						.")
						  AND b.disciplina_id = '$iDisciplina'
						  AND b.bnq_status_id = 1
						AND dificuldade_id = '$iDificuldade'
						ORDER BY rand() limit 1
						";
		  		$aQuestao = $this->dao->query($sql);

		  		$iQuestao  	 = $aQuestao[0][0][bnq_id];
		  		$sPergunta 	 = $aQuestao[0][0][bnq_pergunta];

				$this->questao[++$Questao_Nr] = $Questao_Nr.")- ".$aQuestao[0][0][bnq_pergunta];


				$letra = array('a', 'b','c', 'd', 'e');

					$sql = "-- Seleciona as opcoes (respostas)
							-- randomicamente tendo como parametro
							-- o codigo da questao
							SELECT bo.*
							FROM bnq_opcao bo
							WHERE bo.bnq_id = ".$aQuestao[0][0][bnq_id].
							(($this->param_nr_alternativas==4)?" AND opcao_dispensavel <> 1 ":'').
							" ORDER BY rand()";
					$aOpcaoRand = $this->dao->query($sql);

		 		// Opções de resposta
		 		for ($y=0; $y < $this->param_nr_alternativas; $y++ ) {
					$this->opcao[$Questao_Nr][$letra[$y]] = $aOpcaoRand[$y][0][opcao_desc];
		  		}
	  		}
		}
	}
}

// Campo de teste :)
$objProva = new Prova();

// Codigo do cliente e retorna vetor com parametrizacao do cliente
$objProva->clienteParametro(1,3);
echo "<pre>";
//print_r($objProva->questao);
print_r($objProva->opcao);
?>