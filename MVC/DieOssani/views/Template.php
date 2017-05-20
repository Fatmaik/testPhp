<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="assets/css/estiloTemplate/estilo.css">
</head>
<body>
    <h1><span>DieOssani</span> fotografia</h1>
    <!--<img src="fotografia.jpg"  width="500px" alt="">-->
    <!--chamando uma vire para dentro da template-->
    <?php $this->loadView($viewName, $viewData) ?>
</body>
</html>