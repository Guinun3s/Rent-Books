<?php
declare(strict_types=1);

session_start();

use Rentbooks\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/View/config.php";
require __DIR__ . "/app/View/rotas.php";
require __DIR__ . "/app/Core/helpers.php";

$url = $_GET['url'] ?? '/';
unset($_GET['url']);
$metodoHTTP = $_SERVER["REQUEST_METHOD"];

Router::execute($url, $metodoHTTP);