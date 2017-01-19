<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div>
        
    <?php
    // este formulario esta mal configurado  apos aprender RegExp farei a versao 2;
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome: Dado Incorreto";
        $tel = isset($_GET["tel"])?$_GET["tel"]:"Telefone: Dado Incorreto";
        $email = isset($_GET["email"])?$_GET["email"]:"Email: Dado Incorreto";

        $info = True;
        if($nome != is_numeric($nome) && $tel == is_numeric($tel)){
            $info = True;
        }
        else{
            $info = False;
            echo"Dados Incorretos";
        };
        if($info != False) {
            echo "<span class='foco'>Nome: $nome<br>
                                    Telefone: $tel<br>
                                    Email: $email";
        }
        
        
    ?>
    <br><br>
    <a href="javascript:history.go(-1)"class="button">Voltar</a>
    </div>
</body>
</html>