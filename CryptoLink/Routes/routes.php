<?php

// Inclua todos os controladores necessários
require_once(__DIR__ . '/../Controller/HomeController.php');
require_once(__DIR__ . '/../Controller/UserController.php');
require_once(__DIR__ . '/../Controller/WalletController.php');
require_once(__DIR__ . '/../Controller/TransactionController.php');

// Defina as rotas
$routes = [
    '/' => 'HomeController@index',
    '/user/profile' => 'UserController@profile',
    '/user/settings' => 'UserController@settings',
    '/register' => 'UserController@register',
    '/login' => 'UserController@login',
];

return $routes;