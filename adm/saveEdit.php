<?php
    include('protect.php');
    include('protectAdm.php');

    include_once('connection.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $imagem = $_POST['imagem'];
        $genero = $_POST['genero'];
        $lancamento = $_POST['lancamento'];
        $duracao = $_POST['duracao'];
        $sinopse = $_POST['sinopse'];
        $trailer = $_POST['trailer'];

        $sqlUpdate = "UPDATE conteudo SET nome='$nome', imagem='$imagem', genero='$genero', lancamento='$lancamento', duracao='$duracao', sinopse='$sinopse', trailer='$trailer'
        WHERE id='$id'";

        $result = $mysqli->query($sqlUpdate);
    }
    header('Location: adm.php');

?>