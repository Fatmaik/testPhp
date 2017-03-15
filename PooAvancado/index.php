<?php
require_once 'conexao.php';
require_once 'iConexao.php';
require_once 'classCurso.php';

$con = new Conexao("mysql:dbname=prog;host=localhost", "root", "rancid");
$c = new Curso($con);
var_dump($c->select());
