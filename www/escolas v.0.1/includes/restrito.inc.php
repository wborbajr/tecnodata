<?php
/* restrito.php */
session_start();

if (isset($_SESSION['MeuLogin'])) {
    $login = $_SESSION['MeuLogin']['login'];
    $hora = $_SESSION['MeuLogin']['hora'];    

    $chave = "1a2cf8gk68gj67gf784kh69fo6"; // chave secreca
    $ip = $_SESSION['REMOTE_ADDR']; // pegando ip do usuario
    if ($_SESSION['MeuLogin']['chave'] != md5($login . $chave . $ip . $hora)) {
        // verificado se a chave � v�lida
        header("Location: index.php?erro=$login Login invalido");
    }

    // atualizando a chave com novo horario de acesso
    $hora = time();
    $chave = md5($login . $chave . $ip . $hora);
    // registrando os novos dados na session.
    $_SESSION['MeuLogin'] = array("id" => $idpes,"login" => $login,"chave" => $chave,"hora" => $hora);
} else {
    header("location: index.php?erro=Aceso restrito");
}
?> 