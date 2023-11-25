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