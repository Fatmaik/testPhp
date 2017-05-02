<?php

class Connect {
    private $dsn;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $pdo;

    public function __construct() {
        $this->dsn = "mysql:dbname=MVC;host=localhost";
        $this->dbuser = "root";
        $this->dbpass = "rancid";
        $this->dbname = "test";

        try{
            $this->pdo = new \PDO($dsn, $dbuser, $dbpass);
        }catch(PDOException $e) {
            echo "Connection Faile: ". $e->getMessage();
        }     
    }
    public function logar() {
        $stmt = $pdo->prepare("SELECT email,senha FROM MVC1 WHERE email = :email AND senha = :senha");
        $stmt->bindValue(":email", $_POST['email']);
        $stmt->bindValue(":senha", $_POST['senha']);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function listar() {
        $stmt = $pdo->prepare("SELECT * FROM MVC1");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deletar() {
        $stmt = $pdo->prepare("DELETE from MVC1 WHERE id = :id");
        $stmt->bindValue(":id", $_SESSION['id']);
        $stmt->execute();
    }
    public function adicionar() {
        $stmt = $pdo->prepare("INSERT INTO MVC1 SET login = :login, email = :email, senha = :senha");
        $stmt->bindValue(":login", $_SESSION['login']);
        $stmt->bindValue(":email", $_SESSION['email']);
        $stmt->bindValue(":senha", $_SESSION['senha']);
        $stmt->execute();
    }
    public function editar($senha) {
        $stmt = $pdo->prepare("UPDATE MVC1 SET senha = :senha");
        $stmt->bindValue(":senha", addslashes(md5($senha)));
    }
    
}
