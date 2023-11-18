<?php require "topo.view.php";
$livros = require "livros.php"?>
<main>
    <div id="compralivro">
        <img src="<?=$livros[0]['imagem']?>">

        <div id="compralivro2">
            <h1><?=$livros[0]['titulo']?></h1>
            <h3>Por <?=$livros[0]['autor']?></h3>
            <h3>Disponível por <?=$livros[0]['vendedor']?></h3>
            <h2>R$ <?=$livros[0]['preco']?></h2>
            <p><?=$livros[0]['descricao']?></p>
        </div>
    </div>

    <a href="<?=url_base('carrinho')?>" id="adcar">ADICIONAR AO CARRINHO</a>
    
    <img src="<?=img('romances.png')?>" id="imgpc">

</main>
<?php require "Rodape.view.php" ?> 