<?php
require_once 'conexao.php';
class Pag{
    private $pdo;
    private $p;
    private $proxima;
    private $anterior;

    public function __construct($pdo){
        return $this->pdo = $pdo->connect();
    }
    public function setP($p) {
        $this->p = $p;
    }
    public function getP() {
        return $this->p;
    }
    public function totPag() {
        $query = $this->pdo->prepare("SELECT count(*) as c FROM city");
        $query->execute();
        $sel = $query->fetch();
        $total = $sel['c'];
        echo $paginas = $total / 30;
    }

    public function selNext() {
        $this->proxima = 0;
        $sel = "SELECT * from city limit $this->proxima,20 ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
        $this->proxima += 10;
        
    }
    public function selBef() {
        $this->anterior = $this->proxima - 10;
        $sel = "SELECT * FROM city limit $this->anterior,20";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
        $this->anterior -= 10;
    }

    // public function lin() {

    //     for($q=0; $q<40; $q++) {
    //         echo $q;
    //         print "<a href=\"?pagina=".$q."\"><b>Anterior</b></a>";
    //     }
        
    // }
    
}