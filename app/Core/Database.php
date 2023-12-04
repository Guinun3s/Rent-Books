<?php

namespace Rentbooks\Core;


class Database{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = DB['servidor'];
        $banco = DB['banco'];
        $usuario = DB['usuario'];
        $senha = DB['senha'];
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);
    }

    public function executar(string $sql, array $dados = []) : bool
    {
        $this->stmt = $this->conexao->prepare($sql);
        $resultado = $this->stmt->execute($dados);
        return $resultado;
    }

    public function retornaTodos(string $classe){
        return $this->stmt->fetchAll(\PDO::FETCH_CLASS,$classe);
    }

    public function retorna(string $classe){
        return $this->stmt->fetchAll(\PDO::FETCH_CLASS,$classe);
    }

}

