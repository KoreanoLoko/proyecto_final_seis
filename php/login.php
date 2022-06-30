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