<?
session_start();

//include_once('../include/class_simulado.php');

// conecta no banco de dados
include("../../include/config.inc.php");

//$dao = new daoFunctions();

// Campo de teste :)
$objProva = new Prova();

$Objeto = new Prova();
$Objeto->clienteParametro(1, $_POST['campo1'], $_POST['campo2']);

$_SESSION[prova][prova_id] 	= $Objeto->prova_id;
$_SESSION[prova][cand_id] 	= $Objeto->cand_id;
$_SESSION[prova][cand_nome] = $Objeto->cand_nome;
$_SESSION[prova][cand_renach] 	= $Objeto->cand_renach;
$_SESSION[prova][questoes_qtd] = $Objeto->param_nr_questoes;
$_SESSION[prova][tempo] 	= $Objeto->param_duracao;
$_SESSION[prova][param_nr_alternativas] 	= $Objeto->param_nr_alternativas;

$_SESSION[prova][param_msg_aprovacao] = $Objeto->param_msg_aprovacao;
$_SESSION[prova][param_msg_reprovacao] = $Objeto->param_msg_reprovacao;


$_SESSION[questao]   = $Objeto->questao;
$_SESSION[opcoes]    = $Objeto->opcoes;

$_SESSION[param_tx_aprovacao] = $Objeto->param_tx_aprovacao;

for ($x=1; $x <= count($_SESSION[questao]); $x++) {

	// ------------- GRAVA EM PROVA_QUESTAO
	$sqlProva_Opcoes = "INSERT INTO `prova_questao` (".
	  		   "`prova_id`,".
	  		   "`prova_pergunta`,".
	  		   "`prova_opcao1`,".
	  		   "`prova_opcao2`,".
	  		   "`prova_opcao3`,".
	  		   "`prova_opcao4`,".
	  		   "`prova_opcao5`,".
	  		   "`prova_dispensavel`,".
	  		   "`prova_correta`,".
	  		   "`prova_resp_cand`,".
	  		   "`bnq_id`".
	 		   ") VALUES (".
	  		   "'".$_SESSION[prova][prova_id]."', ".
	  		   "'".utf8_encode($_SESSION[questao][$x])."',".
	  		   "'".utf8_encode($_SESSION[opcoes][$x][0][0])."',".
	  		   "'".utf8_encode($_SESSION[opcoes][$x][1][0])."',".
	  		   "'".utf8_encode($_SESSION[opcoes][$x][2][0])."',".
	  		   "'".utf8_encode($_SESSION[opcoes][$x][3][0])."',".

	  		   (($_SESSION[prova][param_nr_alternativas]==5)?
	  		   		"'".htmlspecialchars_decode($_SESSION[opcoes][$x][4][0])."',":
	  		   		"'',");

			   $dispensavel = 0;
			   $correta		= 0;

			   for ($y=1; $y <= $_SESSION[prova][param_nr_alternativas]; $y++) {
		  		   if ($_SESSION[opcoes][$x][$y][1]==1)
						$correta = $y; // correta

		  		   if ($_SESSION[opcoes][$x][$y][2]==1)
						$dispensavel = $y; // dispensavel
	  		   }

			   $sqlProva_Opcoes .= "'$dispensavel',"; // dispensavel
			   $sqlProva_Opcoes .= "'$correta',"; // correta
	  		   $sqlProva_Opcoes .= "'0', "; // selecionada pelo candidato
	  		   $sqlProva_Opcoes .= $_SESSION[questao][$x][0];
	  		   $sqlProva_Opcoes .= ")";

		@query($sqlProva_Opcoes);
//		@$dao->query($sqlProva_Opcoes);
//		echo $sqlProva_Opcoes;
		// --------------
}

	// ------------- GRAVA EM PROVA_QUESTAO
	$sql = "UPDATE `prova` SET".
	  		   " `status_id` = 1 ". // prova em aberto
	  		   "WHERE `prova_id` = ".$_SESSION[prova][prova_id];

// Durante os testes, não vou gravar status
//	@query($sql);

// Dorme alguns segundos
sleep(2);

$rtn = $Objeto->questao;

if (! $rtn ) { $rtn = -1; };

echo $rtn;
?>
