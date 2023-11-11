<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Rent Books</title>
    <link href="<?=css('css')?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bebas+Neue&family=Cormorant:wght@300&family=DM+Serif+Display&family=Dangrek&family=Dela+Gothic+One&family=Galindo&family=Geo&family=Playfair+Display:ital@1&family=Ubuntu+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header id="topo">
    <a href="<?=url_base('')?>"><img src="<?=img('slogan.png')?>"></a>
        <nav id="menu">
            <ul>
                <li><a href="<?=url_base('')?>">Início</a></li>
                <li><a href="<?=url_base('produtos')?>">Alugue Aqui</a></li>
                <li><a href="<?=url_base('sobreaempresa')?>">Sobre a Empresa</a></li>
                <li><a href="<?=url_base('formulario')?>">Área do Cliente</a></li>
                <li><a href="<?=url_base('carrinho')?>">Carrinho</a></li>
            </ul>
        </nav>
    </header>