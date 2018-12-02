<?php

/* 
 * Tipos de Datos:
 * Entero (int / integer) = 99
 * Coma flotante / decimales (float / double) = 3.45
 * Cadenas (string) = "Hola Soy un string"
 * Boleano (bool) = true o false
 * null
 * Array (Coleccion de datos)
 * Objetos
 */

$numero = 100;
$decimal = 25.4;
$texto = "soy un texto";
$verdadero = true;
$nulo = NULL;

echo gettype($nulo).'</br>';

var_dump($numero);

//Esto es más lento
$texto = "Con comillas dobles de puede insertar la variable y se muestra así $numero";
echo $texto.'</br>';

//Esto es más rapido
$texto = 'Con comillas simples si se agrega la varibla se muestra así $numero '.$numero;
echo $texto.'</br>';

?>