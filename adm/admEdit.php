<?php
    include('protect.php');
    include('protectAdm.php');

    include_once('connection.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM conteudo WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $imagem = $user_data['imagem'];
                $genero = $user_data['genero'];
                $lancamento = $user_data['lancamento'];
                $duracao = $user_data['duracao'];
                $sinopse = $user_data['sinopse'];
                $trailer = $user_data['trailer'];
            }
            
        }else{
            header('Location: adm.php');
        }
    }else{
        header('Location: adm.php');
    }
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
            <li><a href="http://localhost/P2/adm.php">ADM</a></li>
        </ul>
    </nav>

    <form action="saveEdit.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required><br>

        <label for="imagem">Imagem:</label>
        <input type="text" id="imagem" name="imagem" value="<?php echo $imagem ?>" required><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="<?php echo $genero ?>" required><br>

        <label for="lancamento">Lançamento:</label>
        <input type="text" id="lancamento" name="lancamento" value="<?php echo $lancamento ?>" required><br>

        <label for="duracao">Duracao:</label>
        <input type="text" id="duracao" name="duracao" value="<?php echo $duracao ?>" required><br>
        
        <label for="sinopse">Sinopse:</label>
        <input type="text" id="sinopse" name="sinopse" value="<?php echo $sinopse ?>" required><br>

        <label for="trailer">Trailer:</label>
        <input type="text" id="trailer" name="trailer" value="<?php echo $trailer ?>" required><br>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="update">
    </form>
</body>
</html>

