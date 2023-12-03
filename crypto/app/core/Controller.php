<?php

namespace crypto\core;

use Exception;
use League\Plates\Engine;

class Controller
{
    public static function render(string $view, array $data = [])
    {
        $viewPath = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'views';

        if(!file_exists($viewPath . DIRECTORY_SEPARATOR . $view . '.php'))
            throw new Exception("View nao encontrada");

        $template = new Engine($viewPath);
        echo $template->render($view, $data);

    }
}