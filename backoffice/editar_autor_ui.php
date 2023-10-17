<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM autor");

$form = isset($_GET["imagem"]) && isset($_GET["texto_autor"]);

if($form){
    $imagem = $_GET["imagem"];
    $texto_autor = $_GET["texto_autor"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atualizacao = date("h:i:s - d/m/Y");

    iduSQL("UPDATE autor SET link_imagem='$imagem', texto_autor='$texto_autor', ultima_atualizacao='$data_atualizacao'");

    header("Location: sucesso_editar.php");
    exit();

}

?>

<?php require("components/header_simples.php"); ?>

<main>
    <div class="div-css">
        <form class="form-css" action="" method="GET">
            <?php foreach($resultados as $r): ?>
            <h2>Editar <span style="color:#c5c6c7;">Autor</span></h2>
            <br><br>
            <label for="imagem">Imagem:</label>
            <br>
            <input class="input-update" type="text" name="imagem" value="<?= $r["link_imagem"] ?>" required="required">
            <br><br>
            <a class="button-css-large" href="tinyfilemanager/tinyfilemanager.php" style="text-decoration: none;" target="_blank">
                ABRIR GESTOR DE FICHEIROS
            </a>
            <br>
            <textarea name="texto_autor" id="editor_autor"><?= $r["texto_autor"] ?></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor_autor'))
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