<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            $dsn = "mysql:dbname=world;host=127.0.0.1";
            $dbuser = "root";
            $dbpass = "";

            try{
                $pdo = new PDO($dsn, $dbuser, $dbpass);
                echo "Conexao concluida";
            }catch(PDOException $e) {
                echo "Falhou: ".$e->getMessage();
            }
            
        ?>
   </div>
    
</body>
</html>