<?php

use Rentbooks\model\DAO\LivrosDAO;
use Rentbooks\Model\Entities\Livro;

 require "topo.view.php";
//require "pesquisa.view.php";

$livros = new Livro();
$dao = new LivrosDAO();
$livros->genero = $_GET["genero"] ?? null;
$livros->preco = $_GET["preco"] ?? null;
$livros->modo = $_GET["modo"] ?? null;

if($livros->genero){
  $livros = $dao->filtrarGenero($livros->genero);
}
else if($livros->preco){
  $livros = $dao->filtrarPreco($livros->preco);
}
else if($livros->modo){
  $livros = $dao->filtrarModo($livros->modo);
}
else{
  $livros = $dao->buscarTodos();
}

?>
<main>

    <div id="pesquisa">
        <div id="pesquisa1">
            <img src="<?=img('lupa.png')?>">
            <form method="get">
                    <label>
                        <input type="search" name="pesquisa" placeholder="Pesquise aqui o livro desejado">
                        <button></button>
                    </label>
            </form>
        </div>
    
        <div id="logoPesquisa">
            <img src="<?=img('logobranca1.png')?>" id="imgpesquisa">
        </div>
    </div>

    <div id = "secaoalugue">
        <aside>
            <h2>Filtro</h2>
            <form method="get">
              <fieldset>
              <legend>Categoria:</legend>
              <div>
                <input type="radio" name="genero" id="Romance" value="romance">
                <label for="Romance">Romance</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Fantasia" value="fantasia">
                <label for="Fantasia">Fantasia</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Ficção" value="ficção">
                <label for="Ficção">Ficção</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Clássico" value="clássico">
                <label for="Clássico">Clássico</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Suspense" value="suspense">
                <label for="Suspense">Suspense</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Mangá" value="mangá">
                <label for="Mangá">Mangá</label>
              </div>
              </fieldset>

              <fieldset>
              <legend>Preço:</legend>
                <div>
                  <input type="radio" name="preco" value="10">
                  <label for="10">Até R$ 10,00</label>
                </div>
                <div>
                  <input type="radio" name="preco" value="20">
                  <label for="20">Até R$ 20,00</label>
                </div>
                <div>
                  <input type="radio" name="preco" value="30">
                  <label for="30">Até R$ 30,00</label>
                </div>
                <div>
                  <input type="radio" name="preco" value="40">
                  <label for="40">Até R$ 40,00</label>
                </div>
                <div>
                  <label>Digite o preço:
                    <input type="number" name="precop" step="0.01">
                  </label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Forma de venda</legend>
                <div>
                <input type="radio" name="modo" id="Aluguel" value="alugar">
                <label>Aluguel</label>
              </div>
              <div>
                <input type="radio" name="modo" id="Venda" value="vender">
                <label>Venda</label>
              </div>
              </fieldset>
              <button name="filtrar"> Filtrar </button>
              <button name="limpar" href="<?url_base('secaolivro')?>"> Limpar filtro </button>
            </form>
        </aside>
        
        <div class="secaoaluguel">
          <div id="resultados"><h3><?=count($livros)?> resultados encontrados</h3></div>
          <div class="secaoaluguel">
            <?php foreach($livros as $livro){ ?>
            <div class="cardaluguel">
              <a href="<?=url_base('compra')?>?titulo=<?=$livro->titulo?>">
              <img src="<?=$livro->imagem?>">
              <div class="txtsecaoaluguel">
                <p><?=$livro->titulo?></p>
                <h2>R$ <?=number_format($livro->preco,2)?></h2>
              </div>
              </a>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>

    <img src="<?=img('romances.png')?>" id="imgp2">

</main>
<?php require "Rodape.view.php"?> 