<?php
//Importação de arquivos
require_once "/xampp/htdocs/PLog_In/src/controller/header.php";
require_once MODEL . "/user.php";
require_once MODEL . "/database.php";

$db = new Database();
$query = "SELECT * FROM users";
$result = $db->select($query);  

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
            $_SESSION["user"] = $user->getObject();
            header("Refresh: 0; URL = ".VIEW."/profile.php");
        } else {    
            echo "<script> alert('Deu merda bro! ❌') </script>";
        }
    }
    
?>

<div id="login">
        <img src="./assets/img/logotipo.png" alt="Imagem" width="150">
        <h1>Login</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Usuário">
                <br><br>
                <input type="password" name="pass" id="pass" class="login" placeholder="Senha">
                <br><br>
                <a href="#">Esqueci a senha</a>
            </div>
            <br><hr><br>
            <input type="submit" value="Entrar 🚪">
            <br>
        </form>
        <a href="<?= VIEW ?>/register.php">Cadastrar-se</a>
    </div>

<?php

require_once "/xampp/htdocs/PLog_In/src/controller/footer.php";

?>