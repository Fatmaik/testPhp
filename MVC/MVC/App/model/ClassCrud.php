<?php

namespace App\model;

class ClassCrud {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function logar() {
        $stmt = $this->$pdo->prepare("SELECT email,senha FROM MVC1 WHERE email = :email AND senha = :senha");
        $stmt->bindValue(":email", $_POST['email']);
        $stmt->bindValue(":senha", $_POST['senha']);
        $stmt->execute();
        return $this->count = $stmt->rowCount();
    }
    public function listar() {
        $stmt = $this->pdo->prepare("SELECT * FROM MVC1");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deletar() {
        $stmt = $this->pdo->prepare("DELETE from MVC1 WHERE id = :id");
        $stmt->bindValue(":id", $_SESSION['id']);
        $stmt->execute();
    }
    public function adicionar() {
        $stmt = $this->pdo->prepare("INSERT INTO MVC1 SET login = :login, email = :email, senha = :senha");
        $stmt->bindValue(":login", $_SESSION['login']);
        $stmt->bindValue(":email", $_SESSION['email']);
        $stmt->bindValue(":senha", $_SESSION['senha']);
        $stmt->execute();
    }
    public function editar($senha) {
        $stmt = $this->pdo->prepare("UPDATE MVC1 SET senha = :senha WHERE id = :id");
        $stmt->bindValue(":senha", addslashes(md5($senha)));
        $stmt->bindValue(":id", $_SESSION['id']);
        $stmt->execute();
    }
}