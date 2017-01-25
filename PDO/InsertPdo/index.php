<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <form action="index.php" method="post">
            <table style="border : 1px solid black; padding: 4px">
                <caption>Area de Cadastro</caption>
                <tr>
                    <td>Loguin</td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="button"></td>
                </tr>
            </table>    
        </form>    

        <?php
            $dsn = "mysql:dbname=usuario;host=127.0.0.1";
            $dbuser = "root";
            $dbpass = "";
            
            try{
                $pdo = new PDO($dsn, $dbuser, $dbpass);

                $nome = isset($_POST["nome"])?$_POST["nome"]:"Inforne Nome";
                $pass = md5($_POST["pass"]) != "null"?md5($_POST["pass"]):"Informe Senha";
                $email = isset($_POST["email"])?$_POST["email"]:"Informe Email";

                if($nome != "" and $pass != "" and $email != "") {
                    $sql = "INSERT INTO usuarios SET id = default, loguin = '$nome', senha = '$pass', email = '$email'";
                    $sql = $pdo->query($sql);
                    echo "Cadasto concluido";
                }else{
                    echo "Campos invalidos";
                }

                

                
            }catch(PDOExcepition $e) {
                echo "Fail: " . $e->getmessage();
            }

        
        ?>
    </div>
</body>
</html>