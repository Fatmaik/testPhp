<?php
require_once '../vendor/autoload.php';
use Pimple\Container;

$container = new Container();

$container['conexao'] = function() {
    return new \Source\Conexao("mysql:dbname=elvistore;host=localhost", "root", "rancid", "clientes");
};
$container['cliente'] = function($c) {
    return new \Source\Clientes($c['conexao']);
};
echo "test";
var_dump($container['cliente']->selectAll());
