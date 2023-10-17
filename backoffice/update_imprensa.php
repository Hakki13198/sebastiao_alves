<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$id = null;

$form = isset($_GET["editar"]);
$form2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

if($form){
    $id = $_GET["editar"];
    $publicacao_selecionada = selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
    if($form2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];

        iduSQL("UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE id='$id'");
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
            <h2 class="lista-h2">EDITAR: <br> <span style="color: #c5c6c7"><?= $publicacao_selecionada["titulo"]; ?></span> </h2>
            <br><br>
            <input class="input-update" type="hidden" name="editar" value="<?= $id; ?>">
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" value="<?= $publicacao_selecionada["imagem"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" style="text-decoration: none;" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br><br>
            <label for="titulo">Titulo:</label>
            <br>
            <input class="input-update" type="text" name="titulo" value="<?= $publicacao_selecionada["titulo"] ?>" required="required">
            <br><br>
            <label for="texto">Texto:</label>
            <br>
            <textarea name="texto" id="editor_livro"><?= $publicacao_selecionada["texto"] ?></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_livro'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <label for="data_publicacao">Data Publicação:</label>
            <br>
            <input class="input-update" type="text" name="data_publicacao" value="<?= $publicacao_selecionada["data_publicacao"] ?>" required="required">
            <br><br>
            <input type="submit" class="button-css-large" value="EDITAR PUBLICAÇÃO">
        </form>
       
    </div>

</main>

<?php require("components/footer.php"); ?>