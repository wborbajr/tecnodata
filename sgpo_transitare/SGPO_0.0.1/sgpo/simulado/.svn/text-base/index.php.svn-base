<?
  session_start();

	$_SESSION[candidato][] = '0';
	$_SESSION[prova][]     = '0';
	$_SESSION[parametros][]= '0';
	$_SESSION[questao][]   = '0';
	$_SESSION[opcoes][]    = '0';
	$_SESSION[iDirecao]    = 1;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema Gestor de Provas Online [Simulado]</title>

<!-- Funçóes gerais de abstração de dados e tratamentos de telas -->

<script language="javascript" src="../js/jquery.js"></script>
<script language="javascript1.5" type="text/javascript" src="./cronometro/javascript_timer.js"></script>

<link href="css/prova_branco2.css" rel="stylesheet" type="text/css" />
<style type="text/css">

        <style type="text/css">
          <!--
          body {
                  margin-left: 2px;
                  margin-top: 2px;
                  margin-right: 2px;
                  margin-bottom: 2px;
          }

          .fundo{
                  background: url(images/lateral_fundo.jpg) repeat-y;
          }
          -->
        </style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>

<div id="div_cargando" align="left" style="display: none; position:absolute; left:738px; top:200px; width:69px; height:12px; z-index:1">
  <div>
    <table width="150" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
      <tr>
        <td align="center"><font color="#FFFFFF" size="4"><b>Aguarde...</b></font></td>
      </tr>
    </table>
  </div>
</div>
<div align="center">
  <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><img src="images/topo_provaportal_770px.jpg" width="770" height="112" /></td>
    </tr>
    <tr>
      <td valign="top" class="fundo"><table width="770" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><img src="images/layout_limpo_01.jpg" width="185" height="170">
              <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" id="tb_esquerdo"
						style="display: none" >
                <tr>
                  <td width="81%"><div align="center" class="tela04instrucaotit">INSTRU&Ccedil;&Otilde;ES</div></td>
                  <td width="5%">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td ><div align="center">
                      <table width="170" border="0" cellpadding="0" cellspacing="5" class="tela04instrucao">
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
                  <td align="center"><table width="116" height="35" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25" align="center" background="images/relogio.jpg">&nbsp;&nbsp;
                            <input name="text" type="text" id="timetextarea" style="font-size:15px" value="00:00:00" size="8" />
                            <div id="div_contDown"></div></td>
                      </tr>
                  </table></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <br>
		    <center>
			<div id="img_logo" style="display: none">
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p><img src="images/tela4_logodireita.gif" /></p>
			</div>
		    </center></td>
            <td width="589" rowspan="2" valign="top">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="90" align="right" valign="middle" background="images/topoprova02.jpg">
                    <!-- Dados do candidato - inicio  -->
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="100%" align="left" id="td_candidato_dados_fundo">
                          <span id="sp_titulo" class="titulo" style="display: ">&nbsp;&nbsp;&nbsp;Simulador
                          de Provas Online</span> </td>
                      </tr>
                    </table>
                    <!-- Dados do candidato - fim  -->
                    <table id="tb_candidato_dados" border="0" cellspacing="5" cellpadding="0"
						   class="tela04instrucaotit" style="display: none">
                      <tr>
                        <td width="5" align="center">&nbsp;</td>
                        <th width="350">Nome do Candidato&nbsp;&nbsp;</th>
                        <th width="112">CPF</th>
                        <td width="80" rowspan="2" valign="top"> <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td align="center">&nbsp;</td>
                        <td bgcolor="#FFFFFF" class="tela04respostas" id="tx_candidato_nome">nome
                          nome nome nome nome nome nome nome nome</td>
                        <td align="center" valign="top" nowrap="nowrap" bgcolor="#FFFFFF" class="tela04respostas" id="tx_candidato_cpf">999999999-99</td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"
			  		 style="display: ">
                <tr>
                  <td align="right" valign="top">
                    <table border="0" align="right" cellpadding="0" cellspacing="0" class="tela04cabecalho"
				  	id="tb_status" style="display: none">
                      <tr>
                        <td >Data da Prova:&nbsp;</td>
                        <td id="td_prova_data"><b>25/06/2007</b></td>
                        <td>&nbsp;-&nbsp;</td>
                        <td align="right">Hora da prova:&nbsp;</td>
                        <th id="td_prova_hora"><b>--:--</b></th>
                        <td>&nbsp;-&nbsp;</td>
                        <td>Prova:&nbsp;</td>
                        <td id="td_prova"><b>Prova em andamento.</b></td>
                        <td>&nbsp;&nbsp;</td>
                      </tr>
                    </table>                  </td>
                </tr>
                <tr>
                  <td height="400" valign="middle" id="tb_conteudo_meio">&nbsp;</td>
                </tr>
                <tr>
                  <th bgcolor=red><font size="4" color="#ffffff"><div id="timer_status"></div></font></th>
                </tr>
              </table>            </td>
          </tr>
          
          <tr>
            <td valign="bottom"><div align="left">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td background="images/layout_limpo_05.jpg">&nbsp;</td>
                </tr>
              </table>
              </div></td>
          </tr>
          <tr align="right">
            <td height="50" colspan="2" valign="top" background="images/rodape_vazio.jpg" id="td_gabarito_fundo">
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
				  	<table border="0" cellpadding="0" cellspacing="0" class="tela04instrucao"
				  		   id="tr_gabarito_opcoes" style="display: none">
                      <tr>
                        <?
				$iQuantos = 31;
				for ($x=1; $x < $iQuantos; $x++) {
				?>
                        <td height="30" align="center" valign="bottom"><img id="img_questao_<?=$x?>" src="images/nocheck.gif" width="20" height="20" /></td>
                        <?
				}
				?>
                      </tr>
                      <tr>
                        <?
				for ($x=1; $x < $iQuantos; $x++) {
				?>
                        <td align="center">
                          <p>
                            <?=$x?>
                          </p></td>
                        <?
				}
				?>
                      </tr>
                    </table></td>
                  <td>&nbsp;</td>
                </tr>
              </table> </td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p><br />
  </p>
</div>
</body>
</html>
<!-- Carrega tela de primeira identificação do candidato -->
<script language="javascript" src="./js/main.js.php"></script>
