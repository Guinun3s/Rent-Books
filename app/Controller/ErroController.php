<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class ErroController extends Controller{

    public function erro404(){
       $titulo = "Atividades IFBA";
       $this->view('404',compact('titulo'));
    }
}