<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Entre na sua conta antes de acessar!<br><p><a href=\"index.php\">Entrar</p>");
    }
?>