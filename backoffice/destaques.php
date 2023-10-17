<?php
require_once("importacoes_backend.php");

verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM destaques");
$resultados2 = selectSQL("SELECT texto FROM livros");


?>

<?php require("components/header.php"); ?>

<main>
<?php if(!empty($resultados)): ?>

<div class="table-div">
    <table>
        <tr>
            <th>Imagem</th>
            <th>Título</th>
            <th>Observação</th>
            <th>Ações</th>
        </tr>
        <?php for ($i = 0; $i < min(3, count($resultados)); $i++):  ?>
            <?php $r = $resultados[$i];?>
            <tr>
                <td><img width="250" src="<?= $r["imagem"] ?>" alt="<?= $r["titulo"] ?>"></td>
                <td><?= $r["titulo"] ?></td>
                <td><?= $r["observacao"] ?></td>
                <td>
                    <form action="destaques_ui.php" method="GET">
                        <select name="destaque_id" style="display: none;">
                            <option value="<?= $r["id"] ?>" selected></option>
                        </select>
                        <a class="button-css" name="editar" href="destaques_ui.php?destaque_id=<?= $r["id"] ?>">EDITAR</a>
                    </form>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<?php endif; ?>
</main>

<?php require("components/footer.php"); ?>