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
   public ?string $vendedor;
   public ?string $imagem;
}