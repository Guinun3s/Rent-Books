<?php
$livros = require "livros.php";
$pesquisa = $_GET["pesquisa"] ?? null;   
$genero = $_GET["genero"] ?? null;
$preco = $_GET["preco"] ?? null;
$precop = $_GET["precop"] ?? null;
$modo = $_GET["modo"] ?? null;
$titulo = $_GET["titulo"] ?? null; 

$filtroPesquisa = function($livro) use($pesquisa){
    $titulo = mb_strtolower($livro["titulo"]);
    $pesquisa = mb_strtolower($pesquisa);
    $pos = mb_strpos($titulo, $pesquisa);
    return $pos !== false ? true : false;
};

$filtraCategoria = fn($livro) => mb_strtolower($livro["genero"]) == $genero; 

$filtroPreco = fn($livro) => $livro["preco"] <= $preco;

$filtroPrecop = fn($livro) => $livro["preco"] <= $precop;

$filtroModo = fn($livro) => $livro["modo"] == $modo;

$filtroTitulo = fn($livro) => $livro["titulo"] == $titulo;

if($pesquisa){
    $livros = array_filter($livros,$filtroPesquisa);
}

if($genero){
    $livros = array_filter($livros,$filtraCategoria);
}

if($preco){
    $livros = array_filter($livros,$filtroPreco);
}

if($precop){
    $livros = array_filter($livros,$filtroPrecop);
}

if($modo){
    $livros = array_filter($livros,$filtroModo);
}

if($titulo){
    $livros = array_filter($livros,$filtroTitulo);
}

$ordemAlfa = function($a, $b){
    $tituloA = $a["titulo"];
    $tituloB = $b["titulo"];
    return strnatcasecmp($tituloA, $tituloB);
};

uasort($livros, $ordemAlfa);

?>