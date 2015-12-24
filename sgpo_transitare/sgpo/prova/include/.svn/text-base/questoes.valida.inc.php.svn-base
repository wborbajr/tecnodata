<?
	session_start();

	$iOpcao			= $_REQUEST['iPos'];
	$iDir 			= $_REQUEST['iDir'];
	$iOpcao_checada = $_REQUEST['iOpcao_checada']-1;

	// Direчуo / Navegaчуo entre as questѕes
	if (isset($iDir)) {
		// $iDir pode ser negativo!!
    	$_SESSION[iDirecao] = ( $_SESSION[iDirecao] + ($iDir) );

    }

    // Grava a opчуo selecionada para posterior restauraчуo
    if (isset($iOpcao_checada)) {
    	// Desmarca todos
    	for ($x = 0; $x < $_SESSION[prova][param_nr_alternativas]; $x++) {
			$_SESSION[opcoes][$iOpcao][$x][3] = 0;
		};

		// Seta a opчуo escolhida
		$_SESSION[opcoes][$iOpcao][$iOpcao_checada][3] = 1;
	}

echo $_SESSION[opcoes][$iOpcao][$iOpcao_checada][3].' - '.$iPos;
return false;
?>