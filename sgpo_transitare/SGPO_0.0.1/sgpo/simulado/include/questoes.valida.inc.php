<?
	session_start();

	$iOpcao			= $_POST['iPos'];
	$iOpcao_checada = $_POST['iOpcao_checada'];

    // Grava a op��o selecionada para posterior restaura��o
    if (isset($iOpcao_checada)) {
		// Seta a op��o escolhida
	    $_SESSION[questao][$iOpcao][3] = $iOpcao_checada;

	};

?>