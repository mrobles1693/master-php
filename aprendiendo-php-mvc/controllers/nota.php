<?php

class notaController{
    public function listar(){
        //modelo
        require_once 'models/nota.php';
        
        //Logica de la accion del controlador
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola Mundo PHP MVC");
        
        //Vista
        require_once 'view/nota/listar.php';
    }
    
    public function crear(){
        
    }
    
    public function borrar(){
        
    }
}

