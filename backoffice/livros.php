<?php

require_once("importacoes_backend.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM livros");

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
                <th>Data_atualização</th>
                <th>Link</th>
                <th>Ações</th>
            </tr>

            <?php foreach($resultados as $r): ?>
            <?php
                $texto = $r["texto"];
                if (strlen($texto) > 100) {
                    $texto = substr($texto, 0, 300) . "...";
                }
            ?>
            <tr>
                <td> <img width="250" src="<?= $r["imagem"] ?>" alt="<?php $r["titulo"]?>"></td>
                <td> <?= $r["titulo"] ?></td>
                <td> <?= $texto ?></td>
                <td> <?= $r["data_atualizacao"] ?></td>
                <td> <?= $r["link"] ?></td>
                <td>
                    <form action="update_livro.php" method="GET">
                        <button class="button-css" name="editar" value="<?= $r["id"] ?>">EDITAR</button>
                    </form>
                    <br>
                    <form action="delete_livro.php" method="GET">
                        <button class="button-css" name="apagar" value="<?= $r["id"] ?>">APAGAR</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <form action="criar_livro.php" method="GET">
            <button type="submit" class="button-css-large criar">CRIAR NOVO LIVRO</button>
        </form>
    </div>

    <?php endif; ?>
</main>

<?php require("components/footer.php"); ?>