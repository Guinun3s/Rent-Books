<?php require "topo.view.php" ?>
<main>
         
    <div id="login_1">
      <?=flash()?>
      <form id="login" action="<?=url_base('logar')?>" method="POST">
        <h2 id="login1"> LOGIN</h2>
        <input type="text" placeholder="Email" name="email" >
        <input type="password" placeholder="Senha" name="senha" >
        <div id="butlogin">
        <button class="btnLogin">
          Login
        </button>
        <a href="<?=url_base('formulario')?>" class="btnLogin">
          Cadastrar
        </a>
      </div>
      </form>
      <div>
        <a class="btnVoltar" href="<?=url_base('')?>">
            Voltar
        </a>     
      </div> 
     </div>
    </main>
<?php require "Rodape.view.php" ?> 