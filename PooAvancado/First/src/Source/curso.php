<?php
namespace Source;
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
    public function selectId($id) {
        $selId = "SELECT * FROM cursos WHERE id = '$id' ";
        $query = $this->pdo->prepare($selId);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function insert($nome, $desc) {
        $ins = "INSERT INTO cursos (id, nome, descr) VALUES (default, '$nome', '$desc') ";
        $query = $this->pdo->prepare($ins);
        $query->execute();
    }
    public function update($id, $nome, $desc) {
        $upd = "UPDATE cursos SET nome = '$nome', descr = '$desc' WHERE id = '$id' ";
        $query = $this->pdo->prepare($upd);
        $query->execute();
    }
    public function delete($id) {
        $del = "DELETE FROM cursos WHERE id = '$id' ";
        $query = $this->pdo->prepare($del);
        $query->execute();
    }

}
