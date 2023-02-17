<?php
$mensajeCookies = true;

// ¿El usuario acepta?
if(isset($_GET['accion']) && $_GET['accion'] == 'aceptar') {
    setcookie("verificado",1);
    $mensajeCookies = false;
}

if(isset($_COOKIE["verificado"]) && $_COOKIE["verificado"] == 1){
    $mensajeCookies = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cookies {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: grey;
        }
    </style>
</head>
<body>
    Bienvenido
    
    <?php if($mensajeCookies) { ?>
    <div id='cookies'>
        <a href="?accion=aceptar">Aceptar</a>
        <a href="?accion=rechazar">Rechazar</a>
    </div>
    <?php } ?>
</body>
</html>