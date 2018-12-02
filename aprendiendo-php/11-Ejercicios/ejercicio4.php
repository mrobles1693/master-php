<?php

if (isset($_GET['x']) && isset($_GET['y'])) {
    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];

    echo 'Suma: ' . ($x + $y) . '</br>';
    echo 'Resta: ' . ($x - $y) . '</br>';
    echo 'Multiplicacion: ' . ($x * $y) . '</br>';
    echo 'Division: ' . ($x / $y) . '</br>';
} else {
    echo 'No hay valores para realizar operaciones'; 
}

?>