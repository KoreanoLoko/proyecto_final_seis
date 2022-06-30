<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de eliminar usuario</title>
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
                <h3>Estas seguro??? &#128578; &#128578; &#128578;</h3>
                    <div class="card"> 
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <form action="../clases/eliminarUsuario.php" method="POST">
                                        <h6>Para continuar ingresa tu rut</h6>
                                        <input type="text" class="form-control" name="run">
                                        <button class="btn btn-success" style="margin: 5px 0px 10px 0px">Acepto mi da dá de baja</button>
                                    </form>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-danger" onclick="location.href='../landing/landing.php'">Volver al Landing</button>
                                </div>
                            </div>
                            
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
</html>