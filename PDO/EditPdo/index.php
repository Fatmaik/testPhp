<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <a href="insert.php" class="Button">Adicionar Usuario</a><br><br>
    <?php
        require 'conectionDb.php';
        $sql = $pdo->query("SELECT * FROM usuarios");
        foreach($sql as $info) {
            echo "Id: ".$info["id"]." - - - "."Loguin: ".$info["loguin"]." - - - ".
            "Email: ".$info["email"]." - - - - - - ". '<a href="editar.php?id='.$info['id'].'">Editar</a> - 
                                                       <a href="excluir.php?id='.$info["id"].'">Excluir</a><br>'; 

        }
    ?>
    </div>
</body>
</html>