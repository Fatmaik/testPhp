<?php
require_once 'conexao.php';
class Curso{
    private $db;

    public function __construct(iConexao $db) {
        $this->db = $db->connect();
    }

    public function select() {
        $sel = "SELECT * FROM cursos";
        $res = $this->db->query($sel);
        $res->execute();
        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }
}