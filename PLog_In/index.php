<?php
//Importação de arquivos
require_once "./const.php";
require_once "./src/model/user.php";

if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            echo "<script> alert('Tudo certo, Meu Consagrado! ✅') </script>";
            header("Refresh: 0; URL = /PLog_In/src/view/profile.php");
        } else {    
            echo "<script> alert('Deu merda bro! ❌') </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= DESCRIPTION ?>">
    <meta name="keywords" content="<?= KEYWORDS ?>">
    <meta name="author" content="<?= AUTHOR ?>">
    <link rel="shortcut icon" href="./assets/img/coroa_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <div id="login">
        <img src="./assets/img/login_favicon.jpg" alt="Imagem" width="150">
        <h1>Logar ou não logar, Eis a questão!</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Usuário">
                <br><br>
                <input type="password" name="pass" id="pass" class="login" placeholder="Senha">
                <a href="#" onclick="change()"><img src="./assets/img/senhalocked.png" id="senhalock" alt="Olho Fechado"  width="20"/></a></a>
                <br><br>
                <a href="#">Deu alzheimer na senha!</a>
            </div>
            <br><hr><br>
            <input type="submit" value="Bora!!! ">
            <br>
        </form>
        <a href="#">A conta do zero por favor!</a>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>