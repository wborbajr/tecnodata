<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Sistema Gestor de Provas Online</title>

	<!-- Funçóes gerais de abstração de dados e tratamentos de telas -->
	<script language="javascript" src="../js/jquery.js"></script>

	<!-- Carrega tela de primeira identificação do candidato -->
	<script language="javascript" src="./js/main.js.php"></script>

<link href="css/prova_branco2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="geral" align="center">
  <table width="774" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="27%" height="146" background="imagens/recortes/images/layout-das-telas_vazio_01.gif">
	  <label id="opc1">opc1</label><br />
	  <label id="opc2">opc2</label><br />
	  <label id="opc3">opc3</label><br />
	  <label id="opc4">opc4</label><br />
	  </td>
      <td width="73%" rowspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>

            <!-- Dados do candidato - inicio  -->

            <td id="td_candidato_dados_fundo" height="90" align="left" background="imagens/recortes/images/layout-das-telas_vazio_02.gif">
				<table id="tb_candidato_dados" width="550" border="0" cellspacing="3" cellpadding="0" style="display: none">
				  <tr>
					<td width="10" class="tela04instrucaotit"><div align="center"></div></td>
					<th height="15" class="tela04instrucaotit">Nome do Candidato&nbsp;&nbsp;</th>
					<th class="tela04instrucaotit">CPF</th>
					<th class="tela04instrucaotit">Renach</th>
					<td width="120" rowspan="2" valign="top"><div align="center"></div></td>
				  </tr>
				  <tr>
					<td align="center" id="tx_renach">&nbsp;</td>
					<td bgcolor="#FFFFFF" id="tx_candidato_nome">nome nome nome nome nome nome nome nome </td>
					<td align="center" valign="top" nowrap="nowrap" bgcolor="#FFFFFF" id="tx_renach">999999999-99</td>
					<td align="center" valign="top" nowrap="nowrap" bgcolor="#FFFFFF" id="tx_renach">PR999999999</td>
				  </tr>
				</table>
			</td>

            <!-- Dados do candidato - inicio  -->

          </tr>
        </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="right" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td id="tb_conteudo_meio" align="right" valign="top">&nbsp;</td>
            </tr>
        </table></td>
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
          <td><div align="center">
            <table width="116" height="39" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td background="imagens/recortes/images/tela4_timer.gif" align="center">
				     <input type=text name="timetextarea" value="00:00" size="8" style = "font-size:15px">
				</td>
              </tr>
            </table>
          </div></td>
          <td>&nbsp;</td>
        </tr>

      </table></td>
    </tr>
    <tr>
      <td height="43" colspan="2" background="imagens/recortes/images/layout-das-telas_vazio_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="45" background="imagens/recortes/images/tela4_gabarito.gif">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
</body>
</html>
