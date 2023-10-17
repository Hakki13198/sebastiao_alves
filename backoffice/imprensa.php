<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM imprensa");

?>

<?php require("components/header.php"); ?>

<main>
    <?php if(!empty($resultados)): ?>

    <div class="table-div">
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Data Publicação</th>
                <th>Ações</th>
            </tr>

            <?php foreach($resultados as $r): ?>
            <?php
                $texto = $r["texto"];
                if (strlen($texto) > 100) {
                    $texto = substr($texto, 0, 100) . "...";
                }
            ?>
            <tr>
                <td> <img width="250" src="<?= $r["imagem"] ?>" alt="<?php $r["titulo"]?>"></td>
                <td> <?= $r["titulo"] ?></td>
                <td> <?= $texto ?></td>
                <td> <?= $r["data_publicacao"] ?></td>
                <td>
                    <form action="update_imprensa.php" method="GET">
                        <button class="button-css" name="editar" value="<?= $r["id"] ?>">EDITAR</button>
                    </form>
                    <br>
                    <form action="delete_imprensa.php" method="GET">
                        <button class="button-css" name="apagar" value="<?= $r["id"] ?>">APAGAR</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <form action="criar_imprensa.php" method="GET">
            <button type="submit" class="button-css-large criar">CRIAR NOVA PUBLICAÇÃO</button>
        </form>
    </div>

    <?php endif; ?>
</main>

<?php require("components/footer.php"); ?>