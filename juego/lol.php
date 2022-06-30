

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row container">
            <div class="col-md-12">
                <br>
            </div>
            <div class="col-md-12" style="margin: 0px 100px 0px px">
                <!-- <h1>Este es tu juego!!!</h1> -->
            </div>
            <div class="row">
                <div class="col">
                    <!--Parte izquierda -->
                </div>
                <div class="col-sm" style="margin:10px 0px 0px 140px">
                <h3>Este es tu juego!!! &#129304; &#129304; &#129304;</h3>
                    <div class="card">
                        
                        <div class="card-body" style="margin:0px 0px 0px 80px">
                        <?php
                        include ("../database/db.php");
                        if (isset($_POST["guardar"])){
                            $valorCategoria = $_POST["valorCategoria"];
                            $valorClase = $_POST["valorClase"];
                            $valorPreferencia = $_POST["valorPreferencia"];
                            $valorPericia = $_POST["valorPericia"];
                            $valorHoras = $_POST["valorHoras"];
                            $valorMeses = $_POST["valorMeses"];
                            $valorConocimiento = $_POST["valorConocimiento"];
                            // echo "Esto es el categoria: ".$valorCategoria. "<br>";
                            // echo "Esto es el clase: ".$valorClase. "<br>";
                            // echo "Esto es el pericia: ".$valorPericia. "<br>";
                            // echo "Esto es el preferencia: ".$valorPreferencia. "<br>";
                            // echo "Esto es el horas: ".$valorHoras. "<br>";
                            // echo "Esto es el meses: ".$valorMeses. "<br>";
                            // echo "Esto es el conocimiento: ".$valorConocimiento. "<br>";
                            // echo "Datos recepcionados". "<br>";
                            $categoria = $_POST["valorCategoria"];
                            settype($categoria, "float");
                            $clase = $_POST["valorClase"];
                            settype($clase, "float");
                            $preferencia = $_POST["valorPreferencia"];
                            settype($preferencia, "float");
                            $pericia = $_POST["valorPericia"];
                            settype($pericia, "float");
                            $horas = $_POST["valorHoras"];
                            settype($horas, "float");
                            $meses = $_POST["valorMeses"];
                            settype($meses, "float");
                            $conocimiento = $_POST["valorConocimiento"];
                            settype($conocimiento, "float");
                            $totalScore = $categoria + $clase + $preferencia + $pericia + $horas + $meses + $conocimiento;
                            //echo "Total: " . $totalScore. "<br>";



                        // public function mostrarJuego(){
                            $conexion = new Conexion();
                            $consulta = "SELECT juegos_resultado FROM juegos
                            WHERE score_final=$totalScore";
                            $resultado = mysqli_query($conexion->conexion_db,$consulta);
                            while($fila =mysqli_fetch_assoc($resultado)){
                                echo "".$fila["juegos_resultado"];
                            }
                            mysqli_close($conexion->conexion_db);

                        }
                        ?>
                        <button class="btn btn-danger" onclick="location.href='../landing/landing.php'" style="margin: 10px 0px 0px 0px">Volver al Landing</button>

                        <!-- Optional JavaScript; choose one of the two! -->

                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                        <!-- Option 2: Separate Popper and Bootstrap JS -->
                        <!--
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                        -->
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


