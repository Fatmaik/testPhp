<?php
require_once '../vendor/autoload.php';
require_once 'service.php';

// $container['curso']->insert("Jquery", "Manipulacao de Paginas WEB");
// $container['curso']->update(4, "JavaScript", "Js ssssis POwerFULL");
$container['curso']->delete(4);
var_dump($container['curso']->selectAll());