<?
  include("../../include/config.inc.php");

  $sql = "SELECT `bnq_id`, `bnq_simulado`, `ref_legal_id`, `bnq_status_desc`, `natureza_desc`,
			 `dificuldade_desc`, `disciplina_desc`, `bnq_pergunta`, `bnq_qtd_uso`
		  FROM `bnq` a
					inner join disciplina b on b.disciplina_id = a.disciplina_id
					inner join dificuldade c on c.dificuldade_id = a.dificuldade_id
					inner join natureza d on d.natureza_id = a.natureza_id
					inner join bnq_status e on e.bnq_status_id = a.bnq_status_id
		  order by bnq_id ";

  $res_bnq = query($sql);

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

        <div id="conteudo_edit">
        </div>

        <table id="tb_conteudo" width="100%" border="0" cellspacing="2" cellpadding="0">
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
                <td width="11%" align="center"><b><abbr title="Informe o Número do artigo, ou parte dele">Artigo</abbr></b></td>
                <td width="11%" align="center"><b><abbr title="Informe o Número do parágrafo, ou parte dele">&sect;</abbr></b></td>
                <td width="11%" align="center"><b><abbr title="Informe o inciso, ou parte dele">Inciso</b></td>
                <td width="11%" align="center"><b>Al&iacute;nia</b></td>
                <td width="11%" align="center"><b>Item</b></td>
              </tr>
              <tr>
                <!-- td align="center">
                    <? //monta_select('ref_legal_status', "SELECT * FROM `ref_legal_status` ORDER BY 1"); ?>
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
<input id="btn_ref_novo" style="display: none" name="btn_ref_novo" type="button" class="botoes" value="NOVO" /></td>
          </tr>
          <tr>
            <td><table border=0 width="100%"><tr><td><h2>Refer&ecirc;ncia Legal</h2></td><td align="center"><h2 id="ref_legal_qtd">Qtd: 0</h2></td></tr></table></td>
          </tr>
          <tr>
            <td valign="top">
								<table width="100%" border="0" cellspacing="2" cellpadding="0">
								   <tr>
								     <th width="26"  align="center"  valign="bottom">BNQ</th>
								     <th width="54"  align="center"  valign="bottom">REF.<br>LEGAL</th>
								     <td width="105" align="center" valign="bottom"><b>Diploma</b></td>
								     <td width="58" align="center"  valign="bottom"><b>N&ordm;</b></td>
								     <td width="71" align="center"  valign="bottom"><b>Cap&iacute;tulo</b></td>
								     <td width="56" align="center"  valign="bottom"><b>Se&ccedil;&atilde;o</b></td>
								     <td width="76" align="center"  valign="bottom"><b>Artigo</b></td>
								     <td width="65" align="center"  valign="bottom"><b>&sect;</b></td>
								     <td width="81" align="center"  valign="bottom"><b>Inciso</b></td>
								     <td width="83" align="center"  valign="bottom"><b>Al&iacute;nia</b></td>
								     <td width="93" align="center"  valign="bottom"><b>Item</b></td>
								   </tr>
								</table>
              <table id="tb_ref_legal" width="100%" border="01" cellspacing="0" cellpadding="0" bgcolor=cyan>
                <tr>
                  <th id="campo0"  width="26"  align="center"></th>
                  <th id="campo1"  width="54"  align="center">1</th>
                  <th id="campo2"  width="105" align="center">2</th>
                  <td id="campo3"  width="58"  align="center">3</td>
                  <td id="campo4"  width="71"  align="center">4</td>
                  <td id="campo5"  width="56"  align="center">5</td>
                  <td id="campo6"  width="76"  align="center">6</td>
                  <td id="campo7"  width="65"  align="center">7</td>
                  <td id="campo8"  width="81"  align="center">8</td>
                  <td id="campo9"  width="83"  align="center">9</td>
                  <td id="campo10" width="93"  align="center">10</td>
                </tr>
              </table>

              <!-- Lista de ref. legais - filtrada -->
              <div style="border: 1px solid ; height:300px; overflow: auto;">

                <div id="lista_ref_legal" ></div>

                <div id="lista_bnq">
                </div>

   			     </div>

   			     <!-- Lista de ref. legais - filtrada -->

   			    </td>

          </tr>
        </table>
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

