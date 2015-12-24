<?
  include("../../include/config.inc.php");

  $bnq_id   = $_REQUEST['bnq_id'];
  $curso_id = $_REQUEST['curso_id'];
  $disciplina_id = $_REQUEST['disciplina_id'];
  $status   = $_REQUEST['status'];

  if ($status=='false') {
    $sql = "DELETE FROM `disciplina_curso` WHERE `disciplina_id` ='$disciplina_id' and `curso_id` = '$curso_id' ";

  } else if ($status == 'true') {
		$sql = "INSERT INTO `disciplina_curso` (`disciplina_id`, `curso_id`) VALUES ( '$disciplina_id', '$curso_id' )";
  };
  
  query($sql);

  echo "$sql - gravado.";
?>