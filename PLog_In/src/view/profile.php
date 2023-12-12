<?php
$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";

//Importação dos arquivos que contém as classes User e Database
include MODEL . "/user.php";
include MODEL . "/database.php";

//Importando arquivo que verifica se a sessão está "desligada".
//Caso esteja, redireciona o usuário para a página de login
include CONTROLLER . "/session_off.php";

session_reset();

//Lançando dados da $_SESSION para uma variável
//simples, apenas para facilitar nossa vida
$u = $_SESSION["user"];
//var_dump( $u );

?>

<script>
    function callUpdate() {
       return confirm("Deseja atualizar os dados?")
    }
</script>
 <body id="bodyprofile">
    

    <form action="<?= ROOT ?>/src/controller/update_profile.php" method="post" onsubmit="return callUpdate()" enctype="multipart/form-data">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <tr><td><button type="button" onclick="window.location.href='<?= ROOT ?>/src/controller/logout.php'" id="btnlog2">Desconectar!!!</button></td><td></td><td colspan=3></td><td></td><td><br><br><img src="<?= ($u->getPhoto()==null) ? ASSETS."/img/profile/logotipo_poke.png" : $u->getPhoto() ?>" alt="Imagem do perfil" width="100"></td></tr>
            <!-- <tr> representa uma linha da tabela -->
            <tr> 
                <!-- <td> representa uma célula da linha (coluna) -->
                <td colspan=2><h1 id="titulo">Bem vindo <?= $u->getUser() ?>!!!</h1></td> 
                <td></td>
                
                <td>                    
                </td>
                <td></td>
                <td></td>
                <td><input type="file" name="photo" id="photo"></td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3 id="titulo">Dados pessoais:</h3>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="user" id="letras">Nome de usuário:</label>
                    <br>
                    <input type="text" name="user" id="user" value="<?= $u->getUser() ?>">
                </td>
                <td>
                    <label for="complete-name" id="letras">Nome Completo:</label>
                    <br>
                    <input type="text" name="complete-name" id="complete-name" value="<?= $u->getCompleteName() ?>">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="birth" id="letras">Data de nascimento:</label>
                    <br>
                    <input type="date" name="birth" id="birth" value="<?= $u->getBirth() ?>">
                    
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=4>
                    <label for="biography" id="letras">Biografia:</label>
                    <br>
                    <textarea name="biography" id="biography" cols="100" rows="3" placeholder="Fale sobre você" maxlength="255"><?= $u->getBiography() ?></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3 id="titulo">Localização:</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="address" id="letras">Endereço:</label>
                    <br>
                    <input type="text" name="address" id="address" value="<?= $u->getAddress() ?>">
                </td>
                <td>
                    <label for="number" id="letras">Número:</label>
                    <br>
                    <input type="number" name="number" id="number" value="<?= $u->getNumber() ?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="complement" id="letras">Complemento:</label>
                    <br>
                    <input type="text" name="complement" id="complement" value="<?= $u->getComplement() ?>">
                </td>
                <td>
                    <label for="neighborhood" id="letras">Bairro:</label>
                    <br>
                    <input type="text" name="neighborhood" id="neighborhood" value="<?= $u->getNeighborhood() ?>">
                </td>
                <td>
                    <label for="city" id="letras">Cidade:</label>
                    <br>
                    <input type="text" name="city" id="city" value="<?= $u->getCity() ?>">
                </td>
                <td>
                    <label for="state" id="letras">Estado:</label>
                    <br>

                    <?php
                    //Lançando dado do estado para variável
                    $uf = $u->getState();
                    ?>

                    <select id="state" name="state">

                    <?=
                    //Verificando se existe dados salvos no campo
                    //estado. Caso seja nulo, aparecerá "Selecione"
                        ($uf == null)
                        ? "<option value=''>Selecione</option>"
                        : "<option value='$uf'>$uf</option>"
                    ?>

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
            <!-- ///////// -->
            <!-- Subtítulo -->
            <tr>
                <td colspan=4>
                    <h3 id="titulo">Contatos:</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////// -->
            <tr>
                <td>
                    <label for="phone" id="letras">Telefone:</label>
                    <br>
                    <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{9}" value="<?= $u->getPhone() ?>">
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3 id="titulo">Senha:</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="new-pass" id="letras">Nova senha:</label>
                    <br>
                    <input type="password" name="new-pass" id="new-pass" class="show-pass">
                </td>
                <td>
                    <label for="confirm-pass" id="letras">Cofirmação de senha:</label>
                    <br>
                    <input type="password" name="confirm-pass" id="confirm-pass" class="show-pass">
                </td>
                <td id="show-pass">😎</td>
            </tr>
            <!-- Botões do formulário -->
            <tr>
                <td colspan=4>
                    <br>
                   <input type="submit" value="Salvar" name="submit" id="btnlog">
                   <input type="reset" value="Limpar" id="btnlog">
                </td>
            </tr>
            <!-- ///////////////////// -->
        </table>
    </form>
</body>

<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";
