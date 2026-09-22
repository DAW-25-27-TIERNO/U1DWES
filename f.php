<?php
//Biblioteca de funciones

//


//comparaPalabras a y b. Si la longitud de a > b, devuelve un número positivo,
//                  si a<b, devuelve un número negativo, 
//                  si son iguales devuelve 0
//comparaPalabras("hola", "adios"); //negativo
//comparaPalabras("adios", "hola"); //positivo
//comparaPalabras("adios", "holas"); //0
function comparaPalabras($a, $b)
{
    return strlen($a) - strlen($b);
}


//cuentaLetras: recibe la palabra a y la letra x. Cuenta cuántas letras hay en esa palabra.
// Si no se indica la letra, devuelve el número de aes
//Ej: cuentaLetras("hola que tal", "l");    //2 (hay 2 l)
//Ej: cuentaLetras("hola que tal");    //2 (hay 2 a)

function cuentaLetras($palabra, $letra = "a")
{
    $cont = 0;
    for ($i = 0; $i < strlen($palabra); $i++) {
        if ($palabra[$i] == $letra) {
            $cont++;
        }
    }
    return $cont;
}


function aumenta(&$a)
{
    $a++;
    return $a;
}







