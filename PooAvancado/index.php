<?php
require_once 'conexao.php';
require_once 'classCurso.php';
require_once 'container.php';

$con = Container::getConexao();
$cur = Container::getCurso();
var_dump($cur->selectAll());

