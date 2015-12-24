<?
  include("../../include/config.inc.php");

  $ref_legal_diploma   = $_REQUEST['ref_legal_diploma'];
  $ref_legal_numero    = $_REQUEST['ref_legal_numero'];
  $ref_legal_capitulo  = $_REQUEST['ref_legal_capitulo'];
  $ref_legal_secao     = $_REQUEST['ref_legal_secao'];
  $ref_legal_artigo    = $_REQUEST['ref_legal_artigo'];
  $ref_legal_paragrafo = $_REQUEST['ref_legal_paragrafo'];
  $ref_legal_inciso    = $_REQUEST['ref_legal_inciso'];
  $ref_legal_alinea    = $_REQUEST['ref_legal_alinea'];
  $ref_legal_item      = $_REQUEST['ref_legal_item'];

	$sql = "select count(bnq_id) qtd, ref_legal_status_desc, a.* ".
		   " from ref_legal a ".
		   " inner join ref_legal_status b on b.ref_legal_status_id = a.ref_legal_status_id ".
		   " inner join bnq c on c.ref_legal_id = a.ref_legal_id ".
		   " where 1=1 ".
		   ( ($ref_legal_diploma   !='') ?"  and ref_legal_diploma   = '$ref_legal_diploma' "   :'' ).
		   ( ($ref_legal_numero    !='') ?"  and ref_legal_numero    = '$ref_legal_numero' "    :'' ).
		   ( ($ref_legal_capitulo  !='') ?"  and ref_legal_capitulo  = '$ref_legal_capitulo' "  :'' ).
		   ( ($ref_legal_secao     !='') ?"  and ref_legal_secao     = '$ref_legal_secao' "     :'' ).
		   ( ($ref_legal_artigo    !='') ?"  and ref_legal_artigo    like '%$ref_legal_artigo%' "    :'' ).
		   ( ($ref_legal_paragrafo !='') ?"  and ref_legal_paragrafo like '%$ref_legal_paragrafo%' " :'' ).
		   ( ($ref_legal_inciso    !='') ?"  and ref_legal_inciso    = '$ref_legal_inciso' "    :'' ).
		   ( ($ref_legal_alinea    !='') ?"  and ref_legal_alinea    = '$ref_legal_alinea' "    :'' ).
		   ( ($ref_legal_item      !='') ?"  and ref_legal_item      = '$ref_legal_item' "      :'' ).
		   " group by ref_legal_id ";

	$res_ref_legal = query($sql);
	$qtd = mysql_num_rows($res_ref_legal);

	$x = 0;

	$rtn = '<label><table width="100%" border="0" cellspacing="0" cellpadding="0">';

	while ($data = mysql_fetch_array($res_ref_legal)) {
//	    if (++$x > 15) {break;};

	    $rtn .= '<tr>
                <td width="6%" class="tabelas" align="right">&nbsp;
                    <input id="'.$data[ref_legal_id].'" name="chk_bnq" value='.$data[qtd].' type=button>&nbsp;</td>
                <td width="6%" class="tabelas" align="right">&nbsp;
                    <input id="chk_ref_legal" name="chk_ref_legal" value='.$data[ref_legal_id].' type=button>&nbsp;</td>
                <td width="15%" class="tabelas">&nbsp;'.$data['ref_legal_diploma'].'&nbsp;</td>
                <td width="07%" class="tabelas">&nbsp;'.$data['ref_legal_numero'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_capitulo'].'&nbsp;</td>
                <td width="07%" class="tabelas">&nbsp;'.$data['ref_legal_secao'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_artigo'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_paragrafo'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_inciso'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_alinea'].'&nbsp;</td>
                <td width="10%" class="tabelas">&nbsp;'.$data['ref_legal_item'].'&nbsp;</td>
              </tr>';
	}

	$rtn .= "</table></label>";

  echo utf8_encode($rtn);
?>
<script>
  $("#ref_legal_qtd").html("Qtd: <?=$qtd?>");

	$("input[@name='chk_bnq']").each(function() {  	    $(this).click(function(){  	        $("#lista_ref_legal").hide('slow');

		    	  $("#lista_bnq").load("questoes_lista.inc.php",
		    	        { ref_legal_id:   this.id }
		    	  );

  	        $("#lista_bnq").show('slow');
	      })
	 });
</script>';

