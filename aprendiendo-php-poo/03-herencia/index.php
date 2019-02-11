<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Mario");
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("PHP, JS, etc");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);