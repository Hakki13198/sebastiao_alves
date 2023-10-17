<?php

require_once("importacoes_backend.php");

verificarEstaLogado();


?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <h2>Bem vindo(a) <?= $_SESSION["user"]["nome"] ?> <?= $_SESSION["user"]["apelido"] ?>!</h2>
    </div>
    <div class="div-css">
        <h2>Guia para criação de Livros/Banners:</h2>
        <ol class="ol-guia">
            <li>Criar um Livro na tab Livros</li>
            <li>Criar um banner na tab Carousel</li>
        </ol>
        <br>
        <a class="button-css-large" href="livros.php">CRIAR UM LIVRO</a>
    </div>
</main>

<?php require("components/footer.php"); ?>