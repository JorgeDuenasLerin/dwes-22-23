<?php

include('funciones01.php');

$cadena = "";
$vocales = 0;
$consonantes = 0;
$palindromo = false;
$envio = false;

if(isset($_GET['palabra'])) {
    $cadena = $_GET['palabra'];
    $envio = true;
    $vocales = cuentaNumVocales($cadena);
    $consonantes = cuentaNumConsonantes($cadena);
    $palindromo = esPalindromo($cadena);
}
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
    <h1>analizador de palabras</h1>
    <div>
        <form action="index.php">
            Palabra: <input type="text" name="palabra" placeholder="Tu palabra" value="<?=$cadena?>">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php if($envio) { ?>
        <ul>
            <li>Vocales: <?=$vocales?></li>
            <li>Consonantes: <?=$consonantes?></li>
            <li>Palíndromo: <?=($palindromo)?'Sí':'No'?></li>
        </ul>
    <?php } ?>
</body>
</html>