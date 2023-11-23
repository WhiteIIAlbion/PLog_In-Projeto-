<?php
//Importação do cabeçalho
include "/xampp/htdocs/aula12_manha_leo_gon/src/controller/header.php";

include MODEL . "/user.php";

//Recebendo os dados do formulário
if( isset($_GET["photo"]) ) {
    $photo = $_GET["photo"];
} else {
    $photo = null;
}

if( isset($_GET["user"]) ) {
    $user = $_GET["user"];
} else {
    $user = null;
}

if( isset($_GET["birth"]) ) {
    $birth = $_GET["birth"];
} else {
    $birth = null;
}

if( isset($_GET["first-name"]) ) {
    $firstName = $_GET["first-name"];
} else {
    $firstName = null;
}

if( isset($_GET["last-name"]) ) {
    $lastName = $_GET["last-name"];
} else {
    $lastName = null;
}

if( isset($_GET["desc"]) ) {
    $desc = $_GET["desc"];
} else {
    $desc = null;
}

if( isset($_GET["cep"]) ) {
    $cep = $_GET["cep"];
} else {
    $cep = null;
}

if( isset($_GET["address"]) ) {
    $address = $_GET["address"];
} else {
    $address = null;
}

if( isset($_GET["number"]) ) {
    $number = $_GET["number"];
} else {
    $number = null;
}

if( isset($_GET["complement"]) ) {
    $complement = $_GET["complement"];
} else {
    $complement = null;
}

if( isset($_GET["neighborhood"]) ) {
    $neighborhood = $_GET["neighborhood"];
} else {
    $neighborhood = null;
}

if( isset($_GET["city"]) ) {
    $city = $_GET["city"];
} else {
    $city = null;
}

if( isset($_GET["state"]) ) {
    $state = $_GET["state"];
} else {
    $state = null;
}

if( isset($_GET["sex"]) ) {
    $sex = $_GET["sex"];
} else {
    $sex = null;
}

if( isset($_GET["phone"]) ) {
    $phone = $_GET["phone"];
} else {
    $phone = null;
}

if( isset($_GET["email"]) ) {
    $email = $_GET["email"];
} else {
    $email = null;
}

if( isset($_GET["notify"]) ) {
    $notify = $_GET["notify"];
} else {
    $notify = null;
}

if( isset($_GET["actual-pass"]) ) {
    $actualPass = $_GET["actual-pass"];
} else {
    $actualPass = null;
}

if( isset($_GET["new-pass"]) ) {
    $newPass = $_GET["new-pass"];
} else {
    $newPass = null;
}
?>

    <form action="#" method="get">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <!-- <tr> representa uma linha da tabela -->
            <tr> 
                <!-- <td> representa uma célula da linha (coluna) -->
                <td colspan=2><h1>Bem vindo(a) <?= $_SESSION["user"]->getUser() ?></h1></td> 
                <td></td>
                
                <td>
                    <img src="<?= $_SESSION["user"]->getPhoto() ?>" alt="Imagem do perfil" width="100">
                    <br>
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Dados pessoais</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="user">Nome de usuário</label>
                    <br>
                    <input type="text" name="user" id="user" value="<?= $_SESSION["user"]->getUser() ?>">
                </td>
                <td>
                    <label for="birth">Data de nascimento</label>
                    <br>
                    <input type="date" name="birth" id="birth">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="first-name">Nome</label>
                    <br>
                    <input type="text" name="first-name" id="first-name">
                </td>
                <td>
                    <label for="last-name">Sobrenome</label>
                    <br>
                    <input type="text" name="last-name" id="last-name">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=4>
                    <label for="desc">Descrição (bio)</label>
                    <br>
                    <textarea name="desc" id="desc" cols="100" rows="3" placeholder="Fale sobre você" maxlength="255"></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
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
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=4>
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
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=4>
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
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Senha</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="actual-pass">Senha atual</label>
                    <br>
                    <input type="password" name="actual-pass" id="actual-pass" class="show-pass" value="<?= $_SESSION["user"]->getPass() ?>">
                </td>
                <td>
                    <label for="new-pass">Nova senha</label>
                    <br>
                    <input type="password" name="new-pass" id="new-pass" class="show-pass">
                </td>
                <td>
                    <label for="confirm-pass">Cofirmação de senha</label>
                    <br>
                    <input type="password" name="confirm-pass" id="confirm-pass" class="show-pass">
                </td>
                <td id="show-pass">😲</td>
            </tr>
            <!-- Botões do formulário -->
            <tr>
                <td colspan=4>
                    <br>
                   <input type="submit" value="Salvar">
                   <input type="reset" value="Limpar">
                </td>
            </tr>
            <!-- ///////////////////// -->
        </table>
    </form>

<?php
//Importação do rodapé
include "/xampp/htdocs/aula12_manha_leo_gon/src/controller/footer.php";
