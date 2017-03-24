<?php
class n{
    public $n1;
    public $n2;

    public function somar($n1, $n2) {
        return $n1 + $n2;
    }
}



class x extends n{
    public $n1;
    public $n2;
    public function somar($n1, $n2) {
        return $n1 - $n2;
    }
}

$xx = new n();
echo $xx->somar(2,2);
echo "<br>";

$xxx = new x();
echo $xxx->somar(5,6);