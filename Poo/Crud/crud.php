<?php
require_once 'connect.php';

class User {
    private $db;

    private $id;
    private $nome;
    private $faInst;

    public function __construct($sql) {
        $this->db = $sql;
        
    }
    public function select($order = null) {
        if($order) {
            $sel = "SELECT * FROM fa ORDER BY $order";
        }else{
            $sel = "SELECT * FROM fa";
        }
        $query = $this->db->query($sel);
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    public function insert() {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("INSERT INTO fa (nome, fadoInstrumento) Values (?, ?)");
        $stmt->bind_param("ss", $this->nome, $this->faInst);
        $stmt->execute();
        return $stmt->insert_id;
    }
    public function update() {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("UPDATE fa SET nome = ?, fadoinstrumento = ? WHERE id = ?");
        $stmt->bind_param("ssi", $this->nome, $this->faInst, $this->id);
        return $stmt->execute();
    }
    public function delete($id) {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("DELETE FROM fa WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    public function find($id) {
        $selId = "SELECT * FROM fa WHERE id = $id";
        $query = $this->db->query($selId);
        return $query;
    }
    public function setId($i) {
        $this->id = $i;
    }
    public function getId() {
        return $this->id;
    }
    public function setNome($n) {
        $this->nome = $n;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setFaInst($fa) {
        $this->faInst = $fa;
    }
    public function getFaInst() {
        return $this->faInst;
    }
}



