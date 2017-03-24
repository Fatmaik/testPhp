<?php
try{
    return $pdo = new \PDO("mysql:dbname=world;host=localhost", "root", "rancid");
}catch(PDOException $e) {
    echo "FALHA:" . $e->getMessage();
}