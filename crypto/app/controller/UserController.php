<?php

namespace crypto\controller;
use crypto\core\Controller;
use crypto\model\DAO\OrdemDAO;
use crypto\model\DAO\TransactionDAO;
use crypto\model\DAO\UsuarioDAO;
use crypto\model\DAO\WalletDAO;

class UserController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION["user"])){
            exit("Precisa iniciar sessao");
        }
        // exit(var_dump(getUserByNickname($_SESSION['user']['username'])[0]['UserID']));
        
        $userID = (int) getUserByNickname($_SESSION['user']['username'])[0]['UserID'];
        $ordem = new OrdemDAO;
        $ordens = $ordem->buscarOrdens();

        // echo '<pre>';
        // exit(var_dump($userID));

        $userCripto = $ordem->buscarOrdemPorUsuario($userID);
        $totalCripto = $ordem->getTotalOrdemUser($userID) ?? 0;


        if(empty($totalCripto)){
            $tCrypto = 0;
        }else{
            $tCrypto = $totalCripto[0]['total'];
        }
        
        $trDAO = new TransactionDAO;
        $total = (int) $trDAO->getTotalByUser($userID)[0]['total'];

        $wlDao          = new WalletDAO();
        $totalWallet    = (int) $wlDao->getTotalByUser($userID)[0]['total'];
        $transactionsWallet = $wlDao->getWalletByUser($userID);

        
        $referencia = $transactionsWallet[0]["referencia"] ?? "**** **** **** ****";
        // echo '<pre>';
        // exit(var_dump($referencia));

        $transactions = $trDAO->getTransactionByUser($userID);
        return $this->render("user/user", ['userID' => $userID, "referencia" => $referencia, 'transactionWallet'=> $transactionsWallet,'transactions' => $transactions, 'total' => $total, 'ordens' => $ordens, 'userCripto' => $userCripto, 'totalCripto' => $tCrypto]);
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
