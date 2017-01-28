<?php
    $dsn = "mysql:dbname=usuario;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
    }catch(PDOException $e) {
        Echo "Fail: " . $e->getMessage();
    }

?>