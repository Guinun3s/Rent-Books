<?php require "topo.view.php" ?>

<main>
        <img src="<?=img('rentbooks1.png')?>" id="imgp">

        <div id="secao1">
            <div id="secao1_1">
                <h1>RENT BOOK APRESENTA: OS MELHORES LIVROS DE POESIA DE 2023</h1>
                <p>CUIDADO COM QUEM TE AMA é uma obra do poeta Tiago Correia, baiano nascido em Salvador. Professor de Língua Portuguesa e suas Literaturas, Doutorando e Mestre pelo Programa de Literatura e Cultura do Instituto de Letras da Universidade Federal da Bahia (PPGLitCult/ILUFBA). Graduado em Letras Vernáculas (UFBA). É autor de - Dentro de Mim - ed. Mondrongo (2014), coautor de "Lugar de fala" (ed. devires, 2019), "Rabiscos" e "Antologia Poética" (2009), ambas pela ed. IFBA.</p>
            </div>
            <img src="public/imagens/livros/cuidadocomquemteama.jpg">
        </div>

        <div id="secaoprin">

            <div class="separasecao1">
                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Romance')?>"><h2>Romance</h2></a>
                <img src="public/imagens/livros/orgulhoepreconceito.jpg">
                </div>

                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Fantasia')?>"><h2>Fantasia</h2></a>
                <img src="public/imagens/livros/narnia.jpg">
                </div>

                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Ficção')?>"><h2>Ficção</h2></a>
                <img src="<?=imgLivros('abibliotecadameianoite.jpg')?>">
                </div>
            </div>

            <div class="separasecao1">
                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Clássico')?>"><h2>Clássico</h2></a>
                <img src="public/imagens/livros/domcasmurro.jpg">
                </div>

                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Suspense')?>"><h2>Suspense</h2></a>
                <img src="public/imagens/livros/agarotadolago.jpg">
                </div>

                <div class="secao1livro">
                <a href="<?=url_base('secaolivro?categoria=Mangá')?>"><h2>Mangá</h2></a>
                <img src="public/imagens/livros/naruto.jpg">
                </div>
            </div>
        </div>

        <div id="secao2">

            <div id="secao2_1">
                <img src="<?=img('dinheiro.png')?>">
                
                <div id="secao2_2">
                    <h1>JÁ PENSOU EM TER UMA RENDA EXTRA ALUGANDO LIVROS QUE JÁ LEU OU QUE NÃO USA MAIS?</h1>
                    <p>AQUI NA RENT BOOKS, VOCÊ CONSEGUE DISPONIBILIZAR SEUS LIVROS PARA ALUGAR E PARA VENDER!</p>
                </div>
            </div>

            <a href="<?=url_base('formulario')?>">CLIQUE AQUI</a>

        </div>

        <img src="<?=img('romances.png')?>" id="imgp">

        <div id="secao3">
            <img src="<?=imgLivros('vimoseouvimos.png')?>">

            <div src="secao2_3">
                <h1>ALUGUE JÁ!</h1>
                <h2>MAIOR LANÇAMENTO EM LIVROS RELIGIOSOS</h2>
                <p>DEPOIS DE SEU SUFICIENTE SACRIFÍCIO, Jesus de Nazaré ressuscitou dentre os mortos, vitorioso sobre a morte e o inferno, e estabeleceu sua Igreja. Por 40 dias, instruiu seus discípulos acerca do novo tempo, comissionando-os aos confins da terra, a partir de Jerusalém, para anunciar as boas-novas a toda tribo, língua e nação. Então, revestidos de poder do alto, cheios do Espírito Santo, eles partiram para anunciar salvação ao mundo. Essa mensagem, constituída de relatos daquilo que viram e ouviram, atravessou e enfrentou desertos, mares, prisões e perseguições. Ainda hoje, mais de 2.000 anos depois, a mensagem de esperança sobre os feitos do Deus-Homem reverbera em nossa sociedade? Não somente devido a Cristo e seu sacrifício, mas também por causa de homens e mulheres que não se calaram a respeito das coisas que viram e ouviram.</p>
            </div>
        </div>
    </main>
<?php require "Rodape.view.php" ?> 
