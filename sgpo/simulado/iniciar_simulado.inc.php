<?
  session_start();
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="525" height="151" border="0" align="center">
        <tr>
          <td width="515" align="center" background="images/tela3_avisobranco.gif">
            <span class="tela03tit">Voc&ecirc; ter&aacute;
            <?//=$_SESSION[parametros][0][param_duracao]?>60
            minutos <br />
            para responder a 30
            <?//=$_SESSION[parametros][0][param_nr_questoes]?>
            quest&otilde;es</span></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="50">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center" class="tela03txt">
      <p>Ao clicar no bot&atilde;o abaixo,</p>
      <p>o tempo comecar&aacute; a contar e n&atilde;o poder&aacute;s voltar: </p>
    </div></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <p><br>
        <img src="images/tela3_botao.gif" name="btn_Iniciar" width="291" height="62" id="btn_Iniciar" /><br>
        <br>
      </p>
      </div></td>
  </tr>
</table>

<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script src="./js/iniciar_prova.js.php"></script>
