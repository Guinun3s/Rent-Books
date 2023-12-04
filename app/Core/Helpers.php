<?php

function css($arquivo)
{
    return URL_BASE."public/css/{$arquivo}.css";
}

function img($arquivo)
{
    return URL_BASE."public/imagens/{$arquivo}";
}

function imgLivros($arquivo)
{
    return URL_BASE."public/imagens/livros/{$arquivo}";
}

function url_base($url = ""){
    return URL_BASE . "{$url}";
}

function redireciona($rota = ""){
    header("location: ".url_base($rota));
    die;
}

function flash($mensagem = "", $tipo = "sucesso"){
    if(!empty($mensagem)){
        $_SESSION['__mensagem'] = [$mensagem,$tipo];
    }else if(empty($mensagem) && isset($_SESSION['__mensagem'])){
        [$mensagem,$tipo] = $_SESSION['__mensagem'];
        $retorno = "";
        $retorno .= "<div class='msg {$tipo}'>";
        $retorno .= $mensagem;
        $retorno .= "</div>";
        unset($_SESSION['__mensagem']);
        return $retorno;
    }else{
        return "";
    }
}