<?php 
// Esto es un comentario
/* Esto es un comentario multilínea */
$num = 7;
$hasta = 15;
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
    <table>
        <thead>
            <tr>
                <th>Tabla del <?=$num?></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < $hasta; $i++) { ?> 
                <tr>
                    <td><?=$num?> x <?=$i?></td>
                    <td><?=$num*$i?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>