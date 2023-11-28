<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class CarrinhoController extends Controller{

    public function carrinho(){
        $this->view('carrinho');
    }

}