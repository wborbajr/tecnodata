<?
  header("Expires: Sun, 19 Nov 1978 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", FALSE);
  header("Content-Type: text/html; charset=ISO-8859-1",true);

  include("../../include/config.inc.php");
  require_once('funcoes.inc.php');

	$disciplina_id = $_REQUEST['disciplina_id'];
	$simulado	   = $_REQUEST['simulado'];
	$editado	   = $_REQUEST['editado'];
	$sSql_Simulado = ''; // todos
	
	if ($simulado==1) {
		$sSql_Simulado = '  and bnq_simulado = 1 '; // só simulados
	} else if ($simulado==2) {
		$sSql_Simulado = '  and bnq_simulado = 0 '; // só restrito
	}
	  
  if ($id == '') $id = 0;

//   echo "$editado<hr>";
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
    <td id="conteudo"><center>
      <!-- div id="lista_ref_legais"><!-- style="border: 0px solid; height:250px; overflow: scroll;" -->
<table border="1" cellspacing="2" cellpadding="0" class="tabelas1">
            <?
//		while ($data = mysql_fetch_array($res_bnq)) {
?>
            <tr id="tr_destaque">
			
				<td id='lista_questoes' align="center" nowrap="nowrap" class="tabelas">
				  <? //retorna_lista($sSql_Simulado, $disciplina_id); ?>
				</td>
            </tr>
<?
//		}
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
  $("#lista_questoes").load('retorna_lista.inc.php', {sSql_Simulado: '<?=$sSql_Simulado?>', disciplina_id: '<?=$disciplina_id?>'});
  

/*
  $("tr").each(function(){
      if ($(this).id == 'tr_destaque') {
		      $(this).click(function(){
		          alert($(this).id);
		      });
      }
  });
*/

/*
	$("input[@name='chk_bnq_ok']").each(function() {
	 	$(this).click(function(){
	 		status = $(this).attr('checked');
			id_    = $(this).attr('value');
			$.post('questao_ok_grava.php', {bnq_id: id_, status: status});
		});
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

function questao_edita(id, ref_legal_id, disciplina_id, simulado){
	$("#conteudo").hide();
	$("#conteudo_edit").hide();
    $("#conteudo_edit").load("questao_edita.php", {id: 		     id, 		    ref_legal_id: ref_legal_id, 
												  disciplina_id: disciplina_id, simulado: 	  simulado}
							);
	$("#conteudo_edit").show();
//    $("#lista_questoes").load('retorna_lista.inc.php', {sSql_Simulado: '<?=$sSql_Simulado?>', disciplina_id: <?=$disciplina_id?>});
}

function atualiza_tela() {	
    $("#conteudo_edit").hide();
    $("#lista_questoes").html('<h2>Aguarde. Atualizando...</h2>');
	$("#conteudo").show();
	$("#lista_questoes").load('retorna_lista.inc.php', {sSql_Simulado: '<?=$sSql_Simulado?>', disciplina_id: '<?=$disciplina_id?>'});
}
</script>

