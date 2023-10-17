<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM imprensa");

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_publicacao"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $data_publicacao = $_GET["data_publicacao"];

    iduSQL("INSERT INTO imprensa (imagem, titulo, texto, data_publicacao) VALUES ('$imagem', '$titulo', '$texto', '$data_publicacao')");
    
    header("Location: imprensa.php");
    exit();
}

?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <form action="" class="form-css">
            <h2 class="lista-h2">CRIAR NOVA PUBLICAÇÃO:</h2>
            <br><br>
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" required="required">
            <br>
            <a href="tinyfilemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="btn btn-primary">Abrir Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="titulo">Titulo:</label>
            <br>
            <input class="input-update" type="text" name="titulo" required="required">
            <br><br>
            <label for="texto">Texto da Imprensa:</label>
            <br>
            <textarea name="texto" id="editor_imprensa" ></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_imprensa'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <label for="data_publicacao">Data de publicação:</label>
            <br>
            <input class="input-update" type="text" name="data_publicacao" value="PUBLICADO A " required="required">
            <input type="submit" class="button-css-large" value="CRIAR PUBLICAÇÃO">
        </form>
        
    </div>
</main>

<?php require("components/footer.php"); ?>