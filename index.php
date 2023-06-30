<?php
    include('connection.php');

    if(isset($_POST['submit'])){
        if(isset($_POST['login']) || isset($_POST['senha'])){
            if(strlen($_POST['login']) == 0){
                echo "Preencha o nome";
            }else if(strlen($_POST['senha']) == 0){
                echo "Preencha sua senha";
            } else{
                $login = $mysqli->real_escape_string($_POST['login']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $qtde = $sql_query->num_rows;

                if($qtde == 1){
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];

                    $papel = $usuario['papel'];
                    if ($papel == 'admin') {
                        $_SESSION['role'] = 'admin';
                    }

                    header("Location: filmes.php");
                }else{
                    echo "Falha ao logar! Login ou senha incorreta";
                }
            }
        }
    }

    if(isset($_POST["cadastro"])){
        header("Location: cadastro.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/7926197/letter-y-clipart-md.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" type="text/css" media="screen">  
</head>
<body>
    <header>
        <h1>Yensid</h1>
    </header>
    <form action="" method="POST">
        <div class="tela-login">
            <h1>Login</h1>
            <input type="text" placeholder="Login" name="login">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            
            <input type="submit" value="Entrar" name="submit" class="btn">
            <br><br>
            <input type="submit" value="Cadastrar" name="cadastro" class="btn">
        </div>
    </form>
</body>
</html>