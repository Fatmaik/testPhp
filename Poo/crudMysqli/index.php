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
    <div id="div">
    <p>
    <?php
    require_once 'crud.php';
    $c = new Crud("localhost", "root", "rancid", "aliendatabase");
    // $selAll = $c->selectAll("aliab");
    $c->delete("aliab", 8);
    $selAll = $c->selectAll("aliab");
    foreach($selAll as $info) {
        echo "<p><br>Id: " . $info['id'] .
             "<br>Nome: " . $info['firstName'] . 
             "<br>Sobrenome: " . $info['lastName'] . 
             "<br>Email: " . $info['email'] . "<hr></p>";
    }
    // $c->setNome("SIka");
    // $c->setId(8);
    // $c->update("aliab");
    
    // $res = $c->selectId(8, "aliab");
    // foreach($res as $info) {
    //     echo "nome:" . $info['firstName'];
    // }
    
    ?>
    </p>
    </div>
    
</body>
</html>