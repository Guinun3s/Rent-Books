<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class ErroController extends Controller{

    public function erro($tipo){
        switch($tipo){
            case "404":
                $this->view('404');
            break;
            case "controller":
                $this->view('erro', ['msg'=>'Controller não existe']);
            break;
            case "metodo":
                $this->view('erro', ['msg'=>'O método não existe no controlador']);
            break;
            case "naopermitido":
                $this->view('erro', ['msg'=>'Erro! A rota não é permitida para este método']);
            break;
        }
       
    }
}