<?php require "topo.view.php" ?>
<main>

        <?=flash()?>

        <h1 class="txtPainel">ÁREA DO VENDEDOR</h1> 

       
        <!-- Os livros serião exibidos aqui através do foreach:-->
        <div id="p_v">
            <h2 class="txtPainel">Livros Publicados por <?=$usuario->nome?>:</h2> 
        
            <div class="pc1">
            <?php foreach($livros as $livro){ ?>
                <div>
              <img src="<?=$livro->imagem?>">
              <h3><?=$livro->titulo?> - <?=$livro->modo?></h3> 
            </div>            
            <?php } ?>
        </div>
        </div> 

        <div>
            <h1 class="txtPainel">Livros que estão alugados no momento:</h1>

            <div class="pc1">
                <div>
                    <img src="<?=imgLivros('alicenopaisdasmaravilhas.jpg')?>" id="lpv">
                    <h2>Alugado por Antônia - Paraíba / Bahia</h2> 
                </div>
            </div>
        </div>
        
        <div id="links">
            <div id="btnLivro">
                <a href="<?=url_base('cadastrarLivro')?>">Adionar livro</a>
            </div>
            <div id="btnLivro">
                <a href="<?=url_base('usuario')?>">Voltar</a>
            </div>
        </div>
            
        <img src="<?=img("romances2.png")?>" id="imgp">

    </main>

<?php require "rodape.view.php"?>