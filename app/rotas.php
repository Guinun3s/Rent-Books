<?php

use Rentbooks\Core\Router;

Router::add('/','HomeController','index');
Router::add('login', 'LoginController', 'login');
Router::add('criarconta', 'LoginController', 'criarconta');
Router::add('carrinho', 'CarrinhoController', 'carrinho');
Router::add('compra', 'CompraController', 'compra');
Router::add('compraevenda', 'LivrosController', 'compraevenda');
Router::add('formulario', 'LoginController', 'formulario');
Router::add('produtos', 'LivrosController', 'produtos');
Router::add('secaolivro', 'LivrosController', 'secaolivro');
Router::add('sobreaempresa', 'EmpresaController', 'sobreaempresa');
