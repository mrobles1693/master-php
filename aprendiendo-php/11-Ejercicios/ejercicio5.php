<?php

if(isset($_GET['x']) && isset($_GET['y'])) {
    $x = (int)$_GET['x'];
    $y = (int)$_GET['y'];

    for ($i=$x; $i < $y; $i++) {
        echo $i.'</br>';
    }
}else{
    echo "<h4>Los parametros no existen.</h4>";
}
?>