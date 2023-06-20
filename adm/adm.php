<?php
    include('protect.php');
    include('protectAdm.php');

    include_once('connection.php');
    if(isset($_POST['submit'])){
        $sql = "SELECT COUNT(*) AS total_items FROM conteudo";
        $result = $mysqli->query($sql);
        if($result){
            $id = $result->fetch_assoc();
        }

        $nome = $_POST['nome'];
        $imagem = $_POST['imagem'];
        $genero = $_POST['genero'];
        $lancamento = $_POST['lancamento'];
        $duracao = $_POST['duracao'];
        $sinopse = $_POST['sinopse'];
        $trailer = $_POST['trailer'];

        if($nome && $imagem && $genero && $lancamento && $sinopse && $duracao && $trailer != ""){
            $resultado = mysqli_query($mysqli, "INSERT INTO conteudo(id, nome, imagem, genero, lancamento, duracao, sinopse, trailer) VALUES ('$id', '$nome', '$imagem', '$genero', '$lancamento', '$duracao', '$sinopse', '$trailer')");
            header("Location: ../filmes.php");
        }else{
            echo "Há campo sem preencher!";
        }
    }

    $sqlconteudo = "SELECT * FROM conteudo ORDER BY id DESC";
    $resultconteudo = $mysqli->query($sqlconteudo);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/conteudo.css" type="text/css" media="screen">  
</head>
<body>
    <header>
        <h1>Yensid</h1>
    </header>

    <nav>
        <ul class="menu">
            <li><a href="http://localhost/P2/filmes.php">Filmes</a></li>
            <li><a href="http://localhost/P2/series.php">Séries</a></li>
            <li><a href="logout.php">Sair</a></li>
            <li><a href="#">ADM</a></li>
        </ul>
    </nav>

    <br>

    <div>
        <table class="table-bg">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Lancamento</th>
                    <th scope="col">Duracao</th>
                    <th scope="col">Sinopse</th>
                    <th scope="col">Trailer</th>
                    <th scope="col">...</th>
                </tr>
            </thhead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resultconteudo)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['imagem']."</td>";
                        echo "<td>".$user_data['genero']."</td>";
                        echo "<td>".$user_data['lancamento']."</td>";
                        echo "<td>".$user_data['duracao']."</td>";
                        echo "<td>".$user_data['sinopse']."</td>";
                        echo "<td>".$user_data['trailer']."</td>";
                        echo "<td>
                            <a class='editar' href='admEdit.php?id=$user_data[id]'>
                               <img src='../img/Edit.png'>
                            </a>
                            <a class='editar' href='delete.php?id=$user_data[id]'>
                               <img src='../img/Delete.png'>
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="adcForm">
        <a href="admForm.php" class="btn" id="form">Adicionar</a>
    </div>
</body>