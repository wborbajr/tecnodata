

class Questao extends Prova {

    $iQuestoes_Qtd;
    $iQuestoes_Disciplina_Qtd = count($aParametros_Curso[0][0]);
    $sQuestoes = '0';
    $Questao_Nr = 0;

    public function buscaQuestao(){
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
//            echo($Questao_Nr).")- ($iQuestao)".$QuestaoSql;

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
             for ($y=0; $y < $iOpcoes_Qtd; $y++ ) {
                 echo "<dd>".$letra[$y].").".$aOpcaoRand[$y][0][opcao_desc];
              }
              echo "<br />";
          }
    }
    }

}

// Campo de teste :)

$objQuestao = new Quetao();

// Codigo do cliente e retorna vetor com parametrizacao do cliente
$acliParam = $objQuestao->clienteParametro(1);

// RENACH do candidato e retorna o vetor de prova
$aproParam = $objProva->bucaProva(3);


/*
echo "Numero de Questoes ".$objProva->get_numeroQuestoes(). "<br />";
echo "Numero de Alternativas  ".$objProva->get_numeroAlternativas(). "<br />";
echo "TX Aprovacao ".$objProva->get_taxaAprovacao(). "% <br />";
echo "Duracao  ".$objProva->get_duracaoProva(). "<br />";
*/