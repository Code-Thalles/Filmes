<?php
    include_once('connection.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if($nome && $email && $telefone && $senha && $senha2 != ""){
            if($senha == $senha2){
                $result = mysqli_query($mysqli, "INSERT INTO usuarios(login, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')");
                header("Location: index.php");
            }else{
                echo "Erro! Senhas diferentes";
            }
        }else{
            echo "Há campo sem preencher!";
        }
    }else if(isset($_POST['login'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css" type="text/css" media="screen">  
</head>
<body>
    <header>
        <h1>Yensid</h1>
    </header>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser">
                    <label for="nome" class="labelInput">Login</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser">
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser">
                    <label for="telefone" class="labelInput">Telefone com DDD</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser">
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha2" id="senha2" class="inputUser">
                    <label for="senha2" class="labelInput">Repita a senha</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <input type="submit" value="Tela Login" name="login" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>