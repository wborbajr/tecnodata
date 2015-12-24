<?
    session_start();

    $_SESSION[candidato][0] = '';
    $_SESSION[questao] = '';
    $_SESSION[opcoes] = '';

    $cliente = 1; // Primeiro cliente - DETRAN PR ou TECNODATA

    // conecta no banco de dados
    include("../../include/config.inc.php");

    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];

    // Candidato
    $sql = "SELECT *
            FROM candidato
            WHERE cand_email = '$campo1'";

    $res = query($sql);

    $data = mysql_fetch_array($res);

    // 0: Candidato encontrado
    $rtn = (($data['cand_email']==$campo1)? 0: -1); // -1: Candidato não encontrado

    // Se encontrado, alimenta matriz com os dados do candidato
    if ( $data['cand_senha'] == md5($campo2) ) {
    	$_SESSION[candidato][0] = array( cand_id      => $data['cand_id'],
    									 cand_nome    => $data['cand_nome'],
	    								 cand_renach  => $data['cand_renach'],
	    								 cand_bio	  => $data['cand_bio'],
	    								 cand_email   => $data['cand_email'],
	    								 cand_senha   => $data['cand_senha']
	    							   );
        $rtn = 1; // candidato e senha válidos

        // Prova
		$sql = "SELECT * ".
               "FROM prova ".
		       "WHERE cliente_prova_destino = '$cliente' ". // Cliente 1 = Detran PR ou TECNODATA
		       "  AND cand_id = ".$_SESSION[candidato][0][cand_id].
		       "  AND `status_id` = 0 ".
			   " LIMIT 1 ";

		$res  = query($sql);
        $data = mysql_fetch_array($res);

        if ($data) {

            $rtn = 2; // Encontrado prova para o candidato

  		    $_SESSION[prova][0] = array( prova_id  => $data['prova_id'],
    		                             curso_id  => $data['curso_id'],
    		                             status_id => $data['status_id'],
    		                             pessoa_id => $data['pessoa_id']
    		                            );

    		// Parâmetros de prova para o cliente, no caso, Detran PR ou TECNODATA
    		$sql = "SELECT *
    				FROM parametro
    				WHERE cliente_id = '$cliente'";

    		$res = query($sql);
            $data = mysql_fetch_array($res);

            if ($data) {

      		    $_SESSION[parametros][0]    = array( param_nr_questoes 	   => $data['param_nr_questoes'],
        		                                     param_nr_alternativas => $data['param_nr_alternativas'],
        		                                     param_tx_aprovacao    => $data['param_tx_aprovacao'],
        		                                     param_duracao		   => $data['param_duracao'],
        		                                     param_msg_aprovacao   => $data['param_msg_aprovacao'],
        		                                     param_msg_reprovacao  => $data['param_msg_reprovacao']
        		                                    );

                $rtn = 3; // Encontrado prova para o candidato

        		// Disciplinas da prova
        		$sql = "-- Pelo numero do renach do candidado
        				-- localiza-se a prova que ele vai realizar
        				-- e veririfica na parametrizacao como
        				-- deve ser montada a prova
        				SELECT pd.disciplina_id, pd.par_dis_dificuldade, par_dis_nr_questao
        				FROM param_curso_disciplina pd
        				WHERE pd.curso_id =
        				( SELECT p.curso_id FROM prova p WHERE p.cand_id =
        					( SELECT c.cand_id FROM candidato c WHERE c.cand_id = '".
        					$_SESSION[candidato][0][cand_id]."' ) ) ";

      		    $res = query($sql);

                $iQuestoes_Qtd = $_SESSION[parametros][0][param_nr_questoes];
                $sQuestoes = '0';
                $Questao_Nr = 0;

        	 	// Qtd de Questões para o cliente
        		for ($x=0; $x < $iQuestoes_Qtd; $x++) {
        		    $data = mysql_fetch_array($res); // disciplinas

        			$iDisciplina        = $data['disciplina_id'];
        			$iDificuldade  		= $data['par_dis_dificuldade'];
        			$iDisciplinas_Qtd	= $data['par_dis_nr_questao'];

        			// Quantidade de questoes por disciplina e por dificuldade
        			for ($z=0; $z < $iDisciplinas_Qtd; $z++) {

        				$sql = "-- Seleciona randomicamente 1 pergunta
        						-- passando como parametro e
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

        		  		$rsQuestao = query($sql);
        		  		$aQuestao = mysql_fetch_array($rsQuestao);
        		  		$sQuestoes  .= ", ".$aQuestao['bnq_id'];

        		  	}; // Quantidade de questoes por disciplina e por dificuldade

        		}; // Qtd de Questões para o cliente

				$sql = "-- Seleciona randomicamente 1 pergunta
						-- passando como parametro e
						-- o codigo da disciplina e a dificuldade
						-- ps: bnq_status_id = 1 (Disponível)
						SELECT b.*
						FROM bnq b
						WHERE b.bnq_id IN ($sQuestoes)
						ORDER BY rand() ";

		  		$rsQuestao = query($sql);
	  			$Questao_Nr = 0;

		  		// Finalmente armazeno ma matriz publica, as questões
		  		while ($aQuestao = mysql_fetch_array($rsQuestao)) {

	  		  		$iQuestao  	 = $aQuestao['bnq_id'];
	  		  		$sPergunta 	 = utf8_encode($aQuestao['bnq_pergunta']);
	  		  		++$Questao_Nr;

	  		  		// Agora, vamos às alternativas de cada questão.
	   				$letra = array('a', 'b','c', 'd', 'e');

	   				$sql = "-- Seleciona as opcoes (respostas)
	   						-- randomicamente tendo como parametro
	   						-- o codigo da questao
	   						SELECT bo.*
	   						FROM bnq_opcao bo
	   						WHERE bo.bnq_id = ".$iQuestao.
	   						(($_SESSION[parametros][0][param_nr_alternativas]==4)?" AND opcao_dispensavel <> 1 ":'').
	   						" ORDER BY rand()";

	   				$rsOpcaoRand = query($sql);
	   				$y = 0;

	   				while ($aOpcaoRand = mysql_fetch_array($rsOpcaoRand)) {

						// Matriz de opções para as questões
						$_SESSION[opcoes][$Questao_Nr][$y+1] = $letra[$y]." - ".utf8_encode($aOpcaoRand[opcao_desc]);

						if ($aOpcaoRand[opcao_correta]) $iOpcaoCorreta = $letra[$y];

						$y++;
					}

	  		  		// Nr sequencial, ID da Questão (BNQ), o texto e a opção correta - Última posição = opção selecionada
	  		  		$_SESSION[questao][$Questao_Nr] = array($iQuestao, $sPergunta, $iOpcaoCorreta, 0);

  		  		};

//				echo "$sQuestoes<hr>";
//				print_r($_SESSION[questao]);
//				print_r($_SESSION[opcoes]);

            }; // parametros da prova

		}; // prova

    }; // candidato

    // Dorme alguns segundos
//    sleep(2);

    echo $rtn;
?>
