<?php
require_once '../vendor/autoload.php';

use Pimple\Container;

$container = new Container();

$container['conexao'] = function() {
    return new \Source\Conexao("mysql:dbname=prog;host=localhost", "root", "rancid");
};
$container['curso'] = function($c) {
    return new \Source\Curso($c['conexao']);
};

var_dump($container['curso']->selectAll());