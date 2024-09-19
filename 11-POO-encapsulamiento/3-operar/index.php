<?php
include("./libreria/numero.php");
include("./libreria/operacion.php");

$num1 = new Numero(10);
$num2 = new Numero(5);

$operacion = new Operacion($num1, $num2);
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
    echo "<p>Suma: ". $operacion->sumar(). "</p>";
    echo "<p>Resta: ". $operacion->restar(). "</p>";
    echo "<p>Multiplicacion: ". $operacion->multiplicar(). "</p>";
    echo "<p>Division: ". $operacion->dividir(). "</p>";
?>

</body>

</html>         