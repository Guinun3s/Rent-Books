<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class UsuariosController extends Controller{

    public function cliente(){
        $this->view('cliente');
    }

    public function fornecedor(){
        $this->view('fornecedor');
    }   
}