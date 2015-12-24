<?
  session_start();

	$_SESSION[prova]   = '';
	$_SESSION[questao] = '';
	$_SESSION[opcoes]  = '';
	$_SESSION[iDirecao] = 1;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Sistema Gestor de Provas Online</title>

	<!-- Funçóes gerais de abstração de dados e tratamentos de telas -->
	<script language="javascript" src="../js/jquery.js"></script>

	<script language="javascript1.5" type="text/javascript" src="./cronometro/javascript_timer.js"></script>

	<link href="css/prova_branco2.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
    </style>

</head>

<body>

<center>

  <table width="774" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="27%" height="146" background="imagens/recortes/images/layout-das-telas_vazio_01.gif">
	  </td>
      <td width="73%" rowspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>

            <!-- Dados do candidato - inicio  -->

            <td id="td_candidato_dados_fundo" height="90" align="left" background="imagens/recortes/images/layout-das-telas_vazio_02.gif"><span id="sp_titulo" class="titulo">&nbsp;&nbsp;&nbsp;Sistema de Provas Online</span>
		    <table id="tb_candidato_dados" width="550" border="0" cellspacing="3" cellpadding="0" style="display: none">
				  <tr>
					<td width="10" class="tela04instrucaotit" align="center">&nbsp;</td>
					<th height="15" class="tela04instrucaotit">Nome do Candidato&nbsp;&nbsp;</th>
					<th width="110" class="tela04instrucaotit">CPF</th>
					<th width="110" class="tela04instrucaotit">Renach</th>
					<td width="120" rowspan="2" valign="top"><div align="center"></div></td>
				  </tr>
				  <tr>
					<td align="center">&nbsp;</td>
					<td bgcolor="#FFFFFF" class="tela04respostas" id="tx_candidato_nome">nome nome nome nome nome nome nome nome </td>
					<td align="center" valign="top" nowrap="nowrap" bgcolor="#FFFFFF" class="tela04respostas" id="tx_candidato_cpf">999999999-99</td>
					<td align="center" valign="top" nowrap="nowrap" bgcolor="#FFFFFF" class="tela04respostas" id="tx_candidato_renach">PR999999999</td>
				  </tr>
			  </table>			</td>

            <!-- Dados do candidato - inicio  -->
          </tr>
        </table>
          <table id="td_cargando" style="display: none" border="0" align="right" cellpadding="0" cellspacing="0" class="tela03tit">
            <tr>
              <td align="center">Processando...</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tela03txt">
            <tr>
              <td id="tb_conteudo_topo">
				  <table id="tb_status" style="display: none" align="right" border="0" cellspacing="3" class="tela04cabecalho">
					<tr>
					  <td >Data da Prova:&nbsp;</td>
					  <th id="td_prova_data"><strong>25/06/2007</strong></td><td>&nbsp;-&nbsp;</th>
					  <td align="right">Hora da prova:&nbsp;</td>
					  <th id="td_prova_hora"><strong>--:--</strong></td><td>&nbsp;-&nbsp;</th>
					  <td>Status:&nbsp;</td>
					  <th id="td_prova_status"><strong>Prova em andamento.</strong></th>
					  <td>&nbsp;&nbsp;</td>
					</tr>
				  </table>			  </td>
            </tr>
            <tr>
              <td align="right" valign="bottom" id="tb_conteudo_meio">&nbsp;</td>
            </tr>
        </table>        </td>
    </tr>
    <tr>
      <td id="td_esquerdo_fundo" height="392" valign="top" background="imagens/recortes/images/layout-das-telas_vazio_042.gif" style="background-repeat:no-repeat">
	    <table id="tb_esquerdo" style="display: none" width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="81%"><div align="center" class="tela04instrucaotit">INSTRU&Ccedil;&Otilde;ES</div></td>
          <td width="19%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center">
            <table width="150" border="0" cellpadding="0" cellspacing="5" class="tela04instrucao">
              <tr>
                <td valign="top"><div align="right">1)</div></td>
                <td width="81%"><div align="left">
                  <p>Leia atentamente &agrave; <br />
                    quest&atilde;o.</p>
                  <p>&nbsp;</p>
                </div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">2)</div></td>
                <td><div align="left">
                  <p>Clique com o mouse <br />
                    sobre a alternativa <br />
                    correta, ou digite a <br />
                    letra correspondente <br />
                    no espa&ccedil;o indicado.</p>
                  <p>&nbsp;</p>
                </div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">3)</div></td>
                <td><div align="left">
                  <p>&Eacute; poss&iacute;vel pular <br />
                    uma quest&atilde;o e voltar <br />
                    para respond&ecirc;-la <br />
                    depois, clicando nas <br />
                    setas ou no n&uacute;mero <br />
                    correspondente &agrave; <br />
                    quest&atilde;o.</p>
                  <p>&nbsp;</p>
                </div></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">4)</div></td>
                <td><div align="left">
                  <p>O gabarito mostra <br />
                    automaticamente as <br />
                    quest&otilde;es que ja <br />
                    foram respondidas.</p>
                  <p>&nbsp;</p>
                </div></td>
              </tr>
            </table>
          </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <table width="116" height="39" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td background="imagens/recortes/images/tela4_timer.gif" align="center">
				     &nbsp;&nbsp;&nbsp;&nbsp;<input type=text id="timetextarea" value="00:00" size="8" style="font-size:15px">
				</td>
              </tr>
            </table>
          </td>
          <td>&nbsp;</td>
        </tr>

      </table></td>
    </tr>
    <tr background="imagens/recortes/images/layout-das-telas_vazio_05.gif">
      <td id="td_gabarito_fundo" height="43" colspan="2" align="right" background="imagens/recortes/images/layout-das-telas_vazio_05.gif">
	  <table width="600" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><table border="0" cellpadding="0" cellspacing="0" class="tela04instrucaotit" id="tr_gabarito_opcoes" style="display: none">
            <tr>
              <?
			$iQuantos = 31;
			for ($x=1; $x < $iQuantos; $x++) {
		?>
              <td align="center"><img id="img_questao_<?=$x?>" src="imagens/recortes/images/nocheck.gif" width="20" height="20"></td>
              <?
			}
		?>
            </tr>
            <tr>
              <?
			for ($x=1; $x < $iQuantos; $x++) {
		?>
              <td align="center" ><?=$x?></td>
              <?
			}
		?>
            </tr>
          </table></td>
        </tr>
      </table>
	  </td>
    </tr>
  </table>
</center>

</body>

</html>

<!-- Carrega tela de primeira identificação do candidato -->
<script language="javascript" src="./js/main.js.php"></script>


