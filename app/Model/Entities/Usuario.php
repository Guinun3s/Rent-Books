<?php

    namespace Rentbooks\Model\Entities;
    use Rentbooks\Core\Entity;

class Usuario extends Entity{  
    protected ?int $idUsuario;
    protected ?string $nome;
    protected ?string $dataNascimento;
    protected ?string $telefone;
    protected ?string $cpf;
    protected ?string $email;
    protected ?string $senha;
    protected ?string $vendedor;
    protected ?string $estado;
    protected ?string $cep;
    protected ?string $cidade;
    protected ?string $rua;
    protected ?string $bairro;

        public function alugaProduto(){
        }

    public static function getRegrasc() : array
    {
        return [
            'nome' => 'obrigatorio|maiorque::4',
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio',
            'cpf' => 'obrigatorio',
            'telefone' => 'obrigatorio',
            'estado' => 'obrigatorio',
            'cidade' => 'obrigatorio',
            'vendedor' => 'obrigatorio'
        ];
    }

    public static function getRegrasl() : array
    {
        return [
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio'
        ];
    }

    public function compraProduto(){
            
        }

}
        
        
    
