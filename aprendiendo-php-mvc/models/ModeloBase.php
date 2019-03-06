<?php

require_once 'config/database.php';

class ModeloBase{
    public $db;
    
    public function conseguirTodos($tabla) {
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY DESC");
        return $query;
    }
    
    public function __construct() {
        $this->db = database::conectar();       
    }
}