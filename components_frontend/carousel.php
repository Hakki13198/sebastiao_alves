

<div class="row">
          <div class="col-12">
            <div class="carousel-container d-md-block d-none">
              <div
                id="carousel-caption"
                class="carousel slide"
                data-bs-ride="carousel"
              >
              <div class="carousel-indicators">
                  <?php foreach($resultado as $index => $item): ?>
                      <button
                          type="button"
                          data-bs-target="#carousel-caption"
                          data-bs-slide-to="<?= $index; ?>"
                          <?= ($index === 0) ? 'class="active"' : ''; ?>
                          aria-label="Slide <?= ($index + 1); ?>"
                          aria-current="true"
                      ></button>
                  <?php endforeach; ?>
              </div>
              
              <div class="carousel-inner">
                  <?php foreach($resultado as $index => $item): ?>
                    <div class="carousel-item <?= ($index === 0) ? 'active' : ''; ?>">
                      <img src="<?= $item['imagem']; ?>" class="d-block w-100" alt="<?= $item['titulo']; ?>" />
                      <div class="carousel-caption d-none d-md-block">
                        <h6 class="novidade"><?= $item["observacao"] ?></h6>
                        <h3 class="carousel-h3"><?= $item['titulo']; ?></h3>
                        <?php
                          $subtitulo = $item["subtitulo"];
                          if (strlen($subtitulo) > 200) {
                              $subtitulo = substr($subtitulo, 0, 240) . "...";
                          }
                        ?>
                        <p class="carousel-p"><?= $subtitulo; ?></p>
                        <a class="saber_mais_anchor saber_mais" href="<?= $item['link']; ?>">
                        </a>
                      </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div
              class="carousel-container d-block d-md-none carousel-mobile"
            >
              <div
                id="carousel-mobile"
                class="carousel slide"
                data-bs-ride="carousel"
                data-bs-interval="3000"
              >
              <div class="carousel-indicators carousel-indicators-mobile">
                <?php foreach($resultado as $index => $item): ?>
                  <button
                      type="button"
                      data-bs-target="#carousel-mobile"
                      data-bs-slide-to="<?= $index; ?>"
                      <?= ($index === 0) ? 'class="active"' : ''; ?>
                      aria-label="Slide <?= ($index + 1); ?>"
                      aria-current="true"
                  ></button>
              <?php endforeach; ?>
              </div>

                <div class="carousel-inner">
                  <?php foreach($resultado as $index => $item): ?>
                  <div class="carousel-item <?= ($index === 0) ? 'active' : ''; ?>">
                    <img
                      src="<?= $item['imagem_mobile']; ?>"
                      class="d-block w-100"
                      alt="<?= $item["titulo"] ?>"
                    />
                    <div
                      class="carousel-caption carousel-caption-mobile d-sm-block d-lg-none <?php if($item["observacao"] ? "novidade-mobile" : ''); ?>"
                    >
                      <h6 class="novidade"><?= $item["observacao"] ?></h6>
                      <h3 class="carousel-h3"><?= $item["titulo"]; ?></h3>
                      <?php
                          $subtitulo = $item["subtitulo"];
                          if (strlen($subtitulo) > 200) {
                              $subtitulo = substr($subtitulo, 0, 160) . "...";
                          }
                      ?>
                      <p class="carousel-p"><?= $subtitulo ?></p>
                      <a
                        class="saber_mais_anchor saber_mais"
                        href="<?= $item["link"] ?>"></a>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>