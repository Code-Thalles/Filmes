<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['role'])){
        die("Você não é administrador!<br><p><a href=\"http://localhost/Filmes/filmes.php\">Página Inicial</p>");
    }
?>