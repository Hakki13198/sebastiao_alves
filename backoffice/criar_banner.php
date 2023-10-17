<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM banners");
$livros = selectSQL("SELECT * FROM livros");

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]);

if($form){
    $imagem = $_GET["imagem"];
    $imagem_mobile = $_GET["imagem_mobile"];
    $titulo = $_GET["titulo"];
    $subtitulo = $_GET["subtitulo"];
    $link = $_GET["link"];
    $observacao = $_GET["observacao"];

    iduSQL("INSERT INTO banners (imagem, titulo, subtitulo, link, imagem_mobile, observacao) VALUES ('$imagem', '$titulo', '$subtitulo', '$link', '$imagem_mobile', '$observacao')");
    
    header("Location: carousel.php");
    exit();
}

$lastId = null;
foreach ($livros as $l) {
    $newId = $l["id"];
    $link_banner = $l["link"];
}


?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <form action="" class="form-css">
            <h2 class="lista-h2">CRIAR NOVO BANNER:</h2>
            <br><br>
            <input class="input-update" type="hidden" name="editar" value="<?= $id; ?>">
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" target="_blank">
                Abrir Gestor de Ficheiros
            </a>
            <br><br>
            <label for="imagem_mobile">Imagem para Mobile:</label>
            <input class="input-update" type="text" name="imagem_mobile" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" target="_blank">
                Abrir Gestor de Ficheiros
            </a>
            <br>
            <label for="titulo">Titulo:</label>
            <br>
            <input class="input-update" type="text" name="titulo" required="required">
            <br><br>
            <label for="subtitulo">Subtitulo:</label>
            <br>
            <textarea name="subtitulo" id="editor" ></textarea>
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
                <input class="input-update" type="text" name="link" 
                value="<?= $link_banner ?>">
                <br><br>
            <label for="observacao">Observação para o Carousel:</label>
            <input class="input-update" type="text" name="observacao">
            <br><br>
            <input type="submit" class="button-css-large" value="CRIAR BANNER">
        </form>
        
    </div>
</main>

<?php require("components/footer.php"); ?>