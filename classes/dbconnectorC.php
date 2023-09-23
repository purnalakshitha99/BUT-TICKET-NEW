<?php

namespace classes;

use PDO;
use PDOException;

class dbconnectorC {

    private $host = "localhost";
    private $dbname = "journey_ease";
    private $dbuser = "root";
    private $dbpw = "";
    private $con;

    public function getConnection() {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";";

        try {
            $this->con = new PDO($dsn, $this->dbuser, $this->dbpw);
            return $this->con;
        } catch (PDOException $e) {
            die("Error" . $e->getMessage());
        }
    }

}