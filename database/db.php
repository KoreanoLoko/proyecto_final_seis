<?php

require_once("config.php");

class Conexion{

    public $conexion_db;

    public function __construct(){
        $this->conexion_db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->conexion_db->connect_errno) 
            {
                echo "Fallo al conectar a MySQL: " . $this->conexion_db->connect_error;
                return;
            }
    }
    
}

?>