<?php
require "topo.view.php";

use Rentbooks\model\DAO\UsuariosDAO;
use Rentbooks\Model\Entities\Usuario;

$usuario = new Usuario;
$usuario->email = $_POST["email"] ?? "";
$usuario->senha = $_POST["senha"] ?? "";
$dao = new UsuariosDAO();
$resultado = $dao->consultar($usuario); 

?>
<main class="principal">
      <div class="nav-alternativa">
        <a class="btn-voltar" href="<?=url_base('')?>">
          <i class="fa-solid fa-chevron-left"></i>
            Voltar
        </a>     
      </div>    
    <div class="form-container">
        <form id="login-form" action="<?=url_base('')?>" method="POST">
          <h2><i class="fa-solid fa-key"></i> Login</h2>
          <input type="text" placeholder="usuario" name="email" required>
          <input type="password" placeholder="Senha" name="senha" required>
          <button class="btn">
            <i class="fa-solid fa-unlock"></i>
            Login
          </button>
          <a href="<?=url_base('formulario')?>" class="btn verde-claro">
            <i class="fa fa-user" aria-hidden="true"></i>
            Criar Conta
          </a>
        </form>
     </div>
    </main>
<?php require "Rodape.view.php" ?> 