<?php
$routes = [
    'GET' => [
        '/' => [
            'controller'    => 'HomeController',
            'action'        => 'index'
        ],
        '/login' => [
            'controller'    => 'LoginController',
            'action'        => 'loginView'
        ],
        '/register' => [
            'controller'    => 'RegisterController',
            'action'        => 'registerView'
        ],
        '/home' => [
            'controller'    => 'UserController',
            'action'        => 'index'
        ],
        '/admin' => [
            'controller'    => 'UserController',
            'action'        => 'admin'
        ],
        '/logout' => [
            'controller'    => 'LoginController',
            'action'        => 'logout'
        ],
        '/admin' => [
            'controller'    => 'AdminController',
            'action'        => 'index'
        ],
        '/user' => [
            'controller' => 'UserController',
            'action' => 'index'
        ],
        
    ],
    'POST' => [
        '/login' => [
            'controller'    => "LoginController",
            'action'        => "loginAction"
        ],
        '/register' => [
            'controller'    => 'RegisterController',
            'action'        => 'registerAction'
        ],
        '/update-user' =>[
            'controller'    => 'UserController',
            'action'        => 'updateAction'
        ],
        '/add-transaction' => [
            'controller'    => 'TransactionController',
            'action'        => 'save'
        ],
        '/add-ordem' => [
            'controller' => 'OrdemController',
            'action' => 'postAction'
        ]

    ],
];

function loadRoute(string $controller, string $action)
{
    try {
        $namespace = "crypto\controller\\$controller";

        if(!class_exists($namespace))
            throw new Exception("Controller $controller nao foi encontrado");

        $class = new $namespace;

        if(!method_exists($class, $action))
            throw new Exception("Metodo $action nao existe.");

        echo $class->$action((object) $_REQUEST);

    } catch (\Exception $e) {
        # Executar NotFoundController
        exit($e->getMessage());
    }
}