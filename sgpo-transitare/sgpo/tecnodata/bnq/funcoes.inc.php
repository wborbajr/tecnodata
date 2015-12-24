<?
function monta_select($campo_chave, $sql, $pos='') {
    $res = query($sql);
	  $rtn = "<select id='$campo_chave' name='$campo_chave'>";
						while ($data = mysql_fetch_array($res)) {
							$cod = $data[0];
							$desc = $data[1];

							if ($pos !='')
							  $sSelect = (($pos==$cod)?'selected': '');

							$rtn .= "<option value='$cod' $sSelect>$desc</option>";
						};
	  $rtn .= "</select>";
	echo $rtn;
};
?>