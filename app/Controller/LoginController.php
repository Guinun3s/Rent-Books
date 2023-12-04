<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;
use Rentbooks\model\DAO\UsuariosDAO;
use Rentbooks\Model\Entities\Usuario;

class LoginController extends Controller{

    public function login(){
        $this->view('login');
    }

    public function criarconta(){
        $this->view('criarconta');
    }
    
    public function formulario(){
        $this->view('formulario');
    }

    public function cadastrarConta(){
        $usuario = new Usuario($this->post());
        
        UsuariosDAO::inserir($usuario);

    }
}