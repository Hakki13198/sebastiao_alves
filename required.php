<?php

require_once("backoffice/importacoes_frontend.php");

$resultado = selectSQL("SELECT * FROM banners");
$resultado_autor = selectSQL("SELECT * FROM autor");
$resultado_home = selectSQL("SELECT * FROM home");
$resultado_livros = selectSQL("SELECT * FROM livros");
$resultado_destaques = selectSQL("SELECT * FROM destaques");
$resultado_imprensa = selectSQL("SELECT * FROM imprensa");
$resultado_contactos = selectSQL("SELECT * FROM contactos");
$resultado_redes_sociais = selectSQL("SELECT * FROM redes_sociais");

?>