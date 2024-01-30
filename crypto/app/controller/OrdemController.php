<?php 
namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\OrdemDAO;
use crypto\model\DAO\TransactionDAO;
use crypto\model\DAO\WalletDAO;

class OrdemController extends Controller
{
    public function postAction($request)
    {
        // echo '<pre>';
        // exit(var_dump($_POST));
        
        $usuario = getUserByNickname($_POST['username']);
        $ordem['userID'] = (int) $usuario[0]['UserID'];
        $ordem['tipoOrdem'] = $_POST['tipo_transacao'];
        $ordem['criptomoeda'] = $_POST['tipo_moeda'];
        $ordem['quantidade'] = (int)$_POST['amount'];
        $ordem['preco'] = (int)$_POST['preco'];
        $ordem['status'] = 'Aberta';
        $ordem['tipoUsuario'] = isset($_SESSION['anonimo']) ? 'Anonymous' : 'Common';

        $ordemDAO = new OrdemDAO();
        $ordemDAO->inserirOrdem($ordem);

        redirect(base_url('user'));
        exit();
    }

    public function buyCrypto()
    {
        $id = (int) $_GET['id'];
        $ordemDAO = new OrdemDAO();

        $currentOrder   = $ordemDAO->buscarOrdemPorId($id);
        $buyerID        = (int) getUserByNickname($_SESSION['user']['username'])[0]['UserID'];
        $sellerID       = (int) $currentOrder['UserID'];
        $price          = (int) $currentOrder['Preco'];

        $walletDao = new WalletDAO();
        $walletDao->insertInWallet($buyerID, $currentOrder['Criptomoeda'], $currentOrder['Quantidade'], 'Common');

        $ordemDAO->deleteOrder($currentOrder['OrderID']);

        $transaction = new TransactionDAO();    
        $transaction->save(-$price, 'Compra', $buyerID);
        $transaction->save($price, 'Venda', $sellerID);

        return redirect('home');

    }
}

?>