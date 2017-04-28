<?php
require_once 'pagina.php';
require_once 'conexao.php';

// instancia da classe de conexao 
$conn = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
// instancia da classe de paginas recebendo classe Conexao como parametro
$paginas = new Pag($conn);

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
            <td><?php $paginas->id("ID"); ?></td>
            <td><?php $paginas->id("Name"); ?></td>
            <td><?php $paginas->id("District"); ?></td>
            <td><?php $paginas->id("Population"); ?></td>
        </tr>
    </table>
    
     <?php
     $paginas->totPag();
     ?>
    
</body>
</html>