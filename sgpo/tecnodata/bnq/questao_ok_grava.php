<?
  include("../../include/config.inc.php");

  $bnq_id   = $_REQUEST['bnq_id'];
  $status   = $_REQUEST['status'];
  $iOk = (($status == 'true')? 1: 0);

  $sql = "UPDATE `bnq` SET `bnq_ok`=$iOk WHERE `bnq_id` = $bnq_id";
  query($sql);

  echo "$sql - gravado.";
?>