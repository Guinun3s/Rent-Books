<?php

namespace Rentbooks\Model\Entities;
use Rentbooks\Core\Entity;

class Livro extends Entity{

   public ?int $idLivro; 
   public ?string $titulo;
   public ?string $modo; 
   public ?string $autor; 
   public ?float  $preco; 
   public ?string $descricao;
   public ?string $genero;
   public ?string $idUsuario;
   public ?string $imagem;

   public static function getRegras() : array
    {
        return [
            'titulo' => 'obrigatorio|maiorque::4',
            'modo' => 'obrigatorio',
            'autor' => 'obrigatorio',
            'preco' => 'obrigatorio',
            'descricao' => 'obrigatorio',
            'genero' => 'vendedor',
        ];
    }

}