<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de PHP</title>
</head>
<body>
    <h1>Ejemplos de Operaciones en PHP</h1>

    <?php
    // Ejemplos de operaciones aritméticas
    echo "<h2>Operaciones Aritméticas</h2>";
    echo "El resultado de 2 % 2 es: " . (2 % 2) . "<br>";
    echo "El resultado de 2 ** 2 es: " . (2 ** 2) . "<br>";
    echo "El resultado de 2 ** 3 es: " . (2 ** 3) . "<br>";
    echo "El resultado de 2 ** 4 es: " . (2 ** 4) . "<br>";
    echo "El resultado de 2 ** 5 es: " . (2 ** 5) . "<br>";

    // Ejemplo de array asociativo
    echo "<h2>Array Asociativo</h2>";
    $personas = [
        "Carlos" => 23,
        "Alexis" => 24,
        "Juan" => 25
    ];
    echo "<pre>";
    var_dump($personas);
    echo "</pre>";
    echo "<pre>";
    print_r($personas);
    echo "</pre>";

    // Variables y tipos de datos
    echo "<h2>Variables y Tipos de Datos</h2>";
    $entero = 10;
    $flotante = 10.5;
    $cadena = "Hola, mundo!";
    $booleano = true;

    echo "Entero: $entero<br>";
    echo "Flotante: $flotante<br>";
    echo "Cadena: $cadena<br>";
    echo "Booleano: " . ($booleano ? 'true' : 'false') . "<br>";
    ?>

</body>
</html>