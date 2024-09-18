<?php
include("./libreria/operacion.php");
$operar = new operaciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
</head>
<body>
    <?php
    echo $operar->suma(5, 10);
    echo '<br>';
    echo $operar->resta(15, 10);
    echo '<br>';
    echo $operar->multiplicacion(2, 5);
    echo '<br>';
    echo $operar->division(20, 5);
    ?>
</body>
</html>