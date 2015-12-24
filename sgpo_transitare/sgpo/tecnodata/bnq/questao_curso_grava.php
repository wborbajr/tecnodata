<?
  include("../../include/config.inc.php");

  $bnq_id   = $_REQUEST['bnq_id'];
  $curso_id = $_REQUEST['curso_id'];
  $status   = $_REQUEST['status'];

  $sql = "DELETE FROM `bnq_curso` WHERE `bnq_id` ='$bnq_id' and `curso_id` = '$curso_id' ";
  $res = query($sql);

  if ($status == 'true') {
		$sql = "INSERT INTO `bnq_curso` (`bnq_id`, `curso_id`) VALUES ( '$bnq_id', '$curso_id' )";
		@query($sql);
  };

  echo "$sql - gravado.";
?>