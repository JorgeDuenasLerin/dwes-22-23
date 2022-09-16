<?php
$num_filas = 10;
$num_columnas = $num_filas;
$n=0;

function esPrimo($n){
    if ($n == 0 || $n == 1){
        return true;
    } else {
        $esprimo = true;
        $c = 2;
        while($esprimo && $c <= ($n/2)) {
            if(($n % $c) == 0 ){
                $esprimo = false;
            }
            $c++;
        }
        return $esprimo;
    }
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
        table, tr, td {
            border-collapse: collapse;
            border: 1px solid black;
        }
        table {
            text-align: center;
            width: 300px;
            margin: 0 auto;
        }
        .esprimo {
            background-color: #FF00FF;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i = 0; $i < $num_filas; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < $num_columnas; $j++) { 
                    $num_actual = $i*10+$j;
                    ?> 
                    <td <?= (esPrimo($num_actual))?'class="esprimo"':'' ?>><?=$num_actual?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>