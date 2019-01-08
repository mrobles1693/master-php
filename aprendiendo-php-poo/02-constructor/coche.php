<?php

class Coche {

    // Atributos o propiedades (Variables)
    // PUBLIC:
    // Se puede acceder a ellos desde cualquier lugar, dentro de la clase actual
    // dentro de las clases que hereden esta clase o fuera de la clase
    public $color;
    public $velocidad;
    public $caballaje;
    public $plazas;
    // PROTECTED:
    // Podemos acceder desde la clase que los define y desde la clase
    // que los hereden
    protected $marca;
    // PRIVATE:
    // Solo se puede acceder en la clase que lo define.
    private $modelo;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    // Métodos, son acciones    
    public function getColor() {
        // Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function mostrarInformacion(Coche $miObjeto) {
        if (is_object($miObjeto)) {
            $informacion = "<h1>Informacion del coche: </h1>";
            $informacion .= "<br/>Color: " . $miObjeto->color;
            $informacion .= "<br/>Modelo: " . $miObjeto->modelo;
            $informacion .= "<br/>Velocidad: " . $miObjeto->velocidad;
        } else {
            $informacion = "Tu dato es $miObjeto";
        }
        return $informacion;
    }

}
