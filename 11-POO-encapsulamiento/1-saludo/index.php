<?php
include('./libreria/saludo.php');
$saludar = new saludo();
$saludar->setsaludar("hola martin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saludo encapsulamiento</title>
</head>
<body>
    <?php
    echo $saludar->getsaludar();
    ?>
</body>
</html>