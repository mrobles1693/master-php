<?php

class Usuario {

    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Mario Robles";
        $this->email = "mario@robles.com";
        echo "Instancia de objeto creada </br>";
    }
    
    public function __toString() {
        return "El usuario: ".$this->nombre." tiene el email ".$this->email;
    }
    
    public function __destruct() {
        echo "Destruyendo objeto </br>";
    }
}

$usuario = new Usuario();

for ($i = 0; $i <= 10; $i++){
    echo $i.'</br>';
}

echo $usuario."</br>";