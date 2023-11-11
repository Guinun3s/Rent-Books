<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $titulo = "Atividades IFBA";
        //$dados = ['titulo' => $titulo];
        #compact gera um array associativo a partir do nome de variaveis passadas que são localizadas na aplicação.
        $dados = compact('titulo');
        $this->view('inicial',$dados);
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