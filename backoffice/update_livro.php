<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$id = null;

$form = isset($_GET["editar"]);
$form2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

if($form){
    $id = $_GET["editar"];
    $livro_selecionado = selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
    if($form2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        
        date_default_timezone_set("Europe/Lisbon");
        $data_atualizacao = date("h:i:s - d/m/Y");

        iduSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto='$texto' , data_atualizacao='$data_atualizacao' WHERE id='$id'");
        header("Location: sucesso_editar.php");
        exit();
    }
}else{
    header("Location: carousel.php");
    exit();
}


?>
<?php require("components/header_simples.php") ?>
<main>

    <div class="div-css">
        <form action="" class="form-css">
            <h2 class="lista-h2">EDITAR: <br> <span style="color: #c5c6c7"><?= $livro_selecionado["titulo"]; ?></span> </h2>
            <br><br>
            <input class="input-update" type="hidden" name="editar" value="<?= $id; ?>">
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" value="<?= $livro_selecionado["imagem"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" style="text-decoration: none;" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br><br>
            <label for="titulo">Titulo:</label>
            <br>
            <input class="input-update" type="text" name="titulo" value="<?= $livro_selecionado["titulo"] ?>" required="required">
            <br><br>
            <label for="texto">Texto:</label>
            <br>
            <textarea name="texto" id="editor_livro"><?= $livro_selecionado["texto"] ?></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_livro'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <input type="submit" class="button-css-large" value="EDITAR BANNER">
        </form>
       
    </div>

</main>

<?php require("components/footer.php"); ?>