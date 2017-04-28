<?php
abstract class Veiculo{
    private $marca;
    protected $cor;
    private $potencia;

    public function __construct($marca, $cor, $potencia) {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->potencia = $potencia;


    }
    public function setMarca($marca) {
        $this->marca =$marca;
    }
    abstract public function getPotencia($pot);
    
}