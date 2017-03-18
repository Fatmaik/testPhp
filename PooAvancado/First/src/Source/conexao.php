<?php
namespace Source;

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
            // importante dar o return para que a classe que precise de conexao consiga conectar
            // importante lembrar de por a \ antede PDO   (\PDO) ou nao ira conectar
            return $pdo = new \PDO($this->dsn, $this->dbuser, $this->dbpass);
        }catch(PDOException $e) {
            echo "FAIL: " .$e->getMessage();
        }
    }
}

