<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;
use Rentbooks\Model\Entities\Usuario;

class UsuariosDAO extends DAO{

    protected static string $tabela = "usuarios";
    protected static string $classe = Usuario::class;
    public static function inserir($usuario){
        
        $sql = "INSERT INTO usuario (nome, dataNascimento, genero, telefone, cpf, tipoUsuario, email, senha, cep, cidade, rua, bairro, numero) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $dados = [
            $usuario->nome,
            $usuario->dataNascimento,
            $usuario->genero,
            $usuario->telefone,
            $usuario->cpf,
            $usuario->tipoUsuario,
            $usuario->email,
            $usuario->senha,
            $usuario->cep,
            $usuario->cidade,
            $usuario->rua,
            $usuario->bairro,
            $usuario->numero
        ];
        
        $banco = new Database();
        return $banco->executar($sql, $dados);
    }
    
    public function consultar($usuario){
        $Sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $dados = [
            $usuario->email,
            $usuario->senha
        ];
        $banco = new Database;
        $banco->executar($Sql, $dados);
        return $banco->retornaTodos(Usuario::class);
    }
    
}