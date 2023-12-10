<?php 
namespace crypto\model\DAO;
use crypto\model\connect\Connection;

class TransactionDAO
{
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->connect();
    }

    public function save($amount, $type, $userID)
    {
        try {
            $sql = "INSERT INTO transacao (UserID, TipoTransacao, valorTransacao, DataHoraTransacao) VALUES (?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            // Obtém a data atual
            $dataAtual = date("Y-m-d H:i:s");

            // Executa a declaração com os parâmetros
            return $stmt->execute([$userID, $type, $amount, $dataAtual]);

            
        } catch (\PDOException $e) {
            // Handle error
            exit("Erro ao inserir usuário: " . $e->getMessage());
        }
    }

    public function getTransactionByUser(int $id) {
        try {
            $sql = "SELECT * FROM Transacao where UserID = '$id'";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            exit("Erro ao obter transacao: " . $e->getMessage());
            return [];
        }
    }

    public function getTotalByUser(int $id) {
        try {
            $sql = "SELECT SUM(ValorTransacao) as total FROM Transacao where UserID = '$id'";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            exit("Erro ao obter total: " . $e->getMessage());
            return [];
        }
    }
}