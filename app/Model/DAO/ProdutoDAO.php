<?php

namespace Rentbooks\Model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;

class ProdutoDAO extends DAO{
    protected static string $tabela = "produto";
    protected static string $classe = Produto::class;

    public static function retornaId($codUsuario){
        $tabela = static::$tabela;
        $sql = "SELECT codLivros FROM {$tabela} WHERE codUsuario = ?";
        $banco = new Database;
        $banco->executar($sql,[$codUsuario]);
        return $banco->retornaTodos(static::$classe);
    }
}