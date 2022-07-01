# proyecto_final_seis

Proyecto final de Programacion Orientada a Objetos y Taller de bases de datos.

Documentacion

Indice:


01.-Elaboracion de M.E.R para el proyecto, el cual que consta con dos tablas, las cuales son usuario y juegos, y estas constan con atributos propios de cada tabla, los mencionaremos a continuacion: la tabla usuario tiene como atributos a run como clave primaria, tiene a telefono, tiene a nombre, tiene a apellido, tiene a direccion, tiene a constrasena y finalmente tiene el atributo politica, la tabla juegos tiene como clave primaria el id, tambien tiene como atributo a juegos_resultado y a score final. Y entre estas dos tablas hay una relacion la cual es "pueden" ya que varios usuarios puedes tener varios juegos, y a resultado de esto tenemos como cardinalidad final una relacion N:N.

02.-Elaboracion del Modelo Logico para el proyecto, el cual consta con cinco tablas, las cuales son: usuario, usuario_has_juegos, juegos, historico_usuario y usuario_eliminado. Estas tablas tambien constan con sus respectivos atributos, y esos son los siguientes: la tabla usuario tiene como clave primario a el atributo run y su tipo de datos es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el nombre y su tipo de dato es varchar(25) que podra aceptar hasta 25 caracteres, y el siguiente atributo es el telefono y su tipo de dato es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el direccion y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, y el siguiente atributo es la constrasena y su tipo de dato es varchar(255) que podra aceptar hasta 255 caracteres, y el ultimo atributo es la politica y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, la tabla usuario_has_juegos tiene como atributos el usuario_run que es tipo varchar(20) que recibira 20 caracteres y tambien como atributo juegos_id que es de tipo TINYINT lo que significa que puede llegar hasta el -128 y al 127 respectivamente, mencionar que esta tabla fue creada por la relacion que existe entre la tabla usuario y juegos que es N:N, la tabla juegos tiene como clave primaria al atributo id que es de tipo TINYINT  que significa que puede llegar hasta el -128 y al 127, su otro atributo es el juegos_resultado que es de tipo varchar(60) y su ultimo atributo es score_final y es del tipo decimal(4,2) lo que significa que que es campo recibira cuatro enteros y dos decimales, la tabla historico_usuario es una tabla de respaldo la cual ocuparemos para respaldar informacion del usuario cuando el se registre, y la tabla consta con sus respectivos atributos los cuales son; run que es de tipo varchar(20) que recibira 20 caracteres, nombre es del tipo varchar(25) que recibira 25 carecteres, apellido es de tipo varchar(25) que recibira 25 caracteres, telefono es de tipo varchar(20) que recibira 20 caracteres, direccion que es de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date y que recibira una fecha y por el ultimo atributo es hora que sera de tipo time, lo mismo para la tabla de respaldo usuario_eliminado donde la ocuparemos para almacenar un respaldo cuando un usuario se de de baja en la pagina y esta tabla consta con los siguientes atributos y son; run como clave primaria y que sera de tipo varchar(20) que recibira 20 caracteres, nombre que sera de tipo varchar(25) que recibira 25 caracteres, apellido que sera de tipo varchar(25) que recibira 25 caracteres, telefono que sera de tipo varchar(20) que recibira 20 caracteres, direccion que sera de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date ya que recibira una fecha y por ultimo el atributo hora que sera de tipo time ya que recibira la hora.  

03.-Inserción de datos a la tabla juegos, ya que la tabla la ocuparemos para hacer las comparaciones con el resultado de nuestro usuario, el cual tras hacer el formulario tendra un total de puntaje, y ese puntaje lo compararemos con nuestra columna score_total de la tabla juegos, la que acontuniacion le insertamos los datos correspondientes a las tres columnas de nuestra tabla, ocuparemos un archivo previamente hecho por nostros el cual es no contiene copias en los juegos ni en los valores de score_total, y tambien mencionar que sera utf-8 y ademas sera tipo CSV, con esto podremos importanla de buena manera.

04.-Creacion de los triggers o disparadores, los cuales nos ayudan a realizar un bloque de codigo de acuerdo a una accion, puede ser una insercion de datos o una eliminacion como actualizacion, de acuerdo a esta accion se realizara como por ejemplo lo que nosotros hacemos como hacer un respaldo con una insercion de datos a la tabla historico_usuario y usuario_ eliminados, ademas mencionar que estos trigger tambien insertaran en la tabla de respaldo la fecha del sistema y la hora actual acorde al sistema operativo en el cual se de uso, estos triggers los creamos en la tabla usuario.

05.-Pagina "confing.php"

<?php

    define("DB_HOST", "localhost:3306");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "opcion6");
    define("DB_CHARSET", "utf8");

?>

En esta hoja lo que hacemos es definir como seran los parametros los cuales se reguira la conexion a la base de datos, ya que DB_HOST = "localhost:3306", DB_USER = "root", DB_PASS = "", DB_NAME = "opcion6" y DB_CHARSET = "utf8", entonces con estos datos podremos conectarnos.

06.-Pagina "db.php"

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

En esta hoja lo que hacemos es requerir los datos de config.php, y luego creamos una clase llamada Conexion, la cual tiene un atributo el cual es $conexion_db y con una funcion constructora la cual nos ayuda a conectarnos a la base de datos, con los parametros anteriormente mencionados (DB_HOST, DB_USER, DB_PASS, DB_NAME), despues hacemos una validacion con un if que si es verdadera la conexion a fallado y nos arrojara el error y ese valor retornara.

07.-Pagina "php/login.php"

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- <style>
        body{
            background:url('../cft.png')
            background-size: 100%;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <br>
            </div>
            <!-- Login -->
            <div class="col-md-12">
                <h1 style="margin: 0px 0px 10px 580px">Login</h1>
            </div>
            <div class="row">
                <div class="col">
                    <!--Parte izquierda -->
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <form action="validar.php" method="POST">
                                <div style="text-align: center;" class="col-md-12">
                                    <div class="col-md-12">    
                                        <h6>Nombre</h6>
                                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                    </div>
                                    <div>
                                        <br>
                                    </div>
                                    <div class="col-md-12">    
                                        <h6>Contraseña</h6>
                                        <input type="password" class="form-control" placeholder="Constraseña" name="constrasena">
                                    </div>
                                </div>
                                <div>
                                    <br>
                                </div>
                                <div style="text-align: center;">
                                <button class="btn btn-success">Ingresar</button> <button class="btn btn-info" formaction="registro.php">Crear cuenta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--Parte derecha -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>

Lo que hacemos en esta hora es abrir etiquetas html:5 en las cuales colocaremos como titulo de la pagina sera "Login"
luego linqeamos el link de Bostrap y tambien linqeamos el link de estilos que se arroja en la carpeta "css", luego dentro del "body" creamos nuestro formulario para registrar a nuestro usuarios que seria rut, nombre, apellido, telefono, direccion, contrasena, politicas. y estos datos van dirijido por metodo "POST" y en el action require del archivo "insetarRegistro.php" y luego al registrar estos datos se van  a la base de datos y luego de ser isertado se cumple una funcion para que se redireccione la pagina login para asi registrar el nombre y la contraseña del usuario para que nos redireccione a la pagina "landing" solo si el usuario y la contraseña es correcta. 
