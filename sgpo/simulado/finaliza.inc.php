<?
  session_start();

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th height="50"><h2>GABARITO DA PROVA - SIMULADO</h2></th>
  </tr>
  <tr>
    <td><hr size="0"></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="95%" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000" class="tela04cabecalho">
      	<tr bgcolor='#cccccc'>
      		<th>Nr.</th>
      		<th>Quest&atila;o</th>
      		<th>Sua resposta</th>
      	</tr>

        <?

			$ok = 1; // Todas as questões foram respondidas
        	$aLetra = array('','A','B','C','D','E','F');

        	for ($x = 1; $x <= count($_SESSION[questao]); $x++) {
        	    $cod 	= (($_SESSION[questao][$x][3]==0)?'FALTA':$aLetra[ $_SESSION[questao][$x][3] ]);
        	    $fundo 	= (($cod=='FALTA')?"bgcolor=red":'');
        	    $cor 	= (($cod=='FALTA')?"white":'black');
        	    $ok 	= (($cod=='FALTA')? 0: $ok);
        ?>

        <tr  <?=$fundo?>>
          <th align="center" bgcolor="white">
			  <?//="<font color=$cor>$x</font>";?>
			  <?=$x?>
          </th>
          <td height="30">
			  <?="<font color=$cor>".$_SESSION[questao][$x][1]."</font>";?>
          </td>
          <td align="center">
			  <?="<font color=$cor>&nbsp;$cod&nbsp;</font>";?>
          </td>
        </tr>

        <?
        	}
        ?>

      </table>
    </div></td>
  </tr>
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="3" cellpadding="0">
      <tr>
        <td align="center">
        <img id="btn_Volta" name="30" src="images/botaum_voltar.jpg" width="101" height="30" /></td>
		<td align="center"><table width="210" height="40" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th>
                	<img id="btn_Encerrar" src="images/<?=((! $ok)?"questoesaberto.jpg":"encerrar.jpg");?>">
                </th>
              </tr>
            </table>
		  <br /></td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script>
$(document).ready(function(){

	$("#btn_Encerrar").click(function(){	    Encerra_Cronometro();
    	$("#tb_conteudo_meio").load("finalizado.inc.php");
     });

});
</script>
