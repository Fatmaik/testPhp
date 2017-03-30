<?php
require_once 'conexao.php';
class Pag{
    private $pdo;
    private $pag;
   
    public function __construct($pdo){
        return $this->pdo = $pdo->connect();
    }

    public function getPag() {
        return $this->pag;
    }
    public function setPag($pag) {
        $this->pag = $pag;
    }
    
    
    public function selNext() { 
        // $pg calcula pagina mais limite de dados para informar na tela pelo select
        $pg = 1;
        // condicao para setar valor do pg caso exista um valor no $pag
        if(isset($_GET['pag']) && !empty($_GET['pag'])) {
            $pg = addslashes($_GET['pag']);
        }
        // calculo de paginanao para o link;
        $this->setPag(($pg - 1) * 30);
        $p = $this->getPag();

        $sel = "SELECT * from city limit  $p ,30 ";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
        
    }
    
    public function id($i) {
        $allPages = $this->selNext();
        foreach($allPages as $info) {
            // parametro da funcao $i, sendo ultilizado no array gerado pelo foreach,
            // para recever totos os dados do db direto na table html
            echo $info[$i]."<br>";
        }    
    }

    public function totPag() {
        
        $query = $this->pdo->prepare("SELECT count('ID') as c FROM city");
        $query->execute();
        $sel = $query->fetch();
        // total de registros no Db
        $total = $sel['c']; 
         // total de paginas recevbe total de registros / 30 que seram mostrados em cada pagina
        $paginas = $total / 30;
        
        for($i=0; $i<$paginas; $i++) {
            echo '<a href="./?pag='. ($i+1) . '"> ' . ($i+1) . ' </a>';
        }
    }
}