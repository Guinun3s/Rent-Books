<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;
use Rentbooks\Core\Entity;
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
        $_SESSION['usuario'] = $banco->retorna(static::class);
        if(empty($_SESSION['usuario'])){
            return false;
        }else{
            return true;
        }

    }
    
}