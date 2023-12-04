<?php

namespace Rentbooks\Model\Entities;

class Livro{

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