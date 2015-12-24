<?
  header("Content-Type: text/html; charset=ISO-8859-1",true);

  include("../../include/config.inc.php");

  $sSql_Simulado = $_REQUEST['sSql_Simulado'];
  $disciplina_id = $_REQUEST['disciplina_id'];

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
  
  if (mysql_num_rows($res_bnq)==0) echo "Não há questões a listar.";

  while ($data = mysql_fetch_array($res_bnq)) {
			$sParametros = "'$data[bnq_id]', '$data[ref_legal_id]', '$disciplina_id', '$simulado'";
?>
                   <table width="95%" border="0" cellpadding="0" cellspacing="2" class="tabelas1"
							onMouseOver="this.style.cursor='hand';this.style.background='#CCCCCC';"
							onMouseOut="this.style.cursor='default';this.style.background='';">
		                   <tr id="tr_destaque">
                     <td width="40" class="tabelas" align="center">
							<input name="chk_bnq_ok" type="checkbox" id="chk_bnq_ok" 
							value="<?=$data['bnq_id']?>" <?=(($data['bnq_ok']==1)?'checked':'')?>
							/>
					 </td>
                     <td width="40" class="tabelas" align="center"
							onclick="questao_edita(<?="$sParametros"?>)">
					 <?=$data['bnq_id']?>                     
					 </td>
                     <td width="40" class="tabelas" align="center"
							onclick="questao_edita(<?="$data[bnq_id], $data[ref_legal_id]"?>)">
					 <?=(($data['bnq_simulado']==1)?'SIM':'n&atilde;o')?>                     </td>
                     <td width="108" class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['disciplina_desc']?>
                       &nbsp;</td>
                     <td width="45" class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['dificuldade_desc']?>
                       &nbsp;</td>
                     <td width="100" class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['natureza_desc']?>
                       &nbsp;</td>
                     <td width="100" class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['assunto_desc']?>
                       &nbsp;</td>
                     <td class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['bnq_pergunta']?>
                       &nbsp;</td>
                     <td width="60" class="tabelas"
							onclick="questao_edita(<?="$sParametros"?>)">
					   &nbsp;
                         <?=$data['bnq_status_desc']?>
                       &nbsp;</td>
                   </tr>
                 </table>
<?
		}
?>
<script>
	$("input[@name='chk_bnq_ok']").each(function() {
	 	$(this).click(function(){
	 		status = $(this).attr('checked');
			id_    = $(this).attr('value');
			$.post('questao_ok_grava.php', {bnq_id: id_, status: status});
		});
	 });
</script>