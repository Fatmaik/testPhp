<?php
require_once 'conexao.php';
class Pag{
    private $pdo;
    private $p;

    public function __construct($pdo){
        return $this->pdo = $pdo->connect();
    }
    public function setP($p) {
        $this->p = $p;
    }
    public function getP() {
        return $this->p;
    }

    public function sel($p) {
        
        $sel = "SELECT * from city limit $p,20 ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function lin() {

        for($q=0; $q<40; $q++) {
            echo $q . "-";
        }
        
    }
    
}