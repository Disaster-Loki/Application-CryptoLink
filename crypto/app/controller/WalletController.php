<?php

namespace crypto\controller;

use crypto\model\DAO\WalletDAO;

class WalletController
{
    public function criarCarteiraAction()
    {
        $userID = $_SESSION['user_id'] ?? null;

        if ($userID) {
            $tipoMoeda = $_POST['tipo_moeda'] ?? '';
            $quantidade = $_POST['amount'] ?? '';

            $walletDAO = new WalletDAO();
            $referencia = $walletDAO->insertInWallet($userID, $tipoMoeda, $quantidade);
            echo "Carteira criada com referência: " . $referencia;
        } else {
            echo "Usuário não autenticado.";
        }
    }
}