<?php

namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\UsuarioAnonyDAO;

class UserController extends Controller
{

    public function updateAction()
    {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $usuarioDAO = new UsuarioAnonyDAO;
        if ($usuarioDAO->updateUser($id, $username, $password)) {
            return redirect('home');
        }

        exit("Ocorreu um erro");
    }
}