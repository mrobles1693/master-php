<?php

require_once '../vendor/autoload.php';

$frutas = array("manzanas", "naranjas", "sandias");

\FB::log($frutas);

$nombres = array("Jefe" => "Jose", "soporte" => "Mario");

\FB::log($nombres);

echo "Hola Mundo!! ". $nombres["soporte"];

\FB::log("muestrame en consola");