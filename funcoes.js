function verMais() {
  let texto_pequeno = document.getElementById("texto_pequeno");
  let texto_grande = document.getElementById("texto_grande");

  texto_pequeno.style.display = "none";
  texto_grande.style.display = "block";

  document.getElementById("ver_mais").style.display = "none";
}

function abrirMenu(event) {
  event.preventDefault();

  let dropdown = document.getElementsByClassName("dropdown-toggle")[0];
  let dropdown2 = document.getElementsByClassName("dropdown-menu")[0];

  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });

  setTimeout(() => {
    dropdown.classList.add("show");
    dropdown2.classList.add("show");
  }, 550);
}

function scrollToClass() {
  const SCROLL = document.querySelector(".texto-caixa-pages");
  if (SCROLL) {
    SCROLL.scrollIntoView();
  }
}

function toggleHambMenu() {
  let hamb_menu = document.getElementById("hamb_menu");
  let toggler = document.getElementById("toggler");

  if (toggler.classList.contains("collapsed")) {
    hamb_menu.src = "img/desktop/menu.svg";
  } else {
    hamb_menu.src = "img/desktop/fechar.svg";
  }
}

function voltarAtras() {
  history.back();
}
