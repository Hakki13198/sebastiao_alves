<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM livros");

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $link = "http://localhost/sebastiao_alves/livro.php?id=";

    iduSQL("INSERT INTO livros (imagem, titulo, texto, link) VALUES ('$imagem', '$titulo', '$texto', '$link')");
    
    $lastInsertedId = $pdo->lastInsertId();
    $link .= $lastInsertedId;

    iduSQL("UPDATE livros SET link = '$link' WHERE id = $lastInsertedId");

    header("Location: livros.php");
    exit();
}


?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <form action="" class="form-css">
            <h2 class="lista-h2">CRIAR NOVO LIVRO:</h2>
            <br><br>
            <input class="input-update" type="hidden" name="editar" value="<?= $id; ?>">
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
            <label for="texto">Texto:</label>
            <br>
            <textarea name="texto" id="editor_criar_livro" ></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_criar_livro'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <input type="submit" class="button-css-large" value="CRIAR LIVRO">
        </form>
        
    </div>
</main>

<?php require("components/footer.php"); ?>