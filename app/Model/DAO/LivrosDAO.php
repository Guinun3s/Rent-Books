<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\Database;
use Rentbooks\Model\Entities\Livro;

class LivrosDAO{
    
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

    public function buscarTodos(){
        $sql = "SELECT * FROM livros";
        $banco = new Database;
        $banco->executar($sql);
        return $banco->retornaTodos(Livro::class);
    }
}