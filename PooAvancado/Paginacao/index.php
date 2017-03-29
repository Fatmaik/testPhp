<?php
require_once 'pagina.php';
require_once 'conexao.php';


function id($i) {
    // instancia da classe de conexao 
    $conn = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
    // instancia da classe de paginas recebendo classe Conexao como parametro
    $paginas = new Pag($conn);
    // classe Paginas chamando o metodo de SELECT no Database
   
    $allPages = $paginas->selNext();
    
    foreach($allPages as $info) {
        // parametro da funcao $i, sendo ultilizado no array gerado pero foreach, para recever totos os dados do db
        echo $info[$i]."<br>";
    }
    
}
// $conn = new Conexao("mysql:dbname=world;host=localhost", "root", "rancid");
// // instancia da classe de paginas recebendo classe Conexao como parametro
// $paginas = new Pag($conn);
// $paginas->totPag();
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
    <!--<button type="button" value=<?php $paginas->selNext();?>>Prev</button>
    <button type="button" value=<?php $paginas->selNext();?>>Next</button>-->

    <!--<a href="/?$paginas->selNext()">Proximo</a>
    <a href="http://localhost/login/creater_pdf/print_pdf/id/<? echo $row->id; ?>"onclick="window.open(this.href, 'child', 'scrollbars,width=1000,height=500');
     return false">Imprimir</a>-->
    
</body>
</html>