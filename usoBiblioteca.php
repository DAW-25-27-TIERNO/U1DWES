<?php
include "f.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo comparaPalabras("hola", "adiosasdfasdfasdfasdf"); //negativo
    echo "<br>";
    echo comparaPalabras("adiasdfasdfos", "hola"); //positivo
    echo "<br>";
    echo comparaPalabras("adios", "holas"); //0
    echo "<br>";

    /*$cadena = "hola";
    for ($i=0; $i < strlen($cadena); $i++) { 
        var_dump($cadena[$i]);
    }*/

    echo cuentaLetras("hola que tal", "l");    //2 (hay 2 l)
    echo "<br>";
    echo cuentaLetras("hola que tala");    //2 (hay 2 a)
    echo "<br>";

    ?>

    <h2>Parámetros por valor / referencia</h2>

    <?php
    $numero = 5;
    aumenta($numero);
    echo "---->$numero<br>";

    //echo $asdf[3];
    ?>
</body>

</html>