<?php
    require 'conectionDb.php';

    if(isset($_GET["id"]) != empty($_GET["id"])) {
        $id = addslashes($_GET["id"]);

        $pdo->query("DELETE FROM usuarios WHERE id = '$id' ");
        header('location: index.php');

    }else{
        header('location: index.php');
    }



?>