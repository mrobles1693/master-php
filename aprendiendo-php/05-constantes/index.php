<?php

// Constantes
// Es un contenedor de información que no puede variar

define('nombre', 'Mario Robles');
define('web', 'mariorobles.pe');
define('edad', 25);

echo nombre.'</br>';
echo web.'</br>';
echo edad.'</br>';

// Variable
$web = "mariorobles.pe/cursos";
echo $web.'</br>';

// Constantes predefinidas

echo '---------------------------------------<br>';
echo PHP_OS.'</br>';
echo PHP_VERSION.'</br>';
echo PHP_EXTENSION_DIR.'</br>';
echo __LINE__.'</br>';

function holaMundo(){
    echo __FUNCTION__.'</br>';
}

holaMundo();

?>