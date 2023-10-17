<?php

require_once("required.php");

$current_page = basename($_SERVER['PHP_SELF']);

$resultado_contactos = selectSQL("SELECT * FROM contactos");
$resultado_redes_sociais = selectSQL("SELECT * FROM redes_sociais");


?>

<div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <footer>
            <div class="hr-footer-mobile d-lg-none d-md-block"></div>
            <div class="footer_links d-none d-lg-block">
              <hr />
              <div class="nav_css ">
                <a href="index.php" class="<?= ($current_page === 'index.php') ? 'active' : ''; ?>">HOME</a>
                <a href="autor.php" class="<?= ($current_page === 'autor.php') ? 'active' : ''; ?>">AUTOR</a>
                <a style="cursor: pointer;" class="<?= ($current_page === 'livro.php') ? 'active' : ''; ?>" onclick="abrirMenu(event);">LIVROS</a>
                <a href="imprensa.php" class="<?= ($current_page === 'imprensa.php') ? 'active' : ''; ?>">IMPRENSA</a>
                <a href="contactos.php"class="<?= ($current_page === 'contactos.php') ? 'active' : ''; ?>">CONTACTOS</a>
              </div>
              <hr />
            </div>
            <div class="socials d-none d-lg-flex">
              <div class="contactos">
              <?php foreach($resultado_contactos as $r): ?>
                <table>
                  <tr>
                    <th><h5 class="spacing_contacto t1">CONTACTOS</h5></th>
                  </tr>
                  <tr>
                    <td class="footer_header">MORADA</td>
                    <td class="footer_header">TELEFONE</td>
                    <td class="footer_header">EMAIL</td>
                  </tr>
                  <tr>
                    <td class="footer_info">
                    <?= $r["morada"] ?>
                    </td>
                    <td class="footer_info"><?= $r["telefone"] ?></td>
                    <td class="footer_info"><?= $r["mail"] ?></td>
                  </tr>
                </table>
                <div class="reclamacoes">
                  <a href="#"
                    ><img src="img/desktop/livroreclamacoes.svg" alt=""
                  /></a>
                  <a class="margin-ralc" href="#"
                    ><img src="img/desktop/ralc.svg" alt=""
                  /></a>
                </div>
              </div>
              <?php endforeach; ?>
              <div class="redes-sociais">
                <h5 class="t1">SIGA-ME NAS REDES SOCIAIS</h5>
                <?php foreach($resultado_redes_sociais as $redes): ?>
                <div class="social-links">
                  <a href="<?= $redes["instagram"] ?>" target="_blank"><img src="img/desktop/instagram1.svg" alt=""/></a>
                  <a href="<?= $redes["facebook"] ?>" target="_blank"><img src="img/desktop/facebook1.svg" alt="" /></a>
                  <a href="<?= $redes["linkedin"] ?>" target="_blank"><img src="img/desktop/linkedin1.svg" alt="" /></a>
                </div>
                <?php endforeach; ?>
                <p class="text-center cookies">
                  Política de Cookies.
                  <br />
                  Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos
                  reservados.
                </p>
              </div>
            </div>
          </footer>
        </div>
      </div>
      <div class="row d-block d-lg-none">
        <div class="col-12">
          <div class="social-mobile ">
            <div class="contactos-mobile <?= ($current_page === 'contactos.php' ? 'hidden' : ''); ?>">
            <?php foreach($resultado_contactos as $r): ?>
              <h1 class="t1">CONTACTOS</h1>
              <div class="morada-mobile">
                <h2 class="contactos-titulo">MORADA</h2>
                <p>
                <?= $r["morada"] ?>
                </p>
                <div class="telefone-mobile">
                  <h2 class="contactos-titulo">TELEFONE</h2>
                  <p><?= $r["telefone"] ?></p>
                </div>
                <div class="email-mobile">
                  <h2 class="contactos-titulo">EMAIL</h2>
                  <p><?= $r["mail"] ?></p>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-block d-lg-none">
        <div class="col-12">
          <div class="redes-mobile contactos-mobile">
            <h1 class="t1">SIGA-ME NAS REDES SOCIAIS</h1>
            <div class="redes-links-mobile">
            <?php foreach($resultado_redes_sociais as $redes): ?>
              <a href="<?= $redes["instagram"] ?>" target="_blank"><img src="img/desktop/instagram1.svg" alt="instagram" /></a>
              <a href="<?= $redes["facebook"] ?>" target="_blank"><img src="img/desktop/facebook1.svg" alt="facebook" /></a>
              <a href="<?= $redes["linkedin"] ?>" target="_blank"><img src="img/desktop/linkedin1.svg" alt="linkedin" /></a>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-block d-lg-none">
        <div class="col-12">
          <div class="reclamacoes-mobile contactos-mobile">
            <a href="#"
              ><img src="img/desktop/livroreclamacoes.svg" alt=""
            /></a>
            <a class="margin-ralc" href="#"
              ><img src="img/desktop/ralc.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
      <div class="row d-block d-lg-none">
        <div class="col-12">
          <div class="cookies-mobile">
            <p class="text-center cookies-mobile-p">
              Política de Cookies.
              <br />
              Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos
              reservados.
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
