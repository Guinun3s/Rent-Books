<?php

    namespace Rentbooks\Model\DAO;

use Rentbooks\Core\Database;
use Rentbooks\Model\Entities\Produto;

    class ProdutoDAO{

        public function inserir($produto){

            $sql = "INSERT INTO Produto(idProduto, codFornecedor, codLivros)";
        
            $dados = [
                $produto->idProduto,
                $produto->codFornecedor,
                $produto->codLivro
            ];

            $banco = new Database; // Aqui estpu crianco um banco que está em Database
            return $banco->executar($sql, $dados);
        }

        public function buscarTodos(){
            $sql = "SELECT * FROM Produto";

            $banco = new Database;
            $banco->executar($sql);
            return $banco->retornaTodos(Produto::class);
        }
    }