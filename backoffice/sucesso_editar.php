<?php

require_once("importacoes_backend.php");
verificarEstaLogado();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php require("components/header_simples.php") ?>

<main>
    <div class="div-css">
        <h3 class="sucesso">
            Edição feita com sucesso!
        </h3>
        <br>
        <a href="home.php">
            <button class="button-css">VOLTAR</button>
        </a>
    </div>

</main>

<?php require("components/footer.php"); ?>

</body>
</html>