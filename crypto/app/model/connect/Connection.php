<?php
namespace crypto\model\connect;

use PDO;
use PDOException;

class Connection {
    private static $instance;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'cryptolink';


    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect() {
        try {
            $connection = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $e) {
            die("Erro na conexão com o db de dados: " . $e->getMessage());
        }
    }
}
?>