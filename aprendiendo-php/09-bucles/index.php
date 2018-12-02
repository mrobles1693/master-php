<?php

/* Bucle WHILE
 * Estructura de control que itera o repite la 
 * serie de instrucciones tantas veces como sea 
 * necesario, en base a una condición.
 */

/* while(condicion){
 *  bloque de instruccion;
 *  otra instruccion;
 * }
 */

$numero = 0;
while ($numero <= 100) {


    if ($numero != 100) {
        echo "$numero - ";
    } else {
        echo $numero;
    }

    $numero++;
}

echo "<hr>";

if (isset($_GET['x'])) {
    $x = (int) $_GET['x'];
} else {
    $x = 1;
}

echo '<h1>TABLA DE MULTIPLICAR DEL NUMERO ' . $x . ' </h1>';
$contador = 1;
while ($contador <= 10) {
    echo "$x x $contador = " . ($x * $contador) . '</br>';
    $contador++;
}

echo "<hr>";

// DO WHILE
/* do{
 * instruccion;  
 * }while (condicion);
 */

$edad = 17;
$contador = 1;

do {
    echo "Tienes acceso al local privado $contador </br>";
    $contador++;
} while ($edad >= 18 && $contador<=10);

?>