<?php

namespace Rentbooks\Core;

class Validator{
    protected static bool $houveerro = false; 
    protected static array $msg = [];

    public static function execute(array $regrasValidacao, array $valores){
        foreach($regrasValidacao as $campo => $regras){
            $listaregras = explode("|",$regras);
            $valor = $valores[$campo] ?? null;
            $parametros = [$valor,$campo];
            foreach($listaregras as $regra){

                if(strpos($regra, ',')){
                    $pedacos = explode(':', $regra);
                    $regra = $pedacos[0];
                    $parametro[] = $pedacos[1];
                }

                if(method_exists(__CLASS__,$regra)){
                    call_user_func_array([__CLASS__,$regra],$parametros);
                }
            }
        }
        return static::$houveerro;
    }

    protected static function obrigatorio($valor, $nomedocampo){
        $valor = trim($valor);
        if(strlen($valor) == 0){
            static::$houveerro = true;
            static::$msg[] = "O campo {$nomedocampo} é obrigatório e não foi preenchido";
        }
    }

    protected static function email($valor, $nomedocampo){
        if(!filter_var($valor,FILTER_VALIDATE_EMAIL)){
            static::$houveerro = true;
            static::$msg[] = "O campo {$nomedocampo} precisa ser um email válido";
        }
    }

    protected static function maiorque($valor,$nomeCampo, $qtd){
        $valor = trim($valor);
        if(strlen($valor) <= $qtd){
            static::$houveerro = true;
            static::$msg[] = "O campo {$nomeCampo} precisa ter mais de {$qtd} caracteres";
        }
    }

    public static function getErros():array
    {
        return static::$msg;
    }

    public static function getErrosListados()
    {
        $lista = "";
        foreach(Validator::getErros() as $erro){
            $lista .= "<li>{$erro}</li>";
        }
        return $lista;
    }
}