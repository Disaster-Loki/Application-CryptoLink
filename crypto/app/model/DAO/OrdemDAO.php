<?php

namespace crypto\model\DAO;

use crypto\model\DTO\OrdemDTO;
use crypto\model\connect\Connection;
use PDO;

class OrdemDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getInstance()->connect();
    }

    public function inserirOrdem(array $ordem)
    {
        $query = "INSERT INTO ordem (UserID, TipoOrdem, Criptomoeda, Quantidade, Preco, StatusOrdem, TipoUsuario) 
                  VALUES (:userId, :tipoOrdem, :criptomoeda, :quantidade, :preco, :statusOrdem, :TipoUsuario)";

        $stmt = $this->conn->prepare($query);

        // echo '<pre>';
        // exit(var_dump($ordem));

        $stmt->bindParam(':userId', $ordem['userID']);
        $stmt->bindParam(':tipoOrdem', $ordem['tipoOrdem']);
        $stmt->bindParam(':criptomoeda', $ordem['criptomoeda']);
        $stmt->bindParam(':quantidade', $ordem['quantidade']);
        $stmt->bindParam(':preco', $ordem['preco']);
        $stmt->bindParam(':statusOrdem', $ordem['status']);
        $stmt->bindParam(':TipoUsuario', $ordem['tipoUsuario']);

        $stmt->execute();
    }

    public function buscarOrdemPorId($orderId)
    {
        $query = "SELECT * FROM ordem WHERE OrderID = :orderId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':orderId', $orderId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarOrdemPorUsuario($userID)
    {
        $query = "SELECT *, SUM(Quantidade) as total FROM ordem WHERE UserID = :userID group by Criptomoeda";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userID', $userID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalOrdemUser($userID)
    {
        $query = "SELECT SUM(Quantidade) as total FROM ordem WHERE UserID = :userID group by Criptomoeda";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userID', $userID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarOrdens()
    {
        $query = "SELECT * FROM ordem join usuario on ordem.userid = usuario.userid";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarOrdensPorUsuario($userId)
    {
        $query = "SELECT * FROM ordem WHERE UserID = :userId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteOrder(int $orderID)
    {
        $query = "DELETE FROM ordem WHERE OrderID = :orderID";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':orderID', $orderID);
        $stmt->execute();
    }

    public function deleteUserOrder(int $userID)
    {
        $query = "DELETE FROM ordem WHERE UserID = :userID";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userId', $userID);
        $stmt->execute();
    }
}
