<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class LivrosController extends Controller{
    
    public function compraevenda(){
        $this->view('compraevenda');
    }

    public function produtos(){
        $this->view('produtos');
    }

    public function secaolivro(){
        $this->view('secaolivro');
    }

}