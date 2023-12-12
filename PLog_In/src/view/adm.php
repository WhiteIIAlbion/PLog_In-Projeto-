<?php
$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";
include MODEL . "/user.php";
include MODEL . "/database.php";
 
if(!isset($_SESSION["adm"])){
    header("location:".ROOT);
}
?>
<body id="bodyprofile">
        <button type="button" onclick="window.location.href='<?= ROOT ?>/src/controller/logout.php'" id="btnlog3">Desconectar!!!</button>
        <h1 id="titulo">Lista de usuários</h1>
        <form action="<?=ROOT?>/src/controller/status_change.php" method="get" onsubmit="return confirm('tem certeza que deseja salvar?')">
        <table>
        <thead>
            <tr>
                <th id="letras">Inativo</th>
                <th id="letras">Código</th>
                <th id="letras">Usuário</th>
                <th id="letras">Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $db = new Database();
            $list = $db->select(
                "SELECT * FROM users"    
            );

            foreach($list as $u):
            ?>
            
            <tr>
                <td>
                    <input type="checkbox"
                            name="status[]"
                            id="status"
                            value="<?= $u->user_cod ?>"
                            <?= ($u->user_status==1)?"checked":""?>
                            <?= ($u->user_profile==1)?"disabled":""?>
                            >
                </td>
                <td>
                    <?= $u->user_cod ?>
                </td>
                <td>
                    <?= $u->user_name ?>
                </td>
                <td>
                    <?= $u->user_phone ?>
                </td>
            </tr>

            <?php endforeach ?>
        </tbody>
        </table>

        <br><br>
        <input type="submit" value="Salvar" id="btnlog">
        <input type="reset" value="Restaurar" id="btnlog">

        </form>
</body>        
<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";