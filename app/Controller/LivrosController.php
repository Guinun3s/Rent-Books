<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;
use Rentbooks\Core\Validator;
use Rentbooks\model\DAO\LivrosDAO;
use Rentbooks\Model\DAO\ProdutoDAO;
use Rentbooks\Model\Entities\Livro;
use Rentbooks\Model\Entities\Produto;
use Rentbooks\Model\Entities\Usuario;

class LivrosController extends Controller{
    
    public function compraevenda(){
        $this->view('compraevenda');
    }

    public function produtos(){
        $this->view('produtos');
    }

    public function secaolivro(){
        $this->view('secaolivro');
    }

    public function cadastrarLivro(){
        $this->view('cadastrarLivro');
    }

    public function adicionarLivro(){
        $houveErro = Validator::execute(Livro::getRegras(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getErrosListados(),'erro');
            redireciona('cadastrarLivro');
        }

        #Não está funcionando

        /*$arquivo = $_FILES['imagem'];
        $arquivoNovo = explode('.', $arquivo['name']);
        if($arquivoNovo[sizeof($arquivoNovo)-1] != "png" || "jpg"){
            echo "Você não pode fazer o upload deste arquivo";
            die;
        }else{
            move_uploaded_file($arquivoNovo['tmp_name'], imgLivros($arquivo['name']));
        }*/
        
        $livro = new Livro($this->post());
        if(LivrosDAO::inserir($livro)){
            flash("Livro cadastrado com sucesso!");
            redireciona('cadastrarLivro');
        }
    }

}