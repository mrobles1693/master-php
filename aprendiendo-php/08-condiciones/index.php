<?php

/*
 * if(condicion){
 *  instruccion
 * }else{
 * otra condicion
 * }
 */

/* OPERADORES DE COMPARACION
 * == IGUAL
 * === IDENTICO
 * != DIFERENTE
 * <> DIFERENTE
 * !== NO IDENTICO
 * < MENOR QUE
 * > MAYOR QUE
 * <= MENOR IGUAL
 * >= MAYOR IGUAL
 */

$color = "verde";

if ($color == "rojo") {
    echo "El color es rojo. </br>";
} else {
    echo "El color no es rojo. </br>";
}

echo "<hr>";

$año = 2017;

if ($año == 2018) {
    echo "Es el año actual. </br>";
} else if ($año > 2018) {
    echo "Es el año posterior a 2018. </br>";
} else {
    echo "Es un año anterior a 2018.</br>";
}

/* Operadores Logicos
 * && AND Y
 * || OR O
 * ! NOT NO
 */

echo "<hr>";

$edad = 41;

if ($edad >= 18 && $edad <= 40) {
    echo "Esta dentro del rango de edad para trabajar. </br>";
} else {
    echo "No esta en edad para trabajar.</br>";
}

echo "<hr>";

$pais = "Peru";

if ($pais == "Peru" || $pais == "Argentina" || $pais == "España") {
    echo "En este pais se habla español. </br>";
} else {
    echo "Aqui se habla otro idioma.</br>";
}

// Switch
echo "<hr>";

$dia = 7;

switch ($dia) {
    case 1:
        echo 'Lunes </br>';
        break;

    case 2:
        echo 'Martes </br>';
        break;

    case 3:
        echo 'Miercoles </br>';
        break;

    case 4:
        echo 'Jueves </br>';
        break;

    case 5:
        echo 'Viernes </br>';
        break;

    case 6:
        echo 'Sabado </br>';
        break;

    case 7:
        echo 'Domingo </br>';
        break;

    default:
        echo 'No esta dentro de la semana. <br>';
        break;
}

echo '<hr>';
// GOTO
goto marca;
echo "<h3>Instruccion1</h3>";
echo "<h3>Instruccion2</h3>";
echo "<h3>Instruccion3</h3>";
echo "<h3>Instruccion4</h3>";

marca:
    echo 'Me he saltado 4 echos. </br>';

echo "Ya pase la marca. </br>"
?>