<?php
namespace Source;
class Clientes implements \Source\iCliente{
    private $pdo;
    private $tbname;

    public function __construct($pdo) {
        // retornando o metodo de conexao que existe na classe Conexao
        return $this->pdo = $pdo->connect();
        $this->tbname = $tbname;
    }
    
    public function selectAll() {
        $sel = "SELECT * FROM clientes";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function selectId($id) {
        $sel = "SELECT * FROM clientes WHERE id = '$id'' ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function insert($nome, $sobrenome, $email) {
        $ins = "INSERT INTO clientes SET id = default, nome = '$nome', sobrenome = '$sobrenome', email = '$email' ";
        $query = $this->pdo->prepare($ins);
        $query->execute();
        
    }
    public function update($nome, $sobrenome, $email, $id) {
        $upd = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' WHERE id = '$id'";
        $query = $this->pdo->prepare($upd);
        $query->execute();
        
    }
    public function delete($id) {
        $del = "DELETE FROM clientes WHERE id = '$id'";
        $query = $this->pdo->prepare($del);
        $query->execute();
    }
}