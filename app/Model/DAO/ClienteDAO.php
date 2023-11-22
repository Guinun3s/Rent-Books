<?php

    namespace Ifba\Model\DAO;

    use Ifba\Core\Database;

    class ClienteDAO{

        public function inserir($cliente){

            $sql = "insert into Cliente(idCliente, bairro, cep, numero, rua, telefone, email, senha) values (?,?,?,?,?,?,?,?)";

            $dados = [
                $cliente->idCliente,
                $cliente->bairro,
                $cliente->cep,
                $cliente->numero,
                $cliente->rua,
                $cliente->telefone,
                $cliente->email,
                $cliente->senha

            ];

            $banco = new Database;
            return $banco->executar($sql, $dados);
        }
    }
/*
            $banco = new Database;

            return $banco->executar($sql, $dados);

        }

        public function buscarTodos(){
            $sql = "SELECT * FROM usuarios";

            $banco = new Database;
            $banco->executar($sql);
            return $banco->retornaTodos();
        }
    }
*/