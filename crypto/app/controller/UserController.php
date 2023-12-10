<?php

namespace crypto\controller;
use crypto\core\Controller;
use crypto\model\DAO\TransactionDAO;
use crypto\model\DAO\UsuarioDAO;

class UserController extends Controller
{
    public function index()
    {
        // exit(var_dump(getUserByNickname($_SESSION['user']['username'])[0]['UserID']));
        
        $trDAO = new TransactionDAO;
        $total = $trDAO->getTotalByUser(getUserByNickname($_SESSION['user']['username'])[0]['UserID'])[0]['total'];
        $transactions = $trDAO->getTransactionByUser(getUserByNickname($_SESSION['user']['username'])[0]['UserID']);
        return $this->render("user/user", ['transactions' => $transactions, 'total' => $total]);
    }

    public function admin()
    {
        $usuarioDAO = new UsuarioDAO();
        $users = $usuarioDAO->getUsers();
        $data['users'] = $users;

        return $this->render("admin/index", $data);
    }

    public function updateAction()
    {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $usuarioDAO = new UsuarioDAO;
        if($usuarioDAO->updateUser($id, $username, $password)) return redirect('home');
        exit("Ocorreu um erro");
    }
}
