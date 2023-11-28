<?php

// Inclua o arquivo de configuração e funções comuns
require_once('Core/config.php');
require_once('Core/functions.php');

// Inclua o arquivo de rotas
$routes = require('Routes/routes.php');

// Obtenha a URI da solicitação atual
$uri = $_SERVER['REQUEST_URI'];

// Remova a parte da URL após o '?' (se houver)
$uri = strtok($uri, '?');

// Verifique se a rota existe
if (array_key_exists($uri, $routes)) {
    // Separe o controlador e a ação
    list($controllerName, $action) = explode('@', $routes[$uri]);

    // Crie o nome da classe do controlador
    $controllerClass = 'Controller\\' . $controllerName;

    // Crie uma instância do controlador
    $controller = new $controllerClass();

    $controller->$action();
} else {
    // Rota não encontrada
    echo "Rota não encontrada.";
}