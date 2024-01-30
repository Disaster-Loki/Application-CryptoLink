<?php

namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\UsuarioDAO;
use crypto\model\connect\SessionManager;

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

    if ($username == "admin" && $password == "adminadmin") {
        $_SESSION['admin'] = ['logged' => true, 'username' => $username];
        echo json_encode(['success' => true, 'redirect' => base_url('admin')]);
        exit();
    }

    $usuarioDAO = new UsuarioDAO();
    $loggedInUser = $usuarioDAO->loginUser($username, $password);

    if ($loggedInUser) {
        $_SESSION['user'] = ['logged' => true, 'username' => $username];
        echo json_encode(['success' => true, 'redirect' => base_url('home')]);
        exit();
    } else {
        // Exibir um alerta em JavaScript sem redireciona
        echo json_encode(['success' => false, 'message' => 'Usuário ou senha incorreto.']);
        exit();
    }
}

    public function logout()
    {
        $s_manager = new SessionManager();
        $s_manager->destroy();
        return redirect(base_url("login"));
    }
}
