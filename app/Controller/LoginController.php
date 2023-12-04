<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;
use Rentbooks\Core\Validator;
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
        
        $houveErro = Validator::execute(Usuario::getRegras(),$this->post());
        if($houveErro){
            foreach(Validator::getErros() as $erro){
                echo "<li>{$erro}</li>";
            }
            die;
        }

        

        $usuario = new Usuario($this->post());
        if(UsuariosDAO::inserir($usuario)){
            flash("Cadastro realizado com sucesso!");

            redireciona('login');

        }

    }
}