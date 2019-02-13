<?php

trait Utilidades {
    
    public function mostrarNombre() {
        echo "Nombre: ".$this->nombre."</br>";
    }

}

class Coche {

    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {

    public $nombre;
    public $apellidos;
    
    use Utilidades;

}

class VideoJuego {

    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Tertarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Mario";
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre =  "GTA 4";
$videoJuego->mostrarNombre();