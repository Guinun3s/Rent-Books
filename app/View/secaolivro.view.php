<?php require "topo.view.php";
include "livros.php"; 

$filtraCategoria = fn($livro) => $livro["genero"] == $_GET['categoria'] ?? null;
$livros = array_filter($livros,$filtraCategoria);

?>
<main>

    <div id="pesquisa">
        <div id="pesquisa1">
            <img src="<?=img('lupa.png')?>">
            <form method="get" >
                    <label>
                        <input type="search" name="categoria" placeholder="Digite o que procura...">
                    </label>
            </form>
        </div>
    
        <div id="logoPesquisa">
            <img src="<?=img('logobranca1.png')?>" id="imgpesquisa">
        </div>
    </div>

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

    <img src="<?=img('romances.png')?>" id="imgp2">

</main>
<?php require "Rodape.view.php" ?> 