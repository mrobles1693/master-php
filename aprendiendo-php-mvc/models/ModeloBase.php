<?php

require_once 'config/database.php';

class ModeloBase{
    public $db;
    
    public function conseguirTodos() {
        return "Conseguir todas";
    }
    
    public function __construct() {
        $this->db = database::conectar();       
    }
}