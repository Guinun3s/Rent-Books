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
            static::$msg[] = "O {$nomedocampo} é obrigatório e não foi preenchido";
        }
    }

    protected static function email($valor, $nomedocampo){
        if(!filter_var($valor,FILTER_VALIDATE_EMAIL)){
            static::$houveerro = true;
            static::$msg[] = "O {$nomedocampo} precisa ser um email válido";
        }
    }

    public static function getErros():array
    {
        return static::$msg;
    }
}