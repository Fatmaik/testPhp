<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pdo</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            $dsn = "mysql:dbname=world;host=localhost;charset=utf8"; //acessa o banco
            $dbuser = "root"; //loguin para acesso ao banco
            $dbpass = ""; //senha para acesso 

            try{
                $pdo = new PDO($dsn, $dbuser, $dbpass); // required andress of db as user/pass too;
                $sql = $pdo->query("select * from city where CountryCode = 'BRA'"); // command to search in db

                if($sql->rowCount() > 0) { // if empty request else will be returned;
                    // receive all request of command as one array, use this only to learning;
                    // try with fletchAll() to absorv;
                    $sqlInfo = $sql->fetchAll(); 
                    foreach($sqlInfo as $info) {
                        echo "Info: " . $info["District"] . " - " . $info["CountryCode"] .  "<br>";
                    } 
                }else {
                    echo "Invalid Request";
                }
            }catch(PDOException $e) {
                echo "Fail: " . $e->getmessage();
            }
        
        ?>
    </div>
</body>
</html>