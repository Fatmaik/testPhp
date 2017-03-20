<?php
namespace Source;
class Conexao implements iConexao{
    private $dsn;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $tbname;

    public function __construct($dsn, $dbuser, $dbpass, $tbname) {
        $this->dsn = $dsn;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->tbname = $tbname;
    }
    public function connect() {
        try{
            return $pdo = new \PDO($this->dsn, $this->dbuser, $this->dbpass);
            echo "conectad";
        }catch(PDOExceprion $e) {
            echo "Fail: " . $e->getMessage();
        }
    }
}