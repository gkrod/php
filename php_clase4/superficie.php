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
//ejercicio 2 1

function triangulo($base,$altura) {
    $superficie = $base * $altura / 2;
    echo "la superficie del triangulo es de $superficie";
}

triangulo(6,4);
echo "<hr>";

//ejercicio 2 2
function rectangulo ($base,$altura) {
    $superficie = $base * $altura;
    echo "la superficie del rectangulo es de $superficie";
}

rectangulo (6,4);
echo "<hr>";

// ejercicio  2 3
function cuadrado ($lado) {
    $superficie = $lado ** 2;
    echo "la superficie del cuadrado es de $superficie";
}

cuadrado(6);
echo "<hr>";
//ejercicio 2 4

function circulo($radio) {
    $superficie = pi()*$radio**2;
    echo "la superficie del círculo es de $superficie";
}
circulo(2);
echo "<hr>";

?>

</body>
</html>