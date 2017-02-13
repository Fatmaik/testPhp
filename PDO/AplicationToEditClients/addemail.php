<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ElviStore</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php 
        require 'header.php';
    ?>
    <article><br>
        <div id="addemail">
            <form method="post">
                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required/><br>
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" required><br>
                <label for="email">Email: </label><br>
                <input type="text" name="email" id="email" required/><br><br>
                <input type="submit"/>
            </form>
        </div>
    </article>
    <?php
    require 'conexao.php'; // arquivo contendo a conexao com o database
    $nome = addslashes($_POST["nome"]);
    $sobre = addslashes($_POST["sobrenome"]);
    $email = addslashes($_POST["email"]);

    $dbEmail = $pdo->query("SELECT * from clientes");
    // verifica todos os emails ja cadastrados
    foreach($dbEmail->fetchAll() as $infoEmail) {
        if($email == $infoEmail["email"]) {
            $x = FALSE; // se for false o conta nao ira ser cadastrada 
            break;
        }else{
            $x = TRUE; // true significa que email nao existe no db entao o cadastro e efetuado;
        }
    }
    if($x == FALSE ) {
        echo "<p>Email ja esta sendo ultilizado</p>";
    }elseif ($x == TRUE) {
        $query = ("INSERT INTO clientes SET nome= '$nome',
        sobrenome= '$sobre', email= '$email' ") or die("Fail Insert");

        $pdo->query($query);
        echo "<p>Cadastro Done</p>";
    }
    ?>
</body>
</html>
