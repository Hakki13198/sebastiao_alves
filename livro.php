<?php 

require_once("required.php");

$form = isset($_GET["id"]);

if($form){
  $id_livro = intval($_GET["id"]);

  $resultado_livro = selectSQL("SELECT * FROM livros WHERE id = $id_livro");

  if(count($resultado_livro) == 0){
    header("Location: ../index.php");
  }

}

?>

      <div class="container-fluid">
        <?php require_once("components_frontend/top_header.php"); ?>
        <?php require_once("components_frontend/carousel.php"); ?>
      <?php foreach($resultado_livro as $index => $i): ?>
        <div class="caixa1 caixa1-pages">
          <div class="caixa caixa-pages">
            <div class="texto-caixa texto-caixa-pages texto-caixa-pages-medium d-none d-md-flex">
              <h6 class="menu-selecionado autor-titulo">LIVROS</h6>
              <h3 class="t1 autor-subtitulo"><?= $i["titulo"] ?></h3>
            </div>
            <div class="d-flex d-md-none texto-caixa-pages-mobile">
              <h6 class="menu-selecionado autor-titulo">LIVROS</h6>
              <h3 class="t1 autor-subtitulo"><?= $i["titulo"] ?></h3>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 livro-container">
              <?php foreach($resultado_livro as $index => $i): ?>
                <img class="imagem-livros" src="<?= $i["imagem"] ?>" alt="<?= $i["titulo"] ?>">
               <div class="livros-text-wrapper">
                  <?= $i["texto"] ?>
                  <button class="voltar-atras d-block" onclick="voltarAtras();"></button> 
               </div>
              <?php endforeach; ?>
            </div>
        </div>
    </main>
<?php require("components_frontend/footer.php") ?>