<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sebastião Alves</title>
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
  crossorigin="anonymous"
  />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;500;700&family=Lato:wght@700;900&display=swap"
rel="stylesheet"
/>
<link rel="stylesheet" href="imports/imports.css" />
<link rel="stylesheet" href="./style.css" />
<link rel="stylesheet" href="style-mobile-pages.css">
<link rel="stylesheet" href="style-mobile.css">
<script src="funcoes.js"></script>
  
</head>
<body>
<header>
  <div class="container-fluid">
    <div class="row">
        <div class="top-header-wrapper">
        <div
          class="col-12 top-header d-flex flex-column justify-content-center align-items-center"
        >
        <h1 class="d-none d-md-block" id="top_header_scroll">SEBASTIÃO ALVES</h1>
        <hr class="d-none d-md-block" />
        <nav class="navbar navbar-expand-md bg-transparent">
          <h1 class="d-block d-md-none h1-mobile">SEBASTIÃO ALVES</h1>
            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleHambMenu();" id="toggler">
              <img src="img/desktop/menu.svg" alt="hamb-menu" id="hamb_menu">
            </button>
            <hr class="d-block d-md-none" />
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link <?= ($current_page === 'index.php') ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= ($current_page === 'autor.php') ? 'active' : ''; ?>" href="autor.php">Autor</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?= ($current_page === 'livro.php') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Livros
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach($resultado_livros as $index => $i): ?>
                      <li>
                        <a class="dropdown-item" href="livro.php?id=<?= $i['id'] ?>">
                          <?= $i["titulo"] ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= ($current_page === 'imprensa.php') ? 'active' : ''; ?>" href="imprensa.php">Imprensa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= ($current_page === 'contactos.php') ? 'active' : ''; ?>" href="contactos.php">Contactos</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    </div>
  </div>