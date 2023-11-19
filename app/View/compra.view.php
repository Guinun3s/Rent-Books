<?php require "topo.view.php";
require "pesquisa.view.php";
?>
<main>
    <div id="compralivro">
        <?php foreach($livros as $livro) { ?>
        <img src="<?=$livro['imagem']?>">

        <div id="compralivro2">
            <h1><?=$livro['titulo']?></h1>
            <h3>Por <?=$livro['autor']?></h3>
            <h3>Disponível por <?=$livro['vendedor']?></h3>
            <h2>R$ <?=number_format($livro['preco'],2)?></h2>
            <p><?=$livro['descricao']?></p>
            <?php } ?>

        </div>
    </div>

    <a href="<?=url_base('carrinho')?>" id="adcar">ADICIONAR AO CARRINHO</a>
    
    <img src="<?=img('romances.png')?>" id="imgpc">

</main>
<?php require "Rodape.view.php" ?> 