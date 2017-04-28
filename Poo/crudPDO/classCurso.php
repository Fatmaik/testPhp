<?php
require_once 'conexao.php';
class Curso{
    private $pdo;

    public function __construct(Conexao $pdo) {
        // este pdo recebe o metodo connect que esta setado na classe abstrata Conexao;
        $this->pdo = $pdo->connect();
    }

    public function selectAll() {
        $sel = "SELECT * FROM cursos";
        $query = $this->pdo->prepare($sel);
        $query->execute();
        // returnando $query gerando um array associativo;
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}