<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$form = isset($_GET["apagar"]);

if($form){
    $id = $_GET["apagar"];
    $livro_selecionado = selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
    if ($livro_selecionado !== false) {
        if (isset($_POST["confirmDelete"])) {
            iduSQL("DELETE FROM livros WHERE id='$id'");
            header("Location: livros.php");
            exit();
        } elseif (isset($_POST["cancelDelete"])) {
            header("Location: livros.php");
            exit();
        }
    } else {
        header("Location: livros.php");
        exit();
    }
}

?>

<?php require("components/header_simples.php") ?>

<main>
    <div class="div-css">
         <?php if ($livro_selecionado !== null) : ?>
            <h2>Deseja apagar <span style="color: #c5c6c7;"><?= $livro_selecionado["titulo"] ?></span> ?</h2>
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
