<?
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  include("../../include/config.inc.php");

  $id             = $_REQUEST['id'];
  $bnq_simulado   = (($_REQUEST['bnq_simulado']=='false')?0:1);
  $ref_legal_id   = $_REQUEST['ref_legal_id'];
  $bnq_status_id  = $_REQUEST['bnq_status_id'];
  $natureza_id    = $_REQUEST['natureza_id'];
  $dificuldade_id = $_REQUEST['dificuldade_id'];
  $disciplina_id  = $_REQUEST['disciplina_id'];
  $bnq_pergunta   = utf8_decode($_REQUEST['bnq_pergunta']);
  $opcao_correta  = $_REQUEST['opcao_correta'];
  $opcao_dispensavel = $_REQUEST['opcao_dispensavel'];
  
  if ($id=='') {
  	echo "Erro!! Código da questão não recebido!! ";

  } else {
	  // Questão
	  $sql = "UPDATE `bnq` SET ".
			  " `bnq_simulado` = '$bnq_simulado' ".
	//					",`ref_legal_id` = '$ref_legal_id' ".
						",`bnq_status_id` = '$bnq_status_id' ".
						",`natureza_id` = '$natureza_id' ".
						",`dificuldade_id` = '$dificuldade_id' ".
						",`disciplina_id` = '$disciplina_id' ".
						",`bnq_pergunta` = '$bnq_pergunta' ".
	//					", `bnq_qtd_uso` = '$bnq_qtd_uso' ".
						" WHERE `bnq_id` ='$id'".
						" LIMIT 1 ;  ";
//	  echo $sql;
	  @query($sql);
	  
	  // Desmarca todas as opções 
	  $sql = "UPDATE `bnq_opcao` SET `opcao_dispensavel`=0, `opcao_correta` = 0 WHERE `bnq_id`='$id' ";
	  @query($sql);	  

	  // Disponível
	  $sql = "UPDATE `bnq_opcao` SET `opcao_dispensavel`= '1' WHERE `bnq_id`='$id' AND `opcao_id` = '$opcao_dispensavel'";
	  @query($sql);	  

	  // Correta
	  $sql = "UPDATE `bnq_opcao` SET `opcao_correta`= '1' WHERE `bnq_id`='$id' AND `opcao_id` = '$opcao_correta'";
	  @query($sql);	  
  }
 echo 'ok';
?>
