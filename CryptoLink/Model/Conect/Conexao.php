<?php
namespace Model\Conect;

use PDO;
use PDOException;

class Conexao {
    private static $instance;
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'cryptolink';

    private function __construct() {
        // Construtor
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function conectar() {
        try {
            $conexao = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->usuario, $this->senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conexao;
        } catch (PDOException $e) {
            // Handle error
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}
?>