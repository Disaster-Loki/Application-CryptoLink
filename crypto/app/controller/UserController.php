<?php

namespace crypto\controller;
use crypto\core\Controller;
use crypto\model\DAO\UsuarioDAO;

class UserController extends Controller
{
    public function index()
    {
        return $this->render("user/home");
    }

    public function admin()
    {
        $usuarioDAO = new UsuarioDAO();
        $users = $usuarioDAO->getUsers();
        $data['users'] = $users;

        return $this->render("admin/index", $data);
    }
}
