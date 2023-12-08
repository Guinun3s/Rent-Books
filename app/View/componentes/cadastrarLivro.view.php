<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('misterios2.png')?>" id="imgp">
    
    <h1 id="titform">CADASTRE SEU LIVRO AQUI!</h1>
    <?=flash()?>
    <form method="POST" id="forms" action=<?=url_base('adicionarLivro')?>>
        <fieldset class="forms">
        <p>Titulo do livro</p>    
        <label>
            <input type="text" name="titulo" placeholder="Digite o título do livro" value="<?=getValue('titulo')?>" class="inputForms">
        </label>
        </fieldset>	
            <br>
        <fieldset class="forms">
        <p>Autor do livro</p>    
        <label> 
            <input type="text" name="autor" placeholder="Adicione o autor do livro" value="<?=getValue('autor')?>" class="inputForms">
        </label>
        </fieldset>
        <br>
        <fieldset class="forms">
        <p>Vendedor do livro</p>    
        <label> 
            <input type="text" name="vendedor" placeholder="Adicione o vendedor do livro" value="<?=getValue('vendedor')?>" class="inputForms">
        </label>
        </fieldset>
            <br>
            <fieldset class="forms">
        <p>Preço do livro</p>    
        <label>
            <input type="number" name="preco" placeholder="Digite o preço do livro" value="<?=getValue('preco')?>" class="inputForms" step="0.01">
        </label>
        </fieldset>	
            <br>
        <fieldset class="forms">
        <p>Gênero do livro</p>    
        <label> 
            <input type="text" name="genero" placeholder="Adicione o gênero do livro" value="<?=getValue('genero')?>" class="inputForms">
        </label>
        </fieldset>
            <br>
        <fieldset class="forms">
            <p>Modo de venda</p>
            <div class="opcForms">
                <div class="opc">
                <label>Vender</label>
                <input type="radio" name="modo" value="vender">
                </div>
                <div class="opc">
                <label>Aluguel</label>
                <input type="radio" name="modo" value="alugar">
              </div>
            </div>
        </fieldset>
        <fieldset class="forms">
        <p>Adicione uma descrição para o livro</p>
        <br>
        <label >
            <textarea name="descricao" rows="15" id="msgForms" value="<?=getValue('descricao')?>" > </textarea>
        </label>
        </fieldset>
        <br>
        <fieldset class="forms">
            <!-- Não está funcionando -->
            <p>Adicione uma capa para o livro</p>
            <input type="file" name="imagem" id="imagem">
        </fieldset>
        <div id="envio">
            <button type="submit" id="btnForms">Enviar</button>
        </div>
    </form>
    <br>
    <div>
        <a class="btnVoltar" href="<?=url_base('painel')?>">
            Voltar
        </a>     
      </div> 
</main>
<?php require "Rodape.view.php" ?> 