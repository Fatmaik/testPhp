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
            $name = $_GET["name"]=="null"?$_GET["name"]:"NAO INFORMADO";
            $date = $_GET["date"]=="null"?$_GET["date"]:"NAO INFORMADO";
            $sexo = $_GET["sexo"]=="null"?$_GET["sexo"]:"NAO INFORMADO";
            $age = date("Y")-$date=="null"?date("Y")-$date:"NAO INFORMADO";
            
            echo "Name: $name<br>
                Date of Birth: $date<br>
                age: $age <br>
                Sexo: $sexo";
        ?>
        <br>
        <a href="http://localhost/CursoPHP/testPhp/testForm/form.html"><button type="button">voltar</button></a>
    </div>
    
</body>
</html>