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
            echo "Usuário já registrado.";
            return;
        }

        try {
            // Cria a consulta SQL para inserir o usuário
            $sql = "INSERT INTO usuarios (email, username, password, dataRegistro) VALUES (?, ?, ?, ?)";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Obtém a data atual
            $dataAtual = date("Y-m-d H:i:s");

            // Executa a declaração com os parâmetros
            $stmt->execute([$email, $username, $password, $dataAtual]);

            echo "Registro bem-sucedido!";
        } catch (PDOException $e) {
            // Handle error
            echo "Erro ao inserir usuário: " . $e->getMessage();
        }
    }

    private function userExists($username) {
        try {
            // Cria a consulta SQL para verificar se o usuário já existe
            $sql = "SELECT COUNT(*) FROM usuarios WHERE username = ?";

            // Prepara a declaração SQL
            $stmt = $this->connection->prepare($sql);

            // Executa a declaração com o parâmetro
            $stmt->execute([$username]);

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
            $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
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
            echo "Erro ao realizar login: " . $e->getMessage();
            return false;
        }
    }

    public function getUsers() {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao obter usuários: " . $e->getMessage();
            return [];
        }
    }

    public function removeUser($username) {
        try {
            $sql = "DELETE FROM usuarios WHERE username = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$username]);
            echo "Usuário removido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao remover usuário: " . $e->getMessage();
        }
    }
}
?>