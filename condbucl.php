<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y bucles</title>
</head>

<body>
    <h2>Condicionales</h2>
    <?php
    // Si la edad es menor a 18 que muestre "eres menor de edad" y si no "eres mayor de edad"
    $age = 17;
    if ($age >= 18) {
        echo "Eres mayor de edad";
    } elseif ($age < 5) {
        echo "Eres menor";
    } else {
        echo "Eres menor de edad";
    }

    //Ternario: (comparación) ? true : false
    $mensaje = $age >= 18 ? "eres mayor!" : "eres menor!";
    echo "<br>";
    echo $mensaje;

    /*switch: si $dia = 1 entonces lunes, 
            si $dia = 2 entonces martes, 
            si $dia = 3 entonces miércoles, 
            si no, que diga "otros"
            */
    echo "<hr>";
    $dia = 20;
    switch ($dia) {
        case 1:
            echo "lunes";
            break;
        case 2:
            echo "martes";
            break;
        case 3:
            echo "miércoles";
            break;
        default:
            echo "otro";
    }

    echo "<hr>";
    $dia = 3;
    echo match ($dia) {
        1 =>   "lunes",
        2 => "martes",
        3 => "miércoles",
        default => "otro"
    };

    echo "<hr>";
    ?>

    <h2>Bucles</h2>

    <?php
    //haz un bucle del 1 al 10 que imprima los números separados por comas.
    //1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
    // for (declaración e inicialización; condición; incremento)
    for ($i = 1; $i <= 10; $i++) {
        echo "$i";
        if ($i < 10){
            echo ", ";
        }
    }
    echo "<hr>";
    //Cada bloque del for puede tener varias operaciones:
    for ($i = 1, $x = 9; $i <= 10; $i++, $x-=3) {
        echo "$i / $x";
        if ($i < 10){
            echo ", ";
        }
    }

    echo "<br>Múltiplos: ";

    // recorre con for del 1 al 100 e imprime solamente los números múltiplos de 5 y de 7.
    for ($i=1; $i <= 100; $i++){
        if ($i % 5 == 0 and $i % 7 == 0){
            echo "$i,";
        }
    }

    //traduce el for de arriba en un while
    //while (condición){...}
    $i = 1;
    while ($i<=100){
        if ($i % 5 == 0 and $i % 7 == 0){
            echo "$i,";
        }
        $i++;
    }
    ?>


</body>

</html>