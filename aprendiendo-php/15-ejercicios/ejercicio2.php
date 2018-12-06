<?php

$arreglo = array();

for ($i = 0; $i < 120; $i++) {
    array_push($arreglo, random_int(0, 1000));
}

foreach ($arreglo as $key => $value) {
    echo $key.' => '.$value. '</br>';
}

?>