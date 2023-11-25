<?php require "topo.view.php";
use Rentbooks\model\DAO\UsuariosDAO;
use Rentbooks\Model\Entities\Usuario; 

$usuario = new Usuario();
$usuario->dataNascimento = $_POST['datadenascimento'] ?? '';
$usuario->bairro = $_POST['bairro'] ?? '';
$usuario->cep = $_POST['cep'] ?? '';
$usuario->cpf = $_POST['cpf'] ?? '';
$usuario->numero = $_POST['numero'] ?? '';
$usuario->rua = $_POST['rua'] ?? '';
$usuario->telefone = $_POST['telefone'] ?? '';
$usuario->email = $_POST['email'] ?? '';
$usuario->tipoUsuario = $_POST['funcao'] ?? '';
$usuario->genero = $_POST['sexo'] ?? '';
$usuario->senha = $_POST['senha'] ?? '';
$usuario->nome = $_POST['nomecompleto'] ?? '';
$usuario->cidade = $_POST['cidade'] ?? '';
$dao = new UsuariosDAO();
$dao->inserir($usuario);  

?>
<main>
    <img src="<?=img('misterios.png')?>" id="imgp">
    
    <h1 id="titform">CADASTRE-SE NO NOSSO SITE!</h1>
    <form method="POST" id="forms">
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
            <input type="text" name="cpf" placeholder="Digite seu CPF" maxlength="11">
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
        <select name="funcao">
            <option value="cliente">Cliente</option>
            <option value="distribuidor">Distribuidor(a)</option>
        </select>
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