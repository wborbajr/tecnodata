<?  
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  include("../../include/config.inc.php");
  require_once('funcoes.inc.php');

  $id = $_REQUEST['id'];
  $ref_legal_id  = $_REQUEST['ref_legal_id'];
  $disciplina_id = $_REQUEST['disciplina_id'];
  $EhSimulado	 = $_REQUEST['simulado'];  

//  echo "id: $id - ref_legal_id: $ref_legal_id";
  
  // questão
  $sql = "SELECT *
		  FROM `bnq` a
			inner join disciplina b on b.disciplina_id = a.disciplina_id
			inner join dificuldade c on c.dificuldade_id = a.dificuldade_id
			inner join natureza d on d.natureza_id = a.natureza_id
			inner join bnq_status e on e.bnq_status_id = a.bnq_status_id
		  where a.bnq_id = $id";

  $res = query($sql);
  $data = mysql_fetch_array($res);
  
  // versão que relaciona o curso à disciplina
  $sql = "select distinct(curso_id)
	 	  from disciplina_curso
		  where disciplina_id = ".
		  $data[disciplina_id].
		 " order by curso_id ";
		 
  // versão que relaciona o curso à QUESTÃO - Implantado em 22/08/2007 à consenso da Elaine e Mariana
  $sql = "select distinct(curso_id)
	 	  from bnq_curso
		  where bnq_id = ".
		  $id.
		 " order by curso_id ";
  
  $res_cursos = query($sql);
  $sDisciplina_cursos = '0';
  while ($data_cursos = mysql_fetch_array($res_cursos)) {
	$sDisciplina_cursos .= ','.$data_cursos[curso_id];
  }

  // opcoes
  $sql = "select *
			from bnq_opcao
		  	where bnq_id = $id
			order by opcao_posicao";

  $res_opcoes = query($sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prova Eletrônica</title>
<link href="./css/prova_menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="questao_edita" align="center">
  <table width="450" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><h2>Parametros</h2>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabelas">
              <tr>
                <td>
					Questão Nr.:&nbsp;<label id="bnq_"><?=$id?></label> - Ref. Legal ID: <label id="ref_legal_id"><?=$ref_legal_id?></label>
                    <input name="Submit4" style="display: none" type="submit" class="botoes" value="SALVAR E FICAR" />
                    <input name="bnq_" type="hidden" id="id" value="<?=$id?>" />
                </td>
                <td align="right">
                    <input name="_grava_sair" type="submit" class="botoes" id="_grava_sair" value="SALVAR" />
                </td>
                <td align="center">
                    <input id="_voltar" name="_voltar" type="button" class="botoes" value="SAIR" />
                </td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabelas">
            <tr>
              <td width="50%" align="center" valign="top" class="tabelas"><table width="95%" border="0" cellspacing="2" cellpadding="0">
                <tr>
                  <td width="250"><strong>Disciplina</strong></td>
                  <td width="7" align="center">&nbsp;</td>
                  <td align="left"><strong>Dificuldade</strong></td>
                  <td width="7" align="center">&nbsp;</td>
                  <td align="left"><strong>Status</strong></td>
                  </tr>
                <tr>
                  <td>
                    <? monta_select('disciplina_id', "SELECT * FROM `disciplina` ORDER BY 2", "$data[disciplina_id]"); ?>
                  </td>
                  <td align="center">&nbsp;</td>
                  <td>
                    <? monta_select('dificuldade_id', "SELECT * FROM `dificuldade` ORDER BY 1", "$data[dificuldade_id]"); ?>
                  </td>
                  <td align="center">&nbsp;</td>
                  <td align="left">
				  	<? monta_select('bnq_status_id', "SELECT * FROM `bnq_status` ORDER BY 2", "$data[bnq_status_id]"); ?></td>
                  </tr>
                <tr>
                  <td><strong>Natureza</strong></td>
                  <td align="center">&nbsp;</td>
                  <td><strong>Assunto</strong></td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><strong>Simulado</strong></td>
                  </tr>
                <tr>
                  <td><? monta_select('natureza_id', "SELECT * FROM `natureza` ORDER BY 2", "$data[natureza_id]"); 		?></td>
                  <td align="center">&nbsp;</td>
                  <td><? monta_select('assunto_id', "SELECT * FROM `assunto` ORDER BY 2", "$data[assunto_id]"); ?></td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><strong>
                    <input name="bnq_simulado" type="checkbox" id="bnq_simulado" <?=(($data[bnq_simulado]==1)?'checked':'');?> />
                  </strong></td>
                  </tr>
              </table></td>
              <td align="center" valign="top" class="tabelas"><table border="0" cellspacing="3" class="tabelas">
                <tr>
                  <td width="146"><strong>Cursos vinculados &agrave; quest&atilde;o:</strong></td>
                </tr>
<? 
				// cursos 
				$sql = "select *
						from curso
					    order by curso_descricao ";
				$res_cursos = query($sql);
				
				while ($data_cursos = mysql_fetch_array($res_cursos)) {
					$cod  = $data_cursos[curso_id];
					$desc = $data_cursos[curso_descricao];
?>				
	                <tr>
	                  <td align="left">
						<input name="chk_cursos" type="checkbox" id="chk_cursos" 
								value="<?=$cod?>" <?=(strpos($sDisciplina_cursos, $cod)?'checked':'');?> readonly="true" />
	                    <?=$desc?></td>
                    </tr>
<?
				};
?>				
              </table></td>
            </tr>
          </table>
                <table width="100%" border="0" cellspacing="4" cellpadding="0"  class="tabelas">
                  <tr>
                    <td><h2>Pergunta:</h2></td>
                    <td><h2>Respostas:</h2></td>
                  </tr>
                  <tr>
                    <td width="50%" valign="top" class="tabelas"><table width="100%" border="0">
                        <tr>
                          <td><textarea id="bnq_pergunta" name="bnq_pergunta" cols="45" rows="10"><?=$data[bnq_pergunta]?></textarea></td>
                        </tr>
                        <tr style="display: none">
                          <td height="40">Imagem:
                            <input name="img_imagem" type="file" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle"  style="display: none">
						  	<div class="botoes" id="img_pergunta" style="border: 1px solid ; height:75px; width:75px; overflow: auto;">
						  	  <p>&nbsp;</p>
						  	  <p>imagem da pergunta </p>
						  	</div>
						  </td>
                        </tr>
                    </table></td>
                    <td width="50%" valign="top" class="tabelas"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td>
<?
  					while ($data_opcoes = mysql_fetch_array($res_opcoes)) {
						$opc_id = $data_opcoes[opcao_id];
?>
						  <table width="100%" border="0">
                              <tr>
                                <th align="left"> <?=$opc_id?> -
                                  Dispens&aacute;vel:
                                  <input id="opcao_dispensavel" name="opcao_dispensavel" type="radio" 
								  		value='<?=$opc_id;?>'
								  <?=(($data_opcoes[opcao_dispensavel]!=0)?'checked=$opc_id':'')?>/>
                                  &nbsp;Correta:
                                  <input id="opcao_correta" name="opcao_correta" type="radio" 
								  		value='<?=$opc_id;?>'
								  		<?=(($data_opcoes[opcao_correta]!=0)?'checked':'')?>/>
                                  <input id="opcao_fixa" name="opcao_fixa" type="checkbox" style="display: none"
								  		value='<?=$opc_id;?>'
										<?=(($data_opcoes[opcao_fixa]!=0)?'checked':'')?> /></th>
                              </tr>
                              <tr>
                                <td><textarea id="opc<?=$opc_id?>" name="opc<?=$opc_id?>" cols="45" rows="2"><?=$data_opcoes[opcao_desc]?></textarea>
								</td>
                              </tr>
                          </table>
<?
					};
?>						  </td>
                        </tr>
                    </table></td>
                  </tr>
            </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="4" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td align="right"><input name="_grava2_sair2" type="submit" class="botoes" id="_grava2_sair2" value="SALVAR" />
              </td>
              <td align="center"><input id="_voltar2" name="_voltar2" type="button" class="botoes" value="SAIR" />
              </td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
<script language="javascript">
  opc_correta = 0;
  opc_dispensavel = 0;
  id_ = $("#bnq_").text();
  ref_legal_id = $("#ref_legal_id").text();
  
	 $("#_voltar2, #_voltar").click(function(){
		$("#conteudo").show();
	   	$("#conteudo_edit").hide();
	 });

	 $("#_grava_sair, #_grava2_sair2").click(function(){
//			ref_legal_id 		= ref_legal_id;
			disciplina_id 		= $("#disciplina_id").val();
			dificuldade_id 		= $("#dificuldade_id").val();
			bnq_status_id 		= $("#bnq_status_id").val();
			natureza_id 		= $("#natureza_id").val();
			assunto_id 			= $("#assunto_id").val();
			bnq_simulado 		= $("#bnq_simulado").attr('checked');
			bnq_pergunta 		= $("#bnq_pergunta").val();
			opcao_dispensavel 	= opc_dispensavel;
			opcao_correta 		= opc_correta;
			
			$.post('./questao_grava2.php', {
											 id: id_
//										  	,ref_legal_id: ref_legal_id
										  	,disciplina_id: disciplina_id
											,dificuldade_id: dificuldade_id
											,bnq_status_id: bnq_status_id
											,natureza_id: natureza_id
											,assunto_id: assunto_id
											,bnq_simulado: bnq_simulado
											,bnq_pergunta: bnq_pergunta
											,opcao_dispensavel: opc_dispensavel
											,opcao_correta: opc_correta
											,EhSimulado: '<?=$EhSimulado?>'
											,opc1: $("#opc1").val()
											,opc2: $("#opc2").val()
											,opc3: $("#opc3").val()
											,opc4: $("#opc4").val()
											,opc5: $("#opc5").val()
										  },
							function() { atualiza_tela() }
			);
	
//			$("#_voltar").click();
	 })
	 
	$("input[@name='opcao_dispensavel']").each(function() {
	 	$(this).click(function(){
	 		opc_dispensavel = $(this).val();
		});
		
		if ($(this).attr("checked")) 
 			opc_dispensavel = $(this).val();
	 });

	$("input[@name='opcao_correta']").each(function() {
	 	$(this).click(function(){
	 		opc_correta = $(this).val();
		});

		if ($(this).attr("checked")) 
 			opc_correta = $(this).val();
	 });

	$("input[@name='chk_cursos']").each(function() {
	 	$(this).click(function(){
	 		status = $(this).attr('checked');
			curso = $(this).attr('value');
			$.post('questao_curso_grava.php', {bnq_id: id_, disciplina_id: <?=$disciplina_id?>,curso_id: curso, status: status});
		});
	 });
</script>