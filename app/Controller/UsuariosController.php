<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class UsuariosController extends Controller{

    public function usuario(){
        $this->view('usuario');
    }

    public function painel(){
        $this->view('painel');
    }   
}