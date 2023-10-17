<?php

require_once("required.php");

?>
        <?php require("components_frontend/top_header.php"); ?>
        <?php require("components_frontend/carousel.php"); ?>
        <div class="caixa1 caixa1-pages">
          <div class="caixa caixa-pages">
            <div class="texto-caixa texto-caixa-pages texto-caixa-pages-medium d-none d-md-flex">
              <h6 class="menu-selecionado autor-titulo">AUTOR</h6>
              <h3 class="t1 autor-subtitulo">Sobre mim</h3>
            </div>
            <div class="d-flex d-md-none texto-caixa-pages-mobile">
              <h6 class="menu-selecionado autor-titulo">AUTOR</h6>
              <h3 class="t1 autor-subtitulo">Sobre mim</h3>
            </div>
          </div>
        </div>
      </div>
        <?php foreach($resultado_autor as $index => $item): ?>
        <img class="img-autor img-autor-mobile" src="<?= $item["link_imagem"] ?>" alt="imagem_autor" />
        <?php endforeach; ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-10 p-main-container d-block d-md-none">
          <?php foreach($resultado_autor as $index => $item): ?>
          <p class="p-main-pages ">
            <?php
                $texto = $item["texto_autor"];
                if (strlen($texto) > 400) {
                    $texto = substr($texto, 0, 400) . "...";
                }
            ?>
            <div style="display: block;" id="texto_pequeno" ><?= $texto ?></div>

            <div style="display: none;" id="texto_grande"><?= $item["texto_autor"] ?></div>
            <br />
            <div class="button-wrapper-autor">
              <div class="button-wrapper-right d-block d-md-none text-center ver-mais-wrapper">
                  <button class="ver-mais" id="ver_mais" onclick="verMais();"></button>
              </div>
              <div class="button-wrapper-right voltar-atras-wrapper">
                  <button class="voltar-atras" onclick="voltarAtras();"></button>
              </div>
            </div>
          </p>
          <?php endforeach; ?>
          
        </div>
        <div class="col-10 p-main-container d-none d-md-block">
          <?php foreach($resultado_autor as $index => $item): ?>
          <p class="p-main-pages ">
            <div><?= $item["texto_autor"] ?></div>
            <br />
            <div class="button-wrapper-autor">
              <div class="button-wrapper-right d-block d-md-none text-center ver-mais-wrapper">
                  <button class="ver-mais" id="ver_mais" onclick="verMais();"></button>
              </div>
              <div class="button-wrapper-right voltar-atras-wrapper">
                  <button class="voltar-atras" onclick="voltarAtras();"></button>
              </div>
            </div>
          </p>
          <?php endforeach; ?>
          
        </div>
      </div>
    </main>
<?php require("components_frontend/footer.php") ?>