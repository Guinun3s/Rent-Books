<?php

namespace Rentbooks\model\DAO;

use Rentbooks\Core\DAO;
use Rentbooks\Model\Entities\Usuario;

class ClientesDAO extends DAO{

    protected static string $tabela = "cliente";
    protected static string $classe = Usuario::class;
    
}