<?php

namespace crypto\controller;

use crypto\model\DAO\WalletDAO;
use crypto\model\DAO\WalletDAODAO;

class WalletController
{
    public function criarCarteiraAction($userID)
    {
        $walletDAO = new WalletDAO();
        $referencia = $walletDAO->CreateWallet($userID);
    }
}