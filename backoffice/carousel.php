<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM banners");

?>

<?php require("components/header.php"); ?>

<main>
    <?php if(!empty($resultados)): ?>

    <div class="table-div">
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Subtitulo</th>
                <th>Data_atualização</th>
                <th>Ações</th>
            </tr>

            <?php foreach($resultados as $r): ?>
            <?php
                $subtitulo = $r["subtitulo"];
                if (strlen($subtitulo) > 100) {
                    $subtitulo = substr($subtitulo, 0, 100) . "...";
                }
            ?>
            <tr>
                <td> <img width="250" src="<?= $r["imagem"] ?>" alt="<?php $r["titulo"]?>"></td>
                <td> <?= $r["titulo"] ?></td>
                <td> <?= $subtitulo ?></td>
                <td> <?= $r["data_atualizacao"] ?></td>
                <td>
                    <form action="update.php" method="GET">
                        <button class="button-css" name="editar" value="<?= $r["id"] ?>">EDITAR</button>
                    </form>
                    <br>
                    <form action="delete.php" method="GET">
                        <button class="button-css" name="apagar" value="<?= $r["id"] ?>">APAGAR</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <form action="criar_banner.php" method="GET">
            <button type="submit" class="button-css-large criar">CRIAR NOVO BANNER</button>
        </form>
    </div>

    <?php endif; ?>
</main>

<?php require("components/footer.php"); ?>