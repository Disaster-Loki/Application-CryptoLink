<?php

namespace crypto\model\DAO;

use crypto\model\DTO\WalletDTO;
use crypto\model\connect\Connection;
use PDO;
use PDOException;

class WalletDAO
{
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->connect();
    }

    public function createWallet(int $userID)
    {
        $referencia = $this->gerarReferenciaCarteira();

        $stmt = $this->connection->prepare("INSERT INTO carteira (UserID, SaldoCriptomoeda, referencia, TipoUsuario) VALUES (?, 0, ?)");
        $stmt->bindParam(1, $userID, PDO::PARAM_INT);
        $stmt->bindParam(2, $referencia, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();

        return $referencia;
    }

    private function gerarReferenciaCarteira()
    {
        $prefixo = "5048";
        $numeroAleatorio = mt_rand(100000000000, 999999999999);
        $referencia = $prefixo . $numeroAleatorio;
        return $referencia;
    }
}