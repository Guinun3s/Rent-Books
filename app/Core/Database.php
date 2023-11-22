<?php

namespace Rentbooks\Core;


class Database{

    protected \PDO $conexao;

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

    public function executar(string $sql, array $dados = []){
        $this->stmt = $this->conexao->prepare($sql);
    }


}

/*
        public function executar(string $sql, array $dados = []){

        # declaracao em inglês - statime
        $this->stmt = $this->conexao->prepare($sql); // PREPARE -> é uma substituição dos valores que estavam(?), com os que nós inserimos
        $resultado = $this->stmt->execute($dados); # Aqui, os dados(variável) estarão indo para o stmt.
        return $resultado;

    }

    public function retornaTodos(){

        return $this->stmt->fetchAll();
    }

*/