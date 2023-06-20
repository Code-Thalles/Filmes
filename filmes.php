<?php
    include('protect.php');
    include('connection.php');

    $sqlFilmes = "SELECT * FROM conteudo ORDER BY id DESC";
    $resultFilmes = $mysqli->query($sqlFilmes);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/conteudo.css" type="text/css" media="screen">  
</head>
<body>
    <header>
        <h1>Yensid</h1>
    </header>

    <nav>
        <ul class="menu">
            <li><a href="#">Filmes</a></li>
            <li><a href="http://localhost/P2/series.php">Séries</a></li>
            <li><a href="logout.php">Sair</a></li>
            <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    echo "<li><a href='http://localhost/P2/adm/adm.php'>ADM</a></li>";
                }
            ?>
        </ul>
    </nav>

    <main class="container">
        <section class="products-container">
            <?php
                while($filme = $resultFilmes->fetch_assoc()){
                    echo "<div class='card'>";
                    echo "<h3>".$filme['nome']."</h3>";
                    echo "<div class='product-image'><img src='".$filme['imagem']."'></div>";
                    echo "<p><b>Lançamento: </b>".$filme['lancamento']."</p>";
                    echo "<a href='pag3.php?id=".$filme['id']."' class='btn'>Assistir</a>";
                    echo "</div>";
                }
            ?>
        </section>
    </main> 
</body>
</html>