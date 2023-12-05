<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('misterios2.png')?>" id="imgp">
    
    <h1 id="titform">CADASTRE-SE NO NOSSO SITE!</h1>
    <?=flash()?>
    <form method="POST" id="forms" action=<?=url_base('cadastrarConta')?>>
        <fieldset>
        <label> Nome Completo:
            <input type="text" name="nome" placeholder="Digite seu nome completo" value="<?=getValue('nome')?>">
        </label>
        </fieldset>	
            <br>
        <fieldset>
        <label> Email:
            <input type="email" name="email" placeholder="Entre com seu email" value="<?=getValue('email')?>">
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label>Senha (minímo 8 caractéres):
            <input type="password" name="senha" minlength="8" value="<?=getValue('senha')?>">
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label> Data de Nascimento:
            <input type="date" name="dataNascimento" value="<?=getValue('dataNascimento')?>">
        </label>
        </fieldset>
            <br>
        <fieldset>
        <label> CPF:
            <input type="text" name="cpf" placeholder="Digite seu CPF" maxlength="11" value="<?=getValue('cpf')?>">
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label> Número de telefone:
            <input type="tel" name="telefone" placeholder="Digite seu número de telefone" maxlength="12" value="<?=getValue('telefone')?>">
        </label>
        </fieldset>
            <br>
        <fieldset>
            <label>Cep
                <input type="text" name="cep" placeholder="Digite seu cep">
            </label>
        </fieldset>
            <br>
        <fieldset>
            <label>Cidade
                <input type="text" name="cidade" placeholder="Digite sua cidade">
            </label>
        </fieldset>
        <br>
        <fieldset>
            <label>Rua
                <input type="text" name="rua" placeholder="Digite sua rua">
            </label>
        </fieldset>
        <br>
        <fieldset>
            <label>Bairro
                <input type="text" name="bairro" placeholder="Digite seu bairro">
            </label>
        </fieldset>
        <br>
        <fieldset>
            <label>Número
                <input type="text" name="numero" placeholder="Digite o número da sua casa">
            </label>
        </fieldset>
        <br>
        <fieldset>
        <label> Deixe sua opnião sobre nossos serviços aqui:</label>
        <br>
        <label>
            <textarea name="mensagem" rows="15"> </textarea>
        </label>
        </fieldset>
        <br>
        
        <div id="envio">
        <button type="submit"><strong>Enviar</strong></button>
        </div>
    </form>
    <div id="voltar">
        <a href="<?=url_base('login')?>"><strong>Voltar</strong></a>
    </div>
</main>
<?php require "Rodape.view.php" ?> 