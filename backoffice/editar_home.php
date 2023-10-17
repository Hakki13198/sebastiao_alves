<?php

require_once("importacoes_backend.php");

verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM home");

?>

<?php require("components/header.php"); ?>

<main>
    <div class="div-css">
        <?php if(!empty($resultados)): ?>
            <?php foreach($resultados as $r): ?> 
                
                <form action="editar_home_ui.php" method="get">   
                    <h2>Imagem do autor da página <span style="color: #c5c6c7">Home</span></h2>
                    <br>
                    <img src="<?= $r["link_imagem"] ?>" alt="imagem_autor">
                    <hr class="hr-backoffice-home">
                    <h2>Texto do "Últimos Livros" da página <span style="color: #c5c6c7">Home</span></h2>
                    <p class="ultimos-livros-p"><?= $r["texto_ultimos_livros"] ?></p>
                    <hr class="hr-backoffice-home">
                    <button class="button-css-large" type="submit">EDITAR HOME</button>
                </form>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php require("components/footer.php"); ?>