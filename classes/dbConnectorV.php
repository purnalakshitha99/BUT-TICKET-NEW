<?php
class Database {
    private $host;
    private $database;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        // Attempt to establish the database connection
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []) {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    // Add other database-related methods here as needed

    public function close() {
        $this->pdo = null;
    }
}
?>