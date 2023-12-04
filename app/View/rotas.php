<?php

use Rentbooks\Core\Router;

Router::get('/','HomeController','index');
Router::get('login', 'LoginController', 'login');
Router::get('criarconta', 'LoginController', 'criarconta');
Router::get('carrinho', 'CarrinhoController', 'carrinho');
Router::get('compra', 'CompraController', 'compra');
Router::get('compraevenda', 'LivrosController', 'compraevenda');
Router::get('formulario', 'LoginController', 'formulario');
Router::get('produtos', 'LivrosController', 'produtos');
Router::get('secaolivro', 'LivrosController', 'secaolivro');
Router::get('sobreaempresa', 'EmpresaController', 'sobreaempresa');
Router::post('cadastrarConta', 'LoginController', 'cadastrarConta');
