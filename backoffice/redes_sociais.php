<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM redes_sociais");

?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <form action="editar_redes_sociais.php" method="get">
            <?php foreach($resultados as $r): ?>
            <h2>Instagram:</h2>
            <p><?= $r["instagram"] ?></p>
            <hr class="hr-contactos">
            <h2>Facebook:</h2>
            <p><?= $r["facebook"] ?></p>
            <hr class="hr-contactos">
            <h2>Linkedin:</h2>
            <p class="hr-contactos"><?= $r["linkedin"] ?></p>
            <hr class="hr-contactos">
            <?php endforeach; ?>
            <br><br>
            <input class="button-css-large" type="submit" value="EDITAR REDES SOCIAIS">
        </form>
    </div>
</main>

<?php require("components/footer.php"); ?>