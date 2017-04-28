<?php

require_once 'class.php';
require_once  'filho.php';




$x = new moto("HondaA", "Preta", 180);
var_dump($x);

echo $x->getPotencia();