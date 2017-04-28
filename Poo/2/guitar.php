<?php
require_once 'banda.php';

class Guitar extends Banda{
    private $nome;
    private $idade;

    public function __construct($nomeDB, $estDB, $int, $nome, $idade) {
        parent::__construct($nomeDB, $estDB, $int);
        $this->nome = $nome;
        $this->idade = $idade;
        
        
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function comecar() {
        $this->setTocando(TRUE);
        return "SHOW ROLANDO";
    }
    public function para() {
        $this->setTocando(FALSE);
        return "O SHOW ACABOU";
    }
}

?>