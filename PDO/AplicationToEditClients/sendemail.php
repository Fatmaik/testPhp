<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/send.css">
</head>
<body>
    <?php
    require 'header.php';
    ?>
    <article><br>
    <div id="send">
        <p>Uso Restrito a Ernerst</p>
        <form action="sendemail.php" method="get">
            <label for="assunto">Assunto: </label><br>
            <input type="text" name="assunto" id="assunto" required><br>
            <label for="msg1">Mensagem: </label><br>
            <textarea name="msg" id="msg1" cols="30" rows="10" required></textarea><br>
            <input type="submit" name="submit">
        </form> 
    </div>
    </article>
</body>
</html>

<?php
require 'conexao.php';

// forma de altenticar o carregamento da pagina sem q haja mensagem de erro 
// por estar com campo vazio
if(isset($_GET["submit"])) {
    $from = "almer@makemeelvis.com";
    $assunto = addslashes($_GET["assunto"]);
    $msg = $_GET["msg"];

    $sql = $pdo->query("SELECT * FROM clientes");
    
    // recebendo os dados dos clientes que estao no DB;
    foreach($sql->fetchAll() as $info) {
        $nome = $info["nome"];
        $sobrenome = $info["sobrenome"];
        $to = $info["email"];
        $test = "Dear " . $nome . " " . $sobrenome . "<br>" . $msg;
        
        if(!empty($msg) && !empty($assunto)) {
            mail($to, $assunto, $msg, "FROM: ". $from);
            echo "Mensagem enviada para " . $to . "<br>";
        }else{
            echo  "Nao foi possivel Enviar para " . $to . ": Assunto ou Mensagen Branco!<br>";
        }
    }
    
}
?>
