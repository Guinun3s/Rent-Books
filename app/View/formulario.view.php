<?php require "topo.view.php" ?>
<main>
    <img src="<?=img('misterios.png')?>" id="imgp">
    
    <h1 id="titform">CADASTRE-SE NO NOSSO SITE!</h1>
    <form action="http://www.thiagomiranda.net/formulario.php." method="POST" id="forms">
        <fieldset>
        <label> Nome Completo:
            <input type="text" name="nomecompleto" placeholder="Digite seu nome completo">
        </label>
        </fieldset>	
            <br>
        <fieldset>
        <label> Email:
            <input type="email" name="email" placeholder="Entre com seu email">
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label>Senha (minímo 8 caractéres):
            <input type="password" name="senha" minlength="8" required>
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label> Data de Nascimento:
            <input type="date" name="datadenascimento">
        </label>
        </fieldset>
            <br>
        <fieldset>
        <label> 
            Genero:
        </label>
        <label for="sexom">
            <input type="radio" name="sexo" value="masculino">Masculino
        </label>
        <label for="sexof">
            <input type="radio" name="sexo" value="feminino" id="sexof">Feminino
        </label>
        </fieldset>
            <br>
        <fieldset>
        <label> CPF:
            <input type="text" name="cpf" placeholder="Digite seu CPF">
        </label>
        </fieldset>
            <br>
        <fieldset>	
        <label> Número de telefone:
            <input type="tel" name="telefone" placeholder="Digite seu número de telefone" maxlength="12">
        </label>
        </fieldset>
            <br>

        <fieldset>
        <label> Prestação de Serviço desejada:
        <select name="select">
            <option value="cliente">Cliente</option>
            <option value="distribuidor">Distribuidor(a)</option>
        </select>
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
</main>
<?php require "Rodape.view.php" ?> 