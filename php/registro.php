<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
            <!-- formulario -->
            <div class="col-md-12">
                <h1>Formulario de registro</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="../clases/insertarRegistro.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Ingrese su R.U.T</h6>
                                <input type="text" class="form-control" name="run" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Ingrese su nombre</h6>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Ingrese su apellido</h6>
                                <input type="text" class="form-control" name="apellido" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Ingrese su telefono</h6>
                                <input type="text" class="form-control" name="telefono" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Ingrese su direccion</h6>
                                <input type="text" class="form-control" name="direccion" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Ingrese la constraseña</h6>
                                <input type="text" class="form-control" name="constrasena" required>
                            </div>
                            <div class="form-check" style="margin:4px 8px 0px 12px">
                                <input class="form-check-input" type="checkbox" value="Acepto las politicas y condiciones" name="politica" id="politica" required>
                                <label class="form-check-label" for="flexCheckIndeterminate" style="margin: 0px 0px 0px 3px" required>
                                    Acepta las condiciones y politicas de uso
                                </label>
                            </div>
                        </div>
                        <div>
                            <br>
                        </div>
                        <button type="submit" name="registrar" class="btn btn-success">Registrarme</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>