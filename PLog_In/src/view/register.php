<?php
$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";
include MODEL . "/user.php";
include MODEL . "/database.php";

//Variável para validar se os dados
//foram enviados
$count = 0;

//Recebimento dos dados do formulário
if( isset($_POST["user"]) ) {
    $user = $_POST["user"];
    $count++;
} else {
    $user = null;
}

if( isset($_POST["email"]) ) {
    $email = $_POST["email"];
} else {
    $email = null;
}

if( isset($_POST["pass"]) ) {
    $pass = $_POST["pass"];
    $count++;
} else {
    $pass = null;
}

if($count >= 2) {
    //Instanciando classe Database
    $db = new Database();

    //Criptografando senha
    $passCripto = sha1($pass);

    //Chamando método para salvar no BD
    $db->insert(
        "INSERT INTO users(user_name, user_pass)
        VALUES ('$user', '$passCripto')"
    );

    //Mensagem de sucesso
    echo "<script>alert(Tudo feito Bro!!!)</script>";

    //Redirecionamento para index
    header("Refresh: 2; url = ".ROOT);
}

?>


    <div id="login">
        <h1 id="h1log">Cadastrar... Cadastrar... Cadastrar...</h1>
        <a href="<?= ROOT ?>" id="cadlog">Voltar para o inicio!</a>
        <br><br><br>
        <form action="#" method="post" onsubmit="return checkPass()">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Nome de usuario *" required>
                <br><br><br>
                <input type="password" onmouseover="showPass(this)" onmouseleave="hidePass(this)" name="pass" id="pass" class="login" placeholder="Senha *" required>
                <br><br><br>
                <input type="password" onmouseover="showPass(this)" onmouseleave="hidePass(this)" name="pass-confirm" id="pass-confirm" class="login" placeholder="Confirmação de senha *" required>
                <br><br><br>
                <span id="esqsenha">* Campos obrigatórios</span>
                <br>
            </div>
            <br><br>
            <input type="submit" value="Criar!!!" id="btnlog">
            <br>
        </form>        
    </div>
    <div id="login-img">
        <img src="<?=ASSETS?>/img/charmander.png" alt="Imagem" width="400">
    </div>

<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";