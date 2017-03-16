<?php
require_once 'conexao.php';
class Curso{
    private $pdo; // ira recever o retorno da conexao ao DB

    public function __construct(iConexao $pdo) {
        // pdo recevendo o metodo abstrado connect que esta sendo setado na classe Conexao
        $this->pdo = $pdo->connect();  
    }
    public function selectAll() {
        $sel = "SELECT * FROM cursos";
        // var query setando a query no banco por meio do $pdo
        $query = $this->pdo->prepare($sel);
        $query->execute();
        // retorna uma array associativa 
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

}
