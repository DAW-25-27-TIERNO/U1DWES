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
        echo "<p>De $categoria hay " . count($libros) ."</p>";
        foreach ($libros as $libro) {
            
        }
    }

    ?>

</body>

</html>