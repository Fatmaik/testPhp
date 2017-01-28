<?php
    // $dsn = "mysql:dbname=usuario;host=127.0.0.1";
    // $dbuser = "root";
    // $dbpass = "";
    require 'conectionDb.php';
    
    try{
        // $pdo = new PDO($dsn, $dbuser, $dbpass);

        if(isset($_POST["nome"]) != empty($_POST["nome"])) {
            $nome = addslashes(isset($_POST["nome"]);
            $pass = addslashes(md5($_POST["pass"]);
            $email = addslashes(isset($_POST["email"]);


            $sql = "INSERT INTO usuarios SET id = default, loguin = '$nome', senha = '$pass', email = '$email'";
            $sql = $pdo->query($sql);
            echo "Cadasto concluido";
        }else{
            echo "Campos invalidos";
        }
    
    }catch(PDOExcepition $e) {
        echo "Fail: " . $e->getMessage();
    }
?>