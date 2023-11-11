<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('estudantis.png')?>" id="imgp">
    <div id="pesquisa">
        <div id="pesquisa1">
            <img src="<?=img('lupa.png')?>">
            <form>
                    <label>
                        <input type="text" name="produto" placeholder="Digite o que procura...">
                    </label>
            </form>
        </div>
    
        <div id="logoPesquisa">
            <img src="<?=img('logobranca1.png')?>" id="imgpesquisa">
        </div>
    </div>

    <div id="secaoaluguel">

        <div class="cardaluguel">
            <a href="<?=url_base('compra')?>">
            <img src="<?=imgLivros('soldameianoite.jpg')?>">
            <p>Sol da Meia-noite - Aluguel</p>
            <h2>R$ 5,47</h2>
            </a>
        </div>

        <div class="cardaluguel">
            <img src="<?=imgLivros('eassimqueacaba.jpg')?>">
            <p>É Assim que Acaba - Aluguel</p>
            <h2>R$ 5,15</h2>
        </div>

        <div class="cardaluguel">
            <img src="<?=imgLivros('memoriaspostumasdebrascubas.jpg')?>">
            <p>Memórias Póstumas de Brás Cubas - Aluguel</p>
            <h2>R$ 2,50</h2>
        </div>

    </div>

    <div id="secaoaluguel1">
        <div id="divide">
            <img src="<?=imgLivros('javacomoprogramar.jpg')?>">
            <h1>JÁ PENSOU EM PODER ALUGAR SEUS LIVROS NOVOS OU USADOS DE FORMA FÁCIL E LUCRATIVA?</h1>
        </div>

        <h2>AQUI NA RENT BOOKS ISSO SE TORNA POSSÍVEL!</h2>

        <a href="<?=url_base('formulario')?>">ACESSE NOSSA PÁGINA PARA FORNECEDORES!</a>
    </div>
</main>
<?php require "Rodape.view.php" ?> 