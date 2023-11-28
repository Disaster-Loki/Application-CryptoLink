<?php
namespace Model\DAO;

use Model\Conect\Conexao;
use PDO;
use PDOException;

class UsuarioDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstance()->conectar();
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
            $stmt = $this->conexao->prepare($sql);

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
            $stmt = $this->conexao->prepare($sql);

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
}