<?php

//Operadores Aritmeticos

$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'</br>';
echo 'Resta: '.($numero1-$numero2).'</br>';
echo 'Multiplicación: '.($numero1*$numero2).'</br>';
echo 'División: '.($numero1/$numero2).'</br>';
echo 'Resto: '.($numero1%$numero2).'</br>';

echo '--------------------------------------</br>'
    .'Operadores Incremento y Decremento </br>';

//Incremento
$x = 19;
$x++;
echo $x.'</br>';

//Decremento
$y = 19;
$y--;
echo $y.'</br>';

//Pre-Incremento
$x = 19;
++$x;
echo $x.'</br>';

//Pre-Decremento
$y = 19;
--$y;
echo $y.'</br>';

$edad = 25;
echo $edad.'<br>';

// $edad = $edad + 5;
echo ($edad+=5).'<br>';

// $edad = $edad - 5
echo ($edad-=5).'<br>';

?>