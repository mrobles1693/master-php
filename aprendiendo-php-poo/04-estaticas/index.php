<?php

require_once 'configuracion.php';

Configuracion::setColor("azul");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color.'</br>';
echo Configuracion::$entorno.'</br>';
echo Configuracion::$newsletter.'</br>';

$configuracion = new Configuracion();
echo $configuracion::$color.'</br>';
$configuracion::$color = "rojo";
echo $configuracion::$color.'</br>';
var_dump($configuracion);