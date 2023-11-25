<?php

use Rentbooks\Core\Router;

Router::add('/','HomeController','index');
Router::add('__erro','ErroController','erro404');
Router::add('login', 'LoginController', 'login');
Router::add('criarconta', 'LoginController', 'criarconta');
Router::add('carrinho', 'HomeController', 'carrinho');
Router::add('compra', 'HomeController', 'compra');
Router::add('compraevenda', 'HomeController', 'compraevenda');
Router::add('formulario', 'HomeController', 'formulario');
Router::add('produtos', 'HomeController', 'produtos');
Router::add('secaolivro', 'HomeController', 'secaolivro');
Router::add('sobreaempresa', 'HomeController', 'sobreaempresa');
