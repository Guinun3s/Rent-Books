<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Core\Database;
use Rentbooks\Model\Entities\Livro;

class LivrosDAO extends DAO{

    protected static string $tabela = "livros";
    protected static string $classe = Livro::class;
    
    public function filtrarGenero($genero){
        $sql = "SELECT * FROM livros WHERE genero = ?";
        $banco = new Database;
        $banco->executar($sql, [$genero]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarPreco($preco){
        $sql = "SELECT * FROM livros WHERE preco <= ?";
        $banco = new Database;
        $banco->executar($sql, [$preco]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarModo($modo){
        $sql = "SELECT * FROM livros WHERE modo = ?";
        $banco = new Database;
        $banco->executar($sql, [$modo]);
        return $banco->retorna(Livro::class);
    }

    public function filtrarTitulo($titulo){
        $sql = "SELECT * FROM livros WHERE titulo = ?";
        $banco = new Database;
        $banco->executar($sql, [$titulo]);
        return $banco->retorna(Livro::class);
    }


}