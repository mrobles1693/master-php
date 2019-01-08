<?php

require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);

$coche->color = 'Rosa';
$coche->setMarca('Nissan');

//var_dump($coche->getModelo());

//var_dump($coche);

echo $coche->mostrarInformacion($coche);