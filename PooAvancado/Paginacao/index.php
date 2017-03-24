<?php
require_once 'pagina.php';
require_once 'conexao.php';

$c = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
$c->connect();

$x = new pag($c);
$cc = $x->sel();
foreach($cc as $info) {
    echo $info['Name'] . "<br>";
}