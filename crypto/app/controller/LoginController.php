<?php

namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\UsuarioDAO;

class LoginController extends Controller
{
    public function loginView()
    {
        return $this->render('user/login');
    }

    public function loginAction()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $usuarioDAO = new UsuarioDAO();
        $loggedInUser = $usuarioDAO->loginUser($username, $password);

        if ($loggedInUser) {
            return redirect(base_url('home'));
            exit();
        } else {
            echo 'error';
        }
    }
}
