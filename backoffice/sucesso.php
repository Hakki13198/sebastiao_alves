<?php

require_once("importacoes.php");
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
    
    <div class="div-css">
        <?php require("components/nav.php") ?>
    </div>
    
<main>
    <div class="div-css">
        <h3 class="lista-h2">
            Produto editado com sucesso!
        </h3>
        <a href="editar_produto.php">
            <button class="button-css">VOLTAR</button>
        </a>
    </div>

</main>

<?php require("components/footer.php"); ?>

</body>
</html>