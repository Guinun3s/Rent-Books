<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';

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

function url_base($url){
    return URL_BASE . $url;
}

Router::add('/','HomeController','index');
Router::add('__erro','ErroController','erro404');
Router::add('login', 'HomeController', 'login');
Router::add('criarconta', 'HomeController', 'criarconta');
Router::add('carrinho', 'HomeController', 'carrinho');
Router::add('compra', 'HomeController', 'compra');
Router::add('compraevenda', 'HomeController', 'compraevenda');
Router::add('formulario', 'HomeController', 'formulario');
Router::add('produtos', 'HomeController', 'produtos');
Router::add('secaolivro', 'HomeController', 'secaolivro');
Router::add('sobreaempresa', 'HomeController', 'sobreaempresa');
Router::execute($url);