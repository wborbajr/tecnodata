<?
	require_once("../include/dao_functions.php");

	$banco = new daoFunctions();

	$Candidato = new Prova();

	$Candidato->set('nome','Jair');
	$Candidato->set('curso','Mingal');

	echo $Candidato->nome."<br />";
	echo $Candidato->get('curso')."<br />";

	/*
		Candidato: tx_renach
		Prova de (Curso): ??

		Disciplinas, quais: ??
			- Qtd de Questões, por Dificuldade: ??

		Cliente: 1 - Detran PR
			- Qtd de Questões por prova: ??
	*/

	$sql = "SELECT *
			FROM parametro
			WHERE cliente_id = 1";
	$aParametros_Cliente = $banco->query($sql);

	// Esses dados já estão no sistema
	$sql = "SELECT * FROM candidato WHERE cand_renach = '1'";
	$aCandidato = $banco->query($sql);

    //
	$sql = "-- Pelo numero do renach do candidado
			-- localiza-se a prova que ele vai realizar
			-- e veririfica na parametrizacao como
			-- deve ser montada a prova
			select pd.*
			from param_curso_disciplina pd
			where pd.curso_id = (select p.curso_id
			from prova p
			where p.cand_id = (select c.cand_id
			from candidato c
			where c.cand_renach = 3)
			)";
	$aParametros_Curso = $banco->query($sql);

 	//
	$QuestaoSql = " -- Seleciona randomicamente 1 pergunta
					-- passando como parametro
					-- o codigo da disciplina e a dificuldade
					SELECT b.*
					FROM bnq b
					WHERE b.disciplina_id = 1
					  AND b.bnq_status_id = 1
					AND dificuldade_id = 1
					ORDER BY rand() limit 1
					";
//	$aQuestao = $banco->query($QuestaoSql);
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>teste</title>
</head>

<body>
		<hr>
		Candidato: <?=$aCandidato[0][0][cand_nome]?>
		<br>Prova de (Curso): <?=$aParametros_Curso[0][0][curso_id]?>

		<p>Disciplinas, quais: <br />
			<dd>- Qtd de Questões, por Dificuldade: ??

		<p>Cliente: 1 - Detran PR
			<dd>- Qtd de Questões por prova: ??
		<hr><p>

<?
	echo $aCandidato[0][0][cand_nome].'<hr />';

	$iQuestoes_Qtd = $aParametros_Cliente[0][0][param_nr_questoes];
	$iQuestoes_Disciplina_Qtd = count($aParametros_Curso[0][0]);
	$sQuestoes = '0';
	$Questao_Nr = 0;

 	// Qtd de Questões para o cliente
	for ($x=0; $x<$iQuestoes_Qtd; $x++) {

  		$iDificuldade = $aParametros_Curso[$x][0][par_dis_dificuldade];
  		$iDisciplina  = $aParametros_Curso[$x][0][disciplina_id];
  		$iDisciplinas_Qtd = $aParametros_Curso[$x][0][par_dis_nr_questao];

		for ($z=0;$z<$iDisciplinas_Qtd;$z++) {
			$QuestaoSql = " -- Seleciona randomicamente 1 pergunta
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
	  		$aQuestao = $banco->query($QuestaoSql);

	  		$iQuestao  = $aQuestao[0][0][bnq_id];
	  		$sPergunta = $aQuestao[0][0][bnq_pergunta];

	  		$sQuestoes .= ', '.$iQuestao;
	  		$Candidato->questao_add(++$Questao_Nr, $sPergunta);

			echo($Questao_Nr).")- ($iQuestao)".$aQuestao[0][0][bnq_pergunta];
//			echo($Questao_Nr).")- ($iQuestao)".$QuestaoSql;

			$iOpcoes_Qtd = $aParametros_Cliente[0][0][param_nr_alternativas];

			$letra = array('a', 'b','c', 'd', 'e');

				$sql = "-- Seleciona as opcoes (respostas)
						-- randomicamente tendo como parametro
						-- o codigo da questao
						SELECT bo.*
						FROM bnq_opcao bo
						WHERE bo.bnq_id = ".$aQuestao[0][0][bnq_id].
						(($iOpcoes_Qtd==4)?" AND opcao_dispensavel <> 1 ":'').
						" ORDER BY rand()";
				$aOpcaoRand = $banco->query($sql);

	 		// Opções de resposta
	 		for ($y=0; $y < $iOpcoes_Qtd; $y++ ) {	 		    echo "<dd>".$letra[$y].").".$aOpcaoRand[$y][0][opcao_desc];
	  		}
	  		echo "<br />";
  		}
	}
//	echo $sQuestoes;
?>

classe Prova:
	Candidato
	Renach
	CPF
	Curso<hr>
<?
	echo "aqui-> ".$Candidato->questao[1];
?>

</body>

</html>

<?
class Prova extends daoFunctions {
    public 	$nome,
    		$curso,
    		$renach,
    		$cpf;
    public  $questao, $opcao;

	$banco = new daoFunctions();

    function set($campo, $valor) {
        $this->$campo = $valor;
    }

    function get($campo) {
        return $this->$campo;
    }

    function questao_add($pos, $valor) {        $this->questao[$pos] = $valor;    }
}
?>