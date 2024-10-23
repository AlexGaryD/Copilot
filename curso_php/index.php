<?php
echo "hola mundo <br>" ; 
$nombre = "Alexis"; 
$apellido = "Vera";
echo "Mi nombre es $nombre $apellido <br>";
echo "El resultado de 2+2 es: " . (2+2) . "<br>";
echo "El resultado de 2*2 es: " . (2*2) . "<br>";
echo "El resultado de 2/2 es: " . (2/2) . "<br>";
echo "El resultado de 2-2 es: " . (2-2) . "<br>";
echo "El resultado de 2%2 es: " . (2%2) . "<br>";
echo "El resultado de 2**2 es: " . (2**2) . "<br>";
echo "El resultado de 2**3 es: " . (2**3) . "<br>";
echo "El resultado de 2**4 es: " . (2**4) . "<br>";
echo "El resultado de 2**5 es: " . (2**5) . "<br>";
$personas = [
    "Carlos" => 23,
    "Alexis" => 24,
    "Juan" => 25
];
var_dump($personas);
echo "<br>";
print_r($personas);