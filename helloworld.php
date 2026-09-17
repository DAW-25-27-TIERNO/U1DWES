<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>

<body>
    <p>La siguiente línea está hecha con PHP:</p>
    <?php
    echo "<p>hello world!</p>";
    ?>

    <!-- Comentario HTML -->

    <p>Esta línea también:</p>
    <p>
        <?php
        echo "hola mundo";
        echo "<br>";
        print "otra cosa";
        echo ("otra más");

        // VARIABLES:
        /* Comentario de varias líneas */
        //String:
        //String name = "aasdf";
        $name = "asdf";
        $surname = 'ruiz';

        echo "<br>";
        echo $name;
        echo "<br>";
        //para concatenar string utilizamos .
        echo $name . " " . $surname;
        echo "<br>";
        echo "$name $surname";  //Sí interpreta las variables
        echo "<br>";
        echo '$name $surname';  //Así no interpreta las variables
        echo "<br>";

        //numéricas
        $age = 21;
        echo "<p>Tengo $age años</p>";
        var_dump($age);
        //Las variables pueden cambiar de tipo
        $age = 2.3;
        var_dump($age);
        $age = "23asdfasdf";
        var_dump($age);
        $age = false;
        var_dump($age);
        $age = null;
        var_dump($age);

        //CONSTANTES: dos formas: define o const
        define("IVA_GENERAL", 0.21);
        const IVA_REDUCIDO = 0.08;
        $precio = 20.3;
        echo "<p>El IVA es: " . $precio * IVA_GENERAL . "</p>";
        echo "<p>El precio final con IVA es: " . $precio + $precio * IVA_GENERAL . "</p>";
        echo "<p>El precio con IVA reducido es: " . $precio + $precio * IVA_REDUCIDO . "</p>";

        var_dump(PHP_VERSION);

        var_dump(__FILE__);
        var_dump(__LINE__);

        $price = 29.3;

        //OPERADORES (nuevos)
        $a = 5;
        $b = $a ** 10;   //5 elevado a 10. (Exponente)
        var_dump($b);

        $a = 7;
        $mod = $a % 2;  //1 (resto de la división entera)
        $a = 11;
        $mod = $a % 4;  //3

        //Operadores de incremento
        $a = 1;
        $a++; // $a = $a + 1;
        $a += 4; //$a = $a + 4;
        $a /= 9; //$a = $a / 9;


        echo "<br><br>**********<br><br><br>";
        $b = 10;
        $b + 1;
        var_dump($b);


        $b = 5;
        $b++;
        echo $b;

        $b = 5;
        $suma = $b++ + 2;
        echo "<br>La variable suma es: $suma";  //7
        echo "<br>La variable b es: $b";    //6
        $b = 5;
        $suma = $b + 2;
        $b++;

        $b = 5;
        $suma = ++$b + 2;
        echo "<br>La variable suma con el ++ antes es: $suma";  //8
        echo "<br>La variable b es: $b";    //6
        $b = 5;
        $b++;
        $suma = $b + 2;


        $a = 5;
        $b = "5";
        $bool = $a == $b;
        var_dump($bool);    // true


        $a = 5;
        $b = "5";
        $bool = $a === $b;
        var_dump($bool);    // false

        $a = 5;
        $b = "5";
        $bool = $a != $b;
        var_dump($bool);    // false

        $a = 5;
        $b = "5";
        $bool = $a !== $b;
        var_dump($bool);    // true

        $a = 5;
        $b = 5;
        $nave = $a <=> $b;  //0

        $a = 9;
        $b = 5;
        $nave = $a <=> $b;  //1

        $a = 5;
        $b = 8;
        $nave = $a <=> $b;  //-1
        ?>
    </p>
</body>

</html>