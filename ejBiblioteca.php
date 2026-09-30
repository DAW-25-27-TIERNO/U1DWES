<?php
include "./arrays/biblioteca.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios biblioteca</title>
</head>

<body>
    <h2>1</h2>
    <p>1) Muestra el título del segundo libro de la categoría "Ciencia Ficción".
        <?php
        echo $biblioteca["Ciencia Ficción"][1]["titulo"];
        ?>
    </p>
    <h2>2</h2>
    <p>// 2) Muestra el autor de "Sapiens" (recuerda que "autores" es un array, aunque en este caso solo tenga un elemento).</p>







    <h2>3</h2>
    <h2>4</h2>
    <h2>5</h2>
    <h2>6</h2>
    <h2>7</h2>
    <h2>8</h2>
    <p> 8) Recorre todas las categorías y, dentro de cada una, muestra el título de cada libro, con el formato: "Ciencia Ficción -> Fundación"</p>
    <?php
    echo "<p>En total hay " . count($biblioteca) . "</p>";
    foreach ($biblioteca as $categoria => $libros) {
        echo "<p>De $categoria hay " . count($libros) . ": ";
        foreach ($libros as $libro) {
            echo $libro["titulo"] . ", ";
        }
        echo "</p>";
    }

    ?>

    <p>10) Recorre todos los libros y, para los que tengan "ejemplares", suma el total de ejemplares en todas las sedes y muéstralo así: "Sapiens: 15 ejemplares en total"</p>
    <?php
    foreach ($biblioteca as $categoria => $libros) {
        foreach ($libros as $libro) {
            $ej = 0;
            if (isset($libro['ejemplares'])) {
                //recorrer el array de ejemplares
                foreach ($libro['ejemplares'] as $sede => $numeroEj) {
                    $ej += $numeroEj;
                }
            }
            echo "{$libro['titulo']} tiene $ej ejemplares<br>";
        }
    }

    foreach ($biblioteca as $categoria => $libros) {
        foreach ($libros as $libro) {
            $ej = 0;
            if (isset($libro['ejemplares'])) {
                $ej = array_sum($libro['ejemplares']);
            }
            echo "{$libro['titulo']} tiene $ej ejemplares<br>";
        }
    }

    ?>
    <p>13) Recorre TODO el array (categorías, libros y reseñas) y cuenta cuántas reseñas en total tienen nota igual o superior a 4, mostrando el total al final junto con el título del libro que acumula más reseñas de ese tipo.</p>

    <?php
    $cantidadResenas[] = [];
    foreach ($biblioteca as $categoria => $libros) {
        foreach ($libros as $libro) {
            $cantidadResenas[$libro['titulo']] = 0;
            //$numNotas = 0;
            if (isset($libro['resenas'])) {
                foreach ($libro['resenas'] as $resenas) {
                    if ($resenas['nota'] >= 4) {
                        //$numNotas++;
                        $cantidadResenas[$libro['titulo']]++;
                    }
                }
                echo "<p>El libro {$libro['titulo']} tiene " . $cantidadResenas[$libro['titulo']] . " reseñas superiores a 4.</p>";
            }
        }
    }
    var_dump($cantidadResenas);

    ?>

</body>

</html>