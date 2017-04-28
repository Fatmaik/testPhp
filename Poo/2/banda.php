<?php
require_once 'show.php';

abstract class Banda implements Show {
    private $nomeDaBanda;
    private $estiloDaBanda;
    private $integrante;
    private $tocando;
    
    public function __construct($nomeDB, $estDB, $int) {
        $this->nomeDaBanda = $nomeDB;
        $this->estiloDaBanda = $estDB;
        $this->integrante = $int;
        $this->tocando = FALSE;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setEstilo($est) {
        $this->estilo = $est;
    } 
    public function getEstilo() {
        return $this->estilo;
    }
    public function setIntegrante($int) {
        $this->integrante =$int;
    }
    public function getIntegrante() {
        return $this->integrante;
    }
    public function setTocando($toc) {
        $this->tocando = $toc;
    }
    public function getTocando() {
        return $this->tocando;
    }
    public function comecar() {
        $this->setTocando(TRUE);
        return "SHOW ROLANDO";
    }
    public function parar() {
        $this->setTocando(FALSE);
        return "O SHOW ACABOU";
    }

}


?>