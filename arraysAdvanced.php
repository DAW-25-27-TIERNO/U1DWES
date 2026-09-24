<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "infoArrays/restaurants.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array de restaurantes</h1>
    <p>La dirección de Carpaccio es:
        <?php
        echo $p[0]["address"];
        ?>
    </p>
    <p>El número de camareros de Luigi es
        <?= $p[1]['employees'][1] ?>
    </p>
    <p>
        El número de bebidas de Carpaccio es
        <?php
        echo $p[0]['quantity']['drinks'];
        ?>
    </p>
    <p>El nombre de los 3 restaurantes obtenidos con un bucle es:</p>
    <?php
    //Versión con for:
    for ($i = 0; $i < count($p); $i++) {
        echo $p[$i]["name"] . " ";
    }
    echo "<br>";

    //Versión con foreach:
    foreach ($p as $r) {
        echo $r["name"] . " ";
    }
    ?>
    <p>Los restaurantes son:</p>
    <ul>
        <?php
        $x = 1;
        foreach ($p as $r) {
            //echo "<li>$x " . $r['name'] . "</li>";
            echo "<li>$x {$r['name']} </li>";
            $x++;
        }
        ?>
    </ul>

    <p>Los empleados de ambos restaurantes: </p>
    <?php
    /*Quiero que salga algo como esto (BUCLE):
        Carpacio: 4, 7, 2
        Luigi: 2, 6, 1
        */
    foreach ($p as $r) {
        //Imprimo el nombre del restaurante
        echo "{$r['name']}: ";
        //Imprimo el array de números employees:
        //echo $r["employees"]; //Da error
        //Necesito comprobar que existe $r['employees']
        if (isset($r['employees'])) {
            /*foreach ($r['employees'] as $e) {
                echo "$e, ";
            }*/
            echo implode(", ", $r['employees']);
        } else {
            echo "No hay empleados";
        }
        echo "<br>";
    }

    /*Luego en una table de HTML */

    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cocina</th>
            <th>Camareros</th>
            <th>Otros</th>
        </tr>
        <?php
        foreach ($p as $r) {
            echo "<tr>";
            echo "<td>{$r['name']}</td>";   //Primera celda nombre
            if (isset($r['employees'])) {
                foreach ($r['employees'] as $number) {
                    echo "<td>$number</td>";    //celdas con employees
                }
            } else {
                echo "<td></td><td></td><td></td>"; //3 celdas vacías
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php

    //función que reciba un array asociativo, y devuelva un string que contiene una tabla las claves y el tipo del valor que tiene.
    //por ejmplo:
    /*
    clave | tipo
    name | string
    address | string
    employees | array
    quanty | array
    */
    function clavesYTipos($array): string
    {
        $ret = '<table border="1">';  //$ret = "<table border=\"1\">";
        $ret .= "<tr>
        <th>Nombre</th>
        <th>Tipo</th></tr>";
        foreach ($array as $restaurant) {
            foreach ($restaurant as $key => $value) {
                $ret .= "<tr>
                <td>$key</td>
                <td>" . gettype($value) . "</td>
                </tr>";
            }
        }
        $ret .= "</table>"; //$ret = $ret . "</table>"; 
        return $ret;
    }
    echo clavesYTipos($p);
    echo clavesYTipos($a);

    ?>


    <h2>Añadir campos a arrays</h2>
    <?php
    //Voy a añadir el campo address a Mario Bros:
    if (!isset($p[2]["address"])){
        $p[2]["address"] = "Nueva dirección 56";
    }
    echo "---> {$p[2]["address"]}";
    ?>

</body>

</html>