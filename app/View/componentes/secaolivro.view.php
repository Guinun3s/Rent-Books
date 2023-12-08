<?php require "topo.view.php" ?>
<main>

    <div id="pesquisa">
        <div>
            <form method="get" >
                    <label id="pesquisa1">
                        <input type="search" name="pesquisa" placeholder="Pesquise aqui o livro desejado">
                        <div><button><img src="<?=img('lupa.png')?>"></button></div>
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
              <fieldset class="filtro">
              <p>Categoria:</p>
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
                <input type="radio" name="genero" id="informativo" value="informativo">
                <label for="Clássico">Informativo</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Suspense" value="suspense">
                <label for="Suspense">Suspense</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Mangá" value="mangá">
                <label for="Mangá">Mangá</label>
              </div>
              <div>
                <input type="radio" name="genero" id="Poesia" value="poesia">
                <label for="Mangá">Poesia</label>
              </div>
              </fieldset>

              <fieldset class="filtro">
              <p>Preço:</p>
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
              </fieldset>
              <fieldset class="filtro">
                <p>Forma de venda:</p>
                <div>
                <input type="radio" name="modo" id="Aluguel" value="alugar">
                <label>Aluguel</label>
              </div>
              <div>
                <input type="radio" name="modo" id="Venda" value="vender">
                <label>Venda</label>
              </div>
              </fieldset>
              <div id="btns">
                <button name="filtrar" class="btnForms"> Filtrar </button>
                <button name="limpar" class="btnForms" href="<?url_base('secaolivro')?>"> Limpar filtro </button>
              </div>
            </form>
        </aside>
        
        <div class="secaoaluguel">
          <div id="resultados"><h3><?=count($livros)?> resultados encontrados</h3></div>
          <div class="secaoaluguel">
            <?php foreach($livros as $livro){ ?>
            <div class="cardaluguel">
              <a href="<?=url_base('compra')?>?idLivro=<?=$livro->idLivro?>">
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

    <img src="<?=img('romances2.png')?>" id="imgp2">

</main>
<?php require "Rodape.view.php"?> 