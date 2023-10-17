<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM redes_sociais");

$form = isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]) ;

if($form){
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];

    iduSQL("UPDATE redes_sociais SET instagram = '$instagram', facebook = '$facebook', linkedin = '$linkedin'");

    header("Location: sucesso_editar.php");
    exit();
}

?>

<?php require("components/header_simples.php"); ?>

<main>
    <div class="div-css">
        <form action="">
            <h2>Editar <span style="color: #c5c6c7">Redes Sociais</span>:</h2>
            <br><br>
            <?php foreach($resultados as $r): ?>
            <label for="instagram">Instagram:</label>
            <br>
            <input class="input-update" type="text" name="instagram" id="instagram" value="<?= $r["instagram"] ?>">
            <br><br>
            <label for="facebook">Facebook:</label>
            <br>
            <input class="input-update" type="text" name="facebook" id="facebook" value="<?= $r["facebook"] ?>">
            <br><br>
            <label for="linkedin">Linkedin:</label>
            <br>
            <input class="input-update" type="text" name="linkedin" id="linkedin" value="<?= $r["linkedin"] ?>">
            <br><br>
            <input class="button-css-large" type="submit" value="EDITAR REDES SOCIAIS">
            <?php endforeach; ?>

        </form>
    </div>
</main>


<?php require("components/footer.php"); ?>