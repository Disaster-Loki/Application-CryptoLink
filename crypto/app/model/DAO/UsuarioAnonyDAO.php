<?php
namespace crypto\model\DAO;

use crypto\model\connect\Connection;
use PDO;
use PDOException;

class UsuarioAnonyDAO {
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->connect();
    }

    public function insertUser($nickname, $password_hash) {
        if ($this->userExists($nickname)) {
            exit("Usuário já registrado.");
            return;
        }

        try {
            $sql = "INSERT INTO usuario_anonimo (nickname, password_hash, data_registro) VALUES (?, ?, ?)";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Obtém a data atual
            $dataAtual = date("Y-m-d H:i:s");

            // Executa a declaração com os parâmetros
            $stmt->execute([$nickname, $password_hash, $dataAtual]);

            echo "Registro bem-sucedido!";
        } catch (PDOException $e) {
            // Handle error
            exit("Erro ao inserir usuário: " . $e->getMessage());
        }
    }

    public function updateUser($id, $nickname, $password_hash)
    {
        try{
            $sql = "UPDATE usuario_anonimo SET nickname = ?, password_hash = ? WHERE id = ?";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Obtém a data atual
            $dataAtual = date("Y-m-d H:i:s");

            // Executa a declaração com os parâmetros
            $stmt->execute([$nickname, $password_hash, $id]);
            $_SESSION['user'] = ['logged' => true, 'username' => $nickname];
            return true;
        } catch (\PDOException $e) {
            // Handle error
            exit("Erro ao atualizar usuário: " . $e->getMessage());
            return false;
        }
    }

    private function userExists($nickname) {
        try {
            // Cria a consulta SQL para verificar se o usuário já existe
            $sql = "SELECT COUNT(*) FROM usuario_anonimo WHERE nickname = ?";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Executa a declaração com o parâmetro
            $stmt->execute([$nickname]);

            // Obtém o resultado da contagem
            $count = $stmt->fetchColumn();

            // Retorna true se o usuário já existe, false caso contrário
            return $count > 0;
        } catch (PDOException $e) {
            // Handle error
            echo "Erro ao verificar existência do usuário: " . $e->getMessage();
            return false;
        }
    }

    public function loginUser($username, $password) {
        try {
            $sql = "SELECT * FROM usuario_anonimo WHERE nickname = ? AND password_hash = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username, $password]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                echo "Login bem-sucedido!";
                return true;
            } else {
                echo "Usuário ou senha incorretos.";
                return false;
            }
        } catch (PDOException $e) {
            exit("Erro ao realizar login: " . $e->getMessage());
            return false;
        }
    }

    public function getUsers() {
        try {
            $sql = "SELECT * FROM usuario_anonimo";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit("Erro ao obter usuários: " . $e->getMessage());
            return [];
        }
    }

    public function getByNickname(string $nickname) {
        try {
            $sql = "SELECT * FROM usuario_anonimo where nickname = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$nickname]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit("Erro ao obter usuários: " . $e->getMessage());
            return [];
        }
    }

    public function removeUser($username) {
        try {
            $sql = "DELETE FROM usuario_anonimo WHERE nickname = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username]);
            echo "Usuário removido com sucesso!";
        } catch (PDOException $e) {
            exit("Erro ao remover usuário: " . $e->getMessage());
        }
    }
}
?>