<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/delete.css">
</head>

<body>
    <?php
        require 'header.php';
    ?>
    <article>
        <br>
        <div id="delete">
            <form id="delete1" action="delete.php" method="post">
                <p>Entre o email a ser deletado</p>
                    <?php
                    require 'conexao.php';
                    $sel = $pdo->query("SELECT * FROM clientes");
                    foreach($sel->fetchAll() as $info) {
                        // var email recebe todos os emails cadastrados no Database
                        $email = $info["email"]; 
                        // input gerando uma checkbox com todos os email contendo no DB
                        echo '<input type="checkbox" name="cBox" value=' . $email . '>' . $email . "<br>";
                    }
                    echo "<br>";
                    
                    // O email que estiver com checkbox True sera deletado
                    if(isset($_POST['cBox'])) {
                        echo "O Seguinte Email foi Deletado! <br/>";
                        $x = $_POST["cBox"];
                        echo $x;
                        $pdo->query("DELETE FROM clientes WHERE email = '$x' ");
                    }
                    else {
                        echo "checkbox não marcado! <br/>";
                    }
                    ?>
                <br>
                <input type="submit" name="submit" id="submit" value="Deletar">
            </form>
        </div>
    </article>
</body>
</html>