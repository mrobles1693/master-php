<?php

class Persona {

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);
        if ($prefix_metodo == "get") {
            $nombre_metodo = substr(strtolower($name), 3);
            if (!isset($this->$nombre_metodo)) {
                return "La variable que busca no existe";
            }
            //$this->nombre
            return $this->$nombre_metodo;
        } else {
            return "No existe este metodo";
        }
    }

}

$persona = new Persona("Paco", 66, "Madrid");
echo $persona->getNombre()."</br>";
echo $persona->getEdad()."</br>";
echo $persona->getCiudad()."</br>";
echo $persona->getEmail()."</br>";
