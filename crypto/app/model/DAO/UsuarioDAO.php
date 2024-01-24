<?php
namespace crypto\model\DAO;

use crypto\model\connect\Connection;
use PDO;
use PDOException;

class UsuarioDAO {
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->connect();
    }

    public function insertUser($email, $username, $password, $dataRegistro) {
        // Verifica se o usuário já está registrado
        if ($this->userExists($username)) {
            exit("Usuário já registrado.");
            return;
        }

        try {
            $sql = "INSERT INTO usuario (email, username, password, dataRegistro) VALUES (?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            $dataAtual = date("Y-m-d H:i:s");

            $stmt->execute([$email, $username, $password, $dataAtual]);

            echo '<script>alert("Registro bem-sucedido!")</script>';
        } catch (PDOException $e) {
            // Handle error
            exit("Erro ao inserir usuário: " . $e->getMessage());
        }
    }

    public function updateUser($id, $username, $password)
    {
        try{
            $sql = "UPDATE usuario SET username = '$username', password = '$password' WHERE UserID = $id";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Obtém a data atual
            $dataAtual = date("Y-m-d H:i:s");

            // Executa a declaração com os parâmetros
            $stmt->execute();
            $_SESSION['user'] = ['logged' => true, 'username' => $username];
            return true;
        }catch (\PDOException $e) {
            // Handle error
            exit("Erro ao actualizar usuário: " . $e->getMessage());
            return false;
        }
    } 

    private function userExists($username) {
        try {
            $sql = "SELECT COUNT(*) FROM usuario WHERE username = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username]);
            $count = $stmt->fetchColumn();
            return $count > 0;

        } catch (PDOException $e) {
            // Handle error
            echo "Erro ao verificar existência do usuário: " . $e->getMessage();
            return false;
        }
    }

    public function loginUser($username, $password) {
        try {
            $sql = "SELECT * FROM usuario WHERE username = ? AND password = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username, $password]);
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getUsers() {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit("Erro ao obter usuários: " . $e->getMessage());
            return [];
        }
    }

    public function getByNickname(string $nickname) {
        try {
            $sql = "SELECT * FROM usuario where username = '$nickname'";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit("Erro ao obter usuários: " . $e->getMessage());
            return [];
        }
    }

    public function removeUser($username) {
        try {
            $sql = "DELETE FROM usuario WHERE username = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username]);
            echo "Usuário removido com sucesso!";
        } catch (PDOException $e) {
            exit("Erro ao remover usuário: " . $e->getMessage());
        }
    }
}
?>