<?php

require_once 'vendor/autoload.php';
require_once 'app/core/routes.php';
require_once 'app/Common.php';

try {
    $uri        = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $route      = substr($uri, strlen(base_url()));
    $request    = $_SERVER['REQUEST_METHOD'];

    if (!isset($routes[$request]))
        throw new Exception("Request method $request nao foi definido");

    if (!array_key_exists($route, $routes[$request]))
        throw new Exception("Rota $route nao definida");

    $app = $routes[$request][$route];
    loadRoute($app['controller'], $app['action']);

} catch (\Exception $e) {
    exit($e->getMessage());
}
