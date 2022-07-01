# proyecto_final_seis

Proyecto final de Programacion Orientada a Objetos y Taller de bases de datos.

Documentacion

Indice:

- 01.- Consultas ocupadas dentro del sistema
- 02.- Elaboracion de M.E.R para el proyecto
- 03.- Elaboracion del Modelo Logico para el proyecto
- 04.- Inserción de datos a la tabla juegos
- 05.- Creacion de los triggers o disparadores
- 06.- Pagina "confing.php"
- 07.- Pagina "db.php"
- 08.- Pagina "php/login.php"
- 09.- Pagina "php/validar.php"
- 10.- Pagina "php/registro.php"
- 11.- Pagina "clases/insertarRegistro.php"
- 12.- Pagina "landing/landing.php"
- 13.- Pagina "preguntas/formulario.php"
- 14.- Pagina "juego/verJuego.php"
- 15.- Pagina "preguntas/validacionEliminar.php"
- 16.- Pagina "clases/eliminarUsuario"

01.- Consultas ocupadas dentro del sistema:
  - $sql = "DELETE FROM usuario WHERE run = '$this->run'";
  - $sql = sprintf("INSERT INTO usuario(run, nombre, apellido, telefono, direccion, constrasena, politica)
        VALUES ('$run','$nombre','$apellido','$telefono','$direccion','$constrasena','$politica')");
  - $consulta = "SELECT juegos_resultado FROM juegos
                            WHERE score_final=$totalScore";
  - $consulta = "SELECT * FROM usuario WHERE nombre = '$nombre' AND constrasena = '$constrasena'";
  - delimiter //
    create trigger eliminar_usuario after delete on usuario
    for each row
    begin 
      insert into usuario_eliminado (run, nombre, apellido, telefono, direccion, fecha, hora)
        values (old.run, old.nombre, old.apellido, old.telefono, old.direccion, curdate(), curtime());
    end//
    delimiter ;
  - delimiter //
    create trigger insertar_usuario before insert on usuario
    for each row
    begin 
      insert into historico_usuario (run, nombre, apellido, telefono, direccion, fecha, hora)
        values (new.run, new.nombre, new.apellido, new.telefono, new.direccion, curdate(), curtime());
    end//
    delimiter ;

02.-Elaboracion de M.E.R para el proyecto, el cual que consta con dos tablas, las cuales son usuario y juegos, y estas constan con atributos propios de cada tabla, los mencionaremos a continuacion: la tabla usuario tiene como atributos a run como clave primaria, tiene a telefono, tiene a nombre, tiene a apellido, tiene a direccion, tiene a constrasena y finalmente tiene el atributo politica, la tabla juegos tiene como clave primaria el id, tambien tiene como atributo a juegos_resultado y a score final. Y entre estas dos tablas hay una relacion la cual es "pueden" ya que varios usuarios puedes tener varios juegos, y a resultado de esto tenemos como cardinalidad final una relacion N:N.

03.-Elaboracion del Modelo Logico para el proyecto, el cual consta con cinco tablas, las cuales son: usuario, usuario_has_juegos, juegos, historico_usuario y usuario_eliminado. Estas tablas tambien constan con sus respectivos atributos, y esos son los siguientes: la tabla usuario tiene como clave primario a el atributo run y su tipo de datos es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el nombre y su tipo de dato es varchar(25) que podra aceptar hasta 25 caracteres, y el siguiente atributo es el telefono y su tipo de dato es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el direccion y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, y el siguiente atributo es la constrasena y su tipo de dato es varchar(255) que podra aceptar hasta 255 caracteres, y el ultimo atributo es la politica y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, la tabla usuario_has_juegos tiene como atributos el usuario_run que es tipo varchar(20) que recibira 20 caracteres y tambien como atributo juegos_id que es de tipo TINYINT lo que significa que puede llegar hasta el -128 y al 127 respectivamente, mencionar que esta tabla fue creada por la relacion que existe entre la tabla usuario y juegos que es N:N, la tabla juegos tiene como clave primaria al atributo id que es de tipo TINYINT  que significa que puede llegar hasta el -128 y al 127, su otro atributo es el juegos_resultado que es de tipo varchar(60) y su ultimo atributo es score_final y es del tipo decimal(4,2) lo que significa que que es campo recibira cuatro enteros y dos decimales, la tabla historico_usuario es una tabla de respaldo la cual ocuparemos para respaldar informacion del usuario cuando el se registre, y la tabla consta con sus respectivos atributos los cuales son; run que es de tipo varchar(20) que recibira 20 caracteres, nombre es del tipo varchar(25) que recibira 25 carecteres, apellido es de tipo varchar(25) que recibira 25 caracteres, telefono es de tipo varchar(20) que recibira 20 caracteres, direccion que es de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date y que recibira una fecha y por el ultimo atributo es hora que sera de tipo time, lo mismo para la tabla de respaldo usuario_eliminado donde la ocuparemos para almacenar un respaldo cuando un usuario se de de baja en la pagina y esta tabla consta con los siguientes atributos y son; run como clave primaria y que sera de tipo varchar(20) que recibira 20 caracteres, nombre que sera de tipo varchar(25) que recibira 25 caracteres, apellido que sera de tipo varchar(25) que recibira 25 caracteres, telefono que sera de tipo varchar(20) que recibira 20 caracteres, direccion que sera de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date ya que recibira una fecha y por ultimo el atributo hora que sera de tipo time ya que recibira la hora.  

04.-Inserción de datos a la tabla juegos, ya que la tabla la ocuparemos para hacer las comparaciones con el resultado de nuestro usuario, el cual tras hacer el formulario tendra un total de puntaje, y ese puntaje lo compararemos con nuestra columna score_total de la tabla juegos, la que acontuniacion le insertamos los datos correspondientes a las tres columnas de nuestra tabla, ocuparemos un archivo previamente hecho por nostros el cual es no contiene copias en los juegos ni en los valores de score_total, y tambien mencionar que sera utf-8 y ademas sera tipo CSV, con esto podremos importanla de buena manera.

05.-Creacion de los triggers o disparadores, los cuales nos ayudan a realizar un bloque de codigo de acuerdo a una accion, puede ser una insercion de datos o una eliminacion como actualizacion, de acuerdo a esta accion se realizara como por ejemplo lo que nosotros hacemos como hacer un respaldo con una insercion de datos a la tabla historico_usuario y usuario_ eliminados, ademas mencionar que estos trigger tambien insertaran en la tabla de respaldo la fecha del sistema y la hora actual acorde al sistema operativo en el cual se de uso, estos triggers los creamos en la tabla usuario.

06.-Pagina "confing.php"

En esta hoja lo que hacemos es definir como seran los parametros los cuales se reguira la conexion a la base de datos, ya que DB_HOST = "localhost:3306", DB_USER = "root", DB_PASS = "", DB_NAME = "opcion6" y DB_CHARSET = "utf8", entonces con estos datos podremos conectarnos.

07.-Pagina "db.php"

En esta hoja lo que hacemos es requerir los datos de config.php, y luego creamos una clase llamada Conexion, la cual tiene un atributo el cual es $conexion_db y con una funcion constructora la cual nos ayuda a conectarnos a la base de datos, con los parametros anteriormente mencionados (DB_HOST, DB_USER, DB_PASS, DB_NAME), despues hacemos una validacion con un if que si es verdadera la conexion a fallado y nos arrojara el error y ese valor retornara.

08.-Pagina "php/login.php"

Abrimos las etiquetas html:5, las cuales dentro de estas posicionamos nuestro login para que el usuario pueda ingresar, tambien agregamos Boostrap para nuestro diseño de la pagina del login, en este apartado tenemos unas etiquetas <form> las cuales nos sirven para mandar dos etiquetas <input> que llevaran la informacion ingresada por el usuario y asi poder validarla en la otra hoja "validar.php", tambien mencionar que esta hoja incluimos nuestra hoja de css para añadirle estilo a la pagina Web.

09.-Pagina "php/validar.php"

En esta hoja lo que hacemos es recepcionar en las variables $nombre y $constrasena las etiquetas <input> que nuestro usuario nos mando, y asi con el metodo se PHP session_start() podemos validar esta sesion, acontinuacion le decimos a la variable $_SESSION['nombre'] = $nombre y asi decirle que iniciara session con el nombre, despues de eso incluimos nuestra hoja de la base de dato, despues instanciamos la clase Conexion() y hacemos la consulta respectiva de que si en nuestra tabla usuario esta el nombre y la constrasena que anteriormente recepcionamos, y con el metodo mysqli_query() hacemos la consulta y ese metodo recibe dos parametros que son la conexion y la consulta, y esa consulta se guarda en la variable $resultado y esa variable la recorremos con el metodo mysqli_num_rows y eso lo guardamos en la variable $filas y decimos que si el resultado de la variable $fila es verdadero me mandaras por medio de header a landing de nuestra pagina, pero si lo que entrega es falso le mostramos una alerta y lo devolvemos al login, ocupamos el metodo myqli_free_result() para liberar el resultado y terminamos cerrando la conexion.

10.-Pagina "php/registro.php"

En esta pagina lo que hacemos es que si el usuario no tiene una cuenta asociada a nuestra base de datos, es crearle una mediante un formulario en html:5 y que este formulario tiene todos los datos que nosotros necesitamos para ingresarlos en nuestra tabla usuario, osea todos sus atributos, ademas mencionar que en estos campos registrar sus datos es obligatorio ya que ocupamos un required un atributo el cual nos permite que el usuario tenga que llenar el campo si o si y para finalizar debe aprimir el boton mandara toda la informacion del formulario a la pagina insertarRegistro.php y ya en esa hoja trabajarla.

11.-Pagina "clases/insertarRegistro.php"

Lo que hacemos en esta pagina es incluir nuestra base de datos, y asi poder crear nuestra clase Registro() que sera una sub clase de nuestra clase padre Conexion() esta clase obtendra los campos que fueron enviamos de la pagina registro.php, para asi recepcionarlos y por el metodo __construct() poder trabajarlos, a continuacion creamos una funcion dentro de nuestra clase Registro la cual se llamara insertarRegistro() y que recibira los atributos que previamente capturamos y podra mediante la instanciacion de la clase Conexion poder realizar la consulta para insertar los datos que el usuario nos proporciono mediante el formulario ingresarlos a la tabla usuario y asi poder crearle una cuenta, luego que esta consulta sea verdadera nos volvera al login o en su defecto nos mostrara un error, luego afuera de la clase recepcionamos e instanciamos la clase Registro() y llamamos a la funcion y le pasamos los parametros.

12.-Pagina "landing/landing.php"

En esta pagina lo que hacemos es mostrarle al usuario las diferentes opciones que el tiene como por ejemplo tiene la opcion dar de baja su cuenta, cerrar sesion y realizar las preguntas para ver su juego, para entrar mas a las entrañas de la pagina el botton Preguntas nos lleva a la pagina formulario.php, el botton Cerrar sesion nos llevara de nuevo al login.php y el botton para dar de baja nuestra cuenta nos enviara a validacionEliminar.php y mencionar que en esta hoja tambien implementamos Boostrap y nuestra hoja de estilo de css.
  
13.-Pagina "preguntas/formulario.php"
  
En esta hoja lo que hacemos es presentarle un formulario a nuestro usuario el cual dependiendo de lo que escoga le va a mostrar un juego, mencionar que esta hoja es basicamente con html:5, y lo que ocupamos mas fueron etiquetas <select> y a todas esas opciones le otorgamos un valor y luego esos valores se los enviamos mediante _POST a nuesta hoja verJuego.php y asi poder mostrar el juego, tambien cabe mencionar que igual incluimos Boostrap a esta pagina y nuestra hoja de css.
  
14.-Pagina "juego/verJuego.php"
 
En esta pagina lo que hacemos es mediante enveber codigo PHP con HTML:5 lo gramos hacer la suma de las variables que mandamos aca mediante metodo _POST de nuestro formulario.php y asi hacer nuestra respectiva conexion y nuestra consulta, y por medio de los metodos mysqli_query y msqli_fetch_assoc podemos mostrar el resultado que eso es el juego, y por ultimo cerrar la conexion, cabe mencionar que aparte de mostrarle el juego con PHP con html logramos tambien colocar un botton el cual le ayuda a volver al landing y hacer de nuevo el formulario, ademas que ocupamos tambien Boostrap y nuestra hoja de css..
  
15.-Pagina "preguntas/validacionEliminar.php"
  
En esta pagina lo que hacemos es despues de querar de dar de baja la cuenta preguntarle al usuario que si de verdad quiere dar de baja su cuenta, y para eso el tiene que confirmar con su run, y ese run mediante un formulario y un metodo _POST lo enviamos a la pagina eliminarUsuario.php, tambien mencionar que igual le otorgamos al usuario otro botton el cual le servira por si se arrepintio y asi poder volver al landing, decir tambien que agregamos Boostrap y nuesta hoja de estilo css.
  
16.-Pagina "clases/eliminarUsuario"
  
Lo que hacemos en esta pagina es incluir obviamente nuestra base de datos para poder lograr la conexion exitosa, empezamos creando la clase eliminarUsuario que es una sub clase de la clase padre Conexion() la cual le pasamos la variable anteriormente colocada por el usuario para poder eliminar su cuenta, o sea su run practicamente, hacemos nuestro metodo constructor y creamos nuestra funcion para eliminar el usuario respectivamente, a esta funcion le pasamos el parametro, y luego pasamos a instanciar la clase Conexion() la consulta correspondiente, y lo que queremos decir con esta consulta es que si el run que le pasamos es igual al que esta dentro de nuestra tabla usuario me lo eliminas y si esta consulta esta en lo correcto me mandara al login.php y en esta punto el usuario ya no podra entrar con la cuenta que tenia anteriormente, y si la consulta esta mala nos mostrara un error, afuera de la clase recepcionamos el valor, instanciamos la clase eliminarUsuario() y tambien llamamos a la funcion eliminarRegistro() y dentro el parametro $run.

