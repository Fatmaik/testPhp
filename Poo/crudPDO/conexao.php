<?php
require_once 'iConexao.php';

class Conexao implements iConexao{
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
            // inpurtandte retoranar o pdo de conexao para que outras clases possam acessar o DB;
            return $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
        }catch(PDOException $e) {
            echo "FALHA: " . $e->getMessage();
        }

    }
}