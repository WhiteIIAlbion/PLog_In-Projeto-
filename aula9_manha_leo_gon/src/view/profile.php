<?php
require "/xampp/htdocs/aula9_manha_leo_gon/const.php";

//Recebendo os dados do formulário
if(isset($_GET["photo"])) {

    $photo = $_GET["photo"];

} else {

    $photo = null;

}

if(isset($_GET["user"])) {

    $user = $_GET["user"];

} else {

    $user = null;

}

if(isset($_GET["birth"])) {

    $birth = $_GET["birth"];

} else {

    $birth = null;

}

if(isset($_GET["first_name"])) {

    $first_name = $_GET["first_name"];

} else {

    $first_name = null;

}

if(isset($_GET["last_name"])) {

    $last_name = $_GET["last_name"];

} else {

    $last_name = null;

}

if(isset($_GET["desc"])) {

    $desc = $_GET["desc"];

} else {

    $desc = null;

}

if(isset($_GET["cep"])) {

    $cep = $_GET["cep"];

} else {

    $cep = null;

}

if(isset($_GET["address"])) {

    $address = $_GET["address"];

} else {

    $address = null;

}

if(isset($_GET["number"])) {

    $number = $_GET["number"];

} else {

    $number = null;

}

if(isset($_GET["complement"])) {

    $complement = $_GET["complement"];

} else {

    $complement = null;

}

if(isset($_GET["neighborhood"])) {

    $neighborhood = $_GET["neighborhood"];

} else {

    $neighborhood = null;

}

if(isset($_GET["city"])) {

    $city = $_GET["city"];

} else {

    $city = null;

}

if(isset($_GET["state"])) {

    $state = $_GET["state"];

} else {

    $state = null;

}

if(isset($_GET["sex"])) {

    $sex = $_GET["sex"];

} else {

    $sex = null;

}

if(isset($_GET["phone"])) {

    $phone = $_GET["phone"];

} else {

    $phone = null;

}

if(isset($_GET["email"])) {

    $email = $_GET["email"];

} else {

    $email = null;

}

if(isset($_GET["notify"])) {

    $notify = $_GET["notify"];

} else {

    $notify = null;

}

if(isset($_GET["actual_pass"])) {

    $actual_pass = $_GET["actual_pass"];

} else {

    $actual_pass = null;

}

if(isset($_GET["new_pass"])) {

    $new_pass = $_GET["new_pass"];

} else {

    $new_pass = null;

}

if(isset($_GET["confirm_pass"])) {

    $confirm_pass = $_GET["confirm_pass"];

} else {

    $confirm_pass = null;

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
    <link rel="shortcut icon" href="/aula9_manha_leo_gon/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/aula9_manha_leo_gon/assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <form action="#" method="get">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <!-- <tr> representa uma linha da tabela -->
            <tr> 
                <!-- <td> representa uma célula da linha (coluna) -->
                <td><h1>Perfil</h1></td> 
                <td width="200px"></td>
                <td></td>
                
                <td>
                    <img src="/aula9_manha_leo_gon/assets/img/logotipo.png" alt="Imagem do perfil" width="100">
                    <br>
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=5>
                    <h3>Dados pessoais</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="user">Nome de usuário</label>
                    <br>
                    <input type="text" name="user" id="user">
                </td>
                <td>
                    <label for="birth">Data de nascimento</label>
                    <br>
                    <input type="date" name="birth" id="birth">
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="first_name">Nome</label>
                    <br>
                    <input type="text" name="first_name" id="first_name">
                </td>
                <td>
                    <label for="last_name">Sobrenome</label>
                    <br>
                    <input type="text" name="last_name" id="last_name">
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=5>
                    <label for="desc">Descrição (bio)</label>
                    <br>
                    <textarea name="desc" id="desc" cols="100" rows="3" placeholder="Fale sobre você" maxlength="255"></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=5>
                    <h3>Endereço</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="cep">Cep</label>
                    <br>
                    <input type="number" name="cep" id="cep">
                </td>
                <td>
                    <label for="address">Endereço</label>
                    <br>
                    <input type="text" name="address" id="address">
                </td>
                <td>
                    <label for="number">Número</label>
                    <br>
                    <input type="number" name="number" id="number">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="complement">Complemento</label>
                    <br>
                    <input type="text" name="complement" id="complement">
                </td>
                <td>
                    <label for="neighborhood">Bairro</label>
                    <br>
                    <input type="text" name="neighborhood" id="neighborhood">
                </td>
                <td>
                    <label for="city">Cidade</label>
                    <br>
                    <input type="text" name="city" id="city">
                </td>
                <td>
                    <label for="state">Estado</label>
                    <br>
                    <select id="state" name="state">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=5>
                    <h3>Sexo</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////// -->
            <tr>
                <td>
                    <input type="radio" name="sex" id="male" value="male">
                    <label for="male">Masculino</label>
                </td>
                <td>
                    <input type="radio" name="sex" id="female" value="female">
                    <label for="female">Feminino</label>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=5>
                    <h3>Contatos</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////// -->
            <tr>
                <td>
                    <label for="phone">Telefone</label>
                    <br>
                    <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{9}">
                </td>
                <td>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email">
                </td>
                <td colspan=2>
                    <input type="checkbox" name="notify" id="notify" value="yes">
                    <label for="notify">Desejo receber notificações</label>
                </td>
                <td></td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=5>
                    <h3>Senha</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="actual_pass">Senha atual</label>
                    <br>
                    <input type="password" name="actual_pass" id="actual_pass">
                </td>
                <td>
                    <label for="new_pass">Nova senha</label>
                    <br>
                    <input type="password" name="new_pass" id="new_pass">
                </td>
                <td>
                    <label for="confirm_pass">Cofirmação de senha</label>
                    <br>
                    <input type="password" name="confirm_pass" id="confirm_pass">
                </td>
                <td></td>
                <td></td>
            </tr>
            <!-- Botões do formulário -->
            <tr>
                <td colspan=5>
                    <br>
                   <input type="submit" value="Salvar">
                   <input type="reset" value="Limpar">
                </td>
            </tr>
            <!-- ///////////////////// -->
        </table>
    </form>
</body>
</html> 