<?php
class Database {
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct() {
        $this->host = 'localhost';
        $this->db = 'proyecto';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }

    public function connect() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($dsn, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }
}
?>
