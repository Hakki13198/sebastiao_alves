
<?php
require_once("importacoes_backend.php");

verificarEstaLogado();

$resultados = selectSQL("SELECT * FROM livros");

$form_inicial = isset($_GET["editar"]);
$form = isset($_GET["novo_destaque"]);

if ($form) {
    $livroID = $_GET["novo_destaque"];
    $observacao = $_GET["observacao"];
    $destaqueID = $_GET["destaque_id"];

    $livroSelecionado = selectSQLUnico("SELECT * FROM livros WHERE id='$livroID'");
    
    if ($livroSelecionado) {
        $titulo = $livroSelecionado["titulo"];
        $imagem = $livroSelecionado["imagem"];
        $link = "http://localhost/sebastiao_alves/livro.php?id=" . $livroID;

        date_default_timezone_set("Europe/Lisbon");
        $data_atualizacao = date("h:i:s - d/m/Y");

        iduSQL("UPDATE destaques SET titulo='$titulo', imagem='$imagem', observacao='$observacao', data_atualizacao='$data_atualizacao', link='$link' WHERE id='$destaqueID'");

        header("Location: sucesso_editar.php");
        exit();
    } else {
        echo "Livro selecionado não encontrado.";
    }
}
?>

<?php require("components/header_simples.php"); ?>

<main>
    <div class="div-css">
        <form class="form-css" action="destaques_ui.php" method="GET">
            <h2>Editar <span style="color:#c5c6c7;">Destaque</span>:</h2>
            <br><br>
            <label for="novo_destaque">Novo Destaque:</label>
            <br>
            <select name="novo_destaque" id="">
                <?php foreach($resultados as $r): ?>
                    <option value="<?= $r["id"] ?>"><?= $r["titulo"] ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <label for="observacao">Observação do DESTAQUE:</label>
            <br>
            <input style="text-align: center;" type="text" name="observacao">
            <br><br>
            <input type="hidden" name="destaque_id" value="<?= $_GET["destaque_id"] ?>">
            <input type="submit" class="button-css" value="EDITAR">
        </form>
    </div>
</main>

<?php require("components/footer.php"); ?>