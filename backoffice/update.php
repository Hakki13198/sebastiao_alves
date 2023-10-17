<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$id = null;

$form = isset($_GET["editar"]);
$form2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]);

if($form){
    $id = $_GET["editar"];
    $banner_selecionado = selectSQLUnico("SELECT * FROM banners WHERE id='$id'");
    $livro_selecionado = selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
    if($form2){
        $imagem = $_GET["imagem"];
        $imagem_mobile = $_GET["imagem_mobile"];
        $titulo = $_GET["titulo"];
        $subtitulo = $_GET["subtitulo"];
        $link = $_GET["link"];
        $observacao = $_GET["observacao"];
        date_default_timezone_set("Europe/Lisbon");
        $data_atualizacao = date("h:i:s - d/m/Y");

        iduSQL("UPDATE banners SET imagem='$imagem', imagem_mobile='$imagem_mobile', titulo='$titulo', subtitulo='$subtitulo' , link='$link', data_atualizacao='$data_atualizacao', observacao='$observacao' WHERE id='$id'");
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
            <h2 class="lista-h2">EDITAR: <br> <span style="color: #c5c6c7"><?= $banner_selecionado["titulo"]; ?></span> </h2>
            <br><br>
            <input class="input-update" type="hidden" name="editar" value="<?= $id; ?>">
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" value="<?= $banner_selecionado["imagem"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" style="text-decoration: none;" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br>
            <label for="imagem_mobile">Imagem para Mobile:</label>
            <input class="input-update" type="text" name="imagem_mobile" value="<?= $banner_selecionado["imagem_mobile"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br><br>
            <label for="titulo">Titulo:</label>
            <br>
            <input class="input-update" type="text" name="titulo" value="<?= $banner_selecionado["titulo"] ?>" required="required">
            <br><br>
            <label for="subtitulo">Texto:</label>
            <br>
            <textarea name="subtitulo" id="editor"><?= $banner_selecionado["subtitulo"] ?></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <label for="link">Link para botão "Saber Mais":</label>
            <br>
            <input class="input-update" type="text" name="link" value="<?= $banner_selecionado["link"] ?>" required="required">
            <br><br>
            <label for="observacao">Observação para o Carousel:</label>
            <input class="input-update" type="text" name="observacao" value="<?= $banner_selecionado["observacao"]?>">
            <br><br>
            <input type="submit" class="button-css-large" value="EDITAR BANNER">
        </form>
       
    </div>

</main>

<?php require("components/footer.php"); ?>