<?php require "topo.view.php";
use Rentbooks\model\DAO\LivrosDAO;
use Rentbooks\Model\Entities\Livro;
$livros = new Livro();
$dao = new LivrosDAO();
$livros->modo = "alugar"; 
$livros = $dao->filtrarModo($livros->modo);
?>
<main>
    <img src="<?=img('estudantis.png')?>" id="imgp">
    <div id="pesquisa">
        <div id="pesquisa1">
            <img src="<?=img('lupa.png')?>">
            <form>
                    <label>
                        <input type="search" name="pesquisa" placeholder="Pesquise aqui o livro desejado">
                    </label>
            </form>
        </div>
    
        <div id="logoPesquisa">
            <img src="<?=img('logobranca1.png')?>" id="imgpesquisa">
        </div>
    </div>

    <div class="secaoaluguel">
            <?php foreach($livros as $livro){ ?>
            <div class="cardaluguel">
                <a href="<?=url_base('compra')?>?titulo=<?=$livro->titulo?>">
                <img src="<?=$livro->imagem?>">
                <div class="txtsecaoaluguel">
                    <p><?=$livro->titulo?></p>
                    <h2>R$ <?=number_format($livro->preco,2)?></h2>
                </div>
                </a>
            </div>
            <?php } ?>

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