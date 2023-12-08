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

    public function logar(){

        $houveErro = Validator::execute(Usuario::getRegrasl(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getErrosListados(),'erro');
            redireciona('login');
        }

        $usuario = new Usuario($this->post());
        if(UsuariosDAO::login($usuario) == true){
            flash("Login realizado com sucesso!");
            redireciona('usuario');
        }else{
            flash("Email ou senha inválido", 'erro');
            redireciona('login');
        }

    }
    
    public function formulario(){
        $this->view('formulario');
    }

    public function cadastrarConta(){
        
        $houveErro = Validator::execute(Usuario::getRegrasc(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getErrosListados(),'erro');
            redireciona('formulario');
        }

        $usuario = new Usuario($this->post());
        if(UsuariosDAO::inserir($usuario)){
            flash("Cadastro realizado com sucesso!");
            redireciona('login');

        }

    }
}