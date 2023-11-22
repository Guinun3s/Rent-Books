<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\Database;

class UsuariosDAO{
    public function inserir($usuario){
        
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
        $banco = new Database;
        return $banco->executar($sql, $dados);
    }
    
    public function consultar($usuario){
        $Sql = "SELECT * FROM usuario WHERE email='$usuario->email' AND senha='$usuario->senha'";
        $dados = [
            $usuario->email,
            $usuario->senha
        ];
        $banco = new Database;
        $banco->executar($Sql, $dados);
        return $banco->retornaTodos();
    }
    public function buscarTodos(){
        $sql = "SELECT * FROM usuario";
        $banco = new Database;
        $banco->executar($sql);
        return $banco->retornaTodos();
    }
}