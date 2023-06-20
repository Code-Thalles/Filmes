<?php
    include('protect.php');
    include('connection.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM conteudo WHERE id = '$id'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $filme = $result->fetch_assoc();
            $genero = $filme['genero'];
            $lancamento = $filme['lancamento'];
            $duracao = $filme['duracao'];
            $sinopse = $filme['sinopse'];
            $trailer = $filme['trailer'];
        } else {
            echo "ID não encontrado.";
        }
    } else {
        echo "ID não fornecido.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="css/conteudo.css" type="text/css" media="screen">  
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
            <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    echo "<li><a href='http://localhost/P2/adm/adm.php'>ADM</a></li>";
                }
            ?>
        </ul>
</nav>

    <div class="container">
        <?php 
            if (isset($genero) && isset($lancamento) && isset($sinopse)) { ?>
                <h3>Gênero</h3>
                <h4><?php echo $genero; ?></h4>
                <br>
                <h3>Lançamento:</h3>
                <h4><?php echo $lancamento; ?></h4>
                <br>
                <h3>Duração:</h3>
                <h4><?php echo $duracao; ?></h4>
                <br>
                <h3>Sinopse</h3>
                <h4><?php echo $sinopse; ?></h4><br>
                <div class="video-container">
                    <?php echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$trailer' frameborder='0' allowfullscreen></iframe>"; ?>
                </div>
        <?php } ?>
    </div>
</body>
</html>