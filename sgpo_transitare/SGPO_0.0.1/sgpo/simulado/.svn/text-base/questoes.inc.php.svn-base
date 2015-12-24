<?
  session_start();

/*
	TROQUEI:
	- tela04questoes, tela04imput
	PARA
	- tela04cabecalho
*/

$iPos = $_POST[iQuestao];

?>
<script>
 ipos = "<?=$iPos;?>";
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="car">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="tela04questoes">
		<?=$iPos.') '.$_SESSION[questao][$iPos][1];//.' - ('.$_SESSION[questao][$iPos][2].')';?>
	</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="95%" border="01" cellpadding="08" cellspacing="0" class="tela04cabecalho">

        <?
        	for ($iOpcoes = 1; $iOpcoes <= count($_SESSION[opcoes][$iPos]); $iOpcoes++) {
        ?>

    <tr id = "<?="tr_$iOpcoes"?>"
    	onMouseOver="this.style.cursor='hand';this.style.background='#CCCCCC';"
        onMouseOut="this.style.cursor='default';this.style.background='';">
          <td width="30" height="20"><div align="center">
            <input name  = "<?="$iPos"?>"
            	   id	 = "<?="i_$iOpcoes"?>"
            	   value = "<?=$iOpcoes?>"
            	   type	 = "radio"
            	   class = "tela04cabecalho"
				   <?
				   		// selecionada ou não
				   		echo (($_SESSION[questao][$iPos][3]==$iOpcoes)?" checked ":" ");
				   ?>
            	   />
          </div></td>
          <td align="left">&nbsp;&nbsp;
			<?
				echo $_SESSION[opcoes][$iPos][$iOpcoes];
			?>
          </td>
        </tr>

        <?
        	};
        ?>

      </table>
    </div></td>
  </tr>
  <tr>
    <td height="80">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
      <tr>
        <td width="408" align="center">&nbsp;</td>
  <?
	if ($iPos>1) {  ?>
        <td width="100"><div align="center"><img id="btn_Volta" name="<?=($iPos-1)?>" src="images/botaum_voltar.jpg" width="101" height="30" /></div></td>
  <?
	}
  ?>
        <td width="209" height="55" align="center"><img id="img_aguarde" src="images/loading.gif" align="middle" width=40 style="display: none">&nbsp;</td>
  <?
	if ($iPos<30) {
  ?>
        <td width="240"><img id="btn_Avanca" name="<?=($iPos+1)?>" src="images/botaum_avancar.jpg" width="101" height="30" /></td>
  <?
	}
  ?>

        <td width="239" align="left">

        <?
        	if ($iPos==30)
        	  echo '<img id="btn_Encerrar" src="images/botaum_encerrar.jpg" width="71" height="37" />';
        ?>        </td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script src="./js/questoes.js.php"></script>