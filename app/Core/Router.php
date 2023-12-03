<?php

namespace Rentbooks\Core;


class Router{

    protected static array $rotas = [];

    public static function add(string $caminho, string $controlador, string $metodo)
    {
        static::$rotas[$caminho] = [$controlador, $metodo];      
    }

    public static function execute($url)
    {
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas) ){
            [$controlador,$metodo] = $rotas[$url];
            static::carregaController($controlador,$metodo);
        }else{
            static::erro('404', 404);
        }
        
    }

    public static function carregaController($controlador,$metodo)
    {
        $namespace = "\\Rentbooks\\Controller\\";
        $nomecompleto = $namespace.$controlador;
        if(class_exists($nomecompleto)){
            $c = new $nomecompleto();
            if(method_exists($c, $metodo)){
                http_response_code(200);
                $c->$metodo();
            }else{
                static::erro('metodo', 405);
            } 
        }else{
            static::erro('controller', 405);
        }
        
    }

    protected static function erro(string $tipo, int $codigo = 400){
        http_response_code($codigo);
        $controller = '\\Rentbooks\\Controller\\ErroController';
        $ctr = new $controller();
        $ctr->erro($tipo);

    }
}