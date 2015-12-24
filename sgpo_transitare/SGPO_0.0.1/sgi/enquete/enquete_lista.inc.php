<?
  include_once("config.inc.php");
    
	$login = $_REQUEST['login'];
	$senha = $_REQUEST['senha'];
 
	$sql = "select a.*, tab03_desc ".
		   "from tab00_usuarios a ".
		   " inner join tab03_setores b on a.tab03_id = b.tab03_id ".
		   "where tab00_login = '$login' ".
		   "limit 1;";
	$data = query($sql, 1); // retorna matriz
	$msg = '';
	
	$usuario_id = $data['tab00_id'];
	$setor		= $data['tab03_id'];
	$setor_desc	= $data['tab03_desc'];
	
	if ($usuario_id=='')    { $msg = 'Login não encontrado.'; } else
	if ($data['tab00_senha']!="$senha") { $msg = 'Senha incorreta.'; } 

	// Erros no login
	if ($msg != '') {
		echo $msg;
		exit;
	};

	// enquentes disponíveis para o setor
	$sql = "select * from tab01_enquetes ".
		   "where tab03_id = 0 ".
		   "   or tab03_id = '$setor'".
		   " order by tab01_id ";
	$res = query($sql);

	echo "<table><tr><td>Usuário: $login&nbsp;</td><td>Setor: $setor_desc&nbsp;</td></tr></table>";

	echo '<b>&nbsp;Enquetes Disponíveis: </b><br /><table width="100%" border="1" cellspacing="0">';
	
	while ($data = mysql_fetch_array($res)) {
		
		$cod = $data['tab01_id'];
		$sql = "select * from tab02_voto where tab01_id = '$cod' and tab00_id = '$usuario_id'";
		$data2 = query($sql, 1); // retorna matriz
		$ver_votar = (($data2['tab00_id'] != $cod)?"<img id='votar' title='$cod' src=images/votar.jpg>":"<img id='ver' title='$cod' src=images/ver.jpg>");
?>
              <tr title="<?=$cod?>">
                <td id="td_enquete_id" align="center" valign="top"><?=$cod?></td>
                <td align="left"><?=converte($data['tab01_pergunta'])?></td>
                <td id="td_enquete_acao" align="cente">&nbsp;<?=$ver_votar?>&nbsp;</td>
              </tr>
<?
	};
	
	echo "</table>";
?>
<script language=javascript>
//  $(document).ready(function() {
	$("img").each(function(i) {
	  $(this).click(function(){
		enquete_acao( this.id,this.title );
	  });
	});	
//  });
  
function enquete_acao(modo, id) {
	$("#tb_login").hide('slow');
	$("#div_enquete").load("questao.inc.php", {modo: modo, id: id});

//	alert(acao+' - '+id);
}
</script>





