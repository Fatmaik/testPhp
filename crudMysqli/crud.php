<?php
// require_once 'conexao.php';

class Crud{
    // attr para o DATABASE
    private $host;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $dsn; // variabel contendo a conexao

    // attrs para insert/delete/update e Select
    private $id;
    private $nome;
    private $email;

    public function __construct($host, $dbuser, $dbpass, $dbname) {
        // deve ser informado tdas as informacoes de acesso ao banco que deseja conectar
        $this->host = $host;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;

        // conexao ao DATABASE
        $dsn = new mysqli($host, $dbuser, $dbpass, $dbname);
        if(mysqli_connect_errno()) {
            echo "Falha numero: (" . mysqli_connect_errno() . ") " . $dsn->connect_error(); 
        }
        $this->dsn = $dsn;
    }
    // select de todos os cadastros da tabela que for informada
    public function selectAll($tbname, $order = null) {
        if($order) {
            $sel = "SELECT * FROM $tbname ORDER BY $order ";
        }else{
            $sel = "SELECT * FROM $tbname ";
        }
        $query = $this->dsn->query($sel);
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    // select especifico por ID
    public function selectId($id, $tbname) {
        $sel = "SELECT * FROM $tbname WHERE id = $id ";
        $query = $this->dsn->query($sel);
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    
    
    
    
    
    
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setEmail($email) {
        $this->email = $email;
    } 
    public function getEmail() {
        return $this->email;
    }
}


?>