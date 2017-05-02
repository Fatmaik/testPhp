<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login din&acirc;mico em AJAX - PHP | Padr&atilde;o MVC | jQuery - por Hugo Ferreira</title>

    <!-- Favicon - Icone na barra de título e endereço -->
    <!--<link rel="shortcut icon" href="http://www.hcferreira.com.br/templates/template_hcf/favicon.ico" />-->
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/lib/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
	<div id="form_container">
    	<form action="" method="post" name="frm_login">
            <fieldset>
                <legend>Efetuar login:</legend>
                Login:<br/>
                <input type="text" name="login" id="login" /><br/><br/>
                Senha:<br/>
                <input type="text" name="senha" id="senha" /><br/><br/>
                <button type="button" name="btn_login" id="btn_login">Entrar</button>
            </fieldset>
        </form>
    </div> 
    <div id="resultado"></div>
</body>
</html>