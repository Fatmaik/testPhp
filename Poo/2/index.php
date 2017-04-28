<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body >
    <div id="div">
        <p>
        <?php
        $host = "localhost";
        $dbuser = "root";
        $dbpass = "rancid";
        $dbname = "bandas";

        @$sql = new mysqli($host, $dbuser, $dbpass, $dbname);

        if(mysqli_connect_errno()) {
            echo "falha: (".$sql->connect_errno.")".$sql->connect_error;
            exit;
        }
        $user = new User($sql);
        $user->setNome("Dionathan");
        $user->setFadIns("Baixista");

        echo $user->insert();
        
        ?>
        </p>
       
    </div>
    
</body>
</html>