<?php

namespace Rentbooks\Core;

abstract class DAO{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;


    public static function buscarTodos(){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela}";
        $banco = new Database;
        $banco->executar($sql);
        return $banco->retornaTodos(static::$classe);
    }

    public static function buscarId($id){
        $tabela = static::$tabela;
        $banco = new Database;
        $sql = "SELECT * FROM {$tabela} WHERE id = ?";
        $banco->executar($sql,[$id]);
        return $banco->retorna(static::$classe);
    }

    public  function excluir(Entity $entidade){
        $tabela = static::$tabela;
        $banco = new Database;
        $sql = "DELETE FROM {$tabela} WHERE id = ?";
        return $banco->executar($sql, [$entidade->idCliente]);
    }

    public static function inserir(Entity $entidade){
        $tabela = static::$tabela;
        
        $sql = "INSERT INTO {$tabela}";

        $campos = [];
        $coringas = [];
        $dados = [];
        $propriedades = $entidade->getProps();
        
        foreach($propriedades as $propriedade => $valor){
            if(!is_null($entidade->$propriedade)){
                array_push($campos,$propriedade);
                array_push($dados,$valor);
                array_push($coringas,"?");
            }
        }

        $campos = implode(',',$campos);
        $coringas = implode(',',$coringas);
        $sql .= "({$campos}) VALUES ({$coringas})";
        
        $banco = new Database();
        return $banco->executar($sql, $dados);
    }

    public static function editar(Entity $entidade){
        $tabela = static::$tabela;
        $banco = new Database;

        $sql = "UPDATE {$tabela} SET";

        $campos = "";
        $dados = [];
        $propriedades = $entidade->getProps();

        foreach($propriedades as $propriedade => $valor){
            if($propriedade != 'id' && !is_null($entidade->$propriedade)){
                $campos .= " {$propriedade} = ?,";
                array_push($dados,$valor);
            }
        }

        $campos = rtrim($campos, ',');
        $sql .= "{$campos} WHERE id = ?";
        array_push($dados,$entidade->id);

        return $banco->executar($sql,$dados);
    }
    
}