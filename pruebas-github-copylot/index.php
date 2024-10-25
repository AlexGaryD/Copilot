<?php
//Escribe una función que se conecte a una API online y devuelva el resultado de la consulta en un array asociativo.
function getAPI($url){
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    return $data;
}

$result = getAPI("https://jsonplaceholder.typicode.com/posts");

//crea una función que reciba un array asociativo y lo muestre en una tabla HTML. La tabla tendra una fila con los nombres de las columnas y una fila por cada elemento del array
function showTable($data){
    echo "<table border='1'>";
    echo "<tr>";
    foreach($data[0] as $key => $value){
        echo "<th>$key</th>";
    }
    echo "</tr>";
    foreach($data as $row){
        echo "<tr>";
        foreach($row as $key => $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//"crea una función que procese el resultado de get API y si detecta que hay valores numéricos los reemplace por un texto que sea 'es numérico'"
function replaceNum($array){
    foreach($array as $key => $value){
        foreach($value as $key2 => $value2){
            if(is_numeric($value2)){
                $array[$key][$key2] = "es numérico";
            }
        }
    }
    return $array;
}

showTable(replaceNum($result));