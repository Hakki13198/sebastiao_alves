<?php

require_once("required.php");

$resultado_contactos = selectSQL("SELECT * FROM contactos");

?>
  <body>
    <header>
      <div class="container-fluid">
        <?php require("components_frontend/top_header.php"); ?>
        <?php require("components_frontend/carousel.php"); ?>
        <div class="caixa1 caixa1-pages">
          <div class="caixa caixa-pages">
            <div class="texto-caixa texto-caixa-pages texto-caixa-pages-medium d-none d-md-flex">
              <h6 class="menu-selecionado autor-titulo">CONTACTOS</h6>
              <h3 class="t1 autor-subtitulo">PODE CONTACTAR-ME ATRAVRÉS DO E-MAIL OU TELEFONE</h3>
            </div>
            <div class="d-flex d-md-none texto-caixa-pages-mobile">
              <h6 class="menu-selecionado autor-titulo">CONTACTOS</h6>
              <h3 class="t1 autor-subtitulo">PODE CONTACTAR-ME ATRAVRÉS DO E-MAIL OU TELEFONE</h3>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12">
          <div class="contactos-wrapper">
            <?php foreach($resultado_contactos as $r): ?>
            <div class="top-contactos">
              <div class="col-10">
               
                <h5 class="contactos-titulo">TELEFONE</h5>
                <p class="contactos-texto"><?= $r["telefone"] ?></p>
              </div>
              <div class="col-10">
                <h5 class="contactos-titulo">MORADA</h5>
                <p><?= $r["morada"] ?></p>
              </div>
              <div class="col-10">
                <h5 class="contactos-titulo">EMAIL</h5>
                <p class="contactos-texto"><?= $r["mail"] ?></p>
              </div>
            </div>
            <br />
            <div class="hr"></div>
            <br />
            <div>
              <h5 class="contactos-titulo">HORÁRIO</h5>
              <p class="contactos-texto"><?= $r["horario"] ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </main>

<?php require("components_frontend/footer.php") ?>