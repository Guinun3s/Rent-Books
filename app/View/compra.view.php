<?php require "topo.view.php"; 
$livros = require "livros.php";
?>
<main>
    <div id="compralivro">
        <img src="<?=$livros[1]['imagem']?>">

        <div id="compralivro2">
            <h1><?=$livros[1]['titulo']?></h1>
            <h3>Por Stephenie Meyer <?=$livros[1]['autor']?></h3>
            <h3>Disponível por <?=$livros[1]['vendedor']?>/h3>
            <h2>R$ <?=$livros[1]['preco']?></h2>
            <p><?=$livros[1]['descricao']?></p>
        </div>
    </div>

    <a href="<?=url_base('carrinho')?>" id="adcar">ADICIONAR AO CARRINHO</a>
    
    <img src="<?=img('romances.png')?>" id="imgpc">

</main>
<?php require "Rodape.view.php" ?> 