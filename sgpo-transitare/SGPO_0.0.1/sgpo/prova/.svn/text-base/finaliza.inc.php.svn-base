<?
  session_start();

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50" id="car">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="tela04cabecalho">
		<?=$_SESSION[questao][$iPos];?>
	</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="400" border="0" cellpadding="0" cellspacing="3" class="tela04cabecalho">

        <?
        	for ($x = 1; $x <= $_SESSION[prova][param_nr_alternativas]; $x++) {
        ?>

        <tr>
          <td width="50" height="30"><div align="center">
            <input name  = "<?="$iPos"?>"
            	   id	 = "<?="i_$x"?>"
            	   value = "<?=$x?>"
            	   type	 = "radio"
            	   class = "tela04cabecalho"
				   <?=(($_SESSION[opcoes][$iPos][$x-1][2]==1)?" checked ":" ")?>
            	   />
          </div></td>
          <td align="left">
			<?
				echo $_SESSION[opcoes][$iPos][$x-1][0];
			?>
          </td>
        </tr>

        <?
        	}
        ?>

      </table>
    </div></td>
  </tr>
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
      <tr>
        <td width="408" align="center">&nbsp;</td>
        <td width="100"><div align="center"><img id="btn_Volta"  name="btn_Volta" src="imagens/recortes/images/botao_voltar.gif" width="100" height="24" /></div></td>
        <td width="209" height="55" align="center"><img id="img_aguarde" src="imagens/loading.gif" align="middle" width=40 style="display: none">&nbsp;</td>
        <td width="240">&nbsp;</td>
        <td width="239" align="left">
        <?
        	if ($iPos==30)
        	  echo '<img id="btn_Encerrar" src="imagens/recortes/images/botao_encerrar.gif" width="71" height="37" />';
        ?>        </td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script src="./js/questoes.js.php"></script>