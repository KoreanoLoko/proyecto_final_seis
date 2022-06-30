<?php
include("../database/db.php");

class eliminarUsuario extends Conexion {
    //atributo
    public $run;

    //metodo constructor
    function __construct() {
        $this->run = $run;
    }

    function eliminarRegistro($run){ //funcion eliminarLibro
        $this->run = $run;
        $conexion = new Conexion(); //instancia de la clase conexion
        $sql = "DELETE FROM usuario WHERE run = '$this->run'";
        if (mysqli_query($conexion->conexion_db, $sql)) {
            header("location: ../php/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion->conexion_db);
        }
    }
}

$run = $_POST['run'];
$eliminar = new eliminarUsuario();
$eliminar -> eliminarRegistro($run);


?>