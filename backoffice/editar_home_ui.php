<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM home");

$form = isset($_GET["imagem"]) && isset($_GET["texto_ultimos_livros"]);

if($form){
    $imagem = $_GET["imagem"];
    $texto_ultimos_livros = $_GET["texto_ultimos_livros"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atualizacao = date("h:i:s - d/m/Y");

    iduSQL("UPDATE home SET link_imagem='$imagem', texto_ultimos_livros='$texto_ultimos_livros', ultima_atualizacao='$data_atualizacao'");

    header("Location: sucesso_editar.php");
    exit();


}

?>

<?php require("components/header_simples.php"); ?>

<main>
    <div class="div-css">
        <form action="" method="GET">
            <?php foreach($resultados as $r): ?>
            <h2>Editar <span style="color:#c5c6c7;">Home</span></h2>
            <br><br>
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" value="<?= $r["link_imagem"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" style="text-decoration: none;" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br>
            <textarea name="texto_ultimos_livros" id="editor_home"><?= $r["texto_ultimos_livros"] ?></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_home'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <br><br>
            <input type="submit" class="button-css" value="EDITAR">
            <?php endforeach; ?>
        </form>
    </div>
</main>

<?php require("components/footer.php"); ?>