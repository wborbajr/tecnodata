<?
  include("../../include/config.inc.php");

  $sql = "SELECT * FROM `bnq_status` ORDER BY 1";
  $res_ref_legal_status = query($sql);

  $sql = "SELECT * FROM `disciplina` ORDER BY 1";
  $res_disciplina = query($sql);

  $sql = "SELECT * FROM `assunto` ORDER BY 1";
  $res_assunto = query($sql);

  $sql = "SELECT * FROM `dificuldade` ORDER BY 1";
  $res_dificuldade = query($sql);

  $sql = "SELECT * FROM `natureza` ORDER BY 1";
  $res_natureza = query($sql);

  $sql = "SELECT `bnq_id`, `bnq_simulado`, `ref_legal_id`, `bnq_status_desc`, `natureza_desc`,
			 `dificuldade_desc`, `disciplina_desc`, `bnq_pergunta`, `bnq_qtd_uso`
		  FROM `bnq` a
					inner join disciplina b on b.disciplina_id = a.disciplina_id
					inner join dificuldade c on c.dificuldade_id = a.dificuldade_id
					inner join natureza d on d.natureza_id = a.natureza_id
					inner join bnq_status e on e.bnq_status_id = a.bnq_status_id
		  order by bnq_id ";

  $res_bnq = query($sql);

	function monta_select($campo_chave, $res) {
	  $rtn = "<select name='$campo'>";
						while ($data = mysql_fetch_array($res)) {
							$cod = $data[0];
							$desc = $data[1];
							$rtn .= "<option value='$cod'>$desc</option>";
						};
	  $rtn .= "</select>";
	echo $rtn;
	};

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
				<meta http-equiv="Content-Type"         content="text/html; charset=iso-8859-1" />
				<meta http-equiv="Content-Style-Type"   content="text/css">
				<meta http-equiv="Content-Script-Type"  content="text/javascript">

        <title>Prova Eletrônica</title>

        <script src="../../js/jquery.js" type="text/javascript"></script>

        <link href="../../css/prova_menu.css" rel="stylesheet" type="text/css" />

				<style>
					* { margin:0px; padding: 0px;}
					#com_scroll {border: 1px solid blue; height:250px; overflow: scroll;}
				</style>
</head>

<body>

<div id="geral">
	<div id="status">
		<p>[ <a href="#">Fechar</a> ]</p>
	</div>
	<div id="topo">
		<h1>Prova Eletrônica</h1>
	</div>

	<div id="corpo">
		<div id="menu">
			<ul>
			 <li><a href="cliente.html">Cliente</a></li>
			  <li><a href="bnqcad.html">BNQ</a></li>
			  <li><a href="#">Bilhetagem</a></li>
			  <li><a href="#">Simulado</a></li>
			  <li><a href="#">Usuários</a></li>
			</ul>
		</div>
      <div id="conteudo">
        <h1>BNQ - FILTRO </h1>
        <p>&nbsp;</p>

        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td><h2>Cr&eacute;ditos de Pesquisa </h2></td>
          </tr>

          <tr>
            <td><table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <!-- td width="11%" align="center"><b>Status</b></td -->
                <td width="11%" align="center"><b>Diproma</b></td>
                <td width="11%"align="center"><b>N&ordm;</b></td>
                <td width="11%" align="center"><b>Cap&iacute;tulo</b></td>
                <td width="11%" align="center"><b>Se&ccedil;&atilde;o</b></td>
                <td width="11%" align="center"><b>Artigo</b></td>
                <td width="11%" align="center"><b>&sect;</b></td>
                <td width="11%" align="center"><b>Inciso</b></td>
                <td width="11%" align="center"><b>Al&iacute;nia</b></td>
                <td width="11%" align="center"><b>Item</b></td>
              </tr>
              <tr>
                <!-- td align="center">
                    <? //monta_select('ref_legal_status', $res_ref_legal_status); ?>
                </td -->
                <td align="center"><input id="ref_legal_diploma"   type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_numero"    type="text" size="6" /></td>
                <td align="center"><input id="ref_legal_capitulo"  type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_secao"     type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_artigo"    type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_paragrafo" type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_inciso"    type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_alinea"    type="text" size="5" /></td>
                <td align="center"><input id="ref_legal_item"      type="text" size="7" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="right"><input id="btn_ref_pesq" name="btn_ref_pesq" type="button" class="botoes" value="PESQUISA" />
&nbsp;&nbsp;&nbsp;
<input id="btn_ref_novo" name="btn_ref_novo" type="button" class="botoes" value="NOVO" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table border=0 width="100%"><tr><td><h2>Refer&ecirc;ncia Legal</h2></td><td align="center"><h2 id="ref_legal_qtd">Qtd: 0</h2></td></tr></table></td>
          </tr>
          <tr>
            <td>
            <table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="11%" ><div align="center"><b>AÇÃO</b></div></td -->
                <td width="07%"><div align="center"><b>Diploma</b></div></td>
                <td width="07%"><div align="center"><b>N&ordm;</b></div></td>
                <td width="10%"><div align="center"><b>Cap&iacute;tulo</b></div></td>
                <td width="07%"><div align="center"><b>Se&ccedil;&atilde;o</b></div></td>
                <td width="10%"><div align="center"><b>Artigo</b></div></td>
                <td width="10%"><div align="center"><b>&sect;</b></div></td>
                <td width="10%"><div align="center"><b>Inciso</b></div></td>
                <td width="10%"><div align="center"><b>Al&iacute;nia</b></div></td>
                <td width="10%"><div align="center"><b>Item</b></div></td>
              </tr>
			      </table>

              <!-- Lista de ref. legais - filtrada -->
              <div style="border: 1px solid blue; height:350px; overflow: auto;">
                <div id="lista_ref_legal" ></div>
                <div id="lista_bnq"><div id="ref_legal_voltar">voltar</div></div>
        			</div>

    			  </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
		  <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="400"><b>Disciplina</b></td>
                  <td><b>Assunto</b></td>
                </tr>
                <tr>
                  <td><? monta_select('disciplina_id', $res_disciplina); ?>                  </td>
                  <td><? monta_select('assunto_id', $res_assunto); ?>                  </td>
                </tr>
              </table>
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="400"><b>Natureza</b></td>
                  <td width="200"><b>Dificuldade</b></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><? monta_select('natureza_id', $res_natureza); 		?></td>
                  <td><? monta_select('difilculdade_id', $res_dificuldade); ?></td>
                  <td><input name="button" type="button" class="botoes" id="btn_pesquisa" value="PESQUISA" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="button" type="button" class="botoes" id="btn_novo" value="NOVO" /></td>
                </tr>
              </table>
              <br />
              <table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="40" class="tabtit" align="center">A&ccedil;&atilde;o</td>
                <td width="110" class="tabtit"><div align="center">Disciplina</div></td>
                <td width="48" class="tabtit"><div align="center">Dific.</div></td>
                <td width="100" class="tabtit"><div align="center">Natureza</div></td>
                <td width="100" class="tabtit"><div align="center">Assunto</div></td>
                <td class="tabtit"><div align="center">Quest&atilde;o</div></td>
                <td width="80" class="tabtit"><div align="center">Status</div></td>
              </tr>
             </table>

	           <!-- Lista de bnq - filtrada -->
	           <div id="lista_ref_legais"style="border: 1px solid blue; height:250px; overflow: scroll;">
	            <table width="100%" border="0" cellspacing="2" cellpadding="0">
<?
//		while ($data = mysql_fetch_array($res_bnq)) {
?>
	              <tr>
	                <td width="38" height="20" class="tabelas" align="center">
	                  <input type="checkbox" name="checkbox" value="checkbox" />	                </td>
	                <td width="108" class="tabelas">&nbsp;<?=$data['disciplina_desc']?>&nbsp;</td>
	                <td width="45" class="tabelas">&nbsp;<?=$data['dificuldade_desc']?>&nbsp;</td>
	                <td width="100" class="tabelas">&nbsp;<?=$data['natureza_desc']?>&nbsp;</td>
	                <td width="100" class="tabelas">&nbsp;<?=$data['']?>&nbsp;</td>
	                <td class="tabelas">&nbsp;<?=$data['bnq_pergunta']?>&nbsp;</td>
	                <td width="60" class="tabelas">&nbsp;<?=$data['bnq_status_desc']?>&nbsp;</td>
	              </tr>
<?
//		}
?>
	            </table>
           	 </div>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><input name="Submit3" type="submit" class="botoes" value="Alterar Refer&ecirc;ncia Legal" /></td>
          </tr>
          <tr>
            <td height="50">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
	</div>

	<div id="rodape">
		<div id="boxrodape">
			<div id="foot">
				<p>rodape</p>
			</div>
		</div>

		<div id="info">
			<p>info</p>
		</div>
	</div>
</div>

</body>
</html>
<script src="main.js.php" type="text/javascript"></script>

