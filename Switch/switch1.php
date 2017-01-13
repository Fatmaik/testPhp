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
        $dia = isset($_GET["dia"])?$_GET["dia"]:"No data";

        switch($dia) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                $r = "It's a weekday. You should study a little.";
                break;
            case 6:
            case 7:
                $r = "Today is the weekend, you can rest if you want, but I recommend studying a little more.";
                break;
            default:
                $r = "no data";
                
        }
        echo $r.'<br>';
    ?>
    <br>
    <a href="javascript:history.go(-1)"><button class="button" type="button">Voltar</button></a>
</div>
</body>
</html>