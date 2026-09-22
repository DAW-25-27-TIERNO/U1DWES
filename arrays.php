<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Arrays indexados</h2>
    <?php
    $cars = array("Seat", "Audi", "BMW");
    $food = ["tomatoes", "avocados", "carrots"];

    //Quiero añadir otra comida: berenjena
    $food[3] = "aubergines";
    $food[3] = "eggplants"; //sobrescribe el valor

    //Quiero añadir al final calabacín
    $food[] = "zucchini";

    foreach($food as $f){
        echo "$f<br>";
    }

    echo "<br>";

    $food[7] = "cucumbers";
    foreach($food as $f){
        echo "$f<br>";
    }
    ?>

    <h2>Arrays asociativos</h2>
    <?php 
        $capitals = [
            "Ecuador" => "Quito",
            "Spain" => "Madrid",
            "Norway" => "Oslo"
        ];
        echo "<p>La capital de Noruega es " . $capitals['Norway'] . "</p>"; //Oslo
        //echo "<p>La capital de Noruega es " . $capitals[2] . "</p>";    //Error
        //echo count($capitals);  //3
        //Meto un elemento nuevo: Colombia - Bogotá
        $capitals['Colombia'] = 'Bogotá';
        $capitals['Portugal'] = 49;

        // Meter en el array: Georgia - Tbilisi
        $capitals['Georgia'] = "Tbilisi";

        // Recorrer el array con un foreach
        foreach($capitals as $c){
            echo "$c<br>";
        }

        //Recorrer claves y valores:
        foreach($capitals as $country => $capital){
            echo "La capital de $country es $capital<br>";
        }


        //Eliminar un elemento de un array asociativo
        unset($capitals['Portugal']);
        var_dump($capitals);

        if (isset($capitals['Portugal'])){
            echo "La capital de Portugal es " . $capitals['Portugal'] . "<br>";
        } else {
            echo "No tengo la capital de Portugal<br>";
        }
    ?>

    <h2>Funciones con arrays</h2>

    <?php
        $notas = [9.0, 6.9, 7.5, 8.2];

        //Suma de valores
        $suma = array_sum($notas);
        //Longitud:
        $numeroDeNotas = count($notas);
        $media = $suma / $numeroDeNotas;
        //Equivale: $media = array_sum($notas) / count($notas);
        var_dump($media);

        //Ordenar de menor a mayor:
        sort($notas);
        var_dump($notas);
        //De mayor a menor:
        rsort($notas);
        var_dump($notas);

        //Revolver
        shuffle($notas);
        var_dump($notas);

        //Nota más alta:
        sort($notas);
        echo "La nota más alta es " . $notas[count($notas) - 1] . "<br>";

        //Buscar
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.01, $notas));

        //implode: separa cada elemento del array por un delimitador
        echo implode(", ", $notas);

        $nombres = "Juan#Alberto#Maria";
        $arrayNombres = explode("#", $nombres);
        var_dump($arrayNombres);


        //Array asociativo:
        //políticos y cargos
        $p = [
            "Pedro" => "Presidente",
            "Pilar" => "Educación",
            "Oscar" => "Transporte",
            "Fernando" => "Interior"
        ];
        var_dump($p);


        //sort($p); Si hago esto en un asociativo, elimino las claves y lo convierto en indexado
        var_dump($p);

        //Por valor ascendente:
        asort($p);
        var_dump($p);
        //Por valor descendentes (reverse):
        arsort($p);
        var_dump($p);

        //Por clave ascendente:
        ksort($p);
        var_dump($p);
        //Por clave descendente
        krsort($p);
        var_dump($p);

        //var_dump(implode("-",$p));    Imprime los valores, no las claves

        foreach($p as $k => $v){
            echo "$k<br>";
        }

        // Función que me devuelve las claves de un array:
        $claves = array_keys($p);
        var_dump($claves);
        echo implode(", ", array_keys($p));

        //en qué posición está un elemento:
        $resultado = array_search("Presidente", $p);
        var_dump($resultado);

        $resultado = array_search("asdf", $p);
        var_dump($resultado);

        var_dump($notas);
        $resultado = array_search(8.2, $notas);
        var_dump($resultado);

        
        





    ?>

    <br><br><br><br><br><br><br><br>
</body>
</html>