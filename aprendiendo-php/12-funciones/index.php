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

echo "<hr>";

//Funciones con parametros obligatorios

function calculadora($numero1, $numero2){
    echo "Suma: ".($numero1+$numero2)."</br>";
    echo "Resta: ".($numero1-$numero2)."</br>";
    echo "Multiplicación: ".($numero1*$numero2)."</br>";
    echo "División: ".($numero1/$numero2)."</br>";
    echo "<hr>";
}

calculadora(15, 3);

// Funciones con parametros opcionales

function calculadora2($numero1, $numero2, $negrita = false){
    
    if($negrita == true){
        echo "<strong>";
    }
    echo "Suma: ".($numero1+$numero2)."</br>";
    echo "Resta: ".($numero1-$numero2)."</br>";
    echo "Multiplicación: ".($numero1*$numero2)."</br>";
    echo "División: ".($numero1/$numero2)."</br>";
    echo "<hr>";
    if($negrita == true){
        echo "</strong>";
    }
}

calculadora2(20, 4, true);

// Funciones con Return

function devuelveNombre($nombre){
    return "El nombre es $nombre <hr>";
}

echo devuelveNombre('Mario Robles');

// Funciones LLamando Funciones

function suma($numero1, $numero2){
    $suma = $numero1+$numero2;
    return "Suma: ".$suma."</br>";
}

function resta($numero1, $numero2){
    $resta = $numero1-$numero2;
    return "Resta: ".$resta."</br>";
}

function multiplicacion($numero1, $numero2){
    $multiplicacion = $numero1*$numero2;
    return "Multiplicación: ".$multiplicacion."</br>";
}

function division($numero1, $numero2){
    $division = $numero1/$numero2;
    return "Division: ".$division."</br>";
}

function calculadora3($numero1, $numero2, $negrita = false){
    
    if($negrita == true){
        echo "<strong>";
    }
    echo suma($numero1, $numero2);
    echo resta($numero1, $numero2);
    echo multiplicacion($numero1, $numero2);
    echo division($numero1, $numero2);
    
    echo "<hr>";
    if($negrita == true){
        echo "</strong>";
    }
}

calculadora2(60, 4, true);

?>