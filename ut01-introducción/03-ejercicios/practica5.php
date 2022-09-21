<?php 
$nombre='Jorge';
$r = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la calculadora <?=$nombre?></h1>
    <div>
        <p>Área: <?=$r*$r*M_PI?></p>
        <p>Longitud: <?=2*$r*M_PI?></p>
    </div>
</body>
</html>