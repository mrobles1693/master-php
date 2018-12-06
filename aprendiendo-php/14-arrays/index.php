<?php

/*
 * ARRAY
 * Coleccion o conjunto de datos/valores, bajo un unico nombre.
 * Para acceder a ellos debemos usar un indice numérico o alfanumérico 
 */

$pelicula = "Batman";

$peliculas = array("Batman", "Superman", "Aquaman");

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

echo $peliculas[0];

echo '</br>';

echo $cantantes[2];

echo '</br> <hr>';

//Para recorrer el vector

echo "<h2>Listar array</h2>";

for ($i = 0; $i < count($cantantes); $i++) {
    echo $cantantes[$i] . "</br>";
}

// Recorrer con foreach
echo "<hr><h2>Listar con Foreach</h2>";
foreach ($cantantes as $cantante) {
    echo $cantante . "</br>";
}
echo "<hr><h2>Arreglos Asociativos</h2>";
$datos = array("nombre" => "Mario", "apellido" => "Robles", "web" => "mariorobles.com");

var_dump($datos);
echo $datos["nombre"];

echo "<hr><h2>Arreglos Multidimensional</h2>";

$contactos = array(
    array('nombre' => 'Jose',
        'correo' => 'Jose@jose.com'),
    array('nombre' => 'Renato',
        'correo' => 'renato@renato.com'),
    array('nombre' => 'Juan',
        'correo' => 'juan@juan.com')
);

var_dump($contactos);

foreach ($contactos as $contacto) {
    echo $contacto['nombre'] . '</br>';
}

//Funciones Array
//Ordenar por Orden alfabetico - número e Inverso
echo "<hr><h2>Funciones de Arreglos</h2>";
$heroes = ['Iron Man', 'Hulk', 'Capitan America', 'Dr Strange'];
var_dump($heroes) . '</br>';

sort($heroes);
var_dump($heroes) . '</br>';

arsort($heroes);
var_dump($heroes) . '</br>';

//Añadir elementos
$heroes[] = 'Spiderman';
var_dump($heroes) . '</br>';
array_push($heroes, "Thor");
var_dump($heroes) . '</br>';

//Quitar Elementos
array_pop($heroes);
var_dump($heroes) . '</br>';
unset($heroes[2]);
var_dump($heroes) . '</br>';

//Aleatorio
$indice = array_rand($heroes);
echo $heroes[$indice] . '</br>';

//Voltar
$reverso = array_reverse($heroes);
var_dump($reverso).'</br>';

//Buscar en array
$indice = array_search('Iron Man',$heroes);
var_dump($indice).'</br>';

//Contar elemenos
echo count($heroes).'</br>';
echo sizeof($heroes).'</br>';
?>