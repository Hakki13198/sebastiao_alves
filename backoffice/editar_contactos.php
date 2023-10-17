<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM contactos");

$form = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["mail"]) && isset($_GET["horario"]);

if($form){
    $telefone = $_GET["telefone"];
    $morada = $_GET["morada"];
    $mail = $_GET["mail"];
    $horario = $_GET["horario"];

    iduSQL("UPDATE contactos SET telefone = '$telefone', morada = '$morada', mail = '$mail', horario = '$horario'");

    header("Location: sucesso_editar.php");
    exit();
}

?>

<?php require("components/header_simples.php"); ?>

<main>
    <div class="div-css">
        <form action="">
            <h2>Editar <span style="color: #c5c6c7">Contactos</span>:</h2>
            <br><br>
            <?php foreach($resultados as $r): ?>
            <label for="telefone">TELEFONE:</label>
            <br>
            <input class="input-update" type="text" name="telefone" id="telefone" value="<?= $r["telefone"] ?>">
            <br><br>
            <label for="morada">MORADA:</label>
            <br>
            <input class="input-update" type="text" name="morada" id="morada" value="<?= $r["morada"] ?>">
            <br><br>
            <label for="mail">EMAIL:</label>
            <br>
            <input class="input-update" type="text" name="mail" id="mail" value="<?= $r["mail"] ?>">
            <br><br>
            <label for="horario">HORÁRIO:</label>
            <br>
            <input class="input-update" type="text" name="horario" id="horario" value="<?= $r["horario"] ?>">
            <br><br>
            <input class="button-css-large" type="submit" value="EDITAR CONTACTOS">
            <?php endforeach; ?>

        </form>
    </div>
</main>


<?php require("components/footer.php"); ?>