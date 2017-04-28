<?php
class Conexao{
    private $dsn;
    private $dbuser;
    private $dbpass;

    public function __construct($dsn, $dbuser, $dbpass) {
        $this->dsn = $dsn;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
    }
    public function connect() {
        try{
            return $pdo = new \PDO($this->dsn, $this->dbuser, $this->dbpass);
            echo "conecatado";
        }catch(PDOException $e) {
            echo "FALHA:" . $e->getMessage();
        }
    }
}