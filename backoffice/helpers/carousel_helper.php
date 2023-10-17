<?php

require_once("backoffice/importacoes_frontend.php");
function getTitulo(){

    $titulo = selectSQLUnico("SELECT titulo FROM banners");
    return $titulo["titulo"];
}
function getSubtitulo(){

    $subtitulo = selectSQLUnico("SELECT subtitulo FROM banners");
    return $subtitulo["subtitulo"];
}
function getImagem(){

    $imagem = selectSQLUnico("SELECT imagem FROM banners");
    return $imagem["imagem"];
}

function getImagemMobile(){

    $imagem_mobile = selectSQLUnico("SELECT imagem_mobile FROM banners");
    return $imagem_mobile["imagem_mobile"];

}


?>