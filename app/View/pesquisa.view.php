<?php
$livros = require "livros.php";
$pesquisa = $_GET["pesquisa"] ?? null;   
$genero = $_GET["genero"] ?? null;

$filtroPesquisa = function($livro) use($pesquisa){
    $titulo = mb_strtolower($livro["titulo"]);
    $pesquisa = mb_strtolower($pesquisa);
    $pos = mb_strpos($titulo, $pesquisa);
    return $pos !== false ? true : false;
};

$filtraCategoria = fn($livro) => $livro["genero"] == $genero; 

if($pesquisa){
    $livros = array_filter($livros,$filtroPesquisa);
}

if($genero){
    $livros = array_filter($livros,$filtraCategoria);
}

$ordemAlfa = function($a, $b){
    $tituloA = $a["titulo"];
    $tituloB = $b["titulo"];
    return strnatcasecmp($tituloA, $tituloB);
};

uasort($livros, $ordemAlfa);

?>