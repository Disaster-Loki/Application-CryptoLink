<?php
namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\UsuarioDAO;

class AdminController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $usuarioDAO = new UsuarioDAO;
        $usuarios = $usuarioDAO->getUsers();
        return $this->render('admin/index', ['users' => $usuarios]);
    }
}