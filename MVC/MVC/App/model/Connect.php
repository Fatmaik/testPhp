<?php

namespace App\model;

class Connect {
    private $dsn;
    private $dbuser;
    private $dbpass;
    private $pdo;

    public function __construct() {
        $this->dsn = "mysql:dbname=MVC;host=localhost";
        $this->dbuser = "root";
        $this->dbpass = "rancid";
        $this->dbname = "test";

        try{
            $this->pdo = new \PDO($this->dsn, $this->dbuser, $this->dbpass);
            return  $this->getPdo();
        }catch(PDOException $e) {
            echo "Connection Faile: ". $e->getMessage();
        }
    }
    public function getPdo() {
        return $this->pdo;
    }
    public function setPdo($pdo) {
        $this->pdo = $pdo;
    }
}
