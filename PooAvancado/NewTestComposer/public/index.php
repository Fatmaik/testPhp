<?php
require_once '../vendor/autoload.php';
require_once 'service.php';
// echo "test";
// var_dump($container['cliente']->insert("Cassandra", "Perereca", "Ca@gmail.com", 84));
// $container['cliente']->insert("Nirva", "Nana", "nirva@gmail.com");
$container['cliente']->delete(101);
var_dump($container['cliente']->selectAll());
