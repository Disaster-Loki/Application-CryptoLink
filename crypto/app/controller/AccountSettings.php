<?php

namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\UsuarioDAO;
use crypto\model\connect\Connection;

class AccountSettings extends Controller
{
    private UsuarioDAO $usuarioDAO;
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getInstance()->connect();
        $this->usuarioDAO = new UsuarioDAO;
    }

    public function index()
    {
    }

    public function deleteAccount()
    {
        $username = $_SESSION['user']['username'];

        $usuario = $this->usuarioDAO->getByNickname($username);

        $id = (int) $usuario[0]['UserID'];

        $tables = array('transacao', 'perfil', 'ordem', 'carteira', 'usuario');

        foreach ($tables as $table) {
            $query = "DELETE FROM $table WHERE userID = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
        return redirect(base_url('logout'));
    }
}
