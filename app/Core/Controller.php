<?php

namespace Rentbooks\Core;

#Classe abstrata é uma classe que é feita para ser herdada por outras classes. Ela não pode ser instanciada.

abstract class Controller{
    protected array $postVars = [];
    protected array $getVars = [];
    protected string $view_pasta = './app/View/componentes/';

    public function __construct(){
      $this->postVars = $_POST ?? [];
      $this->getVars = $_GET ?? [];
    }

    protected function view(string $arquivo,array $dados = [])
    {
      $caminho = $this->view_pasta."{$arquivo}.view.php";
      extract($dados); #Extrai variaveis de um array associativo em que os indices são os nomes das variaveis e os valores são os valores das variaveis.
      if(file_exists($caminho)){
        require $caminho;
      }else{
        echo "<h2>Arquivo de View Não Existe</h2>";
      }  
      
    }

    protected function post(?string $nome = null){
      if(is_null($nome)){
        return $this->postVars;
      }
      if(key_exists($nome,$this->postVars)){
        return $this->postVars[$nome];
      }
      return null;
    }

    protected function get(?string $nome = null){
      if(is_null($nome)){
        return $this->getVars;
      }
      if(key_exists($nome,$this->getVars)){
        return $this->getVars[$nome];
      }
      return null;
    }

    public function input(?string $nome = null){
      if(is_null($nome)){
        return null;
      }
      $inputs = array_merge($this->postVars,$this->getVars);
      if(key_exists($nome,$inputs)){
        return $inputs[$nome];
      }
      return null;
    }

    public function all(){
      $inputs = array_merge($this->postVars,$this->getVars);
      return null;
    }
    
}