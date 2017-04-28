<?php
$db = "localhost";
$dbuser = "root";
$dbpass = "rancid";
$dbname =  "bandas";

// O @ ignora erros de conexao gerados pela classe
@$sql = new mysqli($db, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) {
    // agora sim geramos a mensagem adequada contendo o erro existente caso haja algum;
    echo "Falha de conecao Numero: (" . mysqli_connect_errno() . ") Mensagem = " . $sql->connect_error(); 
}
?>