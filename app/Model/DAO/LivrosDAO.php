<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;
use Rentbooks\Model\Entities\Livro;

class LivrosDAO extends DAO{

    protected static string $tabela = "livro";
    protected static string $classe = Livro::class;
    
    public function filtrarGenero($genero){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE genero = ?";
        $banco = new Database;
        $banco->executar($sql, [$genero]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarPreco($preco){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE preco <= ?";
        $banco = new Database;
        $banco->executar($sql, [$preco]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarModo($modo){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE modo = ?";
        $banco = new Database;
        $banco->executar($sql, [$modo]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarTitulo($titulo){
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE titulo = ?";
        $banco = new Database;
        $banco->executar($sql, [$titulo]);
        return $banco->retorna(Livro::class);
    }


}