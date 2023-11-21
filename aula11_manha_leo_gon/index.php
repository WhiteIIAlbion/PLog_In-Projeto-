<?php

//Importando cabeçalho
require_once "/xampp/htdocs/aula11_manha_leo_gon/src/controller/header.php";
//Importação de arquivos
require_once MODEL . "/user.php";

if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            //Caso o login retorne "true", inicializa-se o
            //gerenciamento de sessões
            session_start();
            //é apresentado um alert javascript
            echo "<script> alert('AUTENTICADO! ✅') </script>";
            //é criada uma sessão com os dados do objeto retornado
            $_SESSION["user"] = $user->getObject();
            //e então somos redirecionados para a pagina de perfil
            //var_dump($_SESSION["user"]);
            header("Refresh: 0; URL = ".VIEW." /profile.php");
        } else {
            echo "<script> alert('ACESSO NEGADO! ❌') </script>";
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
        <a href="<?= VIEW ?> /register.php">Cadastrar-se</a>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>