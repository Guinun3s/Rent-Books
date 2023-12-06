<?php require "topo.view.php" ?>
<main class="principal">
      <div class="">
        <a class="btn-voltar" href="<?=url_base('')?>">
            Voltar
        </a>     
      </div>    
    <div class="login">
      <?=flash()?>
      <form id="" action="<?=url_base('cliente')?>" method="POST">
        <h2><i class=""></i> Login</h2>
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="senha" required>
        <button class="btnLogin">
          Login
        </button>
        <a href="<?=url_base('formulario')?>" class="btnLogin">
          Cadastrar
        </a>
      </form>
     </div>
    </main>
<?php require "Rodape.view.php" ?> 