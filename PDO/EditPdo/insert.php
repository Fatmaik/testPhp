<form method="POST">
    <label for="">loguin:</label><input type="text" name="loguin" required><br>
    <label for="">senha: </label><input type="text" name="senha"><br>
    <label for="">email: </label><input type="text" name="email"><br>
    <br>
    <input type="submit">
</form>
<?php
    require 'conectionDb.php';
    
    if(isset($_POST["loguin"]) && empty($_POST["loguin"]) == FALSE) {
        $name = addslashes($_POST["loguin"]);
        $pass = addslashes(md5($_POST["senha"]));
        $email= addslashes($_POST["email"]);
        
        $ins1 = $ins->query("INSERT INTO usuarios SET loguin = '$name', senha = '$pass', email = '$email' ");
        echo "Cadastro concluido";
        header('location: index.php');

   
    }else{
        echo "Preencha os Campos";
    }

    


?>