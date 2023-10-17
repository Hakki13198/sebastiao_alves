<?php

require_once("required.php");

$pagina_atual = 1;


if(isset($_GET["pagina"])){
    $pagina_atual = intval($_GET["pagina"]);
}

$numero_elementos_por_pagina = 2;
$offset = ($pagina_atual - 1) * $numero_elementos_por_pagina;

$resultados = selectSQLUnico("SELECT COUNT(id) AS total FROM imprensa");

$total_elementos = $resultados["total"];

$total_de_paginas = ceil($total_elementos / $numero_elementos_por_pagina);

$imprensa = selectSQL("SELECT * FROM imprensa LIMIT $numero_elementos_por_pagina OFFSET $offset");

?>
        <?php require("components_frontend/top_header.php"); ?>
        <?php require("components_frontend/carousel.php"); ?>
        <div class="caixa1 caixa1-pages">
          <div class="caixa caixa-pages">
            <div class="texto-caixa texto-caixa-pages texto-caixa-pages-medium d-none d-md-flex">
              <h6 class="menu-selecionado autor-titulo">IMPRENSA</h6>
              <h3 class="t1 autor-subtitulo">ÚLTIMAS NOTÍCIAS</h3>
            </div>
            <div class="d-flex d-md-none texto-caixa-pages-mobile">
              <h6 class="menu-selecionado autor-titulo">IMPRENSA</h6>
              <h3 class="t1 autor-subtitulo">ÚLTIMAS NOTÍCIAS</h3>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="container-fluid">
    <?php $firstElement = true; ?>
    <?php foreach ($imprensa as $p): ?>
    <div class="row mt-2">
        <div
        class="col-12 <?= $firstElement ? 'imprensa' : 'imprensa-no-shadow' ?> d-flex flex-column justify-content-center align-items-center"
        >
        <div class="t1 border-imprensa">
            <?= $p["titulo"] ?>
        </div>
        <p class="imprensa-data"><?= $p["data_publicacao"] ?></p>
        <img
            class="mb-5"
            src="<?= $p["imagem"] ?>"
            alt="<?= $p["titulo"] ?>"
        />
        <p><?= $firstElement ? "" : $p["texto"]?></p>
        </div>
    </div>
    <?php $firstElement = false; ?>
    <?php endforeach; ?>
      <div class="row">
        <div class="col-12 paginacao ">
            <div class="paginacao-numeros">
                <form class="form-2" action="">
                <?php if ($pagina_atual > 1): ?>
                    <button name="pagina" class="btn-imprensa setas seta-esquerda" value="<?= $pagina_atual - 1; ?>"></button>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_de_paginas; $i++): ?>
                    <button name="pagina" class="btn-imprensa <?= $i == $pagina_atual ? "active" : "" ?>" value="<?= $i; ?>" ><?=$i?></button>
                <?php endfor; ?>
                <?php if ($pagina_atual < $total_de_paginas): ?>
                    <button name="pagina" class="btn-imprensa setas seta-direita" value="<?= $pagina_atual + 1; ?>"></button>
                <?php endif;?>
                </form>
            </div>
        </div>
      </div>
    </main>
    <?php require("components_frontend/footer.php") ?>