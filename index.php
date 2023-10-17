<?php

require_once("required.php");

?>

<?php require_once("components_frontend/top_header.php"); ?>
        <?php require_once("components_frontend/carousel.php"); ?>
        <div class="caixa">
          <?php foreach($resultado_home as $index => $item ): ?>
          <img class="img-caixa" src="<?= $item["link_imagem"]; ?>" alt="" />
          <?php endforeach; ?>
          <div class="texto-caixa col-12 col-sm-10">
            <h3 class="t1">BEM-VINDO AO MEU WEBSITE</h3>
            <p class="p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
              a, nisi eaque dolore non quae minus. Architecto, molestiae
              adipisci! Animi eaque placeat tenetur nihil porro earum. Iste
              fugit dolorum non eum neque nemo, ipsam accusantium ipsa nesciunt
              consequatur dicta? Deleniti, nam eos officiis expedita quibusdam,
              esse voluptatum facilis totam vero alias dicta omnis quasi neque
              quia quod provident magnam, assumenda dolores animi molestiae
              itaque. Facilis dolores magni deleniti aspernatur. Minima commodi
              similique rem, molestiae tenetur mollitia nisi ipsam porro. Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Quaerat a, nisi
              eaque dolore non quae minus. Architecto, molestiae adipisci! Animi
              eaque placeat tenetur nihil porro earum. Iste fugit dolorum non
              eum neque nemo, ipsam accusantium ipsa nesciunt consequatur dicta?
              Deleniti, nam eos officiis expedita quibusdam, esse voluptatum
              facilis totam vero alias dicta omnis quasi neque quia quod
              provident magnam, assumenda dolores animi molestiae itaque.
              Facilis dolores magni deleniti aspernatur. Minima commodi
              similique rem, molestiae tenetur mollitia nisi ipsam porro.
            </p>

            <a style="padding-right: 30px;" href="autor.php">
              <button class="saber_mais saber-mais-branca text-center"></button>
            </a>
          
          </div>
        </div>
      </div>
    </header>
  <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="ultimos-livros">
              <h3 class="t1">ÚlTIMOS LIVROS</h3>
              <?php foreach($resultado_home as $index => $item): ?>
              <p class="p"><?= $item["texto_ultimos_livros"] ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="destaques destaques-mobile ultimos-livros flex-wrap justify-content-center">
              <?php require("components_frontend/card.php"); ?>
            </div>
          </div>
        </div>  
      </div>
  </main>
<?php require("components_frontend/footer.php"); ?>