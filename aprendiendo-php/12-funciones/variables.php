<?php

/*
 * 
 * Variables Locales:
 * Son las que se definen dentro de una función y no pueden ser 
 * usadas fuera de ellas, a menos que se haga un return.
 * 
 * Variables Globales:
 * Son las que se declaran fuera de una función y estan dispinibles
 * dentro y fuera de las funciones.
 * 
 */

//Variable Global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo() {
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019; // <-- Variable Local
    echo "<h1>$year</h1>";
}

holaMundo();

function BuenasDias() {
    return "Hola Buenos días =D ";
}

function BuenasTardes() {
    return "Hola Buenas Tardes :)";
}

function BuenasNoches() {
    return "¿Te vas a dormir ya? Buenas noches...zzZZ";
}

if (isset($_GET["horario"])) {
    $horario = $_GET["horario"];
    $Funcion = "Buenas" . $horario;
    echo $Funcion();
} else {
    echo 'No se ha ingresado el horario';  
}
?>