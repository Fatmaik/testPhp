<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "rancid";
$dbname = "elvistore";

$dsn = new mysqli($host, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
    echo "falha na conexao numero: (". mysqli_connect_errno() . ") " . $dsn->connect_error();
}else{
    echo "logado";
}

?>