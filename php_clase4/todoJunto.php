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



include 'funciones.php';
$funcionesEjecutadas = 0;
function mayorsuperficie($a,$b,$c) {
    $funcionesEjecutadas++;
    echo "la superficie del círculo de radio"; 
    mayor($a,$b,$c);
}
mayorsuperficie(6,5,3);
echo "Se ejecutaron $funcionesEjecutadas funciones";
echo "<hr>"; 

// ejercicio 7

$string = "Me encanta php, a mi también me encanta php!";

$pos = strpos($string,"php");
echo "la palabra php está ubicada en la posición $pos del string";
echo "<hr>";

//ejercicio 8
//1
function saludo($string){
    echo "Hola $string";
}

saludo("Mundo");
echo "<hr>";
//2

echo "Ingrese su nombre:";
$nombre = "Juan";
function login($nombre){
    echo "Ingrese su nombre:";
    /* que accion realizo para tomar el nombre que ingresa?*/
    
}
echo "<hr>";

echo "Bienvenido $nombre";

echo "Ingrese su edad:";
$edad = 35;




?>
    
</body>
</html>