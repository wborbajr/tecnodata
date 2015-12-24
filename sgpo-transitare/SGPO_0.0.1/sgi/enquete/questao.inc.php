<?
	include_once("config.inc.php");

	$ip = getenv("REMOTE_ADDR");
	$id = $_REQUEST['id'];

	// Seleciona a enquete da vez, só pra pegar o ID
	$sql = "select * from tab01_enquetes where tab01_id = '$id' limit 1";
	$data_enquete = query($sql, 1);

	// Controla votação por IP
	$sql = "select * from tab02_voto where tab01_id = '$id' and tab02_ip = '$ip' ";
	$data = mysql($sql, 1);
?>
<table id="tb_enquete" style="display: " width="100%" border="0" align="center">
        <tr>
          <td>&nbsp;&nbsp;Enquete Nr.:
            <?=$data_enquete['tab01_id']?>
              <input name="tab01_id" type="hidden" id="tab01_id" value="<?=$data_enquete['tab01_id'];?>" /></td>
        </tr>
        <tr>
          <td align="left"><hr align="left" width=75% size="0"/></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="9">&nbsp;</td>
                <td><?=$data_enquete['tab01_pergunta'];?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><hr align="left" size="0" /></td>
        </tr>
        <tr>
          <td><table border="0" align="center">
              <?
	$y = 1;
	for ($x = 3; $x < 16; $x += 2) {
		  if ($data_enquete[$x]!='') {
?>
              <tr>
                <td valign="top"><input name="radio_voto" id="v<?=$y?>" value="<?=$y?>" type="radio" style="display: none" /></td>
                <td align="left"><?=$data_enquete[$x];?></td>
                <td align="right"><div id="r<?=$y?>">
                    <?=$data_enquete[$x+1]?>
                </td>
              </tr>
              <?
		  };

		  $y++;
	};
?>
          </table></td>
        </tr>
        <? if ($votou!='') echo "<tr><td><hr size='0' /></td></tr><tr><th>".$votou."</th></tr>";?>
        <tr>
          <td><hr size="0" /></td>
        </tr>
        <tr>
          <th align="center" valign="middle"><table width="100%" border="0">
              <tr>
                <td><input name="btn_voltar" type="button" id="btn_voltar" value="&lt;&lt;" />
                    <input name="btn_votar" type="submit" id="btn_votar" value="Votar" /></td>
                <td>
					<input name="btn_resultado" type="button" id="btn_resultado" value="Ver Resultado" /></td>
              </tr>
          </table></th>
        </tr>
</table>

