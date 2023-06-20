<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Entre na sua conta antes de acessar!<br><p><a href=\"http://localhost/P2/index.php\">Entrar</p>");
    }
?>