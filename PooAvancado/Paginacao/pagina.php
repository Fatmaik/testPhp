<?php
require_once 'conexao.php';
class Pag{
    private $pdo;

    public function __construct($pdo){
        return $this->pdo = $pdo->connect();
    }
    public function sel() {
        $p = 1;
        $sel = "SELECT * from city limit 0,20 ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}