<?php
declare(strict_types=1);

use Rentbooks\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";
require __DIR__ . "/app/rotas.php";
require __DIR__ . "/app/Core/helpers.php";

$url = $_GET['url'] ?? '/';

Router::execute($url);