<?php
include("./libreria/operacion.php");
$operacion = new operacion();
$operacion->setSumar(5, 10);
$operacion->setRestar(10, 5);
$operacion->setMultiplicar(15, 2);
$operacion->setDivision(20, 5);
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
    echo "El resultado de la suma es: ". $operacion->getSumar();
    echo '<br>';
    echo "El resultado de la resta es: ". $operacion->getRestar();
    echo '<br>';
    echo "El resultado de la multiplicacion es: ". $operacion->getMultiplicar();
    echo '<br>';
    echo "El resultado de la division es: ". $operacion->getDivision();
    ?>
</body>
</html>