<?php

$numeros = [54, 12, 25, 17, 15, 96, 5, 42];

echo "<h2>Recorrer Vector</h2>";
foreach ($numeros as $numero) {
    echo $numero . '</br>';
}

echo "<hr><h2>Recorrer Vector Ordenado</h2>";
sort($numeros);
foreach ($numeros as $numero) {
    echo $numero . '</br>';
}

echo "<hr><h2>Cantidad de elementos</h2>";
echo count($numeros) . '</br>';

echo "<hr><h2>Buscar Elemento</h2>";
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $resultado = array_search($x, $numeros);
    if(!empty($resultado)) {
        echo var_dump($resultado);
    } else {
        echo 'No se encontro la busqueda. </br>';
    }
} else {
    echo "No ha ingresado un número para la busqueda";
}
?>