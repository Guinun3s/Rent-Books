<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $this->view('inicial');
    }

    public function login(){
        $this->view('login');
    }

    public function criarconta(){
        $this->view('criarconta');
    }

    public function carrinho(){
        $this->view('carrinho');
    }

    public function compra(){
        $this->view('compra');
    }
    
    public function compraevenda(){
        $this->view('compraevenda');
    }

    public function formulario(){
        $this->view('formulario');
    }

    public function produtos(){
        $this->view('produtos');
    }

    public function secaolivro(){
        $this->view('secaolivro');
    }

    public function sobreaempresa(){
        $this->view('sobreaempresa');
    }
}