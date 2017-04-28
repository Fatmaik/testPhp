<?php
require_once 'conexao.php';

$sel = "SELECT * FROM cursos";
$res = $pdo->query($sel);
// $res->execute();
// $x = $res->fetchAll(\PDO::FETCH_ASSOC);
// var_dump($x);
