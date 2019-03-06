<?php

function autocargar($nombre_clase){
    include 'controllers/'.$nombre_clase.'.php';
}

spl_autoload_register('autocargar');