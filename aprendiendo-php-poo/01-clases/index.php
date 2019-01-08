<?php
// POO - Programacion Orientada a Objetos

/* Definir una clase molde para crear más objetos de 
    tipo coche con caracteristicas parecidas
 */

class Coche{
    
    // Atributos o propiedades (Variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    // Métodos, son acciones    
    public function getColor() {
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;        
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
} // Fin definicio de la clase

$coche = new Coche();

echo $coche->getVelocidad();

$coche->setColor("Amarillo");

echo "<br/> El color del coche es: ".$coche->getColor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);