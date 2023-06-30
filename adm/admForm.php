<?php
    include('protect.php');
    include('protectAdm.php');

    include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/7926197/letter-y-clipart-md.png" type="image/x-icon">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/conteudo.css" type="text/css" media="screen">  
</head>
<body>
    <header>
        <h1>Yensid</h1>
    </header>

    <nav>
        <ul class="menu">
            <li><a href="http://localhost/Filmes/filmes.php">Filmes</a></li>
            <li><a href="http://localhost/Filmes/series.php">Séries</a></li>
            <li><a href="logout.php">Sair</a></li>
            <li><a href="http://localhost/Filmes/adm/adm.php">ADM</a></li>
        </ul>
    </nav>

    <form action="adm.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="imagem">Imagem:</label>
        <input type="text" id="imagem" name="imagem" required><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required><br>

        <label for="lancamento">Lançamento:</label>
        <input type="text" id="lancamento" name="lancamento" required><br>

        <label for="duracao">Duração:</label>
        <input type="text" id="duracao" name="duracao" required><br>

        <label for="sinopse">Sinopse:</label>
        <textarea id="sinopse" name="sinopse" required></textarea><br>

        <label for="trailer">Trailer:</label>
        <input type="text" id="trailer" name="trailer" required><br>

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>

