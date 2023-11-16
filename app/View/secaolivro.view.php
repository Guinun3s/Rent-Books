<?php require "topo.view.php";
require "pesquisa.view.php";
?>
<main>

    <div id="pesquisa">
        <div id="pesquisa1">
            <img src="<?=img('lupa.png')?>">
            <form method="get" >
                    <label>
                        <input type="search" name="pesquisa" placeholder="Digite o que procura...">
                    </label>
            </form>
        </div>
    
        <div id="logoPesquisa">
            <img src="<?=img('logobranca1.png')?>" id="imgpesquisa">
        </div>
    </div>

    <div id = "secaoalugue">
        <aside>
            <h2>Categorias</h2>
            <ul>
                <li><a href="<?=url_base('secaolivro?genero=Clássico')?>">Clássico</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Ficção')?>">Ficção</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Fantasia')?>">Fantasia</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Realismo')?>">Realismo</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Romance')?>">Romance</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Infantil')?>">Infantil</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Suspense')?>">Suspense</a></li>
                <li><a href="<?=url_base('secaolivro?genero=Aventura')?>">Aventura</a></li>
            </ul>
        </aside>
        
        <div class="secaoaluguel">
            <?php foreach($livros as $livro){ ?>
            <div class="cardaluguel">
                <a href="<?=url_base('compra')?>">
                <img src="<?=$livro['imagem']?>">
                <div class="txtsecaoaluguel">
                    <p><?=$livro['titulo']?></p>
                    <h2>R$ <?=$livro['preco']?></h2>
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>

    <img src="<?=img('romances.png')?>" id="imgp2">

</main>
<?php require "Rodape.view.php" ?> 