<?
  session_start();

  $Cor_Certo  = "#ffffff";   // verde
  $Cor_Errado = "#ff0000";   // vermelho
  $Cor_Pergunta  = "#3673ac"; // azul
  $Cor_Cabecalho = "#cccccc";//"#ffff00"  // amarelo
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th height="50"><h2>RESULTADO DA PROVA - SIMULADO</h2></th>
  </tr>
  <tr>
    <td><hr size="0"></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="95%" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000" class="tela04cabecalho">
      	<tr bgcolor="<?=$Cor_Cabecalho;?>">
      		<th><h3>Nr.</h3></th>
      		<th><h3>Quest&atilde;o</h3></th>
      	</tr>

        <?

        	$aLetra  = array('','a','b','c','d','e','f');
        	$aNumero = array('a'=>1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

        	for ($x = 1; $x <= count($_SESSION[questao]); $x++) {
        	    $iUsuario 	= $aLetra[ $_SESSION[questao][$x][3] ];
        	    $iCerta 	= $_SESSION[questao][$x][2];
        	    $ok			= ($iUsuario==$iCerta);
        	    $Cor_Candidato = (($ok)? $Cor_Certo: $Cor_Errado);
        	    $Cor_Frente    = (($ok)? "#000000": "#ffffff");
        	    $cor = "#ffffff";

        	    $Candidato_Resp = $_SESSION[opcoes][$x][ $aNumero[ $iUsuario ] ];
        ?>

        <!-- Pergunta -->
        <tr bgcolor="<?=$Cor_Pergunta;?>">
          <th>
			  <?="<font color='$cor'>$x</font>"?>
          </th>
          <td height="30">&nbsp;
			  <?="<font color='$cor'>".$_SESSION[questao][$x][1]."</font>";?>
          </td>
        </tr>

        <!-- Resposta Candidato -->
        <tr bgcolor="<?=$Cor_Candidato;?>">
          <th align="center" bgcolor="white">
			  Candidato:&nbsp;
          </th>

          <td height="30">&nbsp;
			  <?="<font color=$Cor_Frente>".(($Candidato_Resp=='')? '** NAO RESPONDIDO **': $Candidato_Resp)."</font>"; /* opção do usuário*/ ?>
          </td>
        </tr>

		<?
				if (! $ok) {
		?>
        <!-- Resposta correta -->
        <tr bgcolor="#00cc66">
          <th align="center" bgcolor="white">
			  Correta:&nbsp;
          </th>
          <td height="30">&nbsp;
			  <?="<font color=$cor>".$_SESSION[opcoes][$x][ $aNumero[ $iCerta ] ]."</font>"; // opção do usuário?>
          </td>
        </tr>
        <?
        		}
        ?>

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
          <img id="btn_Sair" name="30" src="images/sair.jpg" />
		</td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- Prepara para receber o click no botão btn_Entrar e processa a pesquisa pelo candidato -->
<script>
$(document).ready(function(){

	$("#btn_Sair").click(function(){
//    	$("#tb_conteudo_meio").load("finaliza.inc.php");
    	alert('Seu simulado foi finalizado com sucesso.');
    	window.open('./', '_self');
     });

});
</script>
