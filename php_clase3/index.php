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
//ejercicio 1
for ($i=0; $i <= 10; $i++) { 
    $tabla2 = $i * 2;
    echo $tabla2."<br>";
}
echo "<hr>";
//ejercicio 2

$contador = 1;

while ($contador <= 5) {
    $doble = $contador * 2;
    echo $doble."<br>";
    $contador++;
    
}
echo "<hr>";
//ejercicio 3
$contartiros = 0;
do {
    $caraoseca = rand(0,1);
    $contartiros++;
} while ($caraoseca != 1);

echo "cantidad de tiros hasta salir cara ".$contartiros;
echo "<hr>";

//ejercicio 4

$nombres = array("Juan","Agustín","Luciano","Manuel","Guillermo");

for ($i=0; $i < 5; $i++) { 
    echo $nombres[$i]."<br>";
}
echo "<hr>";

$i = 0;
while ($i < 5) {
    echo $nombres[$i]."<br>";
    $i++;
}
echo "<hr>";
$i = 0;
do {
    echo $nombres[$i]."<br>";
    $i++;
} while ($i < 5);

echo "<hr>";

foreach ($nombres as $value) {
    echo "$value <br>";
}
echo "<hr>";

//ejercicio 5


$numeros = array();
for ($i=0; $i < 10 ; $i++) { 
    $valorarray = rand(1,10);
    array_push ($numeros,$valorarray); 
}
foreach ($numeros as $value) {
    echo $value."<br>";
}

for ($i=0; $i < 10 ; $i++) { 
    if ($numeros[$i] == 5) {
        echo "Se encontró un 5!";
        break;
    }
}
echo "<hr>";

//ejercicio 6

$i = 0;
foreach (range  ('a','o') as $letra) {
 echo "En la posición $i se encuentra el valor $letra";
 $i++;
 echo "<br>";
}
echo "<hr>";

//ejercicio 7

$mascota = array("animal"=>"perro","edad"=>"5","altura"=>"0,70","nombre"=>"Loky");

foreach ($mascota as $key => $value) {
    echo "$key: $value <br>";
}
echo "<hr>";
//ejercicio 8

$ceu = [

    "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],

    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

    "Francia" => ["Paris", "Nantes", "Lyon"],

    "Italia" => ["Roma", "Milan", "Venecia"],

    "Alemania" => ["Munich", "Berlin", "Frankfurt"]

];
foreach ($ceu as $key => $value) {
    echo "La capital de $key es $value[0] <br>";
}

echo "<hr>";

//ejercicio 14

foreach ($ceu as $key => $value) {

    echo "Las ciudades de $key son: <br> ";

    for ($i=0; $i < count($value); $i++) { 
        echo "<ul>
                 <li> 
                    ".$value[$i]." 
                </li>
            </ul>";
}
}
echo "<hr>";

//ejercicio 15

$esAmericano=[];
$ceu1 = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", $esAmericano = 1],

    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", $esAmericano = 1],

    "Colombia" => ["Cartagena", "Bogota", "Barranquilla", $esAmericano = 1],

    "Francia" => ["Paris", "Nantes", "Lyon",$esAmericano = 0],

    "Italia" => ["Roma", "Milan", "Venecia",$esAmericano = 0],

    "Alemania" => ["Munich", "Berlin", "Frankfurt", $esAmericano = 0]

];
foreach ($ceu1 as $key => $value) {
    if ($esAmericano == true) {

    echo "Las ciudades de $key son: <br> ";

    for ($i=0; $i < count($value); $i++) { 
        echo "<ul>
                 <li> 
                    ".$value[$i]." 
                </li>
            </ul>";
}
}
}
echo "<hr>";

?>
</body>
</html>