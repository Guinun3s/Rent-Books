<?php

    namespace Rentbooks\Model\Entities;
    use Rentbooks\Core\Entity;

class Cliente extends Entity{  
    protected ?int $idCliente;
    protected ?string $nome;
    protected ?string $dataNascimento;
    protected ?string $telefone;
    protected ?string $cpf;
    protected ?string $email;
    protected ?string $senha;
    protected ?string $cep;
    protected ?string $cidade;
    protected ?string $rua;
    protected ?string $bairro;
    protected ?string $numero;

        public function alugaProduto(){
        }

    public static function getRegras() : array
    {
        return [
            'nome' => 'obrigatorio|maiorque::4',
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio',
            'cpf' => 'obrigatorio',
            'telefone' => 'obrigatorio'
        ];
    }

    public function compraProduto(){
            
        }

}
        
        
    
