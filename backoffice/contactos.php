<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM contactos");

?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <form action="editar_contactos.php" method="get">
            <?php foreach($resultados as $r): ?>
            <h2>TELEFONE:</h2>
            <p><?= $r["telefone"] ?></p>
            <hr class="hr-contactos">
            <h2>MORADA:</h2>
            <p><?= $r["morada"] ?></p>
            <hr class="hr-contactos">
            <h2>EMAIL:</h2>
            <p class="hr-contactos"><?= $r["mail"] ?></p>
            <hr class="hr-contactos">
            <h2>HORÁRIO:</h2>
            <p><?= $r["horario"] ?></p>
            <hr class="hr-contactos">
            <?php endforeach; ?>
            <br><br>
            <input class="button-css-large" type="submit" value="EDITAR CONTACTOS">
        </form>
    </div>
</main>

<?php require("components/footer.php"); ?>