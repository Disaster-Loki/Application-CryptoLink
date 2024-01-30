<?php

namespace crypto\model\DAO;

use crypto\model\connect\Connection;
use PDO;

class WalletDAO
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->connect();
    }

    public function insertInWallet(int $userID, string $tipoMoeda, int $quantidade, string $tipoUsuario)
    {
        $referencia = $this->gerarReferenciaCarteira($userID);


        $query = "INSERT INTO carteira (UserID, SaldoCriptomoeda, referencia, TipoUsuario, Tipo_moeda) 
                  VALUES (:userId, :saldo, :referencia, :tipoUsuario, :moeda)";

        $stmt = $this->connection->prepare($query);

        // echo '<pre>';
        // exit(var_dump($ordem));

        $stmt->bindParam(':userId', $userID);
        $stmt->bindParam(':saldo', $quantidade);
        $stmt->bindParam(':referencia', $referencia);
        $stmt->bindParam(':tipoUsuario', $tipoUsuario);
        $stmt->bindParam(':moeda', $tipoMoeda);

        $stmt->execute();
    }

    public function getWalletByUser(int $id) {
        try {
            $sql = "SELECT * FROM carteira where UserID = '$id'";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            exit("Erro ao obter transacao: " . $e->getMessage());
            return [];
        }
    }

    public function getTotalByUser(int $id) {
        try {
            $sql = "SELECT SUM(SaldoCriptomoeda) as total FROM carteira where UserID = '$id'";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            exit("Erro ao obter total: " . $e->getMessage());
            return [];
        }
    }

    private function gerarReferenciaCarteira(int $id)
    {
        $prefixo = "50484560" + $id;
        $valorInicial = 4700;
        $proximoQuarteto = sprintf('%04d', $valorInicial + 1);
        $referencia = $prefixo . $proximoQuarteto;

        return $referencia;
    }

    private function getTipoUsuario(int $userID)
    {
        $tipoUsuario = isset($_SESSION['anonimo']) ? 'Anonymous' : 'Common';

        return $tipoUsuario;
    }
}