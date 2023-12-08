<?php require "topo.view.php" ?>
<main>
        <img src="<?=img('rentbooks2.png')?>" id="imgp">

        <?=flash()?>

        <h1>ÁREA DO VENDEDOR</h1> 

        <!-- Os livros serião exibidos aqui através do foreach:
        <div id="p_v">
            <h2>Livros Publicados por José:</h2> 
            <?php foreach($livros as $livro){ ?>
            <div class="pc1">
              <img src="<?=$livro->imagem?>">
              <h3><?=$livro->ititulo?> - <?=$livro->imodo?></h3> 
            </div>
            <?php } ?>-->
            <div >
                <img src="imagens/livros/acorpurpura.jpg" id="lpv"> 
                <h3>A Cor Púrpura - Vender</h3> 
            </div>

            <div class="pc1">
                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">
                <h3>Alice no País das Maravilhas - Alugar por 15 dias</h3>
            </div>

            <div class="pc1">
                <img src="imagens//livros/ohobbit.jpg" id="lpv">
                <h3>O Hobbit - Alugar por 15 dias</h3>
            </div>
        </div>

        <div class="pc1">

            <h1>Livros que estão alugados no momento:</h1>

            <div class="pc1">

                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">

                <div>
                    <h2>Alugado por Antônia - Paraíba / Bahia</h2> 
                </div>

            </div>

        </div>

        <div class="pc1">

            <h1>Alugados por você no momento:</h1>
            
            <div class="pc1">
                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">
                <div>
                    <h2>Devolução em: 12/12/1212</h2> 
                </div>

            </div>

        </div>

            <div id="pc1">

                <div id="btnLivro">
                    <a href="<?=url_base('cadastrarLivro')?>">Adionar livro</a>
                </div>

            </div>
            
        <img src="<?=img("romances2.png")?>" id="imgp">

    </main>

<?php require "rodape.view.php"?>