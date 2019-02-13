<?php

class Ususario {

    public $nombre;
    public $email;
    
    public function __construct() {
        echo "Instancia de objeto creada </br>";
    }
    
    public function __destruct() {
        echo "Destruyendo objeto </br>";
    }
}

$usuario = new Ususario();

for ($i = 0; $i <= 10; $i++){
    echo $i.'</br>';
}