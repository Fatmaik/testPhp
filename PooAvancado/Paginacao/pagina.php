<?php
require_once 'conexao.php';
class Pag{
    private $pdo;
    private $p;
    private $pag;
   
    public function __construct($pdo){
        return $this->pdo = $pdo->connect();
    }
    public function setPag($pag) {
        $this->pag = $pag;
    }
    public function getPag() {
        return $this->pag;
    }
    public function setP($p) {
        $this->p = $p;
    }
    public function getP() {
        return $this->p;
    }
    
    public function selNext() {
        
        $p = $this->getPag();
        
        $sel = "SELECT * from city limit 0,30 ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
        $this->proxima += 10;
        echo $p;
        echo $pag;
        
    }
    public function id($i) {
        $allPages = $this->selNext();
        foreach($allPages as $info) {
            // parametro da funcao $i, sendo ultilizado no array gerado pero foreach,
            // para recever totos os dados do db direto na table html
            echo $info[$i]."<br>";
        }
        
    }
    public function totPag() {
        // $pag sera a pagina clickada no link(a)
        // $this->setPag(1);
        
        // $pg calcula pagina mais limite de daods para informar na tela pelo select
        $pg = 1;
        // condicao para setar valor do pg caso exista um valor no $pag
        if(isset($_GET['pag']) && !empty($_GET['pag'])) {
            $pg = addslashes($_GET['pag']);
        }
        // calculo de paginanao para o link;
        $this->setpag(($pg - 1) * 10);
        
        
        $query = $this->pdo->prepare("SELECT count('ID') as c FROM city");
        $query->execute();
        $sel = $query->fetch();
        $total = $sel['c'];
        $paginas = $total / 30;
        
        for($i=0; $i<$paginas; $i++) {
            echo '<a href="./?pag='. ($i+1) . '"> ' . ($i+1) . ' </a>';
        }
        echo $this->getPag();
        echo $this->getP();

    }
    
    
}