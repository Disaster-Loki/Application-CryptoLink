<?php

namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DTO\UsuarioDTO;
use crypto\model\DAO\UsuarioDAO;

class RegisterController extends Controller
{
    public function registerView()
    {
        return $this->render("user/register");
    }

    public function registerAction()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $usuarioDTO = new UsuarioDTO($email, $username, $password, null);
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->insertUser($usuarioDTO->getEmail(), $usuarioDTO->getUsername(), $usuarioDTO->getPassword(), $usuarioDTO->getDataRegistro());

         
        return redirect(base_url('home'));
        exit();
    }

    
}
