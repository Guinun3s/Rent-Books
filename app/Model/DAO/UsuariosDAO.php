<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;
use Rentbooks\Core\Entity;
use Rentbooks\Model\Entities\Livro;
use Rentbooks\Model\Entities\Usuario;

class UsuariosDAO extends DAO{

    protected static string $tabela = "Usuario";
    protected static string $classe = Usuario::class;

    public static function login(Entity $entidade):bool
    { 
        
        $tabela = static::$tabela;
        $banco = new Database;
        $sql = "SELECT * FROM {$tabela} WHERE email = '$entidade->email' AND senha = '$entidade->senha'";
        $banco->executar($sql);
        $usuario = $banco->retorna(static::$classe);

     

        if(!$usuario){
            return false;
        }else{
            $_SESSION['usuario'] = $usuario->idUsuario;
            return true;
        }

    }

    public static function buscarTodosLivrosUsuario($usuario){
        $sql = "SELECT * FROM livro WHERE idUsuario = ?";
        $banco = new Database;
        $banco->executar($sql,[$usuario->idUsuario]);
        return $banco->retornaTodos(Livro::class);
    }
    
}