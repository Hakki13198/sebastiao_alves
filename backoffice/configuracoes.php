<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$acessos = selectSQL("SELECT * FROM acessos");

$senha_atual = "";
$nova_senha = "";
$confirmar_senha = "";

$form = isset($_POST["senha_atual"]) && isset($_POST["nova_senha"]) && isset($_POST["confirmar_senha"]);

if($form) {

    $senha_atual = $_POST["senha_atual"];
    $nova_senha = $_POST["nova_senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    if(isset($_SESSION["password"])) {
        if($senha_atual == $_SESSION["password"]){

            if($nova_senha == $confirmar_senha){
                $id = $_SESSION["id"];
                $_SESSION["password"] = $nova_senha;
                iduSQL("UPDATE acessos SET password = '$nova_senha' WHERE id = $id");
                
                header("Location: home.php");
                exit();
            }   
        }else{
            echo "Senha atual incorreta";
        }
    }
}


?>

<?php require("components/header_simples.php") ?>

<main>
    <div class="div-css">
        <form action="" method="post">
            <h1>Alterar Senha</h1>
            <br><br>
            <label for="senha_atual">Senha Atual:</label>
            <br>
            <input class="input-update" type="password" name="senha_atual" required="required">
            <br><br>
            <label for="nova_senha">Nova Senha:</label>
            <br>
            <input class="input-update" type="password" name="nova_senha" required="required">
            <br><br>
            <label for="confirmar_senha">Confirmar Senha:</label>
            <br>
            <input class="input-update" type="password" name="confirmar_senha" required="required">
            <?php if($form && $senha_atual != $_SESSION["password"]): ?>
                <br><br>
                <h3 class="login-invalido">Password atual incorreta, tente novamente.</h3>
            <?php endif; ?>
            <?php if($form && $nova_senha != $confirmar_senha): ?>
                <br><br>
                <h3 class="login-invalido">Passwords não coincidem.</h3>
            <?php endif; ?>
            <br><br>
            <input class="button-css-large" type="submit" value="AlTERAR SENHA">
        </form>
        
    </div>

</main>

<?php require("components/footer.php"); ?>