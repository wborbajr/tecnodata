<?
  session_start();
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="36" height="148" align="center"><table width="525" height="151" border="0">
            <tr>
              <td width="515" align="center" background="imagens/recortes/images/tela3_avisobranco.gif">
              <span class="tela03tit"><?=$_SESSION[prova][tempo]?><br /></span></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
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
        <img id="btn_Iniciar" src="imagens/recortes/images/tela3_botao.gif" width="291" height="62" /><br>
        <br>
      </p>
      </div></td>
  </tr>
</table>

<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script src="./js/iniciar_prova.js.php"></script>

