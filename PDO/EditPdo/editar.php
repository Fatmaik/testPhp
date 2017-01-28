<form method="POST">
    <label for="">loguin:</label><input type="text" name="loguin" required><br>
    <label for="">senha: </label><input type="text" name="senha" required><br>
    <label for="">email: </label><input type="text" name="email" required><br>
    <br>
    <input type="submit">
</form>
    <a href="index.php">Voltar para Home</a>


<?php
    require 'conectionDb.php';

    $edt = new PDO($dsn, $dbuser, $dbpass);

    if(isset($_GET["id"]) && empty($_GET["id"]) == FALSE) {
        $id = addslashes($_GET["id"]);

        if(isset($_POST["loguin"]) && empty($_POST["loguin"]) == FALSE) {
            $loguin = addslashes($_POST["loguin"]);
            $pass = md5(addslashes($_POST["senha"]));
            $email = addslashes($_POST["email"]);
        
            $edt->query("UPDATE usuarios SET loguin = '$loguin', 
            senha = '$pass', email = '$email' WHERE id = '$id' ");
            header('location: index.php');
        }else{
            echo "<br>Preencha os Campos";
        }
        
    }else{
        
        header('location: index.php');
    }

?>
