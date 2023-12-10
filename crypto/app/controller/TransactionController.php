<?php
namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\TransactionDAO;

class TransactionController extends Controller
{
    
    public function save()
    {
        $amount = $_POST['amount'];
        $id = $_POST['id'];
        $type = 'Deposito';

        $transaction = new TransactionDAO;
        if($transaction->save($amount, $type, $id)) return redirect(base_url('home'));
    }
}