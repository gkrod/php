<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$numeroMagico = 11;

//ejercicio 1 1 (asumo que a, b y c son diferentes entre sí)

function mayor($a,$b,$c) {
    $funcionesEjecutadas = 0;
    $funcionesEjecutadas++;

    if ($a > $b && $a > $c) {
        echo "$a es el mayor";
    }
        elseif ($b > $a && $b > $c) {
            echo "$b es el mayor";
        }
        else {
            echo "$c es el mayor";
        }
}

/* COMENTADO PARA RESOLVER EJERCICIO 4 Y 5 
mayor(3,7,10);
echo "<hr>";*/
 
//ejercicio 1 2
/*LO COMENTO PARA QUE PUEDA FUNCIONAR EL EJERCICIO 1 5

function tabla($a,$b) {
    $secuencia = array();
    for ($i=$a; $i <= $b; $i++)    { 
        array_push($secuencia, $i);
    }
    var_dump ($secuencia);
}

tabla(1,20);
echo "<hr>";*/

//ejercicio 1 3 y 4



function mayor1($a,$b,$c) {
    $numeroMagico = 11;
    if ($a == "") {
        $a = $numeroMagico;
    }
        elseif ($b == "") {
        $b = $numeroMagico;
    }
    elseif ($c == "") {
        $c = $numeroMagico;
    }

    if ($a > $b && $a > $c) {
        echo "$a es el mayor";
    }
        elseif ($b > $a && $b > $c) {
            echo "$b es el mayor";
        }
        else {
            echo "$c es el mayor";
        }
}

/* COMENTADO PARA RESOLVER EJERCICIO 4 Y 5
mayor1(3,7,"");
echo "<hr>";*/

//ejercicio 1 5

function tabla($a,$b) {

    $numeroMagico = 11;

    if ($a == "") {
        $a = $numeroMagico;
    } elseif ($b == "") {
        $b = $numeroMagico;
    }
    $secuencia = array();
    for ($i=$a; $i <= $b; $i++)    { 
        array_push($secuencia, $i);
    }
    var_dump ($secuencia);
}

/* COMENTADO PARA RESOLVER EJERCICIO 4 Y 5
tabla(1,"");
echo "<hr>";*/

?>
    
</body>
</html>