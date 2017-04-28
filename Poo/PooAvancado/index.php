<?php
require_once 'conexao.php';
require_once 'classCurso.php';

$con = new Conexao("mysql:dbname=prog;host=localhost", "root", "rancid");

$curso = new Curso($con);

var_dump($curso->selectAll());