<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('misterios2.png')?>" id="imgp">
    
    <h1 id="titform">CADASTRE-SE NO NOSSO SITE!</h1>
    <?=flash()?>
    <form method="POST" id="forms" action=<?=url_base('cadastrarConta')?>>
        <fieldset class="forms">
        <p>Nome Completo</p>    
        <label>
            <input type="text" name="nome" placeholder="Digite seu nome completo" value="<?=getValue('nome')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
        <p>Email</p>    
        <label> 
            <input type="email" name="email" placeholder="Entre com seu email" value="<?=getValue('email')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
        <p>Senha (minímo 8 caractéres)</p>   	
        <label>
            <input type="password" name="senha" minlength="8" value="<?=getValue('senha')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
        <p>Data de Nascimento</p>    	
        <label> 
            <input type="date" name="dataNascimento" value="<?=getValue('dataNascimento')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
        <p>CPF</p>    
        <label> 
            <input type="text" name="cpf" placeholder="Digite seu CPF" maxlength="11" value="<?=getValue('cpf')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
        <p>Número de telefone</p>	
        <label> 
            <input type="tel" name="telefone" placeholder="Digite seu número de telefone" maxlength="12" value="<?=getValue('telefone')?>" class="inputForms">
        </label>
        </fieldset>
        <fieldset class="forms">
            <p>Deseja ser um vendedor?</p>
            <div class="opcForms">
                <div class="opc">
                <label>Sim</label>
                <input type="radio" name="vendedor" value="1">
                </div>
                <div class="opc">
                <label>Não</label>
                <input type="radio" name="vendedor" value="0">
              </div>
            </div>
        </fieldset>
        <fieldset class="forms">
            <p>Estado</p>
                <input type="text" name="estado" placeholder="Digite o estado que você mora" class="inputForms">
        </fieldset> 
        <fieldset class="forms">
            <p>Cep</p>
                <input type="text" name="cep" placeholder="Digite seu cep" class="inputForms">
        </fieldset>
        <fieldset class="forms">
            <p>Cidade</p>
                <input type="text" name="cidade" placeholder="Digite sua cidade" class="inputForms">
        </fieldset>
        <fieldset class="forms">
            <p>Rua</p>
                <input type="text" name="rua" placeholder="Digite sua rua" class="inputForms">
        </fieldset>
        <fieldset class="forms">
            <p>Bairro</p>
                <input type="text" name="bairro" placeholder="Digite seu bairro" class="inputForms">
        </fieldset>
        <fieldset class="forms">
        <p> Deixe sua opnião sobre nossos serviços aqui:</p>
        <br>
        <label >
            <textarea name="mensagem" rows="15" id="msgForms"> </textarea>
        </label>
        </fieldset>
        <div id="envio">
            <button type="submit" id="btnForms">Enviar</button>
        </div>
    </form>
</main>
<?php require "Rodape.view.php" ?> 