<?php

/* Funciones:
 * Conjunto de instrucciones agrupadas baja un nombre determinado.
 * Se puede reutilizar invocandola tantas veces como se requiera.
 * 
 * funcion nombredelafuncion($parametro){
 *      Bloque de instrucciones;
 * }
 * 
 * nombredelafuncion($mi_parametro);
 * 
 */

function muestranombre() {
    echo "Mario Robles</br>";
    echo "Zaza Caycho</br>";
    echo "Vasco Robles</br>";
}

muestranombre();

echo "<hr>";

muestranombre();

echo "<hr>";

function tablaMultiplicar($numero) {
    echo "<h3>Tabla de Multiplicar de $numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "</br>";
    };
}

if(isset($_GET['x'])) {
    tablaMultiplicar($_GET['x']);
}else{
    echo 'No hay numero para crear tabla';
}

?>