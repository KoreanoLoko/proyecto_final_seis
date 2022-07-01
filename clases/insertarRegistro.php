<?php

include("../database/db.php");


class Registro extends Conexion{
    //atributos
    public $run;
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $constrasena;
    public $politica;

    //metodo constructor
    function __construct(){
        $this->run="";
        $this->nombre="";
        $this->apellido="";
        $this->telefono="";
        $this->direccion="";
        $this->constrasena="";
        $this->politica="";
    }

    //funcion para insertar los datos
    function insertarRegistro($run, $nombre, $apellido, $telefono, $direccion, $constrasena, $politica){
        $this->run=$run;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->direccion=$direccion;
        $this->constrasena=$constrasena;
        $this->politica=$politica;
        $conexion = new Conexion();
        $sql = sprintf("INSERT INTO usuario(run, nombre, apellido, telefono, direccion, constrasena, politica)
        VALUES ('$run','$nombre','$apellido','$telefono','$direccion','$constrasena','$politica')");
        if (mysqli_query($conexion->conexion_db, $sql)) {
            header("location: ../php/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion->conexion_db);
        }
        
    }

    
}

$run=$_POST['run'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$constrasena=$_POST['constrasena'];
$politica=$_POST['politica'];

$registro = new Registro();
$registro -> insertarRegistro($run, $nombre, $apellido, $telefono, $direccion, $constrasena, $politica);

// if (isset($_POST["registrar"])) {
//     echo "Datos de registro". "<br>";
//     echo $_POST["run"]."<br>";
//     echo $_POST["nombre"]."<br>";
//     echo $_POST["apellido"]."<br>";
//     echo $_POST["telefono"]."<br>";
//     echo $_POST["direccion"]."<br>";
//     echo $_POST["constrasena"]."<br>";

// }

?>
