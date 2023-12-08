<?php require "topo.view.php" ?>
<main>
    <!-- Esta página exibe os livros comprados ou lugados pelo usuario, mas ainda não esta funcionando-->
        <img src="<?=img('rentbooks2.png')?>" id="imgp">

        <?=flash()?>

        <h1 id="h1p">MEU PERFIL</h1>

        <div class="pc">
            <h1 id="h1pa">Alugados no momento:</h1>
            <div class="pc2">
                <div>
                   <img src="<?=imgLivros('alicenopaisdasmaravilhas.jpg')?>" class="lpv">
                    <h2>Devolução em: 12/12/2023</h2> 
                </div>
            </div>
        </div>

        <div class="pc">
            <h1 id="h1pa">Livros Comprados:</h1>
            <div class="pc2">
                <div>
                    <img src="<?=imgLivros('acorpurpura.jpg')?>" class="lpv">
                    <h2>A Cor Púrpura - Alice Walker</h2>
                </div>
            </div>
        </div>
        

        <div id="links">
            <div>
                <a href="<?=url_base('produtos')?>">MAIS LIVROS</a>
            </div>
            <div>
                <a href="<?=url_base('painel')?>">PAINEL DE VENDAS</a>
            </div>
        </div>

        <img src="<?=img('romances2.png')?>" id="imgp">

    </main>

<?php require "rodape.view.php"?>