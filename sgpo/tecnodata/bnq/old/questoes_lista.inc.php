<?
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  include("../../include/config.inc.php");
  require_once('funcoes.inc.php');

  $id = $_REQUEST['ref_legal_id'];

  $sql = "SELECT * FROM `bnq_status` ORDER BY 1";
  $res_ref_legal_status = query($sql);

  $sql = "SELECT * FROM `assunto` ORDER BY 1";
  $res_assunto = query($sql);

  $sql = "SELECT * FROM `dificuldade` ORDER BY 1";
  $res_dificuldade = query($sql);

  $sql = "SELECT * FROM `natureza` ORDER BY 1";
  $res_natureza = query($sql);

  $sql = "SELECT *
				  FROM `bnq` a
							inner join disciplina b on b.disciplina_id = a.disciplina_id
							inner join dificuldade c on c.dificuldade_id = a.dificuldade_id
							inner join natureza d on d.natureza_id = a.natureza_id
							inner join bnq_status e on e.bnq_status_id = a.bnq_status_id
							where a.ref_legal_id = $id
				  order by bnq_id ";
  $res_bnq = query($sql);

?>
<table width="100%" border="0" bgcolor=cyan>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right"><input name="ref_legal_voltar" type="button" class="botoes" id="ref_legal_voltar" value="VOLTAR" /></td>
      </tr>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="display: none">
      <tr>
        <td width="352"><b>Disciplina</b></td>
        <td width="464"><b>Dificuldade</b></td>
        <td width="150">&nbsp;</td>
      </tr>
      <tr>
        <td><? monta_select('disciplina_id', "SELECT * FROM `disciplina` ORDER BY 1"); ?>        </td>
        <td><? monta_select('difilculdade_id', "SELECT * FROM `dificuldade` ORDER BY 1"); ?></td>
        <td>&nbsp;        </td>
      </tr>
    </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="display: none">
          <tr>
            <td width="352"><b>Natureza</b></td>
            <td width="329"><b>Assunto</b></td>
            <td width="90">&nbsp;</td>
            <td width="263">&nbsp;</td>
          </tr>
          <tr>
            <td><? monta_select('natureza_id', "SELECT * FROM `natureza` ORDER BY 1"); 		?></td>
            <td><table width="100%" border="0">
                <tr>
                  <td><? monta_select('assunto_id', "SELECT * FROM `assunto` ORDER BY 1"); ?></td>
                  <td align="right"><strong>Simulado:&nbsp; </strong></td>
                </tr>
            </table></td>
            <td><strong>
              <input name="chk_simulado" type="checkbox" id="chk_simulado" value="1" />
            </strong></td>
            <td><input name="button" type="button" class="botoes" id="btn_pesquisa" value="PESQUISA" />
              &nbsp;&nbsp;&nbsp;
              <input name="button" type="button" class="botoes" id="btn_novo" value="NOVO" /></td>
          </tr>
        </table>
      <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td width="40" class="tabtit" align="center">Simu-<br>lado</td>
            <td width="110" class="tabtit"><div align="center">Disciplina</div></td>
            <td width="48" class="tabtit"><div align="center">Dific.</div></td>
            <td width="100" class="tabtit"><div align="center">Natureza</div></td>
            <td width="100" class="tabtit"><div align="center">Assunto</div></td>
            <td class="tabtit"><div align="center">Quest&atilde;o</div></td>
            <td width="80" class="tabtit"><div align="center">Status</div></td>
          </tr>
      </table>
      <div id="lista_ref_legais"><!-- style="border: 0px solid; height:250px; overflow: scroll;" -->
          <table width="100%" border="0" cellspacing="2" cellpadding="0">
            <?
		while ($data = mysql_fetch_array($res_bnq)) {
?>
            <tr id="tr_destaque" onclick="questao_edita(<?="$data[bnq_id], $data[ref_legal_id]"?>)">

              <td width="40" class="tabelas" align="center">
                  <a href="#"><?=(($data['bnq_simulado']==1)?'SIM':'não')?></a>
              </td>

              <td width="108" class="tabelas">&nbsp;
                  <a href="#"><?=$data['disciplina_desc']?></a>
                &nbsp;</td>

              <td width="45" class="tabelas">&nbsp;
                  <a href="#"><?=$data['dificuldade_desc']?></a>
                &nbsp;</td>

              <td width="100" class="tabelas">&nbsp;
                  <?=$data['natureza_desc']?>
                &nbsp;</td>

              <td width="100" class="tabelas">&nbsp;
                  <?=$data['']?>
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

   $("#ref_legal_voltar").click(function(){
        $("#lista_ref_legal").show('slow');
        $("#lista_bnq").hide();
        $("#tb_ref_legal").hide();
	 });

/*
	 $("#_voltar").click(function(){
		   $("#tb_conteudo").show();
		   $("#conteudo_edit").hide();
	 });

*/

function questao_edita(id, ref_legal_id){
//   win_questao_edita = window.open("questao_edita.php?id="+id, "_blank");
   $("#conteudo_edit").load("questao_edita.php", {id: id, ref_legal_id: ref_legal_id});
   $("#conteudo_edit").show('slow');
   $("#tb_conteudo").hide('slow');
}
</script>

