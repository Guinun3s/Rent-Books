<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('misterios.png')?>" id="imgp">
    <img src="<?=img('lupa.png')?>">
    <form>
        
    </form>
    <img src="<?=img('logobranca.png')?>">
    <div id="secaocompra">

        <div class="cardcompra">
            <img src="<?=imgLivros('omorrodosventosuivantes.jpg')?>">
            <p>O Morro dos Ventos Uivantes</p>
            <h2>R$ 12,80</h2>
        </div>

        <div class="cardcompra">
            <img src="<?=imgLivros('mentirosos.jpg')?>">
            <p>Mentiroso</p>
            <h2>R$ 29,99</h2>
        </div>

        <div class="cardcompra">
            <img src="<?=imgLivros('yourname.jpg')?>">
            <p>Your Name</p>
            <h2>R$ 20,47</h2>
        </div>

    </div>

    <div id="secao1_compra">
        <div id="divide">
            <img src="<?=imgLivros('boxcrepusculo.jpg')?>">

            <h1>JÁ PENSOU EM PODER VENDER SEUS LIVROS NOVOS OU USADOS DE FORMA FÁCIL E LUCRATIVA?</h1>
        </div>
        <h2>AQUI NA RENT BOOKS ISSO SE TORNA POSSÍVEL!</h2>
        <a href="<?=url_base('formulario')?>">ACESSE NOSSA PÁGINA PARA FORNECEDORES!</a>
    </div>
</main>
<?php require "Rodape.view.php" ?> 