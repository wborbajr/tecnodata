<?
	session_start();

	$iOpcao			= $_POST['iPos'];
	$iOpcao_checada = $_POST['iOpcao_checada'];

    // Grava a opчуo selecionada para posterior restauraчуo
    if (isset($iOpcao_checada)) {
		// Seta a opчуo escolhida
	    $_SESSION[questao][$iOpcao][3] = $iOpcao_checada;

	};

?>