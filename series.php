<?php
    include('protect.php');
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
            <li><a href="http://localhost/Filmes/filmes.php">Filmes</a></li>
            <li><a href="#">Séries</a></li>
            <li><a href="logout.php">Sair</a></li>
            <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    echo "<li><a href='http://localhost/Filmes/adm/adm.php'>ADM</a></li>";
                }
            ?>
        </ul>
    </nav>

    <main class="container">
        <section class="products-container">
            <div class="card">
                    <h3>Breaking Bad</h2>
                    <div class="product-image"><img src='img/breaking.jpg'></div>
                    <p><b>Lançamento: </b>2023</p>
                    <a href="#" class="btn">Assistir</a>
            </div>
        </section>
    </main> 
</body>
</html>