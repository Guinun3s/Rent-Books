<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;
use Rentbooks\Core\Validator;
use Rentbooks\model\DAO\ClientesDAO;
use Rentbooks\Model\Entities\Cliente;

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
        
        $houveErro = Validator::execute(Cliente::getRegras(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getErrosListados(),'erro');
            redireciona('formulario');
        }

        

        $usuario = new Cliente($this->post());
        if(ClientesDAO::inserir($usuario)){
            flash("Cadastro realizado com sucesso!");
            redireciona('');

        }

    }
}