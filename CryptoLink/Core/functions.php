<?php

// Função para carregar automaticamente as classes
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    require_once($classPath);
});

?>