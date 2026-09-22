<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Funciones :)</h1>
    <?php
    //Función que reciba un array de notas y devuelve la cantidad de personas aprobadas
    //public int aprobadas(notas[]){}
    function aprobadas($notas): int
    {
        $apr = 0;
        foreach ($notas as $n) {
            if ($n >= 5) {
                $apr++;
            }
        }
        return $apr;
    }

    echo aprobadas([9.0, 4, 2, 9]);
    //echo aprobadas("hola");

    //función que reciba dos strings y devuelva la concatenación de los dos
    function joinStrings(string $s1, string $s2): string{
        return $s1 . $s2;
    }

    echo "<br>";

    echo joinStrings("hola","adios");   //"holaadios"

    //Parámetros con valores por defecto
    //saludar: si recibe un parámetro (el nombre: XXXXX), que devuelva "Hola, XXXXXX";
    //          si recibe dos parámetros (nombre: XXXX y saludo: YYYY), que devuelva "YYYY, XXXX"

    /*function saludar($nombre, $saludo = "Hola"): string{
        return "$saludo, $nombre";
    }*/

    echo "<br>";
    echo saludar("Juan");   //Hola, Juan
    echo "<br>";
    echo saludar("Juan", "Buenos días");    //Buenos días, Juan

    //Función que reciba un array indexado de números, y un segundo parámetro de tipo bool
    //si es true, que lo devuelva ordenado de mayor a menor
    //si es false o no existe, que devuelva ordenado de menor a mayor
    function ordenar($nums, $ord = false):array{
        if ($ord == true){
            rsort($nums);
        }else{
            asort($nums);
        }
        return $nums;
    }

    var_dump(ordenar([2,5,1], true));
    var_dump(ordenar([2,5,1], false));
    var_dump(ordenar([2,5,1]));
    //echo ordenar([2,5,1], true);


    //Además de lo de antes, si hay un tercer parámetro, que sea el separador:

    function saludar($nombre, $saludo = "Hola", $separador = ", "): string{
        return "$saludo$separador$nombre";
    }
    echo saludar("Juana", "Adios", "-"); //Adios-Juana
    
    //función que recibe una cantidad indeterminada de números y devuelve la suma de todos ellos
    echo "<br>";
    echo suma(1, 2, 3);
    echo "<br>";
    echo suma(1, 2, 3, 8, 32);
    echo "<br>";
    echo suma(32);
    function suma(...$nums){
        //Aquí dentro $nums es un array que contiene todos los parámetros
        return array_sum($nums);
    }
    //echo suma([1, 2, 3]); //Error: son varios parámetros, no un array


    include('f.php');
    comparaPalabras("hola", "adios");



    

    ?>
</body>

</html>