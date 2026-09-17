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

</body>

</html>