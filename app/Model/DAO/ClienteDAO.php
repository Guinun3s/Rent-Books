<?php

    namespace Ifba\Model\DAO;

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
        }
    }
/*
<?php

    namespace Ifba\Model\DAO;

    use Ifba\Core\Database;

    class UsuariosDAO # Classe responsável por inserir os dados no banco
    {
        public function inserir($usuario){

            # CÓDIGO SQL
            $sql = "INSERT INTO usuarios (nome, email, usuario, senha, lider, turma_id) VALUES (?, ?, ?, ?, ?, ?)";

            $dados = [
                $usuario->nome,
                $usuario->email,
                $usuario->usuario,
                $usuario->senha,
                $usuario->lider,
                $usuario->turma_id
            ];

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