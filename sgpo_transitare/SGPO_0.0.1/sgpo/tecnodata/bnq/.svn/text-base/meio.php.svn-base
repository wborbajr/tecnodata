<?
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  include("../../include/config.inc.php");
  require_once('funcoes.inc.php');

	$disciplina_id = $_REQUEST['disciplina_id'];
	$simulado	   = $_REQUEST['simulado'];
	$sSql_Simulado = ''; // todos
	
	if ($simulado==1) {
		$sSql_Simulado = '  and bnq_simulado = 1 '; // só simulados
	} else {
		$sSql_Simulado = '  and bnq_simulado = 0 '; // só restrito
	}
	  
  if ($id == '') $id = 0;

  $sql = "SELECT *
				  FROM `bnq` a
							inner join disciplina b on b.disciplina_id = a.disciplina_id
							inner join dificuldade c on c.dificuldade_id = a.dificuldade_id
							inner join natureza d on d.natureza_id = a.natureza_id
							inner join bnq_status e on e.bnq_status_id = a.bnq_status_id
							inner join assunto f on f.assunto_id = a.assunto_id "
							.$sSql_Simulado.
							"where a.disciplina_id = '$disciplina_id'
				  order by bnq_id ";
//		echo $sql;
  $res_bnq = query($sql);
?>

        <script src="../../js/jquery.js" type="text/javascript"></script>

        <link href="./css/prova_menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style><center>				
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor=cyan>
  <tr>
    <td id="conteudo_edit">
    </td>
  </tr>
  <tr>
    <td height="143" id="conteudo"><center>
      <!-- div id="lista_ref_legais"><!-- style="border: 0px solid; height:250px; overflow: scroll;" -->
<table width="90%" border="0" cellspacing="2" cellpadding="0" class="tabelas">
            <?
		while ($data = mysql_fetch_array($res_bnq)) {
?>
            <tr id="tr_destaque" onclick="questao_edita(<?="$data[bnq_id], $data[ref_legal_id]"?>)">
              <td width="40" class="tabelas" align="center">
                  <?=$data['bnq_id']?>
			  </td>

              <td width="40" class="tabelas" align="center">
                  <?=(($data['bnq_simulado']==1)?'SIM':'não')?>              </td>

              <td width="108" class="tabelas">&nbsp;
                  <?=$data['disciplina_desc']?>
                &nbsp;</td>

              <td width="45" class="tabelas">&nbsp;
                  <?=$data['dificuldade_desc']?>
                &nbsp;</td>

              <td width="100" class="tabelas">&nbsp;
                  <?=$data['natureza_desc']?>
                &nbsp;</td>

              <td width="100" class="tabelas">&nbsp;
                  <?=$data['assunto_desc']?>
                &nbsp;</td>

              <td class="tabelas">&nbsp;
                  <?=$data['bnq_pergunta']?>
                &nbsp;</td>

              <td width="60" class="tabelas">&nbsp;
                  <?=$data['bnq_status_desc']?>
                &nbsp;</td>
            </tr>
<?
		}
?>
      </table>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<!-- /div -->
<script>
  $("#tb_ref_legal").show('slow');

/*
  $("tr").each(function(){
      if ($(this).id == 'tr_destaque') {
		      $(this).click(function(){
		          alert($(this).id);
		      });
      }
  });
*/
<?
	$sql = "  select count(a.ref_legal_id) qtd, a.* ".
				 "	from ref_legal a ".
	       "  inner join bnq c on c.ref_legal_id = a.ref_legal_id ".
				 " 	where a.ref_legal_id = $id ".
				 "	group by a.ref_legal_id ";
  $res = query($sql);
  $data = mysql_fetch_array($res);

?>

  $('#campo0').html("&nbsp;<?=$data[0]?>");
  $('#campo1').html("&nbsp;<?=$data[1]?>");
  $('#campo2').html("&nbsp;<?=$data[2]?>");
  $('#campo3').html("&nbsp;<?=$data[3]?>");
  $('#campo4').html("&nbsp;<?=$data[4]?>");
  $('#campo5').html("&nbsp;<?=$data[5]?>");
  $('#campo6').html("&nbsp;<?=$data[6]?>");
  $('#campo7').html("&nbsp;<?=$data[7]?>");
  $('#campo8').html("&nbsp;<?=$data[8]?>");
  $('#campo9').html("&nbsp;<?=$data[9]?>");
  $('#campo10').html("&nbsp;<?=$data[10]?>");

function questao_edita(id, ref_legal_id){
//   win_questao_edita = window.open("questao_edita.php?id="+id+"&ref_legal_id="+ref_legal_id, "_new");
   $("#conteudo").hide();
   $("#conteudo_edit").load("questao_edita.php", {id: id, ref_legal_id: ref_legal_id});
   $("#conteudo_edit").show();
}
</script>

