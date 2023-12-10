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

        if($username == "admin" && $password == "adminadmin")
        {
            $_SESSION['admin'] = ['logged' => true, 'username' => $username];
            return redirect(base_url('admin'));
            exit();
        }

        $usuarioDAO = new UsuarioDAO();
        $loggedInUser = $usuarioDAO->loginUser($username, $password);

        if ($loggedInUser) {
            $_SESSION['user'] = ['logged' => true, 'username' => $username];
            return redirect(base_url('home'));
            exit();
        } else {
            echo 'error';
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect(base_url("login"));
    }
}
