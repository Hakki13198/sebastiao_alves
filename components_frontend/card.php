<div class="card" style="width: 18rem">
    <img src="<?= $resultado_destaques[0]["imagem"] ?>" class="card-img-top" alt="<?= $resultado_destaques[0]["titulo"] ?>">
    <div class="card-body">
        <h5 class="card-title t1"><?= $resultado_destaques[0]["titulo"] ?></h5>
        <h6 class="novidade"><?= $resultado_destaques[0]["observacao"] ?></h6>
        <p class="card-text">
            <?php
            $texto = $resultado_livros[0]["texto"];
            if (strlen($texto) > 100) {
                $texto = substr($texto, 0, 400) . "...";
            }
            echo $texto;
            ?>
        </p>
        <div class="button-wrapper">
            <a class="saber_mais_anchor saber_mais" href="<?= $resultado_destaques[0]["link"] ?>"></a>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem">
    <img src="<?= $resultado_destaques[1]["imagem"] ?>" class="card-img-top" alt="<?= $resultado_destaques[1]["titulo"] ?>">
    <div class="card-body">
        <h5 class="card-title t1"><?= $resultado_destaques[1]["titulo"] ?></h5>
        <h6 class="novidade"><?= $resultado_destaques[1]["observacao"] ?></h6>
        <p class="card-text">
            <?php
                $texto = $resultado_livros[0]["texto"];
                if (strlen($texto) > 100) {
                    $texto = substr($texto, 0, 400) . "...";
                }
                echo $texto;
            ?>
        </p>
        <div class="button-wrapper">
            <a class="saber_mais_anchor saber_mais" href="<?= $resultado_destaques[1]["link"] ?>"></a>
        </div>
    </div>
</div>
<div class="card" style="width: 18rem">
    <img src="<?= $resultado_destaques[2]["imagem"] ?>" class="card-img-top" alt="<?= $resultado_destaques[2]["titulo"] ?>">
    <div class="card-body">
        <h5 class="card-title t1"><?= $resultado_destaques[2]["titulo"] ?></h5>
        <h6 class="novidade"><?= $resultado_destaques[2]["observacao"] ?></h6>
        <p class="card-text">
            <?php
                $texto = $resultado_livros[0]["texto"];
                if (strlen($texto) > 100) {
                    $texto = substr($texto, 0, 400) . "...";
                }
                echo $texto;
            ?>
        </p>
        <div class="button-wrapper">
            <a class="saber_mais_anchor saber_mais" href="<?= $resultado_destaques[2]["link"] ?>"></a>
        </div>
    </div>
</div>