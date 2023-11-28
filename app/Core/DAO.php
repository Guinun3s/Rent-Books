<?php

namespace Rentbooks\Core;

abstract class DAO{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;

    //public abstract function inserir($entidade);

    public static function buscarTodos(){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela}";
        $banco = new Database;
        $banco->executar($sql);
        return $banco->retornaTodos(static::$classe);
    }
    
}