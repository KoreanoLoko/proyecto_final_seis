# proyecto_final_seis

Proyecto final de Programacion Orientada a Objetos y Taller de bases de datos.

Documentacion

Indice:


01.-Elaboracion de M.E.R para el proyecto, el cual que consta con dos tablas, las cuales son usuario y juegos, y estas constan con atributos propios de cada tabla, los mencionaremos a continuacion: la tabla usuario tiene como atributos a run como clave primaria, tiene a telefono, tiene a nombre, tiene a apellido, tiene a direccion, tiene a constrasena y finalmente tiene el atributo politica, la tabla juegos tiene como clave primaria el id, tambien tiene como atributo a juegos_resultado y a score final. Y entre estas dos tablas hay una relacion la cual es "pueden" ya que varios usuarios puedes tener varios juegos, y a resultado de esto tenemos como cardinalidad final una relacion N:N.

02.-Elaboracion del Modelo Logico para el proyecto, el cual consta con cinco tablas, las cuales son: usuario, usuario_has_juegos, juegos, historico_usuario y usuario_eliminado. Estas tablas tambien constan con sus respectivos atributos, y esos son los siguientes: la tabla usuario tiene como clave primario a el atributo run y su tipo de datos es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el nombre y su tipo de dato es varchar(25) que podra aceptar hasta 25 caracteres, y el siguiente atributo es el telefono y su tipo de dato es varchar(20) que podra aceptar hasta 20 caracteres, y el siguiente atributo es el direccion y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, y el siguiente atributo es la constrasena y su tipo de dato es varchar(255) que podra aceptar hasta 255 caracteres, y el ultimo atributo es la politica y su tipo de dato es varchar(50) que podra aceptar hasta 50 caracteres, la tabla usuario_has_juegos tiene como atributos el usuario_run que es tipo varchar(20) que recibira 20 caracteres y tambien como atributo juegos_id que es de tipo TINYINT lo que significa que puede llegar hasta el -128 y al 127 respectivamente, mencionar que esta tabla fue creada por la relacion que existe entre la tabla usuario y juegos que es N:N, la tabla juegos tiene como clave primaria al atributo id que es de tipo TINYINT  que significa que puede llegar hasta el -128 y al 127, su otro atributo es el juegos_resultado que es de tipo varchar(60) y su ultimo atributo es score_final y es del tipo decimal(4,2) lo que significa que que es campo recibira cuatro enteros y dos decimales, la tabla historico_usuario es una tabla de respaldo la cual ocuparemos para respaldar informacion del usuario cuando el se registre, y la tabla consta con sus respectivos atributos los cuales son; run que es de tipo varchar(20) que recibira 20 caracteres, nombre es del tipo varchar(25) que recibira 25 carecteres, apellido es de tipo varchar(25) que recibira 25 caracteres, telefono es de tipo varchar(20) que recibira 20 caracteres, direccion que es de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date y que recibira una fecha y por el ultimo atributo es hora que sera de tipo time, lo mismo para la tabla de respaldo usuario_eliminado donde la ocuparemos para almacenar un respaldo cuando un usuario se de de baja en la pagina y esta tabla consta con los siguientes atributos y son; run como clave primaria y que sera de tipo varchar(20) que recibira 20 caracteres, nombre que sera de tipo varchar(25) que recibira 25 caracteres, apellido que sera de tipo varchar(25) que recibira 25 caracteres, telefono que sera de tipo varchar(20) que recibira 20 caracteres, direccion que sera de tipo varchar(50) que recibira 50 caracteres, fecha que sera de tipo date ya que recibira una fecha y por ultimo el atributo hora que sera de tipo time ya que recibira la hora.  

03.-Inserción de datos a la tabla juegos, ya que la tabla la ocuparemos para hacer las comparaciones con el resultado de nuestro usuario, el cual tras hacer el formulario tendra un total de puntaje, y ese puntaje lo compararemos con nuestra columna score_total de la tabla juegos, la que acontuniacion le insertamos los datos correspondientes a las tres columnas de nuestra tabla, ocuparemos un archivo previamente hecho por nostros el cual es no contiene copias en los juegos ni en los valores de score_total, y tambien mencionar que sera utf-8 y ademas sera tipo CSV, con esto podremos importanla de buena manera.

04.-Creacion de los triggers o disparadores, los cuales nos ayudan a realizar un bloque de codigo de acuerdo a una accion, puede ser una insercion de datos o una eliminacion como actualizacion, de acuerdo a esta accion se realizara como por ejemplo lo que nosotros hacemos como hacer un respaldo con una insercion de datos a la tabla historico_usuario y usuario_ eliminados, ademas mencionar que estos trigger tambien insertaran en la tabla de respaldo la fecha del sistema y la hora actual acorde al sistema operativo en el cual se de uso, estos triggers los creamos en la tabla usuario.

05.-Pagina "confing.php"

En esta hoja lo que hacemos es definir como seran los parametros los cuales se reguira la conexion a la base de datos, ya que DB_HOST = "localhost:3306", DB_USER = "root", DB_PASS = "", DB_NAME = "opcion6" y DB_CHARSET = "utf8", entonces con estos datos podremos conectarnos.

06.-Pagina "db.php"

En esta hoja lo que hacemos es requerir los datos de config.php, y luego creamos una clase llamada Conexion, la cual tiene un atributo el cual es $conexion_db y con una funcion constructora la cual nos ayuda a conectarnos a la base de datos, con los parametros anteriormente mencionados (DB_HOST, DB_USER, DB_PASS, DB_NAME), despues hacemos una validacion con un if que si es verdadera la conexion a fallado y nos arrojara el error y ese valor retornara.

07.-Pagina "php/login.php"

Abrimos las etiquetas html:5, las cuales dentro de estas posicionamos nuestro login para que el usuario pueda ingresar, tambien agregamos Boostrap para nuestro diseño de la pagina del login, en este apartado tenemos unas etiquetas <form> las cuales nos sirven para mandar dos etiquetas <input> que llevaran la informacion ingresada por el usuario y asi poder validarla en la otra hoja "validar.php", tambien mencionar que esta hoja incluimos nuestra hoja de css para añadirle estilo a la pagina Web.

08.-Pagina "php/validar.php"

En esta hoja lo que hacemos es recepcionar en las variables $nombre y $constrasena las etiquetas <input> que nuestro usuario nos mando, y asi con el metodo se PHP session_start() podemos validar esta sesion, acontinuacion le decimos a la variable $_SESSION['nombre'] = $nombre y asi decirle que iniciara session con el nombre, despues de eso incluimos nuestra hoja de la base de dato, despues instanciamos la clase Conexion() y hacemos la consulta respectiva de que si en nuestra tabla usuario esta el nombre y la constrasena que anteriormente recepcionamos, y con el metodo mysqli_query() hacemos la consulta y ese metodo recibe dos parametros que son la conexion y la consulta, y esa consulta se guarda en la variable $resultado y esa variable la recorremos con el metodo mysqli_num_rows y eso lo guardamos en la variable $filas y decimos que si el resultado de la variable $fila es verdadero me mandaras por medio de header a landing de nuestra pagina, pero si lo que entrega es falso le mostramos una alerta y lo devolvemos al login, ocupamos el metodo myqli_free_result() para liberar el resultado y terminamos cerrando la conexion.

09.-Pagina "php/registro.php"

En esta pagina lo que hacemos es que si el usuario no tiene una cuenta asociada a nuestra base de datos, es crearle una mediante un formulario en html:5 y que este formulario tiene todos los datos que nosotros necesitamos para ingresarlos en nuestra tabla usuario, osea todos sus atributos, ademas mencionar que en estos campos registrar sus datos es obligatorio ya que ocupamos un required un atributo el cual nos permite que el usuario tenga que llenar el campo si o si y para finalizar debe aprimir el boton mandara toda la informacion del formulario a la pagina insertarRegistro.php y ya en esa hoja trabajarla.

10.-Pagina "clases/insertarRegistro.php"

Lo que hacemos en esta pagina es incluir nuestra base de datos, y asi poder crear nuestra clase Registro() que sera una sub clase de nuestra clase padre Conexion() esta clase obtendra los campos que fueron enviamos de la pagina registro.php, para asi recepcionarlos y por el metodo __construct() poder trabajarlos, a continuacion creamos una funcion dentro de nuestra clase Registro la cual se llamara insertarRegistro() y que recibira los atributos que previamente capturamos y podra mediante la instanciacion de la clase Conexion poder realizar la consulta para insertar los datos que el usuario nos proporciono mediante el formulario ingresarlos a la tabla usuario y asi poder crearle una cuenta, luego que esta consulta sea verdadera nos volvera al login o en su defecto nos mostrara un error


