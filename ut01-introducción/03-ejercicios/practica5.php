<?php 
$nombre='Jorge';
$r = 0;
$error = false;
// $_GET Información de la cabecera
if (isset($_GET['radio'])) {
    $r = $_GET['radio'];
    if ($r == "") {
        $r = 0;
        $error = true;
    }
} else {
    $r = 0;
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
    <h1>Bienvenido a la calculadora <?=$nombre?></h1>
    <div>
        <?php if ($error) { ?>
            <h3>Eres un poco manazas. Mete un número</h3>
        <?php } ?>
        <form action="practica5.php" method="get">
            Radio: <input type="number" step="0.001" name="radio" id="" value="<?=$r?>"><br>
            <input type="submit" value="Calcular">
        </form>
    </div>
    <div>
        <p>Área: <?= (1*$r*$r*M_PI) ?></p>
        <p>Longitud: <?= (2*$r*M_PI)?></p>
    </div>
</body>
</html>