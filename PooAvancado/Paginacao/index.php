<?php
require_once 'pagina.php';
require_once 'conexao.php';
$conn = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
$paginas = new Pag($conn);
function id($i) {
    // instancia da classe de conexao 
    $conn = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
    // instancia da classe de paginas recebendo classe Conexao como parametro
    $paginas = new Pag($conn);
    // classe Paginas chamando o metodo de SELECT no Database
   
    $allPages = $paginas->sel(2);
    foreach($allPages as $info) {
        echo $info[$i]."<br>";
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <table border='2px' colspan='3'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Distrito</th>
            <th>Population</th>
        </tr>
        <tr>
            <td><?php id("ID"); ?></td>
            <td><?php id("Name"); ?></td>
            <td><?php id("District"); ?></td>
            <td><?php id("Population"); ?></td>
        </tr>
    </table>

    <a href=""><?php $paginas->lin();?></a>
</body>
</html>