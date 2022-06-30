<?php

$nombre = $_POST['nombre'];
$constrasena = $_POST['constrasena'];

session_start();

$_SESSION['nombre'] = $nombre;

include("../database/db.php");

$conexion = new Conexion();
$consulta = "SELECT * FROM usuario WHERE nombre = '$nombre' AND constrasena = '$constrasena'";
$resultado = mysqli_query($conexion->conexion_db, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:../landing/landing.php");
}else{
    echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    include("login.php");
    
}
mysqli_free_result($resultado);
mysqli_close($conexion->conexion_db);

?>
