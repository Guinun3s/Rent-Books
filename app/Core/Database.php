<?php

namespace Rentbooks\Core;


class Database{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = 'localhost';
        $banco = 'rentbooks';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);
    }

    public function executar(string $sql, array $dados = []){
        $this->stmt = $this->conexao->prepare($sql);
        $resultado = $this->stmt->execute($dados);
        return $resultado;
    }

    public function retornaTodos(){
        return $this->stmt->fetchAll();
    }

}

