<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;
use Rentbooks\model\DAO\UsuariosDAO;

class UsuariosController extends Controller{

    public function usuario(){
        $this->view('usuario');
    }

    public function painel(){
        $id = (int) $_SESSION['usuario'];

        $usuario = UsuariosDAO::buscarId($id);
        $livros = UsuariosDAO::buscarTodosLivrosUsuario($usuario);

        $this->view('painel',['usuario' => $usuario, 'livros' => $livros]);
    }   
}