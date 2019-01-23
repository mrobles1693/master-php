<?php

// HERENCIA:
// La posibilidad de compartir atributos y métodos entre clases

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar(){
        return "Estoy hablando";
    }
    
    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{
    
    public $lenguajes;
    
    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }


    public function programar() {
        return "Soy programador";
    }
    
    public function repararOrdenador() {
        return "Reparar ordenadores";
    }
    
    public function hacerOfimatica(){
        return "Estoy escribiendo en word";
    }
}