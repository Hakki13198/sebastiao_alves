<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$form = isset($_GET["apagar"]);

if($form){
    $id = $_GET["apagar"];
    $publicacao_selecionada = selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
    if ($publicacao_selecionada !== false) {
        if (isset($_POST["confirmDelete"])) {
            iduSQL("DELETE FROM imprensa WHERE id='$id'");
            header("Location: imprensa.php");
            exit();
        } elseif (isset($_POST["cancelDelete"])) {
            header("Location: imprensa.php");
            exit();
        }
    } else {
        header("Location: imprensa.php");
        exit();
    }
}

?>

<?php require("components/header_simples.php") ?>

<main>
    <div class="div-css">
         <?php if ($publicacao_selecionada !== null) : ?>
            <h2>Deseja apagar <span style="color: #c5c6c7;"><?= $publicacao_selecionada["titulo"] ?></span> ?</h2>
            <br><br>
            <form action="" method="POST">
                <input class="button-css" type="submit" name="confirmDelete" value="SIM">
                <input class="button-css" type="submit" name="cancelDelete" value="NÃO">
            </form>
        <?php else : ?>
            <h2>Livro não encontrado.</h2>
        <?php endif; ?>
    </div>
    
    
</main>
    
<?php require("components/footer.php"); ?>
