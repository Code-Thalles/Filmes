<?php
    include('protect.php');
    include('protectAdm.php');

    include_once('connection.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM conteudo WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM conteudo WHERE id=$id";
            $resultDelete = $mysqli->query($sqlDelete);
            header('Location: adm.php');
        }else{
            header('Location: adm.php');
        }
    }else{
        header('Location: adm.php');
    }
?>