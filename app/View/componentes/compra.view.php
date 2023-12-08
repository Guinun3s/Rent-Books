<?php
 require "topo.view.php";

?>
<main>
    <div id="compralivro">
       
        <img src="<?=$livro->imagem?>">

        <div id="compralivro2">
            <h1><?=$livro->titulo?></h1>
            <h3>Por <?=$livro->autor?></h3>
            <h3>Disponível por <?=$dono->nome?></h3>
            <h2>R$ <?=number_format($livro->preco,2)?></h2>
            <p><?=$livro->descricao?></p>
           

        </div>
    </div>

    <a href="<?=url_base('carrinho')?>" id="adcar">ADICIONAR AO CARRINHO</a>
    
    <img src="<?=img('romances2.png')?>" id="imgpc">

</main>
<?php require "Rodape.view.php" ?> 