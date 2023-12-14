<?php 
namespace crypto\model\DAO;

use crypto\model\DTO\OrdemDTO;
use crypto\model\connect\Connection;
use PDO;

class OrdemDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance()->connect();
    }

    public function inserirOrdem(OrdemDTO $ordemDTO) {
        $query = "INSERT INTO ordem (UserID, TipoOrdem, Criptomoeda, Quantidade, Preco, StatusOrdem) 
                  VALUES (:userId, :tipoOrdem, :criptomoeda, :quantidade, :preco, :statusOrdem)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':userId', $ordemDTO->getUserId());
        $stmt->bindParam(':tipoOrdem', $ordemDTO->getTipoOrdem());
        $stmt->bindParam(':criptomoeda', $ordemDTO->getCriptomoeda());
        $stmt->bindParam(':quantidade', $ordemDTO->getQuantidade());
        $stmt->bindParam(':preco', $ordemDTO->getPreco());
        $stmt->bindParam(':statusOrdem', $ordemDTO->getStatusOrdem());

        $stmt->execute();
    }

    public function buscarOrdemPorId($orderId) {
        $query = "SELECT * FROM ordem WHERE OrderID = :orderId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':orderId', $orderId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarOrdensPorUsuario($userId) {
        $query = "SELECT * FROM ordem WHERE UserID = :userId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}



?>