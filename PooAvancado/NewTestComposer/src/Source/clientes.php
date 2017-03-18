<?php
class Clientes implements \Source\iCliente{
    private $pdo;
    private $tbname;

    public function __construct($pdo) {
        // retornando o metodo de conexao que existe na classe Conexao
        return $pdo = $this->pdo->connect();
        $tbname = $this->pdo->tbname;
    }
    
    public function selectAll() {
        $sel = "SELECT * FROM $tbname";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function selectId($id) {
        $sel = "SELECT * FROM $tbname WHERE id = $id ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function insert($nome, $sobrenome,$email, $id) {
        $ins = "INSERT INTO $tbname SET nome = $nome, sobrenome = $sobrenome, email = $email WHERE id = $id";
        $query = $this->pdo->prepare($ins);
        $query->execute();
        
    }
    public function update($nome,$sobrenome, $email, $id) {
        $upd = "UPDATE $tbname SET nome = $nome, sobrenome = $sobrenome, email = $email WHERE id = $id";
        $query = $this->pdo->prepare($upd);
        $query->ececute();
        
    }
    public function delete($id) {
        $del = "DELETE FROM $tbname WHERE id = $id";
        $query = $this->pdo->prepare($del);
        $query->execute();
    }
}