<?php

namespace clases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Mario Robles";
        $this->email = "Mario@Robles.com";
    }
}