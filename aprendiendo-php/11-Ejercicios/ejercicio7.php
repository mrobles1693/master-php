<?php

if (isset($_GET['x']) && isset($_GET['y'])) {
    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];

    if ($x < $y) {
        for ($i = $x; $i < $y; $i++) {
            if($i%2==0){
                echo "$i es par </br>";
            }else{
                echo "$i es impar </br>";
            }
        }
    } else {
        echo 'El primer número debe ser menor al segundo';
    }
} else {
    echo "<h4>Los parametros no existen.</h4>";
}
?>