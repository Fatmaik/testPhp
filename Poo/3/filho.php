<?php
require_once 'class.php';
class moto extends Veiculo{

    public function __construct($marca, $cor, $potencia) {
        parent::__construct($marca, $cor, $potencia);
        $this->potencia = $potencia;
    }
    public function getPotencia($pot = " CAvalos") {
        return $this->potencia . $pot;
    }

}